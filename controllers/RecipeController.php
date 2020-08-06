<?php

namespace app\controllers;

class RecipeController extends \yii\web\Controller
{
    public function actionFenzhengrou()
    {
        return $this->render('fenzhengrou');
    }

    public function actionDoujianglengmian()
    {
        return $this->render('doujianglengmian');
    }

    public function actionList()
    {
        return $this->render('list');
    }

    public function actionHomecookinglist()
    {
        return $this->render('homecookinglist');
    }

    public function actionChildrenlist()
    {
        return $this->render('childrenlist');
    }

}
