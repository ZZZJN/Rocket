<?php

/* @var $this yii\web\View */
/*        $model           */
/* $this->params['breadcrumbs'][] = ;   面包屑导航  */
?>
<style>
    .box {
        height: 1200px;
        width: 1200px;
        margin: 0 auto;
    }

    .center {
        float: left;
        width: 100%;
        height: 100%;
        background: whitesmoke;
    }

    #center_main {
        margin: 0px 400px 0px 0px;
    }

    .right {
        float: left;
        width: 400px;
        height: 100%;
        background: #eddcd2;
        margin-left: -400px;
    }
</style>

<script type="text/javascript">
    var times = 0;

    function change(btn) {
        btn.style.background = times % 2 == 0 ? '#DABEC0' : 'white';
        times++;
    }
</script>

<div>
    <span style="color:black;display:block;text-align:center;font-size:35px;">粉蒸肉</span>
    <button type="button" class="btn btn-default btn-sm" style="float: right;" onclick="change(this)">
        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>收藏
    </button>
</div><!--标题和收藏按钮 --!>

<br>
<hr>
<br>

<div align="center" ;>
    <img src="/菜谱详情页/粉蒸肉.jpg" alt="粉蒸肉">
</div><!--头图 --!>
<br>

<div class="media" style="margin-bottom: 25px;">
    <div class="media-left media-middle">
        <a href="http://rocket/users/other-user.html">
            <img class="media-object img-circle" src="/用户头像/粉蒸肉.JPG" alt="爱生活的多妈" width="100px">
        </a>
    </div>
    <div class="media-body">
        <h4 style="margin-left: 20px;color: #011936;">
            <br>
            <br>
            "裹着肉的米粉吸饱了肉的鲜美，酥酥的很油润，而肉质更是软糯鲜嫩，一嘴下去酥糯爽口，嫩而不糜，还能越嚼越香。"
        </h4>
    </div>
</div>

<body>
<div class="box">
    <div class="box">
        <div class="center">
            <div id="center_main">
                <?= app\widgets\ingredient::widget() ?>
                <br>
                <?= app\widgets\followme::widget() ?>
                <br>
                <?= app\widgets\suggestionbyauthor::widget() ?>
            </div>
        </div>
        <div class="right">
            <?= app\widgets\otherrecipes::widget() ?>
        </div>
    </div>
</div>
</body>