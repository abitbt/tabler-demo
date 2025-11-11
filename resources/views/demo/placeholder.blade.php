{{--
    Placeholder Component Demo
    Component: <x-tabler::placeholder>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Placeholder" subtitle="Loading skeleton for content that hasn't loaded yet" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Card with Image Placeholder on Top --}}
        @for($i = 0; $i < 4; $i++)
        <div class="col-3">
            <div class="card placeholder-glow">
                <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                <x-tabler::cards.body>
                    <div class="placeholder col-9 mb-3"></div>
                    <div class="placeholder placeholder-xs col-10"></div>
                    <div class="placeholder placeholder-xs col-11"></div>

                    <div class="mt-3">
                        <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                    </div>
                </x-tabler::cards.body>
            </div>
        </div>
        @endfor

        {{-- Card with Avatar and Text (Small) --}}
        <div class="col-4">
            <div class="row row-cards">
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.body>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-rounded placeholder"></div>
                                </div>
                                <div class="col">
                                    <div class="placeholder placeholder-xs col-9"></div>
                                    <div class="placeholder placeholder-xs col-7"></div>
                                </div>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.body class="text-end placeholder-glow">
                            <div class="placeholder col-9 mb-3"></div>
                            <div class="placeholder placeholder-xs col-10"></div>
                            <div class="placeholder placeholder-xs col-12"></div>
                            <div class="placeholder placeholder-xs col-11"></div>
                            <div class="placeholder placeholder-xs col-8"></div>
                            <div class="placeholder placeholder-xs col-10"></div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>
            </div>
        </div>

        {{-- Card with Image on Side --}}
        <div class="col-4">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card placeholder-glow">
                        <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                        <x-tabler::cards.body>
                            <div class="placeholder col-9 mb-3"></div>
                            <div class="placeholder placeholder-xs col-10"></div>
                            <div class="placeholder placeholder-xs col-11"></div>

                            <div class="mt-3">
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                            </div>
                        </x-tabler::cards.body>
                    </div>
                </div>

                <div class="col-12">
                    <x-tabler::cards.card>
                        <div class="row g-0 align-items-center placeholder-glow">
                            <div class="col-3">
                                <div class="ratio ratio-1x1 card-img-start placeholder"></div>
                            </div>
                            <div class="col">
                                <x-tabler::cards.body>
                                    <div class="placeholder col-9 mb-3"></div>
                                    <div class="placeholder placeholder-xs col-10"></div>
                                    <div class="placeholder placeholder-xs col-11"></div>
                                </x-tabler::cards.body>
                            </div>
                        </div>
                    </x-tabler::cards.card>
                </div>
            </div>
        </div>

        {{-- Centered Avatar Card --}}
        <div class="col-4">
            <div class="row row-cards">
                <div class="col-12">
                    <x-tabler::cards.card>
                        <x-tabler::cards.body class="py-5 text-center">
                            <div>
                                <div class="avatar avatar-rounded avatar-lg placeholder mb-3"></div>
                            </div>
                            <div class="mt w-75 mx-auto">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                            </div>
                        </x-tabler::cards.body>
                    </x-tabler::cards.card>
                </div>

                <div class="col-12">
                    <x-tabler::cards.card>
                        <ul class="list-group list-group-flush placeholder-glow">
                            @for($i = 0; $i < 4; $i++)
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar avatar-rounded placeholder"></div>
                                    </div>
                                    <div class="col-7">
                                        <div class="placeholder placeholder-xs col-9"></div>
                                        <div class="placeholder placeholder-xs col-7"></div>
                                    </div>
                                    <div class="col-2 ms-auto text-end">
                                        <div class="placeholder placeholder-xs col-8"></div>
                                        <div class="placeholder placeholder-xs col-10"></div>
                                    </div>
                                </div>
                            </li>
                            @endfor
                        </ul>
                    </x-tabler::cards.card>
                </div>
            </div>
        </div>

        {{-- Code Examples --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Code Examples</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h4>Card with Image Placeholder</h4>
                    <pre><code>&lt;div class="card placeholder-glow"&gt;
    &lt;div class="ratio ratio-21x9 card-img-top placeholder"&gt;&lt;/div&gt;
    &lt;div class="card-body"&gt;
        &lt;div class="placeholder col-9 mb-3"&gt;&lt;/div&gt;
        &lt;div class="placeholder placeholder-xs col-10"&gt;&lt;/div&gt;
        &lt;div class="placeholder placeholder-xs col-11"&gt;&lt;/div&gt;

        &lt;div class="mt-3"&gt;
            &lt;a href="#" class="btn btn-primary disabled placeholder col-4"&gt;&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                    <h4 class="mt-4">Card with Avatar</h4>
                    <pre><code>&lt;div class="card"&gt;
    &lt;div class="card-body"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-auto"&gt;
                &lt;div class="avatar avatar-rounded placeholder"&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col"&gt;
                &lt;div class="placeholder placeholder-xs col-9"&gt;&lt;/div&gt;
                &lt;div class="placeholder placeholder-xs col-7"&gt;&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                    <h4 class="mt-4">List with Placeholders</h4>
                    <pre><code>&lt;ul class="list-group list-group-flush placeholder-glow"&gt;
    &lt;li class="list-group-item"&gt;
        &lt;div class="row align-items-center"&gt;
            &lt;div class="col-auto"&gt;
                &lt;div class="avatar avatar-rounded placeholder"&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col-7"&gt;
                &lt;div class="placeholder placeholder-xs col-9"&gt;&lt;/div&gt;
                &lt;div class="placeholder placeholder-xs col-7"&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col-2 ms-auto text-end"&gt;
                &lt;div class="placeholder placeholder-xs col-8"&gt;&lt;/div&gt;
                &lt;div class="placeholder placeholder-xs col-10"&gt;&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Available CSS Classes</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr><th>Class</th><th>Description</th></tr>
                            </thead>
                            <tbody>
                                <tr><td><code>placeholder</code></td><td>Base placeholder element</td></tr>
                                <tr><td><code>placeholder-glow</code></td><td>Container with glow animation</td></tr>
                                <tr><td><code>placeholder-wave</code></td><td>Container with wave animation</td></tr>
                                <tr><td><code>placeholder-xs</code></td><td>Extra small placeholder (thin height)</td></tr>
                                <tr><td><code>placeholder-sm</code></td><td>Small placeholder</td></tr>
                                <tr><td><code>placeholder-lg</code></td><td>Large placeholder</td></tr>
                                <tr><td><code>col-{1-12}</code></td><td>Width using Bootstrap grid columns (col-6 = 50% width)</td></tr>
                                <tr><td><code>w-{25,50,75,100}</code></td><td>Width using percentage utilities</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Image Placeholders</h4>
                    <ul class="text-secondary">
                        <li><code>ratio ratio-21x9</code> - Wide image placeholder (21:9 aspect ratio)</li>
                        <li><code>ratio ratio-16x9</code> - Standard image placeholder (16:9 aspect ratio)</li>
                        <li><code>ratio ratio-4x3</code> - Classic image placeholder (4:3 aspect ratio)</li>
                        <li><code>ratio ratio-1x1</code> - Square image placeholder</li>
                    </ul>

                    <h4 class="mt-4">Avatar Placeholders</h4>
                    <ul class="text-secondary">
                        <li><code>avatar placeholder</code> - Default size avatar placeholder</li>
                        <li><code>avatar avatar-sm placeholder</code> - Small avatar placeholder</li>
                        <li><code>avatar avatar-lg placeholder</code> - Large avatar placeholder</li>
                        <li><code>avatar avatar-xl placeholder</code> - Extra large avatar placeholder</li>
                        <li><code>avatar avatar-rounded placeholder</code> - Rounded avatar placeholder</li>
                    </ul>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
