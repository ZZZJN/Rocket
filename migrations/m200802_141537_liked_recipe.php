<?php


use rhosocial\user\migrations\Migration;

/**
 * Class m200802_141537_shared_recipe
 */
class m200802_141537_liked_recipe extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if($this->db->driverName==='mysql'){
            $tableOptions = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='liked_recipe'";
            $this->createTable("{{%liked_recipe}}", [


                'recipe_guid' => $this->varbinary(16)->notNull()->comment('liked recipe'),

                'user_guid' => $this->varbinary(16)->notNull()->comment('user'),

            ], $tableOptions);
        }
        $this->addPrimaryKey('liked_pk', "{{%liked_recipe}}", ['recipe_guid','user_guid']);

        $this->addForeignKey('liked_recipe_guid_fk', "{{%liked_recipe}}", 'recipe_guid', '{{%recipe}}', 'guid', 'CASCADE', 'CASCADE');

        $this->addForeignKey('liked_user_guid_fk', "{{%liked_recipe}}", 'user_guid', '{{%user}}', 'guid', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%liked_recipe}}");
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
