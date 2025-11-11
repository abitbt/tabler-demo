<?php

it('renders badge with default styles', function () {
    $view = $this->blade('<x-tabler::badge>Default</x-tabler::badge>');

    $view->assertSee('Default');
    $view->assertSee('badge', false);
    $view->assertSee('<span', false);
});

it('renders badge with color variants', function (string $color) {
    $view = $this->blade("<x-tabler::badge color=\"{$color}\">Badge</x-tabler::badge>");

    $view->assertSee("bg-{$color}", false);
    $view->assertSee("text-{$color}-fg", false);
})->with(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'blue', 'red']);

it('renders badge with light variant', function () {
    $view = $this->blade('<x-tabler::badge color="blue" variant="light">Light</x-tabler::badge>');

    $view->assertSee('bg-blue-lt', false);
    $view->assertDontSee('text-blue-fg', false);
});

it('renders badge with outline variant', function () {
    $view = $this->blade('<x-tabler::badge color="danger" variant="outline">Outline</x-tabler::badge>');

    $view->assertSee('badge-outline', false);
    $view->assertSee('text-danger', false);
});

it('renders badge with sizes', function (string $size, string $expectedClass) {
    $view = $this->blade("<x-tabler::badge size=\"{$size}\">Badge</x-tabler::badge>");

    $view->assertSee($expectedClass, false);
})->with([
    ['sm', 'badge-sm'],
    ['lg', 'badge-lg'],
]);

it('renders badge as link when href is provided', function () {
    $view = $this->blade('<x-tabler::badge href="/profile" color="blue">Profile</x-tabler::badge>');

    $view->assertSee('<a', false);
    $view->assertSee('href="/profile"', false);
    $view->assertDontSee('<span', false);
});

it('renders badge with leading icon', function () {
    $view = $this->blade('<x-tabler::badge icon="star" color="warning">Favorite</x-tabler::badge>');

    $view->assertSee('tabler-star', false);
    $view->assertSee('Favorite');
});

it('renders badge with trailing icon', function () {
    $view = $this->blade('<x-tabler::badge icon-end="arrow-right" color="info">Next</x-tabler::badge>');

    $view->assertSee('tabler-arrow-right', false);
});

it('renders icon-only badge with auto aria-label', function () {
    $view = $this->blade('<x-tabler::badge icon="star" iconOnly color="warning" />');

    $view->assertSee('badge-icononly', false);
    $view->assertSee('aria-label="Star"', false);
});

it('renders dot badge', function () {
    $view = $this->blade('<x-tabler::badge dot color="red" />');

    $view->assertSee('badge-dot', false);
    $view->assertSee('bg-red', false);
});

it('renders dot badge without text color class', function () {
    $view = $this->blade('<x-tabler::badge dot color="green" />');

    $view->assertSee('bg-green', false);
    $view->assertDontSee('text-green-fg', false);
});

it('merges additional CSS classes', function () {
    $view = $this->blade('<x-tabler::badge class="badge-pill ms-2" color="primary">Pill</x-tabler::badge>');

    $view->assertSee('badge', false);
    $view->assertSee('badge-pill', false);
    $view->assertSee('ms-2', false);
});

it('passes through custom attributes', function () {
    $view = $this->blade('<x-tabler::badge data-count="5" id="notification">5</x-tabler::badge>');

    $view->assertSee('data-count="5"', false);
    $view->assertSee('id="notification"', false);
});

it('renders notification badge', function () {
    $view = $this->blade('<x-tabler::badge color="red" class="badge-notification badge-pill">9+</x-tabler::badge>');

    $view->assertSee('badge-notification', false);
    $view->assertSee('badge-pill', false);
    $view->assertSee('bg-red', false);
    $view->assertSee('9+');
});
