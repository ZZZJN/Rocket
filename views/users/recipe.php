<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '我创作的菜';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="center">
    <?= app\widgets\UsersHeader::widget(['title' => '我创作的菜谱','slogan' => '唯美食与爱不可辜负']) ?>
    <?= app\widgets\UploadRecipeButton::widget() ?>

</div>


