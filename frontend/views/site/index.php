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
        <h1 class="thin">Sportlery</h1>
        <p class="lead thin">TOGETHER WE SPORT</p>
        <br>
      </div>
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
        <?php //echo $this->render('@app/views/location/_globalsearch', ['model' => $searchModel, 'userModel' => $userSearchModel]); ?>
      </div> <!-- end col -->
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-md-12 hidden-xs text-center">
      <h3><b><?= Yii::t('app', 'Search for your sport, find a sportsbuddy, book your sport location and play!'); ?></b></h3>
      </div> <!-- end col -->
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-md-12 hidden-xs text-center">
      <h3><?= Yii::t('app', 'Want to know more about Sportlery?'); ?></h3>
      </div> <!-- end col -->
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
         <button class="btn btn-primary btn-lg" id="btn-index-more"><?= Yii::t('app', 'Explore!'); ?></button>
      </div> <!-- end col -->
    </div>
  </div>
  <div class="row" id="sliderone"></div>
</div>

<hr class="hr-invisible-sm" id="">

<div class="container" >
   
  <div class="row" >
    <div class="col-md-4 col-md-offset-4 text-center">
      <h1><?= Yii::t('app', 'What is Sportlery?'); ?></h1>
    </div> <!-- end col -->
  </div> <!-- end row -->
  
  <div class="row text-center">
    <div class="col-md-10 col-xs-10 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-md-offset-1">
      <div class="col-md-4 col-sm-4 infomation-col" id="index-slideup-obj">
        <?= Html::img('@web/images/icons/location.png', ['width' => '80']); ?>
        <h1 class="h1-default text-center"><strong><?= Yii::t('app', 'Sport Locations'); ?></strong></h1>
        <p><?= Yii::t('app', 'Choose your favourite sport and find a sports facility in your neighbourhood. Book your slot and enjoy!'); ?></p>
        <hr class="hr-sm">
        <?= Html::button(Yii::t('app', 'Read more!'), ['class' => 'btn btn-primary information-btn', 'id' => 'btn-locations-more']); ?>
      </div>
      <div class="col-md-4 col-sm-4 infomation-col" id="index-slideup-obj-2">
        <?= Html::img('@web/images/icons/matchmaking.png', ['width' => '80']); ?>
        <h1 class="h1-default text-center"><strong><?= Yii::t('app', 'Matchmaking'); ?></strong></h1>
        <p><?= Yii::t('app', 'Find sportbuddies, create or participate in events and find substitute players for your team.') ?></p>
        <hr class="hr-sm">
         <?= Html::button(Yii::t('app', 'Read more!'), ['class' => 'btn btn-primary information-btn', 'id' => 'btn-whatis-more']); ?>
      </div>
      <div class="col-md-4 col-sm-4 infomation-col" id="index-slideup-obj-3" >
        <?= Html::img('@web/images/icons/trainer.png', ['width' => '80']); ?>
        <h1 class="h1-default text-center"><strong><?= Yii::t('app', 'Sport Classes'); ?></strong></h1>
        <p><?= Yii::t('app', 'Discover and try-out new sports! A clear overviewof all classes and workshops that are being offered in your neighbourhood.'); ?></p>
        <hr class="hr-sm">
        <?= Html::button(Yii::t('app', 'Read more!'), ['class' => 'btn btn-primary information-btn', 'id' => 'btn-message-more']); ?>
      </div>
    </div>
  </div> 

  <div class="row" id="slidertwo"></div>
<hr class="hr-invisible">
</div> <!-- end container -->


<!-- Matchmaking Coming Soon
************************************************************************ -->
<div class="parallaxMm">
<div class="container text-center" >
  <div class="row" id="index-mm">
    <div class="row">
      <div class="col-md-12">
        <h1 style="color: black;">Matchmaking</h1>  
      </div>
      <div class="col-md-12">
        <?php if(Yii::$app->language == 'nl'){
          echo '<div class="img-responsive img-mm-type" id="img-mm-nl"></div>';
        } else {
          echo '<div class="img-responsive img-mm-type" id="img-mm-en"></div>';
        }?>
        
      </div>
    </div>
  </div>

  <hr class="hr-invisible">
<div class="row" id="sliderthree"></div>
</div> <!-- end container-fluid -->
</div>

<!-- Listing Section | Locations
************************************************************************ -->
<div class="parallaxLoc">
<div class="container text-center" id="locations">

  <div class="row" id="index-loc">
    <div class="row">
      <div class="col-md-12">
        <h1 class="loc-head"><?= Yii::t('app', 'Sport Locations'); ?></h1>  
      </div>
      <div class="col-md-12">
      <?php if(Yii::$app->language == 'nl'){
          echo '<div class="img-responsive img-loc-type" id="img-loc-nl"></div>';
        } else {
          echo '<div class="img-responsive img-loc-type" id="img-loc-en"></div>';
        }?>
      </div>
    </div>
  </div>


  <hr class="hr-invisible">
<div class="row" id="sliderfour"></div>
</div> <!-- end container-fluid -->
</div>


<!-- Parallax One
************************************************************************ -->
<?php if(Yii::$app->language == 'nl') {
  echo '<div class="parallaxLesNl">';
} else {
  echo '<div class="parallaxLes">';  
} ?>
<div class="container text-center" id="locations">

  <div class="row" id="index-loc">
    <div class="row">
      <div class="col-md-12">
        <h1 class="loc-head"></h1>  
      </div>
      <div class="col-md-12">
        <div class="img-responsive img-les-type" id="img-les"></div>';
      </div>
    </div>
  </div>


  <hr class="hr-invisible">
</div> <!-- end container-fluid -->
</div>



<hr class="hr-invisible">

<div class="parallaxTwo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h2 class="featurette-heading"><?= Yii::t('app', 'Partners');?></h2>
        <p><?= Yii::t('app', 'Are you in charge of a sport location which can be booked or do you offer sport classes?');?> <br> <?= Yii::t('app', 'Share your service on our platform and reach more sports enthusiasts. For benefits click below.'); ?></p>
      </div> <!-- end col -->
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-xs-6 col-md-4 col-md-offset-2">
        <?= Html::a(Yii::t('app', 'Sportclubs'), ['site/sportclub'], ['class' => 'btn btn-default']); ?>
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
    <h3><?= Yii::t('app', 'Do you want to become one of the first Sportlers? Fill in your e-mail address below:'); ?></h3>
    <div class="mailing col-md-6 col-md-offset-3">

            <!-- Begin MailChimp Signup Form -->
              <form action="//sportlery.us14.list-manage.com/subscribe/post?u=f843bd1e558ff3e6d333044de&amp;id=8efe7ac3d6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                  <div class="form-group">
                    <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="<?= Yii::t('app', 'Fill in your e-mail address');?>" required>    
                  </div>
                
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f843bd1e558ff3e6d333044de_8efe7ac3d6" tabindex="-1" value=""></div>
                  <div class="form-group"><input type="submit" value="<?= Yii::t('app', 'Send')?>" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default"></div>
                  </div>
              </form>
            <!--End mc_embed_signup-->
    </div>
  </div>
          <hr class="hr-invisible-sm">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3>"<?= Yii::t('app', 'Doing sports has never been so easy! Sportlery crosses all barriers between sports enthusiasts and their favourite sport'); ?>"</h3>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-4">
        <h2 class="h-orange"><?= Yii::t('app', 'Flexible'); ?> <h4><span class="text-muted"><?= Yii::t('app', 'No fixed contracts'); ?></span></h4>
      </div>
      <div class="col-md-4">
        <h2 class="h-orange"><?= Yii::t('app', 'Variation'); ?> <h4><span class="text-muted"><?= Yii::t('app', 'Discover more sports and join events'); ?></span></h4>
      </div>
      <div class="col-md-4">
        <h2 class="h-orange"><?= Yii::t('app', 'Motivation'); ?> <h4><span class="text-muted"><?= Yii::t('app', 'There are more people out there who enjoy sports, do it together!'); ?></span></h4>
      </div>
    </div>
  </div> <!-- end row -->

  <hr class="hr-invisible-sm">

</div>