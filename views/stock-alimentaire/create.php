<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StockAlimentaire */

$this->title = Yii::t('app', 'Create Stock Alimentaire');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stock Alimentaires'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-fluid">
    <div class="page-title-box">
        <div class="row align-items-center">

            <div class="col-sm-6">
                <h4 class="page-title"><?= Html::encode($this->title) ?></h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>