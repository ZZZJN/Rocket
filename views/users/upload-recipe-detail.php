<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\widgets\Alert;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;

$this->title = '上传菜谱';
$this->params['breadcrumbs'] = [
    [
        'label'=> '个人中心',
        'url'=>['/users/index']
    ],
    '上传菜谱'
];
?>

<div class="center">

    <div class="divs"><br><div class="id"><strong>菜谱细节</strong></div></div>
    <hr><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">步骤 1</span>
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">步骤 2</span>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">步骤 3</span>
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">步骤 4</span>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">步骤 5</span>
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">步骤 6</span>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">步骤 7</span>
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">步骤 8</span>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">步骤 9</span>
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="请在此处输入" aria-describedby="basic-addon1">
        <span class="input-group-addon" id="basic-addon1">步骤 10</span>
    </div>
    <br><br>

    <form method="post" enctype="multipart/form-data" action="01upload.php">
        <input type="file" name="image[]"/>
        <input type="submit" name="btn" style="float: right;" value="上传文件"/>
    </form>

    <br><br><br><br>

    <a type="button" class="btn btn-org" style="float: right;"
       href="http://rocket/index.php?r=users%2Fchange-user-information">
        <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span><strong>&nbsp;&nbsp;提&nbsp;交</strong> </a>

    <br><br><br>

    <?= \app\widgets\Page::widget() ?>



</div>