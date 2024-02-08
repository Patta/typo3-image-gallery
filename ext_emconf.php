<?php

$EM_CONF['bm_image_gallery'] = [
    'title' => 'Simple Image Gallery',
    'description' => 'Simple gallery using file collections.',
    'version' => '6.0.0',
    'category' => 'plugin',
    'author' => 'Florian Wessels',
    'author_email' => 'dev@Leuchtfeuer.com',
    'author_company' => 'Leuchtfeuer Digital Marketing',
    'state' => 'alpha',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.10-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Leuchtfeuer\\BmImageGallery\\' => 'Classes',
        ],
    ],
];
