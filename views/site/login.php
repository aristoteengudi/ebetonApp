<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>

<div class="card">
    <div class="card-body">

        <div class="text-center">
            <a href="<?= Url::home()?>" class="logo"><img src="asset/images/logo_2.png" height="22" alt="logo"></a>
        </div>

        <div class="p-3">
            <h4 class="font-18 m-b-5 text-center"><?= \Yii::$app->name?></h4>
            <?php $form = ActiveForm::begin(['id' => 'login-form','class'=>'form-horizontal m-t-30']); ?>

            <?= $form->field($model, 'username', ['template' => '
                        <div class="form-group">
                                <label for="email" class="col-form-label"> Utilisateur</label>
                                <div class="input-group">
                                     {input}
                                </div>{error}{hint}
                   </div>'])->textInput(['autofocus' => true])->input('text', ['placeholder'=>'utilisateur']) ?>

            <?= $form->field($model, 'password', ['template' => '
                        <div class="form-group">
                                <label for="password" class="col-form-label">Mot de passe</label>
                                <div class="input-group">
                                        {input}
                                </div>{error}{hint}
               </div>'])->passwordInput()->input('password', ['placeholder'=>'mot de passe'])?>


                <div class="form-group row m-t-20">
                    <div class="col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <?= Html::submitButton('Se Connectez',
                            ['class'=>'btn btn-primary w-md waves-effect waves-light','name'=>'login-button'
                        ])?>
                    </div>
                </div>

                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <?= Html::a('<i class="mdi mdi-lock"></i> Mot de passe oublié ?','recover',['']) ?>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>