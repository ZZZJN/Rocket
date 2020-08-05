<?php

use rhosocial\user\migrations\Migration;

/**
 * Class m200804_093959_ingredient_table
 */
class m200804_093959_ingredient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {

            $tableOptions = "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='ingredient_table'";

            $this->createTable('{{%ingredient_table}}', [
                'guid' => $this->varbinary(16)->notNull()->comment('ingredient GUID'),

                'introduction' => $this->text()->notNull()->comment('ingredient'),

                'name' => $this->varbinary(16)->notNull()->comment('食材名'),

            ], $tableOptions);
        }
        $this->addPrimaryKey('ingredient_guid_pk', "{{%ingredient_table}}", 'guid');


        $this->createIndex('ingredient_name', "{{%ingredient_table}}", 'name', true);




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%ingredient_table}}");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200804_093959_ingredient_table cannot be reverted.\n";

        return false;
    }
    */
}
