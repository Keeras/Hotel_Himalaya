<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%schedule}}`.
 */
class m191101_064723_create_schedules_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%schedules}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'user_id' => $this->bigInteger()->notNull(),
            'vehicle_id' => $this->bigInteger()->notNull(),
            'is_active' => $this->smallInteger()->notNull()->defaultValue(1),
            'seats' => $this->text()->null(),
            'duration' => $this->string()->notNull(),
            'departure' => $this->timestamp()->notNull(),
            'arrival' => $this->timestamp()->notNull(),
            'location_from' => $this->string()->notNull(),
            'location_to' => $this->string()->notNull(),
            'location_from_id' => $this->bigInteger()->notNull(),
            'location_to_id' => $this->bigInteger()->notNull(),
            'prices' => $this->double()->notNull(),
            'additional_note' => $this->text()->notNull(),
            'cancellation_note' => $this->text()->notNull(),
            'cancellation_rates' => $this->text()->notNull(),
            'drivers_info' => $this->text()->notNull(),
            'has_departed' => $this->smallInteger()->notNull(),
            'operator_id' => $this->bigInteger()->notNull(),
            'operator_verification_status' => $this->integer()->notNull(),
            'booking_closed' => $this->integer()->notNull()->defaultValue(0),

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
        $this->dropTable('{{%schedule}}');
    }
}
