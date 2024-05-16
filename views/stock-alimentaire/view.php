<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

\Yii::$app->session->hasFlash('success');
echo \Yii::$app->session->getFlash('success');

/* @var $this yii\web\View */
/* @var $model app\models\StockAlimentaire */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stock Alimentaires'), 'url' => ['index']];
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
                            'produit',
                            'quantite_entre',
                            'quantite_sorti',
                            'prix_achat',
                            'date_achat',
                            'buy_by',
                            'created_at',
                            'updated_at',
                            'created_by',
                        ],
                    ]) ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>