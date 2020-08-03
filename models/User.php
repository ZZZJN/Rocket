<?php

namespace app\models;

class User extends \rhosocial\user\User
{
    public $profileClass = Profile::class;
}
