{{--
    Badge Component Demo

    Comprehensive showcase of all badge variations, styles, and features.
    Based on Tabler UI badge patterns with Laravel Blade components.

    Component: <x-tabler::badge>
    Location: abitbt/tablerui/stubs/resources/views/tabler/badge.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Badge Components" subtitle="Comprehensive showcase of all badge variations" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Basic Badges --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Badges</x-slot>
                    <x-slot:subtitle>Solid color badges with all available colors</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="badges-list">
                        <x-tabler::badge color="primary">Primary</x-tabler::badge>
                        <x-tabler::badge color="secondary">Secondary</x-tabler::badge>
                        <x-tabler::badge color="success">Success</x-tabler::badge>
                        <x-tabler::badge color="danger">Danger</x-tabler::badge>
                        <x-tabler::badge color="warning">Warning</x-tabler::badge>
                        <x-tabler::badge color="info">Info</x-tabler::badge>
                        <x-tabler::badge color="light">Light</x-tabler::badge>
                        <x-tabler::badge color="dark">Dark</x-tabler::badge>
                        <x-tabler::badge color="blue">Blue</x-tabler::badge>
                        <x-tabler::badge color="azure">Azure</x-tabler::badge>
                        <x-tabler::badge color="indigo">Indigo</x-tabler::badge>
                        <x-tabler::badge color="purple">Purple</x-tabler::badge>
                        <x-tabler::badge color="pink">Pink</x-tabler::badge>
                        <x-tabler::badge color="red">Red</x-tabler::badge>
                        <x-tabler::badge color="orange">Orange</x-tabler::badge>
                        <x-tabler::badge color="yellow">Yellow</x-tabler::badge>
                        <x-tabler::badge color="lime">Lime</x-tabler::badge>
                        <x-tabler::badge color="green">Green</x-tabler::badge>
                        <x-tabler::badge color="teal">Teal</x-tabler::badge>
                        <x-tabler::badge color="cyan">Cyan</x-tabler::badge>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::badge color="primary"&gt;Primary&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="success"&gt;Success&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="danger"&gt;Danger&lt;/x-tabler::badge&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Light/Subtle Badges --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Light/Subtle Badges</x-slot>
                    <x-slot:subtitle>Pastel color variants with subtle backgrounds</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="badges-list">
                        <x-tabler::badge color="primary" variant="light">Primary</x-tabler::badge>
                        <x-tabler::badge color="secondary" variant="light">Secondary</x-tabler::badge>
                        <x-tabler::badge color="success" variant="light">Success</x-tabler::badge>
                        <x-tabler::badge color="danger" variant="light">Danger</x-tabler::badge>
                        <x-tabler::badge color="warning" variant="light">Warning</x-tabler::badge>
                        <x-tabler::badge color="info" variant="light">Info</x-tabler::badge>
                        <x-tabler::badge color="blue" variant="light">Blue</x-tabler::badge>
                        <x-tabler::badge color="azure" variant="light">Azure</x-tabler::badge>
                        <x-tabler::badge color="indigo" variant="light">Indigo</x-tabler::badge>
                        <x-tabler::badge color="purple" variant="light">Purple</x-tabler::badge>
                        <x-tabler::badge color="pink" variant="light">Pink</x-tabler::badge>
                        <x-tabler::badge color="red" variant="light">Red</x-tabler::badge>
                        <x-tabler::badge color="orange" variant="light">Orange</x-tabler::badge>
                        <x-tabler::badge color="yellow" variant="light">Yellow</x-tabler::badge>
                        <x-tabler::badge color="lime" variant="light">Lime</x-tabler::badge>
                        <x-tabler::badge color="green" variant="light">Green</x-tabler::badge>
                        <x-tabler::badge color="teal" variant="light">Teal</x-tabler::badge>
                        <x-tabler::badge color="cyan" variant="light">Cyan</x-tabler::badge>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::badge color="blue" variant="light"&gt;Blue&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="green" variant="light"&gt;Green&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="purple" variant="light"&gt;Purple&lt;/x-tabler::badge&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Outline Badges --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Outline Badges</x-slot>
                    <x-slot:subtitle>Transparent background with colored border</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="badges-list">
                        <x-tabler::badge color="primary" variant="outline">Primary</x-tabler::badge>
                        <x-tabler::badge color="secondary" variant="outline">Secondary</x-tabler::badge>
                        <x-tabler::badge color="success" variant="outline">Success</x-tabler::badge>
                        <x-tabler::badge color="danger" variant="outline">Danger</x-tabler::badge>
                        <x-tabler::badge color="warning" variant="outline">Warning</x-tabler::badge>
                        <x-tabler::badge color="info" variant="outline">Info</x-tabler::badge>
                        <x-tabler::badge color="blue" variant="outline">Blue</x-tabler::badge>
                        <x-tabler::badge color="purple" variant="outline">Purple</x-tabler::badge>
                        <x-tabler::badge color="pink" variant="outline">Pink</x-tabler::badge>
                        <x-tabler::badge color="red" variant="outline">Red</x-tabler::badge>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::badge color="primary" variant="outline"&gt;Primary&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="danger" variant="outline"&gt;Danger&lt;/x-tabler::badge&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Pill Badges --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Pill Badges</x-slot>
                    <x-slot:subtitle>Rounded pill shape for counters and numbers</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="badges-list">
                        <x-tabler::badge color="primary" class="badge-pill">1</x-tabler::badge>
                        <x-tabler::badge color="secondary" class="badge-pill">2</x-tabler::badge>
                        <x-tabler::badge color="success" class="badge-pill">3</x-tabler::badge>
                        <x-tabler::badge color="danger" class="badge-pill">4</x-tabler::badge>
                        <x-tabler::badge color="warning" class="badge-pill">5</x-tabler::badge>
                        <x-tabler::badge color="info" class="badge-pill">6</x-tabler::badge>
                        <x-tabler::badge color="blue" class="badge-pill">99+</x-tabler::badge>
                        <x-tabler::badge color="purple" class="badge-pill">New</x-tabler::badge>
                        <x-tabler::badge color="pink" variant="light" class="badge-pill">Hot</x-tabler::badge>
                        <x-tabler::badge color="red" variant="light" class="badge-pill">Sale</x-tabler::badge>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::badge color="primary" class="badge-pill"&gt;1&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="blue" class="badge-pill"&gt;99+&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="purple" class="badge-pill"&gt;New&lt;/x-tabler::badge&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Badges with Icons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Badges with Icons</x-slot>
                    <x-slot:subtitle>Leading and trailing icons in badges</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Leading icons --}}
                        <div>
                            <div class="text-secondary mb-2">Leading Icons</div>
                            <div class="badges-list">
                                <x-tabler::badge icon="star" color="warning">Featured</x-tabler::badge>
                                <x-tabler::badge icon="check" color="success">Verified</x-tabler::badge>
                                <x-tabler::badge icon="bell" color="danger">Hot</x-tabler::badge>
                                <x-tabler::badge icon="heart" color="pink">Favorite</x-tabler::badge>
                                <x-tabler::badge icon="clock" color="yellow">Pending</x-tabler::badge>
                                <x-tabler::badge icon="shield" color="blue">Secure</x-tabler::badge>
                            </div>
                        </div>

                        {{-- Trailing icons --}}
                        <div>
                            <div class="text-secondary mb-2">Trailing Icons</div>
                            <div class="badges-list">
                                <x-tabler::badge icon-end="arrow-right" color="primary">Next</x-tabler::badge>
                                <x-tabler::badge icon-end="external-link" color="info">Open</x-tabler::badge>
                                <x-tabler::badge icon-end="chevron-down" color="secondary">More
                                </x-tabler::badge>
                                <x-tabler::badge icon-end="x" color="danger">Close</x-tabler::badge>
                            </div>
                        </div>

                        {{-- Icon-only badges --}}
                        <div>
                            <div class="text-secondary mb-2">Icon-Only Badges</div>
                            <div class="badges-list">
                                <x-tabler::badge icon="star" iconOnly color="warning" />
                                <x-tabler::badge icon="heart" iconOnly color="red" />
                                <x-tabler::badge icon="check" iconOnly color="success" />
                                <x-tabler::badge icon="x" iconOnly color="danger" />
                                <x-tabler::badge icon="plus" iconOnly color="primary" />
                                <x-tabler::badge icon="minus" iconOnly color="secondary" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::badge icon="star" color="warning"&gt;Featured&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge icon-end="arrow-right" color="primary"&gt;Next&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge icon="star" iconOnly color="warning" /&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Badge Sizes --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Badge Sizes</x-slot>
                    <x-slot:subtitle>Small, medium (default), and large sizes</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Small --}}
                        <div>
                            <div class="text-secondary mb-2">Small Badges</div>
                            <div class="badges-list">
                                <x-tabler::badge size="sm" color="primary">Small</x-tabler::badge>
                                <x-tabler::badge size="sm" color="blue" class="badge-pill">1</x-tabler::badge>
                                <x-tabler::badge size="sm" icon="star" color="warning">Small</x-tabler::badge>
                            </div>
                        </div>

                        {{-- Medium (Default) --}}
                        <div>
                            <div class="text-secondary mb-2">Medium Badges (Default)</div>
                            <div class="badges-list">
                                <x-tabler::badge color="primary">Medium</x-tabler::badge>
                                <x-tabler::badge color="blue" class="badge-pill">1</x-tabler::badge>
                                <x-tabler::badge icon="star" color="warning">Medium</x-tabler::badge>
                            </div>
                        </div>

                        {{-- Large --}}
                        <div>
                            <div class="text-secondary mb-2">Large Badges</div>
                            <div class="badges-list">
                                <x-tabler::badge size="lg" color="primary">Large</x-tabler::badge>
                                <x-tabler::badge size="lg" color="blue" class="badge-pill">1</x-tabler::badge>
                                <x-tabler::badge size="lg" icon="star" color="warning">Large</x-tabler::badge>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::badge size="sm" color="primary"&gt;Small&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge color="primary"&gt;Medium&lt;/x-tabler::badge&gt;
&lt;x-tabler::badge size="lg" color="primary"&gt;Large&lt;/x-tabler::badge&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Badges in Headings --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Badges in Headings</x-slot>
                    <x-slot:subtitle>Draw attention to new or important information</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h1>Example heading
                        <x-tabler::badge>New</x-tabler::badge>
                    </h1>
                    <h2>Example heading
                        <x-tabler::badge color="primary">New</x-tabler::badge>
                    </h2>
                    <h3>Example heading
                        <x-tabler::badge color="success">New</x-tabler::badge>
                    </h3>
                    <h4>Example heading
                        <x-tabler::badge color="danger">Hot</x-tabler::badge>
                    </h4>
                    <h5>Example heading
                        <x-tabler::badge color="info">Beta</x-tabler::badge>
                    </h5>
                    <h6>Example heading
                        <x-tabler::badge color="warning">Pro</x-tabler::badge>
                    </h6>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;h2&gt;Product Title &lt;x-tabler::badge color="success"&gt;New&lt;/x-tabler::badge&gt;&lt;/h2&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Link Badges --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Link Badges</x-slot>
                    <x-slot:subtitle>Clickable badges that perform actions</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="badges-list">
                        <x-tabler::badge href="#" color="blue" variant="light">Blue</x-tabler::badge>
                        <x-tabler::badge href="#" color="azure" variant="light">Azure</x-tabler::badge>
                        <x-tabler::badge href="#" color="indigo" variant="light">Indigo</x-tabler::badge>
                        <x-tabler::badge href="#" color="purple" variant="light">Purple</x-tabler::badge>
                        <x-tabler::badge href="#" color="pink" variant="light">Pink</x-tabler::badge>
                        <x-tabler::badge href="#" color="red" variant="light">Red</x-tabler::badge>
                        <x-tabler::badge href="#" color="orange" variant="light">Orange</x-tabler::badge>
                        <x-tabler::badge href="#" color="yellow" variant="light">Yellow</x-tabler::badge>
                        <x-tabler::badge href="#" color="lime" variant="light">Lime</x-tabler::badge>
                        <x-tabler::badge href="#" color="green" variant="light">Green</x-tabler::badge>
                        <x-tabler::badge href="#" color="teal" variant="light">Teal</x-tabler::badge>
                        <x-tabler::badge href="#" color="cyan" variant="light">Cyan</x-tabler::badge>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::badge href="/profile" color="blue" variant="light"&gt;View Profile&lt;/x-tabler::badge&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Badges in Buttons --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Badges in Buttons</x-slot>
                    <x-slot:subtitle>Inline badges and positioned notification badges</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Inline badges --}}
                        <div>
                            <div class="text-secondary mb-2">Inline Badges</div>
                            <div class="btn-list">
                                <button type="button" class="btn">
                                    Notifications
                                    <x-tabler::badge color="red" class="ms-2">4</x-tabler::badge>
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Messages
                                    <x-tabler::badge color="light" class="ms-2">12</x-tabler::badge>
                                </button>
                                <button type="button" class="btn btn-success">
                                    Tasks
                                    <x-tabler::badge color="dark" class="ms-2">3</x-tabler::badge>
                                </button>
                            </div>
                        </div>

                        {{-- Positioned badges (with numbers) --}}
                        <div>
                            <div class="text-secondary mb-2">Positioned Notification Badges (with count)</div>
                            <div class="btn-list">
                                <button type="button" class="btn position-relative">
                                    Inbox
                                    <x-tabler::badge color="red" class="badge-notification badge-pill">9+
                                    </x-tabler::badge>
                                </button>
                                <button type="button" class="btn position-relative">
                                    Messages
                                    <x-tabler::badge color="blue" class="badge-notification badge-pill">5
                                    </x-tabler::badge>
                                </button>
                                <button type="button" class="btn btn-primary position-relative">
                                    Alerts
                                    <x-tabler::badge color="red" class="badge-notification badge-pill">2
                                    </x-tabler::badge>
                                </button>
                            </div>
                        </div>

                        {{-- Dot indicators --}}
                        <div>
                            <div class="text-secondary mb-2">Dot Notification Indicators</div>
                            <div class="btn-list">
                                <button type="button" class="btn position-relative">
                                    Profile
                                    <x-tabler::badge color="red" dot class="badge-notification" />
                                </button>
                                <button type="button" class="btn btn-primary position-relative">
                                    Dashboard
                                    <x-tabler::badge color="green" dot class="badge-notification" />
                                </button>
                                <x-tabler::button icon="bell" iconOnly class="position-relative">
                                    <x-tabler::badge color="red" dot class="badge-notification" />
                                </x-tabler::button>
                            </div>
                        </div>

                        {{-- Blinking badges --}}
                        <div>
                            <div class="text-secondary mb-2">Blinking/Animated Badges</div>
                            <div class="btn-list">
                                <button type="button" class="btn position-relative">
                                    Settings
                                    <x-tabler::badge color="red" dot class="badge-notification badge-blink" />
                                </button>
                                <button type="button" class="btn btn-primary position-relative">
                                    Updates
                                    <x-tabler::badge color="red" class="badge-notification badge-pill badge-blink">3
                                    </x-tabler::badge>
                                </button>
                                <x-tabler::button icon="bell" iconOnly class="position-relative">
                                    <x-tabler::badge color="red" dot class="badge-notification badge-blink" />
                                </x-tabler::button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;!-- Inline badge --&gt;
&lt;button class="btn"&gt;
    Notifications &lt;x-tabler::badge color="red" class="ms-2"&gt;4&lt;/x-tabler::badge&gt;
&lt;/button&gt;

&lt;!-- Positioned badge --&gt;
&lt;button class="btn position-relative"&gt;
    Inbox &lt;x-tabler::badge color="red" class="badge-notification badge-pill"&gt;9+&lt;/x-tabler::badge&gt;
&lt;/button&gt;

&lt;!-- Dot indicator --&gt;
&lt;button class="btn position-relative"&gt;
    Profile &lt;x-tabler::badge color="red" dot class="badge-notification" /&gt;
&lt;/button&gt;

&lt;!-- Blinking badge --&gt;
&lt;button class="btn position-relative"&gt;
    Settings &lt;x-tabler::badge color="red" dot class="badge-notification badge-blink" /&gt;
&lt;/button&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Badge Groups/Lists --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Badge Lists & Tags</x-slot>
                    <x-slot:subtitle>Common patterns for displaying multiple badges</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        {{-- Tags/Categories --}}
                        <div>
                            <div class="text-secondary mb-2">Tags/Categories</div>
                            <div class="badges-list">
                                <x-tabler::badge color="blue" variant="light">Design</x-tabler::badge>
                                <x-tabler::badge color="green" variant="light">Development</x-tabler::badge>
                                <x-tabler::badge color="purple" variant="light">Marketing</x-tabler::badge>
                                <x-tabler::badge color="orange" variant="light">Sales</x-tabler::badge>
                                <x-tabler::badge color="pink" variant="light">Support</x-tabler::badge>
                                <x-tabler::badge color="teal" variant="light">Analytics</x-tabler::badge>
                            </div>
                        </div>

                        {{-- Status badges --}}
                        <div>
                            <div class="text-secondary mb-2">Status Indicators</div>
                            <div class="badges-list">
                                <x-tabler::badge icon="check" color="success">Active</x-tabler::badge>
                                <x-tabler::badge icon="clock" color="warning">Pending</x-tabler::badge>
                                <x-tabler::badge icon="x" color="danger">Inactive</x-tabler::badge>
                                <x-tabler::badge icon="ban" color="secondary">Blocked</x-tabler::badge>
                                <x-tabler::badge icon="loader" color="info">Processing</x-tabler::badge>
                            </div>
                        </div>

                        {{-- Skill tags --}}
                        <div>
                            <div class="text-secondary mb-2">Skill Tags</div>
                            <div class="badges-list">
                                <x-tabler::badge href="#" variant="outline" color="blue">PHP</x-tabler::badge>
                                <x-tabler::badge href="#" variant="outline" color="indigo">Laravel
                                </x-tabler::badge>
                                <x-tabler::badge href="#" variant="outline" color="purple">Vue.js
                                </x-tabler::badge>
                                <x-tabler::badge href="#" variant="outline" color="cyan">JavaScript
                                </x-tabler::badge>
                                <x-tabler::badge href="#" variant="outline" color="green">Docker
                                </x-tabler::badge>
                                <x-tabler::badge href="#" variant="outline" color="red">Redis</x-tabler::badge>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;!-- Badge list wrapper --&gt;
&lt;div class="badges-list"&gt;
    &lt;x-tabler::badge color="blue" variant="light"&gt;Design&lt;/x-tabler::badge&gt;
    &lt;x-tabler::badge color="green" variant="light"&gt;Development&lt;/x-tabler::badge&gt;
    &lt;x-tabler::badge color="purple" variant="light"&gt;Marketing&lt;/x-tabler::badge&gt;
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
                    <x-slot:subtitle>Complete list of available badge component props</x-slot>
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
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Badge color. Options: <code>primary</code>, <code>secondary</code>,
                                        <code>success</code>,
                                        <code>danger</code>, <code>warning</code>, <code>info</code>,
                                        <code>blue</code>, <code>purple</code>, etc.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>variant</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Badge style variant. Options: <code>light</code> (subtle/pastel),
                                        <code>outline</code>
                                        (border only)
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Badge size. Options: <code>sm</code>, <code>lg</code> (omit for
                                        default/medium)
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Leading icon name (without <code>tabler-</code> prefix)</td>
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
                                    <td>Icon-only badge with no text. Requires <code>icon</code> or
                                        <code>iconEnd</code> prop
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>href</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>URL to link to. When set, renders as <code>&lt;a&gt;</code> instead of
                                        <code>&lt;span&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>dot</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Minimal dot indicator (for notifications)</td>
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
                                <code>&lt;a&gt;</code> element.
                            </li>
                            <li>Icon-only badges automatically generate an <code>aria-label</code> if not
                                provided for accessibility.
                            </li>
                            <li>The <code>dot</code> indicator adds a <code>visually-hidden</code> span for
                                screen readers.
                            </li>
                            <li>Use <code>position-relative</code> on parent and <code>badge-notification</code>
                                class for positioned badges.
                            </li>
                            <li>Use <code>badge-pill</code> class for rounded pill shape (good for counters).
                            </li>
                            <li>Use <code>badge-blink</code> class for blinking animation (use sparingly for
                                important notifications).
                            </li>
                            <li>Colors can be any valid Tabler color: standard semantic colors or brand
                                colors.
                            </li>
                            <li>The <code>light</code> variant uses <code>bg-{color}-lt</code> classes for
                                subtle, pastel backgrounds.
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
                                    <td><code>badge-pill</code></td>
                                    <td>Rounded pill shape (good for counters and numbers)</td>
                                </tr>
                                <tr>
                                    <td><code>badge-blink</code></td>
                                    <td>Animated blinking effect to draw attention</td>
                                </tr>
                                <tr>
                                    <td><code>badge-notification</code></td>
                                    <td>Position badge in top-right corner (requires <code>position-relative</code>
                                        on parent)
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>badges-list</code></td>
                                    <td>Container for multiple badges with proper spacing</td>
                                </tr>
                                <tr>
                                    <td><code>ms-2</code>, <code>me-2</code></td>
                                    <td>Margin utilities for spacing inline badges</td>
                                </tr>
                                <tr>
                                    <td><code>text-bg-secondary</code></td>
                                    <td>Bootstrap text + background combo class</td>
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
                            <li><code>position-relative</code> - Required on parent element for
                                <code>badge-notification</code>
                                positioning
                            </li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
