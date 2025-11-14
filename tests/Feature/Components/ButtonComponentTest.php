<?php

describe('Button Component', function () {
    it('renders basic button with default classes', function () {
        $view = $this->blade('<x-tabler::button>Click Me</x-tabler::button>');

        $view->assertSee('Click Me');
        $view->assertSee('btn', false);
        $view->assertSee('type="button"', false);
        $view->assertSee('<button', false);
    });

    it('renders button as link when href is provided', function () {
        $view = $this->blade('<x-tabler::button href="/dashboard">Dashboard</x-tabler::button>');

        $view->assertSee('Dashboard');
        $view->assertSee('href="/dashboard"', false);
        $view->assertSee('<a', false);
        $view->assertDontSee('<button', false);
        $view->assertDontSee('type="button"', false);
    });

    it('applies color classes correctly', function () {
        $colors = ['primary', 'secondary', 'success', 'warning', 'danger', 'info', 'dark', 'light'];

        foreach ($colors as $color) {
            $view = $this->blade("<x-tabler::button color=\"{$color}\">Button</x-tabler::button>");

            $view->assertSee("btn-{$color}", false);
        }
    });

    it('applies variant classes correctly', function () {
        // Outline variant
        $outline = $this->blade('<x-tabler::button color="primary" variant="outline">Button</x-tabler::button>');
        $outline->assertSee('btn-outline-primary', false);
        $outline->assertDontSee('btn-primary', false);

        // Ghost variant
        $ghost = $this->blade('<x-tabler::button color="success" variant="ghost">Button</x-tabler::button>');
        $ghost->assertSee('btn-ghost-success', false);
        $ghost->assertDontSee('btn-success', false);
    });

    it('applies size classes correctly', function () {
        $sizes = ['sm', 'lg', 'xl'];

        foreach ($sizes as $size) {
            $view = $this->blade("<x-tabler::button size=\"{$size}\">Button</x-tabler::button>");

            $view->assertSee("btn-{$size}", false);
        }
    });

    it('applies shape classes correctly', function () {
        // Pill shape
        $pill = $this->blade('<x-tabler::button shape="pill">Button</x-tabler::button>');
        $pill->assertSee('btn-pill', false);

        // Square shape
        $square = $this->blade('<x-tabler::button shape="square">Button</x-tabler::button>');
        $square->assertSee('btn-square', false);
    });

    it('renders icon at start', function () {
        $view = $this->blade('<x-tabler::button icon="plus">Add Item</x-tabler::button>');

        $view->assertSee('Add Item');
        $view->assertSee('icon-tabler-plus', false);
    });

    it('renders icon at end', function () {
        $view = $this->blade('<x-tabler::button iconEnd="arrow-right">Next</x-tabler::button>');

        $view->assertSee('Next');
        $view->assertSee('icon-tabler-arrow-right', false);
        $view->assertSee('icon-end', false);
    });

    it('renders icon-only button with aria-label', function () {
        $view = $this->blade('<x-tabler::button icon="trash" iconOnly>Delete</x-tabler::button>');

        $view->assertSee('btn-icon', false);
        $view->assertSee('aria-label="Delete"', false);
        $view->assertSee('icon-tabler-trash', false);
        // Icon-only buttons should not display the slot text content in button body
    });

    it('renders icon-only button with custom aria-label', function () {
        $view = $this->blade('<x-tabler::button icon="trash" iconOnly aria-label="Remove item">Delete</x-tabler::button>');

        $view->assertSee('aria-label="Remove item"', false);
    });

    it('renders loading state correctly', function () {
        $view = $this->blade('<x-tabler::button loading color="primary">Processing...</x-tabler::button>');

        $view->assertSee('btn-loading', false);
        $view->assertSee('spinner-border', false);
        $view->assertSee('Processing...');
        $view->assertSee('disabled="disabled"', false);
    });

    it('renders disabled state correctly', function () {
        $view = $this->blade('<x-tabler::button disabled>Not Available</x-tabler::button>');

        $view->assertSee('disabled="disabled"', false);
        $view->assertSee('Not Available');
    });

    it('applies full width class', function () {
        $view = $this->blade('<x-tabler::button fullWidth>Full Width</x-tabler::button>');

        $view->assertSee('w-100', false);
    });

    it('merges custom classes correctly', function () {
        $view = $this->blade('<x-tabler::button class="custom-class mt-3">Button</x-tabler::button>');

        $view->assertSee('btn', false);
        $view->assertSee('custom-class', false);
        $view->assertSee('mt-3', false);
    });

    it('passes through custom attributes', function () {
        $view = $this->blade('<x-tabler::button id="submit-btn" data-action="submit">Submit</x-tabler::button>');

        $view->assertSee('id="submit-btn"', false);
        $view->assertSee('data-action="submit"', false);
    });

    it('handles empty slot gracefully', function () {
        $view = $this->blade('<x-tabler::button></x-tabler::button>');

        $view->assertSee('btn', false);
        $view->assertSee('type="button"', false);
    });

    it('handles special characters in content', function () {
        $view = $this->blade('<x-tabler::button>Save & Continue</x-tabler::button>');

        $view->assertSee('Save &', false);
        $view->assertSee('Continue');
    });

    it('handles very long content', function () {
        $longText = str_repeat('A', 100);
        $view = $this->blade("<x-tabler::button>{$longText}</x-tabler::button>");

        $view->assertSee($longText);
    });

    it('supports custom button type', function () {
        $view = $this->blade('<x-tabler::button type="submit">Submit</x-tabler::button>');

        $view->assertSee('type="submit"', false);
        $view->assertDontSee('type="button"', false);
    });

    it('does not show icon when loading', function () {
        $view = $this->blade('<x-tabler::button icon="plus" loading>Loading...</x-tabler::button>');

        $view->assertSee('spinner-border', false);
        $view->assertDontSee('icon-tabler-plus', false);
    });

    it('supports Livewire wire:click attribute', function () {
        $view = $this->blade('<x-tabler::button wire:click="save">Save</x-tabler::button>');

        $view->assertSee('wire:click="save"', false);
    });

    it('supports Livewire wire:model attribute', function () {
        $view = $this->blade('<x-tabler::button wire:loading.attr="disabled">Submit</x-tabler::button>');

        $view->assertSee('wire:loading.attr="disabled"', false);
    });

    it('combines multiple props correctly', function () {
        $view = $this->blade('
            <x-tabler::button
                color="primary"
                variant="outline"
                size="lg"
                shape="pill"
                icon="plus"
                class="custom-class"
            >
                Add New
            </x-tabler::button>
        ');

        $view->assertSee('btn-outline-primary', false);
        $view->assertSee('btn-lg', false);
        $view->assertSee('btn-pill', false);
        $view->assertSee('custom-class', false);
        $view->assertSee('icon-tabler-plus', false);
        $view->assertSee('Add New');
    });

    it('renders ghost variant without color', function () {
        $view = $this->blade('<x-tabler::button variant="ghost">Ghost Button</x-tabler::button>');

        $view->assertSee('btn-ghost', false);
        $view->assertDontSee('btn-ghost-', false);
    });

    it('renders outline variant without color', function () {
        $view = $this->blade('<x-tabler::button variant="outline">Outline Button</x-tabler::button>');

        $view->assertSee('btn-outline', false);
        $view->assertDontSee('btn-outline-', false);
    });

    it('renders link button with proper href and classes', function () {
        $view = $this->blade('
            <x-tabler::button href="https://example.com" color="primary" target="_blank">
                External Link
            </x-tabler::button>
        ');

        $view->assertSee('<a', false);
        $view->assertSee('href="https://example.com"', false);
        $view->assertSee('target="_blank"', false);
        $view->assertSee('btn-primary', false);
        $view->assertDontSee('type=', false);
    });

    it('renders social media buttons correctly', function () {
        $socialColors = ['facebook', 'twitter', 'google', 'github'];

        foreach ($socialColors as $color) {
            $view = $this->blade("<x-tabler::button color=\"{$color}\">Button</x-tabler::button>");

            $view->assertSee("btn-{$color}", false);
        }
    });

    it('handles both icon and iconEnd together', function () {
        $view = $this->blade('
            <x-tabler::button icon="arrow-left" iconEnd="arrow-right">
                Both Sides
            </x-tabler::button>
        ');

        $view->assertSee('icon-tabler-arrow-left', false);
        $view->assertSee('icon-tabler-arrow-right', false);
        $view->assertSee('Both Sides');
    });

    it('icon-only button with empty slot uses default aria-label', function () {
        $view = $this->blade('<x-tabler::button icon="trash" iconOnly></x-tabler::button>');

        $view->assertSee('aria-label="Button"', false);
    });

    it('loading button is automatically disabled', function () {
        $view = $this->blade('<x-tabler::button loading>Loading...</x-tabler::button>');

        $view->assertSee('disabled="disabled"', false);
    });

    it('renders with Bootstrap data attributes', function () {
        $view = $this->blade('
            <x-tabler::button data-bs-toggle="modal" data-bs-target="#myModal">
                Open Modal
            </x-tabler::button>
        ');

        $view->assertSee('data-bs-toggle="modal"', false);
        $view->assertSee('data-bs-target="#myModal"', false);
    });
});
