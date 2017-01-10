<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = $paid[0]['company_name'];
$this->params['breadcrumbs'][] = ['label' => 'Locations', 'url' => ['/location/index']];
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="sm-header">
        <div class="container">
            <div class="row">
                <h3><?= $paid[0]['company_name'] ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile_avatar">
                        <?php if (empty($paid[0]['avatar'])): ?>
                          <img class="img-thumbnail img-avatar" src="uploads/<?= $paid[0]['avatar'] ?>">
                        <?php else : ?>
                            <img class="img-thumbnail img-avatar" src="uploads/default.jpg">
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<hr class="hr-invisible"> 

<div class="container">
<div class="row">
        <div class="col-md-12">
            <?= Breadcrumbs::widget([
                    'homeLink' => [ 
                        'label' => Yii::t('yii', 'Home'),
                        'url' => Yii::$app->homeUrl,
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]); ?>
        </div>
    </div>
    <div class="row">

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informatie</h3>
                </div>
                <div class="panel-body">
                    <li><b>Naam</b>: <?= $paid[0]['company_name']; ?></li>
                    <li><b>Straat</b>: <?= $paid[0]['address']; ?></li>
                    <li><b>Postcode</b>: <?= $paid[0]['zip']; ?></li>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Boeken</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <p>Dit is een betaalde locatie.</p>
                        <hr>
                        <?= Html::a('Boek nu!', Url::to('http://www.manage.sportlery.nl'), ['class' => 'btn btn-primary']); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Kalender</h3>
                </div>

                <select id="calendarSelect" onchange="getCalendar()">
                    <?php foreach ($calendars as $calendar): ?>

                        <option value="<?= $calendar['id'] ?>"><?= $calendar['title'] ?></option>


                    <?php endforeach ?>

                </select>
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Openingstijden</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <p>Hier komen de openingstijden.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Foto's</h3>
                </div>
                <div class="panel-body text-center">
                    <h1 class="comingsoon">COMING SOON<br>
                    <span class="lead">PHOTO GALLERY FEATURE</span>
                    </h1>

                </div>
            </div>
        </div>

        <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Locatie</h3>
                    </div>
                    <div class="panel-body">
                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCPK-i5tzTDpe5rIuWDsDOOT2VEyXXrfAw&q=<?= $paid[0]['city']; ?>,<?= $paid[0]['city'] ?>,<?= $paid[0]['address'] ?>" width="100%" height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Reviews</h3>
                </div>
                <div class="panel-body">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="http://placehold.it/75x75" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Media heading <span class="text-small">Beoordelingen<span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugit voluptatibus, culpa voluptatum in! Quibusdam aspernatur quas architecto qui iusto inventore vero, temporibus ut maiores dolorem dolore dicta distinctio assumenda.</p>
                      </div>
                    </div>
                    <hr>
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="http://placehold.it/75x75" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugit voluptatibus, culpa voluptatum in! Quibusdam aspernatur quas architecto qui iusto inventore vero, temporibus ut maiores dolorem dolore dicta distinctio assumenda.</p>
                      </div>
                    </div>
                </div>
                <div class="panel-footer text-right"><button class="btn btn-primary">Review</button></div>
            </div>
        </div>
    </div>  -->
</div>