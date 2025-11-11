<?php

use Abitbt\TablerBlade\TablerMenu\MenuDropdown;
use Abitbt\TablerBlade\TablerMenu\MenuLink;
use Abitbt\TablerBlade\TablerMenu\TablerMenu;

it('creates menu using make factory', function () {
    $menu = TablerMenu::make();

    expect($menu)->toBeInstanceOf(TablerMenu::class);
});

it('adds link to menu', function () {
    $menu = TablerMenu::make();
    $link = $menu->link('Home', '/home');

    expect($link)->toBeInstanceOf(MenuLink::class)
        ->and($menu->getItems())->toHaveCount(1);
});

it('adds dropdown to menu', function () {
    $menu = TablerMenu::make();
    $dropdown = $menu->dropdown('Settings');

    expect($dropdown)->toBeInstanceOf(MenuDropdown::class)
        ->and($menu->getItems())->toHaveCount(1);
});

it('adds divider to menu', function () {
    $menu = TablerMenu::make();
    $result = $menu->divider();

    expect($result)->toBe($menu)
        ->and($menu->getItems())->toHaveCount(1);
});

it('adds heading to menu', function () {
    $menu = TablerMenu::make();
    $result = $menu->heading('Main Menu');

    expect($result)->toBe($menu)
        ->and($menu->getItems())->toHaveCount(1);
});

it('builds menu using fluent interface', function () {
    $menu = TablerMenu::make();
    $menu->link('Home', '/');
    $menu->link('About', '/about');
    $menu->divider();
    $menu->dropdown('Settings');
    $menu->heading('Footer');

    expect($menu->getItems())->toHaveCount(5);
});

it('adds items conditionally with when', function () {
    $menu = TablerMenu::make();

    $menu->when(true, function ($m) {
        $m->link('Visible', '/visible');
    });

    $menu->when(false, function ($m) {
        $m->link('Hidden', '/hidden');
    });

    expect($menu->getItems())->toHaveCount(1);
});

it('adds items conditionally with unless', function () {
    $menu = TablerMenu::make();

    $menu->unless(false, function ($m) {
        $m->link('Visible', '/visible');
    });

    $menu->unless(true, function ($m) {
        $m->link('Hidden', '/hidden');
    });

    expect($menu->getItems())->toHaveCount(1);
});

it('creates grouped menu items', function () {
    $menu = TablerMenu::make();

    $menu->group('Navigation', function ($m) {
        $m->link('Home', '/');
        $m->link('About', '/about');
    });

    expect($menu->getItems())->toHaveCount(3); // Heading + 2 links
});

it('gets visible items only', function () {
    $menu = TablerMenu::make();
    $menu->link('Visible', '/visible');
    $menu->link('Hidden', '/hidden')->if(false);

    expect($menu->getVisibleItems())->toHaveCount(1);
});

it('converts menu to array', function () {
    $menu = TablerMenu::make();
    $menu->link('Home', '/');
    $menu->link('About', '/about');

    $array = $menu->toArray();

    expect($array)
        ->toBeArray()
        ->toHaveCount(2);
});

it('filters hidden items from array', function () {
    $menu = TablerMenu::make();
    $menu->link('Visible', '/visible');
    $menu->link('Hidden', '/hidden')->if(false);

    $array = $menu->toArray();

    expect($array)->toHaveCount(1);
});

it('supports method chaining for fluent interface', function () {
    $menu = TablerMenu::make();

    $result = $menu->divider()
        ->heading('Settings');

    expect($result)->toBe($menu);
});

it('creates new instances each time make is called', function () {
    $menu1 = TablerMenu::make();
    $menu2 = TablerMenu::make();

    $menu1->link('Home', '/');

    expect($menu1->getItems())->toHaveCount(1)
        ->and($menu2->getItems())->toHaveCount(0);
});
