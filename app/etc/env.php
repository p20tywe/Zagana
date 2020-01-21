<?php
return [
    'backend' => [
        'frontName' => 'admin_1kl0yn'
    ],
    'crypt' => [
        'key' => '998bc7e13326c011b8c5f46ddf2d9e2a'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => '192.168.11.229',
                'dbname' => 'zagana',
                'username' => 'root',
                'password' => 'some_pass',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '14a_'
            ],
            'page_cache' => [
                'id_prefix' => '14a_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'compiled_config' => 0,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'google_product' => 0,
        'full_page' => 0,
        'config_webservice' => 0,
        'translate' => 0,
        'vertex' => 0
    ],
    'downloadable_domains' => [
        'localhost'
    ],
    'install' => [
        'date' => 'Mon, 23 Dec 2019 01:43:41 +0000'
    ]
];
