{{--
    Accordion Component Demo
    Component: <x-tabler::accordion>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Accordion" subtitle="Collapsible content panels" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Accordion</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::accordion id="faq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1">
                                    What is Tabler?
                                </button>
                            </h2>
                            <div id="faq-1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    Tabler is a free and open-source admin template.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2">
                                    Is it responsive?
                                </button>
                            </h2>
                            <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    Yes, Tabler is fully responsive.
                                </div>
                            </div>
                        </div>
                    </x-tabler::accordion>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Flush Accordion</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::accordion id="settings" flush>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#settings-1">
                                    Account Settings
                                </button>
                            </h2>
                            <div id="settings-1" class="accordion-collapse collapse show" data-bs-parent="#settings">
                                <div class="accordion-body">
                                    Configure your account settings here.
                                </div>
                            </div>
                        </div>
                    </x-tabler::accordion>
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
                                <tr><td><code>id</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>''</code></td><td>Unique accordion ID (required)</td></tr>
                                <tr><td><code>flush</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Remove default background and borders</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
