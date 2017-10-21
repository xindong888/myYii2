<?php
/* @var $this yii\web\view */
/* @var $content */
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=Yii::getAlias('@home').'/web/css/site.css'?>">
    <title><?php echo $this->title ?></title>
</head>
<body>
<?php
echo $content;
echo $this->blocks['block'];
?>
</body>
</html>
