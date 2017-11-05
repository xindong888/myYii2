<?php
/* @var $this yii\web\view */

use home\assets\HomeAsset;
use treeNav\NavTreeX;
use treeNav\Tree;
use yii\bootstrap\NavBar;

/* @var $content */
HomeAsset::register($this);
$this->beginPage();
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= \yii\bootstrap\Html::csrfMetaTags()?>
    <?php $this->head()?>
    <title>测试</title>
</head>
<body>
<?php $this->beginBody()?>
<?php
NavBar::begin(['brandLabel' => '我的程序']);
echo NavTreeX::widget([
    'options' => ['class' => 'navbar-nav nav'],
    'items' => Tree::genTreeAll(Tree::data(\app\models\Address::className())),
]);
NavBar::end();
?>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>