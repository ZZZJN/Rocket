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
            <div class="row">
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'粉蒸肉','recipe_imgsrc'=>'/菜谱缩略图/粉蒸肉.jpg',
                    'usr_name'=>'爱生活的多妈','usr_imgsrc'=>'/用户头像/粉蒸肉.JPG']) ?>
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'上海炒面','recipe_imgsrc'=>'/菜谱缩略图/上海炒面.jpg',
                    'usr_name'=>'爱吃鱼的熊','usr_imgsrc'=>'/用户头像/1.JPG']) ?>
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'台式卤肉饭','recipe_imgsrc'=>'/菜谱缩略图/台式卤肉饭.jpg',
                    'usr_name'=>'X','usr_imgsrc'=>'/用户头像/2.JPG']) ?>
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'土豆沙拉三明治','recipe_imgsrc'=>'/菜谱缩略图/土豆沙拉三明治.jpg',
                    'usr_name'=>'Qunctional','usr_imgsrc'=>'/用户头像/3.JPG']) ?>
            </div>
            <div class="row">
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'炸猪排','recipe_imgsrc'=>'/菜谱缩略图/炸猪排.jpg',
                    'usr_name'=>'一个西瓜又大又圆','usr_imgsrc'=>'/用户头像/4.JPG']) ?>
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'生拌娃娃菜','recipe_imgsrc'=>'/菜谱缩略图/生拌娃娃菜.jpg',
                    'usr_name'=>'杭州小厨娘','usr_imgsrc'=>'/用户头像/5.JPG']) ?>
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'素斋面','recipe_imgsrc'=>'/菜谱缩略图/素斋面.jpg',
                    'usr_name'=>'粗腿小狸猫','usr_imgsrc'=>'/用户头像/6.JPG']) ?>
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'葱油饼','recipe_imgsrc'=>'/菜谱缩略图/葱油饼.jpg',
                    'usr_name'=>'zoeylee','usr_imgsrc'=>'/用户头像/7.JPG']) ?>
            </div>
            <div class="row">
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'蜜汁小牛肉','recipe_imgsrc'=>'/菜谱缩略图/蜜汁小牛肉.jpg',
                    'usr_name'=>'甜甜的阿四','usr_imgsrc'=>'/用户头像/8.JPG']) ?>
                <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'金汤柠檬鱼','recipe_imgsrc'=>'/菜谱缩略图/金汤柠檬鱼.jpg',
                    'usr_name'=>'风轻云淡','usr_imgsrc'=>'/用户头像/9.JPG']) ?>
            </div>
        </div>
    </div>
    <div class="left">
        <?= app\widgets\recipelistnav::widget() ?>
    </div>
</div>
</body>

