<?php

Kirby::plugin('dasformt/backtotop', [
    'options' => [
        'enabled' => true,
        'offset' => 300,
        'offsetOpacity' => 1200,
        'scrollDuration' => 700
    ],
    'snippets' => [
        'backtotop' => __DIR__ . '/snippets/backtotop.php'
    ],
    'routes' => [
        [
            'pattern' => 'backtotop/css/styles',
            'action'  => function () {
                $css = tpl::load(__DIR__ . '/assets/css/backtotop.php', [
                    'size' => option('dasformt.backtotop.button.size', '60px'),
                    'radius' => option('dasformt.backtotop.button.radius', '100px'),
                    'background' => option('dasformt.backtotop.button.colors.background', '#000000')
                ]);
                return new Response($css, 'text/css');
            }
        ],
        [
            'pattern' => 'backtotop/js/script',
            'action'  => function () {
                return new Response(
                    F::read(__DIR__ . '/assets/js/backtotop.js'),
                    'application/javascript'
                );
            }
        ],
        [
            'pattern' => 'backtotop/images/arrow-up.svg',
            'action'  => function () {
                return new Response(
                    F::read(__DIR__ . '/assets/images/arrow-up.svg'),
                    'image/svg+xml'
                );
            }
        ]
    ],
    'info' => [
        'version' => '1.0.1',
        'license' => 'MIT',
        'author'  => 'dasformt',
        'description' => 'Ein konfigurierbarer "Zurück nach oben" Button für Kirby CMS'
    ]
]);
