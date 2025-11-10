{{--
    Timeline Component Demo
    Component: <x-tabler::timeline>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Timeline" subtitle="Chronological event display" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Timeline</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::timeline>
                        <div class="timeline-event">
                            <div class="timeline-event-icon bg-primary"></div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary float-end">2 hrs ago</div>
                                    <h4>Meeting completed</h4>
                                    <p class="text-secondary">Discussed project requirements with the team.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-event">
                            <div class="timeline-event-icon bg-success"></div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <div class="text-secondary float-end">5 hrs ago</div>
                                    <h4>Task completed</h4>
                                    <p class="text-secondary">Finished the homepage design.</p>
                                </div>
                            </div>
                        </div>
                    </x-tabler::timeline>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Simple Timeline</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::timeline simple>
                        <div class="timeline-event">
                            <div class="timeline-event-icon"></div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <p class="text-secondary">8:00 AM - Morning standup</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-event">
                            <div class="timeline-event-icon"></div>
                            <div class="card timeline-event-card">
                                <div class="card-body">
                                    <p class="text-secondary">10:30 AM - Client call</p>
                                </div>
                            </div>
                        </div>
                    </x-tabler::timeline>
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
                                <tr><td><code>simple</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Use simple timeline style</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
