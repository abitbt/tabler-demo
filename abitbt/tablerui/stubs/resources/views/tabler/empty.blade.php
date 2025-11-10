{{--
    Empty State Component

    Display empty states when there's no content to show.

    @prop string|null $icon - Tabler icon name (without 'tabler-' prefix)
    @prop string|null $title - Empty state title/heading
    @prop string|null $description - Empty state description text

    @slot default - Custom content (overrides auto-generated layout)
    @slot:icon - Custom icon slot
    @slot:title - Custom title slot
    @slot:description - Custom description slot
    @slot:action - Action buttons or links

    Available CSS Classes (use via class="" attribute):

    Empty State Styles:
    - empty              - Base empty state class (applied automatically)
    - empty-icon         - Icon wrapper
    - empty-title        - Title text
    - empty-subtitle     - Subtitle/description text
    - empty-action       - Action buttons wrapper

    Usage Examples:

    Basic empty state:
    <x-tabler::empty
        icon="inbox"
        title="No messages"
        description="You don't have any messages yet."
    />

    Empty state with action:
    <x-tabler::empty icon="folder" title="No files">
        <x-slot:description>
            Start by uploading your first file.
        </x-slot:description>
        <x-slot:action>
            <x-tabler::button color="primary">Upload file</x-tabler::button>
        </x-slot:action>
    </x-tabler::empty>

    Custom empty state:
    <x-tabler::empty>
        <x-slot:icon>
            <x-tabler-inbox class="icon empty-icon" />
        </x-slot:icon>
        <p class="empty-title">No results found</p>
        <p class="empty-subtitle">Try adjusting your search or filter criteria.</p>
        <div class="empty-action">
            <x-tabler::button>Clear filters</x-tabler::button>
        </div>
    </x-tabler::empty>
--}}

@props([
    'icon' => null,
    'title' => null,
    'description' => null,
])

@php
    // Prepare icon component name
    $iconComponent = $icon ? 'tabler-' . $icon : null;
@endphp

@if($slot->isNotEmpty())
    {{-- Custom empty state --}}
    <div {{ $attributes->merge(['class' => 'empty']) }}>
        {{ $slot }}
    </div>
@else
    {{-- Auto-generated empty state --}}
    <div {{ $attributes->merge(['class' => 'empty']) }}>
        @if($iconComponent || isset($icon))
            <div class="empty-icon">
                @isset($icon)
                    {{ $icon }}
                @else
                    <x-dynamic-component :component="$iconComponent" class="icon" />
                @endisset
            </div>
        @endif

        @if($title || isset($title))
            <p class="empty-title">
                @isset($title)
                    {{ $title }}
                @else
                    {{ $title }}
                @endisset
            </p>
        @endif

        @if($description || isset($description))
            <p class="empty-subtitle text-secondary">
                @isset($description)
                    {{ $description }}
                @else
                    {{ $description }}
                @endisset
            </p>
        @endif

        @isset($action)
            <div class="empty-action">
                {{ $action }}
            </div>
        @endisset
    </div>
@endif
