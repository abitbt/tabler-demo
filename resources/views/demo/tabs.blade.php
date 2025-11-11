{{--
    Tabs Demo

    Comprehensive showcase of all tabs component variations, states, and features.
    Based on Tabler UI tabs patterns with Laravel Blade components.

    Components:
    - <x-tabler::tabs.tabs>
    - <x-tabler::tabs.nav>
    - <x-tabler::tabs.nav-item>
    - <x-tabler::tabs.content>
    - <x-tabler::tabs.pane>

    Locations: tabler-blade/stubs/resources/views/tabler/tabs/
--}}

@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Tabs Components" subtitle="Comprehensive showcase of all tabs variations" />
@endsection

@section('content')
    <div class="row row-cards">

        {{-- Basic Tabs in Card with Settings Icon --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard>
                        <x-tabler::tabs.nav-item href="#tabs-home-1" active>Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-1">Profile</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-settings-1" icon="settings" iconOnly class="ms-auto" />
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-1" active>
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies
                                fringilla at sed facilisis lacus pellentesque purus nibh
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-1">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem
                                nunc amet, pellentesque id egestas velit sed
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-settings-1">
                            <h4>Settings tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit
                                mauris accumsan nibh habitant senectus
                            </div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Tabs with flex-row-reverse --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard class="flex-row-reverse">
                        <x-tabler::tabs.nav-item href="#tabs-home-2" active>Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-2">Profile</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-settings-2" icon="settings" iconOnly class="me-auto" />
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-2" active>
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies
                                fringilla at sed facilisis lacus pellentesque purus nibh
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-2">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem
                                nunc amet, pellentesque id egestas velit sed
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-settings-2">
                            <h4>Settings tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit
                                mauris accumsan nibh habitant senectus
                            </div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Tabs with Icons --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard>
                        <x-tabler::tabs.nav-item href="#tabs-home-3" active icon="home">Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-3" icon="user">Profile</x-tabler::tabs.nav-item>
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-3" active>
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies
                                fringilla at sed facilisis lacus pellentesque purus nibh
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-3">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem
                                nunc amet, pellentesque id egestas velit sed
                            </div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Tabs with nav-fill --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard fill>
                        <x-tabler::tabs.nav-item href="#tabs-home-4" active>Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-4">Profile</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-activity-4">Activity</x-tabler::tabs.nav-item>
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-4" active>
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies
                                fringilla at sed facilisis lacus pellentesque purus nibh
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-4">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem
                                nunc amet, pellentesque id egestas velit sed
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-activity-4">
                            <h4>Activity tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit
                                mauris accumsan nibh habitant senectus
                            </div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Tabs with Disabled Tab --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard fill>
                        <x-tabler::tabs.nav-item href="#tabs-home-5" active>Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-5">Profile</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-activity-5" disabled>Disabled</x-tabler::tabs.nav-item>
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-5" active>
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies
                                fringilla at sed facilisis lacus pellentesque purus nibh
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-5">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem
                                nunc amet, pellentesque id egestas velit sed
                            </div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Tabs with Icons and nav-fill --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard fill>
                        <x-tabler::tabs.nav-item href="#tabs-home-6" active icon="home">Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-6" icon="user">Profile</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-activity-6" icon="activity">Activity
                        </x-tabler::tabs.nav-item>
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-6" active>
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies
                                fringilla at sed facilisis lacus pellentesque purus nibh
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-6">
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem
                                nunc amet, pellentesque id egestas velit sed
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-activity-6">
                            <h4>Activity tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit
                                mauris accumsan nibh habitant senectus
                            </div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Tabs with Fade Transition --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard>
                        <x-tabler::tabs.nav-item href="#tabs-home-7" active>Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-7">Profile</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-activity-7">Activity</x-tabler::tabs.nav-item>
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-7" active fade>
                            <h4>Home tab</h4>
                            <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies
                                fringilla at sed facilisis lacus pellentesque purus nibh
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-7" fade>
                            <h4>Profile tab</h4>
                            <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem
                                nunc amet, pellentesque id egestas velit sed
                            </div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-activity-7" fade>
                            <h4>Activity tab</h4>
                            <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit
                                mauris accumsan nibh habitant senectus
                            </div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Icon-Only Tabs --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard>
                        <x-tabler::tabs.nav-item href="#tabs-home-8" active icon="home" iconOnly />
                        <x-tabler::tabs.nav-item href="#tabs-profile-8" icon="user" iconOnly />
                        <x-tabler::tabs.nav-item href="#tabs-bell-8" icon="bell" iconOnly />
                        <x-tabler::tabs.nav-item href="#tabs-settings-8" icon="settings" iconOnly />
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-8" active>
                            <h4>Home tab</h4>
                            <div>Icon-only tabs with automatic aria-label for accessibility</div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-8">
                            <h4>Profile tab</h4>
                            <div>User profile and account settings</div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-bell-8">
                            <h4>Notifications</h4>
                            <div>Recent notifications and alerts</div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-settings-8">
                            <h4>Settings</h4>
                            <div>Application configuration</div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Pills Style --}}
        <div class="col-md-4">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-tabler::tabs.nav inCard pills>
                        <x-tabler::tabs.nav-item href="#tabs-home-9" active>Home</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-profile-9">Profile</x-tabler::tabs.nav-item>
                        <x-tabler::tabs.nav-item href="#tabs-activity-9">Activity</x-tabler::tabs.nav-item>
                    </x-tabler::tabs.nav>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::tabs.content>
                        <x-tabler::tabs.pane id="tabs-home-9" active>
                            <h4>Home tab</h4>
                            <div>Pills style navigation with rounded backgrounds</div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-profile-9">
                            <h4>Profile tab</h4>
                            <div>Alternative visual style for tab navigation</div>
                        </x-tabler::tabs.pane>
                        <x-tabler::tabs.pane id="tabs-activity-9">
                            <h4>Activity tab</h4>
                            <div>Activity log and recent changes</div>
                        </x-tabler::tabs.pane>
                    </x-tabler::tabs.content>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Code Examples --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Usage Examples</x-slot>
                    <x-slot:subtitle>Code snippets for common tab patterns</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h4>Basic Tabs in Card</h4>
                    <pre class="mb-4 rounded p-3"><code>&lt;x-tabler::cards.card&gt;
    &lt;x-tabler::cards.header&gt;
        &lt;x-tabler::tabs.nav inCard&gt;
            &lt;x-tabler::tabs.nav-item href="#home" active&gt;Home&lt;/x-tabler::tabs.nav-item&gt;
            &lt;x-tabler::tabs.nav-item href="#profile"&gt;Profile&lt;/x-tabler::tabs.nav-item&gt;
            &lt;x-tabler::tabs.nav-item href="#settings" icon="settings" iconOnly class="ms-auto" /&gt;
        &lt;/x-tabler::tabs.nav&gt;
    &lt;/x-tabler::cards.header&gt;
    &lt;x-tabler::cards.body&gt;
        &lt;x-tabler::tabs.content&gt;
            &lt;x-tabler::tabs.pane id="home" active&gt;
                &lt;h4&gt;Home tab&lt;/h4&gt;
                &lt;div&gt;Home content...&lt;/div&gt;
            &lt;/x-tabler::tabs.pane&gt;
            &lt;x-tabler::tabs.pane id="profile"&gt;
                &lt;h4&gt;Profile tab&lt;/h4&gt;
                &lt;div&gt;Profile content...&lt;/div&gt;
            &lt;/x-tabler::tabs.pane&gt;
            &lt;x-tabler::tabs.pane id="settings"&gt;
                &lt;h4&gt;Settings tab&lt;/h4&gt;
                &lt;div&gt;Settings content...&lt;/div&gt;
            &lt;/x-tabler::tabs.pane&gt;
        &lt;/x-tabler::tabs.content&gt;
    &lt;/x-tabler::cards.body&gt;
&lt;/x-tabler::cards.card&gt;</code></pre>

                    <h4>Tabs with Icons</h4>
                    <pre class="mb-4 rounded p-3"><code>&lt;x-tabler::tabs.nav-item href="#home" active icon="home"&gt;Home&lt;/x-tabler::tabs.nav-item&gt;
&lt;x-tabler::tabs.nav-item href="#profile" icon="user"&gt;Profile&lt;/x-tabler::tabs.nav-item&gt;</code></pre>

                    <h4>Icon-Only Tabs</h4>
                    <pre class="mb-4 rounded p-3"><code>&lt;x-tabler::tabs.nav-item href="#home" active icon="home" iconOnly /&gt;
&lt;x-tabler::tabs.nav-item href="#settings" icon="settings" iconOnly class="ms-auto" /&gt;</code></pre>

                    <h4>Disabled Tabs</h4>
                    <pre class="mb-4 rounded p-3"><code>&lt;x-tabler::tabs.nav-item href="#tab" disabled&gt;Disabled&lt;/x-tabler::tabs.nav-item&gt;</code></pre>

                    <h4>Pills Style</h4>
                    <pre class="mb-4 rounded p-3"><code>&lt;x-tabler::tabs.nav inCard pills&gt;
    &lt;x-tabler::tabs.nav-item href="#tab1" active&gt;Tab 1&lt;/x-tabler::tabs.nav-item&gt;
    &lt;x-tabler::tabs.nav-item href="#tab2"&gt;Tab 2&lt;/x-tabler::tabs.nav-item&gt;
&lt;/x-tabler::tabs.nav&gt;</code></pre>

                    <h4>Fill and Justified Layouts</h4>
                    <pre class="rounded p-3"><code>&lt;x-tabler::tabs.nav inCard fill&gt;...&lt;/x-tabler::tabs.nav&gt;
&lt;x-tabler::tabs.nav inCard justified&gt;...&lt;/x-tabler::tabs.nav&gt;</code></pre>
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
                    <h4>tabs.tabs Component</h4>
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
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Optional container ID attribute</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">tabs.nav Component</h4>
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
                                    <td><code>inCard</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Whether tabs are inside a card header (adds card-header-tabs class)</td>
                                </tr>
                                <tr>
                                    <td><code>pills</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use pills style instead of tabs (rounded background style)</td>
                                </tr>
                                <tr>
                                    <td><code>fill</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Make tabs fill full width proportionally based on content</td>
                                </tr>
                                <tr>
                                    <td><code>justified</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Make tabs equal width regardless of content length</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">tabs.nav-item Component</h4>
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
                                    <td><code>'#'</code></td>
                                    <td>Target tab pane ID (e.g., "#home"). Must match pane's id attribute</td>
                                </tr>
                                <tr>
                                    <td><code>active</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Whether this tab is currently active/selected</td>
                                </tr>
                                <tr>
                                    <td><code>disabled</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Disable the tab link (adds disabled class, tabindex="-1", aria-disabled="true")
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Tabler icon name (without 'tabler-' prefix, e.g., "home", "user")</td>
                                </tr>
                                <tr>
                                    <td><code>iconOnly</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Show only icon without text (automatically adds aria-label for accessibility)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">tabs.content Component</h4>
                    <p class="text-secondary">Container for tab panes. No props - accepts only the default slot.</p>

                    <h4 class="mt-4">tabs.pane Component</h4>
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
                                    <td><span class="badge bg-azure-lt">string|null</span></td>
                                    <td><code>null</code></td>
                                    <td>Unique pane ID (must match href in nav-item without the # symbol)</td>
                                </tr>
                                <tr>
                                    <td><code>active</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Whether this pane is currently active/visible</td>
                                </tr>
                                <tr>
                                    <td><code>fade</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>true</code></td>
                                    <td>Enable fade transition (automatically adds show class when active)</td>
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
                                        <th>Component</th>
                                        <th>Slot</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>tabs.tabs</code></td>
                                        <td><code>default</code></td>
                                        <td>Contains nav and content components</td>
                                    </tr>
                                    <tr>
                                        <td><code>tabs.nav</code></td>
                                        <td><code>default</code></td>
                                        <td>Contains nav-item components</td>
                                    </tr>
                                    <tr>
                                        <td><code>tabs.nav-item</code></td>
                                        <td><code>default</code></td>
                                        <td>Tab label text (hidden when iconOnly is true)</td>
                                    </tr>
                                    <tr>
                                        <td><code>tabs.content</code></td>
                                        <td><code>default</code></td>
                                        <td>Contains pane components</td>
                                    </tr>
                                    <tr>
                                        <td><code>tabs.pane</code></td>
                                        <td><code>default</code></td>
                                        <td>Tab pane content (any HTML or components)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4>Usage Notes</h4>
                        <ul class="text-secondary">
                            <li>Tabs require Bootstrap 5 JavaScript to function properly</li>
                            <li>Icons use the <code>secondnetwork/blade-tabler-icons</code> package</li>
                            <li>Icon names should be provided without the <code>tabler-</code> prefix</li>
                            <li>Each tab nav-item's <code>href</code> must match a pane's <code>id</code> (href includes
                                #, id does not)
                            </li>
                            <li>First tab should have <code>active</code> prop on both nav-item and pane</li>
                            <li>When <code>iconOnly</code> is true, aria-label is automatically generated from icon name
                                for accessibility
                            </li>
                            <li>Use <code>class="ms-auto"</code> on nav-item to push tabs to the right (useful for
                                settings/action tabs)
                            </li>
                            <li>Pills can be combined with <code>inCard</code> to get <code>card-header-pills</code>
                                styling
                            </li>
                            <li>Fade transitions can be disabled by setting <code>:fade="false"</code> on panes</li>
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

                    <h4>Nav Classes (on tabs.nav)</h4>
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
                                    <td><code>flex-row-reverse</code></td>
                                    <td>Reverse the order of tabs (right to left)</td>
                                </tr>
                                <tr>
                                    <td><code>nav-fill</code></td>
                                    <td>Tabs fill full width proportionally (use prop instead: <code>fill</code>)</td>
                                </tr>
                                <tr>
                                    <td><code>nav-justified</code></td>
                                    <td>Tabs have equal width (use prop instead: <code>justified</code>)</td>
                                </tr>
                                <tr>
                                    <td><code>card-header-tabs</code></td>
                                    <td>Applied automatically when <code>inCard</code> prop is true</td>
                                </tr>
                                <tr>
                                    <td><code>card-header-pills</code></td>
                                    <td>Applied automatically when <code>inCard</code> and <code>pills</code> props are true
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Nav-Item Classes (on tabs.nav-item)</h4>
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
                                    <td><code>ms-auto</code></td>
                                    <td>Push tab to the right (useful for settings or action tabs)</td>
                                </tr>
                                <tr>
                                    <td><code>me-auto</code></td>
                                    <td>Push subsequent tabs to the right</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Pane Classes (on tabs.pane)</h4>
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
                                    <td><code>p-4</code>, <code>p-3</code></td>
                                    <td>Add padding inside tab pane (use Bootstrap spacing utilities)</td>
                                </tr>
                                <tr>
                                    <td><code>bg-light</code></td>
                                    <td>Add background color to tab pane</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <h4>Utility Classes</h4>
                        <p class="text-secondary">Standard Bootstrap utilities work on all tab components:</p>
                        <ul class="text-secondary">
                            <li><code>mb-3</code>, <code>mt-3</code> - Margin utilities for spacing around tab container
                            </li>
                            <li><code>border</code>, <code>border-top</code> - Add borders to tab content</li>
                            <li><code>shadow-sm</code> - Add subtle shadow to tab container or panes</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

    </div>
@endsection
