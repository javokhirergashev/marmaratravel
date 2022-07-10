<?php

namespace app\controllers;

use app\models\StaticFunctions;
use app\models\Tours;

class ToursController extends GeneralController
{
    public function actionView()
    {
        $models = Tours::find()->where(['status' => 1,])->all();
//        debug($models);die();
//          $image = StaticFunctions::getImage('tours',$models->id,$models->images);
        return $this->render('view', compact('models'));
    }
}