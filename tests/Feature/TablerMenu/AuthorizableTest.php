<?php

use Abitbt\TablerBlade\TablerMenu\MenuLink;
use Illuminate\Support\Facades\Gate;

beforeEach(function () {
    // Fresh gate definitions for each test - use real gates
    if (! Gate::has('view-admin')) {
        Gate::define('view-admin', fn ($user = null) => true);
    }
    if (! Gate::has('edit-posts')) {
        Gate::define('edit-posts', fn ($user = null) => false);
    }
    if (! Gate::has('manage-users')) {
        Gate::define('manage-users', fn ($user = null) => true);
    }
    if (! Gate::has('delete-posts')) {
        Gate::define('delete-posts', fn ($user = null) => false);
    }
});

it('is visible when no authorization is set', function () {
    $link = new MenuLink('Home', '/');

    expect($link->isVisible())->toBeTrue();
});

it('is visible when user has required ability', function () {
    $link = new MenuLink('Admin', '/admin');
    $link->can('view-admin');

    expect($link->isVisible())->toBeTrue();
});

it('is not visible when user lacks required ability', function () {
    $link = new MenuLink('Edit', '/edit');
    $link->can('edit-posts');

    expect($link->isVisible())->toBeFalse();
});

it('is visible when user has any of the required abilities', function () {
    $link = new MenuLink('Dashboard', '/dashboard');
    $link->canAny(['edit-posts', 'manage-users']);

    expect($link->isVisible())->toBeTrue();
});

it('is not visible when user has none of the required abilities', function () {
    $link = new MenuLink('Admin', '/admin');
    $link->canAny(['edit-posts', 'delete-posts']);

    expect($link->isVisible())->toBeFalse();
});

it('uses custom authorization callback', function () {
    $link = new MenuLink('Custom', '/custom');
    $link->authorize(fn ($user) => true);

    expect($link->isVisible())->toBeTrue();
});

it('uses custom authorization callback with false result', function () {
    $link = new MenuLink('Custom', '/custom');
    $link->authorize(fn ($user) => false);

    expect($link->isVisible())->toBeFalse();
});

it('prioritizes custom authorization over can', function () {
    $link = new MenuLink('Test', '/test');
    $link->can('edit-posts'); // Would return false
    $link->authorize(fn ($user) => true); // Should override

    expect($link->isVisible())->toBeTrue();
});

it('supports method chaining for can', function () {
    $link = new MenuLink('Admin', '/admin');

    $result = $link->can('view-admin');

    expect($result)->toBe($link);
});

it('supports method chaining for canAny', function () {
    $link = new MenuLink('Dashboard', '/dashboard');

    $result = $link->canAny(['view-admin', 'manage-users']);

    expect($result)->toBe($link);
});

it('supports method chaining for authorize', function () {
    $link = new MenuLink('Custom', '/custom');

    $result = $link->authorize(fn () => true);

    expect($result)->toBe($link);
});
