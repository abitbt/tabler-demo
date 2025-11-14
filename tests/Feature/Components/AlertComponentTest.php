<?php

describe('Alert Component', function () {
    it('renders basic alert with default props', function () {
        $view = $this->blade(
            '<x-tabler::alert>This is an alert</x-tabler::alert>'
        );

        $view->assertSee('This is an alert');
        $view->assertSee('alert');
        $view->assertSee('alert-info'); // default color
        $view->assertSee('role="alert"', false);
    });

    it('renders alert with different color variants', function (string $color) {
        $view = $this->blade(
            "<x-tabler::alert color=\"{$color}\">Alert message</x-tabler::alert>"
        );

        $view->assertSee("alert-{$color}", false);
        $view->assertSee('Alert message');
    })->with(['success', 'info', 'warning', 'danger', 'primary', 'secondary']);

    it('renders alert with auto-detected icon based on color', function () {
        $successView = $this->blade(
            '<x-tabler::alert color="success">Success!</x-tabler::alert>'
        );
        $successView->assertSee('icon-tabler-check', false);

        $dangerView = $this->blade(
            '<x-tabler::alert color="danger">Error!</x-tabler::alert>'
        );
        $dangerView->assertSee('icon-tabler-alert-circle', false);

        $warningView = $this->blade(
            '<x-tabler::alert color="warning">Warning!</x-tabler::alert>'
        );
        $warningView->assertSee('icon-tabler-alert-triangle', false);

        $infoView = $this->blade(
            '<x-tabler::alert color="info">Info</x-tabler::alert>'
        );
        $infoView->assertSee('icon-tabler-info-circle', false);
    });

    it('renders alert with custom icon', function () {
        $view = $this->blade(
            '<x-tabler::alert color="success" icon="rocket">Custom icon</x-tabler::alert>'
        );

        $view->assertSee('icon-tabler-rocket', false);
        $view->assertDontSee('icon-tabler-check', false);
    });

    it('renders alert without icon when icon is false', function () {
        $view = $this->blade(
            '<x-tabler::alert color="success" :icon="false">No icon</x-tabler::alert>'
        );

        $view->assertDontSee('alert-icon', false);
        $view->assertSee('No icon');
    });

    it('renders dismissible alert with close button', function () {
        $view = $this->blade(
            '<x-tabler::alert color="danger" dismissible>Dismissible alert</x-tabler::alert>'
        );

        $view->assertSee('alert-dismissible', false);
        $view->assertSee('btn-close', false);
        $view->assertSee('data-bs-dismiss="alert"', false);
        $view->assertSee('aria-label="close"', false);
    });

    it('renders important alert with solid background', function () {
        $view = $this->blade(
            '<x-tabler::alert color="warning" important>Important!</x-tabler::alert>'
        );

        $view->assertSee('alert-important', false);
    });

    it('renders important dismissible alert with white close button', function () {
        $view = $this->blade(
            '<x-tabler::alert color="success" important dismissible>Important!</x-tabler::alert>'
        );

        $view->assertSee('btn-close-white', false);
    });

    it('renders alert with title slot', function () {
        $view = $this->blade('
            <x-tabler::alert color="info">
                <x-slot:title>Alert Title</x-slot>
                Alert content
            </x-tabler::alert>
        ');

        $view->assertSee('Alert Title');
        $view->assertSee('alert-heading', false);
        $view->assertSee('Alert content');
    });

    it('renders alert with title prop', function () {
        $view = $this->blade(
            '<x-tabler::alert color="info" title="Alert Title">Alert content</x-tabler::alert>'
        );

        $view->assertSee('Alert Title');
        $view->assertSee('alert-heading', false);
    });

    it('renders alert with description slot', function () {
        $view = $this->blade('
            <x-tabler::alert color="warning">
                <x-slot:title>Warning</x-slot>
                <x-slot:description>This is the description</x-slot>
            </x-tabler::alert>
        ');

        $view->assertSee('Warning');
        $view->assertSee('This is the description');
        $view->assertSee('alert-description', false);
    });

    it('renders alert with description prop', function () {
        $view = $this->blade(
            '<x-tabler::alert color="info" title="Title" description="Description text" />'
        );

        $view->assertSee('Title');
        $view->assertSee('Description text');
        $view->assertSee('alert-description', false);
    });

    it('merges custom CSS classes correctly', function () {
        $view = $this->blade(
            '<x-tabler::alert color="success" class="mb-4 custom-class">Alert</x-tabler::alert>'
        );

        $view->assertSee('alert');
        $view->assertSee('alert-success');
        $view->assertSee('mb-4');
        $view->assertSee('custom-class');
    });

    it('passes through custom attributes', function () {
        $view = $this->blade(
            '<x-tabler::alert color="info" id="my-alert" data-test="value">Alert</x-tabler::alert>'
        );

        $view->assertSee('id="my-alert"', false);
        $view->assertSee('data-test="value"', false);
    });

    it('normalizes error color to danger', function () {
        $view = $this->blade(
            '<x-tabler::alert color="error">Error message</x-tabler::alert>'
        );

        $view->assertSee('alert-danger', false);
        $view->assertDontSee('alert-error', false);
    });

    it('handles empty content gracefully', function () {
        $view = $this->blade(
            '<x-tabler::alert color="info"></x-tabler::alert>'
        );

        $view->assertSee('alert', false);
        $view->assertSee('alert-info', false);
    });

    it('handles very long content', function () {
        $longText = str_repeat('Lorem ipsum dolor sit amet. ', 10);

        $view = $this->blade(
            "<x-tabler::alert color=\"warning\">{$longText}</x-tabler::alert>"
        );

        $view->assertSee('Lorem ipsum dolor sit amet.');
        $view->assertSee('alert-warning', false);
    });

    it('handles special characters in content', function () {
        $view = $this->blade(
            '<x-tabler::alert color="info">Save & Continue</x-tabler::alert>'
        );

        $view->assertSee('Save');
        $view->assertSee('Continue');
    });

    it('supports Livewire wire attributes', function () {
        $view = $this->blade(
            '<x-tabler::alert wire:click="action" wire:loading.class="opacity-50" color="success">Click me</x-tabler::alert>'
        );

        $view->assertSee('wire:click="action"', false);
        $view->assertSee('wire:loading.class="opacity-50"', false);
    });

    it('renders multiple alert variations correctly', function () {
        $view = $this->blade('
            <div>
                <x-tabler::alert color="success">Success</x-tabler::alert>
                <x-tabler::alert color="danger" dismissible>Error</x-tabler::alert>
                <x-tabler::alert color="warning" important>Warning</x-tabler::alert>
            </div>
        ');

        $view->assertSee('Success');
        $view->assertSee('Error');
        $view->assertSee('Warning');
        $view->assertSee('alert-success', false);
        $view->assertSee('alert-danger', false);
        $view->assertSee('alert-warning', false);
        $view->assertSee('alert-dismissible', false);
        $view->assertSee('alert-important', false);
    });

    it('properly combines all modifiers', function () {
        $view = $this->blade(
            '<x-tabler::alert color="danger" icon="alert-triangle" dismissible important title="Critical Error" class="mb-4">System failure</x-tabler::alert>'
        );

        $view->assertSee('alert-danger', false);
        $view->assertSee('alert-dismissible', false);
        $view->assertSee('alert-important', false);
        $view->assertSee('mb-4', false);
        $view->assertSee('icon-tabler-alert-triangle', false);
        $view->assertSee('Critical Error');
        $view->assertSee('System failure');
        $view->assertSee('btn-close-white', false);
    });

    it('maintains accessibility attributes', function () {
        $view = $this->blade(
            '<x-tabler::alert color="info" dismissible>Accessible alert</x-tabler::alert>'
        );

        $view->assertSee('role="alert"', false);
        $view->assertSee('aria-label="close"', false);
        $view->assertSee('type="button"', false);
    });

    it('renders alert with custom HTML content', function () {
        $view = $this->blade('
            <x-tabler::alert color="danger">
                <h4 class="alert-heading">Multiple Errors</h4>
                <div class="alert-description">
                    <ul class="alert-list">
                        <li>Error 1</li>
                        <li>Error 2</li>
                    </ul>
                </div>
            </x-tabler::alert>
        ');

        $view->assertSee('Multiple Errors');
        $view->assertSee('Error 1');
        $view->assertSee('Error 2');
        $view->assertSee('alert-list', false);
    });
});
