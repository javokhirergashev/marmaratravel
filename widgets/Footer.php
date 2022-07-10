<?php

namespace app\widgets;

use app\models\Menu;
use yii\bootstrap4\Widget;

class Footer extends Widget
{
    public function run()
    {
        $models = \app\models\Contacts::find()->all();
        return $this->render('footer',compact('models'));
    }
}