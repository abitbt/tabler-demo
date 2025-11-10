{{--
    Boxed Layout Demo

    Demonstrates the boxed (centered, max-width constrained) layout for reading-focused applications.

    Variables are passed from route:
    - $bsThemeBase = 'neutral' (neutral gray palette instead of default gray)
    - $bsThemeRadius = 2 (higher border radius)
    - $layoutBoxed = true (centered, max-width layout)
    - $navbarDark = false (light navbar theme)
    - $navbarSticky = false (navbar scrolls with page)
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Boxed Layout" subtitle="Centered, max-width constrained layout for focused content">
        <x-slot:pretitle>Layout Demo</x-slot:pretitle>
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
                    <x-slot:title>Boxed Layout</x-slot>
                    <x-slot:subtitle>Centered content with maximum width constraint</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h3>What is Boxed Layout?</h3>
                    <p>Boxed layout constrains content to a maximum width and centers it on the page. On large screens,
                        you'll see margins on both sides, creating a focused reading experience.</p>

                    <h3 class="mt-4">Key Features</h3>
                    <ul>
                        <li><strong>Centered Content</strong> - Content container centered on large screens</li>
                        <li><strong>Max-Width Constraint</strong> - Prevents content from stretching too wide</li>
                        <li><strong>Improved Readability</strong> - Optimal line length for reading</li>
                        <li><strong>Professional Appearance</strong> - Classic, focused design</li>
                        <li><strong>Fully Responsive</strong> - Full-width on mobile, constrained on desktop</li>
                        <li><strong>Works with All Components</strong> - Compatible with all Tabler components</li>
                    </ul>

                    <h3 class="mt-4">How It Works</h3>
                    <p>The boxed layout is achieved by adding the <code>layout-boxed</code> class to the body element. On
                        screens wider than the container's max-width (1320px for <code>container-xl</code>), the content is
                        centered with margins on both sides.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Implementation --}}
        <div class="col-lg-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Method 1: Pass from Route</x-slot>
                    <x-slot:subtitle>Recommended approach</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Pass variables when returning the view:</p>
                    <pre class="mb-0 rounded p-3"><code>Route::get('/page', function () {
    return view('your.view', [
        'layoutBoxed' => true,
        'bsThemeRadius' => 2,
        'navbarDark' => false,
    ]);
});</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Method 2: Set in View</x-slot>
                    <x-slot:subtitle>Alternative approach</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Set variables before extending the layout:</p>
                    <pre class="mb-0 rounded p-3"><code>@@php
    $layoutBoxed = true;
    $bsThemeRadius = 2;
    $navbarDark = false;
@@endphp

@@extends('layouts.app')

@@section('content')
    {{-- Your content --}}
@@endsection</code></pre>
                    <p class="text-secondary mb-0 mt-2"><small><strong>Note:</strong> Variables passed from routes take
                            precedence.</small></p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>HTML/CSS Implementation</x-slot>
                    <x-slot:subtitle>Direct class application</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Simply add the class to the body element:</p>
                    <pre class="mb-0 rounded p-3"><code>&lt;body class="layout-boxed"&gt;
    &lt;div class="page"&gt;
        &lt;!-- Your page content --&gt;
    &lt;/div&gt;
&lt;/body&gt;</code></pre>
                    <p class="text-secondary mb-0 mt-3"><small><strong>Tip:</strong> Combine with other classes like
                            <code>theme-dark</code> for additional styling.</small></p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Stats Cards Example --}}
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
                            <span class="badge bg-azure text-azure-fg">+8%</span>
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
                            <span class="badge bg-yellow text-yellow-fg">+5%</span>
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
                            <span class="badge bg-red text-red-fg">-2%</span>
                        </div>
                    </div>
                    <div class="h1 mb-3">3.65%</div>
                    <div class="d-flex mb-2">
                        <div>Conversion rate</div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- When to Use --}}
        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>When to Use Boxed Layout</x-slot>
                    <x-slot:subtitle>Ideal use cases</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h4>Perfect For:</h4>
                    <ul>
                        <li><strong>Reading-Focused Apps</strong> - Blog posts, articles, documentation</li>
                        <li><strong>Form-Heavy Interfaces</strong> - Data entry, settings, profiles</li>
                        <li><strong>Traditional Enterprise Apps</strong> - Classic business applications</li>
                        <li><strong>Content Management</strong> - Editors and content creation tools</li>
                        <li><strong>Authentication Pages</strong> - Login, registration forms</li>
                        <li><strong>Simple Dashboards</strong> - Single-column focused dashboards</li>
                    </ul>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>When NOT to Use</x-slot>
                    <x-slot:subtitle>Better alternatives exist</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h4>Not Ideal For:</h4>
                    <ul>
                        <li><strong>Wide Data Tables</strong> - Use fluid layout for horizontal space</li>
                        <li><strong>Multi-Widget Dashboards</strong> - Fluid layout better for many widgets</li>
                        <li><strong>Analytics Interfaces</strong> - Charts need more horizontal space</li>
                        <li><strong>Image Galleries</strong> - Benefit from full-width display</li>
                        <li><strong>Maps & Visualizations</strong> - Need maximum viewport</li>
                        <li><strong>Split-Screen Layouts</strong> - Better with full width</li>
                    </ul>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Comparison --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Boxed vs Fluid Layout</x-slot>
                    <x-slot:subtitle>Understanding the differences</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="table-responsive">
                        <table class="table-vcenter table">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>Boxed Layout</th>
                                    <th>Fluid Layout</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Container Width</strong></td>
                                    <td>Max 1320px (container-xl)</td>
                                    <td>100% of viewport</td>
                                </tr>
                                <tr>
                                    <td><strong>Content Alignment</strong></td>
                                    <td>Centered with side margins</td>
                                    <td>Full-width edge-to-edge</td>
                                </tr>
                                <tr>
                                    <td><strong>Best For</strong></td>
                                    <td>Reading, forms, content</td>
                                    <td>Tables, dashboards, data</td>
                                </tr>
                                <tr>
                                    <td><strong>Readability</strong></td>
                                    <td>Excellent (optimal line length)</td>
                                    <td>Good (can be too wide)</td>
                                </tr>
                                <tr>
                                    <td><strong>Screen Space</strong></td>
                                    <td>Constrained, focused</td>
                                    <td>Maximum utilization</td>
                                </tr>
                                <tr>
                                    <td><strong>Implementation</strong></td>
                                    <td><code>$layoutBoxed = true</code></td>
                                    <td><code>$layoutFluid = true</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Sample Form --}}
        <div class="col-lg-8">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Sample Form</x-slot>
                    <x-slot:subtitle>Forms benefit from constrained width</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="your.email@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company</label>
                        <input type="text" class="form-control" placeholder="Your company name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="4" placeholder="Your message here..."></textarea>
                    </div>
                    <div>
                        <x-tabler::button color="primary">Submit Form</x-tabler::button>
                        <x-tabler::button color="secondary" class="ms-2">Cancel</x-tabler::button>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Why Constrained Width?</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p><strong>Optimal Reading</strong></p>
                    <p class="text-secondary">Research shows 50-75 characters per line is ideal for readability. Boxed
                        layout prevents lines from becoming too long.</p>

                    <p class="mt-3"><strong>Reduced Eye Movement</strong></p>
                    <p class="text-secondary">Narrower content reduces horizontal eye movement, making it easier to scan and
                        read.</p>

                    <p class="mt-3"><strong>Better Focus</strong></p>
                    <p class="text-secondary">Constrained width helps users focus on content without distraction.</p>

                    <p class="mt-3"><strong>Professional Look</strong></p>
                    <p class="text-secondary">Classic centered layout conveys professionalism and intentional design.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Customization --}}
        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Customize Max Width</x-slot>
                    <x-slot:subtitle>Override container width</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>You can customize the maximum width using CSS variables:</p>
                    <pre class="mb-0 rounded p-3"><code>.layout-boxed {
    --tblr-theme-boxed-width: 1200px;
}

/* Or override container directly */
.container-xl {
    max-width: 1200px;
}</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-lg-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Background Styling</x-slot>
                    <x-slot:subtitle>Style the outer area</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Add background color or patterns to the outer area:</p>
                    <pre class="mb-0 rounded p-3"><code>body.layout-boxed {
    background: #f5f7fb;
}

/* Or with pattern */
body.layout-boxed {
    background: #f5f7fb url('pattern.svg');
}</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Best Practices --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Best Practices</x-slot>
                    <x-slot:subtitle>Tips for using boxed layout effectively</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Design Guidelines</h4>
                            <ul>
                                <li><strong>Consistency</strong> - Use boxed layout throughout your app, don't mix with
                                    fluid</li>
                                <li><strong>Spacing</strong> - Maintain consistent padding and margins</li>
                                <li><strong>Mobile First</strong> - Test mobile experience (full-width on small screens)
                                </li>
                                <li><strong>Background</strong> - Consider subtle background color for outer area</li>
                                <li><strong>Shadow</strong> - Optional: Add shadow to content area for depth</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>Accessibility</h4>
                            <ul>
                                <li><strong>Readability</strong> - Optimal line length improves readability</li>
                                <li><strong>Focus Management</strong> - Better keyboard navigation focus</li>
                                <li><strong>Zoom Support</strong> - Works well with browser zoom</li>
                                <li><strong>Responsive</strong> - Automatically adjusts to screen size</li>
                                <li><strong>Contrast</strong> - Ensure good contrast between content and background</li>
                            </ul>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Article Example --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Sample Article</x-slot>
                    <x-slot:subtitle>Demonstrating optimal reading width</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h3>Understanding Boxed Layouts in Web Design</h3>
                    <p class="text-secondary">Published on {{ date('M d, Y') }} • 5 min read</p>

                    <p>The boxed layout pattern has been a cornerstone of web design for decades, and for good reason. By
                        constraining content width and centering it on the page, boxed layouts create a focused,
                        professional reading experience that works across devices.</p>

                    <h4 class="mt-4">The Science of Line Length</h4>
                    <p>Studies in typography and readability have consistently shown that line lengths between 50-75
                        characters provide the optimal reading experience. When lines are too long, readers have difficulty
                        tracking from the end of one line to the beginning of the next. When too short, the eye tires from
                        constantly moving to new lines.</p>

                    <p>Boxed layouts naturally constrain line length to this optimal range, making them ideal for any
                        interface where reading is the primary activity. This includes blog posts, documentation, articles,
                        and content management systems.</p>

                    <h4 class="mt-4">Responsive Considerations</h4>
                    <p>One of the key advantages of boxed layouts in modern web design is their inherent responsiveness. On
                        mobile devices, the content naturally expands to fill the screen, providing maximum readable area.
                        As screens get larger, the content remains constrained, preventing overly long lines that would harm
                        readability.</p>

                    <p>This responsive behavior happens automatically without additional media queries or breakpoint
                        management, making boxed layouts simpler to implement and maintain.</p>
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
