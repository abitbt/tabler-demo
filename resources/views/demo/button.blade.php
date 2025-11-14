<x-layouts.demo title="Button Component">
    <div class="row row-cards">
        {{-- Standard Buttons --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Standard Buttons</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button>Default</x-tabler::button>
                        <x-tabler::button color="primary">Primary</x-tabler::button>
                        <x-tabler::button color="secondary">Secondary</x-tabler::button>
                        <x-tabler::button color="success">Success</x-tabler::button>
                        <x-tabler::button color="warning">Warning</x-tabler::button>
                        <x-tabler::button color="danger">Danger</x-tabler::button>
                        <x-tabler::button color="info">Info</x-tabler::button>
                        <x-tabler::button color="dark">Dark</x-tabler::button>
                        <x-tabler::button color="light">Light</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Outline Buttons --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Outline Buttons</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button variant="outline">Default</x-tabler::button>
                        <x-tabler::button color="primary" variant="outline">Primary</x-tabler::button>
                        <x-tabler::button color="secondary" variant="outline">Secondary</x-tabler::button>
                        <x-tabler::button color="success" variant="outline">Success</x-tabler::button>
                        <x-tabler::button color="warning" variant="outline">Warning</x-tabler::button>
                        <x-tabler::button color="danger" variant="outline">Danger</x-tabler::button>
                        <x-tabler::button color="info" variant="outline">Info</x-tabler::button>
                        <x-tabler::button color="dark" variant="outline">Dark</x-tabler::button>
                        <x-tabler::button color="light" variant="outline">Light</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Ghost Buttons --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ghost Buttons</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button variant="ghost">Default</x-tabler::button>
                        <x-tabler::button color="primary" variant="ghost">Primary</x-tabler::button>
                        <x-tabler::button color="secondary" variant="ghost">Secondary</x-tabler::button>
                        <x-tabler::button color="success" variant="ghost">Success</x-tabler::button>
                        <x-tabler::button color="warning" variant="ghost">Warning</x-tabler::button>
                        <x-tabler::button color="danger" variant="ghost">Danger</x-tabler::button>
                        <x-tabler::button color="info" variant="ghost">Info</x-tabler::button>
                        <x-tabler::button color="dark" variant="ghost">Dark</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Button Shapes --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Button Shapes</h3>
                </div>
                <div class="card-body">
                    <div class="space-y">
                        <div class="btn-list">
                            <x-tabler::button color="primary">Default</x-tabler::button>
                            <x-tabler::button color="primary" shape="square">Square</x-tabler::button>
                            <x-tabler::button color="primary" shape="pill">Pill</x-tabler::button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Button Sizes --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Button Sizes</h3>
                </div>
                <div class="card-body">
                    <div class="space-y">
                        <div class="btn-list">
                            <x-tabler::button size="sm" color="primary">Small</x-tabler::button>
                            <x-tabler::button color="primary">Default</x-tabler::button>
                            <x-tabler::button size="lg" color="primary">Large</x-tabler::button>
                            <x-tabler::button size="xl" color="primary">Extra Large</x-tabler::button>
                        </div>
                        <div class="btn-list">
                            <x-tabler::button size="sm" color="primary" icon="star" iconOnly />
                            <x-tabler::button color="primary" icon="star" iconOnly />
                            <x-tabler::button size="lg" color="primary" icon="star" iconOnly />
                            <x-tabler::button size="xl" color="primary" icon="star" iconOnly />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Buttons with Icons --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Buttons with Icons</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button icon="upload">Upload</x-tabler::button>
                        <x-tabler::button color="warning" icon="heart">I like</x-tabler::button>
                        <x-tabler::button color="success" icon="check">I agree</x-tabler::button>
                        <x-tabler::button color="primary" icon="plus">More</x-tabler::button>
                        <x-tabler::button color="danger" icon="link">Link</x-tabler::button>
                        <x-tabler::button color="info" icon="message">Comment</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Icon-Only Buttons --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Icon-Only Buttons</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button color="primary" icon="activity" iconOnly>Activity</x-tabler::button>
                        <x-tabler::button color="github" icon="brand-github" iconOnly>GitHub</x-tabler::button>
                        <x-tabler::button color="success" icon="bell" iconOnly>Notifications</x-tabler::button>
                        <x-tabler::button color="warning" icon="star" iconOnly>Star</x-tabler::button>
                        <x-tabler::button color="danger" icon="trash" iconOnly>Delete</x-tabler::button>
                        <x-tabler::button color="purple" icon="chart-bar" iconOnly>Charts</x-tabler::button>
                        <x-tabler::button icon="git-merge" iconOnly>Merge</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Social Media Buttons --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Social Media Buttons</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button color="facebook" icon="brand-facebook">Facebook</x-tabler::button>
                        <x-tabler::button color="twitter" icon="brand-twitter">Twitter</x-tabler::button>
                        <x-tabler::button color="google" icon="brand-google">Google</x-tabler::button>
                        <x-tabler::button color="youtube" icon="brand-youtube">YouTube</x-tabler::button>
                        <x-tabler::button color="github" icon="brand-github">GitHub</x-tabler::button>
                        <x-tabler::button color="instagram" icon="brand-instagram">Instagram</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Button States --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Button States</h3>
                </div>
                <div class="card-body">
                    <div class="space-y">
                        <div class="btn-list">
                            <x-tabler::button color="primary">Normal</x-tabler::button>
                            <x-tabler::button color="primary" loading>Loading</x-tabler::button>
                            <x-tabler::button color="primary" disabled>Disabled</x-tabler::button>
                        </div>
                        <div class="btn-list">
                            <x-tabler::button color="primary" icon="plus" loading>Saving...</x-tabler::button>
                            <x-tabler::button color="danger" icon="trash" iconOnly loading>Delete</x-tabler::button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Buttons with End Icons --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Buttons with End Icons</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button iconEnd="arrow-right">Next</x-tabler::button>
                        <x-tabler::button iconEnd="chevron-right">Continue</x-tabler::button>
                        <x-tabler::button color="primary" iconEnd="external-link">Open</x-tabler::button>
                        <x-tabler::button color="success" iconEnd="download">Download</x-tabler::button>
                        <x-tabler::button icon="arrow-left">Previous</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Full Width Buttons --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Full Width Buttons</h3>
                </div>
                <div class="card-body">
                    <div class="space-y">
                        <x-tabler::button color="primary" fullWidth>Full Width Primary</x-tabler::button>
                        <x-tabler::button color="secondary" variant="outline" fullWidth>Full Width
                            Outline</x-tabler::button>
                        <x-tabler::button color="success" icon="check" fullWidth>Full Width with
                            Icon</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Button as Link --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Buttons as Links</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button href="/">Home</x-tabler::button>
                        <x-tabler::button href="/demo/button" color="primary">Current Page</x-tabler::button>
                        <x-tabler::button href="https://tabler.io" target="_blank" iconEnd="external-link">External
                            Link</x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Animated Buttons --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Buttons with Animations (Hover to see)</h3>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        <x-tabler::button class="btn-animate-icon" iconEnd="arrow-right">Save</x-tabler::button>
                        <x-tabler::button class="btn-animate-icon btn-animate-icon-rotate" icon="plus">Add
                        </x-tabler::button>
                        <x-tabler::button class="btn-animate-icon btn-animate-icon-shake" icon="bell">Notifications
                        </x-tabler::button>
                        <x-tabler::button class="btn-animate-icon btn-animate-icon-rotate" icon="settings">Settings
                        </x-tabler::button>
                        <x-tabler::button class="btn-animate-icon btn-animate-icon-pulse" icon="heart">Love
                        </x-tabler::button>
                        <x-tabler::button class="btn-animate-icon btn-animate-icon-rotate" icon="x">Close
                        </x-tabler::button>
                        <x-tabler::button class="btn-animate-icon btn-animate-icon-tada" icon="check">Confirm
                        </x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Button Lists --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Button Lists and Grouping</h3>
                </div>
                <div class="card-body">
                    <div class="space-y">
                        <div class="btn-list">
                            <x-tabler::button color="danger">Cancel</x-tabler::button>
                            <x-tabler::button>Save and Continue</x-tabler::button>
                            <x-tabler::button color="success">Save Changes</x-tabler::button>
                        </div>

                        <div class="btn-list justify-content-center">
                            <x-tabler::button>Save and Continue</x-tabler::button>
                            <x-tabler::button color="primary">Save Changes</x-tabler::button>
                        </div>

                        <div class="btn-list justify-content-end">
                            <x-tabler::button>Save and Continue</x-tabler::button>
                            <x-tabler::button color="primary">Save Changes</x-tabler::button>
                        </div>

                        <div class="btn-list">
                            <x-tabler::button color="danger" variant="outline"
                                class="me-auto">Delete</x-tabler::button>
                            <x-tabler::button>Save and Continue</x-tabler::button>
                            <x-tabler::button color="primary">Save Changes</x-tabler::button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Livewire Integration --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Livewire Integration</h3>
                    <div class="card-subtitle">All wire:* attributes pass through automatically</div>
                </div>
                <div class="card-body">
                    <div class="space-y">
                        <div class="btn-list">
                            <x-tabler::button wire:click="save" color="primary">
                                wire:click="save"
                            </x-tabler::button>
                            <x-tabler::button wire:click="delete" wire:confirm="Are you sure?" color="danger">
                                wire:confirm
                            </x-tabler::button>
                            <x-tabler::button wire:loading.attr="disabled" color="success">
                                wire:loading.attr
                            </x-tabler::button>
                        </div>

                        <pre class="bg-light rounded p-3"><code>&lt;x-tabler::button wire:click="save" color="primary"&gt;
    Save Changes
&lt;/x-tabler::button&gt;

&lt;x-tabler::button wire:click="delete" wire:confirm="Are you sure?" color="danger"&gt;
    Delete Item
&lt;/x-tabler::button&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bootstrap Integration --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bootstrap Integration</h3>
                    <div class="card-subtitle">Using data-bs-* attributes for modals, dropdowns, etc.</div>
                </div>
                <div class="card-body">
                    <div class="btn-list">
                        {{-- Dropdown Button --}}
                        <div class="dropdown">
                            <x-tabler::button data-bs-toggle="dropdown" iconEnd="chevron-down">
                                Dropdown
                            </x-tabler::button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                        {{-- Modal Trigger Button --}}
                        <x-tabler::button data-bs-toggle="modal" data-bs-target="#exampleModal" color="primary">
                            Open Modal
                        </x-tabler::button>

                        {{-- Tooltip Button --}}
                        <x-tabler::button data-bs-toggle="tooltip" data-bs-title="This is a tooltip" color="info">
                            Hover for Tooltip
                        </x-tabler::button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Code Examples --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Usage Examples</h3>
                </div>
                <div class="card-body">
                    <pre class="bg-light rounded p-3"><code>{{-- Basic Button --}}
&lt;x-tabler::button&gt;Click Me&lt;/x-tabler::button&gt;

{{-- Primary Button --}}
&lt;x-tabler::button color="primary"&gt;Save Changes&lt;/x-tabler::button&gt;

{{-- Button as Link --}}
&lt;x-tabler::button href="/dashboard"&gt;Dashboard&lt;/x-tabler::button&gt;

{{-- Outline Variant --}}
&lt;x-tabler::button color="danger" variant="outline"&gt;Cancel&lt;/x-tabler::button&gt;

{{-- Button with Icon --}}
&lt;x-tabler::button color="primary" icon="plus"&gt;Add Item&lt;/x-tabler::button&gt;

{{-- Icon-Only Button --}}
&lt;x-tabler::button color="danger" icon="trash" iconOnly&gt;Delete&lt;/x-tabler::button&gt;

{{-- Loading State --}}
&lt;x-tabler::button color="primary" loading&gt;Processing...&lt;/x-tabler::button&gt;

{{-- Different Sizes --}}
&lt;x-tabler::button size="sm"&gt;Small&lt;/x-tabler::button&gt;
&lt;x-tabler::button size="lg"&gt;Large&lt;/x-tabler::button&gt;

{{-- Custom Classes --}}
&lt;x-tabler::button color="primary" class="btn-animate-icon"&gt;
    Animated Button
&lt;/x-tabler::button&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>

    {{-- Example Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Example Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This modal was triggered by a button component!
                </div>
                <div class="modal-footer">
                    <x-tabler::button data-bs-dismiss="modal">Close</x-tabler::button>
                    <x-tabler::button color="primary">Save changes</x-tabler::button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Initialize tooltips
            document.addEventListener('DOMContentLoaded', function() {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            });
        </script>
    @endpush
</x-layouts.demo>
