<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="content-center">
    <div class="content-desc-center">
        <div class="container">
            <div class="card mo-mt-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="ex-page-content">
                                <h4 class="text-dark"><?= Html::encode($this->title) ?> !</h4>
                                <h4 class="mb-4">   <?= nl2br(Html::encode($message)) ?></h4>
                                <p class="mb-5">It will be as simple as Occidental in fact, it will be Occidental to an English person</p>

                                <?= Html::a('<i class="mdi mdi-home"></i> Back to Dashboard','index',
                                    ['class'=>'btn btn-primary mb-5 waves-effect waves-light']) ?>
                            </div>

                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <img src="assets/images/error.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
</div>
