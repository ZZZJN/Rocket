<?php

namespace app\controllers;

class HealthController extends \yii\web\Controller
{
    public $layout = 'health-style';

    public function actionDisease1()
    {
        return $this->render('disease1');
    }

    public function actionDisease2()
    {
        return $this->render('disease2');
    }

    public function actionDisease3()
    {
        return $this->render('disease3');
    }

    public function actionDisease4()
    {
        return $this->render('disease4');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPeople1()
    {
        return $this->render('people1');
    }

    public function actionPeople2()
    {
        return $this->render('people2');
    }

    public function actionPeople3()
    {
        return $this->render('people3');
    }

    public function actionPeople4()
    {
        return $this->render('people4');
    }

    public function actionPeople5()
    {
        return $this->render('people5');
    }

}
