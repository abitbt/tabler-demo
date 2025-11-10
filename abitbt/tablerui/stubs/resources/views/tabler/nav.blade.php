{{--
    Nav Component

    Navigation menu with tabs or pills style.

    @prop string|null $type - Nav type: 'tabs', 'pills', 'underline'
    @prop bool $vertical - Vertical navigation
    @prop bool $fill - Fill available space
    @prop bool $justified - Justify items equally

    @slot default - Nav items

    Available CSS Classes (use via class="" attribute):

    Nav Types:
    - nav                - Base nav class (applied automatically)
    - nav-tabs           - Tabs style (also via type="tabs")
    - nav-pills          - Pills/buttons style (also via type="pills")
    - nav-underline      - Underline style (also via type="underline")

    Nav Layout:
    - flex-column        - Vertical navigation (also via vertical prop)
    - nav-fill           - Fill available space (also via fill prop)
    - nav-justified      - Justify items equally (also via justified prop)

    Nav Item States:
    - nav-item           - Nav item wrapper
    - nav-link           - Nav link
    - active             - Active/current item
    - disabled           - Disabled item

    Usage Examples:

    Basic tabs:
    <x-tabler::nav type="tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </x-tabler::nav>

    Pills navigation:
    <x-tabler::nav type="pills">
        <li class="nav-item">
            <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Reports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </x-tabler::nav>

    Vertical navigation:
    <x-tabler::nav type="pills" vertical>
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Profile</a>
        </li>
    </x-tabler::nav>

    Fill navigation:
    <x-tabler::nav type="tabs" fill>
        <li class="nav-item">
            <a class="nav-link" href="#">Item 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Item 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Item 3</a>
        </li>
    </x-tabler::nav>

    Underline navigation:
    <x-tabler::nav type="underline">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </x-tabler::nav>
--}}

@props([
    'type' => null,
    'vertical' => false,
    'fill' => false,
    'justified' => false,
])

@php
    // Build nav classes
    $classes = ['nav'];

    // Type
    if ($type) {
        $classes[] = 'nav-' . $type;
    }

    // Layout modifiers
    if ($vertical) {
        $classes[] = 'flex-column';
    }

    if ($fill) {
        $classes[] = 'nav-fill';
    }

    if ($justified) {
        $classes[] = 'nav-justified';
    }
@endphp

<ul {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
    {{ $slot }}
</ul>
