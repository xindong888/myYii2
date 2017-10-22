<?php
/**
 * Created by PhpStorm.
 * User: lqj
 * Date: 2017/10/22
 * Time: 20:59
 */

namespace home\assets;

use yii\web\AssetBundle;

class HomeAsset extends AssetBundle
{
    public $basePath="@home/web/css";
    public $baseUrl="@web/home/web/css";
    public $css=[
        'site.css'
    ];
    public $js=[];

    public $depends= array(
            "yii\web\YiiAsset",
            'yii\bootstrap\BootstrapAsset'
    );

}