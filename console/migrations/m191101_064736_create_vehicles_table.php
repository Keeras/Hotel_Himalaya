<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vehicle}}`.
 */
class m191101_064736_create_vehicles_table extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%vehicles}}', [
                'id'                => $this->primaryKey()->unique()->notNull(),
                'type'              => $this->string()->notNull(),
                'user_id'           => $this->bigInteger()->notNull(),
                'number_plate'      => $this->string()->notNull(),
                'bluebook_number'   => $this->string()->notNull(),
                'bluebook_image'    => $this->string()->null(),
                'registration_date' => $this->integer()->null(),
                'model'             => $this->integer()->null(),
                'manufacturer'      => $this->integer()->null(),
                'description'       => $this->integer()->null(),
                'amenities'         => $this->integer()->null(),
                'seat_count'        => $this->integer()->null(),
                'seat_map'          => $this->integer()->null(),
                'seats'             => $this->integer()->null(),
                'contact_person'    => $this->string()->null(),
                'contact_info'      => $this->integer()->null(),
                'featured_image'    => $this->integer()->null(),
                'images'            => $this->integer()->null(),

                'is_active' => $this->integer()->notNull()->defaultValue(0),

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
    public function safeDown() {
        $this->dropTable('{{%vehicle}}');
    }
}
