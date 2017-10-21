<?php
/**
 * Created by PhpStorm.
 * User: lqj
 * Date: 2017/10/19
 * Time: 19:45
 */
return [
    "id" => 'home-app',
    "basePath" => dirname(__DIR__),
    "vendorPath" => dirname(dirname(__DIR__)) . '/vendor',
    "controllerNamespace" => 'home\controllers',
    "components" => [
        'view' => [
            'theme' => [
                'basePath' => '@home/themes/basic',
                'baseUrl' => '@web/themes/basic',
                'pathMap' => [
                    '@home/views' => '@app/themes/basic',
                ],
            ],
        ],
    ]
];