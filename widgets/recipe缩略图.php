<?php



namespace app\widgets;


class recipe缩略图 extends \yii\bootstrap\Widget
{
    public $recipe_name;
    public $recipe_imgsrc;
    public $usr_name;
    public $usr_imgsrc;
    public function run()
    {
        return $this->render('recipe缩略图',['recipe_name'=>$this->recipe_name,'recipe_imgsrc'=>$this->recipe_imgsrc,
            'usr_name'=>$this->usr_name,'usr_imgsrc'=>$this->usr_imgsrc]);
    }
}