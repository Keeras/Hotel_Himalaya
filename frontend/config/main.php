<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'Smartbus API',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
                        'csrfParam' => '_csrf-one',
           'enableCsrfValidation' => false,
            'class' => \common\components\Request::class,
            'web' => '/frontend/web',

        ],
        'authManager' => [
            'class' => \yii\rbac\DbManager::class,
            'defaultRoles' => ['guest']
        ],
        'urlManager' => [
            'rules' => [
                /*         ['class'      => \yii\rest\UrlRule::class,
                          'controller' => [
                                  'blog',
                                  'blog-comments',
                                  'blog-categories'
                          ]
                         ],
                         [
                                 'pattern' => 'blog/<id:\d+>/comments',
                                 'route'   => 'blog-comments/index'
                         ]*/
                'blog/edit/<id:[a-zA-Z0-9-]+>/' => 'blog/edit/',
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        /*  'session'      => [
              // this is the name of the session cookie used for login on the frontend
              'name'    => 'sbusapi',
              'timeout' => 60,
          ],*/
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],


    ],
    'params' => $params,
];
