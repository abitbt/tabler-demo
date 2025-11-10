@props([
    'color' => 'primary',
    'size' => null,
    'variant' => 'solid', // solid, outline, ghost, link
    'icon' => null,
    'iconPosition' => 'start', // start, end
    'loading' => false,
    'disabled' => false,
    'pill' => false,
    'square' => false,
    'iconOnly' => false,
    'type' => 'button',
    'href' => null,
])

@php
    // Determine the HTML tag
    $tag = $href ? 'a' : 'button';

    // Build the class list
    $classes = ['btn'];

    // Variant classes
    match($variant) {
        'outline' => $classes[] = "btn-outline-{$color}",
        'ghost' => $classes[] = "btn-ghost-{$color}",
        'link' => $classes[] = 'btn-link',
        default => $classes[] = "btn-{$color}",
    };

    // Size classes
    if ($size) {
        $classes[] = "btn-{$size}";
    }

    // Shape classes
    if ($pill) {
        $classes[] = 'btn-pill';
    }
    if ($square) {
        $classes[] = 'btn-square';
    }
    if ($iconOnly) {
        $classes[] = 'btn-icon';
    }

    // State classes
    if ($loading) {
        $classes[] = 'btn-loading';
    }
    if ($disabled) {
        $classes[] = 'disabled';
    }
@endphp

<{{ $tag }}
    @if($href) href="{{ $href }}" @endif
    @if($tag === 'button') type="{{ $type }}" @endif
    @if($disabled)
        @if($tag === 'button') disabled @endif
        aria-disabled="true"
    @endif
    {{ $attributes->class($classes) }}
>
    @if($icon && $iconPosition === 'start' && !$loading)
        @tabler($icon, ['class' => 'icon'])
    @endif

    @if(!$iconOnly)
        {{ $slot }}
    @endif

    @if($icon && $iconPosition === 'end' && !$loading)
        @tabler($icon, ['class' => 'icon icon-end'])
    @endif
</{{ $tag }}>
