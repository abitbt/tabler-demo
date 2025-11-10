---
description: Create Laravel Blade component from Tabler UI
argument-hint: [component-name]
allowed-tools: Read, Glob, Write, Edit, Bash(vendor/bin/pint:*), mcp__laravel-boost__tinker
---

Create a Laravel Blade component for the **$1** component from Tabler UI.

## Process:

1. **Find component references** in @docs/tabler.md for "$1"
   - Look for the component name (case-insensitive search)
   - Identify the Template, Documentation, and Preview file paths
   - Read all the files in `docs/` folder, especially `docs/decisions.md`
   - **CRITICAL**: Follow all architectural decisions from @docs/decisions.md

2. **Read reference files**:
   - Read the documentation file from the tabler submodule
   - Read the template/preview HTML file if available
   - Extract HTML structure, CSS classes, and component patterns

3. **Create Blade component**:
   - **Follow the Minimal Props Philosophy from @docs/decisions.md**:
     - ✅ Keep props for: behavioral changes, complex logic, common patterns, frequently used states
     - ❌ Remove props for: direct CSS mappings, rarely used features, open-ended values
     - Users should use `class=""` attribute for CSS classes not covered by props
   - Follow the Component Design Principles from @docs/tabler.md
   - Generate a reusable Blade component with:
     - Laravel-friendly props (color, size, variant, etc.) - ONLY when justified by decisions.md
     - Proper slot support for flexible content
     - Dark mode support via Tabler's classes
     - `$attributes->merge()` for class merging
     - Tabler's CSS class naming conventions
     - Accessibility features (ARIA attributes)
     - Sensible defaults
   - **Include comprehensive CSS class documentation** (per @docs/decisions.md):
     - Document all available Tabler CSS classes in component comments
     - Organize by category with descriptions
     - Include usage examples showing both props AND CSS classes
   - Follow existing component conventions from @docs/blade-components.md
   - Save to `abitbt/tablerui/stubs/resources/views/tabler/{component-name}.blade.php`

4. **Format the code**:
   - Run `vendor/bin/pint` to ensure proper formatting

5. **Verify component rendering**:
   - Use the `mcp__laravel-boost__tinker` tool to render the component with `Blade::render()`
   - Test with realistic example data that matches the Tabler preview
   - Compare the rendered HTML output with the Tabler Preview HTML (from the Preview file path in @docs/tabler.md)
   - Verify that:
     - HTML structure matches Tabler's expected output
     - CSS classes are correctly applied
     - Props work as expected
     - Attributes merge properly
   - If there are discrepancies, fix the component and re-verify

6. **Provide usage example**:
   - Show how to use the component in a Blade view
   - Include common prop variations

## Notes:
- **MUST follow @docs/decisions.md** - This is non-negotiable for consistency
- Check sibling component files in `abitbt/tablerui/stubs/resources/views/tabler/` for existing patterns (e.g., button.blade.php, alert.blade.php)
- Ensure the component is flexible and reusable
- Include helpful inline comments for complex sections
- Apply the **Minimal Props Philosophy**: Don't create a prop for every CSS class - let users use `class=""` attribute
- If multiple variants exist (e.g., button styles), create appropriate prop options ONLY if they involve complex logic

## Icons:
- **ALWAYS** use `secondnetwork/blade-tabler-icons` for icons
- This is a Laravel Blade component package for Tabler icons
- Usage: `<x-tabler-icon-name />` (e.g., `<x-tabler-arrow-right />`)
- Never use raw SVG or other icon approaches - use blade-tabler-icons components
