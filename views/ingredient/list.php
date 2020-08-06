<?php
?>
<style>
    .box{
        height: 1200px;
        width: 1200px;
        margin: 0 auto;
    }
    .left{
        float: left;
        width: 350px;
        height: 100%;
        background:#DABEC0;
        margin-left: -100%;
    }
    .center{
        float: left;
        width: 100%;
        height: 100%;
        background: whitesmoke;
}
    #center_main{
        margin: 0px 0px 0px 350px;
    }
</style>

<body>
<div class="box">
    <div class="center">
        <div id="center_main" style="padding:30px;">
            <div class="row">
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'西兰花','ing_imgsrc'=>'/食材缩略图/西兰花.jpg']) ?>
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'黄瓜','ing_imgsrc'=>'/食材缩略图/黄瓜.jpg']) ?>
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'卷心菜','ing_imgsrc'=>'/食材缩略图/卷心菜.jpg']) ?>
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'洋葱','ing_imgsrc'=>'/食材缩略图/洋葱.jpg']) ?>
            </div>
            <div class="row">
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'大蒜','ing_imgsrc'=>'/食材缩略图/大蒜.jpg']) ?>
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'甘蓝','ing_imgsrc'=>'/食材缩略图/甘蓝.jpg']) ?>
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'白萝卜','ing_imgsrc'=>'/食材缩略图/白萝卜.jpg']) ?>
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'茄子','ing_imgsrc'=>'/食材缩略图/茄子.jpg']) ?>
            </div>
            <div class="row">
                <?= app\widgets\ingredient缩略图::widget(['ing_name'=>'大蒜','ing_imgsrc'=>'/食材缩略图/蘑菇.jpg']) ?>
            </div>
        </div>
    </div>
        <div class="left">
            <h3 style="margin-left: 20px;color: #a03a07;">多种食材搭配</h3>
            <h3 style="margin-left: 20px;color: #a03a07;">才能摄入人体所需足够的营养</h3>
            <div style="font-size:large">
                <ul class="nav nav-pills nav-stacked" style="background-color:#eddcd2 ;margin: 40px 20% 0px 12%;padding: 7px">
                <li class="active"><a href="<?= \yii\helpers\Url::toRoute('recipe/list') ?>">蔬菜菌藻类</a></li>
                <li><a href="#">豆类</a></li>
                <li><a href="#">肉蛋类</a></li>
                <li><a href="#">海鲜类</a></li>
                <li><a href="#">乳制品类</a></li>
                <li><a href="#">主食类</a></li>
                <li><a href="#">水果类</a></li>
                <li><a href="#">坚果类</a></li>
                </ul>
            </div>

        </div>

</body>
