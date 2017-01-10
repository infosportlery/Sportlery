<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Location */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Locations', 'url' => ['/location/index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="sm-header">
        <div class="container">
            <div class="row">
                <h3><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile_avatar">
                        <?php if(empty($model->avatar)): ?>
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
                    <li><b>Naam</b>: <?= $model->name; ?></li>
                    <li><b>Straat</b>: <?= $model->street; ?></li>
                    <li><b>Postcode</b>: <?= $model->zipcode; ?></li>
                    <li><b>Stad</b>: <?= $model->city; ?></li>
                    <li><b>Prijs</b>: <?= $model->price; ?></li>
                    <li><b>Category</b>: <?= $model->category_id ; ?></li>
                    <hr>
                    <p><b>Beschrijving</b>:<br> <?= $model->description; ?></p>

                    <?php 

                        if(Yii::$app->user->can('admin'))
                        {
                            echo Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
                            echo Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this location?',
                                    'method' => 'post',
                                ],
                            ]);
                    
                        }
                    ?>
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
                        <?php if ($model->type == 0): ?>
                            <p>Dit is een publiekelijke locatie en daarom is het niet mogelijk om deze locatie te boeken. 
                        Dit betekent wel dat deze locatie gratis te benaderen is!</p>

                        <?php else: ?>
                            <p>Dit is een betaalde locatie.</p>
                            <li>Prijs: <?= $model->price ?></li>
                            <hr>
                            <button class="btn btn-primary">Boek nu!</button>
                        <?php endif ?>
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
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCPK-i5tzTDpe5rIuWDsDOOT2VEyXXrfAw&q=<?= $model->city;?>,<?= $model->zipcode; ?>,<?= $model->street ?>" width="100%" height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
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

       <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'name',
                'street',
                'zipcode',
                'category',
                'description:ntext',
                'price',
                //'avatar',
                'city',
                //'type',
            ],
        ]) ?> 
</div>
