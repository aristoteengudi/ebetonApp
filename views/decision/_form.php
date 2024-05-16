<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DecisionJuridique */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="decision-juridique-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'juge_president')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tribunal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'greffier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jugement')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ordonnance')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'acquitement')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recours')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'duree_peine')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
