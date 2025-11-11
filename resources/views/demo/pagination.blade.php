{{--
    Pagination Component Demo

    Component: <x-tabler::pagination>
    Location: tabler-blade/stubs/resources/views/tabler/pagination.blade.php
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

        {{-- First/Last Links --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>First/Last Links</x-slot>
                    <x-slot:subtitle>Quick navigation to first/last pages</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="5" :totalPages="10" firstLast />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="5" :totalPages="10" firstLast /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Text Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Text Buttons</x-slot>
                    <x-slot:subtitle>Use text labels instead of icons</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="3" :totalPages="7" textButtons />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="3" :totalPages="7" textButtons /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Ellipsis for Large Page Counts --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Large Page Counts with Ellipsis</x-slot>
                    <x-slot:subtitle>Show "..." for many pages with onEachSide prop</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="15" :totalPages="50" :onEachSide="2" class="mb-3" />
                    <x-tabler::pagination :currentPage="3" :totalPages="100" :onEachSide="1" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="15" :totalPages="50" :onEachSide="2" /&gt;
&lt;x-tabler::pagination :currentPage="3" :totalPages="100" :onEachSide="1" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Outline Style --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Outline Style</x-slot>
                    <x-slot:subtitle>Subtle bordered pagination</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="2" :totalPages="5" class="pagination-outline" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="2" :totalPages="5" class="pagination-outline" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Circle Style --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Circle Style</x-slot>
                    <x-slot:subtitle>Rounded pill-shaped buttons</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="2" :totalPages="5" class="pagination-circle mb-3" />
                    <x-tabler::pagination :currentPage="2" :totalPages="5"
                        class="pagination-circle pagination-outline" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="2" :totalPages="5" class="pagination-circle" /&gt;
&lt;x-tabler::pagination :currentPage="2" :totalPages="5" class="pagination-circle pagination-outline" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Descriptive Titles --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Descriptive Titles</x-slot>
                    <x-slot:subtitle>Prev/Next with custom titles (great for documentation navigation)</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="2" :totalPages="3" prevTitle="Getting Started"
                        nextTitle="Components Overview" />
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::pagination
    :currentPage="2"
    :totalPages="3"
    prevTitle="Getting Started"
    nextTitle="Components Overview"
/&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Combined Features --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Combined Features</x-slot>
                    <x-slot:subtitle>Multiple props and styles combined</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::pagination :currentPage="10" :totalPages="30" :onEachSide="2" firstLast
                        class="pagination-outline mb-3" />
                    <x-tabler::pagination :currentPage="5" :totalPages="20" :onEachSide="1" firstLast textButtons
                        size="sm" class="pagination-circle" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="10" :totalPages="30" :onEachSide="2" firstLast class="pagination-outline" /&gt;
&lt;x-tabler::pagination :currentPage="5" :totalPages="20" :onEachSide="1" firstLast textButtons size="sm" class="pagination-circle" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Alignment Options --}}
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
                        <pre class="rounded p-3"><code>&lt;x-tabler::pagination :currentPage="2" :totalPages="5" class="justify-content-center" /&gt;
&lt;x-tabler::pagination :currentPage="2" :totalPages="5" class="justify-content-end" /&gt;</code></pre>
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
                        <table class="table-vcenter table">
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
                                <tr>
                                    <td><code>firstLast</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show first/last page links</td>
                                </tr>
                                <tr>
                                    <td><code>textButtons</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use text labels instead of icons for navigation buttons</td>
                                </tr>
                                <tr>
                                    <td><code>onEachSide</code></td>
                                    <td><span class="badge bg-green-lt">int</span></td>
                                    <td><code>3</code></td>
                                    <td>Number of pages to show on each side of current page (for large page counts)</td>
                                </tr>
                                <tr>
                                    <td><code>prevTitle</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Custom title for previous button with subtitle</td>
                                </tr>
                                <tr>
                                    <td><code>nextTitle</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Custom title for next button with subtitle</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Works with Laravel's pagination object for automatic URLs</li>
                            <li>Can be used manually with currentPage and totalPages props</li>
                            <li>Simple mode shows only Previous/Next buttons without page numbers</li>
                            <li>Use onEachSide prop to control how many pages show on each side of current page (default: 3)
                            </li>
                            <li>Ellipsis (...) automatically appears for large page counts</li>
                            <li>firstLast prop adds quick jump buttons to first/last pages</li>
                            <li>textButtons prop replaces icons with text labels</li>
                            <li>prevTitle/nextTitle props create descriptive navigation (perfect for documentation)</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Available CSS Classes --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Available CSS Classes</x-slot>
                    <x-slot:subtitle>Additional styling options via class attribute</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p class="text-secondary">You can use these classes via the <code>class=""</code> attribute for
                        additional styling:</p>

                    <div class="table-responsive">
                        <table class="table-vcenter table">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>pagination-outline</code></td>
                                    <td>Outlined/bordered style with transparent background</td>
                                </tr>
                                <tr>
                                    <td><code>pagination-circle</code></td>
                                    <td>Circular/pill-shaped buttons (rounded corners)</td>
                                </tr>
                                <tr>
                                    <td><code>pagination-sm</code></td>
                                    <td>Small/compact pagination (also available via size="sm" prop)</td>
                                </tr>
                                <tr>
                                    <td><code>pagination-lg</code></td>
                                    <td>Large pagination for touch interfaces (also available via size="lg" prop)</td>
                                </tr>
                                <tr>
                                    <td><code>justify-content-center</code></td>
                                    <td>Center-align pagination</td>
                                </tr>
                                <tr>
                                    <td><code>justify-content-end</code></td>
                                    <td>Right-align pagination</td>
                                </tr>
                                <tr>
                                    <td><code>justify-content-between</code></td>
                                    <td>Space pagination items evenly</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Margin & Spacing</h4>
                        <ul class="text-secondary">
                            <li><code>mt-{size}</code>, <code>mb-{size}</code> - Margin top/bottom (size: 0-5)</li>
                            <li><code>my-{size}</code> - Vertical margin</li>
                            <li><code>mx-auto</code> - Center horizontally</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Responsive Utilities</h4>
                        <ul class="text-secondary">
                            <li><code>d-none d-md-flex</code> - Hide on mobile, show on desktop</li>
                            <li><code>pagination-sm d-md-none</code> - Small on mobile, hide on desktop</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
