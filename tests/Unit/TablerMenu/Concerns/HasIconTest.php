<?php

use Abitbt\TablerBlade\TablerMenu\MenuLink;

it('sets icon name', function () {
    $link = new MenuLink('Home', '/');
    $link->icon('home');

    expect($link->getIcon())->toBe('home');
});

it('returns null when no icon is set', function () {
    $link = new MenuLink('Home', '/');

    expect($link->getIcon())->toBeNull();
});

it('throws exception when icon is empty', function () {
    $link = new MenuLink('Home', '/');
    $link->icon('');
})->throws(InvalidArgumentException::class, 'Icon name cannot be empty.');

it('throws exception when icon is whitespace only', function () {
    $link = new MenuLink('Home', '/');
    $link->icon('   ');
})->throws(InvalidArgumentException::class, 'Icon name cannot be empty.');

it('overwrites existing icon', function () {
    $link = new MenuLink('Home', '/');
    $link->icon('old-icon');
    $link->icon('new-icon');

    expect($link->getIcon())->toBe('new-icon');
});

it('supports method chaining', function () {
    $link = new MenuLink('Home', '/');

    $result = $link->icon('home');

    expect($result)->toBe($link);
});
