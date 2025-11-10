<?php

use Illuminate\Support\Facades\Route;

// Helper function to build nav items with active states
function getNavItems()
{
    return [
        [
            'title' => 'Home',
            'url' => url('/'),
            'icon' => 'home',
            'active' => request()->routeIs('home'),
        ],
        [
            'title' => 'Components',
            'icon' => 'package',
            'active' => request()->routeIs(
                'demo.alert',
                'demo.badge',
                'demo.button',
                'demo.cards',
                'demo.dropdowns',
                'demo.forms',
                'demo.modals',
                'demo.offcanvas',
                'demo.tables',
                'demo.tabs',
                'demo.toasts'
            ),
            'columns' => 2,
            'children' => [
                [
                    'title' => 'Alerts',
                    'url' => url('/demo/alert'),
                    'icon' => 'bell',
                    'active' => request()->routeIs('demo.alert'),
                ],
                [
                    'title' => 'Badges',
                    'url' => url('/demo/badge'),
                    'icon' => 'bookmarks',
                    'active' => request()->routeIs('demo.badge'),
                ],
                ['divider' => true],
                [
                    'title' => 'Buttons',
                    'url' => url('/demo/button'),
                    'icon' => 'square',
                    'active' => request()->routeIs('demo.button'),
                ],
                [
                    'title' => 'Cards',
                    'url' => url('/demo/cards'),
                    'icon' => 'layout',
                    'active' => request()->routeIs('demo.cards'),
                ],
                [
                    'title' => 'Dropdowns',
                    'url' => url('/demo/dropdowns'),
                    'icon' => 'select',
                    'active' => request()->routeIs('demo.dropdowns'),
                ],
                [
                    'title' => 'Forms',
                    'url' => url('/demo/forms'),
                    'icon' => 'forms',
                    'active' => request()->routeIs('demo.forms'),
                ],
                [
                    'title' => 'Modals',
                    'url' => url('/demo/modals'),
                    'icon' => 'square-plus',
                    'active' => request()->routeIs('demo.modals'),
                ],
                [
                    'title' => 'Offcanvas',
                    'url' => url('/demo/offcanvas'),
                    'icon' => 'layout-sidebar-right',
                    'active' => request()->routeIs('demo.offcanvas'),
                ],
                [
                    'title' => 'Tables',
                    'url' => url('/demo/tables'),
                    'icon' => 'table',
                    'active' => request()->routeIs('demo.tables'),
                ],
                [
                    'title' => 'Toasts',
                    'url' => url('/demo/toasts'),
                    'icon' => 'bread',
                    'active' => request()->routeIs('demo.toasts'),
                ],
            ],
        ],
        [
            'title' => 'Layouts',
            'icon' => 'layout-grid',
            'active' => request()->routeIs('demo.layout-vertical', 'demo.layout-boxed'),
            'children' => [
                [
                    'title' => 'Vertical Layout',
                    'url' => url('/demo/layout-vertical'),
                    'icon' => 'layout-sidebar',
                    'active' => request()->routeIs('demo.layout-vertical'),
                ],
                [
                    'title' => 'Boxed Layout',
                    'url' => url('/demo/layout-boxed'),
                    'icon' => 'layout-distribute-horizontal',
                    'active' => request()->routeIs('demo.layout-boxed'),
                ],
            ],
        ],
    ];
}

Route::get('/', function () {
    return view('home', ['navItems' => getNavItems()]);
})->name('home');

Route::group(['prefix' => 'demo'], function () {
    Route::get('/alert', function () {
        return view('demo.alert', ['navItems' => getNavItems()]);
    })->name('demo.alert');

    Route::get('/badge', function () {
        return view('demo.badge', ['navItems' => getNavItems()]);
    })->name('demo.badge');

    Route::get('/button', function () {
        return view('demo.button', ['navItems' => getNavItems()]);
    })->name('demo.button');

    Route::get('/forms', function () {
        return view('demo.forms', ['navItems' => getNavItems()]);
    })->name('demo.forms');

    Route::get('/cards', function () {
        return view('demo.cards', ['navItems' => getNavItems()]);
    })->name('demo.cards');

    Route::get('/modals', function () {
        return view('demo.modals', ['navItems' => getNavItems()]);
    })->name('demo.modals');

    Route::get('/offcanvas', function () {
        return view('demo.offcanvas', ['navItems' => getNavItems()]);
    })->name('demo.offcanvas');

    Route::get('/dropdowns', function () {
        return view('demo.dropdowns', ['navItems' => getNavItems()]);
    })->name('demo.dropdowns');

    Route::get('/tables', function () {
        return view('demo.tables', ['navItems' => getNavItems()]);
    })->name('demo.tables');

    Route::get('/tabs', function () {
        return view('demo.tabs', ['navItems' => getNavItems()]);
    })->name('demo.tabs');

    Route::get('/toasts', function () {
        return view('demo.toasts', ['navItems' => getNavItems()]);
    })->name('demo.toasts');

    Route::get('/layout-vertical', function () {
        return view('demo.layouts.vertical', [
            'navItems' => getNavItems(),
            'bsThemeBase' => 'neutral',
            'bsThemeRadius' => 2,
            'layoutFluid' => true,
            'sidebarPosition' => 'left',
        ]);
    })->name('demo.layout-vertical');

    Route::get('/layout-boxed', function () {
        return view('demo.layouts.boxed', [
            'navItems' => getNavItems(),
            'bsThemeBase' => 'catppuccin-mocha',
            'bsThemeRadius' => 2,
            'layoutBoxed' => true,
            'navbarDark' => false,
            'navbarSticky' => false,
        ]);
    })->name('demo.layout-boxed');
});
