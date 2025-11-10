@php
    $bsThemeBase = 'catppuccin-mocha';
@endphp
@extends('tabler::layouts.app')

@section('navbar')
    @include('tabler::layouts.navbar.condensed', [
        'dark' => $navbarDark ?? true,
        'sticky' => $navbarSticky ?? true,
        'overlap' => $navbarOverlap ?? false,
        'navItems' => $navItems ?? [],
    ])
@endsection

@section('footer')
    <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
            <div class="row align-items-center flex-row-reverse text-center">
                <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item"><a href="#" class="link-secondary">Documentation</a></li>
                        <li class="list-inline-item"><a href="#" class="link-secondary">License</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-auto mt-lg-0 mt-3">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            © {{ date('Y') }} <a href="#" class="link-secondary">Tabler UI Laravel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
