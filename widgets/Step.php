<?php


namespace app\widgets;

use Yii;

class Step extends \yii\bootstrap\Widget
{
    public $step_no = 1;
    public $content='';
    public function run()
    {
        return $this->render("step", ['step_no' => $this->step_no,'content'=>$this->content]);
    }
}