<?php

namespace frontend\controllers;

use common\models\Blog;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Site controller
 */
class BookingController extends Controller {

    public function actions() {
        return [
                'error'   => [
                        'class' => 'yii\web\ErrorAction',
                ],
                'captcha' => [
                        'class'           => 'yii\captcha\CaptchaAction',
                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('booking');
    }





}
