<?php

use yii\db\Migration;

/**
 * Class m200805_135052_recipe_table_add_pic_column
 */
class m200805_135052_recipe_table_add_pic_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("{{%recipe}}",'pic','string');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("{{%recipe}}",'pic');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200805_135052_recipe_table_add_pic_column cannot be reverted.\n";

        return false;
    }
    */
}
