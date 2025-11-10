{{--
    Placeholder Component Demo
    Component: <x-tabler::placeholder>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Placeholders" subtitle="Loading skeleton for content" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Text Placeholders</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::placeholder width="full" />
                    <x-tabler::placeholder width="75" class="mt-2" />
                    <x-tabler::placeholder width="50" class="mt-2" />
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Animated Placeholders</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::placeholder width="full" animated />
                    <x-tabler::placeholder width="75" animated class="mt-2" />
                    <x-tabler::placeholder width="50" animated class="mt-2" />
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Placeholder Sizes</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::placeholder size="xs" width="full" class="mb-2" />
                    <x-tabler::placeholder size="sm" width="full" class="mb-2" />
                    <x-tabler::placeholder width="full" class="mb-2" />
                    <x-tabler::placeholder size="lg" width="full" />
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Card with Placeholders</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h5 class="card-title">
                        <x-tabler::placeholder width="50" />
                    </h5>
                    <p class="card-text">
                        <x-tabler::placeholder width="full" />
                        <x-tabler::placeholder width="full" />
                        <x-tabler::placeholder width="75" />
                    </p>
                    <x-tabler::placeholder type="button" />
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
                                <tr><td><code>type</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>'text'</code></td><td>Placeholder type: 'text', 'image', 'button'</td></tr>
                                <tr><td><code>size</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Size: 'xs', 'sm', 'lg'</td></tr>
                                <tr><td><code>width</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Width: 'full', 'half', 'quarter', or percentage</td></tr>
                                <tr><td><code>animated</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Enable wave animation</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
