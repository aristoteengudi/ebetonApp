<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StockAlimentaireSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-alimentaire-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'produit') ?>

    <?= $form->field($model, 'quantite_entre') ?>

    <?= $form->field($model, 'quantite_sorti') ?>

    <?= $form->field($model, 'prix_achat') ?>

    <?php // echo $form->field($model, 'date_achat') ?>

    <?php // echo $form->field($model, 'buy_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
