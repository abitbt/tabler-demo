{{--
    Empty State Component Demo
    Component: <x-tabler::empty>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Empty States" subtitle="Display when there's no content" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <x-tabler::empty
                        icon="inbox"
                        title="No messages"
                        description="You don't have any messages yet."
                    />
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <x-tabler::empty icon="folder" title="No files">
                        <x-slot:description>
                            Start by uploading your first file.
                        </x-slot:description>
                        <x-slot:action>
                            <x-tabler::button color="primary">Upload file</x-tabler::button>
                        </x-slot:action>
                    </x-tabler::empty>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
                            </thead>
                            <tbody>
                                <tr><td><code>icon</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Tabler icon name</td></tr>
                                <tr><td><code>title</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Empty state title</td></tr>
                                <tr><td><code>description</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Description text</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <h4>Available Slots</h4>
                        <ul class="text-secondary">
                            <li><code>icon</code> - Custom icon content</li>
                            <li><code>description</code> - Custom description</li>
                            <li><code>action</code> - Action buttons</li>
                        </ul>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
