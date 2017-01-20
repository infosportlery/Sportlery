<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=eu-cdbr-west-01.cleardb.com;dbname=heroku_d30d59a33a52f49',
            'username' => 'b0eff0ce14caf8',
            'password' => '4e4b548d',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.sportlery.nl',
                'username' => 'mailtest@sportlery.nl',
                'password' => 'mailtest',
                'port' => '587',
                'encryption' => 'tls',
            ]
        ],
    ],
];
