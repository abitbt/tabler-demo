<?php

use Abitbt\TablerBlade\TablerMenu\MenuLink;

it('sets badge text only', function () {
    $link = new MenuLink('Messages', '/messages');
    $link->badge('5');

    expect($link->getBadgeText())->toBe('5')
        ->and($link->getBadgeColor())->toBeNull();
});

it('sets badge with color', function () {
    $link = new MenuLink('Messages', '/messages');
    $link->badge('New', 'danger');

    expect($link->getBadgeText())->toBe('New')
        ->and($link->getBadgeColor())->toBe('danger');
});

it('gets badge configuration', function () {
    $link = new MenuLink('Messages', '/messages');
    $link->badge('3', 'primary');

    expect($link->getBadge())->toBe([
        'text' => '3',
        'color' => 'primary',
    ]);
});

it('returns null when no badge is set', function () {
    $link = new MenuLink('Home', '/');

    expect($link->getBadge())->toBeNull()
        ->and($link->getBadgeText())->toBeNull()
        ->and($link->getBadgeColor())->toBeNull();
});

it('throws exception when badge text is empty', function () {
    $link = new MenuLink('Home', '/');
    $link->badge('');
})->throws(InvalidArgumentException::class, 'Badge text cannot be empty.');

it('throws exception when badge text is whitespace only', function () {
    $link = new MenuLink('Home', '/');
    $link->badge('   ');
})->throws(InvalidArgumentException::class, 'Badge text cannot be empty.');

it('overwrites existing badge', function () {
    $link = new MenuLink('Messages', '/messages');
    $link->badge('Old');
    $link->badge('New', 'success');

    expect($link->getBadgeText())->toBe('New')
        ->and($link->getBadgeColor())->toBe('success');
});

it('supports method chaining', function () {
    $link = new MenuLink('Messages', '/messages');

    $result = $link->badge('5', 'danger');

    expect($result)->toBe($link);
});
