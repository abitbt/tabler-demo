<?php

use Abitbt\TablerBlade\TablerMenu\MenuHeading;

it('creates heading with title', function () {
    $heading = new MenuHeading('Account Settings');

    expect($heading->getTitle())->toBe('Account Settings');
});

it('throws exception when title is empty', function () {
    new MenuHeading('');
})->throws(InvalidArgumentException::class, 'Menu heading title cannot be empty.');

it('throws exception when title is whitespace only', function () {
    new MenuHeading('   ');
})->throws(InvalidArgumentException::class, 'Menu heading title cannot be empty.');

it('is always visible', function () {
    $heading = new MenuHeading('Settings');

    expect($heading->isVisible())->toBeTrue();
});

it('is never active', function () {
    $heading = new MenuHeading('Settings');

    expect($heading->isActive())->toBeFalse();
});

it('converts to array with title', function () {
    $heading = new MenuHeading('Account');

    $array = $heading->toArray();

    expect($array)
        ->toHaveKey('type', 'heading')
        ->toHaveKey('title', 'Account');
});
