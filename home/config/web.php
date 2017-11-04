<?php

/**
 * Created by PhpStorm.
 * User: lqj
 * Date: 2017/10/19
 * Time: 19:45
 */
class Be extends \yii\base\Behavior
{
    public function cc()
    {
        echo "woshixingwei";
    }
}

return [
    "id" => 'home-app',
    "basePath" => dirname(__DIR__),
    "vendorPath" => dirname(dirname(__DIR__)) . '/vendor',
    "controllerNamespace" => 'home\controllers',
    "language" => 'zh-CN',
    "bootstrap" => YII_DEBUG ? ['debug'] : [],
    "modules" => [
        "debug" => [
            'class' => 'yii\\debug\\Module'
        ]
    ],
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
        'db' => [
            'class'=>\yii\db\Connection::className(),
            'dsn'=>'mysql:host=localhost;dbname=myNav',
            'username'=>'root',
            'password'=>'root',
            'charset'=>'utf8'
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
    ],
    /*    'on beforeRequest'=>function(){
            echo '请求之前<br>';
        },
        'as be'=>[
            "class"=>Be::className()
        ]*/
];