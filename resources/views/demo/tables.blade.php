{{--
    Table Component Demo

    Comprehensive showcase of all table variations, states, and features.
    Based on Tabler UI table patterns with Laravel Blade components.

    Component: <x-tabler::table>
    Location: abitbt/tablerui/stubs/resources/views/tabler/table.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Table Components" subtitle="Comprehensive showcase of all table variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Responsive Table --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Responsive Table</x-slot:title>
                    <x-slot:subtitle>Default table with horizontal scrolling on small screens</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>User</td>
                        </tr>
                        <tr>
                            <td>Mike Johnson</td>
                            <td>mike@example.com</td>
                            <td>Editor</td>
                        </tr>
                    </tbody>
                </x-tabler::table>
                <x-tabler::cards.body>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
            &lt;th&gt;Role&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;John Doe&lt;/td&gt;
            &lt;td&gt;john@example.com&lt;/td&gt;
            &lt;td&gt;Admin&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Table with Vertical Centering --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Vertically Centered Table</x-slot:title>
                    <x-slot:subtitle>Cell content aligned to vertical center</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::table vcenter>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Widget Pro</td>
                            <td>$29.99</td>
                            <td>
                                <span class="badge bg-success">In Stock</span>
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Gadget Plus</td>
                            <td>$49.99</td>
                            <td>
                                <span class="badge bg-warning">Low Stock</span>
                            </td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </x-tabler::table>
                <x-tabler::cards.body>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table vcenter&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Product&lt;/th&gt;
            &lt;th&gt;Price&lt;/th&gt;
            &lt;th class="w-1"&gt;&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;...&lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Card Table --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Card Table</x-slot:title>
                    <x-slot:subtitle>Table styled for card integration with full-width layout</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::table card vcenter>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Paweł Kuna</td>
                            <td class="text-secondary">UI Designer, Training</td>
                            <td class="text-secondary">
                                <a href="#" class="text-reset">paweluna@howstuffworks.com</a>
                            </td>
                            <td class="text-secondary">User</td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jeffie Lewzey</td>
                            <td class="text-secondary">Chemical Engineer, Support</td>
                            <td class="text-secondary">
                                <a href="#" class="text-reset">jlewzey1@seesaa.net</a>
                            </td>
                            <td class="text-secondary">Admin</td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mallory Hulme</td>
                            <td class="text-secondary">Geologist IV, Support</td>
                            <td class="text-secondary">
                                <a href="#" class="text-reset">mhulme2@domainmarket.com</a>
                            </td>
                            <td class="text-secondary">User</td>
                            <td>
                                <a href="#">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </x-tabler::table>
            </x-tabler::cards.card>
            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.header&gt;
        &lt;x-slot:title&gt;Team Members&lt;/x-slot&gt;
    &lt;/x-tabler::cards.header&gt;
    &lt;x-tabler::table card vcenter&gt;
        &lt;thead&gt;...&lt;/thead&gt;
        &lt;tbody&gt;...&lt;/tbody&gt;
    &lt;/x-tabler::table&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Striped Table --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Striped Table</x-slot:title>
                    <x-slot:subtitle>Zebra-striping for better row distinction</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::table card vcenter class="table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alice Johnson</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bob Williams</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Carol Davis</td>
                            <td>Inactive</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>David Miller</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </x-tabler::table>
                <x-tabler::cards.body>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table class="table-striped"&gt;
    &lt;thead&gt;...&lt;/thead&gt;
    &lt;tbody&gt;...&lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Hover Table --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Hover Table</x-slot:title>
                    <x-slot:subtitle>Rows highlight on mouse hover</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::table card vcenter class="table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Task</th>
                            <th>Priority</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Update documentation</td>
                            <td><span class="badge bg-danger">High</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Review pull requests</td>
                            <td><span class="badge bg-warning">Medium</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Refactor components</td>
                            <td><span class="badge bg-info">Low</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Write unit tests</td>
                            <td><span class="badge bg-warning">Medium</span></td>
                        </tr>
                    </tbody>
                </x-tabler::table>
                <x-tabler::cards.body>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table class="table-hover"&gt;
    &lt;thead&gt;...&lt;/thead&gt;
    &lt;tbody&gt;...&lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Small Table --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Small Compact Table</x-slot:title>
                    <x-slot:subtitle>Reduced padding for compact display</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::table :responsive="false" class="table-sm">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th class="text-end">Visitors</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>/</td>
                                <td class="fw-bold text-end">4,896</td>
                            </tr>
                            <tr>
                                <td>/about</td>
                                <td class="fw-bold text-end">3,241</td>
                            </tr>
                            <tr>
                                <td>/contact</td>
                                <td class="fw-bold text-end">2,108</td>
                            </tr>
                            <tr>
                                <td>/blog</td>
                                <td class="fw-bold text-end">1,567</td>
                            </tr>
                        </tbody>
                    </x-tabler::table>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table class="table-sm"&gt;
    &lt;thead&gt;...&lt;/thead&gt;
    &lt;tbody&gt;...&lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Borderless Table --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Borderless Table</x-slot:title>
                    <x-slot:subtitle>Clean minimal appearance without borders</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::table :responsive="false" class="table-borderless">
                        <thead>
                            <tr>
                                <th>Metric</th>
                                <th class="text-end">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Users</td>
                                <td class="text-end">12,458</td>
                            </tr>
                            <tr>
                                <td>Active Today</td>
                                <td class="text-end">3,247</td>
                            </tr>
                            <tr>
                                <td>New This Week</td>
                                <td class="text-end">892</td>
                            </tr>
                        </tbody>
                    </x-tabler::table>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table class="table-borderless"&gt;
    &lt;thead&gt;...&lt;/thead&gt;
    &lt;tbody&gt;...&lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Colored Rows --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Tables with Colored Rows</x-slot:title>
                    <x-slot:subtitle>Use color classes to highlight specific rows</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::table card vcenter>
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-success">
                            <td><span class="badge bg-success">Success</span></td>
                            <td>Operation completed successfully</td>
                        </tr>
                        <tr class="table-info">
                            <td><span class="badge bg-info">Info</span></td>
                            <td>System update available</td>
                        </tr>
                        <tr class="table-warning">
                            <td><span class="badge bg-warning">Warning</span></td>
                            <td>Storage space running low</td>
                        </tr>
                        <tr class="table-danger">
                            <td><span class="badge bg-danger">Error</span></td>
                            <td>Connection failed</td>
                        </tr>
                    </tbody>
                </x-tabler::table>
                <x-tabler::cards.body>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table&gt;
    &lt;tbody&gt;
        &lt;tr class="table-success"&gt;...&lt;/tr&gt;
        &lt;tr class="table-warning"&gt;...&lt;/tr&gt;
        &lt;tr class="table-danger"&gt;...&lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Non-Responsive Table --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Non-Responsive Table</x-slot:title>
                    <x-slot:subtitle>No responsive wrapper for controlled layouts</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::table :responsive="false" vcenter>
                        <thead>
                            <tr>
                                <th>Feature</th>
                                <th class="text-center">Available</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Basic Support</td>
                                <td class="text-center">
                                    <x-tabler-check class="icon text-success" />
                                </td>
                            </tr>
                            <tr>
                                <td>Priority Support</td>
                                <td class="text-center">
                                    <x-tabler-check class="icon text-success" />
                                </td>
                            </tr>
                            <tr>
                                <td>Custom Development</td>
                                <td class="text-center">
                                    <x-tabler-x class="icon text-danger" />
                                </td>
                            </tr>
                        </tbody>
                    </x-tabler::table>
                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::table :responsive="false"&gt;
    &lt;thead&gt;...&lt;/thead&gt;
    &lt;tbody&gt;...&lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Combined Styles --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Combined Table Styles</x-slot:title>
                    <x-slot:subtitle>Striped + Hover + Bordered for maximum visual feedback</x-slot:subtitle>
                </x-tabler::cards.header>
                <x-tabler::table card vcenter class="table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th class="w-1">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>Sarah Connor</td>
                            <td>Widget Pro</td>
                            <td>$299.00</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>
                                <x-tabler::button size="sm">View</x-tabler::button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1002</td>
                            <td>John McClane</td>
                            <td>Gadget Plus</td>
                            <td>$499.00</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <x-tabler::button size="sm">View</x-tabler::button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1003</td>
                            <td>Ellen Ripley</td>
                            <td>Tool Kit</td>
                            <td>$149.00</td>
                            <td><span class="badge bg-info">Processing</span></td>
                            <td>
                                <x-tabler::button size="sm">View</x-tabler::button>
                            </td>
                        </tr>
                    </tbody>
                </x-tabler::table>
            </x-tabler::cards.card>
            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::table class="table-striped table-hover table-bordered"&gt;
    &lt;thead&gt;...&lt;/thead&gt;
    &lt;tbody&gt;...&lt;/tbody&gt;
&lt;/x-tabler::table&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot:title>
                    <x-slot:subtitle>Complete list of available table component props</x-slot:subtitle>
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
                                    <td><code>responsive</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>true</code></td>
                                    <td>Wrap table in responsive container for horizontal scrolling on small screens</td>
                                </tr>
                                <tr>
                                    <td><code>card</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Add card table styling (use when table is inside a card component)</td>
                                </tr>
                                <tr>
                                    <td><code>vcenter</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Vertically center cell content for better alignment with badges, buttons, etc.</td>
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
                                        <td>Table content including thead, tbody, and tfoot elements</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>The <code>table</code> base class is always added automatically</li>
                            <li>When <code>responsive</code> is true (default), table is wrapped in <code>&lt;div
                                    class="table-responsive"&gt;</code></li>
                            <li>Use <code>card</code> prop when placing table inside a card for proper styling
                                integration
                            </li>
                            <li>The <code>vcenter</code> prop is especially useful when cells contain badges, buttons,
                                or multi-line content
                            </li>
                            <li>Use <code>class="w-1"</code> on columns that should be minimal width (like action
                                columns)
                            </li>
                            <li>Additional styling can be applied via the <code>class</code> attribute</li>
                            <li>All standard HTML attributes are passed through to the table element</li>
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
                                    <td><code>table</code></td>
                                    <td>Base table class (automatically added)</td>
                                </tr>
                                <tr>
                                    <td><code>table-vcenter</code></td>
                                    <td>Vertically center cell content (also available via <code>vcenter</code> prop)</td>
                                </tr>
                                <tr>
                                    <td><code>table-nowrap</code></td>
                                    <td>Prevent cell content from wrapping to multiple lines</td>
                                </tr>
                                <tr>
                                    <td><code>table-striped</code></td>
                                    <td>Add zebra-striping to table rows for better distinction</td>
                                </tr>
                                <tr>
                                    <td><code>table-hover</code></td>
                                    <td>Add hover state to table rows for interactive feedback</td>
                                </tr>
                                <tr>
                                    <td><code>table-bordered</code></td>
                                    <td>Add borders on all sides of table and cells</td>
                                </tr>
                                <tr>
                                    <td><code>table-borderless</code></td>
                                    <td>Remove all borders for a clean minimal look</td>
                                </tr>
                                <tr>
                                    <td><code>table-sm</code></td>
                                    <td>Make table more compact with reduced cell padding</td>
                                </tr>
                                <tr>
                                    <td><code>card-table</code></td>
                                    <td>Style for tables inside cards (also available via <code>card</code> prop)</td>
                                </tr>
                                <tr>
                                    <td><code>table-selectable</code></td>
                                    <td>Add selection functionality to table rows</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Responsive Classes</h4>
                        <p class="text-secondary">Control horizontal scrolling at different breakpoints:</p>
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
                                        <td><code>table-responsive</code></td>
                                        <td>Horizontal scrolling on all viewports (default)</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-responsive-sm</code></td>
                                        <td>Horizontal scrolling below sm breakpoint (576px)</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-responsive-md</code></td>
                                        <td>Horizontal scrolling below md breakpoint (768px)</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-responsive-lg</code></td>
                                        <td>Horizontal scrolling below lg breakpoint (992px)</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-responsive-xl</code></td>
                                        <td>Horizontal scrolling below xl breakpoint (1200px)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Row Color Classes</h4>
                        <p class="text-secondary">Apply to <code>&lt;tr&gt;</code> elements to highlight specific rows:
                        </p>
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
                                        <td><code>table-primary</code></td>
                                        <td>Primary color background</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-secondary</code></td>
                                        <td>Secondary color background</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-success</code></td>
                                        <td>Success/green color background</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-danger</code></td>
                                        <td>Danger/red color background</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-warning</code></td>
                                        <td>Warning/yellow color background</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-info</code></td>
                                        <td>Info/blue color background</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-light</code></td>
                                        <td>Light gray background</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-dark</code></td>
                                        <td>Dark background with light text</td>
                                    </tr>
                                    <tr>
                                        <td><code>table-active</code></td>
                                        <td>Active state background (subtle highlight)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Mobile Responsive Classes</h4>
                        <p class="text-secondary">Stack table rows vertically on mobile devices:</p>
                        <ul class="text-secondary">
                            <li><code>table-mobile-sm</code> - Stack table on sm breakpoint and below</li>
                            <li><code>table-mobile-md</code> - Stack table on md breakpoint and below</li>
                            <li><code>table-mobile-lg</code> - Stack table on lg breakpoint and below</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Column Width Utilities</h4>
                        <p class="text-secondary">Apply to <code>&lt;th&gt;</code> or <code>&lt;td&gt;</code> elements:
                        </p>
                        <ul class="text-secondary">
                            <li><code>w-1</code> - Minimal column width (auto-size to content, perfect for action
                                columns)
                            </li>
                            <li><code>w-auto</code> - Auto column width</li>
                            <li><code>w-25</code>, <code>w-50</code>, <code>w-75</code> - Percentage-based widths</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Text Utilities for Cells</h4>
                        <p class="text-secondary">Common utilities for cell content:</p>
                        <ul class="text-secondary">
                            <li><code>text-secondary</code> - Secondary text color (lighter, less prominent)</li>
                            <li><code>text-muted</code> - Muted text color</li>
                            <li><code>text-reset</code> - Reset link color to inherit (useful for links in colored
                                cells)
                            </li>
                            <li><code>text-nowrap</code> - Prevent text wrapping in a cell</li>
                            <li><code>text-end</code> - Right-align text (useful for numbers)</li>
                            <li><code>text-center</code> - Center-align text</li>
                            <li><code>fw-bold</code> - Bold font weight</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Other Useful Classes</h4>
                        <ul class="text-secondary">
                            <li><code>sticky-top</code> - Make thead sticky to top when scrolling (apply to
                                <code>&lt;thead&gt;</code>)
                            </li>
                            <li><code>text-nowrap</code> - Prevent text from wrapping (apply to entire table for
                                <code>table-nowrap</code>
                                effect)
                            </li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
