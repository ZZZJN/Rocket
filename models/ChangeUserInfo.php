<?php


namespace app\models;


class ChangeUserInfo extends \yii\base\Model
{
    public $nickname;
    public $first_name;
    public $last_name;
    public $gender;

    public function rules()
    {
        $profile = \Yii::$app->user->getIdentity()->profile;
        return [
            ['nickname','string','length'=>[1,255]],
            ['first_name','string','length'=>[1,255]],
            ['last_name','string','length'=>[1,255]],
            ['nickname', 'default', 'value' => $profile->nickname],
            ['first_name', 'default', 'value' => $profile->first_name],
            ['last_name', 'default', 'value' => $profile->last_name],
            ['gender', 'default', 'value' => $profile->gender]
        ];
    }
}