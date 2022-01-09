<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%aquired_ratings}}`.
 */
class m191101_072405_create_ratings_acquired_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ratings_acquired}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'rating_group' => $this->bigInteger()->notNull(),
            'vendor_id' => $this->bigInteger()->notNull(),
            'vehicle_id' => $this->bigInteger()->notNull(),
            'rating_type_id' => $this->integer()->notNull(),
            'customer_id' => $this->bigInteger()->notNull(),
            'booking_id' => $this->bigInteger()->notNull(),

            'rating' => $this->float()->notNull(),
            'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

       }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ratings_acquired}}');
    }
}
