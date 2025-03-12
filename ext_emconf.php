<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'instagram',
    'description' => 'Show images and posts from instagram profiles',
    'category' => 'plugin',
    'version' => '9.0.0',
    'author' => 'Alex Kellner',
    'author_email' => 'alexander.kellner@in2code.de',
    'author_company' => 'in2code.de',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'php' => '8.0.0-8.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
