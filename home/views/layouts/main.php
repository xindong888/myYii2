<?php
/* @var $this yii\web\view */
$this->beginContent('@app/views/layouts/base.php');
?>

<?php
echo $content;
$this->beginBlock('block')
?>
我是一个测试哦
<?php $this->endBlock()?>
<?php $this->endContent(); ?>