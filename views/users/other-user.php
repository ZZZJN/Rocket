<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ta的主页';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-personal">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="body-content">
        <ul>
            <li><label>昵称</label>: <?= Html::encode($model->id) ?></li>
            <li><label>注册时间</label>: <?= Html::encode($model->created_at) ?></li>
            <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">收藏列表</a></p>
            <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">修改信息</a></p>

        </ul>
    </div>
</div>
