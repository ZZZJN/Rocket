<?php

/* @var $this yii\web\View */

$this->title = 'rocket';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
        <?php $model = new app\models\Recipe(); ?>
        <?= $model->ipAddress ?>
        <?= $model->getID() ?>
        <?php $model->title = 'title'; $model->introduction = 'introduction';?>
        <?php foreach ($model->attributes() as $att) {
            echo "$att</hr>";
        }?>
        <?= $model->validate() ? '成功' : $model->errors[0] ?>
        <?php if (!Yii::$app->user->isGuest): ?>
        <?= $model->save() ? '成功' : ' 失败' ?>
        <?php endif; ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <?= app\widgets\Step::widget() ?>
            </div>
            <div class="col-lg-4">
                <?= app\widgets\Step::widget(['step_no' => 2,'content'=>'猪肉切块焯水，撇去浮沫。']) ?>
            </div>
            <div class="col-lg-4">
                <?= app\widgets\Step::widget(['step_no' => 3]) ?>
            </div>
        </div>

    </div>
</div>
