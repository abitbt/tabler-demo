{{--
    List Group Component Demo
    Component: <x-tabler::list-group>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="List Groups" subtitle="Flexible list component" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic List Group</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::list-group>
                        <li class="list-group-item">First item</li>
                        <li class="list-group-item">Second item</li>
                        <li class="list-group-item">Third item</li>
                    </x-tabler::list-group>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Actionable List</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::list-group>
                        <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action">Settings</a>
                        <a href="#" class="list-group-item list-group-item-action">Profile</a>
                    </x-tabler::list-group>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Flush List</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::list-group flush>
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </x-tabler::list-group>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Numbered List</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::list-group numbered>
                        <li class="list-group-item">First task</li>
                        <li class="list-group-item">Second task</li>
                        <li class="list-group-item">Third task</li>
                    </x-tabler::list-group>
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
                                <tr><td><code>flush</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Remove borders and rounded corners</td></tr>
                                <tr><td><code>numbered</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Show numbered list</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
