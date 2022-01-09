<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%locations}}`.
 */
class m191101_071128_create_locations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%locations}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'name' => $this->text()->notNull(),
            'street' => $this->text()->notNull(),
            'city' => $this->text()->notNull(),
            'district' => $this->text()->notNull(),
            'zone' => $this->text()->null(),
            'state' => $this->text()->notNull(),
            'longitude' => $this->text()->null(),
            'latitude' => $this->text()->null(),
            'description' => $this->text()->null(),
            'is_active' => $this->text()->notNull()->defaultValue(1),


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
        $this->dropTable('{{%locations}}');
    }
}
