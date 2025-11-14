---
description: Create Laravel Blade component from Tabler UI
argument-hint: [component-name]
---

Create a Laravel Blade component for the **$1** component from Tabler UI.

## Process:

0. **Check component availability** in @docs/tabler.md Quick Component Finder:
   - Search for "$1" in the Quick Component Finder table
   - Check "Tabler Status" column:
     - ✓ Available = Full component with preview, docs, SCSS, and includes
     - ⚠️ SCSS Only = Only SCSS file exists, no preview or documentation
   - **If SCSS Only**: Warn that component has limited reference files
   - Note the "Complexity" level (⭐ Easy, ⭐⭐ Medium, ⭐⭐⭐ Hard)
   - Note "JS Required" and "Dependencies" before proceeding

1. **Find component references** in @docs/tabler.md for "$1"
   - Look for the component name (case-insensitive search)
   - Identify the Template, Documentation, and Preview file paths
   - **CRITICAL**: Follow all architectural decisions from @docs/decisions.md
   - Read relevant documentation files in @docs folder

2. **Read reference files** (READ ALL FILES - critical for comprehensive understanding):

   **Context:** Tabler has 283 shared templates (75 UI-specific, 60+ card variations)

   **Reading Order:**
   - Read the **Documentation** markdown file (if available - 104 total doc files)
   - Read the **Preview** HTML file (116 preview pages available)
   - Read the **Template** HTML file (shows source structure)
   - **READ ALL files in Includes directory** - use Glob to find related files:
     - Single component: `tabler/shared/includes/ui/{component-name}*.html`
     - Directories: `tabler/shared/includes/{component-name}/**/*.html`
     - Check `tabler/shared/includes/parts/` for additional partials
     - **Note:** Cards has 60+ variations, Forms has 6 template sets
   - Read **additional related files** from @docs/tabler.md (e.g., card-actions.html)
   - Read the **SCSS** file (50+ UI component SCSS files available)
   - Read **JS** files if component requires JavaScript (see 12 modules in Core Files section)
   - Extract HTML structure, CSS classes, component patterns, and ALL variations

2b. **Check third-party library requirements** (from @docs/tabler.md Core Files section):

   If component requires external libraries (21 bundled), document in component header:
   - **Charts & Visualization:** ApexCharts, jsVectorMap
   - **UI Components:** Dropzone, FullCalendar, Plyr, FSLightbox, Signature Pad, SortableJS, Star Rating
   - **Form Controls:** Tom-Select, IMask, Autosize, Litepicker, noUiSlider
   - **Text & Content:** Typed.js, HugerTE (WYSIWYG)
   - **Utilities:** List.js, @hotwired (Turbo), CountUp.js

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
   - Save to `tabler-blade/stubs/resources/views/tabler/{component-name}.blade.php`

4. **Format the code**:
   - Run `vendor/bin/pint` to ensure proper formatting

5. **Verify component rendering**:
   - Use `mcp__laravel-boost__tinker` tool to render with `Blade::render()`
   - Test with realistic data matching Tabler preview
   - Compare rendered HTML with Tabler Preview/Template files
   - Test major variations from includes files
   - Verify:
     - HTML structure matches Tabler output
     - CSS classes correctly applied
     - Props work as expected
     - Attributes merge properly
   - Test edge cases:
     - Empty slots, missing optional props
     - Very long content, special characters
     - Multiple prop combinations
   - Verify accessibility (inline):
     - Semantic HTML, ARIA labels where needed
     - Keyboard accessible, visible focus states
   - Fix any discrepancies and re-verify

6. **Provide usage example**:
   - Show how to use the component in a Blade view
   - Include common prop variations
   - Document any JavaScript requirements (Bootstrap, Alpine.js)

## Tabler UI Framework Overview:

**Available Resources (from @docs/tabler.md):**
- **38+ Interface components** in Quick Component Finder
- **50+ UI component SCSS files** with comprehensive styling
- **283 shared template files** (75 UI-specific, 60+ card variations, 6 form sets)
- **116 preview pages** with working examples
- **104 documentation files** covering components, forms, layouts
- **12 JavaScript modules** for interactive components
- **21 third-party libraries** bundled and ready to use

**For large component sets** (cards, forms): Use strategic reading - prioritize common patterns first.

## Notes:
- **MUST follow @docs/decisions.md** - This is non-negotiable for consistency
- **MUST read ALL related files** - Don't skip includes directories! Components like cards have 60+ variation files that are critical for understanding full capability
- Check sibling component files in `tabler-blade/stubs/resources/views/tabler/` for existing patterns (e.g., button.blade.php, alert.blade.php)
- Ensure the component is flexible and reusable
- Include helpful inline comments for complex sections
- Apply the **Minimal Props Philosophy**: Don't create a prop for every CSS class - let users use `class=""` attribute
- If multiple variants exist (e.g., button styles), create appropriate prop options ONLY if they involve complex logic

## Icons:
- **ALWAYS** use `secondnetwork/blade-tabler-icons` for icons
- This is a Laravel Blade component package for Tabler icons
- Usage: `<x-tabler-icon-name />` (e.g., `<x-tabler-arrow-right />`)
- Never use raw SVG or other icon approaches - use blade-tabler-icons components

## JavaScript Components:
For components requiring JavaScript (dropdowns, modals, tabs, tooltips):
- **Use Bootstrap's data attributes** - Tabler is built on Bootstrap
- **Check @docs/tabler.md Core Files** for the 12 JavaScript modules:
  - tabler.js, autosize.js, bootstrap.js, countup.js, dropdown.js, input-mask.js
  - popover.js, sortable.js, switch-icon.js, tab.js, toast.js, tooltip.js
- Document required Bootstrap JS initialization in component comments
- Include `data-bs-*` attributes in examples
- Note any Alpine.js or custom JS requirements
- **Common patterns:**
  - Modals: `data-bs-toggle="modal"` and `data-bs-target="#modalId"`
  - Dropdowns: `data-bs-toggle="dropdown"`
  - Tooltips: `data-bs-toggle="tooltip"` and `data-bs-title="Text"`
  - Tabs: `data-bs-toggle="tab"` and `data-bs-target="#tabId"`
  - Popovers: `data-bs-toggle="popover"`

## When NOT to Create a Component:
Don't create a component if:
- ❌ It's a single CSS class (just document the class in relevant component)
- ❌ It's a simple HTML element wrapper with no logic or styling
- ❌ It's already covered by an existing component variant or slot
- ❌ It's extremely rare in usage (< 3 use cases in Tabler examples)
- ❌ It can be achieved with slots on an existing component
- ❌ It's purely a layout container with no styling
- ✅ Instead: Document the pattern in demo files or create a slot on parent component

## Performance Considerations:
- Avoid excessive `@php` blocks (use computed properties in class-based components if needed)
- Don't nest components more than 3 levels deep
- Use `@once` directive for scripts/styles that may be included multiple times
- Consider lazy loading for heavy components (modals, off-canvas)
- Profile component render time with Laravel Debugbar if performance issues arise

## Troubleshooting:

**Component not rendering:**
- Check namespace registration in `TablerServiceProvider`
- Clear view cache: `php artisan view:clear`
- Verify file naming (kebab-case for tags, e.g., `my-component.blade.php` → `<x-tabler::my-component>`)
- Check for typos in component name

**Attributes not merging:**
- Ensure using `{{ $attributes->merge(['class' => '...']) }}`
- Check for duplicate class definitions
- Verify props are extracted with `@props` directive
- Make sure `$attributes` is echoed in the component template

**Icons not displaying:**
- Verify `secondnetwork/blade-tabler-icons` package is installed
- Check icon name (use correct Tabler icon name from package)
- Ensure icon component syntax: `<x-tabler-{icon-name} />`
- Icons must be lowercase with hyphens (e.g., `arrow-right` not `ArrowRight`)

**Props not working:**
- Verify `@props` directive is at the top of the component file
- Check prop names match exactly (case-sensitive)
- Ensure default values are properly set in `@props` array
- Use `:prop="value"` syntax for dynamic values, not `prop="value"`
