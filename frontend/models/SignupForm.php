<?php

namespace frontend\models;

use common\models\User;
use common\models\UserProfiles;
use common\models\Verifications;
use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model {
    public $username;
    public $email;
    public $password;
    public $phone;
    public $role;
    public $name;


    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            /*      ['username', 'trim'],
                  ['username', 'required'],
                  ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
                  ['username', 'string', 'min' => 2, 'max' => 255],*/

            ['role', 'required'],
            ['role', 'string'],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['name', 'required'],
            ['name', 'trim'],
            ['name', 'string', 'min' => 6],
            ['phone', 'string'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup() {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();

        $user->attributes = $this;
        $user->email = $user->username = $this->email;
        $user->phone = $this->phone;
        $user->role = $this->role;
        $user->name = $this->name;

        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->generatePasswordResetToken();
        $user->generatePhoneVerificationToken();
        $user->generateAccessToken();

        if (($user->save())) {
            $profile = new UserProfiles();
            $profile->user_id = $user->getId();
            $profile->save();


            $this->sendEmail($user);
            return true;
        }

        return false;

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user) {
        return Yii::$app
                ->mailer
                ->compose(
                        ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                        ['user' => $user]
                )
                ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
                ->setTo($this->email)
                ->setSubject('Account registration at ' . Yii::$app->name)
                ->send();
    }
}
