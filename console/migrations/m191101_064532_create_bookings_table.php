<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%booking}}`.
 */
class m191101_064532_create_bookings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bookings}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'booking_code' => $this->string(64)->unique()->notNull(),
            'schedule_id' => $this->bigInteger()->notNull(),
            'booker_id' => $this->bigInteger()->notNull(),
            'booking_status' => $this->smallInteger()->notNull(),
            'boarding' => $this->bigInteger()->notNull(),
            'dropping' => $this->bigInteger()->notNull(),
            'price' => $this->double()->notNull(),
            'payment' => $this->text()->notNull(),
            'seats' => $this->text()->notNull(),
            'seat_count' => $this->integer()->notNull(),
            'name' => $this->text()->notNull(),
            'phone' => $this->text()->null(),
            'email' => $this->text()->null(),
            'requests' => $this->text()->null(),
            'cancellation_date' => $this->timestamp()->null(),
            'cancelled_by' => $this->bigInteger()->notNull(),
            'cancellation_comment' => $this->text()->notNull(),
            'has_travelled' => $this->smallInteger()->notNull()->defaultValue(0),
            'has_insurance' => $this->smallInteger()->notNull()->defaultValue(0),
            'can_cancel_ticket' => $this->smallInteger()->notNull()->defaultValue(1),
            'operator_verified' => $this->smallInteger()->notNull()->defaultValue(0),
            'is_cancelled' => $this->smallInteger()->notNull()->defaultValue(0),

            'verification_status' => $this->smallInteger()->notNull()->defaultValue(0),
            'verification_id'     => $this->bigInteger()->null(),

            'created_by'          => $this->bigInteger()->notNull(),
            'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_on'          => $this->timestamp()->null(),
            'updated_by'          => $this->bigInteger()->null(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%booking}}');
    }
}
