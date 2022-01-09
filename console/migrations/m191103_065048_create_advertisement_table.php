<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%advertizement}}`.
 */
class m191103_065048_create_advertisement_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%advertisement}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'name' => $this->text()->notNull(),
            'label' => $this->text()->null(),
            'caption' => $this->text()->null(),
            'content' => $this->text()->null(),
            'alt_text' => $this->text()->null(),
            'company' => $this->text()->null(),
            'company_address' => $this->text()->null(),
            'contact_person' => $this->text()->null(),
            'contact_person_phone' => $this->text()->null(),
            'contact_person_email' => $this->text()->null(),
            'featured_image' => $this->text()->null(),
            'position' => $this->text()->null(),
            'is_active' => $this->smallInteger()->notNull()->defaultValue(1),
            'is_graphic' => $this->smallInteger()->notNull()->defaultValue(1),

            'user_id' => $this->bigInteger()->null(),

            'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_on'          => $this->timestamp()->null(),
            'expiry_on'          => $this->timestamp()->notNull(),
            'created_by'          => $this->bigInteger()->notNull(),
            'updated_by'          => $this->bigInteger()->null(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%advertisement}}');
    }
}
