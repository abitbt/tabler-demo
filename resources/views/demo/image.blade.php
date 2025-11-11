{{--
    Image Component Demo

    Component: <x-tabler::image>
    Location: tabler-blade/stubs/resources/views/tabler/image.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Images" subtitle="Display images with aspect ratios and responsive behavior" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Regular Images --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Regular Images</x-slot>
                    <x-slot:subtitle>Standard img elements with various styling options</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <x-tabler::image src="https://picsum.photos/400/300" alt="Regular image"
                                class="img-fluid rounded" />
                            <p class="text-secondary mt-2 text-center">img-fluid rounded</p>
                        </div>
                        <div class="col-md-4">
                            <x-tabler::image src="https://picsum.photos/300/300" alt="Circular image"
                                class="rounded-circle" />
                            <p class="text-secondary mt-2 text-center">rounded-circle</p>
                        </div>
                        <div class="col-md-4">
                            <x-tabler::image src="https://picsum.photos/400/300?random=2" alt="Thumbnail"
                                class="img-thumbnail" />
                            <p class="text-secondary mt-2 text-center">img-thumbnail</p>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::image
    src="https://picsum.photos/400/300"
    alt="Regular image"
    class="img-fluid rounded"
/&gt;

&lt;x-tabler::image
    src="https://picsum.photos/300/300"
    alt="Circular image"
    class="rounded-circle"
/&gt;

&lt;x-tabler::image
    src="https://picsum.photos/400/300"
    alt="Thumbnail"
    class="img-thumbnail"
/&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Responsive Images with Aspect Ratios --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Responsive Images with Aspect Ratios</x-slot>
                    <x-slot:subtitle>Images with fixed aspect ratios using background-image</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <x-tabler::image src="https://picsum.photos/1920/1080" ratio="16x9" responsive
                                class="rounded" />
                            <p class="text-secondary mt-2 text-center">16:9 Widescreen</p>
                        </div>
                        <div class="col-md-6">
                            <x-tabler::image src="https://picsum.photos/2560/1080" ratio="21x9" responsive
                                class="rounded" />
                            <p class="text-secondary mt-2 text-center">21:9 Ultrawide</p>
                        </div>
                        <div class="col-md-4">
                            <x-tabler::image src="https://picsum.photos/800/800" ratio="1x1" responsive
                                class="rounded" />
                            <p class="text-secondary mt-2 text-center">1:1 Square</p>
                        </div>
                        <div class="col-md-4">
                            <x-tabler::image src="https://picsum.photos/800/600" ratio="4x3" responsive
                                class="rounded" />
                            <p class="text-secondary mt-2 text-center">4:3 Standard</p>
                        </div>
                        <div class="col-md-4">
                            <x-tabler::image src="https://picsum.photos/600/800" ratio="3x4" responsive
                                class="rounded" />
                            <p class="text-secondary mt-2 text-center">3:4 Portrait</p>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::image
    src="https://picsum.photos/1920/1080"
    ratio="16x9"
    responsive
    class="rounded"
/&gt;

&lt;x-tabler::image
    src="https://picsum.photos/800/800"
    ratio="1x1"
    responsive
    class="rounded"
/&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Card Integration --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Card Image Integration</x-slot>
                    <x-slot:subtitle>Images in card layouts</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="card">
                        <x-tabler::image src="https://picsum.photos/800/400" ratio="21x9" responsive
                            class="card-img-top" />
                        <div class="card-body">
                            <h3 class="card-title">Beautiful Landscape</h3>
                            <p class="text-secondary">This card uses a responsive image with 21:9 aspect ratio at the top.
                            </p>
                        </div>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;div class="card"&gt;
    &lt;x-tabler::image
        src="..."
        ratio="21x9"
        responsive
        class="card-img-top"
    /&gt;
    &lt;div class="card-body"&gt;
        &lt;h3 class="card-title"&gt;Title&lt;/h3&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- High-DPI Images --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>High-DPI Images (Retina)</x-slot>
                    <x-slot:subtitle>Images with srcset for high-resolution displays</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::image src="https://picsum.photos/400/300" src2x="https://picsum.photos/800/600"
                        alt="High-DPI image" class="img-fluid rounded" />
                    <p class="text-secondary mt-2">This image will automatically load the @2x version on high-resolution
                        displays.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::image
    src="image.jpg"
    src2x="image@2x.jpg"
    alt="High-DPI image"
    class="img-fluid"
/&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Background Images --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Background Images</x-slot>
                    <x-slot:subtitle>Simple background cover mode</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::image src="https://picsum.photos/1200/400" background class="rounded"
                        style="height: 200px;" />
                    <p class="text-secondary mt-2">Background images use background-size: cover without aspect ratio
                        constraints.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::image
    src="hero.jpg"
    background
    class="rounded"
    style="height: 200px;"
/&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Lazy Loading --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Lazy Loading</x-slot>
                    <x-slot:subtitle>Defer image loading for performance</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::image src="https://picsum.photos/600/400" alt="Lazy loaded image" lazy
                        class="img-fluid rounded" />
                    <p class="text-secondary mt-2">This image will only load when it enters the viewport.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::image
    src="large-image.jpg"
    alt="Lazy loaded"
    lazy
    class="img-fluid"
/&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- All Aspect Ratios Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>All Available Aspect Ratios</x-slot>
                    <x-slot:subtitle>Complete list of supported aspect ratios</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="row g-3">
                        @foreach (['1x1', '2x1', '1x2', '3x1', '1x3', '4x1', '1x4', '4x3', '3x4', '16x9', '9x16', '21x9', '9x21'] as $ratio)
                            <div class="col-md-3">
                                <x-tabler::image
                                    src="https://picsum.photos/{{ 800 + $loop->index * 10 }}/{{ 600 + $loop->index * 10 }}"
                                    :ratio="$ratio" responsive class="rounded border" />
                                <p class="text-secondary mt-2 text-center"><code>{{ $ratio }}</code></p>
                            </div>
                        @endforeach
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
                                    <td><code>src</code></td>
                                    <td><span class="badge bg-blue-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Image source URL (required for regular/responsive images)</td>
                                </tr>
                                <tr>
                                    <td><code>src2x</code></td>
                                    <td><span class="badge bg-blue-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Optional 2x resolution image URL for srcset (Retina displays)</td>
                                </tr>
                                <tr>
                                    <td><code>alt</code></td>
                                    <td><span class="badge bg-blue-lt">string</span></td>
                                    <td><code>''</code></td>
                                    <td>Image alt text for accessibility</td>
                                </tr>
                                <tr>
                                    <td><code>width</code></td>
                                    <td><span class="badge bg-blue-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Image width attribute (pixels)</td>
                                </tr>
                                <tr>
                                    <td><code>height</code></td>
                                    <td><span class="badge bg-blue-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Image height attribute (pixels)</td>
                                </tr>
                                <tr>
                                    <td><code>ratio</code></td>
                                    <td><span class="badge bg-blue-lt">string</span></td>
                                    <td><code>null</code></td>
                                    <td>Aspect ratio: 1x1, 2x1, 1x2, 3x1, 1x3, 4x1, 1x4, 4x3, 3x4, 16x9, 9x16, 21x9, 9x21
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>responsive</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use responsive image mode (aspect ratio with background image)</td>
                                </tr>
                                <tr>
                                    <td><code>background</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use background image mode (simple background cover)</td>
                                </tr>
                                <tr>
                                    <td><code>lazy</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Enable lazy loading (loads when entering viewport)</td>
                                </tr>
                                <tr>
                                    <td><code>loading</code></td>
                                    <td><span class="badge bg-blue-lt">string</span></td>
                                    <td><code>'eager'</code></td>
                                    <td>Loading attribute: 'lazy' or 'eager'</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Image Modes</h4>
                        <ul class="text-secondary">
                            <li><strong>Regular mode:</strong> Standard <code>&lt;img&gt;</code> tag - use for normal images
                            </li>
                            <li><strong>Responsive mode:</strong> <code>&lt;div&gt;</code> with background-image and aspect
                                ratio - use when you need fixed aspect ratios</li>
                            <li><strong>Background mode:</strong> <code>&lt;div&gt;</code> with background-image without
                                aspect ratio - use for hero sections or custom heights</li>
                            <li><strong>High-DPI mode:</strong> <code>&lt;picture&gt;</code> with srcset - use when
                                providing 2x resolution images</li>
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
                                    <td colspan="2" class="bg-surface-secondary"><strong>Image Utility Classes</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>img-fluid</code></td>
                                    <td>Responsive image that scales with container width (max-width: 100%)</td>
                                </tr>
                                <tr>
                                    <td><code>img-thumbnail</code></td>
                                    <td>Image with rounded border and padding</td>
                                </tr>
                                <tr>
                                    <td><code>rounded</code></td>
                                    <td>Rounded corners (6px border radius)</td>
                                </tr>
                                <tr>
                                    <td><code>rounded-circle</code></td>
                                    <td>Circular image (perfect for avatars)</td>
                                </tr>
                                <tr>
                                    <td><code>rounded-0</code></td>
                                    <td>Remove border radius</td>
                                </tr>
                                <tr>
                                    <td><code>shadow</code></td>
                                    <td>Add shadow to image</td>
                                </tr>
                                <tr>
                                    <td><code>shadow-sm</code></td>
                                    <td>Small shadow</td>
                                </tr>
                                <tr>
                                    <td><code>shadow-lg</code></td>
                                    <td>Large shadow</td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="bg-surface-secondary"><strong>Responsive Image
                                            Classes</strong></td>
                                </tr>
                                <tr>
                                    <td><code>img-responsive</code></td>
                                    <td>Base class for responsive images with aspect ratio (default 4:3)</td>
                                </tr>
                                <tr>
                                    <td><code>img-responsive-1x1</code></td>
                                    <td>Square aspect ratio (1:1)</td>
                                </tr>
                                <tr>
                                    <td><code>img-responsive-4x3</code></td>
                                    <td>Standard aspect ratio (4:3)</td>
                                </tr>
                                <tr>
                                    <td><code>img-responsive-16x9</code></td>
                                    <td>Widescreen aspect ratio (16:9)</td>
                                </tr>
                                <tr>
                                    <td><code>img-responsive-21x9</code></td>
                                    <td>Ultrawide aspect ratio (21:9)</td>
                                </tr>
                                <tr>
                                    <td><code>img-responsive-{ratio}</code></td>
                                    <td>See "All Available Aspect Ratios" section for complete list</td>
                                </tr>
                                <tr>
                                    <td><code>img-responsive-grid</code></td>
                                    <td>Use in grid layouts (adjusts padding for gutter spacing)</td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="bg-surface-secondary"><strong>Background Image
                                            Classes</strong></td>
                                </tr>
                                <tr>
                                    <td><code>img-bg</code></td>
                                    <td>Background image with cover sizing (no fixed aspect ratio)</td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="bg-surface-secondary"><strong>Card Integration
                                            Classes</strong></td>
                                </tr>
                                <tr>
                                    <td><code>card-img-top</code></td>
                                    <td>Image at top of card (flush with card edges)</td>
                                </tr>
                                <tr>
                                    <td><code>card-img-bottom</code></td>
                                    <td>Image at bottom of card (flush with card edges)</td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="bg-surface-secondary"><strong>Sizing Classes</strong></td>
                                </tr>
                                <tr>
                                    <td><code>w-100</code></td>
                                    <td>Full width (100%)</td>
                                </tr>
                                <tr>
                                    <td><code>w-75</code>, <code>w-50</code>, <code>w-25</code></td>
                                    <td>Width percentages (75%, 50%, 25%)</td>
                                </tr>
                                <tr>
                                    <td><code>h-100</code></td>
                                    <td>Full height (100%)</td>
                                </tr>
                                <tr>
                                    <td><code>mw-100</code></td>
                                    <td>Max width 100%</td>
                                </tr>
                                <tr>
                                    <td><code>mh-100</code></td>
                                    <td>Max height 100%</td>
                                </tr>
                                <tr>
                                    <td><code>vh-50</code>, <code>vh-100</code></td>
                                    <td>Viewport height (50vh, 100vh)</td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="bg-surface-secondary"><strong>Object Fit Classes</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>object-fit-contain</code></td>
                                    <td>Fit entire image in container (letterbox if needed)</td>
                                </tr>
                                <tr>
                                    <td><code>object-fit-cover</code></td>
                                    <td>Cover entire container (crops if needed)</td>
                                </tr>
                                <tr>
                                    <td><code>object-fit-fill</code></td>
                                    <td>Stretch to fill container</td>
                                </tr>
                                <tr>
                                    <td><code>object-fit-scale</code></td>
                                    <td>Preserve aspect ratio (deprecated, use contain)</td>
                                </tr>
                                <tr>
                                    <td><code>object-fit-none</code></td>
                                    <td>Display at original size</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Combining Classes</h4>
                        <p class="text-secondary">You can combine multiple utility classes:</p>
                        <ul class="text-secondary">
                            <li><code>class="img-fluid rounded shadow"</code> - Responsive, rounded, with shadow</li>
                            <li><code>class="rounded-circle border border-primary"</code> - Circular with colored border
                            </li>
                            <li><code>class="img-responsive img-responsive-16x9 card-img-top"</code> - 16:9 card image</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
