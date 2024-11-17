<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TSV Wartenberg',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'TsvWartenberg\\TsvWartenbergBootstrap\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Köhler',
    'author_email' => 'ckoehler99@gmail.com',
    'author_company' => 'TSV Wartenberg',
    'version' => '1.0.0',
];
