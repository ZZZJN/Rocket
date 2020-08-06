<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model rhosocial\user\forms\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>
    <?= $result = \rhosocial\user\widgets\LoginFormWidget::widget(['model' => $model]); ?>
    <a type="button" class="btn" style="float: left;margin-left: 195px; font-size: 13px;
    color: #ffffff;    background-color: #337ab6;"
       href="http://rocket/user/register/index.html">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        还没有账号吗？快来注册吧！
    </a>
</div>
