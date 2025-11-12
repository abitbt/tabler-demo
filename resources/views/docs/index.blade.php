@extends('docs.layout')

@section('page-title', 'Component Documentation')

@section('content')
    @if ($document)
        {!! $document['content'] !!}
    @else
        <div class="empty">
            <div class="empty-icon">
                <x-tabler-book class="icon icon-lg" />
            </div>
            <p class="empty-title">Welcome to the Documentation</p>
            <p class="empty-subtitle text-secondary">
                Browse the components in the sidebar to get started.
            </p>
        </div>

        {{-- Component Index --}}
        <div class="mt-5">
            <h2>Available Components</h2>
            <div class="row row-cards mt-3">
                @foreach ($navigation as $item)
                    @if ($item['type'] === 'file')
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ route('docs.show', $item['slug']) }}" class="card card-link">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <x-tabler-file-text class="icon icon-lg" />
                                        </div>
                                        <div>
                                            <div class="font-weight-medium">{{ $item['title'] }}</div>
                                            <div class="text-secondary">{{ $item['slug'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @elseif ($item['type'] === 'directory')
                        <div class="col-12">
                            <h3 class="mt-4">
                                <x-tabler-folder class="icon" />
                                {{ $item['title'] }}
                            </h3>
                            <div class="row row-cards mt-2">
                                @foreach ($item['children'] as $child)
                                    @if ($child['type'] === 'file')
                                        <div class="col-md-6 col-lg-4">
                                            <a href="{{ route('docs.show', $child['slug']) }}" class="card card-link">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3">
                                                            <x-tabler-file-text class="icon icon-lg" />
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-medium">{{ $child['title'] }}</div>
                                                            <div class="text-secondary">{{ $child['slug'] }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
@endsection
