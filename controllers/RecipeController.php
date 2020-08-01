<?php

namespace app\controllers;

class RecipeController extends \yii\web\Controller
{
    public function actionIndex($id=0)
    {
        if ($id == 0) {
            // $model = new Recipe(['title' => '菜名']);
        }
        return $this->render('index');
    }

    public function actionList()
    {
        return $this->render('list');
    }

}
