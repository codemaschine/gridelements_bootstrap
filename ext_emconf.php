<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Gridelements Bootstrap 3',
    'description' => 'Easily build grids with responsive bootstrap grids and extend gridelements by just adding partials and extending some typoscript.',
    'category' => 'plugin',
    'author' => 'Filmmusic.io',
    'author_email' => 'sascha@sascha-ende.de',
    'author_company' => 'Filmmusic.io',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.4',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            't3helpers' =>  '0.9.18',
            'gridelements'  => '8.2.3'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
