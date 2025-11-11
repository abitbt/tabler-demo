{{--
    Timeline Component Demo

    Component: <x-tabler::timeline>
    Location: tabler-blade/stubs/resources/views/tabler/timeline.blade.php
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Timeline" subtitle="Visualize events and processes chronologically" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Basic Timeline --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Timeline</x-slot>
                    <x-slot:subtitle>Timeline with icons and event cards</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::timeline>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-x-lt">
                                <x-tabler-brand-x class="icon" />
                            </div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary float-end">10 hrs ago</div>
                                    <h4>+1150 Followers</h4>
                                    <p class="text-secondary">You're getting more and more followers, keep it up!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon">
                                <x-tabler-briefcase class="icon" />
                            </div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary float-end">2 hrs ago</div>
                                    <h4>+3 New Products were added!</h4>
                                    <p class="text-secondary">Congratulations!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon">
                                <x-tabler-check class="icon" />
                            </div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary float-end">1 day ago</div>
                                    <h4>Database backup completed!</h4>
                                    <p class="text-secondary">Download the <a href="#">latest backup</a>.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-facebook-lt">
                                <x-tabler-brand-facebook class="icon" />
                            </div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary float-end">1 day ago</div>
                                    <h4>+290 Page Likes</h4>
                                    <p class="text-secondary">This is great, keep it up!</p>
                                </div>
                            </div>
                        </li>
                    </x-tabler::timeline>
                </x-tabler::cards.body>
            </x-tabler::cards.card>

            <x-tabler::cards.card class="mt-2">
                <x-tabler::cards.body>
                    <pre class="mb-0 rounded p-3"><code>&lt;x-tabler::timeline&gt;
    &lt;li class="timeline-event"&gt;
        &lt;div class="timeline-event-icon bg-x-lt"&gt;
            &lt;x-tabler-brand-x class="icon" /&gt;
        &lt;/div&gt;
        &lt;div class="card timeline-event-card"&gt;
            &lt;div class="card-body"&gt;
                &lt;div class="text-secondary float-end"&gt;10 hrs ago&lt;/div&gt;
                &lt;h4&gt;+1150 Followers&lt;/h4&gt;
                &lt;p class="text-secondary"&gt;You're getting more followers!&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    ...
&lt;/x-tabler::timeline&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Simple Timeline --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Simple Timeline</x-slot>
                    <x-slot:subtitle>Timeline without icon circles</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::timeline simple>
                        <li class="timeline-event">
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary">8:00 AM - Morning standup</div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary">10:30 AM - Client call</div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary">2:00 PM - Team meeting</div>
                                </div>
                            </div>
                        </li>
                    </x-tabler::timeline>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;x-tabler::timeline simple&gt;
    &lt;li class="timeline-event"&gt;
        &lt;div class="card timeline-event-card"&gt;
            &lt;div class="card-body"&gt;
                &lt;div class="text-secondary"&gt;8:00 AM - Morning standup&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    ...
&lt;/x-tabler::timeline&gt;</code></pre>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Timeline with Different Icon Styles --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Icon Background Colors</x-slot>
                    <x-slot:subtitle>Various background color options</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::timeline>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-primary-lt">
                                <x-tabler-check class="icon" />
                            </div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <h5 class="mb-0">Primary background</h5>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-success-lt">
                                <x-tabler-circle-check class="icon" />
                            </div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <h5 class="mb-0">Success background</h5>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-danger-lt">
                                <x-tabler-alert-circle class="icon" />
                            </div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <h5 class="mb-0">Danger background</h5>
                                </div>
                            </div>
                        </li>
                    </x-tabler::timeline>

                    <div class="mt-3">
                        <pre class="rounded p-3"><code>&lt;div class="timeline-event-icon bg-primary-lt"&gt;...&lt;/div&gt;
&lt;div class="timeline-event-icon bg-success-lt"&gt;...&lt;/div&gt;
&lt;div class="timeline-event-icon bg-danger-lt"&gt;...&lt;/div&gt;</code></pre>
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
                                    <td><code>simple</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use simple timeline style (hides icon circles)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>HTML Structure</h4>
                        <ul class="text-secondary">
                            <li>Timeline wrapper uses <code>&lt;ul&gt;</code> element</li>
                            <li>Each event uses <code>&lt;li class="timeline-event"&gt;</code></li>
                            <li>Icons go in <code>&lt;div class="timeline-event-icon"&gt;</code></li>
                            <li>Content goes in <code>&lt;div class="card timeline-event-card"&gt;</code></li>
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
                                    <td><code>timeline</code></td>
                                    <td>Base timeline class (applied automatically to &lt;ul&gt;)</td>
                                </tr>
                                <tr>
                                    <td><code>timeline-simple</code></td>
                                    <td>Simple timeline without icons (also available via simple prop)</td>
                                </tr>
                                <tr>
                                    <td><code>timeline-event</code></td>
                                    <td>Individual timeline event (use on &lt;li&gt; elements)</td>
                                </tr>
                                <tr>
                                    <td><code>timeline-event-icon</code></td>
                                    <td>Icon wrapper for timeline events</td>
                                </tr>
                                <tr>
                                    <td><code>timeline-event-card</code></td>
                                    <td>Card wrapper for event content</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Icon Background Colors</h4>
                        <p class="text-secondary">Apply to <code>.timeline-event-icon</code> for colored backgrounds:</p>
                        <ul class="text-secondary">
                            <li><code>bg-primary-lt</code>, <code>bg-secondary-lt</code>, <code>bg-success-lt</code>,
                                <code>bg-danger-lt</code>, <code>bg-warning-lt</code>, <code>bg-info-lt</code>
                            </li>
                            <li><code>bg-blue-lt</code>, <code>bg-azure-lt</code>, <code>bg-indigo-lt</code>,
                                <code>bg-purple-lt</code>, <code>bg-pink-lt</code>, <code>bg-red-lt</code>,
                                <code>bg-orange-lt</code>, <code>bg-yellow-lt</code>, <code>bg-lime-lt</code>,
                                <code>bg-green-lt</code>, <code>bg-teal-lt</code>, <code>bg-cyan-lt</code>
                            </li>
                            <li><code>bg-facebook-lt</code>, <code>bg-twitter-lt</code>, <code>bg-x-lt</code>,
                                <code>bg-linkedin-lt</code>, <code>bg-github-lt</code>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Content Styling</h4>
                        <ul class="text-secondary">
                            <li><code>text-secondary</code> - Secondary text color (great for timestamps)</li>
                            <li><code>float-end</code> - Float timestamp to the right</li>
                            <li><code>mt-{size}</code>, <code>mb-{size}</code> - Margin utilities (size: 0-5)</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
