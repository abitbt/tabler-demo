<?php

use Abitbt\TablerBlade\TablerMenu\TablerMenu;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;

beforeEach(function () {
    // Define test gates - only if not already defined
    if (! Gate::has('config-view-admin')) {
        Gate::define('config-view-admin', fn ($user = null) => true);
    }
    if (! Gate::has('config-edit-posts')) {
        Gate::define('config-edit-posts', fn ($user = null) => false);
    }
});

it('processes config array with links', function () {
    Config::set('test-menu', [
        [
            'type' => 'link',
            'title' => 'Dashboard',
            'url' => '/dashboard',
        ],
        [
            'type' => 'link',
            'title' => 'Profile',
            'url' => '/profile',
        ],
    ]);

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu)->toBeArray()
        ->toHaveCount(2)
        ->and($menu[0])->toHaveKey('url');
});

it('filters out unauthorized items', function () {
    Config::set('test-menu', [
        [
            'title' => 'Public',
            'url' => '/dashboard',
        ],
        [
            'title' => 'Admin Only',
            'url' => '/profile',
            'can' => 'config-view-admin',
        ],
        [
            'title' => 'Hidden',
            'url' => '/settings',
            'can' => 'config-edit-posts',
        ],
    ]);

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu)->toHaveCount(2);
});

it('processes nested dropdown items', function () {
    Config::set('test-menu', [
        [
            'type' => 'dropdown',
            'title' => 'Settings',
            'items' => [
                [
                    'type' => 'link',
                    'title' => 'Profile',
                    'url' => '/profile',
                ],
                [
                    'type' => 'link',
                    'title' => 'Account',
                    'url' => '/account',
                ],
            ],
        ],
    ]);

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu)->toHaveCount(1)
        ->and($menu[0]['items'])->toHaveCount(2);
});

it('sets active state based on route pattern', function () {
    Config::set('test-menu', [
        [
            'title' => 'Dashboard',
            'url' => '/',
            'active' => 'home',
        ],
    ]);

    $this->get('/');

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu[0]['active'])->toBeTrue();
});

it('marks dropdown as active when child is active', function () {
    Config::set('test-menu', [
        [
            'type' => 'dropdown',
            'title' => 'Settings',
            'items' => [
                [
                    'title' => 'Profile',
                    'url' => '/',
                    'active' => 'home',
                ],
                [
                    'title' => 'Account',
                    'url' => '/bootstrap',
                    'active' => 'bootstrap',
                ],
            ],
        ],
    ]);

    $this->get('/');

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu[0]['active'])->toBeTrue();
});

it('handles canAny authorization', function () {
    Config::set('test-menu', [
        [
            'title' => 'Dashboard',
            'url' => '/dashboard',
            'canAny' => ['config-view-admin', 'config-edit-posts'],
        ],
    ]);

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu)->toHaveCount(1); // Should be visible because user has 'config-view-admin'
});

it('filters unauthorized items from dropdown', function () {
    Config::set('test-menu', [
        [
            'type' => 'dropdown',
            'title' => 'Settings',
            'items' => [
                [
                    'title' => 'Public',
                    'url' => '/public',
                ],
                [
                    'title' => 'Hidden',
                    'url' => '/hidden',
                    'can' => 'config-edit-posts',
                ],
            ],
        ],
    ]);

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu[0]['items'])->toHaveCount(1);
});

it('returns empty array for non-existent config', function () {
    $menu = TablerMenu::fromConfig('non-existent-menu');

    expect($menu)->toBeArray()->toBeEmpty();
});

it('handles boolean active state', function () {
    Config::set('test-menu', [
        [
            'title' => 'Always Active',
            'url' => '/test',
            'active' => true,
        ],
        [
            'title' => 'Never Active',
            'url' => '/test2',
            'active' => false,
        ],
    ]);

    $menu = TablerMenu::fromConfig('test-menu');

    expect($menu[0]['active'])->toBeTrue()
        ->and($menu[1]['active'])->toBeFalse();
});
