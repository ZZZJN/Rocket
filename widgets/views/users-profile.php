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
        <img src="http://p1.music.126.net/5jWlBF-lPNvKlqm9Am_K7A==/109951163646752700.jpg?param=180y180"
             class="img-circle" width="100" height="100">
    </div>
    <div class="id"><strong>&nbsp;" <?= $nickname ?> " </strong></div>
</div>
<hr>
<div class="infos">
    ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $id ?>
</div>
<hr>
<div class="infos">
    姓名&nbsp;&nbsp;&nbsp;&nbsp;<?= $last_name ?><?= $first_name ?>
</div>
<div class="infos">
    性别&nbsp;&nbsp;&nbsp;&nbsp;<?= $gender ?>
</div>