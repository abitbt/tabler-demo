<?php

it('renders alert with default type', function () {
    $view = $this->blade('<x-tabler::alert>This is an alert</x-tabler::alert>');

    $view->assertSee('This is an alert');
    $view->assertSee('alert', false);
    $view->assertSee('alert-info', false);
    $view->assertSee('role="alert"', false);
});

it('renders alert with different types', function (string $type) {
    $view = $this->blade("<x-tabler::alert type=\"{$type}\">Alert message</x-tabler::alert>");

    $view->assertSee("alert-{$type}", false);
})->with(['success', 'info', 'warning', 'danger']);

it('renders alert with title', function () {
    $view = $this->blade('<x-tabler::alert title="Success!">Operation completed</x-tabler::alert>');

    $view->assertSee('Success!');
    $view->assertSee('alert-heading', false);
    $view->assertSee('Operation completed');
});

it('renders alert with icon', function () {
    $view = $this->blade('<x-tabler::alert icon="alert-triangle" type="warning">Warning message</x-tabler::alert>');

    $view->assertSee('tabler-alert-triangle', false);
    $view->assertSee('alert-icon', false);
    $view->assertSee('Warning message');
});

it('renders alert with icon and title', function () {
    $view = $this->blade('<x-tabler::alert icon="check" title="Success!" type="success">All done</x-tabler::alert>');

    $view->assertSee('tabler-check', false);
    $view->assertSee('Success!');
    $view->assertSee('alert-heading', false);
    $view->assertSee('All done');
    $view->assertSee('alert-description', false);
});

it('renders dismissible alert', function () {
    $view = $this->blade('<x-tabler::alert dismissible>Dismissible alert</x-tabler::alert>');

    $view->assertSee('alert-dismissible', false);
    $view->assertSee('btn-close', false);
    $view->assertSee('data-bs-dismiss="alert"', false);
});

it('renders important alert with filled background', function () {
    $view = $this->blade('<x-tabler::alert important type="danger">Important message</x-tabler::alert>');

    $view->assertSee('alert-important', false);
    $view->assertSee('alert-danger', false);
});

it('renders important dismissible alert with white close button', function () {
    $view = $this->blade('<x-tabler::alert important dismissible type="info">Important info</x-tabler::alert>');

    $view->assertSee('alert-important', false);
    $view->assertSee('btn-close-white', false);
});

it('renders alert without title but with content', function () {
    $view = $this->blade('<x-tabler::alert type="success">Simple success message</x-tabler::alert>');

    $view->assertSee('Simple success message');
    $view->assertDontSee('alert-heading', false);
});

it('merges additional CSS classes', function () {
    $view = $this->blade('<x-tabler::alert class="mb-3" type="info">Alert</x-tabler::alert>');

    $view->assertSee('alert', false);
    $view->assertSee('alert-info', false);
    $view->assertSee('mb-3', false);
});

it('passes through custom attributes', function () {
    $view = $this->blade('<x-tabler::alert data-test="value" id="my-alert">Alert</x-tabler::alert>');

    $view->assertSee('data-test="value"', false);
    $view->assertSee('id="my-alert"', false);
});

it('renders all alert types correctly', function (string $type) {
    $view = $this->blade("<x-tabler::alert type=\"{$type}\" title=\"{$type} title\">{$type} message</x-tabler::alert>");

    $view->assertSee("alert-{$type}", false);
    $view->assertSee("{$type} title");
    $view->assertSee("{$type} message");
})->with(['primary', 'secondary', 'success', 'danger', 'warning', 'info']);
