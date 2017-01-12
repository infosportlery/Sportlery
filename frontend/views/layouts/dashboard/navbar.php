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
        'innerContainerOptions' => ['class' => 'container-fluid'],
    ]);
        $menuItems = [
            ['label' => 'Sportlocaties', 'url' => ['/location/index']],
            ['label' => 'Matchmaking', 'url' => ['/matchmaking/index']],
            ['label' => 'Coming Soon', 'url' => ['/site/comingsoon']],
        ];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        $menuItems[] = ['label' => 'Aanmelden', 'url' => ['/site/signup']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Uitloggen (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link btn-logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'container-fluid navbar-nav navbar-right'],
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