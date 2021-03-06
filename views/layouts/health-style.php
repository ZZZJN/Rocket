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
                height:600px;
                margin: 0px 10px 0px;
                background-color: rgba(255, 219, 204, 0);
            }

            .center{
                float: left;
                width: 70%;
                height:100%;
                margin: 0px 30px 0px 35px;
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
                font-size: 15px;
                margin-bottom: 5px;
                line-height: 21px;
                color: #94401b;
            }
            .intro{
                font-size: 15px;
                color: #555555;
                margin:10px 25px 30px 25px;
                line-height: 28px;
            }
            .subtitle{
                color:#a03a07;
                font-size:25px;
                margin:20px 25px 20px 0px;
            }
            .content{
                font-size: 18px;
                line-height: 30px;
                margin:10px 35px 10px 40px;
                color: #573c14;
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
                'homeLink'=>[
                    'label'=> '一日叁餐',
                    'url'=> ['/site/index'],
                ],
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
                            ['label' => '基础知识', 'url' => ['/health/index']],
                            [
                                'label' => '<i class="fa fa-book"></i><span>不同人群</span>',
                                'url' => 'javascript:;',
                                'options' => ['class' => 'menu-list'],
                                'items' => [
                                    ['label' => '婴幼儿', 'url' => ['/health/people1']],
                                    ['label' => '儿童', 'url' => ['/health/people2']],
                                    ['label' => '孕产妇', 'url' => ['/health/people3']],
                                    ['label' => '老年人', 'url' => ['/health/people4']],
                                    ['label' => '素食主义者', 'url' => ['/health/people5']]
                                ]
                            ],
                            [
                                'label' => '<i class="fa fa-book"></i><span>常见疾病</span>',
                                'url' => 'javascript:;',
                                'options' => ['class' => 'menu-list'],
                                'items' => [
                                    ['label' => '痛风', 'url' => ['/health/disease1']],
                                    ['label' => '心脑血管疾病', 'url' => ['/health/disease2']],
                                    ['label' => '糖尿病', 'url' => ['/health/disease3']],
                                    ['label' => '尿毒症', 'url' => ['/health/disease4']]
                                ]
                            ]
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