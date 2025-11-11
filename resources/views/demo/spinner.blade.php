{{--
    Spinner Component Demo

    Comprehensive showcase of loading spinner variations.

    Component: <x-tabler::spinner>
    Location: tabler-blade/stubs/resources/views/tabler/spinner.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Spinners" subtitle="Loading indicators for in-progress actions" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Border Spinners --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Border Spinners</x-slot>
                    <x-slot:subtitle>Default rotating border style</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center gap-3">
                        <x-tabler::spinner />
                        <x-tabler::spinner color="primary" />
                        <x-tabler::spinner color="success" />
                        <x-tabler::spinner color="danger" />
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::spinner color="primary" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Growing Spinners --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Growing Spinners</x-slot>
                    <x-slot:subtitle>Pulsing grow animation</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center gap-3">
                        <x-tabler::spinner type="grow" />
                        <x-tabler::spinner type="grow" color="primary" />
                        <x-tabler::spinner type="grow" color="success" />
                        <x-tabler::spinner type="grow" color="danger" />
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::spinner type="grow" color="primary" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Small Spinners --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Small Spinners</x-slot>
                    <x-slot:subtitle>Compact size for inline use</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center mb-3 gap-3">
                        <x-tabler::spinner size="sm" />
                        <x-tabler::spinner size="sm" color="primary" />
                        <x-tabler::spinner size="sm" color="success" />
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <x-tabler::spinner type="grow" size="sm" />
                        <x-tabler::spinner type="grow" size="sm" color="primary" />
                        <x-tabler::spinner type="grow" size="sm" color="success" />
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::spinner size="sm" color="primary" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Spinner in Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Spinners in Buttons</x-slot>
                    <x-slot:subtitle>Loading state for buttons</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button disabled color="primary">
                            <x-tabler::spinner size="sm" class="me-2" />
                            Loading...
                        </x-tabler::button>
                        <x-tabler::button disabled color="success">
                            <x-tabler::spinner type="grow" size="sm" class="me-2" />
                            Processing...
                        </x-tabler::button>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button disabled color="primary"&gt;
    &lt;x-tabler::spinner size="sm" class="me-2" /&gt;
    Loading...
&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Color Variations --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Color Variations</x-slot>
                    <x-slot:subtitle>All available color options</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center flex-wrap gap-3">
                        <x-tabler::spinner color="primary" />
                        <x-tabler::spinner color="secondary" />
                        <x-tabler::spinner color="success" />
                        <x-tabler::spinner color="danger" />
                        <x-tabler::spinner color="warning" />
                        <x-tabler::spinner color="info" />
                        <x-tabler::spinner color="blue" />
                        <x-tabler::spinner color="azure" />
                        <x-tabler::spinner color="indigo" />
                        <x-tabler::spinner color="purple" />
                        <x-tabler::spinner color="pink" />
                        <x-tabler::spinner color="red" />
                        <x-tabler::spinner color="orange" />
                        <x-tabler::spinner color="yellow" />
                        <x-tabler::spinner color="lime" />
                        <x-tabler::spinner color="green" />
                        <x-tabler::spinner color="teal" />
                        <x-tabler::spinner color="cyan" />
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
                                    <td><code>type</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'border'</code></td>
                                    <td>Spinner type: 'border', 'grow'</td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Spinner size: 'sm'</td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Spinner color (primary, success, danger, etc.)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Available Slots</h4>
                        <p class="text-secondary">Named slots for flexible content placement.</p>
                        <div class="table-responsive">
                            <table class="table-vcenter table">
                                <thead>
                                    <tr>
                                        <th>Slot</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>default</code></td>
                                        <td>Optional accessible label text (visually hidden). Defaults to "Loading..."</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Spinners include built-in accessibility with sr-only label</li>
                            <li>Use size="sm" for inline spinners in buttons or text</li>
                            <li>Border type is default and most commonly used</li>
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
                    <p class="text-secondary">You can use these classes via the <code>class=""</code> attribute:</p>

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
                                    <td><code>me-2</code>, <code>ms-2</code></td>
                                    <td>Margin spacing for inline spinners</td>
                                </tr>
                                <tr>
                                    <td><code>text-{color}</code></td>
                                    <td>Apply color to spinner</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
