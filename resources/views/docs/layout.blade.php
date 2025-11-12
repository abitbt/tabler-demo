<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title', 'Documentation') - {{ config('app.name') }}</title>

        @vite(['resources/scss/app.scss', 'resources/scss/docs.scss', 'resources/js/app.js', 'resources/js/docs.js'])
    </head>

    <body>
        <div class="page">
            {{-- Sidebar --}}
            <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <h1 class="navbar-brand navbar-brand-autodark">
                        <a href="{{ route('docs.index') }}">
                            <x-tabler-book class="icon" />
                            Documentation
                        </a>
                    </h1>

                    <div class="navbar-collapse collapse" id="sidebar-menu">
                        <ul class="navbar-nav pt-lg-3">
                            @include('docs.partials.sidebar', ['items' => $navigation ?? []])
                        </ul>
                    </div>
                </div>
            </aside>

            {{-- Main Content --}}
            <div class="page-wrapper">
                {{-- Page header --}}
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <h2 class="page-title">@yield('page-title', 'Documentation')</h2>
                                @hasSection('breadcrumbs')
                                    <div class="page-pretitle">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                @yield('breadcrumbs')
                                            </ol>
                                        </nav>
                                    </div>
                                @endif
                            </div>
                            <div class="d-print-none col-auto ms-auto">
                                <div class="d-flex align-items-center gap-2">
                                    {{-- Search Bar --}}
                                    <div class="docs-search-wrapper position-relative">
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <x-tabler-search class="icon" />
                                            </span>
                                            <input type="text" id="docs-search" class="form-control"
                                                placeholder="Search documentation..." aria-label="Search documentation">
                                            <span class="input-icon-addon-end">
                                                <kbd class="kbd">Ctrl</kbd>+<kbd class="kbd">K</kbd>
                                            </span>
                                        </div>
                                        <div id="search-results" class="search-results" style="display: none;"></div>
                                    </div>

                                    {{-- Theme Toggle --}}
                                    <button type="button" class="btn btn-icon btn-ghost-secondary"
                                        onclick="TablerTheme.toggle()" aria-label="Toggle theme">
                                        <x-tabler-moon class="icon icon-tabler-moon" />
                                        <x-tabler-sun class="icon icon-tabler-sun" />
                                    </button>

                                    <div class="btn-list">
                                        <a href="{{ route('home') }}" class="btn btn-ghost-secondary">
                                            <x-tabler-home class="icon" />
                                            Home
                                        </a>
                                        <a href="{{ route('demo.button') }}" class="btn btn-ghost-secondary">
                                            <x-tabler-components class="icon" />
                                            Demos
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Page body --}}
                <div class="page-body">
                    <div class="container-xl">
                        <div class="row">
                            {{-- Main content --}}
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body markdown-body">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>

                            {{-- Table of contents sidebar --}}
                            @if (isset($document['toc']) && count($document['toc']) > 0)
                                <div class="col-lg-3 d-none d-lg-block">
                                    <div class="card position-sticky top-1">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">On this page</h4>
                                            @include('docs.partials.toc', ['items' => $document['toc']])
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Footer --}}
                <footer class="footer footer-transparent d-print-none">
                    <div class="container-xl">
                        <div class="row align-items-center text-center">
                            <div class="col-12 col-lg-auto mt-lg-0 mt-3">
                                <ul class="list-inline list-inline-dots mb-0">
                                    <li class="list-inline-item">
                                        Copyright © {{ date('Y') }}
                                        <a href="{{ route('home') }}"
                                            class="link-secondary">{{ config('app.name') }}</a>.
                                        All rights reserved.
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://tabler.io" class="link-secondary" rel="noopener"
                                            target="_blank">
                                            Built with Tabler
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>

</html>
