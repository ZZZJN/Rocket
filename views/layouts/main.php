<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
        .'<img src="/用户头像/测试头像navbar用.JPG" alt="我的头像" class="img-circle" width="35px">'
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
            ['label' => '食材', 'url' => ['/ingredient/list']],
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
        <?= $content ?>
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
