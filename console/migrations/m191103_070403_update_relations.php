<?php

use yii\db\Migration;

/**
 * Class m191103_070403_update__relations
 */
class m191103_070403_update_relations extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        // ====== Update PK ========== //
        $this->alterColumn('{{%user}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->addPrimaryKey('user_profiles_pk, user_table_pk', '{{%user_profiles}}', ['id', 'user_id']);
        $this->alterColumn('{{%user_profiles}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%user_profiles}}', 'user_id', $this->bigInteger() . ' NOT NULL UNIQUE ');
        $this->alterColumn('{{%bookings}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%schedules}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%vehicles}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%locations}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%vehicle_types}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%verifications}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%ratings_acquired}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%blog}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%blog_comments}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%messages}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%vehicles_hire}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%account_ledgers}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%account_ledger_entry}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');
        $this->alterColumn('{{%account_vouchers}}', 'id', $this->bigInteger() . ' NOT NULL UNIQUE AUTO_INCREMENT');

        // ====== Update Relations ========== //
        // user Table

        $this->addForeignKey("fk_verification", "{{%user}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");

        // user_profiles Table
        $this->addForeignKey("fk_user_id", "{{%user_profiles}}", "user_id", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // bookings Table
        $this->addForeignKey("fk_b_schedule", "{{%bookings}}", "schedule_id", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_b_booker", "{{%bookings}}", "booker_id", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_b_boarding", "{{%bookings}}", "boarding", "{{%locations}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_b_dropping", "{{%bookings}}", "dropping", "{{%locations}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_b_cancelled", "{{%bookings}}", "cancelled_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_b_verification", "{{%bookings}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_b_created", "{{%bookings}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_b_updated", "{{%bookings}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // schedules Table
        $this->addForeignKey("fk_s_user", "{{%schedules}}", "user_id", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_s_vehicle", "{{%schedules}}", "vehicle_id", "{{%vehicles}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_s_verification", "{{%schedules}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_s_created_by", "{{%schedules}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_s_updated_by", "{{%schedules}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // vehicles Table
        $this->addForeignKey("fk_v_verification", "{{%vehicles}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_v_created_by", "{{%vehicles}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_v_updated_by", "{{%vehicles}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // amenities Table
        $this->addForeignKey("fk_a_verification", "{{%amenities}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_a_created_by", "{{%amenities}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_a_updated_by", "{{%amenities}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // locations Table
        $this->addForeignKey("fk_l_verification", "{{%locations}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_l_created_by", "{{%locations}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_l_updated_by", "{{%locations}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // vehicle_types Table
        $this->addForeignKey("fk_vt_verification", "{{%vehicle_types}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_vt_created_by", "{{%vehicle_types}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_vt_updated_by", "{{%vehicle_types}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Verifications Table
        $this->addForeignKey("fk_v_requested_by", "{{%verifications}}", "requested_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_v_verified_by", "{{%verifications}}", "verified_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        //rating_types Table
        $this->addForeignKey("fk_rt_ra_created_by", "{{%rating_types}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_rt_ra_updated_by", "{{%rating_types}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // ratings_acquired Table
        $this->addForeignKey("fk_ra_vendor", "{{%ratings_acquired}}", "vendor_id", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ra_vehicle", "{{%ratings_acquired}}", "vehicle_id", "{{%vehicles}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ra_rating_types", "{{%ratings_acquired}}", "rating_type_id", "{{%rating_types}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ra_customer", "{{%ratings_acquired}}", "customer_id", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ra_booking", "{{%ratings_acquired}}", "booking_id", "{{%bookings}}", "id", "RESTRICT", "CASCADE");


        // Blogs Table
        $this->addForeignKey("fk_bl_verification", "{{%blog}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_bl_created", "{{%blog}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_bl_updated", "{{%blog}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Blog Categories
        $this->addForeignKey("fk_bc_created", "{{%blog_categories}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_bc_updated", "{{%blog_categories}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Blog Comments
        $this->addForeignKey("fk_bcom_verification", "{{%blog_comments}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_bcom_blog", "{{%blog_comments}}", "blog_id", "blog", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_bcom_customer", "{{%blog_comments}}", "customer_id", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_bcom_created", "{{%blog_comments}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_bcom_updated", "{{%blog_comments}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");


        // Messages Table
        $this->addForeignKey("fk_m_cid", "{{%messages}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // News Table
        $this->addForeignKey("fk_n_verification", "{{%news}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_n_created", "{{%news}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_n_updated", "{{%news}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // News Categories
        $this->addForeignKey("fk_nc_created", "{{%news_categories}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_nc_updated", "{{%news_categories}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");


        // Pages Table
        $this->addForeignKey("fk_pg_created", "{{%pages}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_pg_updated", "{{%pages}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // sections Table
        $this->addForeignKey("fk_sec_created", "{{%sections}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fksec_updated", "{{%sections}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Testimonials Table
        $this->addForeignKey("fk_te_created", "{{%testimonials}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_te_updated", "{{%testimonials}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Vehicles Hire
        $this->addForeignKey("fk_vh_verification", "{{%vehicles_hire}}", "verification_id", "{{%verifications}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_vh_created", "{{%vehicles_hire}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_vh_updated", "{{%vehicles_hire}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Account Ledgers Table
        $this->addForeignKey("fk_al_type", "{{%account_ledgers}}", "ledger_type", "{{%account_ledger_type}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_al_created_by", "{{%account_ledgers}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_al_updated_by", "{{%account_ledgers}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        //Account  Ledgers Entries Table
        $this->addForeignKey("fk_le_ledger", "{{%account_ledger_entry}}", "ledger_id", "{{%account_ledgers}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ale_voucher", "{{%account_ledger_entry}}", "voucher_id", "{{%account_vouchers}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ale_booking", "{{%account_ledger_entry}}", "booking_id", "{{%bookings}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ale_created_by", "{{%account_ledger_entry}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_ale_updated_by", "{{%account_ledger_entry}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        //Account ledger_type Table
        $this->addForeignKey("fk_alt_created_by", "{{%account_ledger_type}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_alt_updated_by", "{{%account_ledger_type}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        //Account tax_types Table
        $this->addForeignKey("fk_att_created_by", "{{%account_tax_types}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_att_updated_by", "{{%account_tax_types}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Account vouchers Table
        $this->addForeignKey("fk_av_voucher_type", "{{%account_vouchers}}", "voucher_type", "account_voucher_types", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_av_created_by", "{{%account_vouchers}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_av_updated_by", "{{%account_vouchers}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Account voucher_types Table
        $this->addForeignKey("fk_avt_created_by", "{{%account_voucher_types}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_avt_updated_by", "{{%account_voucher_types}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

        // Advertisement Table
        $this->addForeignKey("fk_adv_user", "{{%advertisement}}", "user_id", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_adv_created_by", "{{%advertisement}}", "created_by", "{{%user}}", "id", "RESTRICT", "CASCADE");
        $this->addForeignKey("fk_adv_updated_by", "{{%advertisement}}", "updated_by", "{{%user}}", "id", "RESTRICT", "CASCADE");

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        echo "m191103_070403_update__relations cannot be reverted.\n";
        $this->dropForeignKey("fk_verification", "{{%user}}");
        $this->dropForeignKey("fk_user_id", "{{%user_profiles}}");
        $this->dropForeignKey("fk_b_schedule", "{{%bookings}}");
        $this->dropForeignKey("fk_b_booker", "{{%bookings}}");
        $this->dropForeignKey("fk_b_boarding", "{{%bookings}}");
        $this->dropForeignKey("fk_b_dropping", "{{%bookings}}");
        $this->dropForeignKey("fk_b_cancelled", "{{%bookings}}");
        $this->dropForeignKey("fk_b_verification", "{{%bookings}}");
        $this->dropForeignKey("fk_b_created", "{{%bookings}}");
        $this->dropForeignKey("fk_b_updated", "{{%bookings}}");
        $this->dropForeignKey("fk_s_user", "{{%schedules}}");
        $this->dropForeignKey("fk_s_vehicle", "{{%schedules}}");
        $this->dropForeignKey("fk_s_verification", "{{%schedules}}");
        $this->dropForeignKey("fk_s_created_by", "{{%schedules}}");
        $this->dropForeignKey("fk_s_updated_by", "{{%schedules}}");
        $this->dropForeignKey("fk_v_verification", "{{%vehicles}}");
        $this->dropForeignKey("fk_v_created_by", "{{%vehicles}}");
        $this->dropForeignKey("fk_v_updated_by", "{{%vehicles}}");
        $this->dropForeignKey("fk_a_verification", "{{%amenities}}");
        $this->dropForeignKey("fk_a_created_by", "{{%amenities}}");
        $this->dropForeignKey("fk_a_updated_by", "{{%amenities}}");
        $this->dropForeignKey("fk_l_verification", "{{%locations}}");
        $this->dropForeignKey("fk_l_created_by", "{{%locations}}");
        $this->dropForeignKey("fk_l_updated_by", "{{%locations}}");
        $this->dropForeignKey("fk_vt_verification", "{{%vehicle_types}}");
        $this->dropForeignKey("fk_vt_created_by", "{{%vehicle_types}}");
        $this->dropForeignKey("fk_vt_updated_by", "{{%vehicle_types}}");
        $this->dropForeignKey("fk_v_requested_by", "{{%verifications}}");
        $this->dropForeignKey("fk_v_verified_by", "{{%verifications}}");
        $this->dropForeignKey("fk_rt_ra_created_by", "{{%rating_types}}");
        $this->dropForeignKey("fk_rt_ra_updated_by", "{{%rating_types}}");
        $this->dropForeignKey("fk_ra_vendor", "{{%ratings_acquired}}");
        $this->dropForeignKey("fk_ra_vehicle", "{{%ratings_acquired}}");
        $this->dropForeignKey("fk_ra_rating_types", "{{%ratings_acquired}}");
        $this->dropForeignKey("fk_ra_customer", "{{%ratings_acquired}}");
        $this->dropForeignKey("fk_ra_booking", "{{%ratings_acquired}}");
        $this->dropForeignKey("fk_bl_verification", "{{%blog}}");
        $this->dropForeignKey("fk_bl_created", "{{%blog}}");
        $this->dropForeignKey("fk_bl_updated", "{{%blog}}");
        $this->dropForeignKey("fk_bc_created", "{{%blog_categories}}");
        $this->dropForeignKey("fk_bc_updated", "{{%blog_categories}}");
        $this->dropForeignKey("fk_bcom_verification", "{{%blog_comments}}");
        $this->dropForeignKey("fk_bcom_blog", "{{%blog_comments}}");
        $this->dropForeignKey("fk_bcom_customer", "{{%blog_comments}}");
        $this->dropForeignKey("fk_bcom_created", "{{%blog_comments}}");
        $this->dropForeignKey("fk_bcom_updated", "{{%blog_comments}}");
        $this->dropForeignKey("fk_m_cid", "{{%messages}}");
        $this->dropForeignKey("fk_n_verification", "{{%news}}");
        $this->dropForeignKey("fk_n_created", "{{%news}}");
        $this->dropForeignKey("fk_n_updated", "{{%news}}");
        $this->dropForeignKey("fk_nc_created", "{{%news_categories}}");
        $this->dropForeignKey("fk_nc_updated", "{{%news_categories}}");
        $this->dropForeignKey("fk_pg_created", "{{%pages}}");
        $this->dropForeignKey("fk_pg_updated", "{{%pages}}");
        $this->dropForeignKey("fk_sec_created", "{{%sections}}");
        $this->dropForeignKey("fksec_updated", "{{%sections}}");
        $this->dropForeignKey("fk_te_created", "{{%testimonials}}");
        $this->dropForeignKey("fk_te_updated", "{{%testimonials}}");
        $this->dropForeignKey("fk_vh_verification", "{{%vehicles_hire}}");
        $this->dropForeignKey("fk_vh_created", "{{%vehicles_hire}}");
        $this->dropForeignKey("fk_vh_updated", "{{%vehicles_hire}}");
        $this->dropForeignKey("fk_al_type", "{{%account_ledgers}}");
        $this->dropForeignKey("fk_al_created_by", "{{%account_ledgers}}");
        $this->dropForeignKey("fk_al_updated_by", "{{%account_ledgers}}");
        $this->dropForeignKey("fk_le_ledger", "{{%account_ledger_entry}}");
        $this->dropForeignKey("fk_ale_voucher", "{{%account_ledger_entry}}");
        $this->dropForeignKey("fk_ale_booking", "{{%account_ledger_entry}}");
        $this->dropForeignKey("fk_ale_created_by", "{{%account_ledger_entry}}");
        $this->dropForeignKey("fk_ale_updated_by", "{{%account_ledger_entry}}");
        $this->dropForeignKey("fk_alt_created_by", "{{%account_ledger_type}}");
        $this->dropForeignKey("fk_alt_updated_by", "{{%account_ledger_type}}");
        $this->dropForeignKey("fk_att_created_by", "{{%account_tax_types}}");
        $this->dropForeignKey("fk_att_updated_by", "{{%account_tax_types}}");
        $this->dropForeignKey("fk_av_voucher_type", "{{%account_vouchers}}");
        $this->dropForeignKey("fk_av_created_by", "{{%account_vouchers}}");
        $this->dropForeignKey("fk_av_updated_by", "{{%account_vouchers}}");
        $this->dropForeignKey("fk_avt_created_by", "{{%account_voucher_types}}");
        $this->dropForeignKey("fk_avt_updated_by", "{{%account_voucher_types}}");
        $this->dropForeignKey("fk_adv_user", "{{%advertisement}}");
        $this->dropForeignKey("fk_adv_created_by", "{{%advertisement}}");
        $this->dropForeignKey("fk_adv_updated_by", "{{%advertisement}}");
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();
        $this->dropForeignKey();


        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191103_070403_update__relations cannot be reverted.\n";

        return false;
    }
    */
}
