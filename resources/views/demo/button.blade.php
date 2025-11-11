{{--
    Button Component Demo

    Comprehensive showcase of all button variations, states, and features.
    Based on Tabler UI button patterns with Laravel Blade components.

    Component: <x-tabler::button>
    Location: tabler-blade/stubs/resources/views/tabler/button.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Button Components" subtitle="Comprehensive showcase of all button variations" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Standard Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Standard Buttons</x-slot>
                    <x-slot:subtitle>Default button style with various colors</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button color="primary">Primary</x-tabler::button>
                        <x-tabler::button color="secondary">Secondary</x-tabler::button>
                        <x-tabler::button color="success">Success</x-tabler::button>
                        <x-tabler::button color="warning">Warning</x-tabler::button>
                        <x-tabler::button color="danger">Danger</x-tabler::button>
                        <x-tabler::button color="info">Info</x-tabler::button>
                        <x-tabler::button color="light">Light</x-tabler::button>
                        <x-tabler::button color="dark">Dark</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button color="primary"&gt;Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="secondary"&gt;Secondary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="success"&gt;Success&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="danger"&gt;Danger&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Outline Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Outline Buttons</x-slot>
                    <x-slot:subtitle>Transparent background with colored border</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button color="primary" variant="outline">Primary</x-tabler::button>
                        <x-tabler::button color="secondary" variant="outline">Secondary</x-tabler::button>
                        <x-tabler::button color="success" variant="outline">Success</x-tabler::button>
                        <x-tabler::button color="warning" variant="outline">Warning</x-tabler::button>
                        <x-tabler::button color="danger" variant="outline">Danger</x-tabler::button>
                        <x-tabler::button color="info" variant="outline">Info</x-tabler::button>
                        <x-tabler::button color="light" variant="outline">Light</x-tabler::button>
                        <x-tabler::button color="dark" variant="outline">Dark</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button color="primary" variant="outline"&gt;Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="danger" variant="outline"&gt;Danger&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Ghost Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Ghost Buttons</x-slot>
                    <x-slot:subtitle>Minimal style with hover effect</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button color="primary" variant="ghost">Primary</x-tabler::button>
                        <x-tabler::button color="secondary" variant="ghost">Secondary</x-tabler::button>
                        <x-tabler::button color="success" variant="ghost">Success</x-tabler::button>
                        <x-tabler::button color="warning" variant="ghost">Warning</x-tabler::button>
                        <x-tabler::button color="danger" variant="ghost">Danger</x-tabler::button>
                        <x-tabler::button color="info" variant="ghost">Info</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button color="primary" variant="ghost"&gt;Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="success" variant="ghost"&gt;Success&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Square Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Square Buttons</x-slot>
                    <x-slot:subtitle>Buttons with sharp corners</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button color="primary" shape="square">Primary</x-tabler::button>
                        <x-tabler::button color="secondary" shape="square">Secondary</x-tabler::button>
                        <x-tabler::button color="success" shape="square">Success</x-tabler::button>
                        <x-tabler::button color="warning" shape="square">Warning</x-tabler::button>
                        <x-tabler::button color="danger" shape="square">Danger</x-tabler::button>
                        <x-tabler::button color="info" shape="square">Info</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button color="primary" shape="square"&gt;Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="danger" shape="square"&gt;Danger&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Pill Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Pill Buttons</x-slot>
                    <x-slot:subtitle>Fully rounded buttons</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button color="primary" shape="pill">Primary</x-tabler::button>
                        <x-tabler::button color="secondary" shape="pill">Secondary</x-tabler::button>
                        <x-tabler::button color="success" shape="pill">Success</x-tabler::button>
                        <x-tabler::button color="warning" shape="pill">Warning</x-tabler::button>
                        <x-tabler::button color="danger" shape="pill">Danger</x-tabler::button>
                        <x-tabler::button color="info" shape="pill">Info</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button color="primary" shape="pill"&gt;Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="success" shape="pill"&gt;Success&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Icon-Only Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Icon-Only Buttons</x-slot>
                    <x-slot:subtitle>Compact buttons with icons only</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button icon="heart" iconOnly color="primary" aria-label="Like" />
                        <x-tabler::button icon="star" iconOnly color="warning" aria-label="Favorite" />
                        <x-tabler::button icon="bookmark" iconOnly color="info" aria-label="Bookmark" />
                        <x-tabler::button icon="share" iconOnly color="success" aria-label="Share" />
                        <x-tabler::button icon="trash" iconOnly color="danger" aria-label="Delete" />
                        <x-tabler::button icon="download" iconOnly color="secondary" aria-label="Download" />
                        <x-tabler::button icon="settings" iconOnly variant="outline" aria-label="Settings" />
                        <x-tabler::button icon="dots-vertical" class="btn-action" aria-label="More" />
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button icon="heart" iconOnly color="primary" aria-label="Like" /&gt;
&lt;x-tabler::button icon="settings" iconOnly variant="outline" aria-label="Settings" /&gt;
&lt;x-tabler::button icon="dots-vertical" class="btn-action" aria-label="More" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Buttons with Leading Icons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Buttons with Leading Icons</x-slot>
                    <x-slot:subtitle>Icon positioned before text</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button icon="plus" color="primary">Add New</x-tabler::button>
                        <x-tabler::button icon="download" color="success">Download</x-tabler::button>
                        <x-tabler::button icon="upload" color="info">Upload</x-tabler::button>
                        <x-tabler::button icon="trash" color="danger">Delete</x-tabler::button>
                        <x-tabler::button icon="settings" variant="outline">Settings</x-tabler::button>
                        <x-tabler::button icon="edit" variant="ghost">Edit</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button icon="plus" color="primary"&gt;Add New&lt;/x-tabler::button&gt;
&lt;x-tabler::button icon="download" color="success"&gt;Download&lt;/x-tabler::button&gt;
&lt;x-tabler::button icon="trash" color="danger"&gt;Delete&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Buttons with Trailing Icons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Buttons with Trailing Icons</x-slot>
                    <x-slot:subtitle>Icon positioned after text</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button iconEnd="arrow-right" color="primary">Next</x-tabler::button>
                        <x-tabler::button iconEnd="chevron-down" variant="outline">Dropdown</x-tabler::button>
                        <x-tabler::button iconEnd="external-link" color="info">Open</x-tabler::button>
                        <x-tabler::button iconEnd="send" color="success">Send</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button iconEnd="arrow-right" color="primary"&gt;Next&lt;/x-tabler::button&gt;
&lt;x-tabler::button iconEnd="chevron-down" variant="outline"&gt;Dropdown&lt;/x-tabler::button&gt;
&lt;x-tabler::button iconEnd="send" color="success"&gt;Send&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Animated Icon Buttons --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Animated Icon Buttons</x-slot>
                    <x-slot:subtitle>Buttons with icon animations on hover</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button iconEnd="arrow-right" animate>Save</x-tabler::button>
                        <x-tabler::button icon="plus" animate="rotate" color="primary">Add</x-tabler::button>
                        <x-tabler::button icon="bell" animate="shake" color="warning">Notifications
                        </x-tabler::button>
                        <x-tabler::button icon="settings" animate="rotate" variant="outline">Settings
                        </x-tabler::button>
                        <x-tabler::button icon="heart" animate="pulse" color="danger">Love</x-tabler::button>
                        <x-tabler::button icon="x" animate="rotate" color="secondary">Close</x-tabler::button>
                        <x-tabler::button icon="check" animate="tada" color="success">Confirm</x-tabler::button>
                        <x-tabler::button iconEnd="chevron-right" animate>Next</x-tabler::button>
                        <x-tabler::button icon="chevron-left" animate="move-start" variant="ghost">Previous
                        </x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button iconEnd="arrow-right" animate&gt;Save&lt;/x-tabler::button&gt;
&lt;x-tabler::button icon="plus" animate="rotate" color="primary"&gt;Add&lt;/x-tabler::button&gt;
&lt;x-tabler::button icon="bell" animate="shake" color="warning"&gt;Notifications&lt;/x-tabler::button&gt;
&lt;x-tabler::button icon="heart" animate="pulse" color="danger"&gt;Love&lt;/x-tabler::button&gt;
&lt;x-tabler::button icon="check" animate="tada" color="success"&gt;Confirm&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Button Sizes --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Button Sizes</x-slot>
                    <x-slot:subtitle>Small, medium (default), and large sizes</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Small --}}
                        <div class="btn-list">
                            <x-tabler::button size="sm" color="primary">Small</x-tabler::button>
                            <x-tabler::button size="sm" icon="star" iconOnly color="primary"
                                aria-label="Star" />
                            <x-tabler::button size="sm" icon="star" color="success">With Icon</x-tabler::button>
                            <x-tabler::button size="sm" iconEnd="arrow-right" variant="outline">With Trail
                                Icon
                            </x-tabler::button>
                        </div>

                        {{-- Medium (Default) --}}
                        <div class="btn-list">
                            <x-tabler::button color="primary">Medium</x-tabler::button>
                            <x-tabler::button icon="star" iconOnly color="primary" aria-label="Star" />
                            <x-tabler::button icon="star" color="success">With Icon</x-tabler::button>
                            <x-tabler::button iconEnd="arrow-right" variant="outline">With Trail Icon
                            </x-tabler::button>
                        </div>

                        {{-- Large --}}
                        <div class="btn-list">
                            <x-tabler::button size="lg" color="primary">Large</x-tabler::button>
                            <x-tabler::button size="lg" icon="star" iconOnly color="primary"
                                aria-label="Star" />
                            <x-tabler::button size="lg" icon="star" color="success">With Icon</x-tabler::button>
                            <x-tabler::button size="lg" iconEnd="arrow-right" variant="outline">With Trail
                                Icon
                            </x-tabler::button>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button size="sm" color="primary"&gt;Small&lt;/x-tabler::button&gt;
&lt;x-tabler::button size="sm" icon="star" iconOnly color="primary" aria-label="Star" /&gt;
&lt;x-tabler::button color="primary"&gt;Medium&lt;/x-tabler::button&gt;
&lt;x-tabler::button size="lg" color="primary"&gt;Large&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Button States --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Button States</x-slot>
                    <x-slot:subtitle>Loading, disabled, and active states</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Loading State --}}
                        <div>
                            <div class="text-secondary mb-2">Loading State</div>
                            <div class="btn-list">
                                <x-tabler::button loading color="primary">Loading...</x-tabler::button>
                                <x-tabler::button loading color="success">Processing...</x-tabler::button>
                                <x-tabler::button loading variant="outline">Please wait...</x-tabler::button>
                            </div>
                        </div>

                        {{-- Disabled State --}}
                        <div>
                            <div class="text-secondary mb-2">Disabled State</div>
                            <div class="btn-list">
                                <x-tabler::button disabled color="primary">Disabled</x-tabler::button>
                                <x-tabler::button disabled color="success">Disabled</x-tabler::button>
                                <x-tabler::button disabled variant="outline">Disabled</x-tabler::button>
                            </div>
                        </div>

                        {{-- Link Buttons --}}
                        <div>
                            <div class="text-secondary mb-2">Link Buttons (renders as &lt;a&gt;)</div>
                            <div class="btn-list">
                                <x-tabler::button href="#" color="primary">Link Button</x-tabler::button>
                                <x-tabler::button href="#" color="success" icon="external-link">External Link
                                </x-tabler::button>
                                <x-tabler::button href="#" disabled variant="outline">Disabled Link
                                </x-tabler::button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button loading color="primary"&gt;Loading...&lt;/x-tabler::button&gt;
&lt;x-tabler::button disabled color="primary"&gt;Disabled&lt;/x-tabler::button&gt;
&lt;x-tabler::button href="#" color="primary"&gt;Link Button&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Special Button Styles (CSS Classes) --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Special Button Styles</x-slot>
                    <x-slot:subtitle>Using additional CSS classes</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Text Button --}}
                        <div>
                            <div class="text-secondary mb-2">Text Button (btn-link)</div>
                            <div class="btn-list">
                                <x-tabler::button class="btn-link">Text Button</x-tabler::button>
                                <x-tabler::button class="btn-link" icon="arrow-right">With Icon
                                </x-tabler::button>
                            </div>
                        </div>

                        {{-- Action Buttons --}}
                        <div>
                            <div class="text-secondary mb-2">Action Buttons (btn-action)</div>
                            <div class="btn-list">
                                <x-tabler::button class="btn-action" icon="edit" aria-label="Edit" />
                                <x-tabler::button class="btn-action" icon="copy" aria-label="Copy" />
                                <x-tabler::button class="btn-action" icon="settings" aria-label="Settings" />
                                <x-tabler::button class="btn-action" icon="trash" aria-label="Delete" />
                                <x-tabler::button class="btn-action" icon="x" aria-label="Close" />
                            </div>
                        </div>

                        {{-- Buttons with Shadows --}}
                        <div>
                            <div class="text-secondary mb-2">Buttons with Shadows</div>
                            <div class="btn-list">
                                <x-tabler::button color="primary" class="shadow-sm">Small Shadow
                                </x-tabler::button>
                                <x-tabler::button color="success" class="shadow">Default Shadow
                                </x-tabler::button>
                                <x-tabler::button color="danger" class="shadow-lg">Large Shadow
                                </x-tabler::button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button class="btn-link"&gt;Text Button&lt;/x-tabler::button&gt;
&lt;x-tabler::button class="btn-action" icon="edit" aria-label="Edit" /&gt;
&lt;x-tabler::button color="primary" class="shadow-lg"&gt;With Shadow&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Full Width Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Full Width Buttons</x-slot>
                    <x-slot:subtitle>Buttons that stretch to container width</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        <x-tabler::button fullWidth color="primary">Full Width Primary</x-tabler::button>
                        <x-tabler::button fullWidth color="success" icon="check">Full Width with Icon
                        </x-tabler::button>
                        <x-tabler::button fullWidth variant="outline">Full Width Outline</x-tabler::button>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::button fullWidth color="primary"&gt;Full Width Primary&lt;/x-tabler::button&gt;
&lt;x-tabler::button fullWidth color="success" icon="check"&gt;Full Width with Icon&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Button Groups --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Button Groups</x-slot>
                    <x-slot:subtitle>Common button group patterns</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Form Actions --}}
                        <div>
                            <div class="text-secondary mb-2">Form Actions</div>
                            <div class="btn-list">
                                <x-tabler::button type="submit" color="primary">Save Changes</x-tabler::button>
                                <x-tabler::button type="button" variant="outline">Cancel</x-tabler::button>
                            </div>
                        </div>

                        {{-- CRUD Actions --}}
                        <div>
                            <div class="text-secondary mb-2">CRUD Actions</div>
                            <div class="btn-list">
                                <x-tabler::button icon="plus" color="primary">Create New</x-tabler::button>
                                <x-tabler::button icon="edit" color="info">Edit</x-tabler::button>
                                <x-tabler::button icon="copy" color="secondary">Duplicate</x-tabler::button>
                                <x-tabler::button icon="trash" color="danger">Delete</x-tabler::button>
                            </div>
                        </div>

                        {{-- Modal Actions --}}
                        <div>
                            <div class="text-secondary mb-2">Modal Actions (right-aligned)</div>
                            <div class="d-flex">
                                <x-tabler::button class="btn-link">Cancel</x-tabler::button>
                                <x-tabler::button color="primary" class="ms-auto">Confirm</x-tabler::button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;!-- Form Actions --&gt;
&lt;x-tabler::button type="submit" color="primary"&gt;Save Changes&lt;/x-tabler::button&gt;
&lt;x-tabler::button type="button" variant="outline"&gt;Cancel&lt;/x-tabler::button&gt;

&lt;!-- Modal Actions (right-aligned) --&gt;
&lt;div class="d-flex"&gt;
&lt;x-tabler::button class="btn-link"&gt;Cancel&lt;/x-tabler::button&gt;
&lt;x-tabler::button color="primary" class="ms-auto"&gt;Confirm&lt;/x-tabler::button&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference Table --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot>
                    <x-slot:subtitle>Complete list of available button component props</x-slot>
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
                                    <td><code>'button'</code></td>
                                    <td>Button type attribute. Options: <code>button</code>, <code>submit</code>,
                                        <code>reset</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>href</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>URL to link to. When set, renders as <code>&lt;a&gt;</code> instead of
                                        <code>&lt;button&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Button color. Options: <code>primary</code>, <code>secondary</code>,
                                        <code>success</code>,
                                        <code>danger</code>, <code>warning</code>, <code>info</code>,
                                        <code>light</code>, <code>dark</code>, or any Tabler color
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>variant</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Button style variant. Options: <code>outline</code>, <code>ghost</code></td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Button size. Options: <code>sm</code>, <code>lg</code> (omit for
                                        default/medium)
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>shape</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Button shape. Options: <code>square</code>, <code>pill</code></td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Leading icon name (without <code>tabler-</code> prefix). Example:
                                        <code>plus</code>, <code>download</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>iconEnd</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Trailing icon name (without <code>tabler-</code> prefix)</td>
                                </tr>
                                <tr>
                                    <td><code>iconOnly</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Icon-only button with no text. Requires <code>icon</code> or
                                        <code>iconEnd</code> prop
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>loading</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show loading spinner state. Button becomes disabled automatically</td>
                                </tr>
                                <tr>
                                    <td><code>disabled</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Disable button interaction</td>
                                </tr>
                                <tr>
                                    <td><code>animate</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Icon animation on hover. Options: <code>rotate</code>, <code>shake</code>,
                                        <code>pulse</code>, <code>tada</code>, <code>move-start</code>, or <code>true</code>
                                        for default
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>fullWidth</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Make button full width (adds <code>w-100</code> class)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Icons use the <code>secondnetwork/blade-tabler-icons</code> package. Icon names
                                should be provided without the <code>tabler-</code> prefix.
                            </li>
                            <li>When <code>href</code> is set, the component renders as an
                                <code>&lt;a&gt;</code> element with <code>role="button"</code>.
                            </li>
                            <li>Icon-only buttons automatically generate an <code>aria-label</code> if not
                                provided for accessibility.
                            </li>
                            <li>The <code>loading</code> state automatically disables the button.</li>
                            <li>All standard HTML attributes can be passed via the <code>$attributes</code> bag
                                (e.g., <code>data-*</code>, <code>id</code>, <code>onclick</code>).
                            </li>
                            <li>Colors can be any valid Tabler color: <code>primary</code>,
                                <code>secondary</code>, <code>success</code>, <code>danger</code>,
                                <code>warning</code>, <code>info</code>, <code>light</code>, <code>dark</code>,
                                <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
                                <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
                                <code>lime</code>, <code>green</code>, <code>teal</code>, <code>cyan</code>.
                            </li>
                            <li><strong>Important:</strong> Use <code>iconOnly</code> prop for regular icon-only
                                buttons. Use <code>class="btn-action"</code> for minimal action buttons (without
                                <code>iconOnly</code> prop). Don't combine both as they conflict.
                            </li>
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
                    <p class="text-secondary">You can use these classes via the <code>class=""</code> attribute
                        for additional styling:</p>

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
                                    <td><code>btn-link</code></td>
                                    <td>Text button style with no background</td>
                                </tr>
                                <tr>
                                    <td><code>btn-action</code></td>
                                    <td>Minimal action button (typically for icon-only buttons)</td>
                                </tr>
                                <tr>
                                    <td><code>btn-floating</code></td>
                                    <td>Floating action button</td>
                                </tr>
                                <tr>
                                    <td><code>shadow-sm</code>, <code>shadow</code>, <code>shadow-lg</code></td>
                                    <td>Add shadow effects (small, default, large)</td>
                                </tr>
                                <tr>
                                    <td><code>w-100</code></td>
                                    <td>Full width button (also available via <code>fullWidth</code> prop)</td>
                                </tr>
                                <tr>
                                    <td><code>me-2</code>, <code>ms-2</code>, <code>mb-2</code>, <code>mt-2</code>
                                    </td>
                                    <td>Margin utilities for button spacing in groups</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Color Classes</h4>
                        <p class="text-secondary">
                            <strong>Available colors:</strong>
                            <code>primary</code>, <code>secondary</code>, <code>success</code>,
                            <code>danger</code>,
                            <code>warning</code>, <code>info</code>, <code>light</code>, <code>dark</code>,
                            <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
                            <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
                            <code>lime</code>, <code>green</code>, <code>teal</code>, <code>cyan</code>
                        </p>
                    </div>

                    <div class="mt-4">
                        <h4>Utility Classes</h4>
                        <ul class="text-secondary">
                            <li><code>mb-2</code>, <code>mt-2</code>, <code>me-2</code>, <code>ms-2</code> -
                                Margin utilities for spacing
                            </li>
                            <li><code>w-100</code> - Full width (also available via <code>fullWidth</code> prop)
                            </li>
                            <li><code>d-flex</code>, <code>d-block</code>, <code>d-none</code> - Display
                                utilities
                            </li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
