<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Employe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employe-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'matricule')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'nom')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'prenom')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'postnom')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'date_naissance')->textInput(['type'=>'date']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'lieu_naissance')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'date_embauche')->textInput(['type'=>'date']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'fonction')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?= $form->field($model, 'service')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-lg-9">
                    <?php $arrayData = ArrayHelper::map($prisonlist,'id','prison_name',['prompt'=>'Choose...']) ?>
                    <?= $form->field($model, 'prison_name')->dropDownList($arrayData,['prompt'=>'Choose...']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
