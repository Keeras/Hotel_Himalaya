<?php

use yii\db\Migration;

class m130524_201442_init extends Migration {
    public function up() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
                'id'                   => $this->primaryKey()->notNull()->unique(),
                'username'             => $this->string()->notNull()->unique(),
                'auth_key'             => $this->string(32)->notNull(),
                'password_hash'        => $this->string()->notNull(),
                'password_reset_token' => $this->string()->notNull(),
                'role'                 => $this->integer()->notNull(),

                'name'  => $this->string()->notNull(),
                'email' => $this->string()->null()->unique(),
                'phone' => $this->string()->null()->unique(),
                'image' => $this->string()->null(),

                'verification_token'       => $this->string()->notNull()->unique(),
                'phone_verification_token' => $this->string()->notNull()->unique(),

                'status' => $this->smallInteger()->notNull()->defaultValue(9),

                'verification_status' => $this->smallInteger()->notNull()->defaultValue(0),
                'verification_id'     => $this->bigInteger()->null(),
                'created_on'          => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'updated_on'          => $this->timestamp()->null(),
                'created_by'          => $this->bigInteger()->notNull(),
                'updated_by'          => $this->bigInteger()->null(),
                'failed_attempts'     => $this->integer()->notNull()->defaultValue(0),

        ], $tableOptions);
    }

    public function down() {
        $this->dropTable('{{%user}}');
    }
}
