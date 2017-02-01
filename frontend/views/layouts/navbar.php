<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

    NavBar::begin([
        'brandLabel' => 'Sportlery <span class="label label-default">Beta</span>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/']],
            //['label' => 'Sportlocaties', 'url' => ['/location/index']],
            [
                'label' => 'Partners',
                'items' => [
                     ['label' => 'Sportclub', 'url' => ['/site/sportclub']],
                     ['label' => 'Trainer', 'url' => ['/site/trainer']],
                ],
            ],
            [
                'label' => 'Over Ons',
                'items' => [
                     ['label' => 'Team Sportlery', 'url' => ['/site/team']],
                     ['label' => 'Contact', 'url' => ['/site/contact']],
                ],
            ],
        ];



    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        //$menuItems[] = ['label' => 'Aanmelden', 'url' => ['/site/signup']];
    } else {
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            //['label' => 'Sportlocaties', 'url' => ['/location/index']],
            [
                'label' => 'Partners',
                'items' => [
                     ['label' => 'Sportclub', 'url' => ['/site/sportclub']],
                     ['label' => 'Trainer', 'url' => ['/site/trainer']],
                ],
            ],
            [
                'label' => 'Over Ons',
                'items' => [
                     ['label' => 'Team Sportlery', 'url' => ['/site/team']],
                     ['label' => 'Contact', 'url' => ['/site/contact']],
                ],
            ],
            // [
            //     'label' => Yii::$app->user->identity->username,
            //     'items' => [
            //          ['label' => 'Dashboard', 'url' => ['/dashboard/index']],
            //             Html::beginForm(['/site/logout'], 'post')
            //             . Html::submitButton(
            //                 'Uitloggen (' . Yii::$app->user->identity->username . ')',
            //                 ['class' => 'btn btn-link btn-logout-inverse']
            //             )
            //             . Html::endForm(),
            //     ],
            // ],
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right navbar-design'],
        'items' => $menuItems,
    ]);
        
        foreach(Yii::$app->params['languages'] as $key => $language) {
            echo '<span class="language" id="'.$key.'">'. Html::a(Html::img("@web/images/flags/".$key.".png"), ['site/changel', 'language' => $key]) .' |</span>';
        }

    NavBar::end();
    ?>