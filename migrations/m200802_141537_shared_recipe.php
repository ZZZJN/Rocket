<?php


use rhosocial\user\migrations\Migration;

/**
 * Class m200802_141537_shared_recipe
 */
class m200802_141537_shared_recipe extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driverName==='mysql'){
            $tableOptions = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='shared_recipe'";
            $this->createTable("{{%shared_recipe}}", [

                'recipe_guid' => $this->varbinary(16)->notNull()->comment('favorite recipe'),

                'user_guid' => $this->varbinary(16)->notNull()->comment('user'),

            ], $tableOptions);
        }
        $this->addPrimaryKey('shared_pk', "{{%shared_recipe}}", ['recipe_guid','user_guid']);

        $this->addForeignKey('shared_recipe_guid_fk', "{{%shared_recipe}}", 'recipe_guid', '{{%recipe}}', 'guid', 'CASCADE', 'CASCADE');

        $this->addForeignKey('shared_user_guid_fk', "{{%shared_recipe}}", 'user_guid', '{{%user}}', 'guid', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%shared_recipe}}");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200802_141537_shared_recipe cannot be reverted.\n";

        return false;
    }
    */
}
