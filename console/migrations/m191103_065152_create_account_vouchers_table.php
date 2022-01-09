<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vouchers}}`.
 */
class m191103_065152_create_account_vouchers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_vouchers}}', [
            'id' => $this->bigInteger()->notNull(),
            'voucher_code' => $this->string(64)->notNull()->unique(),
            'voucher_type' => $this->integer()->notNull(),
            'remarks' => $this->text()->notNull(),
            'debit_total' => $this->double()->notNull(),
            'credit_total' => $this->double()->notNull(),
            'transaction_date' => $this->timestamp()->notNull(),

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
        $this->dropTable('{{%account_vouchers}}');
    }
}
