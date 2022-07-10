<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Map extends Widget
{
    public function run()
    {
        return $this->render('map');
    }
}