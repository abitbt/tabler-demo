# Tabler UI Component Reference

> Comprehensive reference for Tabler UI components - extracted from Tabler v1.4.0

## Table of Contents

1. [Buttons](#buttons)
2. [Cards](#cards)
3. [Avatars](#avatars)
4. [Badges](#badges)
5. [Forms](#forms)
6. [Tables](#tables)
7. [Navigation](#navigation)
8. [Alerts](#alerts)
9. [Modals](#modals)
10. [Progress](#progress)
11. [Status & Indicators](#status--indicators)
12. [Steps & Timeline](#steps--timeline)
13. [Dropdowns](#dropdowns)
14. [Empty States](#empty-states)
15. [Ribbons](#ribbons)
16. [Layout Structure](#layout-structure)
17. [Dark Mode](#dark-mode)
18. [Color System](#color-system)
19. [Spacing & Sizing](#spacing--sizing)
20. [Typography](#typography)
21. [Border & Radius](#border--radius)
22. [Utility Classes](#utility-classes)
23. [JavaScript Components](#javascript-components)
24. [Responsive Breakpoints](#responsive-breakpoints)
25. [Icons](#icons)

---

## 1. Buttons

### Class Structure

**Base Classes:**
- `.btn` - Base button class (inline-flex, centered content)

**Button Variants:**
- `.btn-{color}` - Solid color buttons (primary, secondary, success, info, warning, danger, light, dark)
- `.btn-outline-{color}` - Outline style with border
- `.btn-ghost-{color}` - Transparent background, hover to solid
- `.btn-link` - Link-style button

**Sizes:**
- `.btn-sm` - Small (padding: 0.3125rem 0.5rem, font: 0.75rem)
- `.btn-md` - Default (padding: 0.5625rem 1rem, font: 0.875rem)
- `.btn-lg` - Large (padding: 0.6875rem 1.5rem, font: 1rem)
- `.btn-xl` - Extra large (padding: 0.6875rem 2rem, font: 1.5rem)

**Shapes:**
- `.btn-pill` - Fully rounded (border-radius: 10rem)
- `.btn-square` - No border radius
- `.btn-icon` - Icon-only square button

**States:**
- `.btn-loading` - Shows spinner, hides content
- `.btn-action` - Minimal action button style
- `.disabled` - Disabled state (opacity: 0.4)

**Special Animations:**
- `.btn-animate-icon` - Icon moves on hover
- `.btn-animate-icon-rotate` - Icon rotates
- `.btn-animate-icon-shake` - Icon shakes
- `.btn-animate-icon-pulse` - Icon pulses
- `.btn-animate-icon-tada` - Icon tada animation

### HTML Examples

```html
<!-- Standard button -->
<a class="btn btn-primary">
  <svg class="icon">...</svg>
  Button Text
</a>

<!-- Outline button -->
<button class="btn btn-outline-danger">Delete</button>

<!-- Icon button -->
<button class="btn btn-icon btn-primary">
  <svg class="icon">...</svg>
</button>

<!-- Button with animation -->
<a class="btn btn-animate-icon">
  Save
  <svg class="icon icon-end">...</svg>
</a>

<!-- Loading button -->
<button class="btn btn-primary btn-loading">Processing</button>

<!-- Button list (auto-spacing) -->
<div class="btn-list">
  <button class="btn btn-primary">Save</button>
  <button class="btn">Cancel</button>
</div>
```

---

## 2. Cards

### Class Structure

**Base Classes:**
- `.card` - Main container (bg: surface, border-radius: 8px)
- `.card-header` - Top section with title
- `.card-body` - Main content area (padding: 1.25rem)
- `.card-footer` - Bottom section

**Card Variants:**
- `.card-borderless` - No borders
- `.card-active` - Active state (primary border, active bg)
- `.card-inactive` - Disabled appearance (opacity: 0.64)
- `.card-stacked` - Stacked card effect
- `.card-sm` - Smaller padding (1rem)
- `.card-md` - Medium padding (2.5rem on md+)
- `.card-lg` - Large padding (2-4rem on lg+)

**Card Status Bars:**
- `.card-status-top` - Colored bar at top (2px height)
- `.card-status-start` - Colored bar at left
- `.card-status-bottom` - Colored bar at bottom

**Card Stamps:**
- `.card-stamp` - Decorative corner icon (7rem, top-right)
- `.card-stamp-lg` - Larger stamp (13rem)
- `.card-stamp-icon` - Icon container in stamp

**Card Effects:**
- `.card-link` - Clickable card with hover effect
- `.card-link-rotate` - Rotates on hover
- `.card-link-pop` - Lifts up on hover
- `.card-rotate-end` / `.card-rotate-start` - Pre-rotated

**Card Cover:**
- `.card-cover` - Background image overlay
- `.card-cover-blurred` - Adds backdrop blur

**Card Headers:**
- `.card-header-light` - Light background
- `.card-header-tabs` - Tabs in header

**Card Footer:**
- `.card-footer-transparent` - Transparent footer
- `.card-footer-borderless` - No top border

### HTML Examples

```html
<!-- Basic card -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Card Title</h3>
  </div>
  <div class="card-body">
    Card content here
  </div>
</div>

<!-- Card with status bar -->
<div class="card">
  <div class="card-status-top bg-danger"></div>
  <div class="card-body">...</div>
</div>

<!-- Card with stamp -->
<div class="card">
  <div class="card-stamp">
    <div class="card-stamp-icon bg-yellow">
      <svg class="icon">...</svg>
    </div>
  </div>
  <div class="card-body">...</div>
</div>

<!-- Card with image -->
<div class="card">
  <img src="image.jpg" class="card-img-top">
  <div class="card-body">...</div>
</div>

<!-- Clickable card -->
<a href="#" class="card card-link card-link-pop">
  <div class="card-body">Hover me</div>
</a>

<!-- Card with footer -->
<div class="card">
  <div class="card-body">...</div>
  <div class="card-footer">
    <button class="btn btn-primary">Action</button>
  </div>
</div>
```

---

## 3. Avatars

### Class Structure

**Base Class:**
- `.avatar` - Base avatar (2.5rem square, border-radius: 6px)

**Sizes:**
- `.avatar-xxs` - 1rem
- `.avatar-xs` - 1.25rem
- `.avatar-sm` - 2rem
- `.avatar-md` - 2.5rem (default)
- `.avatar-lg` - 3rem
- `.avatar-xl` - 5rem
- `.avatar-2xl` - 7rem

**Shapes:**
- `.avatar-rounded` - Fully circular (border-radius: 100rem)

**Avatar List:**
- `.avatar-list` - Container for multiple avatars
- `.avatar-list-stacked` - Overlapping avatars

**Status Badge:**
- Add `.badge` inside avatar for status indicator

**Special:**
- `.avatar-upload` - Upload placeholder style
- `.avatar-cover` - Avatar overlapping card edge
- `.avatar-brand` - Small brand icon overlay

### HTML Examples

```html
<!-- Basic avatar with image -->
<span class="avatar" style="background-image: url(photo.jpg)"></span>

<!-- Avatar with initials -->
<span class="avatar">AB</span>

<!-- Avatar with icon -->
<span class="avatar">
  <svg class="icon avatar-icon">...</svg>
</span>

<!-- Avatar with status -->
<span class="avatar">
  <span class="badge bg-success"></span>
</span>

<!-- Sized avatars -->
<span class="avatar avatar-xs">XS</span>
<span class="avatar avatar-sm">SM</span>
<span class="avatar avatar-lg">LG</span>

<!-- Rounded avatar -->
<span class="avatar avatar-rounded" style="background-image: url(photo.jpg)"></span>

<!-- Avatar list -->
<div class="avatar-list">
  <span class="avatar">AB</span>
  <span class="avatar">CD</span>
  <span class="avatar">EF</span>
</div>

<!-- Stacked avatar list -->
<div class="avatar-list avatar-list-stacked">
  <span class="avatar">AB</span>
  <span class="avatar">CD</span>
  <span class="avatar">+3</span>
</div>
```

---

## 4. Badges

### Class Structure

**Base Class:**
- `.badge` - Inline-flex badge

**Sizes:**
- `.badge-sm` - Small (font: 0.71428571em, padding: 2px 0.25rem)
- `.badge-lg` - Large (font: 1em, padding: 0.25rem 0.5rem)

**Variants:**
- `.badge-outline` - Outlined badge
- `.badge-pill` - Fully rounded

**Colors:**
- `.bg-{color}` with `.text-{color}-fg` - Solid color badges
- Use theme colors: primary, secondary, success, info, warning, danger

**Special:**
- `.badge-dot` - Small dot badge (10px circle)
- `.badge-notification` - Positioned badge for notifications
- `.badge-blink` - Animated blinking badge

### HTML Examples

```html
<!-- Basic badge -->
<span class="badge bg-primary text-primary-fg">Primary</span>

<!-- Small badge -->
<span class="badge badge-sm bg-success text-success-fg">New</span>

<!-- Outline badge -->
<span class="badge badge-outline text-warning">Warning</span>

<!-- Badge with icon -->
<span class="badge bg-info text-info-fg">
  <svg class="icon">...</svg>
  Info
</span>

<!-- Dot badge -->
<span class="badge badge-dot bg-danger"></span>

<!-- Notification badge -->
<button class="btn btn-icon">
  <svg class="icon">...</svg>
  <span class="badge badge-notification bg-danger">3</span>
</button>

<!-- Badges list -->
<div class="badges-list">
  <span class="badge bg-primary text-primary-fg">Tag 1</span>
  <span class="badge bg-secondary text-secondary-fg">Tag 2</span>
</div>
```

---

## 5. Forms

### Class Structure

**Form Controls:**
- `.form-control` - Base input style
- `.form-control-light` - Light gray background
- `.form-control-dark` - Dark transparent style
- `.form-control-rounded` - Fully rounded (border-radius: 10rem)
- `.form-control-flush` - No styling (transparent)

**Form Labels:**
- `.form-label` - Standard label (font-weight: 500)
- `.form-label.required` - Adds red asterisk

**Form Hints:**
- `.form-hint` - Helper text (color: secondary)
- `.form-label-description` - Floated right description

**Input Groups:**
- `.input-group` - Grouped inputs
- `.input-group-flat` - Flat style with focus effect
- `.input-group-text` - Addon text

**Form Sizes:**
- `.form-control-sm` - Small inputs
- `.form-control-lg` - Large inputs

**Checkboxes & Radios:**
- `.form-check` - Wrapper
- `.form-check-input` - Checkbox/radio input (1.25rem)
- `.form-check-label` - Label text
- `.form-switch` - Toggle switch (2rem × 1.25rem)

**Select:**
- `.form-select` - Styled select dropdown

**Other:**
- `.form-footer` - Footer section (margin-top: 2rem)
- `.form-fieldset` - Grouped fields with background

### HTML Examples

```html
<!-- Basic input -->
<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control" placeholder="Email">
</div>

<!-- Required field -->
<div class="mb-3">
  <label class="form-label required">Name</label>
  <input type="text" class="form-control">
</div>

<!-- Input with hint -->
<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" class="form-control">
  <small class="form-hint">Must be at least 8 characters</small>
</div>

<!-- Input group -->
<div class="input-group">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Username">
</div>

<!-- Checkbox -->
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="check1">
  <label class="form-check-label" for="check1">
    Remember me
  </label>
</div>

<!-- Switch -->
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="switch1">
  <label class="form-check-label" for="switch1">
    Enable notifications
  </label>
</div>

<!-- Select -->
<select class="form-select">
  <option>Option 1</option>
  <option>Option 2</option>
</select>

<!-- Textarea -->
<textarea class="form-control" rows="3" placeholder="Your message"></textarea>
```

---

## 6. Tables

### Class Structure

**Base:**
- `.table` - Base table style

**Variants:**
- `.table-striped` - Striped rows (even rows)
- `.table-hover` - Hover effect
- `.table-bordered` - All borders
- `.table-borderless` - No borders
- `.table-transparent` - Transparent header

**Modifiers:**
- `.table-vcenter` - Vertically center content
- `.table-center` - Center all content
- `.table-nowrap` - No text wrapping

**Responsive:**
- `.table-responsive` - Scrollable on mobile
- `.table-mobile` - Mobile-friendly layout

**Sorting:**
- `.table-sort` - Sortable column header

**Selectable:**
- `.table-selectable` - Checkbox selection support

### HTML Examples

```html
<!-- Basic table -->
<div class="table-responsive">
  <table class="table table-vcenter">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John Doe</td>
        <td>john@example.com</td>
        <td><span class="badge bg-success">Active</span></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Sortable table -->
<table class="table">
  <thead>
    <tr>
      <th><button class="table-sort">Name</button></th>
      <th><button class="table-sort asc">Date</button></th>
    </tr>
  </thead>
</table>

<!-- Striped hover table -->
<table class="table table-striped table-hover">
  <tbody>
    <tr><td>Row 1</td></tr>
    <tr><td>Row 2</td></tr>
  </tbody>
</table>
```

---

## 7. Navigation

### Navbar

**Classes:**
- `.navbar` - Main navbar container (height: 3.5rem)
- `.navbar-expand-{breakpoint}` - Responsive collapse
- `.navbar-brand` - Logo/brand section
- `.navbar-nav` - Navigation items container
- `.navbar-vertical` - Vertical sidebar (width: 15rem)

**Navbar Variants:**
- `.navbar-transparent` - Transparent background
- `.navbar-overlap` - Extends 9rem below

**Nav Items:**
- `.nav-link` - Navigation link
- `.nav-link.active` - Active state

### Tabs & Pills

- `.nav-tabs` - Tab navigation
- `.nav-pills` - Pill style
- `.nav-bordered` - Bordered bottom tabs
- `.nav-vertical` - Vertical navigation

### HTML Examples

```html
<!-- Horizontal navbar -->
<div class="navbar navbar-expand-md">
  <div class="container-xl">
    <a class="navbar-brand" href="#">
      <img src="logo.svg" class="navbar-brand-image">
    </a>
    <div class="navbar-nav">
      <a class="nav-link active" href="#">Home</a>
      <a class="nav-link" href="#">About</a>
    </div>
  </div>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Tab 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Tab 2</a>
  </li>
</ul>

<!-- Pills -->
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
</ul>

<!-- Bordered tabs -->
<ul class="nav nav-bordered">
  <li class="nav-item">
    <a class="nav-link active" href="#">Selected</a>
  </li>
</ul>
```

---

## 8. Alerts

### Class Structure

- `.alert` - Base alert container
- `.alert-{color}` - Colored alerts (primary, success, warning, danger, info)
- `.alert-important` - Solid color style
- `.alert-minor` - Subtle style
- `.alert-dismissible` - With close button

**Alert Components:**
- `.alert-icon` - Icon container
- `.alert-heading` - Title text
- `.alert-description` - Secondary text
- `.alert-action` - Action link

### HTML Examples

```html
<!-- Basic alert -->
<div class="alert alert-success">
  <svg class="icon alert-icon">...</svg>
  <div>
    <h4 class="alert-heading">Success!</h4>
    <div class="alert-description">Your changes have been saved.</div>
  </div>
</div>

<!-- Important alert -->
<div class="alert alert-important alert-danger">
  Critical error message
</div>

<!-- Dismissible alert -->
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  Warning message
</div>
```

---

## 9. Modals

### Class Structure

- `.modal` - Base modal
- `.modal-dialog` - Dialog container
- `.modal-content` - Content wrapper
- `.modal-header` - Top section
- `.modal-body` - Content area
- `.modal-footer` - Bottom section

**Sizes:**
- `.modal-sm` - Small (380px)
- `.modal-md` - Medium (540px)
- `.modal-lg` - Large (720px)
- `.modal-xl` - Extra large (1140px)
- `.modal-full-width` - Full width minus margin

**Variants:**
- `.modal-blur` - Blurred backdrop
- `.modal-status` - Status bar at top

### HTML Examples

```html
<!-- Basic modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Modal content here
      </div>
      <div class="modal-footer">
        <button class="btn" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal with status -->
<div class="modal-content">
  <div class="modal-status bg-success"></div>
  <div class="modal-body">...</div>
</div>
```

---

## 10. Progress

### Class Structure

- `.progress` - Progress container
- `.progress-bar` - Progress fill
- `.progress-sm` / `.progress-lg` / `.progress-xl` - Sizes

**Variants:**
- `.progress-bar-indeterminate` - Animated indeterminate
- `.progress-separated` - With spacing

**Progress Steps:**
- `.progress-steps` - Step indicators
- `.progress-steps-item` - Individual step

### HTML Examples

```html
<!-- Basic progress -->
<div class="progress">
  <div class="progress-bar" style="width: 75%"></div>
</div>

<!-- Colored progress -->
<div class="progress">
  <div class="progress-bar bg-success" style="width: 50%"></div>
</div>

<!-- Progress steps -->
<ul class="progress-steps">
  <li class="progress-steps-item">Step 1</li>
  <li class="progress-steps-item active">Step 2</li>
  <li class="progress-steps-item">Step 3</li>
</ul>
```

---

## 11. Status & Indicators

### Status Badge

- `.status` - Status badge (pill-shaped)
- `.status-{color}` - Colored status
- `.status-lite` - Subtle style
- `.status-dot` - Small dot (0.5rem)
- `.status-dot-animated` - Pulsing animation

### Status Indicator

- `.status-indicator` - Large animated indicator (2.5rem)
- `.status-indicator-circle` - Circle layers
- `.status-indicator-animated` - Animated version

### HTML Examples

```html
<!-- Status badge -->
<span class="status status-success">
  <span class="status-dot"></span>
  Active
</span>

<!-- Animated dot -->
<span class="status-dot status-dot-animated bg-success"></span>

<!-- Status indicator -->
<div class="status-indicator status-indicator-animated status-success">
  <div class="status-indicator-circle"></div>
  <div class="status-indicator-circle"></div>
  <div class="status-indicator-circle"></div>
</div>
```

---

## 12. Steps & Timeline

### Steps

- `.steps` - Steps container
- `.step-item` - Individual step
- `.step-item.active` - Current step
- `.steps-counter` - Numbered steps
- `.steps-vertical` - Vertical layout

### Timeline

- `.timeline` - Timeline container
- `.timeline-event` - Event item
- `.timeline-event-icon` - Icon/avatar
- `.timeline-event-card` - Content card
- `.timeline-simple` - No icons

### HTML Examples

```html
<!-- Steps -->
<ul class="steps">
  <li class="step-item">Completed</li>
  <li class="step-item active">Current</li>
  <li class="step-item">Upcoming</li>
</ul>

<!-- Counter steps -->
<ul class="steps steps-counter">
  <li class="step-item">Step 1</li>
  <li class="step-item active">Step 2</li>
  <li class="step-item">Step 3</li>
</ul>

<!-- Timeline -->
<ul class="timeline">
  <li class="timeline-event">
    <div class="timeline-event-icon">
      <svg class="icon">...</svg>
    </div>
    <div class="timeline-event-card">
      <div class="card">
        <div class="card-body">Event details</div>
      </div>
    </div>
  </li>
</ul>
```

---

## 13. Dropdowns

### Class Structure

- `.dropdown` - Wrapper
- `.dropdown-toggle` - Trigger button
- `.dropdown-menu` - Menu container
- `.dropdown-item` - Menu item

**Variants:**
- `.dropdown-menu-arrow` - Arrow pointer
- `.dropdown-menu-end` - Right-aligned
- `.dropdown-menu-scrollable` - Max height with scroll
- `.dropdown-menu-card` - Card style menu

**Menu Items:**
- `.dropdown-item-icon` - Icon in item
- `.dropdown-header` - Section header
- `.dropdown-divider` - Separator

### HTML Examples

```html
<!-- Basic dropdown -->
<div class="dropdown">
  <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
    Dropdown
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action 1</a>
    <a class="dropdown-item" href="#">Action 2</a>
  </div>
</div>

<!-- Dropdown with icons -->
<div class="dropdown-menu">
  <a class="dropdown-item">
    <svg class="icon dropdown-item-icon">...</svg>
    Edit
  </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item">Delete</a>
</div>
```

---

## 14. Empty States

### Class Structure

- `.empty` - Container (centered flex)
- `.empty-icon` - Icon (3rem)
- `.empty-img` - Image
- `.empty-header` - Large number/text (4rem)
- `.empty-title` - Title text
- `.empty-subtitle` - Description
- `.empty-action` - Action buttons
- `.empty-bordered` - With border

### HTML Examples

```html
<!-- Empty state -->
<div class="empty">
  <div class="empty-icon">
    <svg class="icon">...</svg>
  </div>
  <h3 class="empty-title">No results found</h3>
  <p class="empty-subtitle">Try adjusting your search</p>
  <div class="empty-action">
    <button class="btn btn-primary">Clear filters</button>
  </div>
</div>
```

---

## 15. Ribbons

### Class Structure

- `.ribbon` - Base ribbon (positioned absolute)
- `.ribbon-top` - Top edge position
- `.ribbon-bottom` - Bottom position
- `.ribbon-start` / `.ribbon-end` - Left/right
- `.ribbon-bookmark` - Bookmark style

**Colors:** Use `.bg-{color}` classes

### HTML Examples

```html
<!-- Card with ribbon -->
<div class="card">
  <div class="ribbon bg-red">NEW</div>
  <div class="card-body">Content</div>
</div>

<!-- Top ribbon -->
<div class="card">
  <div class="ribbon ribbon-top bg-yellow">
    <svg class="icon">...</svg>
  </div>
  <div class="card-body">Content</div>
</div>
```

---

## 16. Layout Structure

### Page Structure

```html
<div class="page">
  <!-- Optional: Navbar -->
  <div class="navbar navbar-expand-md">...</div>

  <!-- Main wrapper -->
  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header">
      <div class="container-xl">
        <div class="page-pretitle">Pretitle</div>
        <h2 class="page-title">Page Title</h2>
      </div>
    </div>

    <!-- Page content -->
    <div class="page-body">
      <div class="container-xl">
        <!-- Your content -->
      </div>
    </div>
  </div>

  <!-- Optional: Footer -->
  <footer class="footer">...</footer>
</div>
```

### Container Classes

- `.container` - Fixed width responsive
- `.container-xl` - Extra large container
- `.container-fluid` - Full width
- `.container-tight` - Narrow (32rem)
- `.container-narrow` - Medium narrow (61.875rem)

### Grid System

- Standard Bootstrap 5 grid (12 columns)
- `.row` - Row container
- `.col-{breakpoint}-{size}` - Column sizing
- `.row-cards` - Row with card spacing
- `.g-{size}` - Gap utilities (0-5)

---

## 17. Dark Mode

### Implementation

Dark mode uses CSS custom properties and the `[data-bs-theme="dark"]` attribute:

```html
<!-- Enable dark mode -->
<html data-bs-theme="dark">
```

**Dark Mode Classes:**
- `.hide-theme-dark` - Hide in dark mode
- `.hide-theme-light` - Hide in light mode
- `.img-dark` - Dark mode image variant
- `.img-light` - Light mode image variant

**Auto-dark Images:**
- `.navbar-brand-autodark` - Inverts brand image in dark mode

---

## 18. Color System

### Theme Colors

- `primary` - Blue (#066fd1)
- `secondary` - Gray-500
- `success` - Green (#2fb344)
- `info` - Azure (#4299e1)
- `warning` - Yellow (#f59f00)
- `danger` - Red (#d63939)
- `light` - Gray-50
- `dark` - Gray-800

### Extra Colors

- `blue`, `azure`, `indigo`, `purple`, `pink`, `red`
- `orange`, `yellow`, `lime`, `green`, `teal`, `cyan`

### Gray Scale

- `gray-50` to `gray-950` (11 shades)

### Background Utilities

- `.bg-{color}` - Background color
- `.bg-{color}-lt` - Light tint (10% opacity)
- `.text-{color}` - Text color
- `.text-{color}-fg` - Foreground (contrasting) color
- `.text-secondary` - Secondary text (gray-500)
- `.text-muted` - Muted text

---

## 19. Spacing & Sizing

### Spacing Scale

- `0` - 0
- `1` - 0.25rem (4px)
- `2` - 0.5rem (8px)
- `3` - 1rem (16px) - default spacer
- `4` - 1.5rem (24px)
- `5` - 2rem (32px)
- `6` - 2.5rem (40px)

**Extended:**
- `7` to `12` - 3rem to 8rem

### Margin/Padding Utilities

- `.m{side}-{size}` - Margin
- `.p{side}-{size}` - Padding
- Sides: `t` (top), `b` (bottom), `s` (start), `e` (end), `x` (horizontal), `y` (vertical)

### Width/Height

- `.w-{size}` - Width (25, 33, 50, 66, 75, 100, auto)
- `.h-{size}` - Height (same values)
- `.w-full` - 100% width
- `.h-full` - 100% height

---

## 20. Typography

### Headings

- `h1` - 1.5rem / 2rem line-height
- `h2` - 1.25rem / 1.75rem
- `h3` - 1rem / 1.5rem
- `h4` - 0.875rem / 1.25rem
- `h5` - 0.75rem / 1rem
- `h6` - 0.625rem / 1rem

### Font Weights

- `.fw-light` - 300
- `.fw-normal` - 400
- `.fw-medium` - 500
- `.fw-bold` - 600
- `.fw-black` - 700

### Text Utilities

- `.text-start` / `.text-center` / `.text-end` - Alignment
- `.text-truncate` - Ellipsis overflow
- `.text-uppercase` / `.text-lowercase` - Transform
- `.text-nowrap` - No wrapping

---

## 21. Border & Radius

### Borders

- `.border` - All sides (1px)
- `.border-{side}` - Single side (top, end, bottom, start)
- `.border-wide` - 2px border
- `.border-0` - Remove border

### Border Radius

- `.rounded` - 6px (default)
- `.rounded-xs` - 2px
- `.rounded-sm` - 4px
- `.rounded-lg` - 8px
- `.rounded-pill` - 100rem (fully rounded)
- `.rounded-0` - No radius
- `.rounded-{side}` - Single side

---

## 22. Utility Classes

### Display

- `.d-none` / `.d-block` / `.d-flex` / `.d-inline-flex`
- Responsive: `.d-{breakpoint}-{value}`

### Flexbox

- `.flex-row` / `.flex-column`
- `.justify-content-{value}` - start, center, end, between, around
- `.align-items-{value}` - start, center, end, stretch
- `.flex-wrap` / `.flex-nowrap`
- `.gap-{size}` - Gap between items

### Position

- `.position-relative` / `.position-absolute` / `.position-fixed`
- `.top-0` / `.bottom-0` / `.start-0` / `.end-0`

### Cursor

- `.cursor-pointer` - Pointer cursor
- `.cursor-not-allowed` - Disabled cursor

### Object Fit

- `.object-contain` / `.object-cover` / `.object-fill`

---

## 23. JavaScript Components

Components requiring JavaScript (Bootstrap 5 JS):

1. **Dropdowns** - `data-bs-toggle="dropdown"`
2. **Modals** - `data-bs-toggle="modal" data-bs-target="#id"`
3. **Toasts** - `data-bs-toggle="toast"`
4. **Collapse/Accordion** - `data-bs-toggle="collapse"`
5. **Tabs** - `data-bs-toggle="tab"`
6. **Tooltips** - `data-bs-toggle="tooltip"` (requires initialization)
7. **Popovers** - `data-bs-toggle="popover"` (requires initialization)
8. **Offcanvas** - `data-bs-toggle="offcanvas"`
9. **Carousel** - Carousel navigation

**Initialization Example:**

```javascript
// Enable tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
```

---

## 24. Responsive Breakpoints

```scss
$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
)
```

Use breakpoint infixes in responsive classes:
- `.col-md-6` - Column at medium breakpoint
- `.d-lg-none` - Display at large breakpoint
- `.mb-sm-3` - Margin at small breakpoint

---

## 25. Icons

Tabler uses inline SVG icons. Icon structure:

```html
<svg class="icon">
  <use xlink:href="path/to/tabler-icons.svg#icon-name"/>
</svg>
```

**Icon Utilities:**
- `.icon` - Base icon class (1.25rem)
- `.icon-sm` - Small icon
- `.icon-lg` - Large icon
- Icon color inherits from parent

---

## Laravel Blade Component Recommendations

Based on this analysis, prioritize creating these components:

### Core Components (Must-Have)
1. **Button** - All variants, sizes, states
2. **Card** - With header, body, footer slots
3. **Alert** - All colors, dismissible option
4. **Badge** - Colors, sizes, outline variant
5. **Avatar** - Sizes, shapes, status indicator

### Form Components
6. **Input** - With label, hint, validation states
7. **Textarea** - Similar to input
8. **Select** - Styled dropdown
9. **Checkbox** - With label
10. **Radio** - With label
11. **Switch** - Toggle component

### Layout Components
12. **Page** - Base page structure
13. **Container** - Responsive containers
14. **Navbar** - Main navigation
15. **Card** - Already listed above

### Data Display
16. **Table** - Responsive, sortable
17. **Empty** - Empty state component
18. **Timeline** - Event timeline

### Interactive Components
19. **Modal** - Dialog component
20. **Dropdown** - Menu component
21. **Tabs** - Tab navigation
22. **Progress** - Progress bars

### Additional Components
23. **Status** - Status indicators
24. **Steps** - Step indicators
25. **Ribbon** - Decorative ribbons

### Component Design Principles

Each component should:
- Accept Laravel-friendly props (color, size, variant)
- Support slots for flexible content
- Include dark mode support via Tabler's classes
- Use `$attributes->merge()` for class merging
- Follow Tabler's CSS class naming conventions
- Be accessibility-friendly (ARIA attributes)
- Include sensible defaults
