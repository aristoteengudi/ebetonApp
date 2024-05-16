<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StockAlimentaire */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-alimentaire-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'produit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantite_entre')->textInput() ?>


    <?= $form->field($model, 'prix_achat')->textInput() ?>

    <?= $form->field($model, 'date_achat')->textInput(['type'=>'date']) ?>
    <?= $form->field($model, 'buy_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
