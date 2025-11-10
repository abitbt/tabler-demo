{{--
    Ribbon Component Demo
    Component: <x-tabler::ribbon>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Ribbons" subtitle="Decorative corner ribbons" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::ribbon>New</x-tabler::ribbon>
                <x-tabler::cards.header>
                    <x-slot:title>Top Ribbon</x-slot>
                    <x-slot:subtitle>Default top corner placement</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    Card with top ribbon
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::ribbon&gt;New&lt;/x-tabler::ribbon&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::ribbon color="danger">Sale</x-tabler::ribbon>
                <x-tabler::cards.header>
                    <x-slot:title>Colored Ribbon</x-slot>
                    <x-slot:subtitle>Ribbon with custom color</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    Card with colored ribbon
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::ribbon color="danger"&gt;Sale&lt;/x-tabler::ribbon&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::ribbon position="bottom" color="success">Featured</x-tabler::ribbon>
                <x-tabler::cards.header>
                    <x-slot:title>Bottom Ribbon</x-slot>
                    <x-slot:subtitle>Bottom corner placement</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    Card with bottom ribbon
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::ribbon position="bottom" color="success"&gt;Featured&lt;/x-tabler::ribbon&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::ribbon position="bookmark" color="primary">Premium</x-tabler::ribbon>
                <x-tabler::cards.header>
                    <x-slot:title>Bookmark Ribbon</x-slot>
                    <x-slot:subtitle>Bookmark style ribbon</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    Card with bookmark ribbon
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::ribbon position="bookmark" color="primary"&gt;Premium&lt;/x-tabler::ribbon&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
                            </thead>
                            <tbody>
                                <tr><td><code>position</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>'top'</code></td><td>Ribbon position: 'top', 'bottom', 'start', 'end', 'bookmark'</td></tr>
                                <tr><td><code>color</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Ribbon color</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
