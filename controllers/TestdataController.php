<?php


namespace app\controllers;


class TestdataController extends \yii\web\Controller
{
    public function actionAddRecipe()
    {
        $users=\app\models\User::find()->all();
        $user=$users[0];
        $addr=$user->create(\app\models\Recipe::class,['title'=>'西红柿炒蛋','introduction'=>'吧啦吧啦']);
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
        $addi=create(\app\models\Ingredient::class,['introduction'=>'营养丰富','name'=>'鸡蛋']);
        return $addi->save();
    }
    public function actionAddClassification()
    {
        $recipes=\app\models\Recipe::find()->all();
        $recipe=$recipes[0];
        $addc=$recipe->create(\app\models\Classification::class,['content'=>'家常菜']);
        return $addc->save();
    }
}