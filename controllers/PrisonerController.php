<?php

namespace app\controllers;

use Yii;
use Symfony\Component\Uid\Uuid;
use app\models\Detenu;


class PrisonerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEntryInformation(){


        $model  = new Detenu();

        $title = 'Ajout Prisonnier';
        \Yii::$app->view->title = $title;

        if ($model->load(Yii::$app->request->post())){
            if ($model->validate()){
                $model->setDateBeforeSave();
                $model->save();
                Yii::$app->session->setFlash('success', '<div class="alert alert-success" role="alert">
                                                <strong>Well done!</strong> You successfully Inmate saved!.
                                            </div>');
                return $this->render('add',['model'=>$model]);

            }
            //print_r($model->getErrors());
        }else{

            return $this->render('add',['model'=>$model]);
        }

    }

    public function actionListPrisoners(){
        $appname = Yii::$app->name;
        Yii::$app->view->title = "List Prisonners";

        $model = Detenu::find()->all();
        return $this->render('list_prisoners',['model'=>$model]);
    }
}
