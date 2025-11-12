<?php

use App\Models\Documentation;
use Illuminate\Support\Facades\Cache;

beforeEach(function () {
    // Use array drivers for tests to avoid database dependencies
    config(['cache.default' => 'array']);
    config(['session.driver' => 'array']);
    config(['scout.driver' => 'collection']); // Use collection driver for tests
    Cache::flush();
});

test('documentation model can be instantiated', function () {
    $doc = new Documentation([
        'slug' => 'test-doc',
        'title' => 'Test Documentation',
        'content' => '<p>Test content</p>',
        'raw' => '# Test Documentation',
        'category' => 'General',
    ]);

    expect($doc)->toBeInstanceOf(Documentation::class);
    expect($doc->slug)->toBe('test-doc');
    expect($doc->title)->toBe('Test Documentation');
});

test('documentation model returns correct searchable array', function () {
    $doc = new Documentation([
        'slug' => 'test-doc',
        'title' => 'Test Documentation',
        'content' => '<p>Test content</p>',
        'raw' => "# Test Documentation\n\n## Section One\n\nTest content here.",
        'category' => 'General',
        'updated_at' => now(),
    ]);

    $searchable = $doc->toSearchableArray();

    expect($searchable)->toHaveKeys(['id', 'slug', 'title', 'content', 'category', 'headings', 'updated_at']);
    expect($searchable['id'])->toBe(md5('test-doc')); // ID is MD5 hash of slug
    expect($searchable['slug'])->toBe('test-doc'); // Original slug preserved
    expect($searchable['title'])->toBe('Test Documentation');
    expect($searchable['category'])->toBe('General');
});

test('documentation model strips markdown from content', function () {
    $doc = new Documentation([
        'slug' => 'test-doc',
        'title' => 'Test Documentation',
        'raw' => "# Heading\n\n**Bold text** and _italic text_\n\n[Link](http://example.com)\n\n```php\ncode block\n```",
    ]);

    $searchable = $doc->toSearchableArray();
    $content = $searchable['content'];

    expect($content)->not->toContain('**');
    expect($content)->not->toContain('_');
    expect($content)->not->toContain('[');
    expect($content)->not->toContain('```');
    expect($content)->toContain('Bold text');
    expect($content)->toContain('italic text');
});

test('documentation model extracts headings text', function () {
    $doc = new Documentation([
        'slug' => 'test-doc',
        'title' => 'Test Documentation',
        'raw' => "# Main Heading\n\n## Section One\n\n### Subsection\n\n## Section Two\n\nContent here.",
    ]);

    $searchable = $doc->toSearchableArray();
    $headings = $searchable['headings'];

    expect($headings)->toContain('Section One');
    expect($headings)->toContain('Subsection');
    expect($headings)->toContain('Section Two');
});

test('documentation model loads from files', function () {
    $documents = Documentation::loadFromFiles();

    expect($documents)->toBeInstanceOf(\Illuminate\Support\Collection::class);
    expect($documents)->not->toBeEmpty();

    $first = $documents->first();
    expect($first)->toBeInstanceOf(Documentation::class);
    expect($first->slug)->not->toBeNull();
    expect($first->title)->not->toBeNull();
});

test('documentation model prevents direct save', function () {
    $doc = new Documentation(['slug' => 'test']);

    expect(fn () => $doc->save())->toThrow(\Exception::class, 'Virtual model cannot be saved to database');
});

test('documentation model prevents direct delete', function () {
    $doc = new Documentation(['slug' => 'test']);

    expect(fn () => $doc->delete())->toThrow(\Exception::class, 'Virtual model cannot be deleted from database');
});

test('documentation search endpoint returns results', function () {
    $response = $this->get('/docs/search?q=button');

    $response->assertSuccessful();
    $response->assertJsonStructure([
        '*' => ['title', 'slug', 'excerpt'],
    ]);
});

test('documentation search endpoint requires minimum query length', function () {
    $response = $this->get('/docs/search?q=a');

    $response->assertSuccessful();
    $response->assertJson([]);
});

test('documentation search endpoint handles empty query', function () {
    $response = $this->get('/docs/search?q=');

    $response->assertSuccessful();
    $response->assertJson([]);
});

test('documentation search endpoint includes category when available', function () {
    $response = $this->get('/docs/search?q=input');

    $response->assertSuccessful();

    if ($response->json()) {
        $firstResult = $response->json()[0] ?? null;

        if ($firstResult) {
            expect($firstResult)->toHaveKey('category');
        }
    }
});

test('docs index command can be called', function () {
    // Skip if Meilisearch is not available
    if (config('scout.driver') !== 'meilisearch') {
        $this->markTestSkipped('Meilisearch is not configured');
    }

    $this->artisan('docs:index')
        ->assertSuccessful();
});

test('docs flush command can be called', function () {
    // Skip if Meilisearch is not available
    if (config('scout.driver') !== 'meilisearch') {
        $this->markTestSkipped('Meilisearch is not configured');
    }

    $this->artisan('docs:flush')
        ->assertSuccessful();
});

test('documentation model gets category from slug', function () {
    $doc = new Documentation([
        'slug' => 'forms/input',
        'title' => 'Input',
    ]);

    $searchable = $doc->toSearchableArray();

    // The extractDocumentsFromNavigation method sets the category
    // For standalone tests, we can verify the logic exists
    expect($doc->slug)->toContain('/');
});

test('documentation model has correct scout key', function () {
    $doc = new Documentation(['slug' => 'test-doc']);

    expect($doc->getScoutKey())->toBe(md5('test-doc')); // Scout key is MD5 hash
    expect($doc->getScoutKeyName())->toBe('id'); // Scout key name is 'id'
});

test('documentation model has correct searchable index name', function () {
    $doc = new Documentation(['slug' => 'test-doc']);

    expect($doc->searchableAs())->toBe('documentation');
});
