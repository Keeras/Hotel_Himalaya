<?php

namespace common\modules\api;

/**
 * api module definition class
 */
class Api extends \yii\base\Module {
    /**
     * {@inheritdoc}
     */

    public $controllerNamespace = 'common\modules\api\controllers';

    /**
     * {@inheritdoc}
     */
    public function init() {
        parent::init();
/*
        \Yii::$app->setComponents([
                                          'request' => [
                                                  'class'                  => \yii\web\Request::class,
                                                  'enableCookieValidation' => true,
                                                  'enableCsrfValidation'   => false,
                                                  'cookieValidationKey'    => 'as3i7dyu',
                                                  'parsers'                => [
                                                          'application/json' => 'yii\web\JsonParser',
                                                  ]
                                          ]
                                  ]);

*/

    }
}
