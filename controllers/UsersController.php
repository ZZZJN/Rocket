<?php

namespace app\controllers;

class UsersController extends \yii\web\Controller
{
    public $layout = 'user-style';

    public function actionChangeUserInformation()
    {
        return $this->render('change-user-information');
    }

    public function actionFavourite()
    {
        return $this->render('favourite');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRecipe()
    {
        return $this->render('recipe');
    }

    public function actionOtherUser()
    {
        return $this->render('other-user');
    }

}
