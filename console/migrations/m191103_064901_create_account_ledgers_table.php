<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account_ledgers}}`.
 */
class m191103_064901_create_account_ledgers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_ledgers}}', [
            'id' => $this->primaryKey()->notNull(),
            'ledger_code' => $this->text()->notNull(),
            'name' => $this->text()->notNull(),
            'opening_balance' => $this->text()->notNull()->defaultValue(0),
            'totaldebit' => $this->text()->notNull()->defaultValue(0),
            'totalcredit' => $this->text()->notNull()->defaultValue(0),
            'balance' => $this->text()->notNull()->defaultValue(0),
            'credit_days' => $this->integer()->notNull()->defaultValue(0),
            'credit_interest_rate' => $this->double()->notNull()->defaultValue(0),
            'ledger_type' => $this->integer()->notNull(),

            'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_on'          => $this->timestamp()->null(),
            'created_by'          => $this->bigInteger()->notNull(),
            'updated_by'          => $this->bigInteger()->null(),

            'is_active' => $this->text()->notNull()->defaultValue(1),
            'is_permanent' => $this->text()->notNull()->defaultValue(0),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%account_ledgers}}');
    }
}
