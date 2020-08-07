<?php


namespace app\controllers;
use Yii;

class TestdataController extends \yii\web\Controller
{
    public function actionAddRecipe()
    {
        $users=\app\models\User::find()->all();
        $user=$users[0];
        $addr=$user->create(\app\models\Recipe::class,[
            'title'=>'维尼煎蛋炒饭',
            'introduction'=>'不只是普通的炒饭哦，快来看看吧',
            'pic'=>'\菜谱缩略图\维尼煎蛋炒饭.jpg',
            'tips'=>'']);
        return $addr->save();
    }
    public function actionAddRecipeStep()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[8];
        $add=$recipe->create(\app\models\RecipeStep::class,[
            'no'=>'4',
            'content'=>'可以下饭、做日式拉面配料，味道简直不要太完美
            ']);
        return $add->save();
    }
    public function actionAddIngredient()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[3];
        $addi=$recipe->create(\app\models\Ingredient::class,[
            'introduction'=>'',
            'name'=>'细砂糖']);
        return $addi->save();
    }
    public function actionAddClassification()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[6];
        $addc=$recipe->create(\app\models\Classification::class,['content'=>'下饭菜']);
        return $addc->save();
    }
    public function actionAddFavorite()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[8];
        $users=\app\models\User::find()->all();
        $user=$users[2];
        $addf=$user->create(\app\models\RecipeFavorite::class, ['recipe_guid'=>$recipe->guid]);
        return $addf->save();
    }
    public function actionAddLike()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[7];
        $users=\app\models\User::find()->all();
        $user=$users[0];
        $addf=$user->create(\app\models\RecipeLike::class, ['recipe_guid'=>$recipe->guid]);
        return $addf->save();
    }
}