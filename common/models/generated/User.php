<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $access_token
 * @property string $phone_verification_token
 * @property string $verification_token
 * @property string $username
 * @property int $role
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $image
 * @property int $status
 * @property int $verification_status
 * @property int $verification_id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $failed_attempts
 *
 * @property AccountLedgerEntry[] $accountLedgerEntries
 * @property AccountLedgerType[] $accountLedgerTypes
 * @property AccountLedgerType[] $accountLedgerTypes0
 * @property AccountLedgers[] $accountLedgers
 * @property AccountLedgers[] $accountLedgers0
 * @property AccountTaxTypes[] $accountTaxTypes
 * @property AccountTaxTypes[] $accountTaxTypes0
 * @property AccountVoucherTypes[] $accountVoucherTypes
 * @property AccountVoucherTypes[] $accountVoucherTypes0
 * @property AccountVouchers[] $accountVouchers
 * @property Advertisement[] $advertisements
 * @property Advertisement[] $advertisements0
 * @property Advertisement[] $advertisements1
 * @property Amenities[] $amenities
 * @property Amenities[] $amenities0
 * @property Blog[] $blogs
 * @property Blog[] $blogs0
 * @property BlogCategories[] $blogCategories
 * @property BlogCategories[] $blogCategories0
 * @property BlogComments[] $blogComments
 * @property BlogComments[] $blogComments0
 * @property BlogComments[] $blogComments1
 * @property Bookings[] $bookings
 * @property Bookings[] $bookings0
 * @property Bookings[] $bookings1
 * @property Bookings[] $bookings2
 * @property Bookings[] $bookings3
 * @property Locations[] $locations
 * @property Locations[] $locations0
 * @property Messages[] $messages
 * @property News[] $news
 * @property News[] $news0
 * @property NewsCategories[] $newsCategories
 * @property NewsCategories[] $newsCategories0
 * @property Pages[] $pages
 * @property Pages[] $pages0
 * @property RatingTypes[] $ratingTypes
 * @property RatingTypes[] $ratingTypes0
 * @property RatingsAcquired[] $ratingsAcquireds
 * @property RatingsAcquired[] $ratingsAcquireds0
 * @property Schedules[] $schedules
 * @property Schedules[] $schedules0
 * @property Schedules[] $schedules1
 * @property Schedules[] $schedules2
 * @property Sections[] $sections
 * @property Sections[] $sections0
 * @property Testimonials[] $testimonials
 * @property Testimonials[] $testimonials0
 * @property UserRoles $role0
 * @property Verifications $verification
 * @property UserProfiles $userProfiles
 * @property VehicleTypes[] $vehicleTypes
 * @property VehicleTypes[] $vehicleTypes0
 * @property Vehicles[] $vehicles
 * @property Vehicles[] $vehicles0
 * @property VehiclesHire[] $vehiclesHires
 * @property VehiclesHire[] $vehiclesHires0
 * @property Verifications[] $verifications
 * @property Verifications[] $verifications0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auth_key', 'password_hash', 'password_reset_token', 'access_token', 'phone_verification_token', 'verification_token', 'username', 'role', 'name'], 'required'],
            [['role', 'status', 'verification_status', 'verification_id', 'created_by', 'updated_by', 'failed_attempts'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['auth_key', 'phone_verification_token'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token', 'username', 'name', 'image'], 'string', 'max' => 255],
            [['access_token'], 'string', 'max' => 128],
            [['verification_token', 'email'], 'string', 'max' => 64],
            [['phone'], 'string', 'max' => 16],
            [['username'], 'unique'],
            [['verification_token'], 'unique'],
            [['phone_verification_token'], 'unique'],
            [['auth_key'], 'unique'],
            [['access_token'], 'unique'],
            [['email'], 'unique'],
            [['phone'], 'unique'],
            [['role'], 'exist', 'skipOnError' => true, 'targetClass' => UserRoles::className(), 'targetAttribute' => ['role' => 'id']],
            [['verification_id'], 'exist', 'skipOnError' => true, 'targetClass' => Verifications::className(), 'targetAttribute' => ['verification_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'access_token' => 'Access Token',
            'phone_verification_token' => 'Phone Verification Token',
            'verification_token' => 'Verification Token',
            'username' => 'Username',
            'role' => 'Role',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'image' => 'Image',
            'status' => 'Status',
            'verification_status' => 'Verification Status',
            'verification_id' => 'Verification ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'failed_attempts' => 'Failed Attempts',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountLedgerEntries()
    {
        return $this->hasMany(AccountLedgerEntry::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountLedgerTypes()
    {
        return $this->hasMany(AccountLedgerType::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountLedgerTypes0()
    {
        return $this->hasMany(AccountLedgerType::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountLedgers()
    {
        return $this->hasMany(AccountLedgers::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountLedgers0()
    {
        return $this->hasMany(AccountLedgers::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountTaxTypes()
    {
        return $this->hasMany(AccountTaxTypes::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountTaxTypes0()
    {
        return $this->hasMany(AccountTaxTypes::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountVoucherTypes()
    {
        return $this->hasMany(AccountVoucherTypes::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountVoucherTypes0()
    {
        return $this->hasMany(AccountVoucherTypes::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountVouchers()
    {
        return $this->hasMany(AccountVouchers::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertisements()
    {
        return $this->hasMany(Advertisement::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertisements0()
    {
        return $this->hasMany(Advertisement::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertisements1()
    {
        return $this->hasMany(Advertisement::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmenities()
    {
        return $this->hasMany(Amenities::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmenities0()
    {
        return $this->hasMany(Amenities::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blog::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs0()
    {
        return $this->hasMany(Blog::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogCategories()
    {
        return $this->hasMany(BlogCategories::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogCategories0()
    {
        return $this->hasMany(BlogCategories::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogComments()
    {
        return $this->hasMany(BlogComments::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogComments0()
    {
        return $this->hasMany(BlogComments::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogComments1()
    {
        return $this->hasMany(BlogComments::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Bookings::className(), ['booker_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings0()
    {
        return $this->hasMany(Bookings::className(), ['cancelled_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings1()
    {
        return $this->hasMany(Bookings::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings2()
    {
        return $this->hasMany(Bookings::className(), ['schedule_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings3()
    {
        return $this->hasMany(Bookings::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Locations::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations0()
    {
        return $this->hasMany(Locations::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews0()
    {
        return $this->hasMany(News::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsCategories()
    {
        return $this->hasMany(NewsCategories::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsCategories0()
    {
        return $this->hasMany(NewsCategories::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Pages::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPages0()
    {
        return $this->hasMany(Pages::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatingTypes()
    {
        return $this->hasMany(RatingTypes::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatingTypes0()
    {
        return $this->hasMany(RatingTypes::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatingsAcquireds()
    {
        return $this->hasMany(RatingsAcquired::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatingsAcquireds0()
    {
        return $this->hasMany(RatingsAcquired::className(), ['vendor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedules::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules0()
    {
        return $this->hasMany(Schedules::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules1()
    {
        return $this->hasMany(Schedules::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules2()
    {
        return $this->hasMany(Schedules::className(), ['operator_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Sections::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections0()
    {
        return $this->hasMany(Sections::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestimonials()
    {
        return $this->hasMany(Testimonials::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestimonials0()
    {
        return $this->hasMany(Testimonials::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole0()
    {
        return $this->hasOne(UserRoles::className(), ['id' => 'role']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVerification()
    {
        return $this->hasOne(Verifications::className(), ['id' => 'verification_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfiles()
    {
        return $this->hasOne(UserProfiles::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleTypes()
    {
        return $this->hasMany(VehicleTypes::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleTypes0()
    {
        return $this->hasMany(VehicleTypes::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicles::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles0()
    {
        return $this->hasMany(Vehicles::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiclesHires()
    {
        return $this->hasMany(VehiclesHire::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiclesHires0()
    {
        return $this->hasMany(VehiclesHire::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVerifications()
    {
        return $this->hasMany(Verifications::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVerifications0()
    {
        return $this->hasMany(Verifications::className(), ['updated_by' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\generated\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\generated\query\UserQuery(get_called_class());
    }
}
