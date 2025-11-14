# Laravel Blade Components Reference

> Reference documentation for building Blade components in Laravel 12

## Anonymous vs Class-Based Components

### Class-Based Components
- Full PHP class with logic, constructor parameters, and methods
- Generated via `php artisan make:component Alert`
- Stored in `app/View/Components` directory
- Best for complex components with business logic
- Support conditional rendering via `shouldRender()` method
- Allow dependency injection through constructor

### Anonymous Components
- Single `.blade.php` file in `resources/views/components`
- No associated PHP class
- Created with `php artisan make:component forms.input --view`
- Ideal for simple, presentation-only components
- Use `@props` directive to declare expected data
- Lighter weight for UI-only functionality

### When to Use Each
**Use Class-Based Components when:**
- Complex business logic needed
- Dependency injection required
- Methods need to be called from template
- Conditional rendering logic (shouldRender)

**Use Anonymous Components when:**
- Purely presentational
- No business logic
- Simple prop-based rendering
- UI libraries and design systems

## Component Attributes and Attribute Bags

### The $attributes Variable
The `$attributes` variable contains all HTML attributes passed to a component that aren't explicitly defined as constructor parameters or `@props`.

```blade
{{-- Component usage --}}
<x-button class="mt-4" data-action="submit" id="submit-btn">
    Click Me
</x-button>

{{-- In button.blade.php --}}
<button {{ $attributes }}>
    {{ $slot }}
</button>

{{-- Renders as --}}
<button class="mt-4" data-action="submit" id="submit-btn">
    Click Me
</button>
```

### Merging Attributes

```blade
{{-- Merge with defaults --}}
<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{ $slot }}
</div>

{{-- Usage --}}
<x-alert type="danger" class="mb-4">
    Error occurred
</x-alert>

{{-- Renders --}}
<div class="alert alert-danger mb-4">
    Error occurred
</div>
```

### Conditional Classes

```blade
<div {{ $attributes->class([
    'alert',
    'alert-'.$type,
    'alert-dismissible' => $dismissible,
]) }}>
    {{ $slot }}
</div>
```

### Attribute Filtering

```blade
{{-- Get specific attributes --}}
{{ $attributes->only(['class', 'id']) }}

{{-- Exclude attributes --}}
{{ $attributes->except(['class', 'id']) }}

{{-- Filter by prefix --}}
{{ $attributes->whereStartsWith('data-') }}

{{-- Check existence --}}
@if($attributes->has('disabled'))
    {{-- Component is disabled --}}
@endif

{{-- Filter with closure --}}
{{ $attributes->filter(fn ($value, $key) => $key !== 'type') }}
```

## Slots

### Default Slot
```blade
{{-- Component usage --}}
<x-card>
    This goes into the default $slot
</x-card>

{{-- card.blade.php --}}
<div class="card">
    {{ $slot }}
</div>
```

### Named Slots
```blade
{{-- Component usage --}}
<x-card>
    <x-slot:header>
        <h3>Card Title</h3>
    </x-slot:header>

    Card body content

    <x-slot:footer>
        <button>Action</button>
    </x-slot:footer>
</x-card>

{{-- card.blade.php --}}
<div class="card">
    @isset($header)
        <div class="card-header">
            {{ $header }}
        </div>
    @endisset

    <div class="card-body">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endisset
</div>
```

### Scoped Slots
```blade
{{-- Component with scoped slot --}}
<x-slot:item :user="$user">
    {{ $user->name }}
</x-slot>
```

### Slot Attributes
```blade
<x-slot:header class="font-bold">
    Title
</x-slot>

{{-- In component --}}
<div {{ $header->attributes }}>
    {{ $header }}
</div>
```

### Checking Slot Content
```blade
@if($slot->isEmpty())
    <p>No content provided</p>
@else
    {{ $slot }}
@endif

{{-- Or check for actual content (ignoring whitespace) --}}
@if($slot->hasActualContent())
    {{ $slot }}
@endif
```

## The @props Directive

### Basic Props
```blade
{{-- At top of component file --}}
@props(['type', 'message'])

<div class="alert alert-{{ $type }}">
    {{ $message }}
</div>
```

### Props with Defaults
```blade
@props([
    'type' => 'info',
    'dismissible' => false,
    'icon' => null,
])

<div class="alert alert-{{ $type }}">
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</div>
```

### Props are Extracted
Props declared with `@props` become variables in the template and are removed from `$attributes`:

```blade
@props(['color' => 'primary'])

{{-- $color is available as variable --}}
<button class="btn btn-{{ $color }}" {{ $attributes }}>
    {{ $slot }}
</button>
```

## Component Namespacing and Organization

### Directory Structure
```
resources/views/components/
├── button.blade.php          → <x-button />
├── alert.blade.php           → <x-alert />
├── form/
│   ├── input.blade.php       → <x-form.input />
│   ├── select.blade.php      → <x-form.select />
│   └── textarea.blade.php    → <x-form.textarea />
└── card/
    ├── card.blade.php        → <x-card />
    ├── header.blade.php      → <x-card.header />
    └── footer.blade.php      → <x-card.footer />
```

### Package Component Namespacing
```php
// In ServiceProvider
public function boot(): void
{
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'tabler');
}
```

```blade
{{-- Usage with namespace --}}
<x-tabler::button color="primary">
    Click Me
</x-tabler::button>

<x-tabler::form.input name="email" />
```

### Custom Anonymous Component Paths
```php
use Illuminate\Support\Facades\Blade;

// Register additional path with prefix
Blade::anonymousComponentPath(
    __DIR__.'/../components',
    'admin'
);
```

## Dynamic Components

```blade
{{-- Render component based on variable --}}
<x-dynamic-component :component="$componentName" :data="$componentData" />

{{-- Example --}}
@php
$componentName = $user->isAdmin() ? 'admin-panel' : 'user-panel';
@endphp

<x-dynamic-component :component="$componentName" :user="$user" />
```

## The @aware Directive

Allows child components to access parent component data:

```blade
{{-- parent.blade.php --}}
@props(['theme' => 'light'])

<div class="theme-{{ $theme }}">
    {{ $slot }}
</div>

{{-- child.blade.php --}}
@aware(['theme'])

<button class="btn btn-{{ $theme }}">
    {{ $slot }}
</button>

{{-- Usage --}}
<x-parent theme="dark">
    <x-child>Click Me</x-child>  {{-- Inherits theme="dark" --}}
</x-parent>
```

## Short Attribute Syntax

```blade
{{-- Instead of this --}}
<x-profile :user-id="$userId" :name="$name" :email="$email" />

{{-- Use this --}}
<x-profile :$userId :$name :$email />
```

## Best Practices for Component Libraries

### 1. Always Merge Attributes
```blade
{{-- Good --}}
<button {{ $attributes->merge(['class' => 'btn btn-'.$color]) }}>
    {{ $slot }}
</button>

{{-- Bad - doesn't allow customization --}}
<button class="btn btn-{{ $color }}">
    {{ $slot }}
</button>
```

### 2. Use @props for Self-Documentation
```blade
{{-- Good - clear API --}}
@props([
    'color' => 'primary',
    'size' => 'md',
    'outline' => false,
    'disabled' => false,
])

{{-- Bad - magic variables --}}
<button class="btn btn-{{ $color ?? 'primary' }}">
```

### 3. Provide Sensible Defaults
```blade
@props([
    'type' => 'button',
    'color' => 'primary',
    'size' => 'md',
])
```

### 4. Support Dark Mode
```blade
<div {{ $attributes->merge(['class' => 'card bg-white dark:bg-gray-800']) }}>
    {{ $slot }}
</div>
```

### 5. Use Named Slots for Flexibility
```blade
{{-- Flexible card component --}}
@isset($header)
    <div class="card-header">{{ $header }}</div>
@endisset

<div class="card-body">{{ $slot }}</div>

@isset($footer)
    <div class="card-footer">{{ $footer }}</div>
@endisset
```

### 6. Handle Empty States
```blade
@if($slot->isEmpty())
    <p class="text-muted">No items to display</p>
@else
    {{ $slot }}
@endif
```

### 7. Conditional Class Application
```blade
<button {{ $attributes->class([
    'btn',
    "btn-{$color}",
    "btn-{$size}",
    'btn-outline' => $outline,
    'opacity-50 cursor-not-allowed' => $disabled,
]) }}>
```

## Common Patterns

### Icon with Slot
```blade
@props(['icon' => null])

<button {{ $attributes->merge(['class' => 'btn']) }}>
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
```

### Boolean Props
```blade
@props([
    'active' => false,
    'disabled' => false,
])

<a {{ $attributes->class([
    'nav-link',
    'active' => $active,
    'disabled' => $disabled,
]) }}>
    {{ $slot }}
</a>
```

### Size Variants
```blade
@props(['size' => 'md'])

@php
$sizeClasses = [
    'sm' => 'px-2 py-1 text-sm',
    'md' => 'px-4 py-2',
    'lg' => 'px-6 py-3 text-lg',
];
@endphp

<button {{ $attributes->merge(['class' => 'btn '.$sizeClasses[$size]]) }}>
    {{ $slot }}
</button>
```

### Form Input with Label
```blade
@props([
    'name',
    'label' => null,
    'type' => 'text',
    'required' => false,
])

<div class="form-group">
    @if($label)
        <label for="{{ $name }}" class="form-label">
            {{ $label }}
            @if($required)<span class="text-danger">*</span>@endif
        </label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
        @if($required) required @endif
    >

    @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>
```

## Testing Components

### Pest Testing Pattern

Laravel components can be tested using Pest's Blade testing features. Always test components to ensure they render correctly and handle edge cases.

```php
<?php

use function Pest\Laravel\{get};

it('renders button with correct classes', function () {
    $view = $this->blade(
        '<x-tabler::button color="primary">Click Me</x-tabler::button>'
    );

    $view->assertSee('Click Me');
    $view->assertSee('btn btn-primary');
});

it('renders as link when href is provided', function () {
    $view = $this->blade(
        '<x-tabler::button href="/dashboard">Dashboard</x-tabler::button>'
    );

    $view->assertSee('<a', false);
    $view->assertSee('href="/dashboard"', false);
    $view->assertDontSee('<button', false);
});

it('merges custom classes correctly', function () {
    $view = $this->blade(
        '<x-tabler::button class="custom-class">Click</x-tabler::button>'
    );

    $view->assertSee('btn');
    $view->assertSee('custom-class');
});

it('handles disabled state', function () {
    $view = $this->blade(
        '<x-tabler::button disabled>Disabled</x-tabler::button>'
    );

    $view->assertSee('disabled');
});

it('renders icon correctly', function () {
    $view = $this->blade(
        '<x-tabler::button icon="plus">Add Item</x-tabler::button>'
    );

    $view->assertSee('Add Item');
    // Icon component should be rendered
    $view->assertSee('tabler-plus', false);
});
```

### Testing Named Slots

```php
it('renders named slots correctly', function () {
    $view = $this->blade(
        '<x-tabler::card>
            <x-slot:header>Card Title</x-slot:header>
            Card body content
            <x-slot:footer>Card Footer</x-slot:footer>
        </x-tabler::card>'
    );

    $view->assertSee('Card Title');
    $view->assertSee('Card body content');
    $view->assertSee('Card Footer');
    $view->assertSee('card-header', false);
    $view->assertSee('card-footer', false);
});
```

### Testing Props with Defaults

```php
it('uses default prop values', function () {
    $view = $this->blade(
        '<x-tabler::button>Click</x-tabler::button>'
    );

    // Default type should be 'button'
    $view->assertSee('type="button"', false);
});

it('overrides default prop values', function () {
    $view = $this->blade(
        '<x-tabler::button type="submit">Submit</x-tabler::button>'
    );

    $view->assertSee('type="submit"', false);
    $view->assertDontSee('type="button"', false);
});
```

### Testing Edge Cases

```php
it('handles empty slot gracefully', function () {
    $view = $this->blade(
        '<x-tabler::alert type="info"></x-tabler::alert>'
    );

    // Should still render, even with empty content
    $view->assertSee('alert', false);
    $view->assertSee('alert-info', false);
});

it('handles special characters in content', function () {
    $view = $this->blade(
        '<x-tabler::button>Save & Continue</x-tabler::button>'
    );

    // Should properly escape HTML entities
    $view->assertSee('Save &amp; Continue', false);
});

it('handles very long content', function () {
    $longText = str_repeat('A', 1000);

    $view = $this->blade(
        '<x-tabler::button>' . $longText . '</x-tabler::button>'
    );

    $view->assertSee($longText);
});
```

### Testing Attribute Merging

```php
it('merges attributes correctly', function () {
    $view = $this->blade(
        '<x-tabler::button
            class="custom-class"
            data-action="submit"
            id="submit-btn"
        >Submit</x-tabler::button>'
    );

    $view->assertSee('btn'); // Component default class
    $view->assertSee('custom-class'); // User provided class
    $view->assertSee('data-action="submit"', false);
    $view->assertSee('id="submit-btn"', false);
});
```

### Component Test Structure

Organize your component tests in `tests/Feature/Components/`:

```
tests/
└── Feature/
    └── Components/
        ├── ButtonComponentTest.php
        ├── AlertComponentTest.php
        ├── CardComponentTest.php
        └── Forms/
            ├── InputComponentTest.php
            └── SelectComponentTest.php
```

## Debugging Components

### Clear Compiled Blade Views

When making changes to components, always clear the view cache:

```bash
# Clear compiled views
php artisan view:clear

# Recompile all views
php artisan view:cache
```

### View Compiled Blade Location

Compiled Blade templates are stored in:
```
storage/framework/views/[hash].php
```

You can inspect these files to see the compiled PHP output if needed.

### Debug Attribute Bags

```blade
{{-- See what attributes are available --}}
<pre>{{ var_export($attributes->getAttributes(), true) }}</pre>

{{-- Check if specific attribute exists --}}
@if($attributes->has('disabled'))
    <p>Component is disabled</p>
@endif

@if($attributes->has('class'))
    <p>Classes: {{ $attributes->get('class') }}</p>
@endif

{{-- Get attribute with default value --}}
<p>ID: {{ $attributes->get('id', 'default-id') }}</p>

{{-- Filter attributes --}}
<div {{ $attributes->only(['id', 'data-action']) }}>
    Only ID and data-action attributes
</div>

<div {{ $attributes->except(['class']) }}>
    All attributes except class
</div>
```

### Debug Props

```blade
@props(['color' => 'primary', 'size' => 'md'])

{{-- Debug specific prop --}}
<pre>Color: {{ $color }}</pre>
<pre>Size: {{ $size }}</pre>

{{-- Debug all available variables --}}
<pre>{{ json_encode(get_defined_vars(), JSON_PRETTY_PRINT) }}</pre>

{{-- Check if slot has content --}}
@if($slot->isEmpty())
    <p>Slot is empty</p>
@else
    <p>Slot has content</p>
@endif

@if($slot->hasActualContent())
    <p>Slot has actual content (not just whitespace)</p>
@endif
```

### Laravel Debugbar Integration

Install Laravel Debugbar for component performance profiling:

```bash
composer require barryvdh/laravel-debugbar --dev
```

Then you can see:
- View rendering times
- Number of views rendered
- Memory usage
- Database queries triggered by components

## Advanced Patterns

### Conditional Rendering

Components can conditionally render based on props or logic:

```blade
@props(['show' => true, 'type' => 'info'])

@if($show)
    <div {{ $attributes->merge(['class' => 'alert alert-' . $type]) }}>
        {{ $slot }}
    </div>
@endif
```

Usage:
```blade
{{-- Will render --}}
<x-alert show type="success">Success message</x-alert>

{{-- Won't render --}}
<x-alert :show="false">Hidden message</x-alert>
```

### Component Composition

Build complex components from simpler ones:

```blade
{{-- resources/views/components/feature-card.blade.php --}}
@props(['icon', 'title', 'color' => 'primary'])

<x-tabler::card>
    <x-tabler::card.body class="text-center">
        <div class="mb-3">
            <x-dynamic-component
                :component="'tabler-' . $icon"
                class="icon icon-lg text-{{ $color }}"
            />
        </div>
        <h3 class="card-title">{{ $title }}</h3>
        <p class="text-secondary">{{ $slot }}</p>
    </x-tabler::card.body>
</x-tabler::card>
```

Usage:
```blade
<x-feature-card icon="rocket" title="Fast Performance" color="success">
    Lightning-fast load times and optimized performance.
</x-feature-card>
```

### Forwarding Attributes to Nested Components

```blade
{{-- Higher-order component --}}
@props(['variant' => 'default'])

<x-tabler::card {{ $attributes->merge(['class' => 'card-' . $variant]) }}>
    <x-tabler::card.header>
        {{ $header ?? 'Default Header' }}
    </x-tabler::card.header>

    <x-tabler::card.body>
        {{ $slot }}
    </x-tabler::card.body>
</x-tabler::card>
```

### Dynamic Component Selection

```blade
@props(['type' => 'button', 'href' => null])

@php
    $component = $href ? 'a' : 'button';
@endphp

<{{ $component }}
    @if($component === 'a')
        href="{{ $href }}"
    @else
        type="{{ $type }}"
    @endif
    {{ $attributes->merge(['class' => 'btn btn-primary']) }}
>
    {{ $slot }}
</{{ $component }}>
```

### Scoped Slot Data

Pass data from parent component to slot:

```blade
{{-- resources/views/components/data-table.blade.php --}}
@props(['items'])

<table class="table">
    <tbody>
        @foreach($items as $item)
            <tr>
                {{ $slot($item) }}
            </tr>
        @endforeach
    </tbody>
</table>
```

Usage:
```blade
<x-data-table :items="$users">
    @scope($user)
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    @endscope
</x-data-table>
```

### Using @once for Shared Resources

Prevent duplicate inclusion of scripts/styles:

```blade
@once
    @push('styles')
        <link rel="stylesheet" href="/css/datepicker.css">
    @endpush
@endonce

@once
    @push('scripts')
        <script src="/js/datepicker.js"></script>
    @endpush
@endonce

<input type="text" class="form-control datepicker" {{ $attributes }}>
```

### Accessing Parent Component Data with @aware

Child components can access parent component data:

```blade
{{-- resources/views/components/theme-wrapper.blade.php --}}
@props(['theme' => 'light', 'size' => 'md'])

<div class="theme-{{ $theme }} size-{{ $size }}">
    {{ $slot }}
</div>

{{-- resources/views/components/theme-button.blade.php --}}
@aware(['theme', 'size'])

<button class="btn btn-{{ $theme }} btn-{{ $size }}">
    {{ $slot }}
</button>
```

Usage:
```blade
<x-theme-wrapper theme="dark" size="lg">
    <x-theme-button>Button 1</x-theme-button>
    <x-theme-button>Button 2</x-theme-button>
    {{-- Both buttons inherit theme="dark" and size="lg" --}}
</x-theme-wrapper>
```

### Component Method Invocation

Class-based components can define methods:

```php
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public function __construct(
        public string $type = 'info',
        public bool $dismissible = false
    ) {}

    public function iconForType(): string
    {
        return match($this->type) {
            'success' => 'check',
            'danger' => 'alert-circle',
            'warning' => 'alert-triangle',
            default => 'info-circle',
        };
    }

    public function render()
    {
        return view('components.alert');
    }
}
```

In the view:
```blade
<div class="alert alert-{{ $type }}">
    <x-dynamic-component :component="'tabler-' . $iconForType()" />
    {{ $slot }}
</div>
```

## Best Practices Summary

1. **Always use semantic HTML** - `<button>` not `<div role="button">`
2. **Merge attributes** - Allow users to customize components
3. **Document props** - Use comprehensive header comments
4. **Test components** - Write Pest tests for all variations
5. **Handle edge cases** - Empty slots, long content, special characters
6. **Ensure accessibility** - ARIA labels, keyboard navigation, color contrast
7. **Use @props for clarity** - Self-documenting component API
8. **Provide defaults** - Sensible default values for all props
9. **Follow naming conventions** - kebab-case for files and tags
10. **Keep it simple** - Avoid over-abstraction, let users use `class=""`
