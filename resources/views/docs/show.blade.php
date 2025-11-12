@extends('docs.layout')

@section('page-title', $document['title'])

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('docs.index') }}">Documentation</a>
    </li>
    @php
        $segments = explode('/', $document['slug']);
        $path = '';
    @endphp
    @foreach ($segments as $index => $segment)
        @php
            $path .= ($path ? '/' : '') . $segment;
            $isLast = $index === count($segments) - 1;
        @endphp
        @if ($isLast)
            <li class="breadcrumb-item active" aria-current="page">{{ Str::title(str_replace('-', ' ', $segment)) }}</li>
        @else
            <li class="breadcrumb-item">
                <a href="{{ route('docs.show', $path) }}">{{ Str::title(str_replace('-', ' ', $segment)) }}</a>
            </li>
        @endif
    @endforeach
@endsection

@section('content')
    {!! $document['content'] !!}

    {{-- Updated timestamp --}}
    @if (isset($document['updated_at']))
        <div class="border-top mt-5 pt-4">
            <div class="text-secondary">
                <small>
                    Last updated: {{ \Carbon\Carbon::createFromTimestamp($document['updated_at'])->diffForHumans() }}
                </small>
            </div>
        </div>
    @endif
@endsection
