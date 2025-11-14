# Demo & Documentation Guidelines

> Standards and best practices for creating demo pages in `/resources/views/demo/`
>
> Based on industry research of 8+ popular Laravel component libraries

## Table of Contents

- [Purpose](#purpose)
- [Industry Research Summary](#industry-research-summary)
- [File Naming Convention](#file-naming-convention)
- [File Structure Template](#file-structure-template)
- [Organization Principles](#organization-principles)
- [Content Guidelines](#content-guidelines)
- [Column Width Guidelines](#column-width-guidelines)
- [Component-Specific Guidelines](#component-specific-guidelines)
- [Documentation Standards](#documentation-standards)
- [Accessibility Guidelines](#accessibility-guidelines)
- [Future Enhancements](#future-enhancements)
- [Testing Your Demo](#testing-your-demo)
- [Common Mistakes to Avoid](#common-mistakes-to-avoid)
- [Quick Reference Checklist](#quick-reference-checklist)

---

## Purpose

Demo files showcase Tabler UI Blade components with:

- **Live examples** of all component variations
- **Code snippets** for easy copy-paste
- **Complete documentation** of props and usage
- **Visual reference** for developers implementing components

### Design Philosophy

Tabler-Blade follows the **Minimal Props Philosophy**:

- Props only for behavioral changes, complex logic, and common patterns
- Users apply Tabler CSS classes directly via `class=""` attribute
- Separate **Props Reference** and **CSS Classes** documentation sections
- This approach increases flexibility and reduces maintenance overhead

---

## Industry Research Summary

Research of 8 popular Laravel component libraries (Mary UI, WireUI, BladewindUI, TallStackUI, Blade UI Kit, Filament, Flowbite, TallCraftUI) revealed common patterns:

### Common Documentation Patterns

**Most libraries use 3-4 core sections per component:**

1. **Progressive Examples** (Basic → Advanced)
2. **Variations/States** (Colors, sizes, styles)
3. **API Reference** (Props/attributes table)
4. **Special Features** (Icons, loading states, etc.)

### Two Main Approaches

**Approach A: Interactive Demo Sites** (Mary UI, WireUI, BladewindUI)

- Live, functional components on the page
- "Learn by doing" philosophy
- Real Livewire interactions
- Code snippets alongside live demos

**Approach B: Traditional Documentation** (Filament, TallStackUI)

- Structured reference pages
- Comprehensive API tables
- Hierarchical navigation
- Separate examples and reference sections

### Tabler-Blade's Unique Approach

Our documentation combines the best of both:

- ✅ Progressive complexity (industry standard)
- ✅ Separate Props & CSS sections (clearer than mixing)
- ✅ Code snippets inline with examples (common pattern)
- ✅ **Minimal Props Philosophy** (unique differentiator)
- ✅ Comprehensive usage notes (more detailed than most)
- ✅ Inline component documentation (PHPDoc blocks)

### Best Practices from Top Libraries

**Mary UI:**

- 4 full demo applications showing real-world usage
- DocSearch integration (⌘ + G keyboard shortcut)
- Props shown inline in examples (no formal table)

**WireUI:**

- Formal API table at end of each page (Property | Type | Default | Required)
- 24 color variants for each style systematically shown
- Table of contents with anchor links

**BladewindUI:**

- Multi-page interactive demos (dashboard, employee management)
- Live rendered examples above code snippets
- API table with Option | Default | Available Values columns

**TallStackUI:**

- Separate Normal and Circle button documentation
- Soft Personalization - runtime customization via service provider
- 12 subsections per variant (very comprehensive)

**Filament:**

- Hierarchical navigation by functionality
- Version switcher (4.x, 3.x, 2.x, 1.x)
- Testing strategies documented

**Key Takeaway:** Progressive complexity, formal API tables, and visual examples are universal standards. Our separate Props/CSS sections and Minimal Props Philosophy differentiate us positively.

---

## File Naming Convention

```
resources/views/demo/{component-name}.blade.php
```

**Examples:**

- `button.blade.php` - Single component
- `cards.blade.php` - Component family (cards.card, cards.header, etc.)
- `forms.blade.php` - Collection of related components
- `modals.blade.php` - Single component with multiple variations

---

## File Structure Template

### 1. Header Comment Block (Required)

Provides context and quick reference for what's being demonstrated.

```blade
{{--
    {Component Name} Demo

    Comprehensive showcase of all {component} variations, states, and features.
    Based on Tabler UI {component} patterns with Laravel Blade components.

    Component: <x-tabler::component-name>
    Location: tabler-blade/stubs/resources/views/tabler/{component-name}.blade.php
--}}
```

**For component families**, list all related components:

```blade
Components:
- <x-tabler::cards.card>
- <x-tabler::cards.header>
- <x-tabler::cards.body>
```

### 2. Layout Extension (Required)

All demo files extend the app layout:

```blade
@extends('layouts.app')
```

### 3. Optional Styles (If Needed)

For demo-specific styles, use `@push('styles')`:

```blade
@push('styles')
<style>
    .demo-specific-class { ... }
</style>
@endpush
```

### 4. Page Structure (Required)

```blade
@section('page-header')
    <x-tabler::page-header
        title="{Component Name}"
        subtitle="Brief description"
    />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Demo sections --}}
    </div>
@endsection
```

### 5. Demo Section Structure (Required)

Each variation in a card within a column with live examples and code snippets:

**Guidelines:**

- Use `col-md-6` for side-by-side comparisons
- Use `col-md-12` or `col-12` for full-width complex examples
- Always include a code snippet showing usage
- Use descriptive titles and subtitles

### 6. Documentation Sections (Required)

At the end of every demo, include two separate documentation sections:

#### 6.1 Props Reference Section

```blade
{{-- Props Reference --}}
<div class="col-12">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>Props Reference</x-slot>
            <x-slot:subtitle>Complete list of available component props</x-slot>
        </x-tabler::cards.header>
        <x-tabler::cards.body>
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th>Prop</th>
                            <th>Type</th>
                            <th>Default</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>propName</code></td>
                            <td><span class="badge bg-azure-lt">string</span></td>
                            <td><code>'default'</code></td>
                            <td>Prop description and valid options</td>
                        </tr>
                        {{-- More rows --}}
                    </tbody>
                </table>
            </div>

            {{-- If component has slots --}}
            <div class="mt-4">
                <h4>Available Slots</h4>
                <p class="text-secondary">Named slots for flexible content placement.</p>
                <div class="table-responsive">
                    <table class="table table-vcenter">
                        <thead>
                            <tr>
                                <th>Slot</th>
                                <th>Required</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>default</code></td>
                                <td><span class="badge bg-purple-lt">No</span></td>
                                <td>Main content slot description</td>
                            </tr>
                            <tr>
                                <td><code>title</code></td>
                                <td><span class="badge bg-purple-lt">No</span></td>
                                <td>Optional title slot</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Usage Notes --}}
            <div class="mt-4">
                <h4>Usage Notes</h4>
                <ul class="text-secondary">
                    <li>Important usage note or tip</li>
                    <li>Compatibility information</li>
                    <li>Best practices</li>
                    <li>Special behaviors or side effects</li>
                </ul>
            </div>
        </x-tabler::cards.body>
    </x-tabler::cards.card>
</div>
```

**Type Badges for Props:**

- `bg-azure-lt` - string
- `bg-purple-lt` - bool
- `bg-green-lt` - int/float/number
- `bg-orange-lt` - array
- `bg-pink-lt` - mixed/any

**Required Badges for Slots:**

- `bg-danger-lt` - Yes (required)
- `bg-purple-lt` - No (optional)

#### 6.2 Available CSS Classes Section

```blade
{{-- Available CSS Classes --}}
<div class="col-12">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>Available CSS Classes</x-slot>
            <x-slot:subtitle>Additional styling options via class attribute</x-slot>
        </x-tabler::cards.header>
        <x-tabler::cards.body>
            <p class="text-secondary">You can use these classes via the <code>class=""</code> attribute for additional styling:</p>

            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>custom-class</code></td>
                            <td>Description of what the class does</td>
                        </tr>
                        <tr>
                            <td><code>btn-link</code></td>
                            <td>Text button style with no background</td>
                        </tr>
                        <tr>
                            <td><code>shadow-sm</code>, <code>shadow</code>, <code>shadow-lg</code></td>
                            <td>Add shadow effects (small, default, large)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Optional: CSS Class Categories --}}
            <div class="mt-4">
                <h4>Color Classes</h4>
                <p class="text-secondary">Background and text colors available:</p>
                <ul class="text-secondary">
                    <li><code>bg-{color}</code> - Solid background colors</li>
                    <li><code>bg-{color}-lt</code> - Light background variants</li>
                    <li><code>text-{color}</code> - Text colors</li>
                    <li><code>text-{color}-fg</code> - Optimal contrast text for colored backgrounds</li>
                </ul>
                <p class="text-secondary">
                    <strong>Available colors:</strong>
                    <code>primary</code>, <code>secondary</code>, <code>success</code>, <code>danger</code>,
                    <code>warning</code>, <code>info</code>, <code>light</code>, <code>dark</code>,
                    <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
                    <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
                    <code>lime</code>, <code>green</code>, <code>teal</code>, <code>cyan</code>
                </p>
            </div>

            {{-- Optional: Utility Classes --}}
            <div class="mt-4">
                <h4>Utility Classes</h4>
                <ul class="text-secondary">
                    <li><code>mb-2</code>, <code>mt-2</code>, <code>me-2</code>, <code>ms-2</code> - Margin utilities for spacing</li>
                    <li><code>w-100</code> - Full width</li>
                    <li><code>d-flex</code>, <code>d-block</code>, <code>d-none</code> - Display utilities</li>
                </ul>
            </div>
        </x-tabler::cards.body>
    </x-tabler::cards.card>
</div>
```

---

## Organization Principles

### Progressive Complexity

Organize sections from simple to complex (industry standard):

1. **Basic Usage** - Simplest form with minimal props
2. **Variations** - Color, size, style variants
3. **With Icons** - Adding icons to components
4. **States** - Active, disabled, loading states
5. **Complex Examples** - Multiple features combined
6. **Advanced Patterns** - Real-world use cases
7. **Props Reference** - Complete prop documentation
8. **Available CSS Classes** - CSS styling options

**Example Order for Buttons:**

```blade
1. Standard Buttons (colors)
2. Outline Buttons (variant)
3. Ghost Buttons (variant)
4. Button Shapes (square, pill)
5. Icon-Only Buttons
6. Buttons with Icons (leading/trailing)
7. Animated Icons
8. Button Sizes
9. Button States (loading, disabled)
10. Special Styles (link, action)
11. Full Width Buttons
12. Button Groups (common patterns)
13. Props Reference
14. Available CSS Classes
```

### Logical Grouping

Group related variations together:

```blade
{{-- Button Colors --}}
<div class="col-md-6">
    {{-- All color variations --}}
</div>

{{-- Button Variants --}}
<div class="col-md-6">
    {{-- All variant types --}}
</div>
```

### Systematic Variation Display

Following WireUI's approach, show all variations systematically:

**For colors (show all 24 Tabler colors):**

```blade
{{-- Color Variations --}}
<div class="col-12">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>All Color Variations</x-slot>
            <x-slot:subtitle>All 24 available Tabler color options</x-slot>
        </x-tabler::cards.header>
        <x-tabler::cards.body>
            <div class="btn-list">
                <x-tabler::button color="primary">Primary</x-tabler::button>
                <x-tabler::button color="secondary">Secondary</x-tabler::button>
                {{-- ... all 24 colors --}}
            </div>
        </x-tabler::cards.body>
    </x-tabler::cards.card>
</div>
```

### Code Snippet Placement

**Option 1: Inline with Examples (Recommended)**

```blade
<x-tabler::cards.body>
    <div class="btn-list">
        <x-tabler::button color="primary">Primary</x-tabler::button>
        <x-tabler::button color="secondary">Secondary</x-tabler::button>
    </div>
    <div class="mt-3">
        <pre class="p-3 rounded"><code>&lt;x-tabler::button color="primary"&gt;Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="secondary"&gt;Secondary&lt;/x-tabler::button&gt;</code></pre>
    </div>
</x-tabler::cards.body>
```

**Option 2: Separate Code Card**

```blade
{{-- Live example card --}}
<div class="col-md-6">
    <x-tabler::cards.card>
        {{-- Examples --}}
    </x-tabler::cards.card>

    {{-- Code card below --}}
    <x-tabler::cards.card class="mt-2">
        <x-tabler::cards.body>
            <pre class="p-3 rounded mb-0"><code>...</code></pre>
        </x-tabler::cards.body>
    </x-tabler::cards.card>
</div>
```

Use Option 2 when code is complex or when showing side-by-side comparisons.

---

## Content Guidelines

### Section Titles

Use clear, descriptive titles:

**Good:**

- "Standard Buttons"
- "Outline Buttons"
- "Buttons with Leading Icons"
- "Dismissible Alerts"
- "Card with Image Top"

**Bad:**

- "Buttons 1"
- "Type 2"
- "Example"

### Section Subtitles

Provide context and key features:

**Good:**

- "Default button style with various colors"
- "Transparent background with colored border"
- "Icon positioned before text"
- "Alerts with close button"

**Bad:**

- "See below"
- "Examples"
- "Buttons"

### Code Snippets

**Best Practices:**

- Show only the essential code (no wrapper divs unless necessary)
- Use proper indentation (2 spaces)
- Include relevant props and attributes
- Escape HTML entities (`&lt;`, `&gt;`, `&amp;`)
- Keep lines under 80 characters when possible
- Use `...` to indicate omitted repetitive code

**Example:**

```blade
<pre class="p-3 rounded"><code>&lt;x-tabler::button color="primary"&gt;Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="secondary"&gt;Secondary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="success"&gt;Success&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="danger"&gt;Danger&lt;/x-tabler::button&gt;</code></pre>
```

### Example Content

Use realistic, professional content:

**Good:**

- "Your changes have been saved successfully"
- "Please review your information before proceeding"
- "Payment processed successfully"

**Bad:**

- "Lorem ipsum dolor sit amet"
- "Test content"
- "Example text"

Use Lorem ipsum only when demonstrating scrollable content or text wrapping.

---

## Column Width Guidelines

Choose column width based on content:

### `col-md-6` (Half Width)

- Simple variations
- Side-by-side comparisons
- Components that don't need full width

### `col-md-12` or `col-12` (Full Width)

- Complex examples with multiple features
- Button groups or layouts
- Wide tables
- Props reference section
- Available CSS Classes section
- Components that benefit from more space
- Systematic color/variant showcases (all 24 colors)

### `col-md-4` (Third Width)

- Small components (badges, icons)
- When showing 3 variations side-by-side

---

## Component-Specific Guidelines

### For Interactive Components (Modals, Dropdowns, Tabs)

Include working interactive examples:

```blade
<x-tabler::button data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch Modal
</x-tabler::button>

<x-tabler::modals.modal id="exampleModal">
    {{-- Modal content --}}
</x-tabler::modals.modal>
```

### For Form Components

Show validation states and accessibility features:

```blade
{{-- Valid state --}}
<x-tabler::forms.input
    name="email"
    value="user@example.com"
    class="is-valid"
    aria-label="Email address"
/>
<x-tabler::forms.valid-feedback>Looks good!</x-tabler::forms.valid-feedback>

{{-- Invalid state --}}
<x-tabler::forms.input
    name="email"
    class="is-invalid"
    aria-label="Email address"
    aria-describedby="emailError"
/>
<x-tabler::forms.invalid-feedback id="emailError">
    Please provide a valid email.
</x-tabler::forms.invalid-feedback>
```

### For Layout Components

Use placeholder content that shows structure:

```blade
<x-tabler::cards.card>
    <x-tabler::cards.img
        src="https://placehold.co/600x300/3b82f6/ffffff?text=Top+Image"
        alt="Card image"
    />
    <x-tabler::cards.body>
        <h3 class="card-title">Card Title</h3>
        <p class="text-secondary">Card content goes here.</p>
    </x-tabler::cards.body>
</x-tabler::cards.card>
```

---

## Documentation Standards

### Props Reference Section

**Prop Type Descriptions:**

Be specific with type annotations:

- `string` - Single string value
- `string|null` - String or null (optional)
- `bool` - Boolean true/false
- `int` - Integer number
- `float` - Decimal number
- `int|float` - Number (integer or float)
- `array` - Array of values

**Default Values:**

Use code formatting:

- `<code>'button'</code>` - String default
- `<code>null</code>` - Null default
- `<code>false</code>` - Boolean false
- `<code>true</code>` - Boolean true
- `<code>0</code>` - Number default

**Descriptions:**

Include:

1. What the prop does
2. Available options (if limited)
3. Special behavior or side effects

**Example:**

```
Button type attribute. Options: button, submit, reset
```

**With side effects:**

```
URL to link to. When set, renders as <a> instead of <button>
```

**Available Slots Table:**

Only include if component has named slots:

- List each named slot
- Indicate if slot is required or optional
- Describe what content goes in each slot

### Available CSS Classes Section

**Organization:**

Group classes by category:

1. **Component-specific classes** - Classes unique to this component
2. **Color classes** - Background and text colors
3. **Utility classes** - Spacing, display, etc.

**Format:**

```blade
<table class="table table-vcenter">
    <thead>
        <tr>
            <th>Class</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>btn-link</code></td>
            <td>Text button style with no background</td>
        </tr>
        <tr>
            <td><code>btn-action</code></td>
            <td>Minimal action button (typically for icon-only buttons)</td>
        </tr>
    </tbody>
</table>
```

**Color Classes Section:**

List all available Tabler colors with examples:

```blade
<p class="text-secondary">
    <strong>Available colors:</strong>
    <code>primary</code>, <code>secondary</code>, <code>success</code>, <code>danger</code>,
    <code>warning</code>, <code>info</code>, <code>light</code>, <code>dark</code>,
    <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
    <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
    <code>lime</code>, <code>green</code>, <code>teal</code>, <code>cyan</code>
</p>
```

### Usage Notes

Include important information:

```markdown
- Icons use the `secondnetwork/blade-tabler-icons` package
- Icon names should be provided without the `tabler-` prefix
- When `href` is set, component renders as `<a>` element
- Colors can be any valid Tabler color
- Loading state automatically disables the component
```

---

## Accessibility Guidelines

Document accessibility features for all components (industry gap we can fill):

### ARIA Attributes

Include ARIA attributes in examples when relevant:

```blade
<x-tabler::button
    aria-label="Close dialog"
    aria-controls="dialog-1"
>
    Close
</x-tabler::button>
```

### Keyboard Navigation

Document keyboard interactions:

```markdown
**Keyboard Navigation:**
- `Tab` - Move focus to button
- `Space` or `Enter` - Activate button
- `Esc` - Close modal (if button opens modal)
```

### Screen Reader Support

Note screen reader behavior:

```markdown
**Screen Reader Support:**
- Button label is announced to screen readers
- Loading state announces "Loading" to assistive technologies
- Disabled state is properly communicated
```

### Accessibility Checklist Section

Add this section after Usage Notes:

```blade
<div class="mt-4">
    <h4>Accessibility</h4>
    <ul class="text-secondary">
        <li><strong>Color Contrast:</strong> All color variations meet WCAG AA standards</li>
        <li><strong>Focus Visible:</strong> Component has visible focus indicator</li>
        <li><strong>Keyboard:</strong> Fully operable via keyboard</li>
        <li><strong>Screen Readers:</strong> All states announced to assistive technologies</li>
        <li><strong>ARIA:</strong> Use <code>aria-label</code> for icon-only buttons</li>
    </ul>
</div>
```

---

## Future Enhancements

Based on industry research, these features could enhance the demo experience:

### Copy Button for Code Snippets

Add Alpine.js-powered copy buttons to code snippets:

```blade
<div class="position-relative">
    <pre class="p-3 rounded"><code>&lt;x-tabler::button&gt;Click Me&lt;/x-tabler::button&gt;</code></pre>
    <button
        class="btn btn-sm btn-ghost-secondary position-absolute top-0 end-0 m-2"
        @click="navigator.clipboard.writeText($el.previousElementSibling.textContent)"
    >
        <x-tabler-copy class="icon" />
    </button>
</div>
```

### Interactive Playground (Future)

Consider adding an interactive playground section:

```blade
{{-- Interactive Playground --}}
<div class="col-12">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>Interactive Playground</x-slot>
            <x-slot:subtitle>Customize and preview live</x-slot>
        </x-tabler::cards.header>
        <x-tabler::cards.body>
            {{-- Form controls to adjust props --}}
            {{-- Live preview updates as you change values --}}
        </x-tabler::cards.body>
    </x-tabler::cards.card>
</div>
```

### Search Integration

Current: Meilisearch is implemented ✅
Future: Add keyboard shortcut (⌘ + K or ⌘ + G) like Mary UI

### Showcase Applications (Future)

Create full-page demos showing components in context:

- Dashboard Demo
- Admin Panel Demo
- Settings Page Demo
- E-commerce Demo

---

## Comments in Demo Files

### Blade Comments

Use Blade comments for section separators:

```blade
{{-- Standard Buttons --}}
<div class="col-md-6">
    ...
</div>

{{-- Outline Buttons --}}
<div class="col-md-6">
    ...
</div>
```

### When to Add Comments

**Always comment:**

- Major sections
- Non-obvious groupings
- Complex examples
- Special cases or workarounds

**Don't comment:**

- Obvious code
- Self-explanatory component usage
- Every single line

---

## Testing Your Demo

Before finalizing a demo file:

### Visual Testing

- [ ] View the demo in a browser
- [ ] Test all interactive elements (buttons, dropdowns, modals)
- [ ] Verify responsive behavior (resize browser)
- [ ] Check spacing and alignment
- [ ] Ensure code snippets match live examples
- [ ] Test keyboard navigation
- [ ] Test with screen reader (if possible)

### Content Testing

- [ ] All props are demonstrated
- [ ] Code snippets are accurate
- [ ] No typos in descriptions
- [ ] Links work (if any)
- [ ] Props table is complete
- [ ] CSS classes table is complete
- [ ] Accessibility notes included

### Completeness Testing

- [ ] Header comment block present
- [ ] Progressive complexity order
- [ ] Props reference section included
- [ ] Available CSS Classes section included
- [ ] Usage notes section included
- [ ] Accessibility section included
- [ ] All variations covered

---

## Common Mistakes to Avoid

### ❌ Don't Do This

**Mixing props and CSS classes in one table:**

```blade
<table>
    <tr>
        <td><code>color</code></td>
        <td>Prop for button color</td>
    </tr>
    <tr>
        <td><code>btn-link</code></td>
        <td>CSS class for text button</td>
    </tr>
</table>
```

**Incomplete code snippets:**

```blade
<pre><code>&lt;x-tabler::button&gt;...&lt;/x-tabler::button&gt;</code></pre>
```

**Missing context:**

```blade
<x-slot:title>Example</x-slot:title>
```

**Inconsistent formatting:**

```blade
<x-tabler::button color="primary">Primary</x-tabler::button>
<x-tabler::button   color="secondary"  >Secondary</x-tabler::button>
```

**Missing accessibility attributes:**

```blade
{{-- Icon-only button without aria-label --}}
<x-tabler::button icon="o-trash" />
```

### ✅ Do This

**Separate props and CSS classes:**

```blade
{{-- Props Reference --}}
<div class="col-12">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>Props Reference</x-slot>
        </x-tabler::cards.header>
        {{-- Props table --}}
    </x-tabler::cards.card>
</div>

{{-- Available CSS Classes --}}
<div class="col-12">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>Available CSS Classes</x-slot>
        </x-tabler::cards.header>
        {{-- CSS classes table --}}
    </x-tabler::cards.card>
</div>
```

**Complete code snippets:**

```blade
<pre><code>&lt;x-tabler::button color="primary"&gt;Click Me&lt;/x-tabler::button&gt;</code></pre>
```

**Clear context:**

```blade
<x-slot:title>Outline Buttons</x-slot:title>
<x-slot:subtitle>Transparent background with colored border</x-slot:subtitle>
```

**Include accessibility attributes:**

```blade
{{-- Icon-only button with aria-label --}}
<x-tabler::button
    icon="o-trash"
    aria-label="Delete item"
/>
```

---

## Quick Reference Checklist

Use this checklist for every demo file:

```
Demo File Checklist
├─ [ ] Header comment block
├─ [ ] HTML document structure
├─ [ ] Page header with title
├─ [ ] Demo sections
│   ├─ [ ] Blade comment for each section
│   ├─ [ ] Card with title and subtitle
│   ├─ [ ] Live examples
│   └─ [ ] Code snippets
├─ [ ] Progressive complexity order
├─ [ ] Props Reference section
│   ├─ [ ] Props table with types and defaults
│   ├─ [ ] Slots section (if applicable)
│   ├─ [ ] Usage notes
│   └─ [ ] Accessibility notes
├─ [ ] Available CSS Classes section
│   ├─ [ ] Component-specific classes
│   ├─ [ ] Color classes (if applicable)
│   └─ [ ] Utility classes
├─ [ ] Visual testing complete
├─ [ ] Code snippets verified
├─ [ ] Accessibility tested
└─ [ ] No typos or errors
```

---

## Example Template

A minimal demo file template:

```blade
{{--
    Component Demo

    Comprehensive showcase of component variations, states, and features.

    Component: <x-tabler::component>
    Location: tabler-blade/stubs/resources/views/tabler/component.blade.php
--}}

@extends('tabler::layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Component Name</h2>
                <div class="text-secondary mt-1">Comprehensive showcase</div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">

            {{-- Basic Usage --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-slot:title>Basic Usage</x-slot>
                        <x-slot:subtitle>Simplest form</x-slot>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::component>Example</x-tabler::component>

                        <div class="mt-3">
                            <pre class="p-3 rounded"><code>&lt;x-tabler::component&gt;Example&lt;/x-tabler::component&gt;</code></pre>
                        </div>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            {{-- Props Reference --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-slot:title>Props Reference</x-slot>
                        <x-slot:subtitle>Complete list of available component props</x-slot>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Prop</th>
                                        <th>Type</th>
                                        <th>Default</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Props --}}
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            <h4>Usage Notes</h4>
                            <ul class="text-secondary">
                                <li>Usage note 1</li>
                                <li>Usage note 2</li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <h4>Accessibility</h4>
                            <ul class="text-secondary">
                                <li><strong>Color Contrast:</strong> Meets WCAG AA standards</li>
                                <li><strong>Keyboard:</strong> Fully keyboard accessible</li>
                                <li><strong>Screen Readers:</strong> States announced properly</li>
                            </ul>
                        </div>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            {{-- Available CSS Classes --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-slot:title>Available CSS Classes</x-slot>
                        <x-slot:subtitle>Additional styling options via class attribute</x-slot>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <p class="text-secondary">You can use these classes via the <code>class=""</code> attribute:</p>

                        <div class="table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- CSS classes --}}
                                </tbody>
                            </table>
                        </div>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

        </div>
    </div>
</div>
@endsection
```

---

## Summary

A good demo file:

1. ✅ Has clear structure and organization
2. ✅ Shows all component variations systematically
3. ✅ Includes accurate code snippets
4. ✅ Provides complete documentation in two separate sections:
   - **Props Reference** - Component API (props, slots, usage notes, accessibility)
   - **Available CSS Classes** - Styling options (classes, colors, utilities)
5. ✅ Uses professional, realistic content
6. ✅ Follows progressive complexity
7. ✅ Includes accessibility documentation
8. ✅ Is visually tested and verified

### What Makes Tabler-Blade Different

- **Minimal Props Philosophy** - Unique approach emphasizing CSS flexibility
- **Separate Props/CSS Documentation** - Clearer than mixing them
- **Accessibility Focus** - Industry gap we're filling
- **Comprehensive Usage Notes** - More detailed than most libraries

Following these guidelines ensures consistency across all demo files and provides an excellent developer experience while maintaining our unique approach to component documentation.

---

## Industry Comparison

| Feature | Tabler-Blade | Mary UI | WireUI | BladewindUI | TallStackUI |
|---------|--------------|---------|---------|-------------|-------------|
| Progressive Complexity | ✅ | ✅ | ✅ | ✅ | ✅ |
| Formal API Table | ✅ | ❌ | ✅ | ✅ | ❌ |
| Separate Props/CSS Docs | ✅ | ❌ | ❌ | ❌ | ❌ |
| Accessibility Docs | ✅ | ❌ | ❌ | ❌ | ❌ |
| Live Interactive Demos | Planned | ✅✅✅ | ✅ | ✅✅ | ❌ |
| Copy Buttons | Planned | ✅ | ✅ | ✅ | ✅ |
| Search Integration | ✅ | ✅ | ✅ | ✅ | ✅ |
| Showcase Apps | Planned | ✅✅✅ | ❌ | ✅✅ | ❌ |

Our current approach is competitive, with unique strengths in documentation clarity and upcoming accessibility focus.
