<?php 

  use yii\bootstrap\Modal;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\helpers\Url;

  use yii\widgets\ListView;


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
      <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
        <?= 'INFORMATIE'; ?>
        <?php //echo $this->render('@app/views/location/_globalsearch', ['model' => $searchModel, 'userModel' => $userSearchModel]); ?>
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
      <h3>Wilt U meer weten over ons? </h3>
      </div> <!-- end col -->
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
         <button class="btn btn-primary btn-lg" id="btn-index-more">Lees hier meer..</button>
      </div> <!-- end col -->
    </div>
  </div>
  <div class="row" id="sliderone"></div>
</div>

<hr class="hr-invisible-sm" id="">

<div class="container" >
   
  <div class="row" >
    <div class="col-md-4 col-md-offset-4 text-center">
      <h1>Wat is Sportlery?</h1>
    </div> <!-- end col -->
  </div> <!-- end row -->
  
  <div class="row text-center">
    <div class="col-md-10 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1">
      <div class="col-md-4 col-sm-4 infomation-col" >
        <?= Html::img('@web/images/icons/location.png', ['width' => '80']); ?>
        <h1 class="h1-default text-center"><strong><?= Yii::t('app', 'Locaties'); ?></strong></h1>
        <p>Kies je sport en zoek een locatie bij jou in de buurt. Boek een plek en sporten maar!</p>
        <hr class="hr-sm">
        <?= Html::button('Bekijk alle locaties', ['class' => 'btn btn-primary information-btn', 'id' => 'btn-whatis-more']); ?>
      </div>
      <div class="col-md-4 col-sm-4 infomation-col" >
        <?= Html::img('@web/images/icons/matchmaking.png', ['width' => '80']); ?>
        <h1 class="h1-default text-center"><strong><?= Yii::t('app', 'Matchmaking'); ?></strong></h1>
        <p>Vind sportbuddies, creëer of participeer in evenementen en vind vervanging voor jouw sporten.</p>
        <hr class="hr-sm">
         <?= Html::button('Go and Play!', ['class' => 'btn btn-primary information-btn', 'id' => 'btn-locations-more']); ?>
      </div>
      
    </div>
  </div> 

  <div class="row" id="slidertwo"></div>
<hr class="hr-invisible">
</div> <!-- end container -->

<!-- Listing Section | Locations
************************************************************************ -->

<div class="container text-center" id="locations">
  <div class="row">
    <?= Html::img('@web/images/matchmaking.png', ['class' => 'img-responsive']); ?>
  </div>


  <hr class="hr-invisible">
<div class="row" id="sliderthree"></div>
</div> <!-- end container-fluid -->


<!-- Matchmaking Coming Soon
************************************************************************ -->
<div class="container text-center" id="matchmaking">
  <div class="row">
    <?= Html::img('@web/images/matchmaking.png', ['class' => 'img-responsive']); ?>
  </div>

  <hr class="hr-invisible">
<div class="row" id="sliderfour"></div>
</div> <!-- end container-fluid -->

<!-- Parallax One
************************************************************************ -->




<hr class="hr-invisible">

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

  <hr class="hr-invisible-sm">

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