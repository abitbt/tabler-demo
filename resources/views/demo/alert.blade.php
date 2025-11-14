@extends('layouts.app')

@section('title', 'Alert Component Demo')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Alert Component</h2>
                    <div class="text-secondary mt-1">
                        Alert messages are used to inform users of the status of their action and help them solve any
                        problems that might have occurred.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                {{-- Basic Alerts --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Basic Alerts</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="success" class="mb-3">
                                Your account has been saved!
                            </x-tabler::alert>

                            <x-tabler::alert color="info" class="mb-3">
                                Did you know? Here is something interesting.
                            </x-tabler::alert>

                            <x-tabler::alert color="warning" class="mb-3">
                                Warning! Please review your information.
                            </x-tabler::alert>

                            <x-tabler::alert color="danger">
                                Error! Something went wrong.
                            </x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="success"&gt;
    Your account has been saved!
&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Dismissible Alerts --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dismissible Alerts</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="success" dismissible class="mb-3">
                                This alert can be dismissed!
                            </x-tabler::alert>

                            <x-tabler::alert color="info" dismissible class="mb-3">
                                Click the X to close this alert.
                            </x-tabler::alert>

                            <x-tabler::alert color="warning" dismissible class="mb-3">
                                You can dismiss warnings too.
                            </x-tabler::alert>

                            <x-tabler::alert color="danger" dismissible>
                                Even errors can be dismissed.
                            </x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="success" dismissible&gt;
    This alert can be dismissed!
&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Alerts with Title and Description --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Alerts with Title & Description</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="success" dismissible class="mb-3">
                                <x-slot:title>Success!</x-slot>
                                <x-slot:description>Your changes have been saved successfully.</x-slot>
                            </x-tabler::alert>

                            <x-tabler::alert color="danger" dismissible class="mb-3">
                                <x-slot:title>Password Requirements Not Met</x-slot>
                                <x-slot:description>
                                    Please ensure your password meets the following requirements:
                                </x-slot>
                            </x-tabler::alert>

                            <x-tabler::alert color="info" dismissible>
                                <x-slot:title>Pro Tip</x-slot>
                                <x-slot:description>
                                    You can use keyboard shortcuts to navigate faster through the application.
                                </x-slot>
                            </x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="success"&gt;
    &lt;x-slot:title&gt;Success!&lt;/x-slot&gt;
    &lt;x-slot:description&gt;
        Your changes have been saved.
    &lt;/x-slot&gt;
&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Important Alerts --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Important Alerts</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="success" important dismissible class="mb-3">
                                Operation completed successfully!
                            </x-tabler::alert>

                            <x-tabler::alert color="info" important dismissible class="mb-3">
                                This is important information you should know.
                            </x-tabler::alert>

                            <x-tabler::alert color="warning" important dismissible class="mb-3">
                                This is a critical warning!
                            </x-tabler::alert>

                            <x-tabler::alert color="danger" important dismissible>
                                This is a critical error that needs immediate attention!
                            </x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="danger" important dismissible&gt;
    Critical error message!
&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Alerts with Custom Icons --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Alerts with Custom Icons</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="success" icon="rocket" class="mb-3">
                                Your application has been deployed!
                            </x-tabler::alert>

                            <x-tabler::alert color="info" icon="bell" class="mb-3">
                                You have 3 new notifications.
                            </x-tabler::alert>

                            <x-tabler::alert color="warning" icon="clock" class="mb-3">
                                Your session will expire in 5 minutes.
                            </x-tabler::alert>

                            <x-tabler::alert color="danger" icon="shield-x">
                                Security alert: Unauthorized access detected.
                            </x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="success" icon="rocket"&gt;
    Your application has been deployed!
&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Alerts without Icons --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Alerts without Icons</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="success" :icon="false" class="mb-3">
                                Simple success message without an icon.
                            </x-tabler::alert>

                            <x-tabler::alert color="info" :icon="false" class="mb-3">
                                Information without visual indicator.
                            </x-tabler::alert>

                            <x-tabler::alert color="warning" :icon="false" class="mb-3">
                                Warning message in plain text.
                            </x-tabler::alert>

                            <x-tabler::alert color="danger" :icon="false">
                                Error without icon decoration.
                            </x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="success" :icon="false"&gt;
    Simple message without icon
&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Complex Alert Content --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Complex Alert Content</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="danger" dismissible class="mb-3">
                                <h4 class="alert-heading">Validation Failed</h4>
                                <div class="alert-description">
                                    The following errors were found:
                                    <ul class="alert-list mt-2">
                                        <li>Email address is required</li>
                                        <li>Password must be at least 8 characters</li>
                                        <li>Password must contain a special character</li>
                                    </ul>
                                </div>
                            </x-tabler::alert>

                            <x-tabler::alert color="info" dismissible>
                                <h4 class="alert-heading">New Features Available</h4>
                                <div class="alert-description">
                                    <p class="mb-2">We've added several new features to improve your experience:</p>
                                    <ul class="alert-list">
                                        <li>Dark mode support</li>
                                        <li>Keyboard shortcuts</li>
                                        <li>Improved performance</li>
                                    </ul>
                                    <a href="#" class="alert-link">Learn more →</a>
                                </div>
                            </x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="danger"&gt;
    &lt;h4 class="alert-heading"&gt;Title&lt;/h4&gt;
    &lt;div class="alert-description"&gt;
        &lt;ul class="alert-list"&gt;
            &lt;li&gt;Item 1&lt;/li&gt;
            &lt;li&gt;Item 2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- All Color Variants --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Color Variants</h3>
                        </div>
                        <div class="card-body">
                            <x-tabler::alert color="primary" class="mb-2">Primary alert</x-tabler::alert>
                            <x-tabler::alert color="secondary" class="mb-2">Secondary alert</x-tabler::alert>
                            <x-tabler::alert color="success" class="mb-2">Success alert</x-tabler::alert>
                            <x-tabler::alert color="info" class="mb-2">Info alert</x-tabler::alert>
                            <x-tabler::alert color="warning" class="mb-2">Warning alert</x-tabler::alert>
                            <x-tabler::alert color="danger" class="mb-2">Danger alert</x-tabler::alert>
                            <x-tabler::alert color="light" class="mb-2">Light alert</x-tabler::alert>
                            <x-tabler::alert color="dark">Dark alert</x-tabler::alert>

                            <div class="mt-3">
                                <pre class="language-blade"><code>&lt;x-tabler::alert color="primary"&gt;...&lt;/x-tabler::alert&gt;
&lt;x-tabler::alert color="secondary"&gt;...&lt;/x-tabler::alert&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Livewire Integration Example --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Livewire Integration</h3>
                            <div class="card-subtitle">
                                Alert components are fully compatible with Livewire
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Example Usage</h4>
                                    <x-tabler::alert wire:poll.5s="checkStatus" color="info" class="mb-3">
                                        This alert polls for updates every 5 seconds
                                    </x-tabler::alert>

                                    <pre class="language-blade"><code>&lt;x-tabler::alert
    wire:poll.5s="checkStatus"
    color="info"
&gt;
    Polling for updates...
&lt;/x-tabler::alert&gt;</code></pre>
                                </div>
                                <div class="col-md-6">
                                    <h4>Wire Attributes</h4>
                                    <p class="text-secondary">All wire:* attributes are automatically passed through:</p>
                                    <ul>
                                        <li><code>wire:click</code> - Handle click events</li>
                                        <li><code>wire:model</code> - Two-way data binding</li>
                                        <li><code>wire:loading</code> - Show loading states</li>
                                        <li><code>wire:poll</code> - Poll for updates</li>
                                        <li><code>wire:target</code> - Target specific actions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Available CSS Classes --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Available CSS Classes</h3>
                            <div class="card-subtitle">
                                Use these classes via the <code>class=""</code> attribute for additional styling
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-bordered table">
                                    <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th>Description</th>
                                            <th>Example</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>alert-minor</code></td>
                                            <td>Transparent background with border only</td>
                                            <td>
                                                <x-tabler::alert color="info" class="alert-minor">
                                                    Minor alert style
                                                </x-tabler::alert>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>mb-{n}</code></td>
                                            <td>Add margin bottom (Bootstrap spacing)</td>
                                            <td><code>class="mb-3"</code></td>
                                        </tr>
                                        <tr>
                                            <td><code>mt-{n}</code></td>
                                            <td>Add margin top (Bootstrap spacing)</td>
                                            <td><code>class="mt-4"</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
