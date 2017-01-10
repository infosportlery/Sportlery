<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Location */

$this->title = $user[0]['username'];
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
                    <div class="profile_avatar">
                        <?php if(file_exists($model->avatar)): ?>
                          <img class="img-thumbnail img-avatar" src="<?= $model->avatar ?>">
                        <?php else : ?>
                          <img class="img-thumbnail img-avatar" src="<?= Yii::$app->request->BaseUrl.'/uploads/default.jpg'; ?>">
                        <?php endif ?>
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
                    <li>Username: <?= $user[0]['username'] ?></li>
                    <li>Firstname: <?= $user[0]['firstname'] ?></li>
                    <li>Lastname: <?= $user[0]['lastname'] ?></li>
                    <li>Fovorite Sport: <?= $user[0]['favorite_sport'] ?></li>
                    <li>Favorite Athlete: <?= $user[0]['favorite_athlete'] ?></li>
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
    </div>

    <div class="row">
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
    </div> 
</div>
