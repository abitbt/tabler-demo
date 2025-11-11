<?php

it('renders basic card', function () {
    $view = $this->blade('<x-tabler::cards.card>Card content</x-tabler::cards.card>');

    $view->assertSee('Card content');
    $view->assertSee('class="card"', false);
});

it('renders card with padding variants', function (string $padding, string $expectedClass) {
    $view = $this->blade("<x-tabler::cards.card padding=\"{$padding}\">Content</x-tabler::cards.card>");

    $view->assertSee($expectedClass, false);
})->with([
    ['sm', 'card-sm'],
    ['md', 'card-md'],
    ['lg', 'card-lg'],
]);

it('renders active card', function () {
    $view = $this->blade('<x-tabler::cards.card active>Active card</x-tabler::cards.card>');

    $view->assertSee('card-active', false);
});

it('renders inactive card', function () {
    $view = $this->blade('<x-tabler::cards.card inactive>Inactive card</x-tabler::cards.card>');

    $view->assertSee('card-inactive', false);
});

it('renders card as link', function () {
    $view = $this->blade('<x-tabler::cards.card link href="/details">Clickable</x-tabler::cards.card>');

    $view->assertSee('card-link', false);
    $view->assertSee('href="/details"', false);
});

it('merges additional CSS classes', function () {
    $view = $this->blade('<x-tabler::cards.card class="card-stacked card-borderless">Content</x-tabler::cards.card>');

    $view->assertSee('card', false);
    $view->assertSee('card-stacked', false);
    $view->assertSee('card-borderless', false);
});

it('passes through custom attributes', function () {
    $view = $this->blade('<x-tabler::cards.card data-id="123" id="my-card">Content</x-tabler::cards.card>');

    $view->assertSee('data-id="123"', false);
    $view->assertSee('id="my-card"', false);
});

it('renders card with colored background', function () {
    $view = $this->blade('<x-tabler::cards.card class="bg-primary-lt text-primary">Colored card</x-tabler::cards.card>');

    $view->assertSee('bg-primary-lt', false);
    $view->assertSee('text-primary', false);
});

it('renders card with header and body', function () {
    $view = $this->blade('
        <x-tabler::cards.card>
            <x-tabler::cards.header>
                <x-slot:title>Card Title</x-slot>
            </x-tabler::cards.header>
            <x-tabler::cards.body>Card content</x-tabler::cards.body>
        </x-tabler::cards.card>
    ');

    $view->assertSee('Card Title');
    $view->assertSee('Card content');
    $view->assertSee('card-header', false);
    $view->assertSee('card-body', false);
});
