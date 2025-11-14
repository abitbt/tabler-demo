# Architectural Decisions

> Key design decisions for the Tabler UI Laravel Blade components

## 1. Minimal Props Philosophy

**Decision:** Remove props that are just direct CSS class mappings.

**Rationale:**
- Reduces maintenance burden (no need to update components when Tabler adds new classes)
- Increases flexibility (users can use any Tabler class via `class=""` attribute)
- Better learning curve (users learn Tabler CSS directly)
- Less abstraction overhead

**Keep Props For:**
- ✅ Behavioral changes (e.g., `link` changes `<div>` to `<a>`)
- ✅ Complex logic (e.g., `variant` + `color` = multiple class patterns)
- ✅ Common patterns with validation (e.g., `padding` limited to sm/md/lg)
- ✅ Frequently used states (e.g., `active`, `disabled`, `loading`)

**Remove Props For:**
- ❌ Direct CSS mappings (e.g., `bgColor` → `bg-{color}`)
- ❌ Rarely used features (e.g., `rotateStart`, `rotateEnd`)
- ❌ Open-ended values (e.g., all color variants)

**Examples:**

```blade
<!-- Before (over-abstracted) -->
<x-tabler::cards.card bgColor="primary" textColor="white" stacked>

<!-- After (clean & flexible) -->
<x-tabler::cards.card class="bg-primary text-white card-stacked">
```

## 2. Component Consolidation

**Decision:** Merge tiny single-purpose components into parent components via named slots.

**Examples:**
- ❌ Deleted: `cards/title.blade.php`, `cards/subtitle.blade.php`
- ✅ Merged into: `cards/header.blade.php` with `<x-slot:title>` and `<x-slot:subtitle>`

**Rationale:**
- Reduces component count
- Simplifies API (one component instead of three)
- Maintains flexibility through slots
- Still backward compatible with raw content

## 3. Comprehensive CSS Class Documentation

**Decision:** Document all available Tabler CSS classes directly in component comments.

**Structure:**
```blade
{{--
    Component Name

    @prop definitions...

    Available CSS Classes (use via class="" attribute):

    Category:
    - class-name         - Description

    Usage Examples:
    <x-tabler::component class="...">
--}}
```

**Rationale:**
- Self-documenting components
- IDE autocomplete/hover support
- No need for external documentation
- Teaches Tabler CSS patterns
- Provides quick reference

## 4. Component Documentation Standards

**Every component includes:**
1. Component description
2. `@prop` definitions with types and defaults
3. `@slot` definitions
4. Available CSS classes section (organized by category)
5. Multiple usage examples (basic → advanced)

**Benefits:**
- Consistent developer experience
- Easy onboarding
- Reduced support questions
- Better IDE integration

## 5. Props Kept in Final Components

### Card Component (4 props):
- `padding` - Common pattern with validation
- `active` / `inactive` - Frequently used states
- `link` - Changes element type

### Button Component (13 props):
- `type`, `href` - Behavioral
- `color`, `variant` - Complex logic (combines multiple classes)
- `size`, `shape` - Common patterns
- `icon`, `iconEnd`, `iconOnly` - Complex rendering logic
- `loading` - Complex state (spinner + disabled)
- `disabled` - Common state
- `animate` - Adds multiple classes dynamically
- `fullWidth` - Very common pattern

### Form Components:
- `name`, `id`, `value`, `label`, `help`, `error` - Core form functionality
- `required`, `disabled`, `readonly` - Standard HTML attributes
- `size` - Common pattern with validation
- `wrapper` - Layout control
- Component-specific props (e.g., `icon` for input, `options` for select)

## 6. File Organization

**Kept:**
- All utility components (hint, help, label, feedback) - useful standalone
- All specialized components until usage review

**Deleted:**
- Redundant components merged into parents

## 7. Code Quality Standards

**Applied:**
- Laravel Pint formatting
- Consistent PHP comment style
- Clear variable names
- Section headers in PHP blocks
- Comprehensive inline documentation

## 8. JavaScript Handling

**Decision:** Minimal JavaScript in components, rely on Bootstrap's data attributes and Alpine.js when needed.

**Rationale:**
- Tabler is built on Bootstrap and uses its JavaScript for interactive components
- No custom JavaScript should be written in Blade components
- Use `data-bs-*` attributes for Bootstrap integration
- Document JS requirements clearly in component comments
- Keep components framework-agnostic (no Vue/React dependencies)

**Implementation:**
- Include Bootstrap data attributes in interactive components
- Document required JavaScript libraries in component header comments
- Test interactive components in demo files
- Provide initialization examples when needed

**Examples:**

```blade
{{-- Modal - requires Bootstrap JS --}}
<button
    data-bs-toggle="modal"
    data-bs-target="#myModal"
    class="btn btn-primary"
>
    Open Modal
</button>

<div class="modal" id="myModal">
    {{-- Modal content --}}
</div>

{{-- Tooltip - requires Bootstrap JS initialization --}}
<button
    data-bs-toggle="tooltip"
    data-bs-title="Helpful tooltip text"
    class="btn btn-secondary"
>
    Hover me
</button>

{{-- Dropdown - automatic with Bootstrap JS --}}
<div class="dropdown">
    <button
        data-bs-toggle="dropdown"
        class="btn btn-primary dropdown-toggle"
    >
        Options
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
    </div>
</div>
```

## 9. Accessibility Standards

**Decision:** All components must meet WCAG 2.1 Level AA accessibility standards.

**Requirements:**
- ✅ **Semantic HTML** - Use proper elements (`<button>`, `<nav>`, `<main>`, `<article>`, etc.)
- ✅ **ARIA attributes** - Add when semantic HTML isn't sufficient (aria-label, aria-describedby, role)
- ✅ **Keyboard navigation** - All interactive elements must be keyboard accessible (Tab, Enter, Space, Esc)
- ✅ **Focus states** - Clearly visible focus indicators (use `:focus-visible` for better UX)
- ✅ **Color contrast** - Minimum 4.5:1 for normal text, 3:1 for large text (18pt+)
- ✅ **Screen reader friendly** - Meaningful labels and announcements
- ✅ **Form labels** - All inputs must have associated `<label>` elements

**Rationale:**
- Accessibility is a requirement, not optional
- Better UX for everyone, not just users with disabilities
- Legal compliance (ADA, Section 508)
- SEO benefits from semantic HTML
- Future-proof the component library

**Testing:**
- Use browser DevTools (Chrome Lighthouse, Firefox Accessibility Inspector)
- Test keyboard navigation (Tab, Shift+Tab, Enter, Space, Esc)
- Use screen reader testing when possible (NVDA, JAWS, VoiceOver)
- Check color contrast ratios

**Examples:**

```blade
{{-- ✅ Good: Semantic button with proper label --}}
<button type="button" class="btn btn-primary">
    Save Changes
</button>

{{-- ❌ Bad: Div pretending to be button --}}
<div role="button" onclick="save()">Save</div>

{{-- ✅ Good: Icon-only button with aria-label --}}
<button
    type="button"
    class="btn btn-icon"
    aria-label="Delete item"
>
    <x-tabler-trash />
</button>

{{-- ❌ Bad: Icon-only button without label --}}
<button type="button" class="btn btn-icon">
    <x-tabler-trash />
</button>

{{-- ✅ Good: Form input with associated label --}}
<label for="email" class="form-label">Email Address</label>
<input
    type="email"
    id="email"
    name="email"
    class="form-control"
    required
>

{{-- ❌ Bad: Input without label --}}
<input type="email" placeholder="Email" class="form-control">

{{-- ✅ Good: Proper heading hierarchy --}}
<h1>Page Title</h1>
<h2>Section Title</h2>
<h3>Subsection Title</h3>

{{-- ❌ Bad: Skipping heading levels --}}
<h1>Page Title</h1>
<h4>Section Title</h4>

{{-- ✅ Good: Link with descriptive text --}}
<a href="/products">View all products</a>

{{-- ❌ Bad: Generic link text --}}
<a href="/products">Click here</a>
```

## 10. Component Versioning & Breaking Changes

**Decision:** Follow semantic versioning (SemVer) for the component library.

**Versioning Rules:**
- **Patch (1.0.X)**: Bug fixes, documentation updates, minor CSS tweaks
- **Minor (1.X.0)**: New props, new CSS classes, new components, new features (backward compatible)
- **Major (X.0.0)**: Breaking changes to existing props, behavior, or HTML structure

**What Constitutes a Breaking Change:**
- Removing or renaming props
- Changing prop default values
- Renaming components
- Changing HTML structure significantly (breaks custom CSS)
- Removing CSS classes
- Changing component behavior in non-backward-compatible ways
- Changing slot names or behavior

**Deprecation Strategy:**
1. Mark deprecated props/features in component header comments
2. Add deprecation warnings in development mode (use `@env` directive)
3. Provide clear migration path in CHANGELOG.md
4. Keep deprecated props functional for one major version
5. Remove in next major version

**CHANGELOG.md Format:**

```markdown
# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- New `tooltip` component with Bootstrap integration
- `pill` shape prop for button component

### Changed
- Button component now uses `variant` prop instead of `outline` boolean

### Deprecated
- `outline` prop on button component (use `variant="outline"` instead)

### Fixed
- Alert component dismissible button alignment
- Card component padding with `active` state

## [1.2.0] - 2025-01-15

### Added
- Card component with all variations
- Badge component with color support
- Tag component

### Fixed
- Button icon spacing in Safari
```

**Migration Guide Example:**

```blade
{{-- v1.x - Deprecated --}}
<x-tabler::button outline color="primary">Click</x-tabler::button>

{{-- v2.x - New approach --}}
<x-tabler::button variant="outline" color="primary">Click</x-tabler::button>
```

## Summary

These decisions create a **lean, flexible, maintainable, and accessible** component library that:
- Respects Tabler's CSS-first approach
- Reduces maintenance overhead
- Provides excellent developer experience
- Ensures accessibility for all users
- Uses standard web technologies (Bootstrap, semantic HTML)
- Scales with Tabler updates
- Balances abstraction with flexibility
- Maintains backward compatibility where possible

## 11. Livewire Compatibility Standards

**Decision:** All components must be Livewire-compatible but never Livewire-exclusive.

**Rationale:**

- **Wider adoption** - Users can choose whether to use Livewire based on project needs
- **User choice** - Components don't force architectural decisions
- **Future-proof** - Components remain functional regardless of Livewire installation
- **Flexibility** - Supports both traditional and reactive Laravel applications

**Core Requirements:**

✅ **Attribute bags must not filter `wire:*` attributes:**

```blade
{{-- Good: Passes through all attributes including wire:* --}}
<button {{ $attributes->merge(['class' => 'btn btn-' . $color]) }}>
    {{ $slot }}
</button>

{{-- Bad: Filtering removes wire:* attributes --}}
<button {{ $attributes->only(['class', 'id']) }}>
    {{ $slot }}
</button>
```

✅ **Components work without Livewire installed:**

```blade
{{-- Must render successfully without Livewire --}}
<x-tabler::button color="primary">Click Me</x-tabler::button>

{{-- And also work with Livewire when installed --}}
<x-tabler::button wire:click="save" color="primary">Save</x-tabler::button>
```

✅ **No Livewire-specific dependencies in component code:**

```blade
{{-- Good: Pure Blade component --}}
@props(['color' => 'primary'])

<button {{ $attributes->merge(['class' => "btn btn-{$color}"]) }}>
    {{ $slot }}
</button>

{{-- Bad: Checks for Livewire existence --}}
@if(class_exists('Livewire\Component'))
    {{-- Livewire-specific code --}}
@endif
```

**Implementation Guidelines:**

1. **Use standard `{{ $attributes }}`** - Never filter or restrict attributes
2. **Test without Livewire** - Components must render correctly in plain Laravel
3. **Document Livewire usage** - Show `wire:*` examples in demo pages (see `docs/livewire.md`)
4. **No conditional Livewire logic** - Don't check if Livewire is installed

**Documentation Standards:**

Every component demo should include Livewire usage examples when relevant:

```blade
{{-- In demo/button.blade.php --}}

{{-- Livewire Integration --}}
<div class="col-md-6">
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>With Livewire</x-slot>
            <x-slot:subtitle>Using wire:click for reactive behavior</x-slot>
        </x-tabler::cards.header>
        <x-tabler::cards.body>
            <x-tabler::button wire:click="save" color="primary">
                Save Changes
            </x-tabler::button>
            
            <pre class="mt-3"><code>&lt;x-tabler::button wire:click="save" color="primary"&gt;
    Save Changes
&lt;/x-tabler::button&gt;</code></pre>
        </x-tabler::cards.body>
    </x-tabler::cards.card>
</div>
```

**Examples:**

✅ **Good (Livewire-compatible):**

```blade
{{-- Component works standalone --}}
<x-tabler::forms.input name="email" label="Email" />

{{-- Component works with Livewire --}}
<x-tabler::forms.input wire:model="email" name="email" label="Email" />

{{-- All wire:* attributes pass through automatically --}}
<x-tabler::button 
    wire:click="submit"
    wire:loading.attr="disabled"
    wire:target="submit"
>
    Submit
</x-tabler::button>
```

❌ **Bad (Requires Livewire):**

```blade
{{-- Component breaks without Livewire --}}
<x-tabler::forms.input 
    livewireModel="email" 
    @if($livewire) wire:model="email" @endif
/>

{{-- Filtering attributes breaks wire:* pass-through --}}
<button {{ $attributes->except(['wire:click', 'wire:model']) }}>
    {{ $slot }}
</button>
```

**Testing Requirements:**

1. **Test without Livewire installed** - Components must render
2. **Test attribute pass-through** - Verify `wire:*` attributes appear in HTML
3. **Test with Livewire installed** - Verify reactive behavior works

**Related Documentation:**

- See `docs/livewire.md` for comprehensive Livewire usage patterns
- See `docs/blade-components.md` for attribute bag documentation
- See `docs/testing.md` for testing Livewire compatibility
