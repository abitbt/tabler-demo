<?php

use Abitbt\TablerBlade\TablerMenu\MenuLink;

it('sets attributes as array', function () {
    $link = new MenuLink('Home', '/');
    $link->attributes(['data-test' => 'value', 'class' => 'custom']);

    expect($link->getAttributes())->toBe([
        'data-test' => 'value',
        'class' => 'custom',
    ]);
});

it('merges attributes when called multiple times', function () {
    $link = new MenuLink('Home', '/');
    $link->attributes(['data-test' => 'value']);
    $link->attributes(['class' => 'custom']);

    expect($link->getAttributes())->toBe([
        'data-test' => 'value',
        'class' => 'custom',
    ]);
});

it('overwrites existing attribute keys', function () {
    $link = new MenuLink('Home', '/');
    $link->attributes(['class' => 'first']);
    $link->attributes(['class' => 'second']);

    expect($link->getAttributes())->toBe(['class' => 'second']);
});

it('sets single attribute', function () {
    $link = new MenuLink('Home', '/');
    $link->attribute('data-id', '123');

    expect($link->getAttributes())->toBe(['data-id' => '123']);
});

it('sets multiple single attributes', function () {
    $link = new MenuLink('Home', '/');
    $link->attribute('data-id', '123');
    $link->attribute('class', 'custom');

    expect($link->getAttributes())->toBe([
        'data-id' => '123',
        'class' => 'custom',
    ]);
});

it('mixes attributes and attribute methods', function () {
    $link = new MenuLink('Home', '/');
    $link->attributes(['data-test' => 'value']);
    $link->attribute('class', 'custom');

    expect($link->getAttributes())->toBe([
        'data-test' => 'value',
        'class' => 'custom',
    ]);
});

it('returns empty array when no attributes set', function () {
    $link = new MenuLink('Home', '/');

    expect($link->getAttributes())->toBe([]);
});

it('supports method chaining for attributes', function () {
    $link = new MenuLink('Home', '/');

    $result = $link->attributes(['class' => 'test']);

    expect($result)->toBe($link);
});

it('supports method chaining for attribute', function () {
    $link = new MenuLink('Home', '/');

    $result = $link->attribute('class', 'test');

    expect($result)->toBe($link);
});
