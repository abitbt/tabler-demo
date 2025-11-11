{{--
    Offcanvas Component Demo

    Comprehensive showcase of all offcanvas variations, states, and features.
    Based on Tabler UI offcanvas patterns with Laravel Blade components.

    Component: <x-tabler::offcanvas>
    Location: tabler-blade/stubs/resources/views/tabler/offcanvas.blade.php
--}}

@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Offcanvas</h2>
                    <div class="text-secondary mt-1">Sidebar panels that slide in from viewport edges</div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                {{-- Basic Placements --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Basic Placements</x-slot>
                            <x-slot:subtitle>Offcanvas from all four directions</x-slot>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="btn-list">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasStart">
                                    Start (Left)
                                </button>
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd">
                                    End (Right)
                                </button>
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop">
                                    Top
                                </button>
                                <button class="btn btn-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasBottom">
                                    Bottom
                                </button>
                            </div>

                            <div class="mt-3">
                                <pre class="rounded p-3"><code>&lt;x-tabler::offcanvas id="myOffcanvas" title="Menu"&gt;
    Content here
&lt;/x-tabler::offcanvas&gt;

&lt;!-- Trigger --&gt;
&lt;button data-bs-toggle="offcanvas" data-bs-target="#myOffcanvas"&gt;
    Open
&lt;/button&gt;</code></pre>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Backdrop Options --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Backdrop Options</x-slot>
                            <x-slot:subtitle>Control overlay behavior</x-slot>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="btn-list">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBackdrop">
                                    With Backdrop (Default)
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasNoBackdrop">
                                    No Backdrop
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScrollable">
                                    Allow Body Scroll
                                </button>
                            </div>

                            <div class="mt-3">
                                <pre class="rounded p-3"><code>&lt;x-tabler::offcanvas id="noBackdrop" :backdrop="false"&gt;
    No backdrop overlay
&lt;/x-tabler::offcanvas&gt;

&lt;x-tabler::offcanvas id="scrollable" :scroll="true"&gt;
    Allow body scrolling
&lt;/x-tabler::offcanvas&gt;</code></pre>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Size Variations --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Size Variations</x-slot>
                            <x-slot:subtitle>Different width options via CSS classes</x-slot>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="btn-list">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSmall">
                                    Small (320px)
                                </button>
                                <button class="btn btn-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasMedium">
                                    Medium (400px)
                                </button>
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLarge">
                                    Large (500px)
                                </button>
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasXL">
                                    Extra Large (800px)
                                </button>
                            </div>

                            <div class="mt-3">
                                <pre class="rounded p-3"><code>&lt;x-tabler::offcanvas id="large" class="offcanvas-lg"&gt;
    Large offcanvas panel
&lt;/x-tabler::offcanvas&gt;</code></pre>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Custom Header and Footer --}}
                <div class="col-md-6">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Custom Header & Footer</x-slot>
                            <x-slot:subtitle>Using slots for customization</x-slot>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCustom">
                                Open Custom Offcanvas
                            </button>

                            <div class="mt-3">
                                <pre class="rounded p-3"><code>&lt;x-tabler::offcanvas id="custom"&gt;
    &lt;x-slot:header&gt;
        &lt;div class="offcanvas-header bg-primary text-white"&gt;
            &lt;h5&gt;Custom Header&lt;/h5&gt;
            &lt;button class="btn-close btn-close-white"
                    data-bs-dismiss="offcanvas"&gt;&lt;/button&gt;
        &lt;/div&gt;
    &lt;/x-slot:header&gt;

    Content here

    &lt;x-slot:footer&gt;
        &lt;div class="border-top p-3"&gt;
            &lt;button class="btn btn-primary"&gt;Save&lt;/button&gt;
        &lt;/div&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-tabler::offcanvas&gt;</code></pre>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                {{-- Real-World Examples --}}
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.header>
                            <x-slot:title>Real-World Examples</x-slot>
                            <x-slot:subtitle>Common use cases and patterns</x-slot>
                        </x-tabler::cards.header>
                        <x-tabler::cards.body>
                            <div class="btn-list">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasNavigation">
                                    <x-tabler-menu class="icon" />
                                    Mobile Navigation
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasSettings">
                                    <x-tabler-settings class="icon" />
                                    Settings Panel
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasCart">
                                    <x-tabler-shopping-cart class="icon" />
                                    Shopping Cart
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasNotifications">
                                    <x-tabler-bell class="icon" />
                                    Notifications
                                </button>
                                <button class="btn btn-outline-primary" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasCookies">
                                    <x-tabler-cookie class="icon" />
                                    Cookie Banner
                                </button>
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
                                            <td><code>id</code></td>
                                            <td><span class="badge bg-azure-lt">string</span></td>
                                            <td><em>required</em></td>
                                            <td>Unique ID for the offcanvas. Required for Bootstrap toggle functionality
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>title</code></td>
                                            <td><span class="badge bg-azure-lt">string|null</span></td>
                                            <td><code>null</code></td>
                                            <td>Offcanvas title text displayed in header</td>
                                        </tr>
                                        <tr>
                                            <td><code>placement</code></td>
                                            <td><span class="badge bg-azure-lt">string</span></td>
                                            <td><code>'start'</code></td>
                                            <td>Position of offcanvas. Options: <code>start</code>, <code>end</code>,
                                                <code>top</code>, <code>bottom</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code>backdrop</code></td>
                                            <td><span class="badge bg-purple-lt">bool</span></td>
                                            <td><code>true</code></td>
                                            <td>Show backdrop overlay. Set to <code>false</code> to disable</td>
                                        </tr>
                                        <tr>
                                            <td><code>scroll</code></td>
                                            <td><span class="badge bg-purple-lt">bool</span></td>
                                            <td><code>false</code></td>
                                            <td>Allow body scrolling when offcanvas is open</td>
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
                                                <td>Main offcanvas content (placed in offcanvas-body)</td>
                                            </tr>
                                            <tr>
                                                <td><code>title</code></td>
                                                <td>Custom title markup (alternative to title prop)</td>
                                            </tr>
                                            <tr>
                                                <td><code>header</code></td>
                                                <td>Custom header content (replaces entire default header)</td>
                                            </tr>
                                            <tr>
                                                <td><code>footer</code></td>
                                                <td>Optional footer content (shown below body)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h4>Usage Notes</h4>
                                <ul class="text-secondary">
                                    <li>Requires Bootstrap JavaScript for toggle functionality</li>
                                    <li>Use <code>data-bs-toggle="offcanvas"</code> and <code>data-bs-target="#id"</code>
                                        on trigger elements</li>
                                    <li>The <code>id</code> prop is required and must be unique on the page</li>
                                    <li>When <code>backdrop</code> is <code>false</code>, clicking outside won't close the
                                        offcanvas</li>
                                    <li>When <code>scroll</code> is <code>true</code>, the page body remains scrollable</li>
                                    <li>Use Bootstrap data attributes for additional control:
                                        <code>data-bs-backdrop="static"</code>, etc.</li>
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
                                            <td><code>offcanvas-sm</code></td>
                                            <td>Small offcanvas width (320px) - for start/end placements</td>
                                        </tr>
                                        <tr>
                                            <td><code>offcanvas-md</code></td>
                                            <td>Medium offcanvas width (400px) - for start/end placements</td>
                                        </tr>
                                        <tr>
                                            <td><code>offcanvas-lg</code></td>
                                            <td>Large offcanvas width (500px) - for start/end placements</td>
                                        </tr>
                                        <tr>
                                            <td><code>offcanvas-xl</code></td>
                                            <td>Extra large offcanvas width (800px) - for start/end placements</td>
                                        </tr>
                                        <tr>
                                            <td><code>h-auto</code></td>
                                            <td>Auto height based on content - useful for top/bottom placements</td>
                                        </tr>
                                        <tr>
                                            <td><code>h-25</code>, <code>h-50</code>, <code>h-75</code></td>
                                            <td>Height percentages - for top/bottom placements</td>
                                        </tr>
                                        <tr>
                                            <td><code>vh-100</code></td>
                                            <td>Full viewport height</td>
                                        </tr>
                                        <tr>
                                            <td><code>w-100</code>, <code>w-75</code>, <code>w-50</code></td>
                                            <td>Custom width percentages - for start/end placements</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4">
                                <h4>Background Colors</h4>
                                <p class="text-secondary">Apply background colors to the offcanvas or header:</p>
                                <ul class="text-secondary">
                                    <li><code>bg-{color}</code> - Solid background colors</li>
                                    <li><code>bg-{color}-lt</code> - Light background variants</li>
                                    <li><code>text-{color}</code> - Text colors (use with dark backgrounds)</li>
                                </ul>
                                <p class="text-secondary">
                                    <strong>Available colors:</strong>
                                    <code>primary</code>, <code>secondary</code>, <code>success</code>, <code>danger</code>,
                                    <code>warning</code>, <code>info</code>, <code>light</code>, <code>dark</code>,
                                    <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
                                    <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
                                    <code>lime</code>, <code>green</code>, <code>teal</code>, <code>cyan</code>
                                </p>
                            </div>

                            <div class="mt-4">
                                <h4>Bootstrap Data Attributes</h4>
                                <p class="text-secondary">Control offcanvas behavior via data attributes on trigger
                                    elements:</p>
                                <ul class="text-secondary">
                                    <li><code>data-bs-toggle="offcanvas"</code> - Required to enable toggle functionality
                                    </li>
                                    <li><code>data-bs-target="#offcanvasId"</code> - Required to specify which offcanvas to
                                    toggle</li>
                                    <li><code>data-bs-backdrop="true|false|static"</code> - Override backdrop behavior</li>
                                    <li><code>data-bs-scroll="true|false"</code> - Override scroll behavior</li>
                                    <li><code>data-bs-dismiss="offcanvas"</code> - Close button functionality</li>
                                </ul>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

            </div>
        </div>
    </div>

    {{-- Offcanvas Instances --}}

    {{-- Basic Placements --}}
    <x-tabler::offcanvas id="offcanvasStart" title="Start Offcanvas" placement="start">
        <p>This offcanvas slides in from the left (start) edge of the viewport.</p>
        <p>Click outside or press ESC to close.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasEnd" title="End Offcanvas" placement="end">
        <p>This offcanvas slides in from the right (end) edge of the viewport.</p>
        <p>Perfect for settings panels or sidebars.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasTop" title="Top Offcanvas" placement="top">
        <p>This offcanvas slides in from the top of the viewport.</p>
        <p>Great for notification banners or announcements.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasBottom" title="Bottom Offcanvas" placement="bottom" class="h-auto">
        <p>This offcanvas slides in from the bottom of the viewport.</p>
        <p>Commonly used for cookie consent banners or quick actions.</p>
    </x-tabler::offcanvas>

    {{-- Backdrop Options --}}
    <x-tabler::offcanvas id="offcanvasWithBackdrop" title="With Backdrop">
        <p>This offcanvas has a backdrop overlay (default behavior).</p>
        <p>Clicking on the backdrop will close the offcanvas.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasNoBackdrop" title="No Backdrop" :backdrop="false">
        <p>This offcanvas has no backdrop overlay.</p>
        <p>You can interact with the page behind it.</p>
        <p>Click the close button or press ESC to dismiss.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasScrollable" title="Scrollable Body" :scroll="true">
        <p>This offcanvas allows body scrolling.</p>
        <p>The page content behind can be scrolled while the offcanvas is open.</p>
        <div style="height: 1000px;">
            <p>Scroll the page body to see this in action.</p>
        </div>
    </x-tabler::offcanvas>

    {{-- Size Variations --}}
    <x-tabler::offcanvas id="offcanvasSmall" title="Small Offcanvas" placement="end" class="offcanvas-sm">
        <p>This is a small offcanvas (320px wide).</p>
        <p>Perfect for compact sidebars or quick actions.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasMedium" title="Medium Offcanvas" placement="end" class="offcanvas-md">
        <p>This is a medium offcanvas (400px wide).</p>
        <p>Good balance between content and screen space.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasLarge" title="Large Offcanvas" placement="end" class="offcanvas-lg">
        <p>This is a large offcanvas (500px wide).</p>
        <p>Provides more room for complex content.</p>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasXL" title="Extra Large Offcanvas" placement="end" class="offcanvas-xl">
        <p>This is an extra large offcanvas (800px wide).</p>
        <p>Suitable for detailed forms or extensive content.</p>
    </x-tabler::offcanvas>

    {{-- Custom Header and Footer --}}
    <x-tabler::offcanvas id="offcanvasCustom">
        <x-slot:header>
            <div class="offcanvas-header bg-primary text-white">
                <h5 class="offcanvas-title">Custom Styled Header</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
        </x-slot:header>

        <p>This offcanvas has a custom header with primary background.</p>
        <p>You can style the header however you like using slots.</p>

        <x-slot:footer>
            <div class="offcanvas-footer border-top d-flex gap-2 p-3">
                <button class="btn btn-primary">Save Changes</button>
                <button class="btn" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
        </x-slot:footer>
    </x-tabler::offcanvas>

    {{-- Real-World Examples --}}
    <x-tabler::offcanvas id="offcanvasNavigation" title="Navigation" placement="start">
        <nav class="nav flex-column">
            <a class="nav-link active" href="#"><x-tabler-home class="icon me-2" />Dashboard</a>
            <a class="nav-link" href="#"><x-tabler-users class="icon me-2" />Users</a>
            <a class="nav-link" href="#"><x-tabler-settings class="icon me-2" />Settings</a>
            <a class="nav-link" href="#"><x-tabler-help class="icon me-2" />Help</a>
        </nav>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasSettings" title="Settings" placement="end" class="offcanvas-lg">
        <h3>Account Settings</h3>
        <hr>
        <div class="mb-3">
            <label class="form-label">Email Notifications</label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" checked>
                <label class="form-check-label">Receive email updates</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Theme Preference</label>
            <select class="form-select">
                <option>Light</option>
                <option>Dark</option>
                <option>Auto</option>
            </select>
        </div>

        <x-slot:footer>
            <div class="border-top d-flex gap-2 p-3">
                <button class="btn btn-primary">Save Settings</button>
                <button class="btn" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
        </x-slot:footer>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasCart" title="Shopping Cart" placement="end" class="offcanvas-lg">
        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <div class="avatar me-3" style="background-color: #e9ecef;">
                <x-tabler-package class="icon" />
            </div>
            <div class="flex-fill">
                <h5 class="mb-0">Product Name</h5>
                <p class="text-secondary mb-0">$29.99</p>
            </div>
            <button class="btn btn-sm btn-ghost-danger"><x-tabler-trash class="icon" /></button>
        </div>
        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <div class="avatar me-3" style="background-color: #e9ecef;">
                <x-tabler-package class="icon" />
            </div>
            <div class="flex-fill">
                <h5 class="mb-0">Another Product</h5>
                <p class="text-secondary mb-0">$49.99</p>
            </div>
            <button class="btn btn-sm btn-ghost-danger"><x-tabler-trash class="icon" /></button>
        </div>

        <x-slot:footer>
            <div class="border-top p-3">
                <div class="d-flex justify-content-between mb-3">
                    <strong>Total:</strong>
                    <strong>$79.98</strong>
                </div>
                <button class="btn btn-primary w-100">Proceed to Checkout</button>
            </div>
        </x-slot:footer>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasNotifications" title="Notifications" placement="end">
        <div class="list-group list-group-flush">
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="status-dot status-dot-animated bg-green d-block"></span>
                    </div>
                    <div class="col">
                        <strong>New order received</strong>
                        <p class="text-secondary mb-0">Order #1234 from John Doe</p>
                        <small class="text-secondary">2 minutes ago</small>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="status-dot status-dot-animated bg-blue d-block"></span>
                    </div>
                    <div class="col">
                        <strong>System update available</strong>
                        <p class="text-secondary mb-0">Version 2.0 is ready to install</p>
                        <small class="text-secondary">1 hour ago</small>
                    </div>
                </div>
            </div>
        </div>
    </x-tabler::offcanvas>

    <x-tabler::offcanvas id="offcanvasCookies" placement="bottom" class="h-auto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <strong>We value your privacy</strong> 🍪
                    <p class="text-secondary mb-0">
                        We use cookies to enhance your browsing experience and analyze our traffic.
                        <a href="#">Learn more</a>
                    </p>
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        <button class="btn" data-bs-dismiss="offcanvas">Essential Only</button>
                        <button class="btn btn-primary" data-bs-dismiss="offcanvas">Accept All</button>
                    </div>
                </div>
            </div>
        </div>
    </x-tabler::offcanvas>
@endsection
