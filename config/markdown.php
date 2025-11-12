<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Markdown Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for CommonMark markdown parser with extensions.
    |
    */

    'table_of_contents' => [
        'html_class' => 'table-of-contents',
        'position' => 'top',
        'style' => 'bullet',
        'min_heading_level' => 2,
        'max_heading_level' => 4,
        'normalize' => 'relative',
        'placeholder' => '[TOC]',
    ],

    'heading_permalink' => [
        'html_class' => 'heading-permalink',
        'id_prefix' => '',
        'fragment_prefix' => '',
        'insert' => 'before',
        'min_heading_level' => 2,
        'max_heading_level' => 6,
        'title' => 'Permalink',
        'symbol' => '#',
        'aria_hidden' => true,
    ],

    'commonmark' => [
        'enable_em' => true,
        'enable_strong' => true,
        'use_asterisk' => true,
        'use_underscore' => true,
        'unordered_list_markers' => ['-', '*', '+'],
    ],
];
