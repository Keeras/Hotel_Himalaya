<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sections}}`.
 */
class m191103_064721_create_sections_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sections}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'page_id' => $this->text()->notNull(),

            'section_order' => $this->integer()->notNull(),
            'title' => $this->text()->notNull(),
            'sub_title' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),
            'button_text' => $this->text()->notNull(),
            'button_link' => $this->text()->notNull(),
            'button_position' => $this->text()->notNull(),
            'featured_image' => $this->text()->notNull(),
            'images' => $this->text()->notNull(),
            'image_position' => $this->text()->notNull(),

            'is_active' => $this->text()->notNull(),

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
        $this->dropTable('{{%sections}}');
    }
}
