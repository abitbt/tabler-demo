{{--
    Toasts Demo

    Comprehensive showcase of all toast variations, states, and features.
    Based on Tabler UI toast patterns with Laravel Blade components.

    Component: <x-tabler::toast>
    Location: abitbt/tablerui/stubs/resources/views/tabler/toast.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Toast Components" subtitle="Comprehensive showcase of all toast variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Toast --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Toast</x-slot:title>
                    <x-slot:subtitle>Simple toast with default settings</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::toast :show="true" title="Mallory Hulme" subtitle="11 mins ago"
                        avatar="/static/avatars/002m.jpg">
                        Hello, world! This is a toast message.
                    </x-tabler::toast>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::toast
    :show="true"
    title="Mallory Hulme"
    subtitle="11 mins ago"
    avatar="/static/avatars/002m.jpg"
&gt;
    Hello, world! This is a toast message.
&lt;/x-tabler::toast&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Toast without Avatar --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Toast without Avatar</x-slot:title>
                    <x-slot:subtitle>Title and subtitle only</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::toast :show="true" title="System Notification" subtitle="Just now">
                        Your changes have been saved successfully.
                    </x-tabler::toast>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::toast
    :show="true"
    title="System Notification"
    subtitle="Just now"
&gt;
    Your changes have been saved successfully.
&lt;/x-tabler::toast&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Toast without Header --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Toast without Header</x-slot:title>
                    <x-slot:subtitle>Message only, no header section</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::toast :show="true" :hideHeader="true">
                        This is a simple notification without a header.
                    </x-tabler::toast>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::toast :show="true" :hideHeader="true"&gt;
    This is a simple notification without a header.
&lt;/x-tabler::toast&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Non-dismissible Toast --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Non-dismissible Toast</x-slot:title>
                    <x-slot:subtitle>No close button</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::toast :show="true" :dismissible="false" title="Important Notice" subtitle="2 mins ago">
                        This notification cannot be dismissed by the user.
                    </x-tabler::toast>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::toast
    :show="true"
    :dismissible="false"
    title="Important Notice"
    subtitle="2 mins ago"
&gt;
    This notification cannot be dismissed.
&lt;/x-tabler::toast&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Toast with Complex Content --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Toast with Complex Content</x-slot:title>
                    <x-slot:subtitle>Includes custom HTML, buttons, and styling</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::toast :show="true" title="Cookie Notice" subtitle="Just now">
                        🍪&nbsp;Our site uses cookies. By continuing to use our site, you agree to our Cookie Policy.
                        <div class="border-top mt-2 pt-2">
                            <a href="#" class="btn btn-primary btn-sm">I understand</a>
                        </div>
                    </x-tabler::toast>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::toast
    :show="true"
    title="Cookie Notice"
    subtitle="Just now"
&gt;
    🍪&amp;nbsp;Our site uses cookies.
    &lt;div class="border-top mt-2 pt-2"&gt;
        &lt;a href="#" class="btn btn-primary btn-sm"&gt;I understand&lt;/a&gt;
    &lt;/div&gt;
&lt;/x-tabler::toast&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Interactive Toasts with JavaScript --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Interactive Toasts with JavaScript</x-slot:title>
                    <x-slot:subtitle>Click buttons to trigger toast notifications</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button color="primary" data-bs-toggle="toast" data-bs-target="#toast-success">
                            Show Success Toast
                        </x-tabler::button>
                        <x-tabler::button color="info" data-bs-toggle="toast" data-bs-target="#toast-info">
                            Show Info Toast
                        </x-tabler::button>
                        <x-tabler::button color="warning" data-bs-toggle="toast" data-bs-target="#toast-warning">
                            Show Warning Toast
                        </x-tabler::button>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;!-- Trigger buttons --&gt;
&lt;x-tabler::button color="primary" data-bs-toggle="toast" data-bs-target="#toast-success"&gt;
    Show Success Toast
&lt;/x-tabler::button&gt;

&lt;!-- Toast container (fixed position) --&gt;
&lt;div class="toast-container position-fixed bottom-0 end-0 p-3"&gt;
    &lt;x-tabler::toast id="toast-success" title="Success" subtitle="now"&gt;
        Operation completed successfully!
    &lt;/x-tabler::toast&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Auto-hide Toast --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Auto-hide Toast</x-slot:title>
                    <x-slot:subtitle>Automatically disappears after delay</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::button color="secondary" data-bs-toggle="toast" data-bs-target="#toast-autohide">
                        Show Auto-hide Toast (3s)
                    </x-tabler::button>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::toast
    id="toast-autohide"
    :autohide="true"
    :delay="3000"
    title="Auto-hide"
    subtitle="now"
&gt;
    This toast will hide after 3 seconds.
&lt;/x-tabler::toast&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Stacked Toasts --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Stacked Toasts</x-slot:title>
                    <x-slot:subtitle>Multiple toasts in container</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::button color="primary" data-bs-toggle="toast" data-bs-target="#toast-stack-1">
                        Show First Toast
                    </x-tabler::button>
                    <x-tabler::button color="secondary" data-bs-toggle="toast" data-bs-target="#toast-stack-2"
                        class="ms-2">
                        Show Second Toast
                    </x-tabler::button>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;div class="toast-container position-fixed bottom-0 end-0 p-3"&gt;
    &lt;x-tabler::toast id="toast-1" title="First" subtitle="now"&gt;
        First notification
    &lt;/x-tabler::toast&gt;
    &lt;x-tabler::toast id="toast-2" title="Second" subtitle="now"&gt;
        Second notification
    &lt;/x-tabler::toast&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot:title>
                    <x-slot:subtitle>Complete list of available component props</x-slot:subtitle>
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
                                    <td><code>id</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>HTML ID attribute for the toast element. Required for JavaScript triggers.</td>
                                </tr>
                                <tr>
                                    <td><code>show</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Whether to show the toast immediately. Adds 'show' class to make toast visible.</td>
                                </tr>
                                <tr>
                                    <td><code>autohide</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Whether to automatically hide the toast after the specified delay.</td>
                                </tr>
                                <tr>
                                    <td><code>delay</code></td>
                                    <td><span class="badge bg-green-lt">int</span></td>
                                    <td><code>5000</code></td>
                                    <td>Milliseconds before auto-hiding the toast (only applies if autohide is true).</td>
                                </tr>
                                <tr>
                                    <td><code>hideHeader</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Hide the toast header section entirely. Only shows the body content.</td>
                                </tr>
                                <tr>
                                    <td><code>avatar</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>URL to avatar image. Renders as small circular avatar in header.</td>
                                </tr>
                                <tr>
                                    <td><code>title</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Toast title or author name displayed in header.</td>
                                </tr>
                                <tr>
                                    <td><code>subtitle</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Timestamp or additional info displayed as small text in header.</td>
                                </tr>
                                <tr>
                                    <td><code>dismissible</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>true</code></td>
                                    <td>Show close button in header. Set to false for non-dismissible toasts.</td>
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
                                        <td>Main toast message content. Supports plain text and HTML.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Toasts use Bootstrap 5's toast component with proper ARIA attributes for accessibility
                            </li>
                            <li>Toast container should be positioned (typically <code>position-fixed bottom-0 end-0
                                    p-3</code>)
                            </li>
                            <li>Use <code>data-bs-toggle="toast"</code> and <code>data-bs-target="#toast-id"</code> on
                                buttons to trigger toasts
                            </li>
                            <li>The <code>show</code> prop only controls initial visibility; JavaScript is needed for
                                dynamic showing/hiding
                            </li>
                            <li>Multiple toasts in the same container will automatically stack vertically</li>
                            <li>Header is shown by default unless <code>hideHeader</code> is true</li>
                            <li>Avatar, title, and subtitle are all optional and can be used independently</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Available CSS Classes --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Available CSS Classes</x-slot:title>
                    <x-slot:subtitle>Additional styling options via class attribute</x-slot:subtitle>
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
                                    <td><code>toast-container</code></td>
                                    <td>Container for positioning toasts. Use with position utilities.</td>
                                </tr>
                                <tr>
                                    <td><code>position-fixed</code></td>
                                    <td>Fix toast container position on viewport</td>
                                </tr>
                                <tr>
                                    <td><code>bottom-0</code>, <code>top-0</code></td>
                                    <td>Position container at bottom or top of viewport</td>
                                </tr>
                                <tr>
                                    <td><code>end-0</code>, <code>start-0</code></td>
                                    <td>Position container at right or left edge</td>
                                </tr>
                                <tr>
                                    <td><code>p-3</code>, <code>p-2</code></td>
                                    <td>Add padding around toast container</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Common Positioning Patterns</h4>
                        <p class="text-secondary">Toast containers are typically positioned in one of these
                            locations:</p>
                        <ul class="text-secondary">
                            <li><code>position-fixed top-0 end-0 p-3</code> - Top right corner</li>
                            <li><code>position-fixed top-0 start-0 p-3</code> - Top left corner</li>
                            <li><code>position-fixed bottom-0 end-0 p-3</code> - Bottom right corner (most common)</li>
                            <li><code>position-fixed bottom-0 start-0 p-3</code> - Bottom left corner</li>
                            <li><code>position-fixed top-50 start-50 translate-middle p-3</code> - Center of viewport
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Utility Classes</h4>
                        <ul class="text-secondary">
                            <li><code>mb-2</code>, <code>mt-2</code> - Margin spacing between stacked toasts</li>
                            <li><code>w-100</code> - Full width toast (not recommended for fixed positioning)</li>
                            <li><code>shadow-sm</code>, <code>shadow</code>, <code>shadow-lg</code> - Add shadow effects
                            </li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>

    {{-- Toast Container for Interactive Examples --}}
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <x-tabler::toast id="toast-success" title="Success" subtitle="now">
            <span class="text-success">✓</span> Operation completed successfully!
        </x-tabler::toast>

        <x-tabler::toast id="toast-info" title="Information" subtitle="now">
            <span class="text-info">ℹ</span> Here's some useful information for you.
        </x-tabler::toast>

        <x-tabler::toast id="toast-warning" title="Warning" subtitle="now">
            <span class="text-warning">⚠</span> Please review this important notice.
        </x-tabler::toast>

        <x-tabler::toast id="toast-autohide" :autohide="true" :delay="3000" title="Auto-hide" subtitle="now">
            This toast will automatically hide after 3 seconds.
        </x-tabler::toast>

        <x-tabler::toast id="toast-stack-1" title="First Notification" subtitle="2 mins ago">
            This is the first stacked notification.
        </x-tabler::toast>

        <x-tabler::toast id="toast-stack-2" title="Second Notification" subtitle="1 min ago">
            This is the second stacked notification.
        </x-tabler::toast>
    </div>
@endsection
