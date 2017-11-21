<?php

/**
 * Extension Manager/Repository config file for ext "envauto_bootstrap_site_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'EnvAuto Bootstrap Site Package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
            'bootstrap_package' => '8.0.0-8.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Envauto\\EnvautoBootstrapSitePackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Ion Sirotkin',
    'author_email' => 'ivs5069@gmail.com',
    'author_company' => 'EnvAuto',
    'version' => '1.0.0',
];
