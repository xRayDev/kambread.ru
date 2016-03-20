<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\MainAsset;
MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= \Yii::$app->language ?>">
<head>
    <meta charset="<?= \Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="sZdpkUqsj_hA5kLMZRWTMHKezqWnJ9Ev3MaCziR9zN4" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode('Камышинский хлебокомбинат') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php if(\Yii::$app->session->hasFlash('success')): ?>
    <?=\Yii::$app->session->getFlash('success') ?>
<?php endif; ?>
<?= $this->render("//common/header") ?>
<?= $content ?>
<?= $this->render("//common/footer") ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
