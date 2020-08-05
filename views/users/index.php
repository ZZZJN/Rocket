<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '个人中心';
$this->params['breadcrumbs'][] = $this->title;
$menu='User Menu';

?>
<div class="center">
    <?= \app\widgets\UsersProfile::widget() ?>
    <hr>
    <br>
    <a type="button" style="float: right;" class="btn btn-org" href="http://rocket/users/change-user-information.html">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <strong>修改信息</strong>
    </a>
</div>

