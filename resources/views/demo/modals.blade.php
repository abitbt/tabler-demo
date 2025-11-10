{{--
    Modal Component Demo

    Comprehensive showcase of all modal variations and patterns.
    Based on Tabler UI modal patterns with Laravel Blade components.

    Components: <x-tabler::modals.*>
    Location: abitbt/tablerui/stubs/resources/views/tabler/modals/
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Modal Components" subtitle="Comprehensive showcase of all modal variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Modal --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Modal</x-slot>
                    <x-slot:subtitle>Standard modal with header, body, and footer</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::button color="primary" data-bs-toggle="modal" data-bs-target="#modal-simple">
                        Launch Modal
                    </x-tabler::button>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::modals.modal id="modal-simple"&gt;
    &lt;x-tabler::modals.header title="Modal Title" /&gt;
    &lt;x-tabler::modals.body&gt;
        Modal content goes here.
    &lt;/x-tabler::modals.body&gt;
    &lt;x-tabler::modals.footer&gt;
        &lt;x-tabler::button data-bs-dismiss="modal"&gt;Close&lt;/x-tabler::button&gt;
        &lt;x-tabler::button color="primary"&gt;Save&lt;/x-tabler::button&gt;
    &lt;/x-tabler::modals.footer&gt;
&lt;/x-tabler::modals.modal&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Modal Sizes --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Modal Sizes</x-slot>
                    <x-slot:subtitle>Small, default, large, and extra large</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button size="sm" data-bs-toggle="modal" data-bs-target="#modal-small">
                            Small Modal
                        </x-tabler::button>
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#modal-default">
                            Default
                        </x-tabler::button>
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#modal-large">
                            Large
                        </x-tabler::button>
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#modal-xl">
                            Extra Large
                        </x-tabler::button>
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#modal-fullscreen">
                            Fullscreen
                        </x-tabler::button>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::modals.modal id="modal-small" size="sm"&gt;...&lt;/x-tabler::modals.modal&gt;
&lt;x-tabler::modals.modal id="modal-large" size="lg"&gt;...&lt;/x-tabler::modals.modal&gt;
&lt;x-tabler::modals.modal id="modal-xl" size="xl"&gt;...&lt;/x-tabler::modals.modal&gt;
&lt;x-tabler::modals.modal id="modal-full" size="fullscreen"&gt;...&lt;/x-tabler::modals.modal&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Success Alert Modal --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Success Alert</x-slot>
                    <x-slot:subtitle>Confirmation and success messages</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::button color="success" data-bs-toggle="modal" data-bs-target="#modal-success">
                        Show Success
                    </x-tabler::button>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::modals.modal id="modal-success" size="sm"&gt;
    &lt;x-tabler::modals.close /&gt;
    &lt;x-tabler::modals.status color="success" /&gt;
    &lt;x-tabler::modals.body class="py-4 text-center"&gt;
        &lt;x-tabler-circle-check class="icon icon-lg text-green mb-2" /&gt;
        &lt;h3&gt;Payment succeeded&lt;/h3&gt;
        &lt;div class="text-secondary"&gt;Your payment has been processed.&lt;/div&gt;
    &lt;/x-tabler::modals.body&gt;
    &lt;x-tabler::modals.footer&gt;
        &lt;div class="w-100"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col"&gt;
                    &lt;x-tabler::button data-bs-dismiss="modal" fullWidth&gt;OK&lt;/x-tabler::button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/x-tabler::modals.footer&gt;
&lt;/x-tabler::modals.modal&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Danger Confirmation Modal --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Danger Confirmation</x-slot>
                    <x-slot:subtitle>Destructive action confirmations</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::button color="danger" data-bs-toggle="modal" data-bs-target="#modal-danger">
                        Delete Files
                    </x-tabler::button>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::modals.modal id="modal-danger" size="sm"&gt;
    &lt;x-tabler::modals.close /&gt;
    &lt;x-tabler::modals.status color="danger" /&gt;
    &lt;x-tabler::modals.body class="py-4 text-center"&gt;
        &lt;x-tabler-alert-triangle class="icon icon-lg text-danger mb-2" /&gt;
        &lt;h3&gt;Are you sure?&lt;/h3&gt;
        &lt;div class="text-secondary"&gt;This action cannot be undone.&lt;/div&gt;
    &lt;/x-tabler::modals.body&gt;
    &lt;x-tabler::modals.footer&gt;
        &lt;div class="w-100"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col"&gt;
                    &lt;x-tabler::button data-bs-dismiss="modal" fullWidth&gt;Cancel&lt;/x-tabler::button&gt;
                &lt;/div&gt;
                &lt;div class="col"&gt;
                    &lt;x-tabler::button color="danger" fullWidth&gt;Delete&lt;/x-tabler::button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/x-tabler::modals.footer&gt;
&lt;/x-tabler::modals.modal&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Modal with Form --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Modal with Form</x-slot>
                    <x-slot:subtitle>Large modal containing a complete form</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::button color="primary" icon="plus" data-bs-toggle="modal" data-bs-target="#modal-report">
                        New Report
                    </x-tabler::button>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::modals.modal id="modal-report" size="lg"&gt;
    &lt;x-tabler::modals.header title="New report" /&gt;
    &lt;x-tabler::modals.body&gt;
        &lt;div class="mb-3"&gt;
            &lt;label class="form-label"&gt;Name&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="Your report name" /&gt;
        &lt;/div&gt;
        &lt;!-- More form fields... --&gt;
    &lt;/x-tabler::modals.body&gt;
    &lt;x-tabler::modals.footer&gt;
        &lt;a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"&gt;Cancel&lt;/a&gt;
        &lt;x-tabler::button color="primary" icon="plus" class="ms-auto"&gt;Create&lt;/x-tabler::button&gt;
    &lt;/x-tabler::modals.footer&gt;
&lt;/x-tabler::modals.modal&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Scrollable & Static Modals --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Special Modal Options</x-slot>
                    <x-slot:subtitle>Scrollable content and static backdrop</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="btn-list">
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#modal-scrollable">
                            Scrollable Modal
                        </x-tabler::button>
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#modal-static">
                            Static Backdrop
                        </x-tabler::button>
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#modal-no-center">
                            Not Centered
                        </x-tabler::button>
                    </div>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;!-- Scrollable: body content scrolls if too long --&gt;
&lt;x-tabler::modals.modal id="modal-scrollable" scrollable&gt;...&lt;/x-tabler::modals.modal&gt;

&lt;!-- Static: cannot close by clicking backdrop --&gt;
&lt;x-tabler::modals.modal id="modal-static" static&gt;...&lt;/x-tabler::modals.modal&gt;

&lt;!-- Not centered: appears at top instead of center --&gt;
&lt;x-tabler::modals.modal id="modal-top" :centered="false"&gt;...&lt;/x-tabler::modals.modal&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference Table --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Component Reference</x-slot>
                    <x-slot:subtitle>All modal components and their props</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h4>Modal Component Props</h4>
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
                                    <td><code>required</code></td>
                                    <td>Unique modal ID (required for <code>data-bs-target</code>)</td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Modal size: <code>sm</code>, <code>lg</code>, <code>xl</code>,
                                        <code>fullscreen</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>scrollable</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Enable scrollable modal body for long content</td>
                                </tr>
                                <tr>
                                    <td><code>centered</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>true</code></td>
                                    <td>Center modal vertically on screen</td>
                                </tr>
                                <tr>
                                    <td><code>blur</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>true</code></td>
                                    <td>Apply blur effect to backdrop (Tabler default)</td>
                                </tr>
                                <tr>
                                    <td><code>static</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Prevent closing modal by clicking backdrop</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Header Component Props</h4>
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
                                    <td><code>title</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Modal title text</td>
                                </tr>
                                <tr>
                                    <td><code>hideClose</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Hide the close button</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Status Component Props</h4>
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
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>required</code></td>
                                    <td>Status color: <code>primary</code>, <code>success</code>,
                                        <code>danger</code>, <code>warning</code>, <code>info</code>, etc.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Other Components</h4>
                    <ul class="text-secondary">
                        <li><strong>Body Component:</strong> No props - pure wrapper for modal content</li>
                        <li><strong>Footer Component:</strong> No props - pure wrapper for modal actions</li>
                        <li><strong>Close Component:</strong> No props - standalone close button</li>
                    </ul>

                    <h4 class="mt-4">Usage Notes</h4>
                    <ul class="text-secondary">
                        <li>Modal requires Bootstrap 5 JavaScript to function</li>
                        <li>Trigger modals using <code>data-bs-toggle="modal"</code> and
                            <code>data-bs-target="#modal-id"</code>
                        </li>
                        <li>Close modals with <code>data-bs-dismiss="modal"</code> attribute on buttons</li>
                        <li>Alert-style modals should use: close button, status bar, centered body, and
                            full-width button grid
                        </li>
                        <li>Use <code>size="sm"</code> for alert/confirmation modals</li>
                        <li>Use <code>size="lg"</code> or <code>size="xl"</code> for form modals</li>
                        <li>The <code>static</code> prop prevents backdrop clicks from closing (use for required
                            actions)
                        </li>
                        <li>Icons use <code>secondnetwork/blade-tabler-icons</code> package</li>
                    </ul>
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

                    <div class="mt-4">
                        <h4>Modal Size Classes</h4>
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
                                        <td><code>modal-sm</code></td>
                                        <td>Small modal (also available via <code>size="sm"</code> prop)</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-lg</code></td>
                                        <td>Large modal (also available via <code>size="lg"</code> prop)</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-xl</code></td>
                                        <td>Extra large modal (also available via <code>size="xl"</code> prop)</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-fullscreen</code></td>
                                        <td>Full screen modal</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-fullscreen-sm-down</code></td>
                                        <td>Full screen on small screens and below</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-fullscreen-md-down</code></td>
                                        <td>Full screen on medium screens and below</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-fullscreen-lg-down</code></td>
                                        <td>Full screen on large screens and below</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-fullscreen-xl-down</code></td>
                                        <td>Full screen on extra large screens and below</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-fullscreen-xxl-down</code></td>
                                        <td>Full screen on 2x extra large screens and below</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Modal Dialog Classes</h4>
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
                                        <td><code>modal-dialog-centered</code></td>
                                        <td>Center modal vertically (also available via <code>centered</code> prop)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-dialog-scrollable</code></td>
                                        <td>Make modal body scrollable (also available via <code>scrollable</code>
                                            prop)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-blur</code></td>
                                        <td>Blur backdrop effect (also available via <code>blur</code> prop)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Status Color Classes</h4>
                        <p class="text-secondary">Apply to <code>&lt;x-tabler::modals.status&gt;</code>
                            component:</p>
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
                                        <td><code>modal-status-success</code></td>
                                        <td>Green status bar for success modals</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-status-danger</code></td>
                                        <td>Red status bar for danger/error modals</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-status-warning</code></td>
                                        <td>Yellow status bar for warning modals</td>
                                    </tr>
                                    <tr>
                                        <td><code>modal-status-info</code></td>
                                        <td>Blue status bar for info modals</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Utility Classes</h4>
                        <ul class="text-secondary">
                            <li><code>text-center</code> - Center align modal content</li>
                            <li><code>d-grid</code> - Make button container full width grid</li>
                            <li><code>gap-2</code>, <code>gap-3</code> - Spacing between buttons in grid</li>
                            <li><code>btn-list</code> - Horizontal button group with spacing</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>

    {{-- Modal Definitions --}}

    {{-- Basic Modal --}}
    <x-tabler::modals.modal id="modal-simple">
        <x-tabler::modals.header title="Modal title" />
        <x-tabler::modals.body>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus
            deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis
            reprehenderit sit tempora totam unde.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Small Modal --}}
    <x-tabler::modals.modal id="modal-small" size="sm">
        <x-tabler::modals.header title="Small modal" />
        <x-tabler::modals.body>
            This is a small modal with limited width.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Default Modal --}}
    <x-tabler::modals.modal id="modal-default">
        <x-tabler::modals.header title="Default modal" />
        <x-tabler::modals.body>
            This is the default modal size.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Large Modal --}}
    <x-tabler::modals.modal id="modal-large" size="lg">
        <x-tabler::modals.header title="Large modal" />
        <x-tabler::modals.body>
            This is a large modal for forms and complex content.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Extra Large Modal --}}
    <x-tabler::modals.modal id="modal-xl" size="xl">
        <x-tabler::modals.header title="Extra large modal" />
        <x-tabler::modals.body>
            This is an extra large modal for very wide content.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Fullscreen Modal --}}
    <x-tabler::modals.modal id="modal-fullscreen" size="fullscreen">
        <x-tabler::modals.header title="Fullscreen modal" />
        <x-tabler::modals.body>
            This modal takes up the entire screen.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Success Modal --}}
    <x-tabler::modals.modal id="modal-success" size="sm">
        <x-tabler::modals.close />
        <x-tabler::modals.status color="success" />
        <x-tabler::modals.body class="py-4 text-center">
            <x-tabler-circle-check class="icon icon-lg text-green mb-2" />
            <h3>Payment succeeded</h3>
            <div class="text-secondary">Your payment of $290 has been successfully submitted. Your invoice has been sent
                to support@tabler.io.
            </div>
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <div class="w-100">
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn w-100" data-bs-dismiss="modal">Go to dashboard</a>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-success w-100" data-bs-dismiss="modal">View invoice</a>
                    </div>
                </div>
            </div>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Danger Modal --}}
    <x-tabler::modals.modal id="modal-danger" size="sm">
        <x-tabler::modals.close />
        <x-tabler::modals.status color="danger" />
        <x-tabler::modals.body class="py-4 text-center">
            <x-tabler-alert-triangle class="icon icon-lg text-danger mb-2" />
            <h3>Are you sure?</h3>
            <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be undone.</div>
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <div class="w-100">
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn w-100" data-bs-dismiss="modal">Cancel</a>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete 84 items</a>
                    </div>
                </div>
            </div>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Report Modal (Form) --}}
    <x-tabler::modals.modal id="modal-report" size="lg">
        <x-tabler::modals.header title="New report" />
        <x-tabler::modals.body>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Your report name" />
            </div>
            <label class="form-label">Report type</label>
            <div class="form-selectgroup-boxes row mb-3">
                <div class="col-lg-6">
                    <label class="form-selectgroup-item">
                        <input type="radio" name="report-type" value="1" class="form-selectgroup-input"
                            checked />
                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                            <span class="me-3">
                                <span class="form-selectgroup-check"></span>
                            </span>
                            <span class="form-selectgroup-label-content">
                                <span class="form-selectgroup-title strong mb-1">Simple</span>
                                <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                            </span>
                        </span>
                    </label>
                </div>
                <div class="col-lg-6">
                    <label class="form-selectgroup-item">
                        <input type="radio" name="report-type" value="2" class="form-selectgroup-input" />
                        <span class="form-selectgroup-label d-flex align-items-center p-3">
                            <span class="me-3">
                                <span class="form-selectgroup-check"></span>
                            </span>
                            <span class="form-selectgroup-label-content">
                                <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                <span class="d-block text-secondary">Insert charts and additional advanced analyses</span>
                            </span>
                        </span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label class="form-label">Report url</label>
                        <div class="input-group input-group-flat">
                            <span class="input-group-text">https://tabler.io/reports/</span>
                            <input type="text" class="form-control ps-0" value="report-01" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Visibility</label>
                        <select class="form-select">
                            <option value="1" selected>Private</option>
                            <option value="2">Public</option>
                            <option value="3">Hidden</option>
                        </select>
                    </div>
                </div>
            </div>
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</a>
            <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                <x-tabler-plus class="icon" />
                Create new report
            </a>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Scrollable Modal --}}
    <x-tabler::modals.modal id="modal-scrollable" scrollable>
        <x-tabler::modals.header title="Scrollable modal" />
        <x-tabler::modals.body>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem
                eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora
                totam unde.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem
                eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora
                totam unde.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem
                eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora
                totam unde.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem
                eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora
                totam unde.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem
                eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora
                totam unde.</p>
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Static Backdrop Modal --}}
    <x-tabler::modals.modal id="modal-static" static>
        <x-tabler::modals.header title="Static backdrop modal" />
        <x-tabler::modals.body>
            This modal cannot be closed by clicking the backdrop. You must use the close button.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close Modal</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>

    {{-- Not Centered Modal --}}
    <x-tabler::modals.modal id="modal-no-center" :centered="false">
        <x-tabler::modals.header title="Top-aligned modal" />
        <x-tabler::modals.body>
            This modal appears at the top of the screen instead of centered.
        </x-tabler::modals.body>
        <x-tabler::modals.footer>
            <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
        </x-tabler::modals.footer>
    </x-tabler::modals.modal>
@endsection
