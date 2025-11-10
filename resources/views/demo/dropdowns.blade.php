{{--
    Dropdown Component Demo

    Comprehensive showcase of all dropdown variations, styles, and features.
    Based on Tabler UI dropdown patterns with Laravel Blade components.

    Components:
    - <x-tabler::dropdowns.dropdown>
    - <x-tabler::dropdowns.toggle>
    - <x-tabler::dropdowns.menu>
    - <x-tabler::dropdowns.item>
    - <x-tabler::dropdowns.header>
    - <x-tabler::dropdowns.divider>

    Location: abitbt/tablerui/stubs/resources/views/tabler/dropdowns/
--}}

@extends('layouts.app')

@push('styles')
    <style>
        .demo-dropdown-container {
            min-height: 250px;
            display: flex;
            align-items: flex-start;
            padding: 1rem;
        }

        .dropdown {
            margin-right: 1rem;
        }
    </style>
@endpush

@section('page-header')
    <x-tabler::page-header title="Dropdown Components" subtitle="Comprehensive showcase of all dropdown variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Dropdown --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Dropdown</x-slot>
                    <x-slot:subtitle>Simple dropdown menu with button toggle</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle>Open dropdown</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Third action</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.dropdown&gt;
    &lt;x-tabler::dropdowns.toggle&gt;Open dropdown&lt;/x-tabler::dropdowns.toggle&gt;
    &lt;x-tabler::dropdowns.menu&gt;
        &lt;x-tabler::dropdowns.item href="#"&gt;Action&lt;/x-tabler::dropdowns.item&gt;
        &lt;x-tabler::dropdowns.item href="#"&gt;Another action&lt;/x-tabler::dropdowns.item&gt;
    &lt;/x-tabler::dropdowns.menu&gt;
&lt;/x-tabler::dropdowns.dropdown&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Button Colors --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Button Colors</x-slot>
                    <x-slot:subtitle>Dropdown toggles with different button colors</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle color="primary">Primary</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>

                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle color="success">Success</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>

                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle color="danger">Danger</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.toggle color="primary"&gt;Primary&lt;/x-tabler::dropdowns.toggle&gt;
&lt;x-tabler::dropdowns.toggle color="success"&gt;Success&lt;/x-tabler::dropdowns.toggle&gt;
&lt;x-tabler::dropdowns.toggle color="danger"&gt;Danger&lt;/x-tabler::dropdowns.toggle&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Dropdown with Dividers --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Dropdown with Dividers</x-slot>
                    <x-slot:subtitle>Separate groups of items with dividers</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle>Open menu</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.divider />
                                <x-tabler::dropdowns.item href="#">Separated link</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.menu&gt;
    &lt;x-tabler::dropdowns.item href="#"&gt;Action&lt;/x-tabler::dropdowns.item&gt;
    &lt;x-tabler::dropdowns.divider /&gt;
    &lt;x-tabler::dropdowns.item href="#"&gt;Separated link&lt;/x-tabler::dropdowns.item&gt;
&lt;/x-tabler::dropdowns.menu&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Dropdown with Headers --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Dropdown with Headers</x-slot>
                    <x-slot:subtitle>Organize items into labeled sections</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle>Open menu</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.header>Section 1</x-tabler::dropdowns.header>
                                <x-tabler::dropdowns.item href="#">Action 1</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Action 2</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.divider />
                                <x-tabler::dropdowns.header>Section 2</x-tabler::dropdowns.header>
                                <x-tabler::dropdowns.item href="#">Action 3</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.menu&gt;
    &lt;x-tabler::dropdowns.header&gt;Section 1&lt;/x-tabler::dropdowns.header&gt;
    &lt;x-tabler::dropdowns.item href="#"&gt;Action 1&lt;/x-tabler::dropdowns.item&gt;
    &lt;x-tabler::dropdowns.divider /&gt;
    &lt;x-tabler::dropdowns.header&gt;Section 2&lt;/x-tabler::dropdowns.header&gt;
&lt;/x-tabler::dropdowns.menu&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Dropdown with Icons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Dropdown with Icons</x-slot>
                    <x-slot:subtitle>Add icons to menu items for better visual clarity</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle>Open menu</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.header>Account</x-tabler::dropdowns.header>
                                <x-tabler::dropdowns.item href="#" icon="user">Profile</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#" icon="settings">Settings</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#" icon="mail">Messages</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.divider />
                                <x-tabler::dropdowns.item href="#" icon="logout">Logout</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.item href="#" icon="user"&gt;Profile&lt;/x-tabler::dropdowns.item&gt;
&lt;x-tabler::dropdowns.item href="#" icon="settings"&gt;Settings&lt;/x-tabler::dropdowns.item&gt;
&lt;x-tabler::dropdowns.item href="#" icon="logout"&gt;Logout&lt;/x-tabler::dropdowns.item&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Active and Disabled States --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Active & Disabled States</x-slot>
                    <x-slot:subtitle>Highlight active items or disable unavailable options</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle>Open menu</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Regular item</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#" active>Active item</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another item</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.divider />
                                <x-tabler::dropdowns.item href="#" disabled>Disabled item</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.item href="#" active&gt;Active item&lt;/x-tabler::dropdowns.item&gt;
&lt;x-tabler::dropdowns.item href="#" disabled&gt;Disabled item&lt;/x-tabler::dropdowns.item&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Dropdown with Arrow --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Dropdown with Arrow</x-slot>
                    <x-slot:subtitle>Add an arrow pointing to the toggle button</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle>With Arrow</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu arrow>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Third action</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.menu arrow&gt;
    &lt;x-tabler::dropdowns.item href="#"&gt;Action&lt;/x-tabler::dropdowns.item&gt;
&lt;/x-tabler::dropdowns.menu&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Dark Dropdown --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Dark Dropdown</x-slot>
                    <x-slot:subtitle>Dark theme variant for better contrast</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle>Dark Menu</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu dark arrow>
                                <x-tabler::dropdowns.header>Dropdown header</x-tabler::dropdowns.header>
                                <x-tabler::dropdowns.item href="#" icon="settings">Settings</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#" icon="pencil">Edit</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.divider />
                                <x-tabler::dropdowns.item href="#" icon="trash">Delete</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.menu dark&gt;
    &lt;x-tabler::dropdowns.item href="#" icon="settings"&gt;Settings&lt;/x-tabler::dropdowns.item&gt;
&lt;/x-tabler::dropdowns.menu&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Toggle with Icon --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Toggle with Icon</x-slot>
                    <x-slot:subtitle>Add an icon to the toggle button</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle icon="chevron-down">Options</x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>

                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle icon="dots-vertical" class="btn-icon" />
                            <x-tabler::dropdowns.menu>
                                <x-tabler::dropdowns.item href="#">Action</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#">Another action</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.toggle icon="chevron-down"&gt;Options&lt;/x-tabler::dropdowns.toggle&gt;
&lt;x-tabler::dropdowns.toggle icon="dots-vertical" class="btn-icon" /&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Link Toggle --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Link Toggle</x-slot>
                    <x-slot:subtitle>Use links instead of buttons with custom classes</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="demo-dropdown-container">
                        <x-tabler::dropdowns.dropdown>
                            <x-tabler::dropdowns.toggle href="#" class="nav-link">Profile Menu
                            </x-tabler::dropdowns.toggle>
                            <x-tabler::dropdowns.menu class="dropdown-menu-end">
                                <x-tabler::dropdowns.item href="#" icon="user">View
                                    Profile</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.item href="#"
                                    icon="settings">Settings</x-tabler::dropdowns.item>
                                <x-tabler::dropdowns.divider />
                                <x-tabler::dropdowns.item href="#" icon="logout">Logout</x-tabler::dropdowns.item>
                            </x-tabler::dropdowns.menu>
                        </x-tabler::dropdowns.dropdown>
                    </div>
                    <pre class="rounded p-3"><code>&lt;x-tabler::dropdowns.toggle href="#" class="nav-link"&gt;Profile&lt;/x-tabler::dropdowns.toggle&gt;
&lt;x-tabler::dropdowns.menu class="dropdown-menu-end"&gt;...&lt;/x-tabler::dropdowns.menu&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot>
                    <x-slot:subtitle>Complete list of available props for all dropdown components</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h4 class="mb-3">Toggle Component Props</h4>
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
                                    <td><code>href</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>URL for link toggle. If null, renders as button element</td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Button color: <code>primary</code>, <code>secondary</code>, <code>success</code>,
                                        <code>danger</code>, <code>warning</code>, <code>info</code>, etc.
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Icon component name (e.g., <code>chevron-down</code>, <code>dots-vertical</code>).
                                        Icon appears after toggle text
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mb-3 mt-4">Menu Component Props</h4>
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
                                    <td><code>arrow</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show arrow pointing to toggle button</td>
                                </tr>
                                <tr>
                                    <td><code>dark</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Dark theme variant with dark background and white text</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mb-3 mt-4">Item Component Props</h4>
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
                                    <td><code>href</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>#</code></td>
                                    <td>Link URL for menu item</td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Icon component name (e.g., <code>user</code>, <code>settings</code>). Icon appears
                                        before item text
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>active</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Active/selected state</td>
                                </tr>
                                <tr>
                                    <td><code>disabled</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Disabled state (not clickable, includes ARIA attributes)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Other Components</h4>
                    <ul class="text-secondary">
                        <li><strong>Dropdown Component:</strong> No props - pure wrapper for dropdown structure</li>
                        <li><strong>Header Component:</strong> No props - section header for organizing menu items</li>
                        <li><strong>Divider Component:</strong> No props - horizontal separator line</li>
                    </ul>

                    <h4 class="mt-4">Usage Notes</h4>
                    <ul class="text-secondary">
                        <li>Dropdowns require Bootstrap 5 JavaScript to function</li>
                        <li>Toggle automatically includes <code>data-bs-toggle="dropdown"</code> and
                            <code>aria-expanded</code> attributes
                        </li>
                        <li>Disabled items include <code>tabindex="-1"</code> and <code>aria-disabled="true"</code> for
                            accessibility
                        </li>
                        <li>Use <code>class="dropdown-menu-end"</code> on menu to right-align the dropdown</li>
                        <li>Use <code>class="btn-icon"</code> on toggle for icon-only buttons (removes text padding)
                        </li>
                        <li>Icons use <code>secondnetwork/blade-tabler-icons</code> package</li>
                        <li>All components support custom CSS classes via the <code>class</code> attribute</li>
                    </ul>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Available CSS Classes --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Available CSS Classes</x-slot>
                    <x-slot:subtitle>Use these classes via the class="" attribute for additional styling</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Dropdown Wrapper</h5>
                            <ul>
                                <li><code>dropup</code> - Open menu above toggle</li>
                                <li><code>dropend</code> - Open menu to right</li>
                                <li><code>dropstart</code> - Open menu to left</li>
                            </ul>

                            <h5 class="mt-4">Toggle Button</h5>
                            <ul>
                                <li><code>btn-sm</code> - Small button</li>
                                <li><code>btn-lg</code> - Large button</li>
                                <li><code>btn-ghost-{color}</code> - Ghost variant</li>
                                <li><code>btn-outline-{color}</code> - Outline variant</li>
                                <li><code>btn-icon</code> - Icon-only button</li>
                                <li><code>nav-link</code> - Navigation link style</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h5>Dropdown Menu</h5>
                            <ul>
                                <li><code>dropdown-menu-end</code> - Right-align menu</li>
                                <li><code>dropdown-menu-start</code> - Left-align menu (default)</li>
                                <li><code>dropdown-menu-card</code> - Card-style menu</li>
                                <li><code>dropdown-menu-arrow</code> - Show arrow (or use arrow prop)</li>
                                <li><code>dropdown-menu-columns</code> - Multi-column layout</li>
                            </ul>

                            <h5 class="mt-4">Notes</h5>
                            <p class="text-muted mb-0">
                                All components support custom CSS classes through the <code>class</code> attribute.
                                Props are provided for common patterns and behavioral changes following the
                                <strong>Minimal Props Philosophy</strong>.
                            </p>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
