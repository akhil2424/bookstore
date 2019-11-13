<?php

/**
 * Extension Manager/Repository config file for ext "bookstore".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bookstore',
    'description' => 'for book store',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Hof\\Bookstore\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Akhil Baby',
    'author_email' => 'akhilbaby2424@gmail.com',
    'author_company' => 'Hof',
    'version' => '1.0.0',
];
