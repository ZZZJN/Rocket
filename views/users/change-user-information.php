<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '修改信息';
$this->params['breadcrumbs'] = [
    [
        'label'=> '个人中心',
        'url'=>['/users/index']
    ],
    '修改信息'
];
?>

<div class="cinfo">
    <?= \rhosocial\user\widgets\ProfileFormWidget::widget() ?>
</div>




