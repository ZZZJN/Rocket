<?php

use rhosocial\user\migrations\Migration;
/**
 * Class m200802_140122_recipe_classification
 */
class m200802_140122_recipe_classification extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driverName==='mysql'){
            $tableOptions = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='recipe_classification'";
            $this->createTable("{{%recipe_classification}}", [

                'guid' => $this->varbinary(16)->notNull()->comment(' guid'),

                'content' => $this->varchar(255)->notNull()->defaultValue('')->collate('utf8mb4_unicode_ci')->comment('classification content'),
                
                'recipe_guid' => $this->varbinary(16)->notNull()->comment('recipe_guid'),
                
                

            ], $tableOptions);
        }
        $this->addPrimaryKey('classification_pk', "{{%recipe_classification}}", ['content','recipe_guid']);

        $this->addForeignKey('classification_recipe_guid_fk', "{{%recipe_classification}}", 'recipe_guid', '{{%recipe}}', 'guid', 'CASCADE', 'CASCADE');

 

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%recipe_classification}}");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200802_140122_recipe_classification cannot be reverted.\n";

        return false;
    }
    */
}
