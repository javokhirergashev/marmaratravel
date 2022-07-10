<?php

namespace app\widgets;

use yii\bootstrap5\Widget;

class Process extends Widget
{
    public function run()
    {
        return $this->render('process');
    }
}