<?php return array(
    'root' => array(
        'pretty_version' => 'dev-trunk',
        'version' => 'dev-trunk',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'automattic/jetpack-beta',
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '2.11.13-alpha',
            'version' => '2.11.13.0-alpha',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'reference' => 'a8049c77f5336e3863a7327f45b6a81fb726d74c',
            'dev_requirement' => false,
        ),
        'automattic/jetpack-beta' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'composer/semver' => array(
            'pretty_version' => '3.2.7',
            'version' => '3.2.7.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/./semver',
            'aliases' => array(),
            'reference' => 'deac27056b57e46faf136fae7b449eeaa71661ee',
            'dev_requirement' => false,
        ),
        'erusev/parsedown' => array(
            'pretty_version' => '1.7.4',
            'version' => '1.7.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../erusev/parsedown',
            'aliases' => array(),
            'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
            'dev_requirement' => false,
        ),
    ),
);
