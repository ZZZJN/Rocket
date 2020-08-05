<?php
use rhosocial\user\User;
use yii\web\View;

/* @var $this View */
/* @var $title 标题 */
/* @var $slogan 标语 */

?>

<div class="divs">
    <div class="imghover">
        <img src="<?=yii\helpers\Url::to('@web/logo/图7.4users用.png')?>" width="175" height="100"/>
    </div>
    <div class="id">
        <strong> &nbsp;<?= $title ?></strong>
        <div class="infos">
            <strong> &nbsp;「<?= $slogan ?>」</strong>
        </div>
    </div>
    <div class="hr">
        <hr>
    </div>
</div>