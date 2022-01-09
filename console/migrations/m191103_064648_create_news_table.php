<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m191103_064648_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'slug'           => $this->string(128)->null()->unique(),
            'title'          => $this->text()->null(),
            'featured_image' => $this->text()->null(),
            'images'         => $this->text()->null(),
            'subtitle'       => $this->text()->null(),
            'post_content'   => $this->text()->null(),

            'verification_status' => $this->smallInteger()->notNull()->defaultValue(0),
            'verification_id'     => $this->bigInteger()->null(),
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
        $this->dropTable('{{%news}}');
    }
}
