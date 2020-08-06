<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\HomeAsset;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= Html::encode($this->title) ?></title>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/css/coming-soon.min.css" rel="stylesheet">
</head>


<body>
<div class="overlay" style="background-color: whitesmoke"></div>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="/mp4/Dish.mp4" type="video/mp4">
</video>

<div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                    <img src="/logo/横版.png" style="height: 90px;">
                    <!-- <h1 class="mb-3">一日叁餐</h1>  -->
                    <p class="mb-5" style="font-size:24px;padding-top: 140px;"><strong>我们不仅关注一日叁餐，</strong></p>
                    <p class="mb-5" style="font-color:#011936;font-size: 28px;"><strong>还关心你。</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
            <a href="<?= \yii\helpers\Url::toRoute('recipe/list') ?>">
            </a>
            <span style="color: white;font-size: 18px;">食谱</span>
        </li>
        <li class="list-unstyled-item">
            <a href="<?= \yii\helpers\Url::toRoute('ingredient/list') ?>">
            </a>
            <span style="color: white;font-size: 18px;">食材</span>
        </li>
        <li class="list-unstyled-item">
            <a href="<?= \yii\helpers\Url::toRoute('health/index') ?>">
            </a>
            <span style="color: white;font-size: 18px;">健康知识</span>
        </li>
        <li class="list-unstyled-item">
            <a href="<?= \yii\helpers\Url::toRoute('site/login') ?>"></a>
            <span style="color: white;font-size: 18px;">登录</span>
        </li>
    </ul>
</div>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/coming-soon.min.js"></script>





</body>

</html>
<?php $this->endPage() ?>