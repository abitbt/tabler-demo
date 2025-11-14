# Button Component

> Versatile button component with support for different colors, variants, sizes, icons, and states

## Overview

The Button component provides a comprehensive implementation of Tabler UI buttons with full support for icons, loading states, different variants, and accessibility features. Buttons can be rendered as native `<button>` elements or as links (`<a>` tags) when an `href` is provided.

## Basic Usage

```blade
<x-tabler::button>Click Me</x-tabler::button>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | `string` | `'button'` | Button type attribute (for `<button>` elements) |
| `href` | `string\|null` | `null` | URL for button as link (changes element to `<a>`) |
| `color` | `string\|null` | `null` | Button color variant |
| `variant` | `string\|null` | `null` | Button style: `'outline'`, `'ghost'`, or `null` (solid) |
| `size` | `string\|null` | `null` | Button size: `'sm'`, `'lg'`, `'xl'` |
| `shape` | `string\|null` | `null` | Button shape: `'square'`, `'pill'` |
| `icon` | `string\|null` | `null` | Icon name from blade-tabler-icons for start icon |
| `iconEnd` | `string\|null` | `null` | Icon name for end icon |
| `iconOnly` | `bool` | `false` | Display only icon without text |
| `loading` | `bool` | `false` | Show loading spinner state |
| `disabled` | `bool` | `false` | Disable the button |
| `fullWidth` | `bool` | `false` | Make button full width |

## Color Variants

### Theme Colors
```blade
<x-tabler::button color="primary">Primary</x-tabler::button>
<x-tabler::button color="secondary">Secondary</x-tabler::button>
<x-tabler::button color="success">Success</x-tabler::button>
<x-tabler::button color="warning">Warning</x-tabler::button>
<x-tabler::button color="danger">Danger</x-tabler::button>
<x-tabler::button color="info">Info</x-tabler::button>
<x-tabler::button color="dark">Dark</x-tabler::button>
<x-tabler::button color="light">Light</x-tabler::button>
```

### Extended Colors
Tabler provides additional color options:
- `blue`, `azure`, `indigo`, `purple`, `pink`, `red`
- `orange`, `yellow`, `lime`, `green`, `teal`, `cyan`

```blade
<x-tabler::button color="purple">Purple Button</x-tabler::button>
```

### Social Media Colors
```blade
<x-tabler::button color="facebook" icon="brand-facebook">Facebook</x-tabler::button>
<x-tabler::button color="twitter" icon="brand-twitter">Twitter</x-tabler::button>
<x-tabler::button color="github" icon="brand-github">GitHub</x-tabler::button>
```

## Button Variants

### Outline Buttons
Transparent background with colored border:

```blade
<x-tabler::button color="primary" variant="outline">Outline Primary</x-tabler::button>
<x-tabler::button color="danger" variant="outline">Outline Danger</x-tabler::button>
```

### Ghost Buttons
Subtle transparent buttons:

```blade
<x-tabler::button color="success" variant="ghost">Ghost Success</x-tabler::button>
<x-tabler::button color="info" variant="ghost">Ghost Info</x-tabler::button>
```

## Button Sizes

```blade
<x-tabler::button size="sm">Small</x-tabler::button>
<x-tabler::button>Default</x-tabler::button>
<x-tabler::button size="lg">Large</x-tabler::button>
<x-tabler::button size="xl">Extra Large</x-tabler::button>
```

## Button Shapes

### Pill Shape
Fully rounded corners:

```blade
<x-tabler::button color="primary" shape="pill">Pill Button</x-tabler::button>
```

### Square Shape
No border radius:

```blade
<x-tabler::button color="primary" shape="square">Square Button</x-tabler::button>
```

## Icons

### Button with Start Icon
```blade
<x-tabler::button color="primary" icon="plus">Add Item</x-tabler::button>
<x-tabler::button color="success" icon="check">Save</x-tabler::button>
```

### Button with End Icon
```blade
<x-tabler::button iconEnd="arrow-right">Next</x-tabler::button>
<x-tabler::button iconEnd="external-link">Open Link</x-tabler::button>
```

### Icon-Only Buttons
```blade
<x-tabler::button color="danger" icon="trash" iconOnly>Delete</x-tabler::button>
<x-tabler::button color="primary" icon="edit" iconOnly>Edit</x-tabler::button>
```

**Note:** Icon-only buttons automatically receive an `aria-label` from the slot content for accessibility.

## Button States

### Loading State
```blade
<x-tabler::button color="primary" loading>Processing...</x-tabler::button>
<x-tabler::button color="success" icon="check" loading>Saving...</x-tabler::button>
```

The loading state:
- Shows a spinner animation
- Automatically disables the button
- Hides regular icons

### Disabled State
```blade
<x-tabler::button disabled>Not Available</x-tabler::button>
<x-tabler::button color="primary" disabled>Disabled Primary</x-tabler::button>
```

## Button as Link

When `href` is provided, the button renders as an `<a>` element:

```blade
<x-tabler::button href="/dashboard">Dashboard</x-tabler::button>
<x-tabler::button href="https://example.com" target="_blank">External Link</x-tabler::button>
```

## Full Width Buttons

```blade
<x-tabler::button color="primary" fullWidth>Full Width Button</x-tabler::button>
```

## Advanced Usage

### Multiple Props
```blade
<x-tabler::button
    color="primary"
    variant="outline"
    size="lg"
    shape="pill"
    icon="plus"
    class="custom-class"
>
    Add New Item
</x-tabler::button>
```

### Custom Classes
Use the `class` attribute for additional Tabler CSS classes:

```blade
{{-- Animated button --}}
<x-tabler::button class="btn-animate-icon" iconEnd="arrow-right">
    Save
</x-tabler::button>

{{-- Button with rotating icon animation --}}
<x-tabler::button class="btn-animate-icon btn-animate-icon-rotate" icon="settings">
    Settings
</x-tabler::button>
```

## Livewire Integration

All `wire:*` attributes pass through automatically:

```blade
<x-tabler::button wire:click="save" color="primary">
    Save Changes
</x-tabler::button>

<x-tabler::button wire:click="delete" wire:confirm="Are you sure?" color="danger">
    Delete Item
</x-tabler::button>

<x-tabler::button wire:loading.attr="disabled" color="success">
    Submit
</x-tabler::button>
```

## Bootstrap Integration

### Dropdown Buttons
```blade
<div class="dropdown">
    <x-tabler::button data-bs-toggle="dropdown" iconEnd="chevron-down">
        Dropdown
    </x-tabler::button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
    </div>
</div>
```

### Modal Triggers
```blade
<x-tabler::button data-bs-toggle="modal" data-bs-target="#myModal" color="primary">
    Open Modal
</x-tabler::button>
```

### Tooltips
```blade
<x-tabler::button data-bs-toggle="tooltip" data-bs-title="Helpful text" color="info">
    Hover for Tooltip
</x-tabler::button>
```

## Button Lists

Group multiple buttons with proper spacing:

```blade
<div class="btn-list">
    <x-tabler::button color="danger">Cancel</x-tabler::button>
    <x-tabler::button>Save and Continue</x-tabler::button>
    <x-tabler::button color="success">Save Changes</x-tabler::button>
</div>
```

### Centered Buttons
```blade
<div class="btn-list justify-content-center">
    <x-tabler::button>Cancel</x-tabler::button>
    <x-tabler::button color="primary">Submit</x-tabler::button>
</div>
```

### Right-Aligned Buttons
```blade
<div class="btn-list justify-content-end">
    <x-tabler::button>Cancel</x-tabler::button>
    <x-tabler::button color="primary">Submit</x-tabler::button>
</div>
```

## Available CSS Classes

These classes can be used via the `class` attribute for additional styling:

### Animation Classes
- `btn-animate-icon` - Basic icon animation
- `btn-animate-icon-rotate` - Rotate icon on hover
- `btn-animate-icon-shake` - Shake icon on hover
- `btn-animate-icon-pulse` - Pulse icon on hover
- `btn-animate-icon-tada` - Tada animation on hover
- `btn-animate-icon-move-start` - Move icon to start on hover
- `btn-animate-icon-move-end` - Move icon to end on hover

### Layout Classes
- `w-100` - Full width (also available via `fullWidth` prop)
- `btn-list` - Container for multiple buttons
- `btn-action` - Minimal action button styling

### State Classes
- `btn-loading` - Loading state (automatically added by `loading` prop)
- `disabled` - Disabled state (automatically added by `disabled` prop)
- `btn-icon` - Icon-only button (automatically added by `iconOnly` prop)

## Accessibility

The button component follows accessibility best practices:

- **Semantic HTML**: Uses `<button>` or `<a>` elements appropriately
- **Type Attribute**: Adds `type="button"` to prevent form submission
- **ARIA Labels**: Icon-only buttons receive automatic `aria-label` attributes
- **Disabled State**: Properly applies `disabled` attribute
- **Focus States**: Maintains visible focus indicators for keyboard navigation
- **Screen Readers**: Loading spinners include `role="status"` and `aria-hidden="true"`

## Common Patterns

### Form Submission
```blade
<form method="POST" action="/submit">
    @csrf
    <x-tabler::button type="submit" color="primary">
        Submit Form
    </x-tabler::button>
</form>
```

### Confirmation Actions
```blade
<x-tabler::button
    wire:click="delete"
    wire:confirm="Are you sure you want to delete this item?"
    color="danger"
    icon="trash"
>
    Delete Item
</x-tabler::button>
```

### Action Buttons
```blade
<div class="btn-list">
    <x-tabler::button color="primary" icon="plus">New</x-tabler::button>
    <x-tabler::button icon="edit" iconOnly>Edit</x-tabler::button>
    <x-tabler::button icon="trash" iconOnly>Delete</x-tabler::button>
    <x-tabler::button icon="download" iconOnly>Download</x-tabler::button>
</div>
```

### Navigation
```blade
<div class="btn-list">
    <x-tabler::button href="/previous" icon="arrow-left">Previous</x-tabler::button>
    <x-tabler::button href="/next" iconEnd="arrow-right">Next</x-tabler::button>
</div>
```

## Examples

See the [Button Demo Page](/demo/button) for interactive examples of all button variations and features.

## Related Components

- [Badge](badge.md) - Display status indicators and counts
- [Alert](alert.md) - Show feedback messages to users

## References

- [Tabler Buttons Documentation](https://tabler.io/docs/buttons)
- [Bootstrap Button Documentation](https://getbootstrap.com/docs/5.3/components/buttons/)
