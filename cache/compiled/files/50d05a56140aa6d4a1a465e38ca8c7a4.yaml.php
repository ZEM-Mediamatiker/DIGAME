<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/system.yaml',
    'modified' => 1429091721,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'zemwikimobile',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'events' => [
                'page' => false,
                'twig' => true
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'pages' => true
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'debugger' => [
            'enabled' => false,
            'max_depth' => 10,
            'log' => [
                'enabled' => false,
                'timing' => false
            ]
        ]
    ]
];
