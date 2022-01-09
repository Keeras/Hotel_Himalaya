<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%verifications}}`.
 */
class m191101_071706_create_verifications_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%verifications}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'table' => $this->text()->notNull(),
            'row_id' => $this->bigInteger()->notNull(),

            'request_comment' => $this->text()->notNull(),
            'requested_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),

            'requested_by' => $this->bigInteger()->notNull(),

            'verification_status' => $this->integer()->notNull()->defaultValue(0),
            'verification_comment' => $this->text()->notNull(),
            'verified_by' => $this->bigInteger()->notNull(),
            'verified_on' => $this->timestamp()->notNull(),
        ]);
 }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%verifications}}');
    }
}
