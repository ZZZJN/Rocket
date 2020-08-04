<?php


namespace app\models;


class Recipe extends \rhosocial\base\models\models\BaseBlameableModel
{
    //public $title;
    public $contentAttribute = 'introduction';
    public $contentAttributeRule = ['string', 'max' => 65535];
    public $idAttributeType = 1;
    public $idAttributeLength = 8;

    public $hostClass = User::class;
    public function rules()
    {
        $rules = [['title', 'string', 'max' => 255, 'min' => 1]];
        return array_merge(parent::rules(), $rules);
    }
    public function attributes()
    {
        $attributes = ['title'];
        return array_merge(parent::attributes(), $attributes);
    }
    public function getSteps()
    {
        return $this->hasMany(RecipeStep::class,['recipe_guid'=>'guid']);
    }
}