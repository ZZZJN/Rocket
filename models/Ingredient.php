<?php


namespace app\models;


class Ingredient extends \rhosocial\base\models\models\BaseBlameableModel
{
    public $contentAttribute = null;
    public $idAttributeType = 0;
    public $idAttribute = null;
    public $createdByAttribute = 'recipe_guid';
    public $updatedByAttribute='recipe_guid';
    public $createdAtAttribute = null;
    public $updatedAtAttribute = null;
    public $ipAttribute = null;
    public $ipTypeAttribute = null;
    public $enableIP = 0;
    public static function tableName()
    {
        return "{{%ingredient_table}}"; // TODO: Change the autogenerated stub
    }
}