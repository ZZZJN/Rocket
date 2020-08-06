<?php


namespace app\controllers;
use Yii;

class TestdataController extends \yii\web\Controller
{
    public function actionAddRecipe()
    {
        $users=\app\models\User::find()->all();
        $user=$users[0];
        $addr=$user->create(\app\models\Recipe::class,['title'=>'西红柿炒蛋','introduction'=>'吧啦吧啦','pic'=>'\菜谱缩略图\上海炒面.jpg']);
        return $addr->save();
    }
    public function actionAddRecipeStep()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[0];
        $add=$recipe->create(\app\models\RecipeStep::class,['no'=>'1','content'=>'放油']);
        return $add->save();
    }
    public function actionAddIngredient()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[0];
        $addi=$recipe->create(\app\models\Ingredient::class,['introduction'=>'营养丰富','name'=>'鸡蛋']);
        return $addi->save();
    }
    public function actionAddClassification()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[0];
        $addc=$recipe->create(\app\models\Classification::class,['content'=>'家常菜']);
        return $addc->save();
    }
    public function actionAddFavorite()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[0];
        $users=\app\models\User::find()->all();
        $user=$users[0];
        $addf=$user->create(\app\models\RecipeFavorite::class, ['recipe_guid'=>$recipe->guid]);
        return $addf->save();
    }
    public function actionAddLike()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[0];
        $users=\app\models\User::find()->all();
        $user=$users[0];
        $addf=$user->create(\app\models\RecipeLike::class, ['recipe_guid'=>$recipe->guid]);
        return $addf->save();
    }
}