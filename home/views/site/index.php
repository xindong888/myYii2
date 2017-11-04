<?php
/**
 * Created by PhpStorm.
 * User: lqj
 * Date: 2017/10/20
 * Time: 10:32
 * @var $this yii\web\view
 */

use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = '这是第一个页面';
echo Html::a('ajax', '#', ['id' => 'ajax']);
//Yii::$app->cc();
$url = Url::toRoute('site/ajax');
$script = <<<JS
    $(function($) {        
        $('#ajax').click(function(e) {
          e.preventDefault();
          $.ajax({url:"{$url}",success:function(date) {
            $('#content').html(date);
          }})
        })
     });
JS;
$this->registerJs($script);
?>
<div id="content">eee</div>