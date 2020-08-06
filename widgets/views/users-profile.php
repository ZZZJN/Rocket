<?php

use rhosocial\user\User;
use yii\bootstrap\Modal;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this View */
/* @var $toggleButton array */
/* @var $user User */
/* @var $nickname 昵称 */
/* @var $first_name 名 */
/* @var $last_name 姓 */
/* @var $id id */
/* @var $gender 性别 */
?>

<div class="divs">
    <div class="imgnormal">
        <img src="/用户头像/测试头像navbar用.JPG"
             class="img-circle" width="100" height="100">
    </div>
    <div class="id"><strong>&nbsp;" <?= $nickname ?> " </strong></div>
</div>
<hr>
<div class="infos" style="color: #1f2833">
    <strong>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $id ?></strong>
</div>
<hr>
<div class="infos" style="color: #94401b">
    <strong>姓名&nbsp;&nbsp;&nbsp;&nbsp;<?= $last_name ?><?= $first_name ?></strong>
</div>
<div class="infos" style="color: #d09371">
    <strong>性别&nbsp;&nbsp;&nbsp;&nbsp;<?= $gender==2 ? ("女") : ("男") ?></strong>
</div>