<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '个人中心';
$this->params['breadcrumbs'][] = $this->title;
$menu='User Menu';


?>
<div class="center">
    <?= \app\widgets\UsersProfile::widget([
            'id'=>Yii::$app->user->getIdentity()->id,
        'nickname'=>Yii::$app->user->getIdentity()->profile->nickname,
        'first_name'=>Yii::$app->user->getIdentity()->profile->first_name,
        'last_name'=>Yii::$app->user->getIdentity()->profile->last_name,
        'gender'=>Yii::$app->user->getIdentity()->profile->gender
    ]) ?>
    <hr>
    <br>
    <a type="button" style="float: right;" class="btn btn-org" href="http://rocket/users/change-user-information.html">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <strong>修改信息</strong>
    </a>
</div>

