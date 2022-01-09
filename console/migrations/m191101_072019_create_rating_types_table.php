<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rating_types}}`.
 */
class m191101_072019_create_rating_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rating_types}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'category' => $this->text()->notNull(),
            'description' => $this->text()->null(),
            'is_active' => $this->smallInteger()->notNull()->defaultValue(1),

            'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_on'          => $this->timestamp()->null(),
            'created_by'          => $this->bigInteger()->notNull(),
            'updated_by'          => $this->bigInteger()->null(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rating_types}}');
    }
}
