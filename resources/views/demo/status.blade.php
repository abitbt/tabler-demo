{{--
    Status Component Demo
    Component: <x-tabler::status>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Status Indicators" subtitle="Status dots for online/offline states" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Status with Labels</x-slot>
                    <x-slot:subtitle>Status indicators with text</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="mb-2"><x-tabler::status color="success">Online</x-tabler::status></div>
                    <div class="mb-2"><x-tabler::status color="danger">Offline</x-tabler::status></div>
                    <div class="mb-2"><x-tabler::status color="warning">Away</x-tabler::status></div>
                    <div><x-tabler::status color="secondary">Inactive</x-tabler::status></div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::status color="success"&gt;Online&lt;/x-tabler::status&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Status Dots</x-slot>
                    <x-slot:subtitle>Dot indicators only</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex gap-2">
                        <x-tabler::status color="success" dot />
                        <x-tabler::status color="danger" dot />
                        <x-tabler::status color="warning" dot />
                        <x-tabler::status color="info" dot />
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::status color="success" dot /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Animated Status</x-slot>
                    <x-slot:subtitle>Pulsing animation</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::status color="success" animated>Live</x-tabler::status>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::status color="success" animated&gt;Live&lt;/x-tabler::status&gt;</code></pre>
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
                                <tr><td><code>color</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>'secondary'</code></td><td>Status color</td></tr>
                                <tr><td><code>animated</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Enable pulsing animation</td></tr>
                                <tr><td><code>dot</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Show as dot only</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
