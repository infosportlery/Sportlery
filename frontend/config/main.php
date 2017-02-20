<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
       'gridview' =>  [
            'class' => '\kartik\grid\Module'
            // enter optional module parameters below - only if you need to  
            // use your own export download action or custom translation 
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => []
        ]
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => $baseUrl,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
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
        'authClientCollection' => [
          'class' => 'yii\authclient\Collection',
          'clients' => [
            'facebook' => [
              'class' => 'yii\authclient\clients\Facebook',
              'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
              'clientId' => '640899169416003',
              'clientSecret' => '3d47cb3dcf5adf4a7a758b62c34cc05b',
              'attributeNames' => ['email', 'first_name', 'last_name'],
            ],
          ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
        
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            // Hide index.php
            'showScriptName' => false,
            // Use pretty URLs
            //'baseUrl'=> '/',
            // baseUrl for live version 
            'baseUrl'=> $baseUrl,
            'enablePrettyUrl' => true,
            'languages' => ['en-US', 'en', 'nl'],
            'sourceLanguage'=>'en',
            'rules' => [
                  'home' => 'site/index',
                  'sportclub' => 'site/sportclub',
                  'trainer' => 'site/trainer',
                  'team' => 'site/team',
                  'contact' => 'site/contact',
                  'contest' => 'site/contest',
                  '<controller:\w+>/<id:\d+>' => '<controller>/view',
                  '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                  '<controller:\w+>/<action:\w+>' => '<controller>/<action>',


            ],
        ],
        'eauth' => [
            'class' => 'nodge\eauth\EAuth',
            'popup' => true, // Use the popup window instead of redirecting.
            'cache' => false, // Cache component name or false to disable cache. Defaults to 'cache' on production environments.
            'cacheExpire' => 0, // Cache lifetime. Defaults to 0 - means unlimited.
            'httpClient' => [
                // uncomment this to use streams in safe_mode
                //'useStreamsFallback' => true,
            ],
            'services' => [ // You can change the providers and their classes.
                'facebook' => [
                    // register your app here: https://developers.facebook.com/apps/
                    'class' => 'nodge\eauth\services\extended\FacebookOAuth2Service',
                    'clientId' => '640899169416003',
                    'clientSecret' => '3d47cb3dcf5adf4a7a758b62c34cc05b',
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                // 'eauth' => [
                //     'class' => 'yii\i18n\PhpMessageSource',
                //     'basePath' => '@eauth/messages',
                // ],
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        
    ],

    'as beforeRequest'=>[
        'class' => 'frontend\components\ChangeLanguageSetting',
    ],

    'params' => $params,
];