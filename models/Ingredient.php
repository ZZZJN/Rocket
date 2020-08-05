<?php


namespace app\models;


class Ingredient extends \rhosocial\base\models\models\BaseBlameableModel
{
    public $contentAttribute = null;
    public $idAttributeType = 0;
    public $idAttribute = null;
    public $createdAtAttribute = null;
    public $updatedAtAttribute = null;
    public $ipAttribute = null;
    public $ipTypeAttribute = null;
    public $enableIP = 0;
}