@foreach ($items as $item)
    @if ($item['type'] === 'directory')
        <li class="nav-item">
            <a class="nav-link" href="#navbar-{{ Str::slug($item['title']) }}" data-bs-toggle="collapse" role="button"
                aria-expanded="false" aria-controls="navbar-{{ Str::slug($item['title']) }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <x-tabler-folder class="icon" />
                </span>
                <span class="nav-link-title">{{ $item['title'] }}</span>
            </a>
            <div class="collapse" id="navbar-{{ Str::slug($item['title']) }}">
                <ul class="nav-sub navbar-nav">
                    @include('docs.partials.sidebar', ['items' => $item['children']])
                </ul>
            </div>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link {{ request()->is('docs/' . $item['slug']) ? 'active' : '' }}"
                href="{{ route('docs.show', $item['slug']) }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <x-tabler-file-text class="icon" />
                </span>
                <span class="nav-link-title">{{ $item['title'] }}</span>
            </a>
        </li>
    @endif
@endforeach
