<?php
use yii\helpers\Url;
?>

<!-- page wrapper start -->
<div class="wrapper">
    <div class="container-fluid">

        <div class="page-title-box">
            <div class="row align-items-center">

                <div class="col-sm-6">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">

                    </ol>

                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="<?= Url::to('staff') ?>" class="btn btn-outline-warning btn-lg btn-block waves-effect waves-light">
                            <i class=" fas fa-desktop  fa-8x"></i>
                        </a>
                        <strong>GESTION STAFF</strong>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="<?= Url::to('prisoner/list-prisoners') ?>" class="btn btn-outline-danger btn-lg btn-block waves-effect waves-light">
                            <img src="<?= Yii::getAlias('@web/asset/images/icon_detneu.png')?>" alt="" width="150">
                        </a>
                        <strong>GESTION DETENUS</strong>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="<?= Url::to('visit') ?>" class="btn btn-outline-secondary  btn-lg btn-block waves-effect waves-light">
                            <i class="fas fa-weight-hanging fa-8x"></i>
                        </a>
                        <strong>GESTION VISITEURS</strong>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="" class="btn btn-outline-info btn-lg btn-block waves-effect waves-light">
                            <i class=" fas fa-user-graduate fa-8x"></i>
                        </a>
                        <strong>GESTION REINSERTIONS</strong>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="<?= Url::to('decision/index') ?>" class="btn btn-outline-info btn-lg btn-block waves-effect waves-light">
                            <i class=" fas fa-gavel fa-8x"></i>
                        </a>
                        <strong>DECISION JURIDIQUE</strong>
                    </div>
                </div>
            </div>
        <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="" class="btn btn-outline-success btn-lg btn-block waves-effect waves-light">
                            <i class="fas fa-stethoscope fa-8x"></i>
                        </a>
                        <strong>SUIVI MEDICAL</strong>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="" class="btn btn-outline-success btn-lg btn-block waves-effect waves-light">
                            <i class="fas fa-briefcase-medical fa-8x"></i>
                        </a>
                        <strong>GESTION PHARMACIE</strong>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="<?= Url::toRoute('stock-alimentaire/')?>" class="btn btn-outline-success btn-lg btn-block waves-effect waves-light">
                            <i class="fas fa-database fa-8x"></i>
                        </a>
                        <strong>STOCK & LOGISTIQUE</strong>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat  text-black-50">
                    <div class="card-body">
                        <a href="<?= Url::to('dashboard') ?>" class="btn btn-outline-info btn-lg btn-block waves-effect waves-light">
                            <i class=" ti-bar-chart  fa-8x"></i>
                        </a>
                        <strong>STATS</strong>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


    </div>
    <!-- end container-fluid -->

</div>
<!-- page wrapper end -->

