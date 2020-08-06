<?php
/* @var $usr_imgsrc 用户头像路径  */
/* @var $recipe_imgsrc 菜谱图片路径  */
/* @var $usr_name 用户昵称 */
/* @var $recipe_name 菜谱名称 */

?>
<a href="<?= \yii\helpers\Url::toRoute('recipe/fenzhengrou') ?>">
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="thumbnail">
        <img src="<?=$recipe_imgsrc?>" alt=<?= $recipe_name?>; width="252"; height="120"; style="padding: 12px 10px 0px 10px;" >
        <div class="caption">
            <p style="font-size:18px;text-align: center;"><?= $recipe_name?></p>
        </div>
        <span>
            <img src="<?=$usr_imgsrc?>" alt=<?= $usr_name?> style="width:40px;padding:0px 0px 12px 15px">
            <span style="font-size:14px;padding-left: 5px;"><?= $usr_name?></span>
        </span>
    </div>
</div>
</a>
