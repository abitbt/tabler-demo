{{--
    Pagination Component Demo

    Component: <x-tabler::pagination>
    Location: abitbt/tablerui/stubs/resources/views/tabler/pagination.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Pagination" subtitle="Navigation for paginated content" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Basic Pagination --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Pagination</x-slot>
                    <x-slot:subtitle>Standard pagination with page numbers</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="3" :totalPages="10" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="3" :totalPages="10" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Simple Pagination --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Simple Pagination</x-slot>
                    <x-slot:subtitle>Previous/Next only</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="2" :totalPages="5" simple />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="2" :totalPages="5" simple /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Small Pagination --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Small Pagination</x-slot>
                    <x-slot:subtitle>Compact size</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="2" :totalPages="5" size="sm" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="2" :totalPages="5" size="sm" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Large Pagination --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Large Pagination</x-slot>
                    <x-slot:subtitle>Larger touch-friendly size</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="2" :totalPages="5" size="lg" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="2" :totalPages="5" size="lg" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Centered Pagination --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Alignment Options</x-slot>
                    <x-slot:subtitle>Center or right-align pagination</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="2" :totalPages="5" class="justify-content-center mb-3" />
                    <x-tabler::pagination :currentPage="2" :totalPages="5" class="justify-content-end" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="2" :totalPages="5" class="justify-content-center" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot>
                    <x-slot:subtitle>Complete list of available component props</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>Prop</th>
                                    <th>Type</th>
                                    <th>Default</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>paginator</code></td>
                                    <td><span class="badge bg-pink-lt">object</span></td>
                                    <td><code>null</code></td>
                                    <td>Laravel paginator object</td>
                                </tr>
                                <tr>
                                    <td><code>currentPage</code></td>
                                    <td><span class="badge bg-green-lt">int</span></td>
                                    <td><code>null</code></td>
                                    <td>Current page number (if not using paginator)</td>
                                </tr>
                                <tr>
                                    <td><code>totalPages</code></td>
                                    <td><span class="badge bg-green-lt">int</span></td>
                                    <td><code>null</code></td>
                                    <td>Total number of pages (if not using paginator)</td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Pagination size: 'sm', 'lg'</td>
                                </tr>
                                <tr>
                                    <td><code>simple</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use simple pagination (Previous/Next only)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Works with Laravel's pagination object for automatic URLs</li>
                            <li>Can be used manually with currentPage and totalPages props</li>
                            <li>Simple mode shows only Previous/Next buttons</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
