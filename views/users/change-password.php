<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '修改密码';
$this->params['breadcrumbs'][] = $this->title;
?>


<?= \rhosocial\user\widgets\ChangePasswordFormWidget::widget(['model'=>$form]) ?>