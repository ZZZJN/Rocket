<?php


namespace app\models;


class Profile extends \rhosocial\user\Profile
{
    public $hostClass = User::class;
}