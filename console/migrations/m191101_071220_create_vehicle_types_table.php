<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vehicle_types}}`.
 */
class m191101_071220_create_vehicle_types_table extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%vehicle_types}}', [
                'id' => $this->primaryKey()->unique()->notNull(),

                'type'        => $this->text()->null(),
                'description' => $this->text()->null(),
                'remark'      => $this->text()->null(),
                'is_active'   => $this->integer()->notNull(),

                'verification_status' => $this->smallInteger()->notNull()->defaultValue(0),
                'verification_id' => $this->bigInteger()->null(),
                'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'updated_on'      => $this->timestamp()->null(),
                'created_by'      => $this->bigInteger()->notNull(),
                'updated_by'      => $this->bigInteger()->null()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%vehicle_types}}');
    }
}
