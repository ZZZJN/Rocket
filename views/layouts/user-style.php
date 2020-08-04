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
        .left{
            float: left;
            width: 18%;
            height:500px;
            margin: 0px 10px 0px;
            background-color: rgba(255, 219, 204, 0);
        }
        .half1{
            float: left;
            width: 30%;
            height:450px;
            margin: -10px 30px 0px 10px;
            background-color: rgba(255, 219, 204, 0);
        }
        .half2{
            float: left;
            width: 30%;
            height:450px;
            margin: -10px 10px 0px 30px;
            background-color: rgba(255, 219, 204, 0);
         }
        .center{
            float: left;
            width: 75%;
            height:100%;
            margin: 0px 30px 0px 10px;
            background-color: rgba(255, 255, 255, 0);
        }
        .divs .imgs{
            display: inline-block;
            vertical-align: middle;
        }
        .divs .id{
            font-size: 30px;
            color: #d09371;
            display: inline-block;
        }
        .infos{
            font-size: 15px;
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
        .btn-org{
            color: #ffffff;
            background-color: #d09371;
        }
        .btn-org:hover {
            background: #d09371;
            color: #edd399;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '首页', 'url' => ['/site/index']],
            ['label' => '菜谱', 'url' => ['/recipe/index']],
            ['label' => '用户中心', 'url' => ['/users/index']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->ID . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
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
            <div class="left">
                <?php echo Menu::widget([
                    'options' => ['class' => 'nav nav-pills nav-stacked custom-nav'],
                    'submenuTemplate' => '<ul class="sub-menu-list">{items}</ul>',
                    'encodeLabels' => false,
                    'activateParents' => true,
                    'activeCssClass' => 'active',
                    'items' => [
                        [
                            'label' => '<i class="fa fa-laptop"></i><span><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;概况</span>',
                            'url' => ['/users/index']],
                        [
                            'label' => '<i class="fa fa-book"></i><span><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>&nbsp;&nbsp;菜谱</span>',
                            'url' => ['/users/recipe']],
                        [
                            'label' => '<i class="fa fa-book"></i><span><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>&nbsp;&nbsp;收藏</span>',
                            'url' => ['/users/favourite']]
                    ]
                ]) ?>
            </div>
            <?= $content ?>
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