<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '我创作的菜谱';
$this->params['breadcrumbs'] = [
    [
        'label'=> '个人中心',
        'url'=>['/users/index']
    ],
    '我创作的菜谱'
];
?>

<div class="center">
    <?= app\widgets\UsersHeader::widget(['title' => '我创作的菜谱','slogan' => '唯美食与爱不可辜负']) ?>
    <div style="margin-right: 80px;"><?= app\widgets\UploadRecipeButton::widget() ?></div>
    <br><br><br><br>
    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'番茄红汤面','recipe_imgsrc'=>'/菜谱缩略图/炙烤牛排.jpg',
        'usr_name'=>Yii::$app->user->getIdentity()->profile->nickname,'usr_imgsrc'=>'/用户头像/测试头像navbar用.JPG']) ?>
    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'红烧猪蹄','recipe_imgsrc'=>'/菜谱缩略图/素罗宋汤.jpg',
        'usr_name'=>Yii::$app->user->getIdentity()->profile->nickname,'usr_imgsrc'=>'/用户头像/测试头像navbar用.JPG']) ?>
    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'快手便当','recipe_imgsrc'=>'/菜谱缩略图/肋排薯条沙拉碗.jpg',
        'usr_name'=>Yii::$app->user->getIdentity()->profile->nickname,'usr_imgsrc'=>'/用户头像/测试头像navbar用.JPG']) ?>
</div>


