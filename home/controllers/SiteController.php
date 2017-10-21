<?php
/**
 * Created by PhpStorm.
 * User: lqj
 * Date: 2017/10/19
 * Time: 19:42
 */

namespace home\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex(){
        $a="cc";
        return $this->render('index',['a'=>$a]);
    }
}