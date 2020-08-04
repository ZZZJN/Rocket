<?php


namespace app\models;


class RecipeFavorite extends \rhosocial\base\models\models\BaseBlameableModel
{
    public $hostClass = User::class;
    public $contentAttribute = null;
    public $idAttributeType = 0;
    public $idAttribute = null;
    public $createdAtAttribute = null;
    public $updatedAtAttribute = null;
    public $ipAttribute = null;
    public static function tableName()
    {
        return "{{%favorite}}"; // TODO: Change the autogenerated stub
    }
}