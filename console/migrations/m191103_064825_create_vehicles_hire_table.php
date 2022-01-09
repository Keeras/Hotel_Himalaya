<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vehicles_hire}}`.
 */
class m191103_064825_create_vehicles_hire_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vehicles_hire}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'vehicle_type' => $this->text()->notNull(),
            'number_plate' => $this->text()->notNull(),
            'bluebook_num' => $this->text()->notNull(),
            'registration_date' => $this->text()->notNull(),
            'model' => $this->text()->notNull(),
            'manufacturer' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'amenities' => $this->text()->notNull(),
            'seat_count' => $this->text()->notNull(),
            'contact_info' => $this->text()->notNull(),
            'featured_image' => $this->text()->notNull(),
            'images' => $this->text()->notNull(),
            'blue_book_image' => $this->text()->notNull(),

            'availability' => $this->smallInteger()->notNull()->defaultValue(1),
            'availability_schedule' => $this->text()->null(),




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
        $this->dropTable('{{%vehicles_hire}}');
    }
}
