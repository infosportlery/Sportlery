<?php 
	use yii\helpers\Html;
	use yii\helpers\Url;
  use yii\helpers\VarDumper;

?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
      <div class="col-md-4">
      <h1 class="page-header"><i class="fa fa-home"></i> Dashboard</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Persoonlijke Informatie <?= Html::a('Edit', Url::to(['dashboard/settings', 'id' => Yii::$app->user->identity->id]), ['class' => 'pull-right btn btn-primary btn-xs']); ?></h3>
                </div>
                <div class="panel-body">
                
                   Gebruikersnaam: <?= Yii::$app->user->identity->username ?><br>
                   Voornaam: <?= $identity->firstname ?><br>
                   Achternaam: <?= $identity->lastname ?><br>
                   Email: <?= $identity->email ?><br>
                   Geboortedatum: <?= $identity->birthday ?><br>
                   Geslacht: <?= $identity->gender ?><br>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Persoonlijke Informatie</h3>
                </div>
                <div class="panel-body">
                   <?= yii2fullcalendar\yii2fullcalendar::widget([
                          'options' => [
                            'lang' => 'nl',
                            //... more options to be defined here!
                          ],
                          'ajaxEvents' => Url::to(['/timetrack/default/jsoncalendar'])
                        ]);
                    ?>
                </div>
            </div>
        </div>

    </div>

</div>