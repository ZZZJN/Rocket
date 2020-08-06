<?php


namespace app\controllers;


class IngredientController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionList()
    {
        return $this->render('list');
    }
        public function actionBroccoli()
    {
        return $this->render('broccoli');
    }

}