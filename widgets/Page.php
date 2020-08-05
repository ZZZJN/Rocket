<?php


namespace app\widgets;


class Page extends \yii\bootstrap\Widget
{
    public function run()
    {
        return $this->render('page');
    }
}