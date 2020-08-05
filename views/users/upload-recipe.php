<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\widgets\Alert;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;

$this->title = '上传菜谱';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="center">
<div class="divs"><br><div class="id"><strong>上传菜谱</strong></div></div>
    <hr><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">菜名</span>
        <input type="text" class="form-control" placeholder="请输入菜谱名称" aria-describedby="basic-addon1">
    </div>

    <br><br>

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">简介</span>
        <textarea rows="4" style="min-width: 100%;resize: none;height: 100px;" placeholder="请输入简介"></textarea>
    </div>

    <br><hr><br>

    <label for="category"><div class="subttl">菜谱分类</div></label>
    <div>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> 家常菜
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox2" value="option2"> 快手菜
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 下饭菜
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 早餐&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 肉&nbsp;&nbsp;&nbsp;&nbsp;
        </label>
        <br>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 鱼&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 蔬菜&nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 鸡蛋&nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 汤羹&nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 烘焙&nbsp;&nbsp;&nbsp;
        </label>
        <br>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 主食&nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 儿童&nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 婴幼儿
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 老人&nbsp;&nbsp;&nbsp;
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> 孕产妇
        </label>


    </div>


   <br><br>

    <a type="button" class="btn btn-org" style="float: right;"
       href="http://rocket/index.php?r=users%2Fchange-user-information">
        <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span><strong>&nbsp;&nbsp;提&nbsp;交</strong>
    </a>

    <br><br>

    <?= \app\widgets\Page::widget() ?>

</div>

