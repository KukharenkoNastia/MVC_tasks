<?php return array(
    'root' => array(
        'name' => 'nastya/docker_task',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '3a099e15b670f5e4c054249e0e07945888ad8a06',
        'type' => 'autoload',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'nastya/docker_task' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '3a099e15b670f5e4c054249e0e07945888ad8a06',
            'type' => 'autoload',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpmailer/phpmailer' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '06e6e8071324c856d4d63e7528443ff83f71e44a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpmailer/phpmailer',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(
                0 => '3.x-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
