 <?php

 use yii\helpers\Html;
 use yii\widgets\ActiveForm;

 \Yii::$app->session->hasFlash('success');
 echo \Yii::$app->session->getFlash('success');

 ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Saisie de données Légales</h4>
                <p class="text-muted m-b-30 font-14"></p>
                 <?php $form = ActiveForm::begin(['class'=>'form-horizontal form-wizard-wrapper',
                                                  'id'=>'form_add_prisonier',
                                                  'method'=>'post',
                                                  'action'=>'entry-information',
                                                  'options'=>
                                                    ['enctype'=>'multipart/form-data'
                                                ]
                        ]); ?>
                    <h3>Informations d'Identité</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">Matricule détenu </label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_matricule')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Numéro ID.</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_numero_id')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Nom de Famille</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_nom')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">Prénom</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_prenom')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Postnom</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_postnom')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Lieu de Naissance</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_lieu_naissance')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Genre</label>
                                    <div class="col-lg-9">
                                        <?php $dropList = array('H'=>'Homme','F'=>'Femme'); ?>

                                        <?= $form->field($model, 'genre')->dropDownList($dropList,['prompt'=>'Select'])->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Etat Civil</label>
                                    <div class="col-lg-9">
                                        <?php $dropList = array('celibataire'=>'Celibataire','marie'=>'Marié','divorce'=>'Divorcé'); ?>

                                        <?= $form->field($model, 'pris_etat_civil')->dropDownList($dropList,['prompt'=>'Select'])->label(false); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Date de Naissance</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_date_naissance')->textInput(['id'=>'pris_date_naissance','type'=>'date'])->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Noms du Père</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_nom_pere')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtCityBilling" class="col-lg-3 col-form-label">Noms de la Mère</label>
                                    <div class="col-lg-9">
                                            <?= $form->field($model, 'pris_noms_mere')->textInput()->label(false); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Adresse</label>
                                    <div class="col-lg-9">

                                            <?= $form->field($model, 'pris_adresse')->textarea(['rows'=>'4'])->label(false); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h3>Information Complementaire</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label">Crime</label>
                                    <div class="col-lg-9">

                                        <?= $form->field($model, 'pris_crime')->textarea(['rows'=>'4'])->label(false); ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </fieldset>
                <h3>Traitement d'image</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtCityShipping" class="col-lg-3 col-form-label">Photo</label>
                                    <div class="col-lg-9">
                                        <input id="txtCityShipping" name="image_process[]" type="file" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h3>Submission </h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="txtExpirationDate" class="col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>

<?php
$this->registerJsFile('@web/asset/plugins/jquery-steps/jquery.steps.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerJs('$("#form_add_prisonier").steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "slide",
             onFinishing: function (event, currentIndex) {
                    let form = $(this);
                    form.submit();
                    },
                labels: {
                    cancel: "Annuler",
                    current: "Etape courant:",
                    pagination: "Pagination",
                    finish: "Process",
                    next: "Suivant",
                    previous: "Précedent",
                    loading: "Chargement ..."
                }
        });',\yii\web\View::POS_END);

$this->registerCssFile("@web/asset/plugins/jquery-steps/jquery.steps.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
], 'css-print-theme');


?>


