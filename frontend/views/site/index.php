<?php 

  use yii\bootstrap\Modal;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\helpers\Url;


?>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="thin">sportlery</h1>
        <p class="lead thin">TOGETHER WE SPORT</p>
        <br>
      </div>
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
        <?php echo $this->render('@app/views/location/_globalsearch', array('model'=>$searchModel)); ?>
      </div> <!-- end col -->
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-md-12 hidden-xs text-center">
      <h3><b>Zoek jouw sport, vind een Sportbuddy, boek een sportlocatie en speel!</b></h3>
      </div> <!-- end col -->
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-md-12 hidden-xs text-center">
      <h3>Word nu <b>gratis</b> lid van onze community: </h3>
      </div> <!-- end col -->
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
         <?= Html::a('Create BETA account', [Url::to('site/signup')], ['class' => 'btn btn-primary btn-lg']); ?>
      </div> <!-- end col -->
    </div>
  </div>
</div>

<div class="container">
   
  <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
      <h1>Wat is Sportlery?</h1>
    </div> <!-- end col -->
  </div> <!-- end row -->
  
  <div class="row text-center">
    <div class="col-md-10 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1">
      <div class="col-md-4 col-sm-4">
        <img src="images/icons/location.png" height="80px" style="width: 80px;"><br>
        <h1 class="h1-default text-center"><?= Yii::t('app', 'Locaties'); ?></h1>
        <p>Kies je sport en zoek een locatie bij jou in de buurt. Boek een plek en sporten maar!</p>
        <?= Html::a('Bekijk alle locaties', [Url::to('location/index')], ['class' => 'btn btn-primary']); ?>
      </div>
      <div class="col-md-4 col-sm-4">
        <img src="images/icons/matchmaking.png" height="80px" style="width: 80px;"><br>
        <h1 class="h1-default text-center"><?= Yii::t('app', 'Matchmaking'); ?></h1>
        <p>Vind sportbuddies, creëer of participeer in evenementen en vind vervanging voor jouw sporten.</p>
         <?= Html::a('Go and Play!', [Url::to('')], ['class' => 'btn btn-primary', 'id' => 'link-matchmaking']); ?>
      </div>
      <div class="col-md-4 col-sm-4">
        <img src="images/icons/trainer.png" height="80px" style="width: 80px;"><br>
        <h1 class="h1-default text-center"><?= Yii::t('app', 'Lessen'); ?></h1>
        <p>Probeer en ontdek nieuwe sporten! Overzichtelijk alle lessen en workshops die aangeboden worden bij jou in de buurt.</p>
         <?= Html::a('Bekijk alle lessen', [Url::to('')], ['class' => 'btn btn-primary', 'id' => 'link-lessons']); ?>
      </div>
    </div>
  </div> <!-- end row -->

  <hr class="hr-invisible">

  <div class="row text-center">
    <h3>Wil je één van de eerste Sportler zijn? Laat dan nu je e-mail achter.</h3>
    <div class="mailing col-md-6 col-md-offset-3">
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($mailing, 'email')->textInput()->input('text', ['placeholder' => "Laat je e-mail adres achter."])->label(false); ?>

                <div class="form-group">
                    <?= Html::submitButton($mailing->isNewRecord ? 'Verstuur' : 'Update', ['class' => $mailing->isNewRecord ? 'btn btn-default' : 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
    </div>
  </div>

<hr class="hr-invisible">

</div> <!-- end container -->

<!-- Listing Section | Locations
************************************************************************ -->
<div class="container-fluid fullheight darkBg" id="locations">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Locaties</h1>
    </div> <!-- end col -->
  </div><!-- end row -->

  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <ul class="nav text-center" role="tablist">
          <!-- Tab Buttons -->

           <?php for ($i = 0; $i < 3; $i++): ?>

            <button href="#<?= $sport[$i]['type_name'] ?>" class="btn btn-animation btn-tabs" aria-controls="meer" role="tab" data-toggle="tab">
              <?= $sport[$i]['type_name']; ?>
            </button>

           <?php endfor ?>
          
         
          <?= Html::a('Meer', ['/location/index'], ['class' => 'btn btn-default btn-animation btn-tabs']); ?> 
        </ul>
      </div>
    </div>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active fade in" id="tennis">

        <div class="row">
          <div class="col-md-6">
          <h1 class="text-center">Sportclubs</h1>

            <?php for ($i = 0; $i < 2; $i++): ?>

            <div class="list">
              <div class="row">
                <div class="col-md-4">
                  <?php if(file_exists($paid[$i]['avatar'])): ?>
                    <img class="img-responsive img-avatar-sm" src="<?= $paid[$i]['avatar'] ?>">
                  <?php else : ?>
                  <img class="img-responsive img-avatar-sm" src="uploads/default.jpg">
                  <?php endif ?>
                </div>
                <div class="col-md-8">
                  <?php $url = urldecode('index.php?r=location/paid&id='.$paid[$i]['id']); ?>
                  <h1><?= Html::a($paid[$i]['company_name'], $url); ?> <span class="text-muted">| <?= $paid[$i]['city']; ?></span></h1>
                  <p><?= substr($paid[$i]['description'], 0, 250) . "..."; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8 text-right">
                  <?= Html::a('Boek Nu', $url, ['class' => 'btn btn-primary']); ?>
                </div>
              </div> <!-- end row -->
            </div> <!-- end list -->

            <?php endfor ?>

            <div class="col-md-12 text-center">
              <i class="fa fa-angle-down btn-fa"></i> <?= Html::a('Meer', Url::to(['/location', 'type'=> 1]));?>
              <h3><i class="fa fa-plus btn-fa"></i> <?= Html::a('Voeg je sportclub toe', 'http://manage.sportlery.nl'); ?></h3>
            </div>
          </div> <!-- end col -->

          <div class="col-md-6">
          <h1 class="text-center">Openbare Locaties</h1>

          <?php for ($i = 0; $i < 2; $i++): ?>

          <div class="list">
            <div class="row">
              <div class="col-md-4">
                <?php if(file_exists($public[$i]['avatar'])): ?>
                  <img class="img-responsive img-avatar-sm" src="<?= $public[$i]['avatar'] ?>">
                <?php else : ?>
                  <img class="img-responsive img-avatar-sm" src="uploads/default.jpg">
                <?php endif ?>
              </div>
              <div class="col-md-8">

                <?php $url = urldecode('index.php?r=location/view&id='.$public[$i]['id']); ?>
                <h1><?= Html::a($public[$i]['name'], $url); ?> <span class="text-muted">| <?= $public[$i]['city']; ?></span></h1>
                <p><?= substr($public[$i]['description'], 0, 250) . "..."; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <p>Prijs: <b> <?= $public[$i]['price']; ?></b><br>
                Category: <?= $public[$i]['category']; ?></p>
              </div>
              <div class="col-md-8 text-right">
                <?= Html::a('Bekijk', $url, ['class' => 'btn btn-primary']); ?>
              </div>
            </div> <!-- end row -->
          </div> <!-- end list -->

          <?php endfor ?>
          <div class="col-md-12 text-center">
            <i class="fa fa-angle-down btn-fa"></i> <?= Html::a('Meer', Url::to(['/location', 'type'=> 0]));?>
            <h3><i class="fa fa-plus btn-fa"></i> <?= Html::a('Voeg een openbare locatie toe', Url::to(['/location/create'])); ?></h3>
          </div>


          </div> <!-- end col -->
        </div> <!-- end row -->
      </div> <!-- end tab panel -->
    </div> <!-- end tab-content -->

</div> <!-- end container-fluid -->

<!-- Matchmaking Coming Soon
************************************************************************ -->
<div class="container text-center" id="matchmaking">
  <div class="row">
    <img src="images/matchmaking.png" class="img-responsive">
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2 class="featurette-heading">Creëer je eigen BETA profiel. <h4><span class="text-muted">Meld je direct aan!</span></h4>
      <?= Html::a('Aanmelden', ['/site/signup'], ['class'=>'btn btn-primary']) ?>
    </div>
  </div>
  <div class="row">
    <h2 class="featurette-heading"><span class="text-muted">Beschikbaar over 
    <?php
      $year = '2017';
      $month = '03';
      $day = '01';

      $current_date = new DateTime(date('Y-m-d'), new DateTimeZone('Europe/Amsterdam'));
      $end_date = new DateTime("$year-$month-$day", new DateTimeZone('Europe/Amsterdam'));
      $interval = $current_date->diff($end_date);
      echo $interval->format('%a day(s)');
    ?>.</span></h2>
  </div>
  <hr class="hr-invisible">
</div> <!-- end container-fluid -->

<!-- Parallax One
************************************************************************ -->
<div class="parallaxOne">
      <div class="container">
      <hr class="hr-invisible-sm">
      <h2 class="featurette-heading"><b>Verdien punten en win de contest!</b></h2>
      <hr class="hr-invisible-sm">
        <div class="row">
          <div class="col-md-3">
            <h3 class="featurette-heading">Creëer Account <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div>
          <div class="col-md-3">
          <h3 class="featurette-heading">Nodig vrienden uit <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div>
          <div class="col-md-3">
          <h3 class="featurette-heading">Deel op Facebook <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div>
          <div class="col-md-3">
          <h3 class="featurette-heading">Deel op Instagram <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div> <!-- end col -->
        </div> <!-- end row -->
        <hr class="hr-invisible-sm">
        <div class="row">
          <div class="col-md-12">
            <?= Html::a('Klik hier voor meer informatie.', ['/site/contest'], ['class'=>'btn btn-primary']) ?>
          </div>
        </div>
      </div> <!-- end container -->
</div> <!-- parallaxOne -->

<div class="container" id="lessons">
<div class="row">
  <img src="images/lessons.png" class="img-responsive">
</div>
<div class="row text-center">
  <div class="col-md-12">
    <h2 class="featurette-heading">Ben jij een trainer? <h4><span class="text-muted">Creëer je eigen BETA profiel en bied je lessen aan.</span></h4>
    <?= Html::a('Aanmelden', ['/site/signup'], ['class'=>'btn btn-primary']) ?>
  </div>
</div>
<hr class="hr-invisible">
</div> <!-- end container-fluid -->


<div class="parallaxTwo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h2 class="featurette-heading">Partners</h2>
        <p>Heb jij een een sportlocatie die geboekt kan worden of bied jij lessen aan? <br> Deel je aanbod op ons platform en bereik meer sporters. Bekijk alle voordelen.</p>
      </div> <!-- end col -->
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-xs-6 col-md-4 col-md-offset-2">
        <?= Html::a('Sportclubs', ['site/sportclub'], ['class' => 'btn btn-default']); ?>
      </div>
      <div class="col-xs-6 col-md-4">
        <?= Html::a('Trainer', ['site/trainer'], ['class' => 'btn btn-default']); ?>
      </div>
    </div><!-- end row -->
  </div> <!-- end container -->
</div> <!-- end parallaxTwo -->

<div class="container">

  <hr class="hr-invisible">

  <div class="row">
    <div class="col-md-12 text-center">
      <h3>"Sporten was nog nooit zo gemakkelijk. Sportlery maakt sporten laagdrempelig"</h3>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-4">
        <h2 class="h-orange">Flexibel <h4><span class="text-muted">Geen vaste abbonementskosten.</span></h4>
      </div>
      <div class="col-md-4">
        <h2 class="h-orange">Variatie <h4><span class="text-muted">Ontdek meer sporten en doe mee aan evenementen.</span></h4>
      </div>
      <div class="col-md-4">
        <h2 class="h-orange">Motivatie <h4><span class="text-muted">Er zijn meerdere mensen om je heen die graag sporten, sport samen!</span></h4>
      </div>
    </div>
  </div> <!-- end row -->

  <hr class="hr-invisible-sm">

</div>