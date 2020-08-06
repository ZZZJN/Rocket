<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '我喜欢的菜';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="centerlist">
    <?= app\widgets\UsersHeader::widget(['title' => '我收藏的菜谱','slogan' => '吃是最好的安慰']) ?>
    <div style="margin-top: 35px;">
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'番茄红汤面','recipe_imgsrc'=>'/菜谱缩略图/番茄红汤面.jpeg',
            'usr_name'=>'小土豆和他们的妈妈','usr_imgsrc'=>'/用户头像/10.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'红烧猪蹄','recipe_imgsrc'=>'/菜谱缩略图/红烧猪蹄.jpeg',
            'usr_name'=>'我爱厨房爱下厨呀','usr_imgsrc'=>'/用户头像/11.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'快手便当','recipe_imgsrc'=>'/菜谱缩略图/快手便当.jpeg',
            'usr_name'=>'本宫待你不薄啊','usr_imgsrc'=>'/用户头像/12.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'奶香绿豆糕','recipe_imgsrc'=>'/菜谱缩略图/奶香绿豆糕.jpeg',
            'usr_name'=>'三月小厨','usr_imgsrc'=>'/用户头像/13.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'蒲烧鳗鱼饭','recipe_imgsrc'=>'/菜谱缩略图/蒲烧鳗鱼饭.jpeg',
            'usr_name'=>'真牛馆','usr_imgsrc'=>'/用户头像/14.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'清蒸大闸蟹','recipe_imgsrc'=>'/菜谱缩略图/清蒸大闸蟹.png',
            'usr_name'=>'小毓妈妈','usr_imgsrc'=>'/用户头像/15.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'日式溏心蛋','recipe_imgsrc'=>'/菜谱缩略图/日式溏心蛋.jpeg',
            'usr_name'=>'郁闷可可豆','usr_imgsrc'=>'/用户头像/16.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'宝宝蜂蜜草莓松饼','recipe_imgsrc'=>'/菜谱缩略图/宝宝蜂蜜草莓松饼.jpeg',
            'usr_name'=>'是_煩','usr_imgsrc'=>'/用户头像/17.JPG']) ?>
        <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'维尼煎蛋炒饭','recipe_imgsrc'=>'/菜谱缩略图/维尼煎蛋炒饭.jpeg',
            'usr_name'=>'悦己小食光','usr_imgsrc'=>'/用户头像/18.JPG']) ?>
    </div>
</div>

