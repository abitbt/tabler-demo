{{--
    Divider Component Demo
    Component: <x-tabler::divider>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Dividers" subtitle="Horizontal rules with optional text" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Divider</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Content above</p>
                    <x-tabler::divider />
                    <p>Content below</p>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::divider /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Divider with Text</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Section 1</p>
                    <x-tabler::divider>OR</x-tabler::divider>
                    <p>Section 2</p>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::divider&gt;OR&lt;/x-tabler::divider&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Dashed Divider</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Content above</p>
                    <x-tabler::divider dashed />
                    <p>Content below</p>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::divider dashed /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Left-aligned Text</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::divider class="hr-text-left">Section Title</x-tabler::divider>
                    <p>Content here</p>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::divider class="hr-text-left"&gt;Section&lt;/x-tabler::divider&gt;</code></pre>
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
                                <tr><td><code>color</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Divider color</td></tr>
                                <tr><td><code>dashed</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Use dashed line style</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
