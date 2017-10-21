<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

require (__DIR__.'/common/config/bootstrap.php');

$config = require(__DIR__ . '/home/config/web.php');

$app = new \yii\web\Application($config);
$app->run();