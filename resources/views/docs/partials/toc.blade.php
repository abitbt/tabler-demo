<nav class="table-of-contents">
    <ul class="list-unstyled">
        @foreach ($items as $item)
            <li class="toc-level-{{ $item['level'] }}">
                <a href="#{{ $item['slug'] }}" class="text-secondary">
                    {{ $item['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
