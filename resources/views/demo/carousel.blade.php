{{--
    Carousel Component Demo
    Component: <x-tabler::carousel>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Carousel" subtitle="Image slideshow component" />
@endsection

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Carousel</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::carousel id="hero">
                        <div class="carousel-item active">
                            <img src="https://placehold.co/800x400/3b82f6/ffffff?text=Slide+1" class="d-block w-100" alt="Slide 1" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/10b981/ffffff?text=Slide+2" class="d-block w-100" alt="Slide 2" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/f59e0b/ffffff?text=Slide+3" class="d-block w-100" alt="Slide 3" />
                        </div>
                    </x-tabler::carousel>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Fade Carousel</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::carousel id="gallery" fade>
                        <div class="carousel-item active">
                            <img src="https://placehold.co/800x400/6366f1/ffffff?text=Photo+1" class="d-block w-100" alt="Photo 1" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/ec4899/ffffff?text=Photo+2" class="d-block w-100" alt="Photo 2" />
                        </div>
                    </x-tabler::carousel>
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
                                <tr><td><code>id</code></td><td><span class="badge bg-azure-lt">string</span></td><td><code>''</code></td><td>Unique carousel ID (required)</td></tr>
                                <tr><td><code>controls</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>true</code></td><td>Show prev/next controls</td></tr>
                                <tr><td><code>indicators</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>true</code></td><td>Show slide indicators</td></tr>
                                <tr><td><code>fade</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Use fade transition</td></tr>
                                <tr><td><code>dark</code></td><td><span class="badge bg-purple-lt">bool</span></td><td><code>false</code></td><td>Use dark variant controls</td></tr>
                                <tr><td><code>interval</code></td><td><span class="badge bg-green-lt">int</span></td><td><code>5000</code></td><td>Auto-play interval in ms</td></tr>
                            </tbody>
                        </table>
                    </div>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
