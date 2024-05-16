<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Visiteurs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visiteurs-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'vis_noms')->textInput(['maxlength' => true])->label('Noms visiteur') ?>

    <?= $form->field($model, 'vis_pris_noms')->textInput(['maxlength' => true])->label('Personne à visiter') ?>

    <?= $form->field($model, 'vis_visite_date')->textInput(['type'=>'date'])->label('Date Visite')?>

    <?= $form->field($model, 'vis_numero_carte')->textInput(['maxlength' => true])->label('Numero de la carte') ?>

    <?= $form->field($model, 'heure')->textInput(['type'=>'time'])->label('Heure') ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adresse')->textarea(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
