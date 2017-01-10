<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=vserver175.axc.nl;dbname=folkewi175_sportlery',
            'username' => 'folkewi175',
            'password' => 'n734snt6',
            'charset' => 'utf8',
        ],
        'manage' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=vserver175.axc.nl;dbname=folkewi175_testn',
            'username' => 'folkewi175',
            'password' => 'n734snt6',
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
