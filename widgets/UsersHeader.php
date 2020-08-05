<?php


namespace app\widgets;

class UsersHeader extends \yii\bootstrap\Widget
{
    public $title = 'title';
    public $slogan ='slogan';
    public function run()
    {
        return $this->render("users-header",
            ['title' => $this->title,'slogan' => $this->slogan]);
    }
}