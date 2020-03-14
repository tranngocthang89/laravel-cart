<?php

return [
    'simple' => [
        'key' => 'simple',
        'name' => 'Simple',
        'class' => 'Product\Type\Simple',
        'sort' => 1
    ],
    'configurable' => [
        'key' => 'configurable',
        'name' => 'Configurable',
        'class' => 'Product\Type\Configurable',
        'sort' => 2
    ],
    'virtual' => [
        'key' => 'virtual',
        'name' => 'Virtual',
        'class' => 'Product\Type\Virtual',
        'sort' => 3
    ],
    'grouped' => [
        'key' => 'grouped',
        'name' => 'Grouped',
        'class' => 'Product\Type\Grouped',
        'sort' => 4
    ],
    'downloadable' => [
        'key' => 'downloadable',
        'name' => 'Downloadable',
        'class' => 'Product\Type\Downloadable',
        'sort' => 5
    ],
    'bundle' => [
        'key' => 'bundle',
        'name' => 'Bundle',
        'class' => 'Product\Type\Bundle',
        'sort' => 6
    ]
];