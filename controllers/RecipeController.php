<?php

namespace app\controllers;

class RecipeController extends \yii\web\Controller
{
    public function actionFenzhengrou()
    {
        return $this->render('fenzhengrou');
    }

    public function actionDoujiangliangmian()
    {
        return $this->render('doujiangliangmian');
    }

    public function actionList()
    {
        return $this->render('list');
    }
    public function actionChildrenlist()
    {
        return $this->render('childrenlist');
    }

}
