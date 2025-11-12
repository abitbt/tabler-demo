<?php

use App\Services\DocumentationService;
use Illuminate\Support\Facades\Cache;

beforeEach(function () {
    // Use array drivers for tests to avoid database dependencies
    config(['cache.default' => 'array']);
    config(['session.driver' => 'array']);
    Cache::flush();
});

test('documentation index page loads successfully', function () {
    $response = $this->get('/docs');

    $response->assertStatus(200);
    $response->assertViewIs('docs.index');
    $response->assertViewHas('navigation');
});

test('documentation index displays all available components', function () {
    $response = $this->get('/docs');

    $response->assertStatus(200);
    $response->assertSee('Documentation');
    $response->assertSeeText('Tabler Blade Components');
});

test('individual documentation page loads successfully', function () {
    $response = $this->get('/docs/button');

    $response->assertStatus(200);
    $response->assertViewIs('docs.show');
    $response->assertViewHas('document');
    $response->assertViewHas('navigation');
});

test('individual documentation page displays correct content', function () {
    $response = $this->get('/docs/button');

    $response->assertStatus(200);
    $response->assertSee('Button');
    $response->assertSee('Documentation');
});

test('nested documentation page loads successfully', function () {
    $response = $this->get('/docs/forms/input');

    $response->assertStatus(200);
    $response->assertViewIs('docs.show');
    $response->assertSee('Input');
    $response->assertSee('Forms');
});

test('documentation page returns 404 for non-existent pages', function () {
    $response = $this->get('/docs/nonexistent-component');

    $response->assertStatus(404);
});

test('documentation service builds navigation correctly', function () {
    $service = app(DocumentationService::class);
    $navigation = $service->getNavigation();

    expect($navigation)->toBeArray();
    expect($navigation)->not->toBeEmpty();

    // Check for expected structure
    foreach ($navigation as $item) {
        expect($item)->toHaveKeys(['type', 'title', 'slug']);

        if ($item['type'] === 'directory') {
            expect($item)->toHaveKey('children');
            expect($item['children'])->toBeArray();
        } else {
            expect($item)->toHaveKey('path');
        }
    }
});

test('documentation service parses markdown correctly', function () {
    $service = app(DocumentationService::class);
    $document = $service->getDocument('button');

    expect($document)->toBeArray();
    expect($document)->toHaveKeys(['slug', 'title', 'content', 'raw', 'toc', 'updated_at']);
    expect($document['title'])->toBe('Button');
    expect($document['content'])->toContain('<h');
    expect($document['toc'])->toBeArray();
});

test('documentation service handles nested paths correctly', function () {
    $service = app(DocumentationService::class);
    $document = $service->getDocument('forms/input');

    expect($document)->toBeArray();
    expect($document['slug'])->toBe('forms/input');
    expect($document['title'])->not->toBeEmpty();
});

test('documentation service returns null for non-existent documents', function () {
    $service = app(DocumentationService::class);
    $document = $service->getDocument('nonexistent-page');

    expect($document)->toBeNull();
});

test('documentation service caches navigation', function () {
    $service = app(DocumentationService::class);

    // Clear cache first
    $service->clearCache();

    // First call
    $start = microtime(true);
    $nav1 = $service->getNavigation();
    $time1 = microtime(true) - $start;

    // Second call (should be faster due to cache)
    $start = microtime(true);
    $nav2 = $service->getNavigation();
    $time2 = microtime(true) - $start;

    expect($time2)->toBeLessThan($time1);
    expect(count($nav1))->toBe(count($nav2));
});

test('documentation service search finds relevant documents', function () {
    $service = app(DocumentationService::class);
    $results = $service->searchDocuments('input');

    expect($results)->toBeArray();
    expect($results)->not->toBeEmpty();

    foreach ($results as $result) {
        expect($result)->toHaveKeys(['title', 'slug', 'excerpt']);
    }
});

test('documentation assets are built correctly', function () {
    expect(file_exists(public_path('build/manifest.json')))->toBeTrue();

    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);

    expect($manifest)->toHaveKey('resources/scss/docs.scss');
    expect($manifest['resources/scss/docs.scss'])->toHaveKey('file');
});

test('documentation views compile without errors', function () {
    $views = [
        'docs.layout',
        'docs.index',
        'docs.show',
        'docs.partials.sidebar',
        'docs.partials.toc',
    ];

    foreach ($views as $view) {
        expect(view()->exists($view))->toBeTrue("View {$view} does not exist");
    }
});
