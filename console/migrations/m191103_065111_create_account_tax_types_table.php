<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tax_types}}`.
 */
class m191103_065111_create_account_tax_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_tax_types}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'name' => $this->text()->notNull(),
            'rate' => $this->float(2)->notNull(),
            'remarks' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'operator' => $this->string(4)->notNull(),

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
        $this->dropTable('{{%account_tax_types}}');
    }
}
