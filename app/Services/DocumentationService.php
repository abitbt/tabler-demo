<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
use League\CommonMark\MarkdownConverter;

class DocumentationService
{
    protected MarkdownConverter $converter;

    protected string $docsPath;

    public function __construct()
    {
        $this->docsPath = base_path('tabler-blade/docs/components');
        $this->converter = $this->createConverter();
    }

    protected function createConverter(): MarkdownConverter
    {
        $config = [
            'heading_permalink' => config('markdown.heading_permalink'),
            'commonmark' => config('markdown.commonmark'),
        ];

        $environment = new Environment($config);
        $environment->addExtension(new CommonMarkCoreExtension);
        $environment->addExtension(new GithubFlavoredMarkdownExtension);
        $environment->addExtension(new HeadingPermalinkExtension);

        return new MarkdownConverter($environment);
    }

    public function getNavigation(): array
    {
        return Cache::remember('docs.navigation', 3600, function () {
            return $this->buildNavigation($this->docsPath);
        });
    }

    protected function buildNavigation(string $path, string $prefix = ''): array
    {
        $navigation = [];

        if (! File::isDirectory($path)) {
            return $navigation;
        }

        $items = collect(File::files($path))
            ->merge(File::directories($path))
            ->sortBy(function ($item) {
                // Sort directories first, then files
                return (is_dir($item) ? '0_' : '1_').basename($item);
            });

        foreach ($items as $item) {
            // Convert SplFileInfo to string path
            $itemPath = (string) $item;
            $basename = basename($itemPath);

            if (is_dir($itemPath)) {
                // Handle subdirectories
                $slug = Str::slug($basename);
                $fullPath = $prefix ? "{$prefix}/{$slug}" : $slug;

                $navigation[] = [
                    'type' => 'directory',
                    'title' => $this->formatTitle($basename),
                    'slug' => $fullPath,
                    'children' => $this->buildNavigation($itemPath, $fullPath),
                ];
            } elseif (pathinfo($itemPath, PATHINFO_EXTENSION) === 'md') {
                // Handle markdown files
                $slug = Str::slug(pathinfo($basename, PATHINFO_FILENAME));
                $fullPath = $prefix ? "{$prefix}/{$slug}" : $slug;

                // Skip index files in navigation (they're landing pages)
                if ($slug === 'index') {
                    continue;
                }

                $navigation[] = [
                    'type' => 'file',
                    'title' => $this->formatTitle(pathinfo($basename, PATHINFO_FILENAME)),
                    'slug' => $fullPath,
                    'path' => $itemPath,
                ];
            }
        }

        return $navigation;
    }

    public function getDocument(string $slug): ?array
    {
        return Cache::remember("docs.{$slug}", 3600, function () use ($slug) {
            $filePath = $this->resolveFilePath($slug);

            if (! $filePath || ! File::exists($filePath)) {
                return null;
            }

            $content = File::get($filePath);

            return [
                'slug' => $slug,
                'title' => $this->extractTitle($content, $slug),
                'content' => $this->parseMarkdown($content),
                'raw' => $content,
                'toc' => $this->extractTableOfContents($content),
                'updated_at' => File::lastModified($filePath),
            ];
        });
    }

    protected function resolveFilePath(string $slug): ?string
    {
        // Try exact match
        $path = $this->docsPath.'/'.str_replace('-', '-', $slug).'.md';
        if (File::exists($path)) {
            return $path;
        }

        // Try with underscores
        $path = $this->docsPath.'/'.str_replace('-', '_', $slug).'.md';
        if (File::exists($path)) {
            return $path;
        }

        // Try nested paths
        $segments = explode('/', $slug);
        $path = $this->docsPath.'/'.implode('/', $segments).'.md';
        if (File::exists($path)) {
            return $path;
        }

        return null;
    }

    protected function parseMarkdown(string $content): string
    {
        // Remove [TOC] placeholder - we display TOC in sidebar instead
        $content = str_replace('[TOC]', '', $content);

        // Handle custom preview blocks
        $content = $this->handlePreviewBlocks($content);

        return $this->converter->convert($content)->getContent();
    }

    protected function handlePreviewBlocks(string $content): string
    {
        // Replace :::preview blocks with custom HTML
        $pattern = '/:::preview\s+(.*?)\s+:::/s';

        return preg_replace_callback($pattern, function ($matches) {
            $code = trim($matches[1]);

            return <<<HTML
<div class="component-preview card">
    <div class="card-header">
        <h4 class="card-title">Preview</h4>
    </div>
    <div class="card-body">
        <div class="preview-output">
            {$code}
        </div>
    </div>
    <div class="card-footer">
        <details>
            <summary>View Code</summary>
            <pre><code class="language-blade">{$code}</code></pre>
        </details>
    </div>
</div>
HTML;
        }, $content);
    }

    protected function extractTitle(string $content, string $fallback): string
    {
        // Extract first H1 heading
        if (preg_match('/^#\s+(.+)$/m', $content, $matches)) {
            return trim($matches[1]);
        }

        return $this->formatTitle($fallback);
    }

    protected function extractTableOfContents(string $content): array
    {
        $toc = [];
        $lines = explode("\n", $content);

        foreach ($lines as $line) {
            if (preg_match('/^(#{2,4})\s+(.+)$/', $line, $matches)) {
                $level = strlen($matches[1]);
                $title = trim($matches[2]);
                $slug = Str::slug($title);

                $toc[] = [
                    'level' => $level,
                    'title' => $title,
                    'slug' => $slug,
                ];
            }
        }

        return $toc;
    }

    protected function formatTitle(string $title): string
    {
        // Convert kebab-case or snake_case to Title Case
        return Str::title(str_replace(['-', '_'], ' ', $title));
    }

    public function clearCache(): void
    {
        Cache::forget('docs.navigation');

        // Clear all document caches
        $navigation = $this->buildNavigation($this->docsPath);
        $this->clearNavigationCache($navigation);
    }

    protected function clearNavigationCache(array $navigation): void
    {
        foreach ($navigation as $item) {
            if ($item['type'] === 'file') {
                Cache::forget("docs.{$item['slug']}");
            } elseif ($item['type'] === 'directory' && ! empty($item['children'])) {
                $this->clearNavigationCache($item['children']);
            }
        }
    }

    public function searchDocuments(string $query): array
    {
        $results = [];
        $query = strtolower($query);

        $navigation = $this->getNavigation();
        $this->searchNavigationRecursive($navigation, $query, $results, '');

        return $results;
    }

    protected function searchNavigationRecursive(array $navigation, string $query, array &$results, string $category = ''): void
    {
        foreach ($navigation as $item) {
            if ($item['type'] === 'file') {
                $document = $this->getDocument($item['slug']);

                if ($document && (
                    str_contains(strtolower($document['title']), $query) ||
                    str_contains(strtolower($document['raw']), $query)
                )) {
                    $results[] = [
                        'title' => $document['title'],
                        'slug' => $document['slug'],
                        'excerpt' => $this->getExcerpt($document['raw'], $query),
                        'category' => $category ?: $this->getCategoryFromSlug($document['slug']),
                    ];
                }
            } elseif ($item['type'] === 'directory' && ! empty($item['children'])) {
                $dirCategory = $item['title'];
                $this->searchNavigationRecursive($item['children'], $query, $results, $dirCategory);
            }
        }
    }

    protected function getCategoryFromSlug(string $slug): string
    {
        $parts = explode('/', $slug);

        if (count($parts) > 1) {
            return Str::title(str_replace('-', ' ', $parts[0]));
        }

        return 'General';
    }

    protected function getExcerpt(string $content, string $query, int $length = 150): string
    {
        $content = strip_tags($content);
        $position = stripos($content, $query);

        if ($position === false) {
            return Str::limit($content, $length);
        }

        $start = max(0, $position - 50);
        $excerpt = substr($content, $start, $length);

        return ($start > 0 ? '...' : '').$excerpt.'...';
    }
}
