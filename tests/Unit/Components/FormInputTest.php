<?php

it('renders basic text input', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="username" />');

    $view->assertSee('form-control', false);
    $view->assertSee('name="username"', false);
    $view->assertSee('type="text"', false);
});

it('renders input with different types', function (string $type) {
    $view = $this->withViewErrors([])->blade("<x-tabler::forms.input name=\"field\" type=\"{$type}\" />");

    $view->assertSee("type=\"{$type}\"", false);
})->with(['email', 'password', 'number', 'tel', 'url', 'search']);

it('renders input with label', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" label="Email Address" />');

    $view->assertSee('Email Address');
    $view->assertSee('<label', false);
});

it('renders input with value', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="name" value="John Doe" />');

    $view->assertSee('value="John Doe"', false);
});

it('renders input with placeholder', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="search" placeholder="Search..." />');

    $view->assertSee('placeholder="Search..."', false);
});

it('renders required input', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" required />');

    $view->assertSee('required', false);
});

it('renders disabled input', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" disabled />');

    $view->assertSee('disabled', false);
});

it('renders readonly input', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" readonly />');

    $view->assertSee('readonly', false);
});

it('renders input with sizes', function (string $size, string $expectedClass) {
    $view = $this->withViewErrors([])->blade("<x-tabler::forms.input name=\"field\" size=\"{$size}\" />");

    $view->assertSee($expectedClass, false);
})->with([
    ['sm', 'form-control-sm'],
    ['lg', 'form-control-lg'],
]);

it('generates ID from name when not provided', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="user[email]" label="Email" />');

    $view->assertSee('id="user-email"', false);
    $view->assertSee('for="user-email"', false);
});

it('uses provided ID', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" id="custom-id" label="Email" />');

    $view->assertSee('id="custom-id"', false);
    $view->assertSee('for="custom-id"', false);
});

it('renders input with help text', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="username" help="Choose a unique username" />');

    $view->assertSee('Choose a unique username');
    $view->assertSee('form-hint', false);
});

it('renders input with icon', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="search" icon="search" />');

    $view->assertSee('tabler-search', false);
    $view->assertSee('input-icon', false);
});

it('merges additional CSS classes', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" class="custom-class" />');

    $view->assertSee('form-control', false);
    $view->assertSee('custom-class', false);
});

it('passes through custom attributes', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" data-test="value" autocomplete="off" />');

    $view->assertSee('data-test="value"', false);
    $view->assertSee('autocomplete="off"', false);
});

it('wraps input in margin bottom div by default', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" label="Email" />');

    $view->assertSee('class="mb-3"', false);
});

it('does not wrap when wrapper is false', function () {
    $view = $this->withViewErrors([])->blade('<x-tabler::forms.input name="email" :wrapper="false" />');

    $view->assertDontSee('class="mb-3"', false);
});
