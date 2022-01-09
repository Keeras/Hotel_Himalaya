<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account_ledgers_entries}}`.
 */
class m191103_064919_create_account_ledger_entry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_ledger_entry}}', [
            'id' => $this->primaryKey()->notNull()->unique(),
            'entry_group' => $this->bigInteger()->notNull(),

            'tr_date' => $this->timestamp()->notNull(),
            'particular' => $this->text()->null(),
            'remarks' => $this->text()->null(),
            'debit' => $this->double()->notNull(),
            'credit' => $this->double()->notNull(),

            'ledger_id' => $this->bigInteger()->notNull(),
            'voucher_id' => $this->bigInteger()->notNull(),
            'booking_id' => $this->bigInteger()->notNull(),

            'is_ob' => $this->smallInteger()->notNull(),
            'tax_type' => $this->text()->notNull(),
            'tax_rate' => $this->double()->notNull(),

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
        $this->dropTable('{{%account_ledgers_entries}}');
    }
}
