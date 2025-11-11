<?php

use Abitbt\TablerBlade\TablerMenu\MenuDivider;

it('is always visible', function () {
    $divider = new MenuDivider;

    expect($divider->isVisible())->toBeTrue();
});

it('is never active', function () {
    $divider = new MenuDivider;

    expect($divider->isActive())->toBeFalse();
});

it('converts to array with type divider', function () {
    $divider = new MenuDivider;

    $array = $divider->toArray();

    expect($array)
        ->toHaveKey('type', 'divider')
        ->toHaveCount(1);
});
