<?php
/* @var $this yii\web\view */
/* @var $content */
use home\assets\HomeAsset;


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
        <?php $this->head() ?>
        <title><?php echo $this->title ?></title>
    </head>
    <body>
    <?php
    $this->beginBody();
    echo $content;
    echo $this->blocks['block'];
    ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>