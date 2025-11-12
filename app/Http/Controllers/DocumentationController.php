<?php

namespace App\Http\Controllers;

use App\Services\DocumentationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function __construct(
        protected DocumentationService $docs
    ) {}

    public function index(): View
    {
        $navigation = $this->docs->getNavigation();
        $document = $this->docs->getDocument('index');

        return view('docs.index', [
            'navigation' => $navigation,
            'document' => $document,
        ]);
    }

    public function show(Request $request, string $path): View
    {
        $navigation = $this->docs->getNavigation();
        $document = $this->docs->getDocument($path);

        if (! $document) {
            abort(404, 'Documentation page not found');
        }

        return view('docs.show', [
            'navigation' => $navigation,
            'document' => $document,
        ]);
    }

    public function search(Request $request): JsonResponse
    {
        $query = $request->input('q', '');

        if (strlen($query) < 2) {
            return response()->json([]);
        }

        try {
            // Use Meilisearch client directly for highlighting support
            $client = app(\Meilisearch\Client::class);
            $index = $client->index('documentation');

            $searchResults = $index->search($query, [
                'attributesToHighlight' => ['title', 'content'],
                'highlightPreTag' => '<mark>',
                'highlightPostTag' => '</mark>',
                'limit' => 20,
            ]);

            $results = collect($searchResults->getHits())
                ->map(function ($hit) use ($query) {
                    // Use the slug field from Meilisearch
                    $slug = $hit['slug'];

                    // Get highlighted content if available
                    $formatted = $hit['_formatted'] ?? [];
                    $highlightedContent = $formatted['content'] ?? $hit['content'];

                    // Generate excerpt from highlighted content
                    $excerpt = $this->generateHighlightedExcerpt($highlightedContent, $query);

                    return [
                        'title' => $formatted['title'] ?? $hit['title'], // Use highlighted title
                        'slug' => $slug,
                        'excerpt' => $excerpt,
                        'category' => $hit['category'] ?? 'General',
                    ];
                })
                ->filter()
                ->values()
                ->toArray();

            return response()->json($results);
        } catch (\Exception $e) {
            // Fallback to original search if Meilisearch fails
            $results = $this->docs->searchDocuments($query);

            return response()->json($results);
        }
    }

    /**
     * Generate an excerpt from highlighted content with query context.
     */
    protected function generateHighlightedExcerpt(string $content, string $query, int $length = 200): string
    {
        // Find position of first <mark> tag to center excerpt around match
        $markPos = stripos($content, '<mark>');

        if ($markPos === false) {
            // No highlight found, use beginning of content
            return \Illuminate\Support\Str::limit(strip_tags($content), $length);
        }

        // Extract excerpt around the highlighted match
        $start = max(0, $markPos - 75);
        $excerpt = substr($content, $start, $length);

        // Ensure we don't cut off in the middle of a <mark> tag
        if ($start > 0 && substr($excerpt, 0, 6) !== '<mark>') {
            // Find the start of content (not in the middle of a tag)
            $firstTag = strpos($excerpt, '<');
            if ($firstTag !== false && $firstTag < 10) {
                $excerpt = substr($excerpt, $firstTag);
            }
        }

        return ($start > 0 ? '...' : '').$excerpt.'...';
    }
}
