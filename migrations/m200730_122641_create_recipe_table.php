<?php

use yii\db\Migration;

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
        $this->createTable('{{%recipe}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%recipe}}');
    }
}
