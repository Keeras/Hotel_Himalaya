<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%voucher_types}}`.
 */
class m191103_065216_create_account_voucher_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_voucher_types}}', [
            'id' => $this->primaryKey()->unique()->notNull(),

            'type'=>$this->text()->notNull(),
            'description'=>$this->text()->notNull(),

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
        $this->dropTable('{{%account_voucher_types}}');
    }
}
