{{--
    Alert Component Demo

    Comprehensive showcase of all alert variations, states, and features.
    Based on Tabler UI alert patterns with Laravel Blade components.

    Component: <x-tabler::alert>
    Location: abitbt/tablerui/stubs/resources/views/tabler/alert.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Alert Components" subtitle="Comprehensive showcase of all alert variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Alerts --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Alerts</x-slot:title>
                    <x-slot:subtitle>Four standard alert types</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert type="success" title="Success!">
                        Your changes have been saved successfully.
                    </x-tabler::alert>

                    <x-tabler::alert type="info" title="Information">
                        Here is something that you might like to know.
                    </x-tabler::alert>

                    <x-tabler::alert type="warning" title="Warning">
                        Please review your information before proceeding.
                    </x-tabler::alert>

                    <x-tabler::alert type="danger" title="Error">
                        An error occurred while processing your request.
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success" title="Success!"&gt;
    Your changes have been saved.
&lt;/x-tabler::alert&gt;
&lt;x-tabler::alert type="danger" title="Error"&gt;
    An error occurred.
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Alerts with Icons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Alerts with Icons</x-slot:title>
                    <x-slot:subtitle>Make alerts more recognizable</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert type="success" icon="check" title="Completed!">
                        Your account has been successfully created.
                    </x-tabler::alert>

                    <x-tabler::alert type="info" icon="info-circle" title="Did you know?">
                        You can customize this component easily.
                    </x-tabler::alert>

                    <x-tabler::alert type="warning" icon="alert-triangle" title="Caution">
                        This action cannot be undone.
                    </x-tabler::alert>

                    <x-tabler::alert type="danger" icon="alert-circle" title="Failed">
                        Your payment could not be processed.
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success" icon="check" title="Completed!"&gt;
    Your account has been created.
&lt;/x-tabler::alert&gt;
&lt;x-tabler::alert type="warning" icon="alert-triangle" title="Caution"&gt;
    This action cannot be undone.
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Dismissible Alerts --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Dismissible Alerts</x-slot:title>
                    <x-slot:subtitle>Alerts with close button</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert type="success" dismissible title="Success!">
                        Click the × to dismiss this alert.
                    </x-tabler::alert>

                    <x-tabler::alert type="info" icon="info-circle" dismissible title="Tip">
                        This is a dismissible alert with an icon.
                    </x-tabler::alert>

                    <x-tabler::alert type="warning" dismissible title="Warning">
                        Make sure to save your work before closing.
                    </x-tabler::alert>

                    <x-tabler::alert type="danger" icon="alert-circle" dismissible title="Error">
                        Failed to connect to the server.
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success" dismissible title="Success!"&gt;
    Click the × to dismiss.
&lt;/x-tabler::alert&gt;
&lt;x-tabler::alert type="info" icon="info-circle" dismissible title="Tip"&gt;
    Dismissible with icon.
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Important Alerts --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Important Alerts</x-slot:title>
                    <x-slot:subtitle>Eye-catching filled background style</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert type="success" important dismissible icon="check">
                        Payment processed successfully!
                    </x-tabler::alert>

                    <x-tabler::alert type="info" important dismissible icon="info-circle">
                        New features are available.
                    </x-tabler::alert>

                    <x-tabler::alert type="warning" important dismissible icon="alert-triangle">
                        Your trial expires in 3 days.
                    </x-tabler::alert>

                    <x-tabler::alert type="danger" important dismissible icon="alert-circle">
                        Critical security update required.
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success" important dismissible icon="check"&gt;
    Payment processed successfully!
&lt;/x-tabler::alert&gt;
&lt;x-tabler::alert type="danger" important dismissible icon="alert-circle"&gt;
    Critical security update required.
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Simple Alerts --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Simple Alerts</x-slot:title>
                    <x-slot:subtitle>Alerts without titles or icons</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert type="success">
                        Your settings have been saved.
                    </x-tabler::alert>

                    <x-tabler::alert type="info">
                        Check your email for verification link.
                    </x-tabler::alert>

                    <x-tabler::alert type="warning">
                        Your session will expire soon.
                    </x-tabler::alert>

                    <x-tabler::alert type="danger">
                        Invalid credentials provided.
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success"&gt;
    Your settings have been saved.
&lt;/x-tabler::alert&gt;
&lt;x-tabler::alert type="warning"&gt;
    Your session will expire soon.
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Alerts with Links --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Alerts with Links</x-slot:title>
                    <x-slot:subtitle>Include links for additional context</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert type="success" title="Success!">
                        Your profile has been updated. <a href="#" class="alert-link">View profile</a>
                    </x-tabler::alert>

                    <x-tabler::alert type="info" icon="info-circle" title="Documentation">
                        Learn more in our <a href="#" class="alert-link">documentation</a>.
                    </x-tabler::alert>

                    <x-tabler::alert type="warning" title="Warning">
                        Password is weak. <a href="#" class="alert-link">Change password</a>
                    </x-tabler::alert>

                    <x-tabler::alert type="danger" title="Error">
                        Payment failed. <a href="#" class="alert-link">Try again</a> or <a href="#"
                            class="alert-link">contact
                            support</a>.
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success" title="Success!"&gt;
    Profile updated. &lt;a href="#" class="alert-link"&gt;View profile&lt;/a&gt;
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Alerts with Action Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Alerts with Action Buttons</x-slot:title>
                    <x-slot:subtitle>Prompt users to take action</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert type="success" dismissible>
                        <x-slot:title>Update Available</x-slot:title>
                        A new version of the app is ready to install.
                        <x-slot:actions>
                            <x-tabler::button color="success" size="sm">Update Now</x-tabler::button>
                            <x-tabler::button size="sm">Later</x-tabler::button>
                        </x-slot:actions>
                    </x-tabler::alert>

                    <x-tabler::alert type="warning" dismissible>
                        <x-slot:title>Confirm Deletion</x-slot:title>
                        Are you sure you want to delete this item?
                        <x-slot:actions>
                            <x-tabler::button color="warning" size="sm">Delete</x-tabler::button>
                            <x-tabler::button size="sm">Cancel</x-tabler::button>
                        </x-slot:actions>
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success" dismissible&gt;
    &lt;x-slot:title&gt;Update Available&lt;/x-slot:title&gt;
    A new version is ready.
    &lt;x-slot:actions&gt;
        &lt;x-tabler::button color="success" size="sm"&gt;Update&lt;/x-tabler::button&gt;
        &lt;x-tabler::button size="sm"&gt;Later&lt;/x-tabler::button&gt;
    &lt;/x-slot:actions&gt;
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Custom Color Alerts --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Custom Color Alerts</x-slot:title>
                    <x-slot:subtitle>Use any Tabler color via CSS class</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::alert class="alert-primary" title="Primary Alert">
                        This uses the primary color theme.
                    </x-tabler::alert>

                    <x-tabler::alert class="alert-lime" icon="check" title="Lime Alert">
                        A custom lime-colored alert.
                    </x-tabler::alert>

                    <x-tabler::alert class="alert-cyan" icon="bell" title="Cyan Notification">
                        You have a new notification.
                    </x-tabler::alert>

                    <x-tabler::alert class="alert-facebook alert-important" dismissible icon="brand-facebook"
                        title="Facebook">
                        Connect your Facebook account.
                    </x-tabler::alert>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert class="alert-primary" title="Primary Alert"&gt;
    Primary color theme.
&lt;/x-tabler::alert&gt;
&lt;x-tabler::alert class="alert-lime" icon="check" title="Lime"&gt;
    Custom lime color.
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Rich Content Alerts --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Rich Content Alerts</x-slot:title>
                    <x-slot:subtitle>Alerts with formatted content (lists, paragraphs, etc.)</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="space-y">
                        <div>
                            <div class="text-secondary mb-2">Success with List</div>
                            <x-tabler::alert type="success" icon="check" dismissible>
                                <x-slot:title>Account Created Successfully!</x-slot:title>
                                <p class="mb-2">Welcome to our platform! Here's what you can do next:</p>
                                <ul class="mb-0">
                                    <li>Complete your profile</li>
                                    <li>Invite team members</li>
                                    <li>Explore our features</li>
                                </ul>
                            </x-tabler::alert>
                        </div>

                        <div>
                            <div class="text-secondary mb-2">Important Warning with Requirements</div>
                            <x-tabler::alert type="warning" icon="alert-triangle" important dismissible>
                                <x-slot:title>Password Requirements Not Met</x-slot:title>
                                <p class="mb-2">Your password must include:</p>
                                <ul class="mb-0">
                                    <li>At least 8 characters</li>
                                    <li>One uppercase letter</li>
                                    <li>One number or special character</li>
                                </ul>
                            </x-tabler::alert>
                        </div>

                        <div>
                            <div class="text-secondary mb-2">Info with Multiple Paragraphs</div>
                            <x-tabler::alert type="info" icon="info-circle">
                                <x-slot:title>System Maintenance Scheduled</x-slot:title>
                                <p class="mb-2">We will be performing scheduled maintenance on our servers this
                                    weekend.</p>
                                <p class="mb-2"><strong>Downtime:</strong> Saturday, 2:00 AM - 6:00 AM EST</p>
                                <p class="mb-0">During this time, some features may be unavailable. We apologize for any
                                    inconvenience.</p>
                            </x-tabler::alert>
                        </div>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::alert type="success" icon="check" dismissible&gt;
    &lt;x-slot:title&gt;Account Created Successfully!&lt;/x-slot:title&gt;
    &lt;p class="mb-2"&gt;Welcome! Here's what you can do next:&lt;/p&gt;
    &lt;ul class="mb-0"&gt;
        &lt;li&gt;Complete your profile&lt;/li&gt;
        &lt;li&gt;Invite team members&lt;/li&gt;
        &lt;li&gt;Explore our features&lt;/li&gt;
    &lt;/ul&gt;
&lt;/x-tabler::alert&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference Table --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot:title>
                    <x-slot:subtitle>Complete list of available alert component props</x-slot:subtitle>
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
                                    <td><code>'info'</code></td>
                                    <td>Alert type. Options: <code>success</code>, <code>info</code>, <code>warning</code>,
                                        <code>danger</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>title</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Alert title/heading text</td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Tabler icon name (without <code>tabler-</code> prefix). Example: <code>check</code>,
                                        <code>alert-triangle</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>dismissible</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show close button to dismiss the alert</td>
                                </tr>
                                <tr>
                                    <td><code>important</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use filled background style for more prominence (adds <code>alert-important</code>
                                        class)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Available Slots</h4>
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
                                        <td>Main alert content/message. Supports HTML, text, lists, and other markup.</td>
                                    </tr>
                                    <tr>
                                        <td><code>title</code></td>
                                        <td>Optional slot for custom title markup (alternative to <code>title</code> prop)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>actions</code></td>
                                        <td>Optional slot for action buttons. Buttons are wrapped in a <code>btn-list</code>
                                            container.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Icons use the <code>secondnetwork/blade-tabler-icons</code> package. Icon names should
                                be provided without the <code>tabler-</code> prefix.
                            </li>
                            <li>The <code>important</code> prop creates a filled background alert with white text. The
                                close button automatically uses <code>btn-close-white</code> for proper visibility.
                            </li>
                            <li>Dismissible alerts require Bootstrap 5's JavaScript for the close functionality. The
                                dismiss button uses <code>data-bs-dismiss="alert"</code>.
                            </li>
                            <li>When an <code>icon</code> is present, the alert uses <code>&lt;div
                                    class="alert-icon"&gt;</code>
                                wrapper for the icon.
                            </li>
                            <li>Titles use <code>&lt;h4 class="alert-heading"&gt;</code> and descriptions use <code>&lt;div
                                    class="alert-description"&gt;</code> for proper Tabler styling.
                            </li>
                            <li>Links within alerts should use the <code>alert-link</code> class for proper color
                                matching.
                            </li>
                            <li>All standard HTML attributes can be passed via the <code>$attributes</code> bag (e.g.,
                                <code>id</code>, <code>data-*</code>, <code>role</code>).
                            </li>
                            <li>The component automatically includes <code>role="alert"</code> for accessibility.</li>
                            <li>You can use custom colors by applying <code>class="alert-{color}"</code> for any Tabler
                                color: <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
                                <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
                                <code>lime</code>,
                                <code>green</code>, <code>teal</code>, <code>cyan</code>, <code>facebook</code>,
                                <code>twitter</code>,
                                <code>linkedin</code>, <code>google</code>, <code>youtube</code>, etc.
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
                                    <td><code>alert-{color}</code></td>
                                    <td>Any Tabler color: <code>primary</code>, <code>secondary</code>, <code>lime</code>,
                                        <code>cyan</code>, <code>facebook</code>, etc.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>alert-important</code></td>
                                    <td>Filled background style (also available via <code>important</code> prop)</td>
                                </tr>
                                <tr>
                                    <td><code>alert-dismissible</code></td>
                                    <td>Can be closed (also available via <code>dismissible</code> prop)</td>
                                </tr>
                                <tr>
                                    <td><code>alert-link</code></td>
                                    <td>Apply to <code>&lt;a&gt;</code> tags within alerts for proper link styling</td>
                                </tr>
                                <tr>
                                    <td><code>mb-3</code>, <code>mt-3</code></td>
                                    <td>Margin utilities for spacing between alerts</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Color Classes</h4>
                        <p class="text-secondary">
                            <strong>Available colors:</strong>
                            <code>primary</code>, <code>secondary</code>, <code>success</code>, <code>danger</code>,
                            <code>warning</code>, <code>info</code>, <code>light</code>, <code>dark</code>,
                            <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
                            <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
                            <code>lime</code>, <code>green</code>, <code>teal</code>, <code>cyan</code>,
                            <code>facebook</code>, <code>twitter</code>, <code>linkedin</code>, <code>google</code>,
                            <code>youtube</code>
                        </p>
                    </div>

                    <div class="mt-4">
                        <h4>Utility Classes</h4>
                        <ul class="text-secondary">
                            <li><code>mb-2</code>, <code>mb-3</code>, <code>mt-2</code>, <code>mt-3</code> - Margin
                                utilities for spacing
                            </li>
                            <li><code>d-flex</code>, <code>d-block</code>, <code>d-none</code> - Display utilities</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
