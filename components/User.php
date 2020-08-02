<?php


namespace app\components;
use rhosocial\user\models\LoginMethod\ID;
class User extends \rhosocial\user\components\User
{
    public function getLoginPriority()
    {
        return [
            self::LOGIN_BY_ID => ID::class
        ];
    }

}