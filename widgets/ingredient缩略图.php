<?php


namespace app\widgets;


class ingredient缩略图 extends \yii\bootstrap\Widget
{
    public $ing_name;
    public $ing_imgsrc;
    public function run()
    {
        return $this->render('ingredient缩略图',['ing_name'=>$this->ing_name,'ing_imgsrc'=>$this->ing_imgsrc]);
    }
}