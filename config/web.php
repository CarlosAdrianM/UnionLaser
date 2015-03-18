<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'language' => 'es_ES',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'a4m3Xy_rsVQpt_T87-rDlimatwSBQJzi',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => false,
			/*
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'unionlaser.es',
				'username' => 'asesor@unionlaser.es',
				'password' => 'comercial2014$$$',
			],
			*/
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
        'db' => require(__DIR__ . '/db.php'),
		'authClientCollection' => [
			'class' => 'yii\authclient\Collection',
			'clients' => [
				'google' => [
					'class' => 'yii\authclient\clients\GoogleOpenId'
				],
				'facebook' => [
					'class' => 'yii\authclient\clients\Facebook',
					'clientId' => '401887713251719',
					'clientSecret' => '96c3b20ac3f6df865d63f59b99721465',
				],
			],
		],
		'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],
		'urlManager' => [ 
			'enablePrettyUrl' => true,
			'showScriptName' => false,				  
		],
    ],
    'params' => $params,
	'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
			'admins' => ['Carlos'],
        ],
    ],

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
