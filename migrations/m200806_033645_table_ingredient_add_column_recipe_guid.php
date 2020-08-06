<?php

use yii\db\Migration;

/**
 * Class m200806_033645_table_ingredient_add_column_recipe_guid
 */
class m200806_033645_table_ingredient_add_column_recipe_guid extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("{{%ingredient_table}}",'recipe_guid','varbinary(16) not null');
        $this->addForeignKey('ingredient_fk_add',"{{%ingredient_table}}",'recipe_guid',"{{%recipe}}",'guid','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("{{%ingredient_table}}",'recipe_guid');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200806_033645_table_ingredient_add_column_recipe_guid cannot be reverted.\n";

        return false;
    }
    */
}
