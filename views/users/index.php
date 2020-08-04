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
    <a type="button" class="btn btn-org" href="http://rocket/index.php?r=users%2Fchange-user-information">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 修改信息
    </a>
</div>

