<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '修改信息';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="half1">

    <h1>基本信息</h1>

    <hr><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">昵称</span>
        <input type="text" class="form-control" placeholder="Nickname" aria-describedby="basic-addon1">
    </div>

    <br><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">姓</span>
        <input type="text" class="form-control" placeholder="last name" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">名</span>
        <input type="text" class="form-control" placeholder="first name" aria-describedby="basic-addon1">
    </div>

    <br><br>

    <a type="button" class="btn btn-org" href="http://rocket/index.php?r=users%2Fchange-user-information">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 提交</a>

</div>

<div class="half2">

    <h1>修改密码</h1>

    <hr><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">请输入旧密码</span>
        <input type="text" class="form-control" placeholder="Old Password" aria-describedby="basic-addon1">
    </div>

    <br><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">请输入新密码</span>
        <input type="text" class="form-control" placeholder="New Password" aria-describedby="basic-addon1">
    </div>

    <br><br>

    <a type="button" class="btn btn-org" href="http://rocket/index.php?r=users%2Fchange-user-information">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 提交</a>

</div>


