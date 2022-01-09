<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%amenities}}`.
 */
class m191101_071052_create_amenities_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%amenities}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'name' => $this->text()->notNull(),
            'display_name' => $this->text()->notNull(),
            'icon' => $this->text()->notNull(),
            'is_active' => $this->smallInteger()->notNull(),
            'description' => $this->text()->notNull(),

            'verification_status' => $this->smallInteger()->notNull()->defaultValue(0),
            'verification_id'     => $this->bigInteger()->null(),
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
        $this->dropTable('{{%amenities}}');
    }
}
