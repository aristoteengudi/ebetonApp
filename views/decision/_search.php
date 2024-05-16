<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DecisionJuridiqueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decision-juridique-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="col-sm-5">
        <?= $form->field($model, 'globalSearch')->label('Search') ?>
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

</div>


    <div class="form-group">

    <?php ActiveForm::end(); ?>

</div>
