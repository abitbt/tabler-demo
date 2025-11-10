<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabler UI - Button Component Demo</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="page">
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <div class="page-pretitle">Proof of Concept</div>
                            <h2 class="page-title">Tabler Button Component</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">
                        <!-- Solid Buttons -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Solid Buttons</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button color="primary">Primary</x-tabler::button>
                                        <x-tabler::button color="secondary">Secondary</x-tabler::button>
                                        <x-tabler::button color="success">Success</x-tabler::button>
                                        <x-tabler::button color="info">Info</x-tabler::button>
                                        <x-tabler::button color="warning">Warning</x-tabler::button>
                                        <x-tabler::button color="danger">Danger</x-tabler::button>
                                        <x-tabler::button color="light">Light</x-tabler::button>
                                        <x-tabler::button color="dark">Dark</x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Outline Buttons -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Outline Buttons</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button variant="outline" color="primary">Primary</x-tabler::button>
                                        <x-tabler::button variant="outline" color="secondary">Secondary</x-tabler::button>
                                        <x-tabler::button variant="outline" color="success">Success</x-tabler::button>
                                        <x-tabler::button variant="outline" color="info">Info</x-tabler::button>
                                        <x-tabler::button variant="outline" color="warning">Warning</x-tabler::button>
                                        <x-tabler::button variant="outline" color="danger">Danger</x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ghost Buttons -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Ghost Buttons</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button variant="ghost" color="primary">Primary</x-tabler::button>
                                        <x-tabler::button variant="ghost" color="secondary">Secondary</x-tabler::button>
                                        <x-tabler::button variant="ghost" color="success">Success</x-tabler::button>
                                        <x-tabler::button variant="ghost" color="danger">Danger</x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button Sizes -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Button Sizes</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button size="sm" color="primary">Small</x-tabler::button>
                                        <x-tabler::button color="primary">Default</x-tabler::button>
                                        <x-tabler::button size="lg" color="primary">Large</x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button Shapes -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Button Shapes</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button color="primary">Default</x-tabler::button>
                                        <x-tabler::button color="primary" pill>Pill</x-tabler::button>
                                        <x-tabler::button color="primary" square>Square</x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button States -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Button States</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button color="primary">Normal</x-tabler::button>
                                        <x-tabler::button color="primary" loading>Loading</x-tabler::button>
                                        <x-tabler::button color="primary" disabled>Disabled</x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button Links -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Button Links</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button href="#" color="primary">Link Button</x-tabler::button>
                                        <x-tabler::button href="#" variant="outline" color="success">Outline Link</x-tabler::button>
                                        <x-tabler::button variant="link">Link Style</x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Custom Classes -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Custom Classes & Attributes</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <x-tabler::button color="primary" class="mb-2">With Margin</x-tabler::button>
                                        <x-tabler::button color="success" id="my-button" data-action="save">
                                            With Custom Attributes
                                        </x-tabler::button>
                                        <x-tabler::button
                                            color="danger"
                                            onclick="alert('Button clicked!')"
                                        >
                                            With onClick
                                        </x-tabler::button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Component Props Documentation -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Component API</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th>Prop</th>
                                                    <th>Type</th>
                                                    <th>Default</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><code>color</code></td>
                                                    <td>string</td>
                                                    <td>primary</td>
                                                    <td>primary, secondary, success, info, warning, danger, light, dark</td>
                                                </tr>
                                                <tr>
                                                    <td><code>variant</code></td>
                                                    <td>string</td>
                                                    <td>solid</td>
                                                    <td>solid, outline, ghost, link</td>
                                                </tr>
                                                <tr>
                                                    <td><code>size</code></td>
                                                    <td>string</td>
                                                    <td>null</td>
                                                    <td>sm, md, lg, xl</td>
                                                </tr>
                                                <tr>
                                                    <td><code>loading</code></td>
                                                    <td>boolean</td>
                                                    <td>false</td>
                                                    <td>true, false</td>
                                                </tr>
                                                <tr>
                                                    <td><code>disabled</code></td>
                                                    <td>boolean</td>
                                                    <td>false</td>
                                                    <td>true, false</td>
                                                </tr>
                                                <tr>
                                                    <td><code>pill</code></td>
                                                    <td>boolean</td>
                                                    <td>false</td>
                                                    <td>true, false</td>
                                                </tr>
                                                <tr>
                                                    <td><code>square</code></td>
                                                    <td>boolean</td>
                                                    <td>false</td>
                                                    <td>true, false</td>
                                                </tr>
                                                <tr>
                                                    <td><code>href</code></td>
                                                    <td>string</td>
                                                    <td>null</td>
                                                    <td>Any URL (renders as &lt;a&gt; tag)</td>
                                                </tr>
                                                <tr>
                                                    <td><code>type</code></td>
                                                    <td>string</td>
                                                    <td>button</td>
                                                    <td>button, submit, reset</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
