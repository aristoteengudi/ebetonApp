<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VisiteursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Visiteurs');
$this->params['breadcrumbs'][] = $this->title;
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
                        <?= Html::a(Yii::t('app', 'Create Visiteurs'), ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?php Pjax::begin(); ?>
                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'tableOptions' => ['class' => 'table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline'],
                        'pager' => [
                            'firstPageLabel' => 'first',
                            'lastPageLabel' => 'last',
                            'prevPageLabel' => 'previous',
                            'nextPageLabel' => 'next',
                            'maxButtonCount' => 3,

                            // Customzing options for pager container tag
                            'options' => [
                                'tag' => 'ul',
                                'class' => 'pagination pagination-sm',
                            ],

                            // Customzing CSS class for pager link
                            'linkOptions' => ['class' => 'page-link'],
                            'activePageCssClass' => 'page-item active',
                            'disabledPageCssClass' => 'disabled',

                            // Customzing CSS class for navigating link
                            'prevPageCssClass' => 'page-link',
                            'nextPageCssClass' => 'page-link',
                            'firstPageCssClass' => 'page-link',
                            'lastPageCssClass' => 'page-link',
                        ],
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            //'id',
                            'vis_noms',
                            'vis_pris_noms',
                            'vis_visite_date',
                            'vis_numero_carte',
                            'phone',
                            //'created_at',
                            //'updated_at',

                            ['class' => 'yii\grid\ActionColumn',
                                'contentOptions' => ['style' => 'width:260px;'],
                                'header'=>'Actions',
                                'template' => '{view} {update} {delete}',
                                'buttons' => [

                                    //view button
                                    'view' => function ($url, $model) {
                                        return  Html::a('<span class=" ti-eye"></span> View', $url,
                                            [ 'title' => Yii::t('app', 'View'), 'class'=>'btn btn-primary btn-sm', ]) ;
                                    },
                                    'update' => function ($url, $model) {
                                        return  Html::a('<span class="ti-pencil-alt"></span> Update', $url,
                                            [ 'title' => Yii::t('app', 'Update'), 'class'=>'btn btn-info btn-sm', ]) ;
                                    },
                                    'delete' => function ($url, $model) {
                                        return  Html::a('<span class="ti-trash"></span>Delete', $url,
                                            [ 'title' => Yii::t('app', 'View'), 'class'=>'btn btn-danger btn-sm',
                                              'data'=>[
                                                      'confirm'=>Yii::t('app','Are you sure you want to delete this item ?'),
                                                      'method' =>'post'
                                                  ]
                                            ]) ;
                                    },
                                ],
                            ],
                        ],
                    ]);

                    ?>

                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
