<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::getAlias('@web/asset/images/logo_2.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::getAlias('@web/asset/images/logo_2.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::getAlias('@web/asset/images/logo_2.png')?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->

    <?= $this->render('header')?>
    <br>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <?= $content ?>
        </div>
        <!-- content -->

        <footer class="footer">
            © 2020 <?= \Yii::$app->name?> <span class="d-none d-sm-inline-block"> - by Eyano Grp</span>.
        </footer>

    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
