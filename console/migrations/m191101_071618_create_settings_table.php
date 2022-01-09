<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%setings}}`.
 */
class m191101_071618_create_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'slug' => $this->string(128)->notNull()->unique(),
            'type' => $this->text()->notNull(),
            'caption' => $this->text()->notNull(),
            'is_editable' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),

            'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_on'      => $this->timestamp()->null(),
            'created_by'      => $this->bigInteger()->notNull(),
            'updated_by'      => $this->bigInteger()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%setings}}');
    }
}
