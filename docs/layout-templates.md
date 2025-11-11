# Tabler UI Layout Templates

> Available layout variations in Tabler UI that can be implemented as Laravel Blade layout templates

## Currently Implemented

### 1. Default Layout (Horizontal Navbar)
**File:** `tabler-blade/stubs/resources/views/layouts/app.blade.php`

**Features:**
- Horizontal top navbar
- Container-based content area
- Optional page header
- Optional footer
- Flexible navbar section (can include default or condensed navbar)

**Structure:**
```blade
<div class="page">
    @yield('navbar')
    <div class="page-wrapper">
        <div class="page-header">...</div>
        <main class="page-body">
            <div class="container-xl">
                @yield('content')
            </div>
        </main>
        <footer>...</footer>
    </div>
</div>
```

## Available Tabler Layout Variations

### Navigation Layouts

#### 2. Vertical Sidebar Layout (Left)
**Preview:** `tabler/preview/dist/layout-vertical.html`

**Features:**
- Vertical sidebar on the left
- Dark theme sidebar (recommended)
- Collapsible menu
- Full-height sidebar with scrollable menu
- Horizontal top navbar (optional, typically hidden)

**Key Classes:**
- `<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">`
- Sidebar includes: logo, toggler, menu
- Page content shifts to accommodate sidebar

**Best For:**
- Admin dashboards
- Complex applications with many menu items
- Applications requiring persistent navigation

---

#### 3. Vertical Sidebar Layout (Right)
**Preview:** `tabler/preview/dist/layout-vertical-right.html`

**Features:**
- Same as vertical layout but sidebar on the right
- Useful for RTL languages or specific design requirements

**Key Classes:**
- `<aside class="navbar navbar-vertical navbar-end navbar-expand-lg">`
- `.navbar-end` positions sidebar on the right

---

#### 4. Transparent Sidebar Layout
**Preview:** `tabler/preview/dist/layout-vertical-transparent.html`

**Features:**
- Vertical sidebar with transparent background
- Content visible through sidebar
- Modern, minimal aesthetic

**Key Classes:**
- `<aside class="navbar navbar-vertical navbar-transparent">`

---

#### 5. Horizontal Layout (Top Menu)
**Preview:** `tabler/preview/dist/layout-horizontal.html`

**Features:**
- Traditional horizontal navigation at top
- Full-width menu bar
- Dropdown menus for nested items

**Best For:**
- Marketing sites
- Simpler applications
- Public-facing pages

---

#### 6. Combo Layout (Sidebar + Top Navbar)
**Preview:** `tabler/preview/dist/layout-combo.html`

**Features:**
- Vertical sidebar for main navigation
- Horizontal navbar for user actions, search, notifications
- Best of both worlds

**Best For:**
- Complex dashboards requiring both persistent nav and action bar
- Applications with many features

---

### Navbar Variations

#### 7. Condensed Navbar Layout
**Preview:** `tabler/preview/dist/layout-condensed.html`

**Features:**
- Compact horizontal navbar
- Menu items inline with logo
- Space-efficient design
- Ideal for simple navigation needs

**Key Classes:**
- Navbar with `condensed=true` parameter
- Menu items displayed horizontally inline

**Best For:**
- Simple dashboards
- Single-page applications
- Minimal navigation requirements

---

#### 8. Dark Navbar Layout
**Preview:** `tabler/preview/dist/layout-navbar-dark.html`

**Features:**
- Dark-themed horizontal navbar
- White/light text and icons
- Modern appearance

**Key Classes:**
- `<header class="navbar" data-bs-theme="dark">`

---

#### 9. Sticky Navbar Layout
**Preview:** `tabler/preview/dist/layout-navbar-sticky.html`

**Features:**
- Navbar remains visible when scrolling
- Always accessible navigation
- Good UX for long pages

**Key Classes:**
- `<header class="navbar sticky-top">`

**Best For:**
- Long content pages
- Applications requiring persistent access to navigation

---

#### 10. Overlap Navbar Layout
**Preview:** `tabler/preview/dist/layout-navbar-overlap.html`

**Features:**
- Navbar overlaps content area
- Transparent or semi-transparent navbar
- Modern, layered design

**Key Classes:**
- `<header class="navbar navbar-overlap">`

**Best For:**
- Hero sections
- Modern landing pages
- Visual emphasis on content

---

### Container Variations

#### 11. Boxed Layout
**Preview:** `tabler/preview/dist/layout-boxed.html`

**Features:**
- Content constrained to max-width container
- Centered layout with margins on large screens
- Classic, focused design

**Key Classes:**
- Uses `container` or `container-xl` throughout
- Max-width constrains content

**Best For:**
- Reading-focused applications
- Forms and data entry
- Traditional enterprise apps

---

#### 12. Fluid Layout
**Preview:** `tabler/preview/dist/layout-fluid.html`

**Features:**
- Full-width content area
- No max-width constraint
- Utilizes entire viewport

**Key Classes:**
- Uses `container-fluid` instead of `container-xl`

**Best For:**
- Data tables
- Dashboards with many widgets
- Applications needing maximum screen real estate

---

#### 13. Fluid Vertical Layout
**Preview:** `tabler/preview/dist/layout-fluid-vertical.html`

**Features:**
- Vertical sidebar + fluid content area
- Combines sidebar navigation with full-width content

**Best For:**
- Admin panels with data tables
- Complex dashboards

---

### Special Layouts

#### 14. RTL Layout
**Preview:** `tabler/preview/dist/layout-rtl.html`

**Features:**
- Right-to-left text direction
- Mirrored layout
- Sidebar on right by default

**Key Attributes:**
- `<html dir="rtl">`

**Best For:**
- Arabic, Hebrew, Persian applications
- International applications

---

## Layout Component Patterns

### Common Layout Elements

1. **Page Header**
```blade
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Pretitle</div>
                <h2 class="page-title">Page Title</h2>
            </div>
            <div class="col-auto ms-auto">
                <div class="btn-list">
                    <!-- Actions -->
                </div>
            </div>
        </div>
    </div>
</div>
```

2. **Page Body**
```blade
<main class="page-body">
    <div class="container-xl">
        <div class="row row-cards row-deck">
            <!-- Content -->
        </div>
    </div>
</main>
```

3. **Footer**
```blade
<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row text-center align-items-center">
            <div class="col-lg-auto ms-lg-auto">
                <!-- Footer links -->
            </div>
            <div class="col-12 col-lg-auto">
                <!-- Copyright -->
            </div>
        </div>
    </div>
</footer>
```

---

## Implementation Recommendations

### Priority Order (Based on Common Use Cases)

**High Priority (Implement First):**
1. ✅ **Default Layout** (Already implemented)
2. 🔲 **Vertical Sidebar Layout** - Most common for admin panels
3. 🔲 **Condensed Navbar Layout** - Simple, space-efficient alternative
4. 🔲 **Combo Layout** - Powerful for complex apps

**Medium Priority:**
5. 🔲 **Fluid Layout** - For data-heavy pages
6. 🔲 **Sticky Navbar Layout** - Better UX for scrolling
7. 🔲 **Dark Navbar Layout** - Modern aesthetic option

**Lower Priority:**
8. 🔲 **Vertical Right Sidebar** - Edge case (RTL alternative)
9. 🔲 **Transparent Sidebar** - Aesthetic variation
10. 🔲 **Overlap Navbar** - Specific design pattern
11. 🔲 **Boxed Layout** - Less common in modern apps
12. 🔲 **Horizontal Layout** - Simple, but less common for admin
13. 🔲 **Fluid Vertical** - Combination layout
14. 🔲 **RTL Layout** - Internationalization requirement

---

## Implementation Strategy

### Create Layout Variants

Each layout should be a separate Blade layout file:

```
tabler-blade/stubs/resources/views/layouts/
├── app.blade.php                    # Default (horizontal navbar)
├── vertical.blade.php               # Vertical sidebar (left)
├── vertical-right.blade.php         # Vertical sidebar (right)
├── vertical-transparent.blade.php   # Transparent sidebar
├── condensed.blade.php              # Condensed navbar
├── combo.blade.php                  # Sidebar + navbar
├── horizontal.blade.php             # Horizontal menu
├── fluid.blade.php                  # Full-width content
├── boxed.blade.php                  # Max-width container
└── auth.blade.php                   # Centered auth layout (no nav)
```

### Layout Configuration Props

Each layout should accept configuration via slots/props:

```blade
@props([
    'dark' => false,              // Dark theme
    'sticky' => false,            // Sticky navbar
    'overlap' => false,           // Overlapping navbar
    'transparent' => false,       // Transparent sidebar
    'fluid' => false,             // Fluid container
    'hideNavbar' => false,        // Hide navbar
    'hideSidebar' => false,       // Hide sidebar
    'rtl' => false,               // RTL direction
])
```

### Reusable Layout Components

Create shared layout components:

```
tabler-blade/stubs/resources/views/layouts/
├── partials/
│   ├── page-header.blade.php      # Page header with title/actions
│   ├── page-footer.blade.php      # Page footer
│   ├── sidebar.blade.php          # Vertical sidebar
│   └── topbar.blade.php           # Horizontal navbar
└── navbar/
    ├── default.blade.php          # Standard navbar
    ├── condensed.blade.php        # Condensed navbar
    └── partials/
        ├── logo.blade.php
        ├── menu.blade.php
        ├── search.blade.php
        ├── user-menu.blade.php
        └── notifications.blade.php
```

---

## Usage Examples

### Vertical Sidebar Layout

```blade
{{-- resources/views/dashboard.blade.php --}}
@extends('tabler::layouts.vertical')

@section('page-header', 'Dashboard')

@section('page-actions')
    <x-tabler::button color="primary" icon="plus">New Project</x-tabler::button>
@endsection

@section('content')
    <div class="row row-cards">
        <!-- Dashboard widgets -->
    </div>
@endsection
```

### Condensed Layout

```blade
{{-- resources/views/reports.blade.php --}}
@extends('tabler::layouts.condensed')

@section('content')
    <x-tabler::cards.card>
        <x-tabler::cards.body>
            <!-- Report content -->
        </x-tabler::cards.body>
    </x-tabler::cards.card>
@endsection
```

### Combo Layout

```blade
{{-- resources/views/admin.blade.php --}}
@extends('tabler::layouts.combo')

@section('sidebar-menu')
    {{-- Custom sidebar menu items --}}
@endsection

@section('navbar-actions')
    {{-- Custom navbar actions --}}
@endsection

@section('content')
    <!-- Content -->
@endsection
```

---

## Next Steps

1. **Analyze Current Navbar Components**
   - Review existing navbar partials in `layouts/navbar/`
   - Identify reusable patterns

2. **Create Sidebar Component**
   - Build vertical sidebar Blade component
   - Support dark/light themes
   - Collapsible menu structure

3. **Create Layout Templates**
   - Start with vertical sidebar layout (highest priority)
   - Follow with condensed and combo layouts
   - Test responsiveness

4. **Document Layout Usage**
   - Create demo pages for each layout
   - Add to docs/demo-guidelines.md
   - Provide migration guide for switching layouts

5. **Test Responsive Behavior**
   - Mobile navbar collapse
   - Tablet sidebar behavior
   - Desktop full experience
