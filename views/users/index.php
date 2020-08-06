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

        <a type="button"  style="float: right; margin-right: 100px" class="btn btn-org" href="http://rocket/user/security/change-password.html">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <strong>修改密码</strong>
        </a>
        <a type="button" style="float: right;" class="btn btn-orggg" href="http://rocket/users/change-user-information.html">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> <strong>修改信息</strong>
        </a>


</div>

