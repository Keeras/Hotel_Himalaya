<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimonials}}`.
 */
class m191103_064754_create_testimonials_table extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%testimonials}}', [
                'id'        => $this->primaryKey()->unique()->notNull(),
                'image'     => $this->text()->null(),
                'name'      => $this->text()->notNull(),
                'info'      => $this->text()->null(),
                'title'     => $this->text()->null(),
                'content'   => $this->text()->null(),
                'is_active' => $this->smallInteger()->notNull()->defaultValue(1),

                'created_on' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'created_by' => $this->bigInteger()->notNull(),
                'updated_on' => $this->timestamp()->null(),
                'updated_by' => $this->bigInteger()->null(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%testimonials}}');
    }
}
