<?php
return [
        'aliases'    => [
                '@bower' => '@vendor/bower-asset',
                '@npm'   => '@vendor/npm-asset',
        ],
        'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
        'components' => [
                'cache'   => [
                        'class' => 'yii\caching\FileCache',
                ],
                'request' => [
                        'enableCsrfValidation' => false,
                        'class'                => 'common\components\Request',
                ],

                'urlManager' => [
                        'class' => 'yii\web\UrlManager',

                        'showScriptName' => false,

                        'enablePrettyUrl' => true,

                        'rules' => [
                                '<controller:\w+>/<id:\d+>'              => '<controller>/view',
                                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                                '<controller:\w+>/<action:\w+>'          => '<controller>/<action>',
                        ],
                ],
                /*          'helper'    => [
                                  'class' => 'common\components\Helper',
                          ],*/

        ],
        'bootstrap'  => ['common\components\Helper'],
        'modules'    => [
                'api' => [
                        'class'      => 'common\modules\api\Api',
                        'components' => [
                                'request' => [
                                        'class'                => \common\components\Request::class,
                                        'enableCsrfValidation' => false,
                                        'parsers'              => [
                                                'application/json' => \yii\web\JsonParser::class
                                        ]
                                ]
                        ],
                ],

        ],
];
