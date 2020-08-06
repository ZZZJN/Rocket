<?php
/* @var $ing_imgsrc 食材图片路径  */
/* @var $ing_name 食材名称 */

?>
<a href="<?= \yii\helpers\Url::toRoute('ingredient/broccoli') ?>">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="thumbnail">
            <img src="<?=$ing_imgsrc?>" alt=<?= $ing_name?>; style="padding: 12px 10px 0px 10px">
            <div class="caption">
                <p style="font-size:18px;text-align: center;"><?= $ing_name?></p>
            </div>
        </div>
    </div>
</a>
