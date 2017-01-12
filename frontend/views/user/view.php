<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Location */

$this->title = $user->username;
$this->params['breadcrumbs'][] = ['label' => 'Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$id = $_GET['id'];

?>
<div class="sm-header">
        <div class="container">
            <div class="row">
                <h3><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile_avatar img-thumbnail">
                        <?php echo Html::img($model->avatarurl); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

<hr class="hr-invisible"> 

<div class="container">
    <div class="row">

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Persoonlijke Informatie</h3>
                </div>
                <div class="panel-body">
                    <li>Username: <?= $user->username; ?></li>
                    <li>Firstname: <?= $user->firstname; ?></li>
                    <li>Lastname: <?= $user->lastname; ?></li>
                    <li>Fovorite Sport: <?= $user->favorite_sport; ?></li>
                    <li>Favorite Athlete: <?= $user->favorite_athlete; ?></li>

                    <?php 

                    echo $avatar;

                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Vriend</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <button class="btn btn-block btn-primary">Vriend Toevoegen  </button>
                        <br>
                        <button class="btn btn-primary"><i class="fa fa-envelope"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tennis
                      <?= Html::button('Edit', ['value' => Url::to(['user/update', 'id' => Yii::$app->user->identity->id]), 'class' => 'btn btn-xs btn-default pull-right', 'id' => 'editUser']); ?>
                    </h3>
                </div>
                <div class="panel-body">
                   <li>Level: 7</li>
                   <li>Sportbuddies: 8</li>
                   <li>Membership: Fit for Free</li>
                   <br>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Voetbal</h3>
                </div>
                <div class="panel-body">
                   <li>Level: 7</li>
                   <li>Wedstrijden: 30</li>
                   <li>Rank: 27th</li>
                   <li>Sportbuddies: 8</li>
                   <button class="btn btn-primary btn-block">Daag Uit!</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Skaten</h3>
                </div>
                <div class="panel-body">
                   <li>Level: 7</li>
                   <li>Wedstrijden: 30</li>
                   <li>Rank: 27th</li>
                   <li>Sportbuddies: 8</li>
                    <button class="btn btn-primary btn-block">Daag Uit!</button>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
      <div class="col-md-4">
      <h2>Interesse In:</h2>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tennis</h3>
                </div>
                <div class="panel-body">
                   <li>Level: 7</li>
                   <li>Sportbuddies: 8</li>
                   <li>Membership: Fit for Free</li>
                   <button class="btn btn-primary btn-block">Daag Uit!</button>
                   <br>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Voetbal</h3>
                </div>
                <div class="panel-body">
                   <li>Level: 7</li>
                   <li>Wedstrijden: 30</li>
                   <li>Rank: 27th</li>
                   <li>Sportbuddies: 8</li>
                   <button class="btn btn-primary btn-block">Daag Uit!</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Skaten</h3>
                </div>
                <div class="panel-body">
                   <li>Level: 7</li>
                   <li>Wedstrijden: 30</li>
                   <li>Rank: 27th</li>
                   <li>Sportbuddies: 8</li>
                   <button class="btn btn-primary btn-block">Daag Uit!</button>
                </div>
            </div>
        </div>
    </div>
</div>
