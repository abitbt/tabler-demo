{{--
    Nav Component Demo
    Component: <x-tabler::nav>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Navigation" subtitle="Navigation menus with tabs or pills" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Tabs Navigation</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::nav type="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </x-tabler::nav>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Pills Navigation</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::nav type="pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </x-tabler::nav>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Underline Navigation</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::nav type="underline">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                    </x-tabler::nav>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Vertical Navigation</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::nav type="pills" vertical>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Messages</a>
                        </li>
                    </x-tabler::nav>
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
                                <tr><td><code>type</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>null</code></td><td>Nav type: 'tabs', 'pills', 'underline'</td></tr>
                                <tr><td><code>vertical</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Vertical navigation</td></tr>
                                <tr><td><code>fill</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Fill available space</td></tr>
                                <tr><td><code>justified</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Justify items equally</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
