{{--
    Card Components Demo

    Comprehensive showcase of all card component variations, states, and features.
    Based on Tabler UI card patterns with Laravel Blade components.

    Components:
    - <x-tabler::cards.card>
    - <x-tabler::cards.header>
    - <x-tabler::cards.body>
    - <x-tabler::cards.footer>
    - <x-tabler::cards.img>
    - <x-tabler::cards.stamp>
    - <x-tabler::cards.status>
    - <x-tabler::cards.progress>
    - <x-tabler::cards.actions>

    Location: tabler-blade/stubs/resources/views/tabler/cards/
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Card Components" subtitle="Comprehensive showcase of all card component variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Card --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Card</x-slot>
                    <x-slot:subtitle>Simple card with header and body</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>This is a basic card with a header and body section.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.header&gt;
        &lt;x-slot:title&gt;Card title&lt;/x-slot&gt;
    &lt;/x-tabler::cards.header&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Light Header --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header light>
                    <x-slot:title>Light Header</x-slot>
                    <x-slot:subtitle>Card with light header background</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Card with header background using the light prop.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.header light&gt;
        &lt;x-slot:title&gt;Card title&lt;/x-slot&gt;
    &lt;/x-tabler::cards.header&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Borderless Card --}}
        <div class="col-md-6">
            <x-tabler::cards.card class="card-borderless">
                <x-tabler::cards.body>
                    <h3 class="card-title">Borderless Card</h3>
                    <p>Card without border using CSS class.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card class="card-borderless"&gt;
    &lt;x-tabler::cards.body&gt;
        Content without border
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Card with Subtitle --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Card with Subtitle</x-slot>
                    <x-slot:subtitle>Additional context</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Card with title and subtitle in header.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.header&gt;
    &lt;x-slot:title&gt;Title&lt;/x-slot&gt;
    &lt;x-slot:subtitle&gt;Subtitle&lt;/x-slot&gt;
&lt;/x-tabler::cards.header&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Clickable Card --}}
        <div class="col-md-6">
            <x-tabler::cards.card link href="#">
                <x-tabler::cards.body>
                    <h3 class="card-title">Clickable Card</h3>
                    <p>Default hover effect - hover to see the effect</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card link href="#"&gt;
    &lt;x-tabler::cards.body&gt;
        Clickable content
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Rotate Effect --}}
        <div class="col-md-6">
            <x-tabler::cards.card link href="#" class="card-link-rotate">
                <x-tabler::cards.body>
                    <h3 class="card-title">Rotate Effect</h3>
                    <p>Rotate hover effect - hover to see the rotation</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card link href="#"
    class="card-link-rotate"&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Pop Effect --}}
        <div class="col-md-6">
            <x-tabler::cards.card link href="#" class="card-link-pop">
                <x-tabler::cards.body>
                    <h3 class="card-title">Pop Effect</h3>
                    <p>Pop hover effect - hover to see the pop animation</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card link href="#"
    class="card-link-pop"&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Active State --}}
        <div class="col-md-6">
            <x-tabler::cards.card active>
                <x-tabler::cards.body>
                    <h3 class="card-title">Active State</h3>
                    <p>This card has an active state (highlighted)</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card active&gt;
    &lt;x-tabler::cards.body&gt;
        Active card content
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Inactive State --}}
        <div class="col-md-6">
            <x-tabler::cards.card inactive>
                <x-tabler::cards.body>
                    <h3 class="card-title">Inactive State</h3>
                    <p>This card has an inactive state (dimmed)</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card inactive&gt;
    &lt;x-tabler::cards.body&gt;
        Inactive card content
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Stacked Effect --}}
        <div class="col-md-6">
            <x-tabler::cards.card class="card-stacked">
                <x-tabler::cards.body>
                    <h3 class="card-title">Stacked Effect</h3>
                    <p>Card with stacked shadow layers effect</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card class="card-stacked"&gt;
    &lt;x-tabler::cards.body&gt;
        Stacked card
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Card with Stamp --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.stamp icon="bell" color="yellow" />
                <x-tabler::cards.body>
                    <h3 class="card-title">Card with Stamp</h3>
                    <p>Decorative icon stamp positioned in the corner.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.stamp icon="bell"
        color="yellow" /&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Colored Background --}}
        <div class="col-md-6">
            <x-tabler::cards.card class="bg-primary-lt">
                <x-tabler::cards.body>
                    <h3 class="card-title">Colored Background</h3>
                    <p class="text-secondary">Card with light primary background using CSS class.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card class="bg-primary-lt"&gt;
    &lt;x-tabler::cards.body&gt;
        Light colored background
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Solid Background with Stamp --}}
        <div class="col-md-6">
            <x-tabler::cards.card class="bg-primary text-primary-fg">
                <x-tabler::cards.stamp icon="star" color="white" />
                <x-tabler::cards.body>
                    <h3 class="card-title">Solid Background</h3>
                    <p>Full color background with white stamp icon.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card
    class="bg-primary text-primary-fg"&gt;
    &lt;x-tabler::cards.stamp icon="star"
        color="white" /&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Top Status Indicator --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.status color="danger" position="top" />
                <x-tabler::cards.body>
                    <h3 class="card-title">Top Status</h3>
                    <p class="text-secondary">Colored bar at the top of the card.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.status
        color="danger" position="top" /&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Bottom Status --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.status color="success" position="bottom" />
                <x-tabler::cards.body>
                    <h3 class="card-title">Bottom Status</h3>
                    <p class="text-secondary">Colored bar at the bottom of the card.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.status
        color="success" position="bottom" /&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Side Status --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.status color="primary" position="start" />
                <x-tabler::cards.body>
                    <h3 class="card-title">Side Status</h3>
                    <p class="text-secondary">Colored bar at the side of the card.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.status
        color="primary" position="start" /&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Progress Bar --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h3 class="card-title">Progress Bar</h3>
                    <p class="text-secondary">Card with progress indicator at the bottom.</p>
                </x-tabler::cards.body>
                <x-tabler::cards.progress :value="75" color="primary" />
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
    &lt;x-tabler::cards.progress
        :value="75" color="primary" /&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Image Top --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.img src="https://placehold.co/600x300/3b82f6/ffffff?text=Top+Image" alt="Card image"
                    position="top" />
                <x-tabler::cards.body>
                    <h3 class="card-title">Image Top</h3>
                    <p class="text-secondary">Card with image at the top.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.img
        src="/image.jpg" position="top" /&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Image Bottom --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h3 class="card-title">Image Bottom</h3>
                    <p class="text-secondary">Card with image at the bottom.</p>
                </x-tabler::cards.body>
                <x-tabler::cards.img src="https://placehold.co/600x300/10b981/ffffff?text=Bottom+Image" alt="Card image"
                    position="bottom" />
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
    &lt;x-tabler::cards.img
        src="/image.jpg" position="bottom" /&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Responsive Image --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.img src="https://placehold.co/600x400/8b5cf6/ffffff?text=16:9+Ratio"
                    alt="Responsive image" responsive ratio="16x9" />
                <x-tabler::cards.body>
                    <h3 class="card-title">Responsive Image</h3>
                    <p class="text-secondary">Image with 16:9 aspect ratio.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.img src="/image.jpg"
        responsive ratio="16x9" /&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Standard Footer --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h3 class="card-title">Standard Footer</h3>
                    <p class="text-secondary">Card with a standard footer section.</p>
                </x-tabler::cards.body>
                <x-tabler::cards.footer>
                    This is standard card footer
                </x-tabler::cards.footer>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
    &lt;x-tabler::cards.footer&gt;
        Footer content
    &lt;/x-tabler::cards.footer&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Transparent Footer --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h3 class="card-title">Transparent Footer</h3>
                    <p class="text-secondary">Card with transparent footer background.</p>
                </x-tabler::cards.body>
                <x-tabler::cards.footer transparent>
                    This is transparent card footer
                </x-tabler::cards.footer>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.body&gt;Content&lt;/x-tabler::cards.body&gt;
    &lt;x-tabler::cards.footer transparent&gt;
        Footer content
    &lt;/x-tabler::cards.footer&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Footer with Button --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h3 class="card-title">Footer with Button</h3>
                    <p class="text-secondary">Footer containing action buttons.</p>
                </x-tabler::cards.body>
                <x-tabler::cards.footer>
                    <x-tabler::button color="primary" size="sm">Action</x-tabler::button>
                </x-tabler::cards.footer>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.footer&gt;
    &lt;x-tabler::button color="primary"
        size="sm"&gt;Action&lt;/x-tabler::button&gt;
&lt;/x-tabler::cards.footer&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Footer with Multiple Buttons --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h3 class="card-title">Multiple Buttons</h3>
                    <p class="text-secondary">Multiple actions in footer using btn-list.</p>
                </x-tabler::cards.body>
                <x-tabler::cards.footer>
                    <div class="btn-list">
                        <x-tabler::button color="primary" size="sm">Save</x-tabler::button>
                        <x-tabler::button variant="outline" size="sm">Cancel</x-tabler::button>
                    </div>
                </x-tabler::cards.footer>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.footer&gt;
    &lt;div class="btn-list"&gt;
        &lt;x-tabler::button color="primary"
            size="sm"&gt;Save&lt;/x-tabler::button&gt;
        &lt;x-tabler::button variant="outline"
            size="sm"&gt;Cancel&lt;/x-tabler::button&gt;
    &lt;/div&gt;
&lt;/x-tabler::cards.footer&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Small Padding --}}
        <div class="col-md-6">
            <x-tabler::cards.card padding="sm">
                <x-tabler::cards.body>
                    <h3 class="card-title">Small Padding</h3>
                    <p class="text-secondary">Card with reduced padding.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card padding="sm"&gt;
    &lt;x-tabler::cards.body&gt;
        Less padding
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Large Padding --}}
        <div class="col-md-6">
            <x-tabler::cards.card padding="lg">
                <x-tabler::cards.body>
                    <h3 class="card-title">Large Padding</h3>
                    <p class="text-secondary">Card with increased padding.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card padding="lg"&gt;
    &lt;x-tabler::cards.body&gt;
        More padding
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Scrollable Body --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body scrollable>
                    <h3 class="card-title">Scrollable Body</h3>
                    <p>This card has scrollable content with max-height.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Sed do eiusmod tempor incididunt ut labore.</p>
                    <p>Ut enim ad minim veniam, quis nostrud.</p>
                    <p>Duis aute irure dolor in reprehenderit.</p>
                    <p>Excepteur sint occaecat cupidatat non proident.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.body scrollable&gt;
        Long content that scrolls
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Header with Actions --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Header Actions</x-slot>
                    <x-slot:subtitle>Action buttons in header</x-slot>
                    <x-slot:actions>
                        <x-tabler::button size="sm" icon="plus" color="primary">Add</x-tabler::button>
                    </x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>Card header can include action buttons.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.header&gt;
    &lt;x-slot:title&gt;Title&lt;/x-slot&gt;
    &lt;x-slot:actions&gt;
        &lt;x-tabler::button size="sm"&gt;
            Add
        &lt;/x-tabler::button&gt;
    &lt;/x-slot&gt;
&lt;/x-tabler::cards.header&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Complex Example --}}
        <div class="col-md-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Complex Card Example</x-slot>
                    <x-slot:subtitle>Combining multiple card features</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>This example demonstrates combining multiple card components and features together in a
                        single card.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.status color="success" /&gt;
    &lt;x-tabler::cards.stamp icon="star" color="warning" /&gt;
    &lt;x-tabler::cards.img src="/image.jpg" position="top" /&gt;
    &lt;x-tabler::cards.header&gt;
        &lt;x-slot:title&gt;Premium Plan&lt;/x-slot&gt;
        &lt;x-slot:subtitle&gt;Best value&lt;/x-slot&gt;
        &lt;x-slot:actions&gt;
            &lt;x-tabler::button class="btn-action" icon="heart" iconOnly /&gt;
        &lt;/x-slot&gt;
    &lt;/x-tabler::cards.header&gt;
    &lt;x-tabler::cards.body&gt;
        Card content with features and benefits
    &lt;/x-tabler::cards.body&gt;
    &lt;x-tabler::cards.progress :value="60" color="success" /&gt;
    &lt;x-tabler::cards.footer&gt;
        &lt;x-tabler::button color="primary" fullWidth&gt;Upgrade&lt;/x-tabler::button&gt;
    &lt;/x-tabler::cards.footer&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference Tables --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot>
                    <x-slot:subtitle>Complete list of available card component props</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>

                    {{-- Card Props --}}
                    <h4>Card (<code>&lt;x-tabler::cards.card&gt;</code>)</h4>
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
                                    <td><code>padding</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Card padding size. Options: <code>sm</code>, <code>md</code>,
                                        <code>lg</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>active</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Mark card as active (highlighted state)</td>
                                </tr>
                                <tr>
                                    <td><code>inactive</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Mark card as inactive (dimmed state)</td>
                                </tr>
                                <tr>
                                    <td><code>link</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Make entire card clickable (renders as <code>&lt;a&gt;</code> element)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Header Props --}}
                    <h4 class="mt-4">Card Header (<code>&lt;x-tabler::cards.header&gt;</code>)</h4>
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
                                    <td><code>light</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use light header style with background</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-secondary"><strong>Slots:</strong> <code>title</code>, <code>subtitle</code>,
                        <code>actions</code>, <code>default</code>
                    </p>

                    {{-- Body Props --}}
                    <h4 class="mt-4">Card Body (<code>&lt;x-tabler::cards.body&gt;</code>)</h4>
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
                                    <td><code>scrollable</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Enable scrollable content with max-height</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Footer Props --}}
                    <h4 class="mt-4">Card Footer (<code>&lt;x-tabler::cards.footer&gt;</code>)</h4>
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
                                    <td><code>transparent</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Remove background color</td>
                                </tr>
                                <tr>
                                    <td><code>borderless</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Remove top border</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Image Props --}}
                    <h4 class="mt-4">Card Image (<code>&lt;x-tabler::cards.img&gt;</code>)</h4>
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
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Image source URL</td>
                                </tr>
                                <tr>
                                    <td><code>alt</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>''</code></td>
                                    <td>Image alt text for accessibility</td>
                                </tr>
                                <tr>
                                    <td><code>position</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'top'</code></td>
                                    <td>Image position. Options: <code>top</code>, <code>bottom</code>,
                                        <code>start</code>, <code>end</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>responsive</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Enable responsive aspect ratio container</td>
                                </tr>
                                <tr>
                                    <td><code>ratio</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Aspect ratio. Options: <code>21x9</code>, <code>16x9</code>,
                                        <code>4x3</code>, <code>1x1</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Stamp Props --}}
                    <h4 class="mt-4">Card Stamp (<code>&lt;x-tabler::cards.stamp&gt;</code>)</h4>
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
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Tabler icon name (without <code>tabler-</code> prefix)</td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'primary'</code></td>
                                    <td>Background color. Options: any Tabler color</td>
                                </tr>
                                <tr>
                                    <td><code>large</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use larger stamp size</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Status Props --}}
                    <h4 class="mt-4">Card Status (<code>&lt;x-tabler::cards.status&gt;</code>)</h4>
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
                                    <td><code>position</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'top'</code></td>
                                    <td>Status bar position. Options: <code>top</code>, <code>start</code>,
                                        <code>bottom</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'primary'</code></td>
                                    <td>Status bar color. Options: any Tabler color</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Progress Props --}}
                    <h4 class="mt-4">Card Progress (<code>&lt;x-tabler::cards.progress&gt;</code>)</h4>
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
                                    <td><code>value</code></td>
                                    <td><span class="badge bg-green-lt">int|float</span></td>
                                    <td><code>0</code></td>
                                    <td>Progress percentage (0-100)</td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'primary'</code></td>
                                    <td>Progress bar color. Options: any Tabler color</td>
                                </tr>
                                <tr>
                                    <td><code>size</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>'sm'</code></td>
                                    <td>Progress bar size. Options: <code>sm</code> or omit for default</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Usage Notes --}}
                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>All card components support the standard <code>$attributes</code> bag for custom
                                classes, IDs, and data attributes.
                            </li>
                            <li>Icons in stamps use the <code>secondnetwork/blade-tabler-icons</code> package.
                                Icon names should be provided without the <code>tabler-</code> prefix.
                            </li>
                            <li>Colors can be any valid Tabler color: <code>primary</code>,
                                <code>secondary</code>, <code>success</code>, <code>danger</code>,
                                <code>warning</code>, <code>info</code>, <code>light</code>, <code>dark</code>,
                                <code>blue</code>, <code>azure</code>, <code>indigo</code>, <code>purple</code>,
                                <code>pink</code>, <code>red</code>, <code>orange</code>, <code>yellow</code>,
                                <code>lime</code>, <code>green</code>, <code>teal</code>, <code>cyan</code>,
                                <code>white</code>.
                            </li>
                            <li>When <code>link</code> is true, the card renders as an <code>&lt;a&gt;</code>
                                element. Make sure to provide an <code>href</code> attribute.
                            </li>
                            <li>The <code>active</code> and <code>inactive</code> props are mutually exclusive -
                                use one or neither.
                            </li>
                            <li>Card padding props (<code>sm</code>, <code>md</code>, <code>lg</code>) apply to
                                the entire card wrapper, not individual sections.
                            </li>
                            <li>Progress bars should be placed at the bottom of cards (after body/footer) for
                                proper visual alignment.
                            </li>
                            <li>Status indicators should be placed at the very beginning of card content for
                                proper positioning.
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
                                    <td><code>card-stacked</code></td>
                                    <td>Add stacked shadow layers effect</td>
                                </tr>
                                <tr>
                                    <td><code>card-borderless</code></td>
                                    <td>Remove card border</td>
                                </tr>
                                <tr>
                                    <td><code>card-link-rotate</code></td>
                                    <td>Rotation effect on hover (requires <code>link</code> prop)</td>
                                </tr>
                                <tr>
                                    <td><code>card-link-pop</code></td>
                                    <td>Pop effect on hover (requires <code>link</code> prop)</td>
                                </tr>
                                <tr>
                                    <td><code>card-rotate-start</code></td>
                                    <td>Rotation effect positioned at start</td>
                                </tr>
                                <tr>
                                    <td><code>card-rotate-end</code></td>
                                    <td>Rotation effect positioned at end</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Color Classes</h4>
                        <p class="text-secondary">
                            <strong>Available background colors:</strong>
                            <code>bg-primary</code>, <code>bg-secondary</code>, <code>bg-success</code>,
                            <code>bg-danger</code>,
                            <code>bg-warning</code>, <code>bg-info</code>, <code>bg-light</code>,
                            <code>bg-dark</code>,
                            <code>bg-blue</code>, <code>bg-azure</code>, <code>bg-indigo</code>,
                            <code>bg-purple</code>,
                            <code>bg-pink</code>, <code>bg-red</code>, <code>bg-orange</code>,
                            <code>bg-yellow</code>,
                            <code>bg-lime</code>, <code>bg-green</code>, <code>bg-teal</code>,
                            <code>bg-cyan</code>
                        </p>
                        <p class="text-secondary mt-2">
                            <strong>Light background variants:</strong>
                            Append <code>-lt</code> to any color above (e.g., <code>bg-primary-lt</code>,
                            <code>bg-success-lt</code>)
                        </p>
                        <p class="text-secondary mt-2">
                            <strong>Text colors:</strong>
                            <code>text-primary</code>, <code>text-success</code>, <code>text-danger</code>,
                            <code>text-muted</code>, <code>text-secondary</code>, etc.
                        </p>
                        <p class="text-secondary mt-2">
                            <strong>Foreground colors:</strong>
                            <code>text-primary-fg</code> - Optimal contrast text color for colored backgrounds
                        </p>
                    </div>

                    <div class="mt-4">
                        <h4>Utility Classes</h4>
                        <ul class="text-secondary">
                            <li><code>mb-2</code>, <code>mt-2</code>, <code>me-2</code>, <code>ms-2</code> -
                                Margin utilities for spacing
                            </li>
                            <li><code>shadow-sm</code>, <code>shadow</code>, <code>shadow-lg</code> - Shadow
                                effects (small, default, large)
                            </li>
                            <li><code>d-flex</code>, <code>d-block</code>, <code>d-none</code> - Display
                                utilities
                            </li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
