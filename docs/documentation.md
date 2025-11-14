# Documentation Strategy: Demos as Comprehensive Documentation

> How demo pages serve as comprehensive, searchable documentation for Tabler-Blade components

**Status:** Implementation Planned
**Approach:** Unified System - Demos ARE the Documentation
**Last Updated:** 2025-01-14

---

## Table of Contents

- [Overview](#overview)
- [Current State Analysis](#current-state-analysis)
- [Chosen Approach: Unified System](#chosen-approach-unified-system)
- [Architecture](#architecture)
- [Industry Research Summary](#industry-research-summary)
- [Implementation Phases](#implementation-phases)
- [Technical Implementation](#technical-implementation)
- [Content Organization](#content-organization)
- [Developer Guidelines](#developer-guidelines)
- [Before & After Comparison](#before--after-comparison)
- [Appendix: Research Findings](#appendix-research-findings)

---

## Overview

### The Problem

Tabler-demo has two separate systems:

1. **Demo Pages** (`/demo/*`) - Comprehensive, self-contained component showcases with live examples, props documentation, CSS classes, and usage notes
2. **Documentation System** (`/docs/*`) - Markdown-based documentation infrastructure with Meilisearch search, sidebar navigation, and TOC generation

These systems exist independently, creating:
- **Discoverability issues** - Users can't search demo content
- **Navigation gaps** - No easy way to browse between components
- **Duplication risk** - Maintaining both systems leads to sync issues
- **Missed opportunity** - Demo pages already ARE comprehensive documentation

### The Solution

**Make demo pages the single source of truth for component documentation** by adding:
- Enhanced layout with sidebar navigation and table of contents
- Meilisearch integration for powerful search
- Unified URL structure at `/components/*`
- Component browser homepage
- Related components and cross-linking

### Key Insight

Your demo pages are **already excellent documentation** - they include:
- ✅ Live visual examples
- ✅ Code snippets for every variation
- ✅ Complete props reference tables
- ✅ CSS classes documentation
- ✅ Usage notes and best practices
- ✅ Accessibility guidelines
- ✅ Progressive complexity organization

They just need to be **discoverable and navigable** like traditional documentation.

---

## Current State Analysis

### Demo Pages Strengths

**Excellent Content Structure:**
```blade
{{-- Each demo page contains: --}}
1. Header comment block (component info)
2. Progressive examples (basic → advanced)
3. Props Reference table (type, default, description)
4. Available CSS Classes table
5. Usage Notes section
6. Accessibility section
7. Live interactive examples
8. Copy-paste ready code snippets
```

**Self-Documenting Format:**
- Every component variation is demonstrated
- Real-world use cases shown
- Complete API documentation included
- Styling options clearly presented

**Current Limitations:**
- ❌ No search functionality
- ❌ Basic navbar only (no sidebar navigation)
- ❌ No table of contents
- ❌ Not indexed by Meilisearch
- ❌ Isolated from each other (no related components)
- ❌ URL structure suggests "demos" not "docs"

### Documentation System Strengths

**Powerful Infrastructure:**
```php
// DocumentationService.php
- Markdown parsing (CommonMark + GFM + HeadingPermalink)
- Hierarchical navigation from folder structure
- Table of contents extraction
- Custom preview blocks support
- Caching system

// Documentation Model
- Laravel Scout integration
- Meilisearch indexing
- Searchable: title, content, category, headings
- Search with highlighting and excerpts
```

**Search Features:**
- Real-time search with highlighting
- Keyboard shortcut (Ctrl+K)
- Category filtering
- Excerpt generation with match context

**Current Limitations:**
- ❌ No content (markdown docs are empty)
- ❌ Separate from demos
- ❌ Would require duplicating demo content

---

## Chosen Approach: Unified System

### Philosophy

**Demos ARE the documentation.** Instead of maintaining two systems, enhance demo pages with documentation-level navigation, search, and discoverability features.

### Core Principles

1. **Single Source of Truth** - Demo pages contain all component documentation
2. **No Duplication** - Don't maintain separate markdown docs
3. **Progressive Enhancement** - Build on existing excellent demo structure
4. **Search First** - Make all content instantly findable
5. **Easy Navigation** - Browse components like traditional docs

### Why This Approach?

**Advantages:**
- ✅ Demo pages already contain comprehensive documentation
- ✅ Live examples are more valuable than static docs
- ✅ No sync issues between demos and docs
- ✅ Faster to maintain (single system)
- ✅ Better developer experience (see AND use components)
- ✅ Leverages existing Meilisearch infrastructure
- ✅ Aligns with successful libraries (Mary UI, BladewindUI)

**Vs. Other Approaches:**

| Approach | Pros | Cons |
|----------|------|------|
| **Unified System** ✅ | Single source, no duplication, live examples | Requires layout changes |
| Separate Systems | Traditional structure | Duplication, sync issues |
| Auto-generated Docs | Best of both worlds | Complex sync mechanism |
| Hybrid System | Flexibility | Maintains two systems |

---

## Architecture

### URL Structure

**New Unified Structure:**
```
/components                  → Component browser homepage
/components/alert           → Alert component demo & docs
/components/button          → Button component demo & docs
/components/badge           → Badge component demo & docs
/components/forms           → Forms component demo & docs
...

/demo/alert                 → Redirect to /components/alert (backward compatibility)
/demo/button                → Redirect to /components/button
```

**Route Definition:**
```php
// routes/web.php
Route::get('/components', [ComponentController::class, 'index'])->name('components.index');
Route::get('/components/{component}', [ComponentController::class, 'show'])->name('components.show');

// Backward compatibility redirects
Route::permanentRedirect('/demo/{component}', '/components/{component}');
```

### Layout Structure

**Enhanced 3-Column Layout:**
```blade
{{-- resources/views/layouts/demo.blade.php --}}
@extends('tabler::layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row">
            {{-- Left Sidebar: Component Navigator --}}
            <div class="col-lg-3 d-none d-lg-block">
                @include('partials.component-nav')
            </div>

            {{-- Center: Demo Content --}}
            <div class="col-lg-6">
                @yield('demo-content')
            </div>

            {{-- Right Sidebar: On This Page TOC --}}
            <div class="col-lg-3 d-none d-lg-block">
                @include('partials.demo-toc')
            </div>
        </div>
    </div>
@endsection
```

### Navigation System

**Component Navigator (Left Sidebar):**
```
Components
├─ Feedback
│  ├─ Alert
│  ├─ Toasts
│  ├─ Spinner
│  └─ Progress
├─ Forms
│  ├─ Button
│  ├─ Input
│  ├─ Select
│  └─ Checkbox
├─ Data Display
│  ├─ Badge
│  ├─ Cards
│  └─ Tables
└─ ...
```

**Table of Contents (Right Sidebar):**
```
On This Page
├─ Basic Usage
├─ Variations
├─ With Icons
├─ States
├─ Props Reference
└─ Available CSS Classes
```

### Search Architecture

**Meilisearch Integration:**
```
Demo Pages (Blade files)
    ↓
DemoPage Model (Virtual)
    ↓
Scout Indexer
    ↓
Meilisearch Index
    ↓
Search API
    ↓
Global Search Bar
```

**Searchable Content:**
- Component title and description
- Props (name, type, description)
- CSS classes (name, description)
- Code examples
- Usage notes
- Accessibility guidelines

---

## Industry Research Summary

### Research Scope

Analyzed 8+ popular Laravel component libraries:
- Mary UI
- WireUI
- BladewindUI
- TallStackUI
- Blade UI Kit
- Filament
- Flowbite
- TallCraftUI

### Key Findings

**What Works Best:**

1. **Live Interactive Demos** (Mary UI, WireUI, BladewindUI)
   - Components users can actually interact with
   - Code alongside examples for immediate copy-paste
   - "Learn by doing" philosophy

2. **Progressive Complexity** (Universal)
   - All libraries organize content from simple → advanced
   - Basic usage → Variations → States → Advanced patterns

3. **Powerful Search** (Mary UI, WireUI)
   - Keyboard shortcuts (⌘+K, ⌘+G)
   - Real-time results with highlighting
   - Search across all components and props

4. **Formal API Tables** (WireUI, BladewindUI)
   - Property | Type | Default | Description
   - Clear reference documentation
   - Easy to scan and find specific props

### Documentation Approaches

**Approach A: Interactive Demo Sites**
- Mary UI, WireUI, BladewindUI
- Live, functional components on the page
- Real Livewire interactions
- 4 full demo applications (Mary UI)

**Approach B: Traditional Documentation**
- Filament, TallStackUI
- Structured reference pages
- Comprehensive API tables
- Hierarchical navigation

### Tabler-Blade's Unique Strengths

Based on research, Tabler-Blade already excels at:

1. **Minimal Props Philosophy** ⭐
   - Unique approach emphasizing CSS flexibility
   - Props only for behavior, CSS for styling
   - Separate Props and CSS Classes documentation

2. **Accessibility Focus** ⭐
   - Industry gap we're filling
   - None of the researched libraries document accessibility well
   - ARIA, keyboard navigation, screen reader support

3. **Comprehensive Usage Notes** ⭐
   - More detailed than most libraries
   - Real-world tips and best practices
   - Side effects and special behaviors documented

### Competitive Comparison

| Feature | Tabler-Blade | Mary UI | WireUI | BladewindUI | TallStackUI |
|---------|--------------|---------|---------|-------------|-------------|
| Progressive Complexity | ✅ | ✅ | ✅ | ✅ | ✅ |
| Formal API Table | ✅ | ❌ | ✅ | ✅ | ❌ |
| Separate Props/CSS Docs | ✅ | ❌ | ❌ | ❌ | ❌ |
| Accessibility Docs | ✅ | ❌ | ❌ | ❌ | ❌ |
| Live Interactive Demos | ✅ | ✅✅✅ | ✅ | ✅✅ | ❌ |
| **Search Integration** | 🔄 Planned | ✅ | ✅ | ✅ | ✅ |
| **Component Navigator** | 🔄 Planned | ✅ | ✅ | ✅ | ✅ |
| Copy Buttons | 🔄 Planned | ✅ | ✅ | ✅ | ✅ |
| Showcase Apps | 🔄 Future | ✅✅✅ | ❌ | ✅✅ | ❌ |

**Conclusion:** Tabler-Blade's content quality is excellent. The gap is in discoverability features (search, navigation), which this strategy addresses.

---

## Implementation Phases

### Phase 1: Enhanced Demo Layout (Sidebar + TOC)

**Goal:** Add documentation-style navigation to demo pages

**Tasks:**
1. Create `resources/views/layouts/demo.blade.php` with 3-column structure
2. Create `resources/views/partials/component-nav.blade.php` (left sidebar)
3. Create `resources/views/partials/demo-toc.blade.php` (right sidebar)
4. Create component metadata system (categories, icons, descriptions)
5. Implement TOC extraction from demo Blade files
6. Update existing demo pages to use new layout

**Deliverables:**
- Enhanced layout with sidebar navigation
- Automatic TOC generation
- Component categorization system

**Estimated Time:** 2-3 hours

---

### Phase 2: Unified URL Structure at `/components/*`

**Goal:** Clean, intuitive URLs that reflect documentation purpose

**Tasks:**
1. Create `ComponentController` with `index()` and `show()` methods
2. Add routes for `/components` and `/components/{component}`
3. Add permanent redirects from `/demo/*` to `/components/*`
4. Update all internal links to use new routes
5. Add breadcrumb navigation
6. Update sitemap and meta tags

**Deliverables:**
- `/components/*` routes active
- Backward compatible redirects
- Updated navigation links

**Estimated Time:** 1 hour

---

### Phase 3: Meilisearch Search Integration

**Goal:** Make all demo content searchable with powerful search UI

**Tasks:**
1. Create `app/Models/DemoPage.php` with Scout's `Searchable` trait
2. Implement Blade file parser to extract searchable content
3. Create indexer: `php artisan demos:index`
4. Add search API endpoint: `/api/search/components`
5. Add global search bar to navbar
6. Implement search results UI with highlighting
7. Add keyboard shortcuts (/, Ctrl+K)

**Deliverables:**
- All demos indexed in Meilisearch
- Global search bar with autocomplete
- Keyboard shortcuts active
- Search results with excerpts and highlighting

**Estimated Time:** 2-3 hours

---

### Phase 4: Component Browser Homepage

**Goal:** Create discoverable entry point at `/components`

**Tasks:**
1. Create `resources/views/components/index.blade.php`
2. Design component grid with categories
3. Add prominent search bar at top
4. Create component cards (icon, title, description, link)
5. Add category filtering
6. Implement responsive design

**Deliverables:**
- Component browser homepage
- Categorized component grid
- Quick search interface
- Mobile-responsive layout

**Estimated Time:** 1-2 hours

---

### Phase 5: Enhanced Features

**Goal:** Add polish and quality-of-life improvements

**Tasks:**
1. Add "Related Components" section to each demo
2. Implement copy buttons for code snippets (Alpine.js)
3. Add anchor links to TOC items
4. Create component relationship mapping
5. Add "Edit on GitHub" links
6. Implement keyboard navigation improvements
7. Add social meta tags for better sharing

**Deliverables:**
- Copy buttons on all code snippets
- Related components section
- Anchor link navigation
- Social sharing optimization

**Estimated Time:** 1-2 hours

---

### Total Estimated Effort

**7-11 hours of development** spread across 5 phases, with each phase delivering working features before moving to the next.

---

## Technical Implementation

### Component Metadata System

**Purpose:** Centralized component information for navigation, search, and organization

**Implementation:**
```php
// app/Services/ComponentMetadata.php
class ComponentMetadata
{
    protected array $components = [
        'alert' => [
            'title' => 'Alert',
            'description' => 'Display important messages to users',
            'icon' => 'alert-circle',
            'category' => 'Feedback',
            'tags' => ['message', 'notification', 'feedback'],
            'related' => ['badge', 'toasts', 'modals'],
        ],
        'button' => [
            'title' => 'Button',
            'description' => 'Trigger actions and events',
            'icon' => 'click',
            'category' => 'Forms',
            'tags' => ['action', 'submit', 'interactive'],
            'related' => ['badge', 'spinner', 'forms'],
        ],
        // ... more components
    ];

    public function all(): Collection
    {
        return collect($this->components);
    }

    public function get(string $slug): ?array
    {
        return $this->components[$slug] ?? null;
    }

    public function byCategory(): Collection
    {
        return $this->all()->groupBy('category');
    }
}
```

**Categories:**
```php
protected array $categories = [
    'Feedback' => ['alert', 'toasts', 'spinner', 'progress'],
    'Forms' => ['button', 'input', 'select', 'checkbox', 'radio', 'switch', 'textarea'],
    'Data Display' => ['badge', 'cards', 'tables', 'tag', 'avatar'],
    'Navigation' => ['tabs', 'pagination', 'breadcrumb', 'steps'],
    'Overlay' => ['modals', 'offcanvas', 'dropdown', 'tooltip'],
    'Layout' => ['divider', 'hr', 'empty', 'status'],
];
```

---

### DemoPage Model (Searchable)

**Purpose:** Virtual model representing demo pages for Meilisearch indexing

**Implementation:**
```php
// app/Models/DemoPage.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class DemoPage extends Model
{
    use Searchable;

    // Virtual model - doesn't use database
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'slug';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'content',
        'props',
        'css_classes',
        'examples',
        'category',
        'tags',
    ];

    public $timestamps = false;

    /**
     * Load all demo pages from Blade files
     */
    public static function all($columns = ['*'])
    {
        $metadata = app(ComponentMetadata::class);
        $parser = app(DemoParser::class);

        return $metadata->all()->map(function ($meta, $slug) use ($parser) {
            $demo = new static(['slug' => $slug] + $meta);
            $demo->content = $parser->extractContent($slug);
            $demo->props = $parser->extractProps($slug);
            $demo->css_classes = $parser->extractCssClasses($slug);
            $demo->examples = $parser->extractExamples($slug);
            return $demo;
        });
    }

    /**
     * Get the indexable data array for Meilisearch
     */
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->slug,
            'slug' => $this->slug,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'tags' => $this->tags,
            'content' => $this->stripHtml($this->content),
            'props' => $this->props,
            'css_classes' => $this->css_classes,
            'examples' => $this->examples,
        ];
    }

    /**
     * Get the name of the index for Meilisearch
     */
    public function searchableAs(): string
    {
        return 'demo_pages';
    }

    /**
     * Prevent database operations
     */
    public function save(array $options = [])
    {
        throw new \Exception('DemoPage is a virtual model and cannot be saved to database');
    }
}
```

---

### DemoParser Service

**Purpose:** Extract searchable content from demo Blade files

**Implementation:**
```php
// app/Services/DemoParser.php
class DemoParser
{
    /**
     * Extract text content from demo Blade file
     */
    public function extractContent(string $slug): string
    {
        $path = resource_path("views/demo/{$slug}.blade.php");

        if (!file_exists($path)) {
            return '';
        }

        $content = file_get_contents($path);

        // Extract card titles and subtitles (section markers)
        preg_match_all('/<x-slot:title>([^<]+)<\/x-slot>/', $content, $titles);
        preg_match_all('/<x-slot:subtitle>([^<]+)<\/x-slot>/', $content, $subtitles);

        return implode(' ', array_merge($titles[1] ?? [], $subtitles[1] ?? []));
    }

    /**
     * Extract props from Props Reference table
     */
    public function extractProps(string $slug): array
    {
        $path = resource_path("views/demo/{$slug}.blade.php");
        $content = file_get_contents($path);

        // Find props table rows
        preg_match_all(
            '/<td><code>([^<]+)<\/code><\/td>.*?<td>([^<]+)<\/td>/s',
            $content,
            $matches,
            PREG_SET_ORDER
        );

        return collect($matches)->mapWithKeys(function ($match) {
            return [$match[1] => strip_tags($match[2])];
        })->toArray();
    }

    /**
     * Extract CSS classes from Available CSS Classes table
     */
    public function extractCssClasses(string $slug): array
    {
        // Similar to extractProps but for CSS classes section
    }

    /**
     * Extract code examples
     */
    public function extractExamples(string $slug): array
    {
        $path = resource_path("views/demo/{$slug}.blade.php");
        $content = file_get_contents($path);

        // Find all <pre><code> blocks
        preg_match_all('/<pre[^>]*><code>([^<]+)<\/code><\/pre>/', $content, $matches);

        return $matches[1] ?? [];
    }
}
```

---

### TOC Extraction

**Purpose:** Automatically generate "On This Page" table of contents from demo structure

**Implementation:**
```php
// app/Services/DemoTableOfContents.php
class DemoTableOfContents
{
    /**
     * Extract TOC from demo Blade file
     */
    public function extract(string $slug): array
    {
        $path = resource_path("views/demo/{$slug}.blade.php");

        if (!file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);
        $toc = [];

        // Extract all card titles (these are section markers)
        preg_match_all('/<x-slot:title>([^<]+)<\/x-slot>/', $content, $matches);

        foreach ($matches[1] as $title) {
            $toc[] = [
                'title' => trim($title),
                'slug' => Str::slug($title),
                'level' => 2,
            ];
        }

        return $toc;
    }
}
```

---

### Search API Endpoint

**Purpose:** Provide search results for global search bar

**Implementation:**
```php
// app/Http/Controllers/Api/SearchController.php
class SearchController extends Controller
{
    public function components(Request $request)
    {
        $query = $request->input('q');

        if (empty($query)) {
            return response()->json(['results' => []]);
        }

        $results = DemoPage::search($query)
            ->take(10)
            ->get()
            ->map(function ($demo) use ($query) {
                return [
                    'title' => $demo->title,
                    'description' => $demo->description,
                    'category' => $demo->category,
                    'url' => route('components.show', $demo->slug),
                    'excerpt' => $this->generateExcerpt($demo, $query),
                    'icon' => $demo->icon,
                ];
            });

        return response()->json(['results' => $results]);
    }

    protected function generateExcerpt($demo, $query): string
    {
        // Find context around query match
        // Add highlighting with <mark> tags
        // Return excerpt
    }
}
```

---

### Component Navigator (Sidebar)

**Implementation:**
```blade
{{-- resources/views/partials/component-nav.blade.php --}}
@inject('metadata', 'App\Services\ComponentMetadata')

<div class="card position-sticky top-1">
    <div class="list-group list-group-flush">
        <div class="list-group-item">
            <div class="row align-items-center">
                <div class="col">
                    <div class="fw-bold">Components</div>
                </div>
                <div class="col-auto">
                    <span class="badge">{{ $metadata->all()->count() }}</span>
                </div>
            </div>
        </div>

        @foreach($metadata->byCategory() as $category => $components)
            <div class="list-group-item">
                <div class="text-secondary small text-uppercase fw-bold">
                    {{ $category }}
                </div>
            </div>

            @foreach($components as $component)
                <a href="{{ route('components.show', $component['slug']) }}"
                   class="list-group-item list-group-item-action {{ request()->route('component') === $component['slug'] ? 'active' : '' }}">
                    <div class="d-flex align-items-center">
                        <x-dynamic-component
                            :component="'tabler-' . $component['icon']"
                            class="icon icon-sm me-2" />
                        <div>
                            <div>{{ $component['title'] }}</div>
                            @if(request()->route('component') === $component['slug'])
                                <div class="text-secondary small">
                                    {{ $component['description'] }}
                                </div>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        @endforeach
    </div>
</div>
```

---

### Table of Contents (Sidebar)

**Implementation:**
```blade
{{-- resources/views/partials/demo-toc.blade.php --}}
@inject('tocService', 'App\Services\DemoTableOfContents')

@php
    $toc = $tocService->extract(request()->route('component'));
@endphp

@if(count($toc) > 0)
    <div class="card position-sticky top-1">
        <div class="card-header">
            <h3 class="card-title">On This Page</h3>
        </div>
        <div class="list-group list-group-flush">
            @foreach($toc as $item)
                <a href="#{{ $item['slug'] }}"
                   class="list-group-item list-group-item-action py-2">
                    <div class="text-truncate">
                        {{ $item['title'] }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif
```

---

### Global Search Bar

**Implementation:**
```blade
{{-- Add to resources/views/layouts/app.blade.php navbar --}}
<div class="nav-item" x-data="componentSearch()">
    <div class="input-icon">
        <input
            type="search"
            x-ref="search"
            @keydown.slash.window.prevent="$refs.search.focus()"
            @keydown.ctrl.k.window.prevent="$refs.search.focus()"
            @input.debounce.300ms="search($event.target.value)"
            class="form-control"
            placeholder="Search components..."
            autocomplete="off">
        <span class="input-icon-addon">
            <x-tabler-search class="icon" />
        </span>
        <span class="input-icon-addon-end">
            <kbd class="text-muted">/</kbd>
        </span>
    </div>

    {{-- Search results dropdown --}}
    <div x-show="results.length > 0"
         x-cloak
         class="dropdown-menu show w-100"
         style="position: absolute; top: 100%; left: 0;">
        <template x-for="result in results" :key="result.url">
            <a :href="result.url" class="dropdown-item">
                <div class="d-flex align-items-center">
                    <span class="avatar avatar-sm me-2">
                        <i :class="'ti ti-' + result.icon"></i>
                    </span>
                    <div>
                        <div x-text="result.title"></div>
                        <div class="text-secondary small" x-text="result.category"></div>
                    </div>
                </div>
            </a>
        </template>
    </div>
</div>

<script>
function componentSearch() {
    return {
        results: [],

        async search(query) {
            if (query.length < 2) {
                this.results = [];
                return;
            }

            const response = await fetch(`/api/search/components?q=${encodeURIComponent(query)}`);
            const data = await response.json();
            this.results = data.results;
        }
    }
}
</script>
```

---

## Content Organization

### Component Categories

Organize components into logical groups:

```php
'Feedback' => [
    'alert' => 'Display important messages to users',
    'toasts' => 'Show brief notifications',
    'spinner' => 'Indicate loading state',
    'progress' => 'Show task completion progress',
],

'Forms' => [
    'button' => 'Trigger actions and events',
    'input' => 'Text input fields',
    'select' => 'Dropdown selection',
    'checkbox' => 'Multiple choice options',
    'radio' => 'Single choice options',
    'switch' => 'Toggle switches',
    'textarea' => 'Multi-line text input',
    'color-input' => 'Color picker input',
    'file-input' => 'File upload input',
    'range' => 'Slider input',
],

'Data Display' => [
    'badge' => 'Small status descriptors',
    'cards' => 'Flexible content containers',
    'tables' => 'Tabular data display',
    'tag' => 'Categorization labels',
    'avatar' => 'User profile images',
],

'Navigation' => [
    'tabs' => 'Tab-based navigation',
    'pagination' => 'Page navigation',
    'breadcrumb' => 'Hierarchical navigation',
    'steps' => 'Step-by-step progress',
],

'Overlay' => [
    'modals' => 'Dialog overlays',
    'offcanvas' => 'Sidebar panels',
    'dropdown' => 'Contextual menus',
    'tooltip' => 'Hover information',
],

'Layout' => [
    'divider' => 'Visual separators',
    'hr' => 'Horizontal rules',
    'empty' => 'Empty state placeholders',
    'status' => 'Status indicators',
    'ribbon' => 'Corner ribbons',
],
```

### Related Components Mapping

Define relationships between components:

```php
protected array $relationships = [
    'alert' => ['badge', 'toasts', 'modals', 'button'],
    'button' => ['badge', 'spinner', 'forms', 'modals'],
    'badge' => ['alert', 'button', 'tag', 'status'],
    'forms' => ['button', 'input', 'select', 'checkbox', 'modals', 'alert'],
    'modals' => ['button', 'forms', 'alert', 'offcanvas'],
    'cards' => ['badge', 'button', 'tables', 'image', 'ribbon'],
    // ... more relationships
];
```

**Logic:**
- Components used together (button + badge)
- Similar functionality (alert + toasts)
- Common patterns (forms + modals)
- Same category (input + select)

---

## Developer Guidelines

### Creating New Demo Pages

When creating new component demo pages that serve as documentation:

#### 1. Use Standard Structure

Follow the template in `docs/demo-docs-guidelines.md`:

```blade
{{-- Header comment with component info --}}
@extends('layouts.demo')

@section('demo-content')
    {{-- Progressive examples --}}
    {{-- Props Reference table --}}
    {{-- Available CSS Classes table --}}
    {{-- Usage Notes --}}
    {{-- Accessibility section --}}
@endsection
```

#### 2. Register Component Metadata

Add entry to `ComponentMetadata`:

```php
'your-component' => [
    'title' => 'Your Component',
    'description' => 'Brief description for search and cards',
    'icon' => 'tabler-icon-name', // Without 'tabler-' prefix
    'category' => 'Feedback', // Use existing category
    'tags' => ['tag1', 'tag2', 'tag3'], // For search
    'related' => ['related-component-1', 'related-component-2'],
],
```

#### 3. Optimize for Search

Make content searchable:

- **Clear section titles** - Used for TOC and search
- **Descriptive subtitles** - Provide context
- **Prop descriptions** - Include searchable keywords
- **Usage notes** - Common use cases and terms
- **Code comments** - Help developers understand examples

#### 4. Add Anchor IDs

For TOC navigation:

```blade
<x-tabler::cards.card id="basic-usage">
    <x-tabler::cards.header>
        <x-slot:title>Basic Usage</x-slot>
    </x-tabler::cards.header>
    {{-- Content --}}
</x-tabler::cards.card>
```

The TOC automatically generates slug from title, so `id` should match.

#### 5. Re-index After Changes

After adding or updating demo pages:

```bash
php artisan demos:index
```

This updates Meilisearch with latest content.

---

### Search Optimization Tips

**Make components discoverable:**

1. **Use natural language** in descriptions
2. **Include synonyms** in tags (e.g., button: ['btn', 'action', 'click', 'submit'])
3. **Document all variations** - Each variation is searchable
4. **Add real-world use cases** in usage notes
5. **Use descriptive prop names** that match common terminology

**Example:**
```php
// Good - Searchable terms
'button' => [
    'title' => 'Button',
    'description' => 'Trigger actions, submit forms, navigate',
    'tags' => ['btn', 'action', 'click', 'submit', 'cta', 'interactive'],
],

// Bad - Too generic
'button' => [
    'title' => 'Button',
    'description' => 'A button',
    'tags' => ['button'],
],
```

---

### Navigation Best Practices

**Component Navigator (Left Sidebar):**
- Keep categories concise (5-7 groups)
- Logical grouping (by function, not UI pattern)
- Alphabetical within categories
- Active state for current component

**Table of Contents (Right Sidebar):**
- Automatically generated from card titles
- Max 10-12 items (keep demos focused)
- Use descriptive titles (not "Example 1")
- Anchor links for smooth scrolling

**Related Components:**
- 3-5 related components maximum
- Prioritize most common combinations
- Consider: same category, common patterns, complementary features

---

## Before & After Comparison

### Before: Separate Systems

```
Demo Pages (/demo/*)
├─ Comprehensive content ✅
├─ Live examples ✅
├─ Self-contained ✅
├─ Basic navbar only ❌
├─ No search ❌
├─ No navigation ❌
└─ Not discoverable ❌

Documentation System (/docs/*)
├─ Markdown infrastructure ✅
├─ Meilisearch search ✅
├─ Sidebar navigation ✅
├─ TOC generation ✅
├─ No content ❌
├─ Separate from demos ❌
└─ Duplication risk ❌
```

**Problems:**
- Two systems to maintain
- Demo content not searchable
- Documentation system unused
- Poor discoverability
- Risk of content drift

---

### After: Unified System

```
Component Documentation (/components/*)
├─ Comprehensive content ✅
├─ Live examples ✅
├─ Meilisearch search ✅
├─ Sidebar navigation ✅
├─ Table of contents ✅
├─ Component browser ✅
├─ Related components ✅
├─ Copy buttons ✅
├─ Keyboard shortcuts ✅
└─ Single source of truth ✅
```

**Benefits:**
- ✅ Single system to maintain
- ✅ All content searchable
- ✅ Easy navigation between components
- ✅ Documentation-quality presentation
- ✅ Live examples remain
- ✅ No duplication or drift
- ✅ Better developer experience

---

### Feature Comparison

| Feature | Before | After |
|---------|--------|-------|
| **URL** | `/demo/button` | `/components/button` |
| **Layout** | Basic navbar | 3-column with sidebars |
| **Search** | None | Global + keyboard shortcuts |
| **Navigation** | Home link only | Category navigator + TOC |
| **Discoverability** | Low | High (search + browse) |
| **Related Components** | None | Automatic suggestions |
| **Copy Code** | Manual | One-click buttons |
| **Mobile** | Basic | Responsive sidebars |
| **SEO** | Limited | Optimized meta tags |
| **Maintenance** | 2 systems | 1 system |

---

## Appendix: Research Findings

### Mary UI Analysis

**Strengths:**
- 4 full demo applications (Bird, Ping, Flow, Orange, Paper)
- DocSearch integration with ⌘+G shortcut
- Props shown inline in examples
- Real Livewire wire:model examples
- Interactive components

**Approach:**
- Live demos are primary documentation
- No formal API tables (props in examples only)
- "Learn by doing" philosophy

**Lessons for Tabler-Blade:**
- Demos CAN be comprehensive documentation
- Search is critical for discovery
- Real-world applications showcase value

---

### WireUI Analysis

**Strengths:**
- Formal API table (Property | Type | Default | Required)
- 24 color variants systematically shown
- Table of contents with anchor links
- Version switcher (1.x and 2.x)
- Interactive state patterns

**Approach:**
- Traditional documentation with live examples
- Comprehensive reference tables
- Hierarchical navigation

**Lessons for Tabler-Blade:**
- Formal API tables are valuable
- Show all variations systematically
- TOC improves navigation

---

### BladewindUI Analysis

**Strengths:**
- Multi-page interactive demos
- Live rendered examples above code
- API table (Option | Default | Available Values)
- Authentication flow demonstrations
- Dashboard mockups

**Approach:**
- Visual first, documentation second
- Working demos of real interfaces
- Copy-paste focused

**Lessons for Tabler-Blade:**
- Showcase real-world usage
- Interactive demos add value
- Visual examples accelerate understanding

---

### Key Patterns Across All Libraries

**Universal Standards:**
1. Progressive complexity (basic → advanced)
2. Code snippets alongside examples
3. Search integration (most have it)
4. Category-based navigation
5. Keyboard shortcuts for search

**Differentiators:**
- Mary UI: Showcase applications
- WireUI: Comprehensive API tables
- BladewindUI: Interactive demos
- Tabler-Blade: Accessibility + Minimal Props Philosophy

---

## Conclusion

This unified approach transforms Tabler-demo's excellent demo pages into a comprehensive, searchable documentation system. By enhancing layout, adding search, and improving navigation, we achieve:

- **Single source of truth** - Demos ARE the documentation
- **Better discoverability** - Search finds everything
- **Easier maintenance** - No duplication or drift
- **Superior UX** - Navigation + search + live examples
- **Competitive positioning** - Matches or exceeds top libraries

The demo pages already contain world-class documentation content. This strategy makes that content discoverable, navigable, and truly comprehensive.

---

**Next Steps:**

1. Review and approve this strategy
2. Implement Phase 1 (Enhanced Layout)
3. Implement Phase 2 (Unified URLs)
4. Implement Phase 3 (Search Integration)
5. Implement Phase 4 (Component Browser)
6. Implement Phase 5 (Enhanced Features)

Each phase delivers working features, ensuring continuous progress and immediate value.
