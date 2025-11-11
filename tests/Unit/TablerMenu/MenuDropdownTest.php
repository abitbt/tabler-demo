<?php

use Abitbt\TablerBlade\TablerMenu\MenuDropdown;
use Abitbt\TablerBlade\TablerMenu\MenuLink;

it('creates dropdown with title', function () {
    $dropdown = new MenuDropdown('Settings');

    expect($dropdown->getTitle())->toBe('Settings');
});

it('throws exception when title is empty', function () {
    new MenuDropdown('');
})->throws(InvalidArgumentException::class, 'Menu dropdown title cannot be empty.');

it('throws exception when title is whitespace only', function () {
    new MenuDropdown('   ');
})->throws(InvalidArgumentException::class, 'Menu dropdown title cannot be empty.');

it('adds link to dropdown', function () {
    $dropdown = new MenuDropdown('Settings');
    $link = $dropdown->link('Profile', '/profile');

    expect($link)->toBeInstanceOf(MenuLink::class)
        ->and($dropdown->getChildren())->toHaveCount(1);
});

it('adds nested dropdown', function () {
    $dropdown = new MenuDropdown('Settings');
    $nested = $dropdown->dropdown('Advanced');

    expect($nested)->toBeInstanceOf(MenuDropdown::class)
        ->and($dropdown->getChildren())->toHaveCount(1);
});

it('adds divider to dropdown', function () {
    $dropdown = new MenuDropdown('Settings');
    $result = $dropdown->divider();

    expect($result)->toBe($dropdown)
        ->and($dropdown->getChildren())->toHaveCount(1);
});

it('adds heading to dropdown', function () {
    $dropdown = new MenuDropdown('Settings');
    $result = $dropdown->heading('Account');

    expect($result)->toBe($dropdown)
        ->and($dropdown->getChildren())->toHaveCount(1);
});

it('builds dropdown using items callback', function () {
    $dropdown = new MenuDropdown('Settings');

    $dropdown->items(function ($menu) {
        $menu->link('Profile', '/profile');
        $menu->divider();
        $menu->link('Logout', '/logout');
    });

    expect($dropdown->getChildren())->toHaveCount(3);
});

it('sets columns for dropdown layout', function () {
    $dropdown = new MenuDropdown('Mega Menu');
    $dropdown->columns(3);

    $array = $dropdown->toArray();

    expect($array)->toHaveKey('columns', 3);
});

it('throws exception for invalid columns less than 1', function () {
    $dropdown = new MenuDropdown('Menu');
    $dropdown->columns(0);
})->throws(InvalidArgumentException::class, 'Dropdown columns must be between 1 and 6.');

it('throws exception for invalid columns greater than 6', function () {
    $dropdown = new MenuDropdown('Menu');
    $dropdown->columns(7);
})->throws(InvalidArgumentException::class, 'Dropdown columns must be between 1 and 6.');

it('sets right alignment', function () {
    $dropdown = new MenuDropdown('Menu');
    $dropdown->right();

    $array = $dropdown->toArray();

    expect($array)->toHaveKey('right', true);
});

it('can unset right alignment', function () {
    $dropdown = new MenuDropdown('Menu');
    $dropdown->right(false);

    $array = $dropdown->toArray();

    expect($array)->not->toHaveKey('right');
});

it('gets visible children only', function () {
    $dropdown = new MenuDropdown('Settings');
    $dropdown->link('Visible', '/visible');
    $dropdown->link('Hidden', '/hidden')->if(false);

    expect($dropdown->getVisibleChildren())->toHaveCount(1);
});

it('is active when child link is active', function () {
    $dropdown = new MenuDropdown('Settings');
    $dropdown->link('Profile', '/profile')->active();

    expect($dropdown->isActive())->toBeTrue();
});

it('is active when nested dropdown is active', function () {
    $dropdown = new MenuDropdown('Settings');
    $nested = $dropdown->dropdown('Advanced');
    $nested->link('Security', '/security')->active();

    expect($dropdown->isActive())->toBeTrue();
});

it('is not active when no children are active', function () {
    $dropdown = new MenuDropdown('Settings');
    $dropdown->link('Profile', '/profile');
    $dropdown->link('Account', '/account');

    expect($dropdown->isActive())->toBeFalse();
});

it('can be forced active', function () {
    $dropdown = new MenuDropdown('Settings');
    $dropdown->active();

    expect($dropdown->isActive())->toBeTrue();
});

it('converts to array with basic data', function () {
    $dropdown = new MenuDropdown('Settings');
    $dropdown->link('Profile', '/profile');

    $array = $dropdown->toArray();

    expect($array)
        ->toHaveKey('type', 'dropdown')
        ->toHaveKey('title', 'Settings')
        ->toHaveKey('children')
        ->toHaveKey('active', false)
        ->and($array['children'])->toHaveCount(1);
});

it('includes icon in array when set', function () {
    $dropdown = new MenuDropdown('Settings');
    $dropdown->icon('settings');

    $array = $dropdown->toArray();

    expect($array)->toHaveKey('icon', 'settings');
});

it('includes badge in array when set', function () {
    $dropdown = new MenuDropdown('Messages');
    $dropdown->badge('3', 'primary');

    $array = $dropdown->toArray();

    expect($array)
        ->toHaveKey('badge', '3')
        ->toHaveKey('badge_color', 'primary');
});

it('includes attributes in array when set', function () {
    $dropdown = new MenuDropdown('Menu');
    $dropdown->attributes(['class' => 'custom']);

    $array = $dropdown->toArray();

    expect($array)
        ->toHaveKey('attributes')
        ->and($array['attributes'])->toBe(['class' => 'custom']);
});

it('filters out hidden children in toArray', function () {
    $dropdown = new MenuDropdown('Settings');
    $dropdown->link('Visible', '/visible');
    $dropdown->link('Hidden', '/hidden')->if(false);

    $array = $dropdown->toArray();

    expect($array['children'])->toHaveCount(1);
});

it('supports method chaining', function () {
    $dropdown = new MenuDropdown('Settings');

    $result = $dropdown->icon('settings')
        ->badge('New')
        ->columns(2)
        ->right();

    expect($result)->toBe($dropdown);
});
