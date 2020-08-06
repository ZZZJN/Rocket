<?php

use yii\db\Migration;

/**
 * Class m200806_024814_table_favorite_add_column_guid
 */
class m200806_024814_table_favorite_add_column_guid extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn("{{%favorite}}", 'guid', 'varbinary(16) not null');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn("{{%favorite}}",'guid');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200806_024814_table_favorite_add_column_guid cannot be reverted.\n";

        return false;
    }
    */
}
