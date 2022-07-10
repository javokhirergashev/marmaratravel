<?php
namespace app\controllers;

use app\models\Hotel;

class HotelController extends GeneralController
{
    public function actionView()
    {
        $models = Hotel::find()->where(['status' => 1,])->all();
//        debug($models);die();
//          $image = StaticFunctions::getImage('tours',$models->id,$models->images);
        return $this->render('view', compact('models'));
    }
}