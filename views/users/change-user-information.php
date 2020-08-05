<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '修改信息';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="half1">

    <div class="divs"><br><div class="id"><strong>基本信息</strong></div></div>

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

    <form class="form-inline">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">性别</span>
            <div class="btn-group" role="group" aria-label="gender">
                <button type="button" class="btn btn-default">女</button>
                <button type="button" class="btn btn-default">男</button>
            </div>
        </div>

        <a type="button" class="btn btn-org" style="float: right;"
           href="http://rocket/index.php?r=users%2Fchange-user-information">
            <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span><strong>&nbsp;&nbsp;提&nbsp;交</strong> </a>

    </form>

</div>

<div class="half2">

    <div class="divs"><br><div class="id"><strong>修改密码</strong></div></div>

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

    <a type="button" class="btn btn-org" style="float: right;"
       href="http://rocket/index.php?r=users%2Fchange-user-information">
        <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span><strong>&nbsp;&nbsp;提&nbsp;交</strong> </a>

</div>


