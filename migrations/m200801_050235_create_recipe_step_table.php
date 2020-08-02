<?php

use rhosocial\user\migrations\Migration;

/**
 * Handles the creation of table `{{%recipe_step}}`.
 */
class m200801_050235_create_recipe_step_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {

            $tableOptions = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Recipe_step'";

            $this->createTable('{{%recipe_step}}', [
                'guid' => $this->varbinary(16)->notNull()->comment('食谱此步骤的GUID'),

                'no' => $this->varchar(16)->notNull()->collate('utf8mb4_unicode_ci')->comment('步骤编号.'),

                'content' => $this->text()->notNull()->comment('步骤内容'),

                'recipe_guid' => $this->varbinary(16)->notNull()->comment('食谱的GUID'),

            ], $tableOptions);
        }
        $this->addPrimaryKey('recipe_guid_pk', "{{%recipe_step}}", 'guid');

        $this->addForeignKey('recipe_other_guid_fk', "{{%recipe_step}}", 'recipe_guid', '{{%recipe}}', 'guid', 'CASCADE', 'CASCADE');

        $this->createIndex('recipe_no_unique', "{{%recipe_step}}", 'no', true);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%recipe_step}}");

    }
}
