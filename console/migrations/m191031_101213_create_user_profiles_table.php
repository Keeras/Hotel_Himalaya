<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_profiles}}`.
 */
class m191031_101213_create_user_profiles_table extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%user_profiles}}', [
                'id'     => $this->bigInteger()->unique()->notNull(),
                'user_id' => $this->bigInteger()->unique()->notNull(),
                'company'                     => $this->text()->null(),
                'address'                     => $this->text()->null(),
                'phone'                       => $this->integer()->null(),
                'citizenship'                 => $this->string(16)->null(),
                'license_no'                  => $this->string(16)->null(),
                'images'                      => $this->text()->null(),
                'commission_percentage'       => $this->integer()->null(),
                'discount'                    => $this->integer()->null(),
                'allowed_gateways'            => $this->text()->null(),
                'contact_person_name'         => $this->text()->null(),
                'contact_person_phone'        => $this->integer()->null(),
                'contact_person_email'        => $this->text()->null(),
                'company_registration_number' => $this->text()->null(),
                'pan_number'                  => $this->text()->null(),
                'is_vat_registered'           => $this->boolean()->null(),
                'remarks'                     => $this->text()->null(),


                'updated_on'          => $this->timestamp()->null(),
                'updated_by'          => $this->bigInteger()->null(),

        ]);
   }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%user_profiles}}');
    }
}
