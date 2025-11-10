{{--
    Progress Component Demo

    Comprehensive showcase of progress bar variations and features.

    Component: <x-tabler::progress>
    Location: abitbt/tablerui/stubs/resources/views/tabler/progress.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Progress Bars" subtitle="Visual indicators for showing completion percentage" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Basic Progress --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Progress</x-slot>
                    <x-slot:subtitle>Simple progress bars with different values</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::progress :value="25" class="mb-3" />
                    <x-tabler::progress :value="50" class="mb-3" />
                    <x-tabler::progress :value="75" class="mb-3" />
                    <x-tabler::progress :value="100" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::progress :value="75" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Colored Progress --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Colored Progress</x-slot>
                    <x-slot:subtitle>Progress bars with different colors</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::progress :value="25" color="primary" class="mb-3" />
                    <x-tabler::progress :value="50" color="success" class="mb-3" />
                    <x-tabler::progress :value="75" color="warning" class="mb-3" />
                    <x-tabler::progress :value="90" color="danger" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::progress :value="50" color="success" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Progress with Labels --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Progress with Labels</x-slot>
                    <x-slot:subtitle>Display percentage inside progress bar</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::progress :value="25" label="25%" class="mb-3" />
                    <x-tabler::progress :value="50" label="50%" color="info" class="mb-3" />
                    <x-tabler::progress :value="75" label="75%" color="success" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::progress :value="75" label="75%" color="success" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Striped and Animated --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Striped & Animated</x-slot>
                    <x-slot:subtitle>Progress bars with patterns and animations</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::progress :value="50" striped color="primary" class="mb-3" />
                    <x-tabler::progress :value="60" striped animated color="success" class="mb-3" />
                    <x-tabler::progress :value="70" striped animated color="warning" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::progress :value="60" striped animated color="success" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Small Progress --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Small Progress</x-slot>
                    <x-slot:subtitle>Thin progress bars</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::progress :value="40" size="sm" color="primary" class="mb-3" />
                    <x-tabler::progress :value="60" size="sm" color="success" class="mb-3" />
                    <x-tabler::progress :value="80" size="sm" color="danger" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::progress :value="60" size="sm" color="success" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Indeterminate Progress --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Indeterminate</x-slot>
                    <x-slot:subtitle>Loading state for unknown duration</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::progress indeterminate color="primary" class="mb-3" />
                    <x-tabler::progress indeterminate color="success" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::progress indeterminate color="primary" /&gt;</code></pre>
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
                                    <td><code>value</code></td>
                                    <td><span class="badge bg-green-lt">int|float</span></td>
                                    <td><code>0</code></td>
                                    <td>Progress value (0-100)</td>
                                </tr>
                                <tr>
                                    <td><code>max</code></td>
                                    <td><span class="badge bg-green-lt">int|float</span></td>
                                    <td><code>100</code></td>
                                    <td>Maximum value</td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Progress bar color (primary, success, danger, etc.)</td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Progress bar size: 'sm'</td>
                                </tr>
                                <tr>
                                    <td><code>label</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Text label to display inside progress bar</td>
                                </tr>
                                <tr>
                                    <td><code>striped</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Enable striped pattern</td>
                                </tr>
                                <tr>
                                    <td><code>animated</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Enable animation (requires striped)</td>
                                </tr>
                                <tr>
                                    <td><code>indeterminate</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show indeterminate/loading state</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Value is automatically clamped between 0 and max</li>
                            <li>Animated stripes require striped prop to be true</li>
                            <li>Indeterminate state ignores value prop</li>
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
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>progress-sm</code></td>
                                    <td>Small/thin progress bar</td>
                                </tr>
                                <tr>
                                    <td><code>bg-{color}</code></td>
                                    <td>Apply color to progress bar (use on inner .progress-bar)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
