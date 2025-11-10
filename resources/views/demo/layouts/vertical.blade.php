{{--
    Vertical Layout Demo

    Demonstrates the vertical sidebar layout with dark sidebar and various menu configurations.
--}}

@extends('tabler::layouts.vertical')

@section('page-header')
    <x-tabler::page-header title="Vertical Layout" subtitle="Sidebar navigation layout for admin dashboards">
        <x-slot:pretitle>Demo</x-slot:pretitle>
        <x-slot:actions>
            <x-tabler::button color="primary" icon="plus">
                New Item
            </x-tabler::button>
        </x-slot:actions>
    </x-tabler::page-header>
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Layout Overview --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Vertical Sidebar Layout</x-slot>
                    <x-slot:subtitle>Fixed sidebar navigation with dark theme</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h3>Features</h3>
                    <ul>
                        <li><strong>Fixed Vertical Sidebar</strong> - Stays visible on the left side</li>
                        <li><strong>Dark Theme by Default</strong> - Professional appearance</li>
                        <li><strong>Collapsible on Mobile</strong> - Responsive hamburger menu</li>
                        <li><strong>Dropdown Menus</strong> - Supports nested navigation</li>
                        <li><strong>Active State Tracking</strong> - Highlights current page</li>
                        <li><strong>Icon Support</strong> - Uses Tabler Icons for visual navigation</li>
                        <li><strong>Badge Support</strong> - Show counts or notifications</li>
                    </ul>

                    <h3 class="mt-4">Configuration</h3>
                    <p>Set these variables before extending the layout:</p>
                    <pre class="rounded p-3"><code>@@php
                                $sidebarDark = true;           // Dark theme (default: true)
                                $sidebarPosition = 'left';     // 'left' or 'right' (default: 'left')
                                $sidebarTransparent = false;   // Transparent background
                                $sidebarBackground = null;     // Custom background color
                                $sidebarBreakpoint = 'lg';     // Collapse breakpoint

                                $navItems = [
                                    ['title' => 'Dashboard', 'url' => url('/dashboard'), 'icon' => 'home'],
                                    ['title' => 'Users', 'url' => url('/users'), 'icon' => 'users'],
                                ];
                            @@endphp
@@extends('tabler::layouts.vertical')</code></pre>

                    <h3 class="mt-4">Navigation Structure</h3>
                    <p>The <code>$navItems</code> array supports simple links and dropdown menus:</p>
                    <pre class="rounded p-3"><code>$navItems = [
    // Simple link
    [
        'title' => 'Dashboard',
        'url' => url('/dashboard'),  // or route('dashboard')
        'icon' => 'home',
        'active' => true,
        'badge' => 'New',
    ],

    // Dropdown menu
    [
        'title' => 'Components',
        'icon' => 'layout',
        'children' => [
            ['title' => 'Buttons', 'url' => url('/components/buttons')],
            ['title' => 'Cards', 'url' => url('/components/cards')],
            ['divider' => true],
            ['title' => 'Forms', 'url' => url('/components/forms')],
        ],
    ],
];</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Stats Cards --}}
        <div class="col-sm-6 col-lg-3">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center">
                        <div class="subheader">Total Users</div>
                        <div class="lh-1 ms-auto">
                            <span class="badge bg-green text-green-fg">+12%</span>
                        </div>
                    </div>
                    <div class="h1 mb-3">2,847</div>
                    <div class="d-flex mb-2">
                        <div>Active users this month</div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center">
                        <div class="subheader">Revenue</div>
                        <div class="lh-1 ms-auto">
                            <span class="badge bg-red text-red-fg">-3%</span>
                        </div>
                    </div>
                    <div class="h1 mb-3">$48,234</div>
                    <div class="d-flex mb-2">
                        <div>Monthly revenue</div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center">
                        <div class="subheader">Orders</div>
                        <div class="lh-1 ms-auto">
                            <span class="badge bg-azure text-azure-fg">+8%</span>
                        </div>
                    </div>
                    <div class="h1 mb-3">1,482</div>
                    <div class="d-flex mb-2">
                        <div>New orders this week</div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-sm-6 col-lg-3">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <div class="d-flex align-items-center">
                        <div class="subheader">Conversion</div>
                        <div class="lh-1 ms-auto">
                            <span class="badge bg-yellow text-yellow-fg">+2%</span>
                        </div>
                    </div>
                    <div class="h1 mb-3">3.65%</div>
                    <div class="d-flex mb-2">
                        <div>Conversion rate</div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Layout Variations --}}
        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Light Sidebar</x-slot>
                    <x-slot:subtitle>Use light theme for the sidebar</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <pre class="mb-0"><code>@@php
                            $sidebarDark = false;
                        @@endphp
@@extends('tabler::layouts.vertical')</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Right Sidebar</x-slot>
                    <x-slot:subtitle>Position sidebar on the right</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <pre class="mb-0"><code>@@php
                            $sidebarPosition = 'right';
                        @@endphp
@@extends('tabler::layouts.vertical')</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Transparent Sidebar</x-slot>
                    <x-slot:subtitle>Modern transparent background</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <pre class="mb-0"><code>@@php
                            $sidebarTransparent = true;
                        @@endphp
@@extends('tabler::layouts.vertical')</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Custom Background</x-slot>
                    <x-slot:subtitle>Use any Tabler color</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <pre class="mb-0"><code>@@php
                            $sidebarBackground = 'primary';
                            $sidebarDark = true;
                        @@endphp
@@extends('tabler::layouts.vertical')</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Best Practices --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Best Practices</x-slot>
                    <x-slot:subtitle>Tips for using vertical sidebar layout</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>When to Use</h4>
                            <ul>
                                <li><strong>Admin Dashboards</strong> - Perfect for admin panels</li>
                                <li><strong>Complex Applications</strong> - Many navigation items</li>
                                <li><strong>Persistent Navigation</strong> - Always visible sidebar</li>
                                <li><strong>Desktop-First Apps</strong> - Primary desktop use</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>Design Tips</h4>
                            <ul>
                                <li><strong>Use Dark Theme</strong> - Professional, reduces eye strain</li>
                                <li><strong>Organize Logically</strong> - Group related items</li>
                                <li><strong>Limit Top Level</strong> - Max 8-10 items</li>
                                <li><strong>Show Active State</strong> - Clear current location</li>
                            </ul>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Sample Content --}}
        <div class="col-lg-8">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Recent Activity</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="divide-y">
                        <div class="row">
                            <div class="col-auto">
                                <span class="avatar">JL</span>
                            </div>
                            <div class="col">
                                <div class="text-truncate">
                                    <strong>John Doe</strong> created a new project
                                </div>
                                <div class="text-secondary">2 hours ago</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="avatar">SM</span>
                            </div>
                            <div class="col">
                                <div class="text-truncate">
                                    <strong>Sarah Miller</strong> updated the settings
                                </div>
                                <div class="text-secondary">4 hours ago</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="avatar">PT</span>
                            </div>
                            <div class="col">
                                <div class="text-truncate">
                                    <strong>Paul Taylor</strong> uploaded 3 files
                                </div>
                                <div class="text-secondary">Yesterday</div>
                            </div>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Quick Stats</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <div>CPU Usage</div>
                            <div>67%</div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: 67%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <div>Memory</div>
                            <div>84%</div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-yellow" style="width: 84%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <div>Storage</div>
                            <div>42%</div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" style="width: 42%"></div>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
            <div class="row align-items-center flex-row-reverse text-center">
                <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item"><a href="#" class="link-secondary">Documentation</a></li>
                        <li class="list-inline-item"><a href="#" class="link-secondary">License</a></li>
                        <li class="list-inline-item"><a href="#" class="link-secondary">Support</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-auto mt-lg-0 mt-3">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            © {{ date('Y') }} <a href="#" class="link-secondary">Tabler UI Laravel</a>. Built
                            with <a href="https://tabler.io" target="_blank" class="link-secondary">Tabler</a>.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
