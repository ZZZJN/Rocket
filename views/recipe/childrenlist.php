<?php
/* @var $this yii\web\View */
?>
<style>
    .box{
        height: 1200px;
        width: 1200px;
        margin: 0 auto;
    }
    .left{
        float: left;
        width: 300px;
        height: 100%;
        background:#eddcd2;
        margin-left: -100%;
    }
    .center{
        float: left;
        width: 100%;
        height: 100%;
        background: whitesmoke;
    }
    #center_main{
        margin: 0px 0px 0px 300px;
    }
</style>

<body>
<div class="box">
    <div class="center">
        <div id="center_main" style="padding:10px 10px 10px 10px;">
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
    <div class="left">
        <h3 style="margin-left: 20px;color: #a03a07;">热门分类</h3>
        <ul class="nav nav-pills nav-stacked" style="background-color: #DABEC0;margin: 20px 30% 0px 20px;padding: 5px">
            <li><a href="<?= \yii\helpers\Url::toRoute('recipe/list') ?>">家常菜</a></li>
            <li><a href="#">快手菜</a></li>
            <li><a href="#">下饭菜</a></li>
            <li><a href="#">早餐</a></li>
            <li><a href="#">肉</a></li>
            <li><a href="#">鱼</a></li>
            <li><a href="#">蔬菜</a></li>
            <li><a href="#">鸡蛋</a></li>
            <li><a href="#">汤羹</a></li>
            <li><a href="#">烘焙</a></li>
            <li><a href="#">主食</a></li>
        </ul>
        <hr>
        <h3 style="margin-left: 20px;color: #a03a07;">人群</h3>
        <ul class="nav nav-pills nav-stacked" style="background-color: #DABEC0;margin:20px 30% 0px 20px;padding: 5px;">
            <li class="active"><a href="<?= \yii\helpers\Url::toRoute('recipe/childrenlist') ?>">儿童</a></li>
            <li><a href="#">婴幼儿</a></li>
            <li><a href="#">老人</a></li>
            <li><a href="#">孕产妇</a></li>
        </ul>
    </div>
</div>
</body>

