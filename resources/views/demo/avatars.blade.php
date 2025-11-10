{{--
    Avatar Component Demo

    Components:
    - <x-tabler::avatar>
    - <x-tabler::avatar-list>

    Location: abitbt/tablerui/stubs/resources/views/tabler/avatar.blade.php
    Location: abitbt/tablerui/stubs/resources/views/tabler/avatar-list.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Avatars" subtitle="User profile pictures and placeholders" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Avatar Sizes --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Avatar Sizes</x-slot>
                    <x-slot:subtitle>Different size variations</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex gap-2 align-items-end">
                        <x-tabler::avatar size="sm" icon="user" />
                        <x-tabler::avatar size="md" icon="user" />
                        <x-tabler::avatar size="lg" icon="user" />
                        <x-tabler::avatar size="xl" icon="user" />
                        <x-tabler::avatar size="xxl" icon="user" />
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::avatar size="lg" icon="user" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Avatar with Initials --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Avatar with Initials</x-slot>
                    <x-slot:subtitle>Display user initials</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex gap-2">
                        <x-tabler::avatar initials="JD" />
                        <x-tabler::avatar initials="AB" size="lg" />
                        <x-tabler::avatar initials="XY" size="xl" />
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::avatar initials="JD" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Avatar Shapes --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Avatar Shapes</x-slot>
                    <x-slot:subtitle>Rounded or circular</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex gap-3">
                        <x-tabler::avatar initials="AB" shape="rounded" />
                        <x-tabler::avatar initials="CD" shape="rounded-circle" />
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::avatar initials="AB" shape="rounded-circle" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Avatar with Status --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Avatar with Status</x-slot>
                    <x-slot:subtitle>Show online/offline indicators</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="d-flex gap-3">
                        <x-tabler::avatar initials="JD" status="success" />
                        <x-tabler::avatar initials="AB" status="danger" />
                        <x-tabler::avatar initials="CD" status="warning" />
                        <x-tabler::avatar initials="EF" status="secondary" />
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::avatar initials="JD" status="success" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Avatar List --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Avatar List</x-slot>
                    <x-slot:subtitle>Display multiple avatars inline</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::avatar-list>
                        <x-tabler::avatar initials="JD" />
                        <x-tabler::avatar initials="AB" />
                        <x-tabler::avatar initials="CD" />
                        <x-tabler::avatar initials="EF" />
                    </x-tabler::avatar-list>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::avatar-list&gt;
    &lt;x-tabler::avatar initials="JD" /&gt;
    &lt;x-tabler::avatar initials="AB" /&gt;
    &lt;x-tabler::avatar initials="CD" /&gt;
&lt;/x-tabler::avatar-list&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Stacked Avatar List --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Stacked Avatar List</x-slot>
                    <x-slot:subtitle>Overlapping avatars</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::avatar-list stacked>
                        <x-tabler::avatar initials="JD" />
                        <x-tabler::avatar initials="AB" />
                        <x-tabler::avatar initials="CD" />
                        <x-tabler::avatar initials="EF" />
                        <x-tabler::avatar initials="+5" />
                    </x-tabler::avatar-list>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::avatar-list stacked&gt;
    &lt;x-tabler::avatar initials="JD" /&gt;
    &lt;x-tabler::avatar initials="AB" /&gt;
    &lt;x-tabler::avatar initials="CD" /&gt;
    &lt;x-tabler::avatar initials="+5" /&gt;
&lt;/x-tabler::avatar-list&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference - Avatar</x-slot>
                    <x-slot:subtitle>Complete list of available avatar props</x-slot>
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
                                    <td><code>src</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Image source URL</td>
                                </tr>
                                <tr>
                                    <td><code>alt</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>''</code></td>
                                    <td>Alt text for image</td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'md'</code></td>
                                    <td>Avatar size: 'sm', 'md', 'lg', 'xl', 'xxl'</td>
                                </tr>
                                <tr>
                                    <td><code>status</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Status indicator: 'success', 'danger', 'warning', 'info', 'secondary'</td>
                                </tr>
                                <tr>
                                    <td><code>shape</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'rounded'</code></td>
                                    <td>Avatar shape: 'rounded', 'rounded-circle'</td>
                                </tr>
                                <tr>
                                    <td><code>initials</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Initials to display if no image</td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Tabler icon name if no image or initials</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Priority: src > initials > icon</li>
                            <li>Icons use blade-tabler-icons package</li>
                            <li>Status indicators appear as colored badges</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
