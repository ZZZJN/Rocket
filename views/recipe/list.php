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
            <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'粉蒸肉','recipe_imgsrc'=>'/菜谱详情页/粉蒸肉.jpg',
                'usr_name'=>'爱生活的多妈','usr_imgsrc'=>'/用户头像/粉蒸肉.JPG']) ?>
        </div>
    </div>
    <div class="left">
        <?= app\widgets\recipelistnav::widget() ?>
    </div>
</div>
</body>

