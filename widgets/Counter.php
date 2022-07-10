<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Counter extends Widget
{
    public function run()
    {
        return $this->render('counter');
    }
}