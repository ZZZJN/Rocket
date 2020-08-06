<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

$this->title = 'ta的主页';
$this->context->layout = false;
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        .box{
            height: 1200px;
            width: 1200px;
            margin: 0 auto;
        }

        .center{
            float: left;
            width: 100%;
            height: 100%;
            background: #ffffff;
        }
        #center_main{
            margin: 0px 90px 0px 90px;
        }
        .cinfo{
            float: right;
            width: 70%;
            height:100%;
            margin: 0px 0px 0px 0px;
            background-color: rgba(255, 255, 255, 0);
        }
        .divs .imgnormal{
            margin-bottom: 15px;
            display: inline-block;
            vertical-align: middle;
        }
        .divs .imghover{
            margin-bottom: 55px;
            display: inline-block;
            vertical-align: middle;
        }
        .divs .id{
            font-size: 30px;
            color: #d09371;
            display: inline-block;
        }
        .divs .hr{
            margin-top: -45px;
        }
        .infos{
            font-size: 18px;
            margin-bottom: 5px;
            line-height: 21px;
            color: #94401b;
        }
        .infos-text{
            font-size: 15px;
            margin-bottom: 5px;
            line-height: 21px;
            color: #b6af90;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandImage'=> '@web/logo/navbar logo.png',
        //'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-light navbar-fixed-top',
            //'style' => "background-color: #d6eaea;" 浅蓝色
            'style' => "background-color: #F0EFEB;"

        ],
    ]);
    $userUrl=yii\helpers\Url::toRoute('users/index');
    $change=Yii::$app->user->isGuest ? (
    ['label' => '登录', 'url' => ['/site/login']]
    ) : (
        '<li>'
        .'<a href="'
        .$userUrl
        .'">'
        .'<img src="/用户头像/测试头像navbar用.JPG" alt="我的头像" class="img-circle" width="35px"'
        .'</a>'
        . '</li>'
        .'<li>'
        . Html::beginForm(['/site/logout'], 'post')//应改为进入个人中心
        . Html::submitButton(
            '退出',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>'
    );
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '首页', 'url' => ['/site/index']],
            ['label' => '食谱', 'url' => ['/recipe/list']],
            ['label' => '食材', 'url' => ['/ingredient/index']],
            ['label' => '健康知识', 'url' => ['/health/index']],
            $change
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <div class="box">
            <div class="center">
                <div id="center_main" style="padding:10px 20px 10px 0px;">
                    <div class="divs">
                        <div class="imgnormal">
                            <img src="/用户头像/粉蒸肉.JPG"
                                 class="img-circle" width="100" height="100">
                        </div>
                        <div class="id"><strong>&nbsp;"爱生活的多妈" </strong></div>
                        <hr>
                        <div class="infos" style="color: #b6af90">
                            <strong>性别&nbsp;&nbsp;&nbsp;&nbsp;女</strong>
                        </div>
                        <hr>
                    </div>
                    <div class="infos" style="color: #edd399;margin-bottom: -45px;">
                        <strong>ta的菜谱</strong>
                    </div>
                    <br><br><br><br>
                    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'粉蒸肉','recipe_imgsrc'=>'/菜谱缩略图/粉蒸肉.jpg',
                        'usr_name'=>'爱生活的多妈','usr_imgsrc'=>'/用户头像/粉蒸肉.JPG']) ?>
                    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'五香酱牛肉','recipe_imgsrc'=>'/菜谱缩略图/五香酱牛肉.jpeg',
                        'usr_name'=>'爱生活的多妈','usr_imgsrc'=>'/用户头像/粉蒸肉.JPG']) ?>
                    <a href="<?= \yii\helpers\Url::toRoute('recipe/doujiangliangmian') ?>">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="thumbnail">
                                <img src="/菜谱详情页/豆浆冷面.jpg" alt='豆浆凉面'; style="padding: 12px 10px 0px 10px">
                                <div class="caption">
                                    <p style="font-size:18px;text-align: center;">豆浆凉面</p>
                                </div>
                                <span>
                                    <img src="/用户头像/粉蒸肉.JPG" alt=爱生活的多妈 style="width:40px;padding:0px 0px 12px 15px">
                                    <span style="font-size:14px;padding-left: 5px;">爱生活的多妈</span>
                                </span>
                            </div>
                        </div>
                    </a>

                    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'白灼芥蓝','recipe_imgsrc'=>'/菜谱缩略图/白灼芥蓝.jpeg',
                        'usr_name'=>'爱生活的多妈','usr_imgsrc'=>'/用户头像/粉蒸肉.JPG']) ?>
                    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'泰式柠檬虾 酸酸甜甜就是我','recipe_imgsrc'=>'/菜谱缩略图/泰式柠檬虾 酸酸甜甜就是我.jpeg',
                        'usr_name'=>'爱生活的多妈','usr_imgsrc'=>'/用户头像/粉蒸肉.JPG']) ?>
                    <?= app\widgets\recipe缩略图::widget(['recipe_name'=>'比棉花还柔软的中种北海道吐司','recipe_imgsrc'=>'/菜谱缩略图/比棉花还柔软的中种北海道吐司.jpeg',
                        'usr_name'=>'爱生活的多妈','usr_imgsrc'=>'/用户头像/粉蒸肉.JPG']) ?>

                </div>
            </div>

        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>