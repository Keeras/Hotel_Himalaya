<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account_ledger_type}}`.
 */
class m191103_064936_create_account_ledger_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_ledger_type}}', [
            'id' => $this->primaryKey()->unique()->notNull(),

            'type' => $this->integer()->notNull(),
            'remark' => $this->integer()->notNull(),
            'operator' => $this->integer()->notNull(),

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
        $this->dropTable('{{%account_ledger_type}}');
    }
}
