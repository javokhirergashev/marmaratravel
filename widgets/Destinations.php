<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Destinations extends Widget
{
    public function run()
    {
        return $this->render('destinations');
    }
}