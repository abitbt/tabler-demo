<?php

namespace App\Models;

use App\Services\DocumentationService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Documentation extends Model
{
    use Searchable;

    /**
     * Indicates if the IDs are auto-incrementing.
     */
    public $incrementing = false;

    /**
     * The data type of the auto-incrementing ID.
     */
    protected $keyType = 'string';

    /**
     * The primary key for the model.
     */
    protected $primaryKey = 'slug';

    /**
     * Indicates if the model should be timestamped.
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'slug',
        'title',
        'content',
        'raw',
        'category',
        'headings',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'updated_at' => 'datetime',
    ];

    /**
     * Get the indexable data array for the model.
     */
    public function toSearchableArray(): array
    {
        return [
            'id' => md5($this->slug), // MD5 hash as document ID
            'slug' => $this->slug, // Original slug for linking
            'title' => $this->title,
            'content' => $this->stripMarkdown($this->raw),
            'category' => $this->category,
            'headings' => $this->extractHeadingsText(),
            'updated_at' => $this->updated_at?->timestamp,
        ];
    }

    /**
     * Get the index name for the model.
     */
    public function searchableAs(): string
    {
        return 'documentation';
    }

    /**
     * Get the value used to index the model.
     */
    public function getScoutKey(): mixed
    {
        return md5($this->slug); // Use MD5 hash as Meilisearch document ID
    }

    /**
     * Get the key name used to index the model.
     */
    public function getScoutKeyName(): mixed
    {
        return 'id'; // Scout key name
    }

    /**
     * Prevent saving to database (virtual model).
     */
    public function save(array $options = []): bool
    {
        throw new \Exception('Virtual model cannot be saved to database');
    }

    /**
     * Prevent deleting from database (virtual model).
     */
    public function delete(): ?bool
    {
        throw new \Exception('Virtual model cannot be deleted from database');
    }

    /**
     * Load all documentation from files.
     */
    public static function all($columns = ['*']): Collection
    {
        return static::loadFromFiles();
    }

    /**
     * Load documentation from markdown files.
     */
    public static function loadFromFiles(): Collection
    {
        $service = app(DocumentationService::class);
        $navigation = $service->getNavigation();
        $documents = collect();

        static::extractDocumentsFromNavigation($navigation, $documents, $service);

        return $documents;
    }

    /**
     * Recursively extract documents from navigation tree.
     */
    protected static function extractDocumentsFromNavigation(array $navigation, Collection $documents, DocumentationService $service, string $category = ''): void
    {
        foreach ($navigation as $item) {
            if ($item['type'] === 'file') {
                $document = $service->getDocument($item['slug']);

                if ($document) {
                    $model = new static($document);
                    $model->slug = $document['slug'];
                    $model->category = $category ?: static::getCategoryFromSlug($document['slug']);
                    $model->exists = true;

                    $documents->push($model);
                }
            } elseif ($item['type'] === 'directory' && ! empty($item['children'])) {
                $dirCategory = $item['title'];
                static::extractDocumentsFromNavigation($item['children'], $documents, $service, $dirCategory);
            }
        }
    }

    /**
     * Get category from slug.
     */
    protected static function getCategoryFromSlug(string $slug): string
    {
        $parts = explode('/', $slug);

        if (count($parts) > 1) {
            return Str::title(str_replace('-', ' ', $parts[0]));
        }

        return 'General';
    }

    /**
     * Strip markdown syntax from content.
     */
    protected function stripMarkdown(?string $content): string
    {
        if ($content === null) {
            return '';
        }
        // Remove code blocks
        $content = preg_replace('/```[\s\S]*?```/', '', $content);
        $content = preg_replace('/`[^`]+`/', '', $content);

        // Remove markdown syntax
        $content = preg_replace('/^#{1,6}\s+/m', '', $content); // Headings
        $content = preg_replace('/\*\*([^*]+)\*\*/', '$1', $content); // Bold
        $content = preg_replace('/__([^_]+)__/', '$1', $content); // Bold
        $content = preg_replace('/\*([^*]+)\*/', '$1', $content); // Italic
        $content = preg_replace('/_([^_]+)_/', '$1', $content); // Italic
        $content = preg_replace('/\[([^\]]+)\]\([^)]+\)/', '$1', $content); // Links
        $content = preg_replace('/!\[([^\]]*)\]\([^)]+\)/', '', $content); // Images

        // Remove HTML tags
        $content = strip_tags($content);

        // Remove TOC markers
        $content = str_replace('[TOC]', '', $content);

        // Clean up extra whitespace
        $content = preg_replace('/\n{3,}/', "\n\n", $content);
        $content = trim($content);

        return $content;
    }

    /**
     * Extract headings text for better search relevance.
     */
    protected function extractHeadingsText(): string
    {
        if (! isset($this->raw)) {
            return '';
        }

        $headings = [];
        $lines = explode("\n", $this->raw);

        foreach ($lines as $line) {
            if (preg_match('/^#{2,4}\s+(.+)$/', $line, $matches)) {
                $headings[] = trim($matches[1]);
            }
        }

        return implode(' ', $headings);
    }

    /**
     * Make all models searchable.
     */
    public static function makeAllSearchable(): void
    {
        static::all()->searchable();
    }
}
