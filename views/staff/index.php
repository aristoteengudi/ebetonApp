<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employes');
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
                        <?= Html::a(Yii::t('app', 'Create Employe'), ['create'], ['class' => 'btn btn-success']) ?>
                    </p>

                    <?php Pjax::begin(); ?>
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'id',
                            'matricule',
                            'nom',
                            'prenom',
                            'postnom',
                            'prison_name',
                            //'date_naissance',
                            //'lieu_naissance',
                            //'date_embauche',
                            //'fonction',
                            //'service',
                            //'created_by',
                            'created_at',
                            //'updated_at',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>

                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
