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
    "language" => 'zh-CN',
    "bootstrap" => ['log','debug'],
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
        'assetManager' => [
            "basePath" => '@home/web/assets',
            'baseUrl' => '@web/home/web/assets'
        ],
        'request' => [
            'cookieValidationKey' => '这是一个秘钥哦'
        ],
/*        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ]*/
    ]
];