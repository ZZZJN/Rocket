<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '个人中心';
$this->params['breadcrumbs'][] = $this->title;
$menu='User Menu';

?>
<div class="center">
    <div class="divs">
        <div class="imgs">
            <img src="http://p1.music.126.net/5jWlBF-lPNvKlqm9Am_K7A==/109951163646752700.jpg?param=180y180"
                 class="img-circle" width="100" height="100">
        </div>
        <div class="id">&nbsp;" 昵称 " </div>
    </div>
    <hr>
    <div class="infos">
        ID&nbsp;&nbsp;
    </div>
    <hr>
    <div class="infos">
        姓名&nbsp;&nbsp;
    </div>
    <div class="infos">
        性别&nbsp;&nbsp;
    </div>
    <hr>
    <a type="button" class="btn btn-org" href="http://rocket/index.php?r=users%2Fchange-user-information">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 修改信息
    </a>
</div>

