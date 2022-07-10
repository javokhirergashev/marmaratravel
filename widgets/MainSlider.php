<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class MainSlider extends Widget
{
    public function run()
    {
        return $this->render('main-slider');
    }
}