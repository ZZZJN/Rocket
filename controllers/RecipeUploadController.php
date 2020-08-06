<?php


namespace app\controllers;


class RecipeUploadController extends \yii\web\Controller
{
    public $layout = 'user-style';
    public function actionUploadRecipe()
    {
        $recipe = \Yii::$app->user->getIdentity()->recipe;

        if (\Yii::$app->request->getIsPost() && ($model = \Yii::$app->user->identity->createRecipe(['scenario' => Recipe::SCENARIO_UPDATE]))
            && $model->load(\Yii::$app->request->post())) {
            $isValid = $model->validate();
            if ($isValid) {
                $model->save();
                return $this->redirect(['upload-recipe']);
            }
        }
        return $this->render('upload-recipe', [
            'recipe' => $recipe
        ]);
    }
    public function actionUploadRecipeDetail()
    {
        $recipestep = \Yii::$app->user->getIdentity()->recipe_step;

        if (\Yii::$app->request->getIsPost() && ($model = \Yii::$app->user->identity->createRecipeStep(['scenario' => RecipeStep::SCENARIO_UPDATE]))
            && $model->load(\Yii::$app->request->post())) {
            $isValid = $model->validate();
            if ($isValid) {
                $model->save();
                return $this->redirect(['upload-recipe-detail']);
            }
        }
        return $this->render('upload-recipe-detail', [
            'recipe_step' => $recipestep
        ]);
    }
}