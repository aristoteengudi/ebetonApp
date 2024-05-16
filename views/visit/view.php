<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

\Yii::$app->session->hasFlash('success');
echo \Yii::$app->session->getFlash('success');


/* @var $this yii\web\View */
/* @var $model app\models\Visiteurs */

$this->title = "Details visit for -- {$model->vis_pris_noms} --";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Visiteurs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">
    <div class="page-title-box">
        <div class="row align-items-center">

            <div class="col-sm-6">
                <h4 class="page-title"><?= Html::encode($this->title) ?></h4>
            </div>
        </div>
    </div>
    <!-- end row -->
    <?=
    \yii\widgets\Breadcrumbs::widget([
        'homeLink' => [
            'label' => Yii::t('yii', 'Dashboard'),
            'url' => Yii::$app->homeUrl,
        ],
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])
    ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p>
                        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'vis_noms',
                            'vis_pris_noms',
                            'vis_visite_date',
                            'vis_numero_carte',
                            'created_at',
                            'updated_at',
                            'heure',
                            'phone',
                            'adresse',
                            'picture',
                        ],
                    ]) ?>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
