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
                'demo.avatar',
                'demo.badge',
                'demo.button',
                'demo.cards',
                'demo.dropdowns',
                'demo.forms',
                'demo.modals',
                'demo.offcanvas',
                'demo.tables',
                'demo.tabs',
                'demo.toasts',
                'demo.progress',
                'demo.spinner',
                'demo.pagination',
                'demo.steps',
                'demo.status',
                'demo.ribbon',
                'demo.empty',
                'demo.divider',
                'demo.timeline',
                'demo.accordion',
                'demo.carousel',
                'demo.list-group',
                'demo.nav',
                'demo.placeholder'
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
                ['divider' => true],
                [
                    'title' => 'Accordion',
                    'url' => url('/demo/accordion'),
                    'icon' => 'list',
                    'active' => request()->routeIs('demo.accordion'),
                ],
                [
                    'title' => 'Avatars',
                    'url' => url('/demo/avatars'),
                    'icon' => 'user-circle',
                    'active' => request()->routeIs('demo.avatars'),
                ],
                [
                    'title' => 'Carousel',
                    'url' => url('/demo/carousel'),
                    'icon' => 'carousel-horizontal',
                    'active' => request()->routeIs('demo.carousel'),
                ],
                [
                    'title' => 'Divider',
                    'url' => url('/demo/divider'),
                    'icon' => 'separator-horizontal',
                    'active' => request()->routeIs('demo.divider'),
                ],
                [
                    'title' => 'Empty States',
                    'url' => url('/demo/empty'),
                    'icon' => 'folder-x',
                    'active' => request()->routeIs('demo.empty'),
                ],
                [
                    'title' => 'List Group',
                    'url' => url('/demo/list-group'),
                    'icon' => 'list-check',
                    'active' => request()->routeIs('demo.list-group'),
                ],
                [
                    'title' => 'Navigation',
                    'url' => url('/demo/nav'),
                    'icon' => 'menu',
                    'active' => request()->routeIs('demo.nav'),
                ],
                [
                    'title' => 'Pagination',
                    'url' => url('/demo/pagination'),
                    'icon' => 'dots',
                    'active' => request()->routeIs('demo.pagination'),
                ],
                [
                    'title' => 'Placeholder',
                    'url' => url('/demo/placeholder'),
                    'icon' => 'text-size',
                    'active' => request()->routeIs('demo.placeholder'),
                ],
                [
                    'title' => 'Progress',
                    'url' => url('/demo/progress'),
                    'icon' => 'progress',
                    'active' => request()->routeIs('demo.progress'),
                ],
                [
                    'title' => 'Ribbon',
                    'url' => url('/demo/ribbon'),
                    'icon' => 'flag',
                    'active' => request()->routeIs('demo.ribbon'),
                ],
                [
                    'title' => 'Spinner',
                    'url' => url('/demo/spinner'),
                    'icon' => 'loader',
                    'active' => request()->routeIs('demo.spinner'),
                ],
                [
                    'title' => 'Status',
                    'url' => url('/demo/status'),
                    'icon' => 'point',
                    'active' => request()->routeIs('demo.status'),
                ],
                [
                    'title' => 'Steps',
                    'url' => url('/demo/steps'),
                    'icon' => 'stairs',
                    'active' => request()->routeIs('demo.steps'),
                ],
                [
                    'title' => 'Timeline',
                    'url' => url('/demo/timeline'),
                    'icon' => 'timeline',
                    'active' => request()->routeIs('demo.timeline'),
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

    Route::get('/progress', function () {
        return view('demo.progress', ['navItems' => getNavItems()]);
    })->name('demo.progress');

    Route::get('/spinner', function () {
        return view('demo.spinner', ['navItems' => getNavItems()]);
    })->name('demo.spinner');

    Route::get('/pagination', function () {
        return view('demo.pagination', ['navItems' => getNavItems()]);
    })->name('demo.pagination');

    Route::get('/steps', function () {
        return view('demo.steps', ['navItems' => getNavItems()]);
    })->name('demo.steps');

    Route::get('/avatars', function () {
        return view('demo.avatars', ['navItems' => getNavItems()]);
    })->name('demo.avatars');

    Route::get('/status', function () {
        return view('demo.status', ['navItems' => getNavItems()]);
    })->name('demo.status');

    Route::get('/ribbon', function () {
        return view('demo.ribbon', ['navItems' => getNavItems()]);
    })->name('demo.ribbon');

    Route::get('/empty', function () {
        return view('demo.empty', ['navItems' => getNavItems()]);
    })->name('demo.empty');

    Route::get('/divider', function () {
        return view('demo.divider', ['navItems' => getNavItems()]);
    })->name('demo.divider');

    Route::get('/timeline', function () {
        return view('demo.timeline', ['navItems' => getNavItems()]);
    })->name('demo.timeline');

    Route::get('/accordion', function () {
        return view('demo.accordion', ['navItems' => getNavItems()]);
    })->name('demo.accordion');

    Route::get('/carousel', function () {
        return view('demo.carousel', ['navItems' => getNavItems()]);
    })->name('demo.carousel');

    Route::get('/list-group', function () {
        return view('demo.list-group', ['navItems' => getNavItems()]);
    })->name('demo.list-group');

    Route::get('/nav', function () {
        return view('demo.nav', ['navItems' => getNavItems()]);
    })->name('demo.nav');

    Route::get('/placeholder', function () {
        return view('demo.placeholder', ['navItems' => getNavItems()]);
    })->name('demo.placeholder');

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
