{{--
    Pagination Component

    Navigation for paginated content. Supports Laravel's pagination object
    or manual page configuration.

    @prop object|null $paginator - Laravel paginator object (optional)
    @prop int|null $currentPage - Current page number (if not using paginator)
    @prop int|null $totalPages - Total number of pages (if not using paginator)
    @prop string|null $size - Pagination size: 'sm', 'lg'
    @prop bool $simple - Use simple pagination (Previous/Next only)

    @slot default - Custom pagination links (overrides automatic rendering)

    Available CSS Classes (use via class="" attribute):

    Pagination Sizes:
    - pagination-sm      - Small pagination
    - pagination-lg      - Large pagination

    Pagination Item States:
    - active             - Current/active page
    - disabled           - Disabled link

    Usage Examples:

    With Laravel paginator:
    <x-tabler::pagination :paginator="$users" />

    Manual pagination:
    <x-tabler::pagination :currentPage="3" :totalPages="10" />

    Small pagination:
    <x-tabler::pagination :paginator="$users" size="sm" />

    Large pagination:
    <x-tabler::pagination :paginator="$users" size="lg" />

    Simple pagination (Prev/Next only):
    <x-tabler::pagination :paginator="$users" simple />

    Custom pagination:
    <x-tabler::pagination>
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </x-tabler::pagination>

    Centered pagination:
    <x-tabler::pagination :paginator="$users" class="justify-content-center" />

    Right-aligned pagination:
    <x-tabler::pagination :paginator="$users" class="justify-content-end" />
--}}

@props([
    'paginator' => null,
    'currentPage' => null,
    'totalPages' => null,
    'size' => null,
    'simple' => false,
])

@php
    // Build pagination classes
    $classes = ['pagination'];

    // Size modifier
    if ($size) {
        $classes[] = 'pagination-' . $size;
    }

    // Determine pagination data
    $current = $paginator ? $paginator->currentPage() : $currentPage;
    $total = $paginator ? $paginator->lastPage() : $totalPages;
    $hasPages = $total > 1;
@endphp

@if($slot->isNotEmpty())
    {{-- Custom pagination links provided --}}
    <ul {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
        {{ $slot }}
    </ul>
@elseif($hasPages)
    <ul {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
        {{-- Previous Page Link --}}
        @if($paginator)
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                    prev
                </a>
            </li>
        @else
            <li class="page-item {{ $current <= 1 ? 'disabled' : '' }}">
                <a class="page-link" href="#" aria-label="Previous">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                    prev
                </a>
            </li>
        @endif

        @if(!$simple)
            {{-- Pagination Page Numbers --}}
            @if($paginator)
                @foreach($paginator->getUrlRange(1, $total) as $page => $url)
                    <li class="page-item {{ $page == $current ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
            @else
                @for($page = 1; $page <= $total; $page++)
                    <li class="page-item {{ $page == $current ? 'active' : '' }}">
                        <a class="page-link" href="#">{{ $page }}</a>
                    </li>
                @endfor
            @endif
        @endif

        {{-- Next Page Link --}}
        @if($paginator)
            <li class="page-item {{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next">
                    next
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                </a>
            </li>
        @else
            <li class="page-item {{ $current >= $total ? 'disabled' : '' }}">
                <a class="page-link" href="#" aria-label="Next">
                    next
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
                </a>
            </li>
        @endif
    </ul>
@endif
