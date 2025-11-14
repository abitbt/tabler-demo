# Tabler UI Layout Templates

> Documentation for Laravel Blade layouts in the tabler-blade package

## Table of Contents

- [Overview](#overview)
- [Available Layouts](#available-layouts)
- [Layout Configuration](#layout-configuration)
- [Layout Variables](#layout-variables)
- [Using Layouts](#using-layouts)
- [Migration Guide](#migration-guide)
- [Layout Components](#layout-components)

---

## Overview

The tabler-blade package includes pre-built layout templates that provide consistent structure for your Laravel application. All layouts are **configuration-driven** and support **pass-through variables** without requiring you to publish files.

### Layout Architecture

```
tabler-blade/stubs/resources/views/layouts/
├── base.blade.php              # Base HTML structure (extended by all)
├── app.blade.php               # Horizontal navbar layout (default)
├── vertical.blade.php          # Vertical sidebar layout
├── auth.blade.php              # Authentication pages layout
├── navbar/                     # Navbar variations
│   ├── condensed.blade.php
│   ├── default.blade.php
│   ├── horizontal.blade.php
│   └── partials/
└── partials/
    ├── alerts.blade.php        # Flash message alerts
    ├── head.blade.php          # HTML head section
    └── sidebar.blade.php       # Vertical sidebar
```

---

## Available Layouts

### 1. App Layout (Horizontal Navbar)

**File:** `tabler::layouts.app`
**Best for:** Simple applications, marketing sites, public-facing pages

**Features:**
- Horizontal navigation bar at top
- Optional sticky navbar
- Configurable container width
- Flash message support
- Optional page header and footer

**Preview:**
```
┌─────────────────────────────────────┐
│ Logo    Nav Items      User  Search │  ← Navbar
├─────────────────────────────────────┤
│                                     │
│          Page Content               │
│                                     │
└─────────────────────────────────────┘
```

### 2. Vertical Layout (Sidebar)

**File:** `tabler::layouts.vertical`
**Best for:** Admin dashboards, complex applications, many menu items

**Features:**
- Vertical sidebar (left or right)
- Dark/light sidebar themes
- Collapsible at breakpoints
- Optional top navbar
- Configurable container width
- Flash message support

**Preview:**
```
┌───┬─────────────────────────────┐
│   │                             │
│ S │    Page Content             │
│ i │                             │
│ d │                             │
│ e │                             │
│ b │                             │
│ a │                             │
│ r │                             │
│   │                             │
└───┴─────────────────────────────┘
```

### 3. Auth Layout

**File:** `tabler::layouts.auth`
**Best for:** Login, register, forgot password pages

**Features:**
- Centered content
- No navigation
- Minimal design
- Logo support

**Preview:**
```
┌─────────────────────────────────────┐
│                                     │
│          ┌─────────────┐            │
│          │   [Logo]    │            │
│          │             │            │
│          │ Auth Form   │            │
│          │             │            │
│          └─────────────┘            │
│                                     │
└─────────────────────────────────────┘
```

### 4. Base Layout

**File:** `tabler::layouts.base`
**Purpose:** Foundation for all other layouts (not used directly)

**Provides:**
- HTML document structure
- `<head>` section with meta tags
- Theme configuration via data attributes
- Vite integration
- Stack support (`@push('styles')`, `@push('scripts')`)

---

## Layout Configuration

### Config File: `config/tabler.php`

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Layout Configuration
    |--------------------------------------------------------------------------
    */
    'layout' => [
        // Container class: 'container-xl', 'container-fluid', 'container'
        'container' => 'container-xl',

        // Theme defaults (HTML data attributes)
        'theme' => [
            'base' => 'gray',
            'font' => 'sans-serif',
            'primary' => 'blue',
            'radius' => '1',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Navbar Configuration (app.blade.php)
    |--------------------------------------------------------------------------
    */
    'navbar' => [
        'dark' => false,              // Dark theme
        'sticky' => false,            // Sticky navbar
        'transparent' => false,       // Transparent navbar
        'overlap' => false,           // Overlap content
        'breakpoint' => 'md',         // Collapse breakpoint
        'hide_brand' => false,        // Hide logo
        'hide_search' => false,       // Hide search
    ],

    /*
    |--------------------------------------------------------------------------
    | Sidebar Configuration (vertical.blade.php)
    |--------------------------------------------------------------------------
    */
    'sidebar' => [
        'dark' => true,               // Dark theme (recommended)
        'position' => 'left',         // 'left' or 'right'
        'transparent' => false,       // Transparent background
        'background' => null,         // Custom background color
        'breakpoint' => 'lg',         // Collapse breakpoint
        'hide_brand' => false,        // Hide logo
    ],

    /*
    |--------------------------------------------------------------------------
    | Logo Configuration
    |--------------------------------------------------------------------------
    */
    'logo' => [
        'small' => null,              // 32x32 logo for compact layouts
        'full' => null,               // Full logo for standard layouts
        'fallback_svg' => true,       // Use embedded SVG if no custom logo
        'show_title' => false,        // Show app name next to logo
    ],

    /*
    |--------------------------------------------------------------------------
    | Flash Messages
    |--------------------------------------------------------------------------
    */
    'flash_messages' => [
        'enabled' => true,
        'session_keys' => ['success', 'error', 'warning', 'info'],
    ],
];
```

### Environment Variables

Add to your `.env` file:

```env
# Tabler Configuration
TABLER_LAYOUT_CONTAINER=container-xl
TABLER_NAVBAR_DARK=false
TABLER_NAVBAR_STICKY=true
TABLER_SIDEBAR_DARK=true
TABLER_SIDEBAR_POSITION=left
```

---

## Layout Variables

### Pass-Through Variables

All layouts support **pass-through variables** that override config defaults. Set these in your Blade views:

### HTML Level (base.blade.php)

```blade
@extends('tabler::layouts.app', [
    'htmlDir' => 'rtl',                  // RTL text direction
    'htmlLang' => 'ar',                  // Language code
    'bsThemeBase' => 'dark',             // Theme base color
    'bsThemeFont' => 'monospace',        // Theme font
    'bsThemePrimary' => 'purple',        // Primary color
    'bsThemeRadius' => '0',              // Border radius (0 = square)
])
```

### Body Level (base.blade.php)

```blade
@extends('tabler::layouts.app', [
    'bodyClass' => 'my-custom-class',    // Custom body classes
    'layoutBoxed' => true,               // Centered, max-width layout
    'layoutFluid' => true,               // Full-width layout
])
```

### App Layout (app.blade.php)

```blade
@extends('tabler::layouts.app', [
    'navbarDark' => true,                // Dark navbar theme
    'navbarSticky' => true,              // Sticky navbar
    'navbarOverlap' => true,             // Overlapping navbar
    'navbarHidden' => true,              // Hide navbar completely
    'navItems' => $menuItems,            // Navigation items array
    'pageHeaderHidden' => true,          // Hide page header section
    'footerHidden' => true,              // Hide footer section
    'container' => 'container-fluid',    // Override container class
])
```

### Vertical Layout (vertical.blade.php)

```blade
@extends('tabler::layouts.vertical', [
    'sidebarDark' => true,               // Dark sidebar theme
    'sidebarPosition' => 'left',         // 'left' or 'right'
    'sidebarTransparent' => true,        // Transparent sidebar
    'sidebarBackground' => 'primary',    // Custom background color
    'sidebarBreakpoint' => 'lg',         // Collapse breakpoint
    'hideSidebarBrand' => true,          // Hide logo/brand
    'sidebarCustomClass' => 'my-class',  // Additional CSS classes
    'navItems' => $menuItems,            // Navigation items (for sidebar)
    'sidebarItems' => $sidebarItems,     // Alternative sidebar items
    'hideTopbar' => false,               // Show optional top navbar
    'container' => 'container-xl',       // Override container class
])
```

---

## Using Layouts

### Basic Usage

```blade
{{-- resources/views/dashboard.blade.php --}}
@extends('tabler::layouts.app')

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <h1>Dashboard</h1>
            <p>Welcome to your dashboard!</p>
        </div>
    </div>
@endsection
```

### With Page Header

```blade
@extends('tabler::layouts.app')

@section('page-header')
    <x-tabler::page-header
        title="Dashboard"
        subtitle="Overview of your account"
    />
@endsection

@section('content')
    {{-- Page content --}}
@endsection
```

### With Breadcrumbs

```blade
@extends('tabler::layouts.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/settings">Settings</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
@endsection

@section('content')
    {{-- Page content --}}
@endsection
```

### With Custom Navbar

```blade
@extends('tabler::layouts.app')

@section('navbar')
    <header class="navbar navbar-expand-md">
        <div class="container-xl">
            {{-- Custom navbar content --}}
        </div>
    </header>
@endsection

@section('content')
    {{-- Page content --}}
@endsection
```

### With Footer

```blade
@extends('tabler::layouts.app')

@section('content')
    {{-- Page content --}}
@endsection

@section('footer')
    <footer class="footer footer-transparent">
        <div class="container-xl">
            <div class="row text-center">
                <div class="col-12">
                    <p class="text-muted">© 2025 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
```

### Vertical Sidebar Layout

```blade
@extends('tabler::layouts.vertical')

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <h1>Admin Dashboard</h1>
        </div>
    </div>
@endsection
```

### Auth Layout

```blade
@extends('tabler::layouts.auth')

@section('content')
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                {{-- Login form fields --}}
            </form>
        </div>
    </div>
@endsection
```

---

## Migration Guide

### Switching from Default to Vertical Layout

**Before (Horizontal Navbar):**
```blade
@extends('tabler::layouts.app')
```

**After (Vertical Sidebar):**
```blade
@extends('tabler::layouts.vertical')
```

That's it! The layout handles everything automatically.

### Customizing Sidebar Navigation

**Method 1: Via Section**

```blade
@extends('tabler::layouts.vertical')

@section('sidebar-navigation')
    {{-- Custom sidebar content --}}
@endsection
```

**Method 2: Via Variable**

```blade
@extends('tabler::layouts.vertical', [
    'navItems' => [
        [
            'type' => 'link',
            'title' => 'Dashboard',
            'url' => route('dashboard'),
            'icon' => 'home',
            'active' => 'dashboard',  // Route name for active detection
        ],
        [
            'type' => 'dropdown',
            'title' => 'Settings',
            'icon' => 'settings',
            'items' => [
                ['title' => 'Profile', 'url' => route('profile')],
                ['title' => 'Account', 'url' => route('account')],
            ],
        ],
    ],
])
```

**Method 3: Via Config (Recommended)**

Create `config/menus.php`:

```php
return [
    'sidebar' => [
        [
            'type' => 'link',
            'title' => 'Dashboard',
            'route' => 'dashboard',        // Auto-converts to URL
            'icon' => 'home',
            'active' => 'dashboard.*',     // Route pattern for active state
        ],
        [
            'type' => 'divider',
        ],
        [
            'type' => 'heading',
            'title' => 'Management',
        ],
        [
            'type' => 'dropdown',
            'title' => 'Users',
            'icon' => 'users',
            'can' => 'manage-users',       // Gate authorization
            'items' => [
                ['title' => 'All Users', 'route' => 'users.index'],
                ['title' => 'Add User', 'route' => 'users.create'],
            ],
        ],
    ],
];
```

Then in your view:

```blade
@extends('tabler::layouts.vertical', [
    'navItems' => tabler_menu('sidebar'),  // Loads from config
])
```

### RTL Support

```blade
@extends('tabler::layouts.app', [
    'htmlDir' => 'rtl',
    'htmlLang' => 'ar',
])
```

### Dark Mode

```blade
@extends('tabler::layouts.app', [
    'bsThemeBase' => 'dark',
])
```

Or set globally in `.env`:
```env
TABLER_THEME_BASE=dark
```

### Full-Width Layout

```blade
@extends('tabler::layouts.app', [
    'container' => 'container-fluid',
])
```

Or set globally in `config/tabler.php`:
```php
'layout' => [
    'container' => 'container-fluid',
],
```

---

## Layout Components

### Page Header Component

```blade
<x-tabler::page-header
    title="Dashboard"
    subtitle="Welcome back, John!"
/>

{{-- With breadcrumbs --}}
<x-tabler::page-header
    title="Settings"
    subtitle="Manage your account"
>
    <x-slot:breadcrumbs>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
    </x-slot:breadcrumbs>
</x-tabler::page-header>

{{-- With actions --}}
<x-tabler::page-header
    title="Users"
    subtitle="Manage system users"
>
    <x-slot:actions>
        <x-tabler::button color="primary" icon="plus" href="{{ route('users.create') }}">
            Add User
        </x-tabler::button>
    </x-slot:actions>
</x-tabler::page-header>
```

### Flash Messages

Flash messages are automatically displayed if `tabler.flash_messages.enabled` is `true`.

**In your controller:**
```php
return redirect()->route('dashboard')
    ->with('success', 'Profile updated successfully!');

return back()
    ->with('error', 'Something went wrong.');

return redirect()->route('users.index')
    ->with('warning', 'User account is pending approval.');

return back()
    ->with('info', 'Email verification sent.');
```

**Customize session keys in config:**
```php
'flash_messages' => [
    'enabled' => true,
    'session_keys' => ['success', 'error', 'warning', 'info', 'message'],
],
```

---

## Best Practices

### 1. Use Config for Global Defaults

Set defaults in `config/tabler.php`, override per-view when needed:

```php
// config/tabler.php
'layout' => [
    'container' => 'container-xl',  // Default for most pages
],
```

```blade
{{-- Override for specific page --}}
@extends('tabler::layouts.app', [
    'container' => 'container-fluid',  // Full-width for this page only
])
```

### 2. Create Layout Blade Components for Repeated Configurations

```blade
{{-- resources/views/components/layouts/admin.blade.php --}}
<x-dynamic-component
    component="tabler::layouts.vertical"
    :sidebarDark="true"
    :navItems="tabler_menu('admin')"
    {{ $attributes }}
>
    {{ $slot }}
</x-dynamic-component>
```

Usage:
```blade
<x-layouts.admin>
    @section('content')
        {{-- Admin content --}}
    @endsection
</x-layouts.admin>
```

### 3. Use Middleware for Layout Selection

```php
// app/Http/Middleware/SetLayout.php
public function handle(Request $request, Closure $next, string $layout = 'app')
{
    View::share('defaultLayout', "tabler::layouts.{$layout}");
    return $next($request);
}
```

Register in `bootstrap/app.php`:
```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'layout' => \App\Http\Middleware\SetLayout::class,
    ]);
})
```

Use in routes:
```php
Route::middleware(['auth', 'layout:vertical'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
});
```

### 4. Publish Only What You Need

```bash
# Publish config only
php artisan vendor:publish --tag=tabler-config

# Publish specific layout
# (Edit after publishing to customize)
php artisan vendor:publish --tag=tabler-layouts

# Publish everything (not recommended)
php artisan vendor:publish --tag=tabler-views
```

---

## Advanced Patterns

### Per-User Layout Preference

```php
// Migration
Schema::table('users', function (Blueprint $table) {
    $table->string('preferred_layout')->default('app');
});

// Model
class User extends Authenticatable
{
    public function getLayoutAttribute(): string
    {
        return "tabler::layouts.{$this->preferred_layout}";
    }
}

// View
@extends(auth()->user()?->layout ?? 'tabler::layouts.app')
```

### Conditional Sidebar Items

```php
// config/menus.php
return [
    'sidebar' => [
        [
            'title' => 'Admin Panel',
            'route' => 'admin.dashboard',
            'icon' => 'shield',
            'can' => 'access-admin',  // Only show if user has permission
        ],
    ],
];
```

### Multiple Sidebars

```blade
@extends('tabler::layouts.vertical', [
    'sidebarItems' => tabler_menu('main-sidebar'),
])

@section('content')
    <div class="row">
        <div class="col-md-3">
            {{-- Secondary sidebar --}}
            @include('partials.secondary-sidebar')
        </div>
        <div class="col-md-9">
            {{-- Main content --}}
        </div>
    </div>
@endsection
```

---

## Summary

- **2 main layouts**: `app.blade.php` (horizontal) and `vertical.blade.php` (sidebar)
- **Configuration-driven**: Extensive config options in `config/tabler.php`
- **Pass-through variables**: Override defaults per-view without publishing files
- **Flash messages**: Automatic display from session
- **Menu system**: Powerful config-based navigation with authorization
- **Responsive**: Mobile-first with configurable breakpoints
- **Flexible**: Support for breadcrumbs, page headers, custom navbars, footers
- **No publishing required**: Works out of the box, customize via variables

For menu builder documentation, see `docs/menu-builder.md`.
