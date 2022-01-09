<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_comments}}`.
 */
class m191103_064556_create_blog_comments_table extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%blog_comments}}', [
                'id'          => $this->primaryKey()->unique()->notNull(),
                'blog_id'     => $this->bigInteger()->notNull(),
                'customer_id' => $this->bigInteger()->null(),

                'name'  => $this->text()->notNull(),
                'email' => $this->text()->null(),
                'phone' => $this->text()->null(),

                'verification_status' => $this->smallInteger()->notNull()->defaultValue(0),
                'verification_id'     => $this->bigInteger()->null(),
                'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'created_by'          => $this->bigInteger()->notNull(),
                'updated_on'          => $this->timestamp()->null(),
                'updated_by'          => $this->bigInteger()->null(),

                'is_active' => $this->text()->notNull()->defaultValue(1),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%blog_comments}}');
    }
}
