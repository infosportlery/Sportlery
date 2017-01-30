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
            ['label' => 'Thuis', 'url' => ['/site/index']],
            ['label' => 'Sportlocaties', 'url' => ['/location/index']],
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
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        $menuItems[] = ['label' => 'Aanmelden', 'url' => ['/site/signup']];
    } else {
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Sportlocaties', 'url' => ['/location/index']],
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
            [
                'label' => Yii::$app->user->identity->username,
                'items' => [
                     ['label' => 'Dashboard', 'url' => ['/dashboard/index']],
                        Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Uitloggen (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link btn-logout-inverse']
                        )
                        . Html::endForm(),
                ],
            ],
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

     ?>
<!--     <span class="language pull-right" style="width:50px;">
    <a href='/en'> 
        <?= html::img('@web/images/flags/gb.png'); ?> 
    </a>
    <span class="language" style="width:50px;">
    <a href='/nl'> 
        <?= html::img('@web/images/flags/nl.png'); ?> 
    </a> -->
    <?php

    NavBar::end();
    ?>