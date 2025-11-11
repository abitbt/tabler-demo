<?php

it('renders button with default styles', function () {
    $view = $this->blade('<x-tabler::button>Click me</x-tabler::button>');

    $view->assertSee('Click me');
    $view->assertSee('btn', false);
    $view->assertSee('type="button"', false);
});

it('renders button with color variants', function (string $color) {
    $view = $this->blade("<x-tabler::button color=\"{$color}\">Click</x-tabler::button>");

    $view->assertSee("btn-{$color}", false);
})->with(['primary', 'secondary', 'success', 'danger', 'warning', 'info']);

it('renders button with outline variant', function () {
    $view = $this->blade('<x-tabler::button color="primary" variant="outline">Outline</x-tabler::button>');

    $view->assertSee('btn-outline-primary', false);
    $view->assertDontSee('btn-primary', false);
});

it('renders button with ghost variant', function () {
    $view = $this->blade('<x-tabler::button color="success" variant="ghost">Ghost</x-tabler::button>');

    $view->assertSee('btn-ghost-success', false);
});

it('renders button with sizes', function (string $size, string $expectedClass) {
    $view = $this->blade("<x-tabler::button size=\"{$size}\">Button</x-tabler::button>");

    $view->assertSee($expectedClass, false);
})->with([
    ['sm', 'btn-sm'],
    ['lg', 'btn-lg'],
]);

it('renders button as link when href is provided', function () {
    $view = $this->blade('<x-tabler::button href="/dashboard">Dashboard</x-tabler::button>');

    $view->assertSee('<a', false);
    $view->assertSee('href="/dashboard"', false);
    $view->assertSee('role="button"', false);
    $view->assertDontSee('<button', false);
});

it('renders submit button type', function () {
    $view = $this->blade('<x-tabler::button type="submit">Submit</x-tabler::button>');

    $view->assertSee('type="submit"', false);
});

it('renders disabled button', function () {
    $view = $this->blade('<x-tabler::button disabled>Disabled</x-tabler::button>');

    $view->assertSee('disabled="disabled"', false);
});

it('renders disabled link button with aria attributes', function () {
    $view = $this->blade('<x-tabler::button href="/test" disabled>Disabled Link</x-tabler::button>');

    $view->assertSee('class="btn disabled"', false);
    $view->assertSee('aria-disabled="true"', false);
    $view->assertSee('tabindex="-1"', false);
});

it('renders loading state', function () {
    $view = $this->blade('<x-tabler::button loading>Loading</x-tabler::button>');

    $view->assertSee('btn-loading', false);
});

it('renders icon-only button with auto aria-label', function () {
    $view = $this->blade('<x-tabler::button icon="search" iconOnly />');

    $view->assertSee('btn-icon', false);
    $view->assertSee('aria-label="Search"', false);
});

it('renders button with leading icon', function () {
    $view = $this->blade('<x-tabler::button icon="plus">Add</x-tabler::button>');

    $view->assertSee('tabler-plus', false);
    $view->assertSee('Add');
});

it('renders button with trailing icon', function () {
    $view = $this->blade('<x-tabler::button icon-end="arrow-right">Next</x-tabler::button>');

    $view->assertSee('tabler-arrow-right', false);
    $view->assertSee('icon-end', false);
});

it('renders pill shape button', function () {
    $view = $this->blade('<x-tabler::button shape="pill">Pill</x-tabler::button>');

    $view->assertSee('btn-pill', false);
});

it('renders square shape button', function () {
    $view = $this->blade('<x-tabler::button shape="square">Square</x-tabler::button>');

    $view->assertSee('btn-square', false);
});

it('renders full width button', function () {
    $view = $this->blade('<x-tabler::button full-width>Full Width</x-tabler::button>');

    $view->assertSee('w-100', false);
});

it('merges additional CSS classes', function () {
    $view = $this->blade('<x-tabler::button class="custom-class">Custom</x-tabler::button>');

    $view->assertSee('btn', false);
    $view->assertSee('custom-class', false);
});

it('renders animated button', function () {
    $view = $this->blade('<x-tabler::button animate="rotate" icon="refresh">Refresh</x-tabler::button>');

    $view->assertSee('btn-animate-icon', false);
    $view->assertSee('btn-animate-icon-rotate', false);
});

it('passes through custom attributes', function () {
    $view = $this->blade('<x-tabler::button data-test="value" id="my-button">Test</x-tabler::button>');

    $view->assertSee('data-test="value"', false);
    $view->assertSee('id="my-button"', false);
});
