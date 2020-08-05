<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '我喜欢的菜';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="center">
    <?= app\widgets\UsersHeader::widget(['title' => '我收藏的菜谱','slogan' => '吃是最好的安慰']) ?>
</div>

