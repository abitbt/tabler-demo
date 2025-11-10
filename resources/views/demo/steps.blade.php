{{--
    Steps Component Demo

    Component: <x-tabler::steps>
    Location: abitbt/tablerui/stubs/resources/views/tabler/steps.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Steps" subtitle="Step indicators for multi-step processes" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Basic Steps --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Steps</x-slot>
                    <x-slot:subtitle>Simple step indicator with dots</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::steps :steps="['Personal Info', 'Address', 'Payment', 'Confirmation']" :currentStep="2" />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::steps :steps="['Personal Info', 'Address', 'Payment', 'Confirmation']" :currentStep="2" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Steps with Counter --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Steps with Counter</x-slot>
                    <x-slot:subtitle>Display step numbers instead of dots</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::steps :steps="['Account', 'Profile', 'Settings']" :currentStep="2" counter />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::steps :steps="['Account', 'Profile', 'Settings']" :currentStep="2" counter /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Colored Steps --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Colored Steps</x-slot>
                    <x-slot:subtitle>Steps with custom colors</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::steps :steps="['Start', 'Process', 'Complete']" :currentStep="2" color="success" class="mb-3" />
                    <x-tabler::steps :steps="['Draft', 'Review', 'Publish']" :currentStep="3" color="primary" counter />

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::steps :steps="['Start', 'Process', 'Complete']" :currentStep="2" color="success" /&gt;</code></pre>
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
                                    <td><code>steps</code></td>
                                    <td><span class="badge bg-orange-lt">array</span></td>
                                    <td><code>[]</code></td>
                                    <td>Array of step labels</td>
                                </tr>
                                <tr>
                                    <td><code>currentStep</code></td>
                                    <td><span class="badge bg-green-lt">int</span></td>
                                    <td><code>1</code></td>
                                    <td>Current active step number (1-based index)</td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Step color (primary, success, etc.)</td>
                                </tr>
                                <tr>
                                    <td><code>counter</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show step numbers instead of dots</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>currentStep uses 1-based indexing (first step is 1, not 0)</li>
                            <li>Steps before currentStep are marked as done</li>
                            <li>The currentStep is marked as active</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
