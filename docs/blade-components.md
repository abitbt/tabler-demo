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
