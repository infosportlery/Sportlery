<?php 
	use yii\helpers\Html;
	use yii\helpers\Url;
  use yii\helpers\VarDumper;
  use yii\bootstrap\Modal;

?>

    <div class="row">
      <div class="col-md-4">
      <h1 class="page-header"><i class="fa fa-home"></i> Dashboard</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Persoonlijke Informatie 
                <?= Html::button('Edit', ['value' => Url::to(['user/update', 'id' => Yii::$app->user->identity->id]), 'class' => 'btn btn-xs btn-default pull-right', 'id' => 'editUser']); ?></h3>
                </div>
                <div class="panel-body">
                   Gebruikersnaam: <?= Yii::$app->user->identity->username ?><br>
                   Voornaam: <?= $identity->firstname ?><br>
                   Achternaam: <?= $identity->lastname ?><br>
                   Email: <?= $identity->email ?><br>
                   Geboortedatum: <?= $identity->birthday ?><br>
                   Geslacht: <?= $identity->gender ?><br>
                   Geslacht: <?= $identity->id ?><br>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      <h2>Actieve Sporten:</h2>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
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