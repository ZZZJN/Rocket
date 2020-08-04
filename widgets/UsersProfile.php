<?php

namespace app\widgets;

class UsersProfile extends \yii\bootstrap\Widget
{
    public $nickname = 'nickname';
    public $first_name='first_name';
    public $last_name='last_name';
    public $id=111111;
    public $gender='female';
    public function run()
    {
        return $this->render("users-profile",
            ['nickname' => $this->nickname,
                'first_name'=>$this->first_name,
                'last_name'=>$this->last_name,
                'id'=>$this->id,
                'gender'=>$this->gender]);
    }
}