<?php

use rhosocial\user\migrations\Migration;

/**
 * Handles the creation of table `{{%recipe}}`.
 */
class m200730_122641_create_recipe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driverName==='mysql'){
            $tableOptions = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Recipe'";
            $this->createTable("{{%recipe}}", [

                'guid' => $this->varbinary(16)->notNull()->comment('GUID'),

                'id' => $this->varchar(16)->notNull()->collate('utf8mb4_unicode_ci')->comment('recipe ID No.'),

                'title' => $this->varchar(255)->notNull()->defaultValue('')->collate('utf8mb4_unicode_ci')->comment('title'),

                'introduction' => $this->text()->notNull()->comment('食谱介绍'),

                'ip' => $this->varbinary(16)->notNull()->defaultValue(0)->comment('IP Address'),

                'ip_type' => $this->tinyInteger(3)->unsigned()->notNull()->defaultValue(4)->comment('IP Address Type'),

                'created_at' => $this->dateTime()->notNull()->defaultValue('1970-01-01 00:00:00')->comment('Created At'),

                'updated_at' => $this->dateTime()->notNull()->defaultValue('1970-01-01 00:00:00')->comment('Updated At'),

                'user_guid' => $this->varbinary(16)->notNull()->comment('Created By'),

            ], $tableOptions);
        }
        $this->addPrimaryKey('recipe_guid_pk', "{{%recipe}}", 'guid');

        $this->createIndex('recipe_id_unique', "{{%recipe}}", 'id', true);

        $this->createIndex('recipe_title', "{{%recipe}}", 'title');

        $this->addForeignKey('recipe_user_fk', "{{%recipe}}", 'user_guid', '{{%user}}', 'guid', 'CASCADE', 'CASCADE');



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%recipe}}");

    }
}
