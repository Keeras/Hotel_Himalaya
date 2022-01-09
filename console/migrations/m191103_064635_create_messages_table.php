<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%messages}}`.
 */
class m191103_064635_create_messages_table extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%messages}}', [
                'id'         => $this->primaryKey()->unique()->notNull(),
                'name'       => $this->text()->notNull(),
                'email'      => $this->text()->notNull(),
                'subject'    => $this->text()->null(),
                'message'    => $this->text()->notNull(),
                'is_new'     => $this->smallInteger()->notNull()->defaultValue(1),
                'created_on' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'created_by' => $this->bigInteger()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%messages}}');
    }
}
