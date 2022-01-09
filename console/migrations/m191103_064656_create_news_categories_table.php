<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_categories}}`.
 */
class m191103_064656_create_news_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_categories}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'parent' => $this->integer()->notNull()->defaultValue(0),
            'name' => $this->text()->notNull(),
            'remark' => $this->text()->null(),
            'description' => $this->text()->null(),

            'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'created_by'          => $this->bigInteger()->notNull(),
            'updated_on'          => $this->timestamp()->null(),
            'updated_by'          => $this->bigInteger()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_categories}}');
    }
}
