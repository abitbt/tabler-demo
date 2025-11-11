<?php

use Abitbt\TablerBlade\TablerMenu\MenuLink;

it('creates menu link with title and url', function () {
    $link = new MenuLink('Home', '/home');

    expect($link->getTitle())->toBe('Home')
        ->and($link->getUrl())->toBe('/home');
});

it('throws exception when title is empty', function () {
    new MenuLink('', '/home');
})->throws(InvalidArgumentException::class, 'Menu link title cannot be empty.');

it('throws exception when title is whitespace only', function () {
    new MenuLink('   ', '/home');
})->throws(InvalidArgumentException::class, 'Menu link title cannot be empty.');

it('throws exception when url is empty', function () {
    new MenuLink('Home', '');
})->throws(InvalidArgumentException::class, 'Menu link URL cannot be empty.');

it('throws exception when url is whitespace only', function () {
    new MenuLink('Home', '   ');
})->throws(InvalidArgumentException::class, 'Menu link URL cannot be empty.');

it('sets target attribute', function () {
    $link = new MenuLink('Home', '/home');
    $link->target('_blank');

    $array = $link->toArray();

    expect($array['target'])->toBe('_blank');
});

it('sets new tab target using newTab method', function () {
    $link = new MenuLink('Home', '/home');
    $link->newTab();

    $array = $link->toArray();

    expect($array['target'])->toBe('_blank');
});

it('converts to array with basic data', function () {
    $link = new MenuLink('Dashboard', '/dashboard');

    $array = $link->toArray();

    expect($array)
        ->toHaveKey('type', 'link')
        ->toHaveKey('title', 'Dashboard')
        ->toHaveKey('url', '/dashboard')
        ->toHaveKey('active', false);
});

it('includes icon in array when set', function () {
    $link = new MenuLink('Home', '/home');
    $link->icon('home');

    $array = $link->toArray();

    expect($array)->toHaveKey('icon', 'home');
});

it('includes badge in array when set', function () {
    $link = new MenuLink('Messages', '/messages');
    $link->badge('5');

    $array = $link->toArray();

    expect($array)
        ->toHaveKey('badge', '5')
        ->not->toHaveKey('badge_color');
});

it('includes badge with color in array', function () {
    $link = new MenuLink('Messages', '/messages');
    $link->badge('5', 'danger');

    $array = $link->toArray();

    expect($array)
        ->toHaveKey('badge', '5')
        ->toHaveKey('badge_color', 'danger');
});

it('includes attributes in array when set', function () {
    $link = new MenuLink('Home', '/home');
    $link->attributes(['data-test' => 'value']);

    $array = $link->toArray();

    expect($array)
        ->toHaveKey('attributes')
        ->and($array['attributes'])->toBe(['data-test' => 'value']);
});

it('determines active state based on closure', function () {
    $link = new MenuLink('Home', '/home');
    $link->activeWhen(fn () => true);

    expect($link->isActive())->toBeTrue();
});

it('determines inactive state based on closure', function () {
    $link = new MenuLink('Home', '/home');
    $link->activeWhen(fn () => false);

    expect($link->isActive())->toBeFalse();
});

it('can be forced active', function () {
    $link = new MenuLink('Home', '/home');
    $link->active();

    expect($link->isActive())->toBeTrue();
});

it('can be forced inactive', function () {
    $link = new MenuLink('Home', '/home');
    $link->active(false);

    expect($link->isActive())->toBeFalse();
});

it('is visible by default', function () {
    $link = new MenuLink('Home', '/home');

    expect($link->isVisible())->toBeTrue();
});

it('can be hidden conditionally with if', function () {
    $link = new MenuLink('Home', '/home');
    $link->if(false);

    expect($link->isVisible())->toBeFalse();
});

it('can be shown conditionally with if', function () {
    $link = new MenuLink('Home', '/home');
    $link->if(true);

    expect($link->isVisible())->toBeTrue();
});

it('can be hidden with unless', function () {
    $link = new MenuLink('Home', '/home');
    $link->unless(true);

    expect($link->isVisible())->toBeFalse();
});

it('can be shown with unless', function () {
    $link = new MenuLink('Home', '/home');
    $link->unless(false);

    expect($link->isVisible())->toBeTrue();
});

it('supports method chaining', function () {
    $link = new MenuLink('Home', '/home');

    $result = $link->icon('home')
        ->badge('New')
        ->newTab()
        ->active();

    expect($result)->toBe($link);
});
