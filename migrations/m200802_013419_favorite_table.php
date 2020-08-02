<?php

use rhosocial\user\migrations\Migration;

/**
 * Class m200802_013419_favorite_table
 */
class m200802_013419_favorite_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driverName==='mysql'){
            $tableOptions = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Recipe'";
            $this->createTable("{{%favorite}}", [

                'recipe_guid' => $this->varbinary(16)->notNull()->comment('favorite recipe'),

                'user_guid' => $this->varbinary(16)->notNull()->comment('user'),

            ], $tableOptions);
        }
        $this->addPrimaryKey('favorite_pk', "{{%favorite}}", ['recipe_guid','user_guid']);

        $this->addForeignKey('favorite_recipe_guid_fk', "{{%favorite}}", 'recipe_guid', '{{%recipe}}', 'guid', 'CASCADE', 'CASCADE');

        $this->addForeignKey('favorite_user_guid_fk', "{{%favorite}}", 'user_guid', '{{%user}}', 'guid', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%favorite}}");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200802_013419_favorite_table cannot be reverted.\n";

        return false;
    }
    */
}
