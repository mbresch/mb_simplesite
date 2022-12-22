<?php

$EM_CONF['mb_simplesite'] = [
    'title' => 'TYPO3 Site Package',
    'description' => 'TYPO3 Site Package',
    'category' => 'templates',
    'author' => 'TYPO3 Documentation Team',
    'author_email' => 'documentation@typo3.org',
    'author_company' => 'Example Company',
    'version' => '0.1.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.99.99',
            'fluid_styled_content' => '11.0.0-11.99.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];