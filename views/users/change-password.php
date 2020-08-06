<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '修改密码';
$this->params['breadcrumbs'] = [
    [
        'label'=> '个人中心',
        'url'=>['/users/index']
    ],
    '修改密码'
];
?>

<div class="centerlist" style="margin-top: 30px;margin-left: 80px;margin-right: -30px;">
    <?= \rhosocial\user\widgets\ChangePasswordFormWidget::widget(['model'=>$form]) ?>
</div>
