<?php return array(
    'root' => array(
        'name' => 'automattic/jetpack-beta',
        'pretty_version' => 'dev-trunk',
        'version' => 'dev-trunk',
        'reference' => NULL,
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-admin-ui' => array(
            'pretty_version' => '0.3.1',
            'version' => '0.3.1.0',
            'reference' => 'de6abfa48ceab9923dfc505b89703b7268957b37',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-admin-ui',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '3.0.2',
            'version' => '3.0.2.0',
            'reference' => 'e7aa8a28a6e25285d82369221b1552192514c33c',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-beta' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'reference' => NULL,
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/semver' => array(
            'pretty_version' => '3.3.2',
            'version' => '3.3.2.0',
            'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
            'type' => 'library',
            'install_path' => __DIR__ . '/./semver',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'erusev/parsedown' => array(
            'pretty_version' => '1.7.4',
            'version' => '1.7.4.0',
            'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../erusev/parsedown',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
