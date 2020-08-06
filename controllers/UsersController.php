<?php

namespace app\controllers;

use app\models\ChangeUserInfo;
use rhosocial\user\Profile;

class UsersController extends \yii\web\Controller
{
    public $layout = 'user-style';

    public function actionChangeUserInformation()
    {
        $profile = \Yii::$app->user->getIdentity()->profile;

        if (\Yii::$app->request->getIsPost() && ($model = \Yii::$app->user->identity->createProfile(['scenario' => Profile::SCENARIO_UPDATE]))
        && $model->load(\Yii::$app->request->post())) {
            $isValid = $model->validate();
            if ($isValid) {
                $model->save();
                return $this->redirect(['change-user-information']);
            }
        }
        return $this->render('change-user-information', [
            'profile' => $profile
        ]);
    }

    public function actionChangePassword()
    {
        $model = new \rhosocial\user\forms\ChangePasswordForm();

        if (\Yii::$app->request->getIsPost() && $model->load(\Yii::$app->request->post())
        && $model->changePassword()) {
                return $this->redirect(['change-password']);
        }
        return $this->render('change-password', [
            'form' => $model
        ]);
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

    public function actionUploadRecipe()
    {
        return $this->render('upload-recipe');
    }

    public function actionUploadRecipeDetail()
    {
        return $this->render('upload-recipe-detail');
    }
    
}
