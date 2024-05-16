<?php


namespace app\models;

use Yii;


class Options
{

    /***
     *
     */
    public function setDateBeforeSave(){
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }
}