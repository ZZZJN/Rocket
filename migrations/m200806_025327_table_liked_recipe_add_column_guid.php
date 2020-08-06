<?php

use yii\db\Migration;

/**
 * Class m200806_025327_table_liked_recipe_add_column_guid
 */
class m200806_025327_table_liked_recipe_add_column_guid extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("{{%liked_recipe}}",'guid','varbinary(16) not null');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("{{%liked_recipe}}",'guid');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200806_025327_table_liked_recipe_add_column_guid cannot be reverted.\n";

        return false;
    }
    */
}
