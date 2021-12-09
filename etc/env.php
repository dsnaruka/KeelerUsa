<?php
return [
    'backend' => [
        'frontName' => 'admin_mgiime'
    ],
    'crypt' => [
        'key' => '2c1ea55ffe55dc83f242877fcb24fbca'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'aeef9fdd_keelerusa',
                'username' => 'aeef9fdd_keelerusa',
                'password' => 'PshawDeafLividEntail',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
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
    'MAGE_MODE' => 'production',
    'session' => [
        'save' => 'files'
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'translate' => 1,
        'config_webservice' => 1,
        'compiled_config' => 1,
        'google_product' => 1,
        'vertex' => 1
    ],
    'install' => [
        'date' => 'Wed, 14 Mar 2018 20:16:54 +0000'
    ]
];
