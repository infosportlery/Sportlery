<?php 

  use yii\bootstrap\Modal;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\bootstrap\Alert;
  use yii\helpers\Url;

?>
<?= Alert::widget() ?>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="thin">Sportlery</h1>
        <p class="lead thin">TOGETHER WE SPORT</p>
        <br>
      </div>
    </div>
    <hr class="hr-invisible">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 text-center">
        <?php echo $this->render('@app/views/location/_search', array('model'=>$searchModel)); ?>
      </div> <!-- end col -->
    </div>
  </div>
    <hr class="hr-invisible">
    <button class="btn btn-primary" id="btn-locations">Locations</button>
    <button class="btn btn-primary" id="btn-matchmaking">Matchmaking</button>
    <button class="btn btn-primary" id="btn-lessons">Lessons</button>
</div>

<div class="container">
  <!-- VIDEO KOMT HIER
    <div clas="row">
        <div class="col-md-12 text-center">
          <h1>Wat is Sportlery</h1>
          <img src="http://placehold.it/620x380">
        </div>
     </div> -->
   
  <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
      <h1>Wat is Sportlery?</h1>
    </div> <!-- end col -->
  </div> <!-- end row -->

  <div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-4">
        <img src="images/icons/location.png" height="80px"><br>
        <h1 class="text-center"><?= Yii::t('app', 'Locations'); ?></h1>
        <p>Select your sport and <br>find a location close to you. <br>Book it and sport!</p>
        <button class="btn-link text-left" id="link-locations">Check out all locations</button>
      </div>
      <div class="col-md-4">
        <img src="images/icons/matchmaking.png" height="80px"><br>
        <h1 class="text-center"><?= Yii::t('app', 'Matchmaking'); ?></h1>
        <p>
          - Finding sportsbuddies<br>
          - Joining/creating events<br>
          - Find substitutes/replacement<br>
        </p>
        <button class="btn-link" id="link-matchmaking">Go and Play!</button>
      </div>
      <div class="col-md-4">
        <img src="images/icons/trainer.png" height="80px"><br>
        <h1 class="text-center"><?= Yii::t('app', 'Lessons'); ?></h1>
        <p>Try out and discover new sports! Get a clear overview of all offered classes, lessons and workshops.</p>
        <button class="btn-link" id="link-lessons">Check out all lessons</button>
      </div>
    </div>
  </div> <!-- end row -->

  <hr class="hr-invisible">

  <div class="row text-center">
    <h3>Wil je één van de eerste Sportlers zijn? Laat dan nu je e-mail achter.</h3>
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
      <h1>Locations</h1>
    </div> <!-- end col -->
  </div><!-- end row -->

  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <ul class="nav text-center" role="tablist">
          <!-- Tab Buttons -->
          <?php for ($i = 0; $i < 4; $i++): ?>
          <button href="#tennis" class="btn btn-animation btn-tabs" aria-controls="tennis" role="tab" data-toggle="tab"><?= $paid[$i]['category']; ?></button>
          <?php endfor ?>
          <button href="#meer" class="btn btn-animation btn-tabs" aria-controls="meer" role="tab" data-toggle="tab">Meer</button>
        </ul>
      </div>
    </div>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active fade in" id="tennis">

        <div class="row">
          <div class="col-md-6">
          <h1 class="text-center">Paid</h1>

                <?php for ($i = 0; $i < 2; $i++): ?>

                <div class="list">
            <div class="row">
              <div class="col-md-4">
                <img class="img-responsive" src="http://www.placehold.it/130x130">
              </div>
              <div class="col-md-8">
                <h1><?= Html::a($paid[$i]['name'], Url::to(['location/view?id='.$paid[$i]['id']]));?> <span class="text-muted">| <?= $paid[$i]['city']; ?></span></h1>
                <p><?= substr($paid[$i]['description'], 0, 250) . "..."; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <p>Prijs: <b> <?= $public[$i]['price']; ?></b>
                Category: <?= $paid[$i]['category']; ?></p>
              </div>
              <div class="col-md-8 text-right">
                <button class="btn btn-animation-blue btn-primary">Boek nu!</button>
              </div>
            </div> <!-- end row -->
          </div> <!-- end list -->

                <?php endfor ?>
          </div> <!-- end col -->

          <div class="col-md-6">
          <h1 class="text-center">Public</h1>

          <?php for ($i = 0; $i < 2; $i++): ?>

          <div class="list">
            <div class="row">
              <div class="col-md-4">
                <img class="img-responsive" src="http://www.placehold.it/130x130">
              </div>
              <div class="col-md-8">

                <h1><?= Html::a($public[$i]['name'], Url::to(['location/view?id='.$public[$i]['id']]));?> <span class="text-muted">| <?= $public[$i]['city']; ?></span></h1>
                <p><?= substr($public[$i]['description'], 0, 250) . "..."; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <p>Prijs: <b> <?= $public[$i]['price']; ?></b>
                Category: <?= $public[$i]['category']; ?></p>
              </div>
              <div class="col-md-8 text-right">
                <button class="btn btn-animation-blue btn-primary">Boek nu!</button>
              </div>
            </div> <!-- end row -->
          </div> <!-- end list -->

          <?php endfor ?>
          </div> <!-- end col -->
        </div> <!-- end row -->
      </div> <!-- end tab panel -->
    </div> <!-- end tab-content -->

  <div class="row text-center">
      <div class="col-md-6">
        <i class="fa fa-angle-down btn-fa"></i> <?= Html::a('More', Url::to(['../location', 'LocationSearch[type]' => 1]));?>
        <h3><i class="fa fa-plus btn-fa"></i> <?= Html::a('Add your own paid location', Url::to(['../location/create'])); ?></h3>
      </div>
      <div class="col-md-6">
        <i class="fa fa-angle-down btn-fa"></i> <?= Html::a('More', Url::to(['../location', 'LocationSearch[type]'=> 0]));?>
        <h3><i class="fa fa-plus btn-fa"></i> <?= Html::a('Add your own public location', Url::to(['../location/create'])); ?></h3>
      </div>
    </div>
</div> <!-- end container-fluid -->


<!-- Matchmaking Coming Soon
************************************************************************ -->
<div class="container text-center" id="matchmaking">
  <div class="row">
    <img src="images/matchmaking.png" class="img-responsive">
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2 class="featurette-heading">Create your own BETA profile. <h4><span class="text-muted">Click below to get started!</span></h4>
      <?= Html::a('Signup', ['/site/signup'], ['class'=>'btn btn-primary']) ?>
    </div>
  </div>
  <div class="row">
    <h2 class="featurette-heading"><span class="text-muted">Kick off / launch in 
    <?php
      $year = '2017';
      $month = '01';
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
      <h2 class="featurette-heading"><b>Earn Credits and win the contest</b></h2>
      <hr class="hr-invisible-sm">
        <div class="row">
          <div class="col-md-3">
            <h3 class="featurette-heading">Create Account <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div>
          <div class="col-md-3">
          <h3 class="featurette-heading">Invite Friends <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div>
          <div class="col-md-3">
          <h3 class="featurette-heading">Share on Facebook <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div>
          <div class="col-md-3">
          <h3 class="featurette-heading">Share on Instagram <h4><span class="text-muted"><i class="fa fa-plus"></i> 20 points</span></h4>
            
          </div> <!-- end col -->
        </div> <!-- end row -->
        <hr class="hr-invisible-sm">
        <div class="row">
          <div class="col-md-12">
            <?= Html::a('Check contest for more details', ['/site/contest'], ['class'=>'btn btn-primary']) ?>
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
    <h2 class="featurette-heading">Are you a teacher? <h4><span class="text-muted">Create your beta profile and offer your lessons.</span></h4>
    <?= Html::a('Signup', ['/site/signup'], ['class'=>'btn btn-primary']) ?>
  </div>
</div>
<hr class="hr-invisible">
</div> <!-- end container-fluid -->


<div class="parallaxTwo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h2 class="featurette-heading">Partners</h2>
        <p>Do you have a sport location which can be booked or do you offer sport lessons? Publish them on Sportlery and share them with our sporters/see the advantages.</p>
      </div> <!-- end col -->
    </div>
    <hr class="hr-invisible-sm">
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <?= Html::a('Sportclubs', ['site/partner'], ['class' => 'btn btn-default']); ?>
      </div>
      <div class="col-md-4">
        <?= Html::a('Trainer', ['site/trainer'], ['class' => 'btn btn-default']); ?>
      </div>
    </div><!-- end row -->
  </div> <!-- end container -->
</div> <!-- end parallaxTwo -->

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>How does it work?</h1>
    </div> <!-- end col -->
  </div><!-- end row -->

  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <!-- Nav Tabs -->
        <ul class="nav text-center" role="tablist">
          <button href="#tab-location" class="btn btn-animation btn-tabs" aria-controls="tab-location" role="tab" data-toggle="tab">Location</button>
          <button href="#tab-matchmaking" class="btn btn-animation btn-tabs" aria-controls="tab-matchmaking" role="tab" data-toggle="tab">Matchmaking</button>
          <button href="#tab-lesson" class="btn btn-animation btn-tabs" aria-controls="tab-lesson" role="tab" data-toggle="tab">Lesson</button>
        </ul>
      </div>
   </div>

  <div class="row">
  <div class="col-md-6 col-md-offset-4">
    <div class="tab-content">
        <div id="tab-location" class="tab-pane fade in active">
        <h3>READY</h3>
        <p>Select a sport and check the lokations that are available.</p>
        <h3>SET</h3>
        <p>Choose a location and select a time slot.</p>
        <h3>GO</h3>
        <p>Book the time slot, pay online and play!</p>
        </div>
        <div id="tab-matchmaking" class="tab-pane fade">
        <h3>READY</h3>
        <p>Create an account and select the sports you like.</p>
        <h3>SET</h3>
        <p>Find a sporter in your area to play with.</p>
        <h3>GO</h3>
        <p>Send him a message and challenge him for a game.</p>
        </div>
        <div id="tab-lesson" class="tab-pane fade">
            <h3>READY</h3>
        <p>Select the sports you wish to discover or improve.</p>
        <h3>SET</h3>
        <p>Choose a trainer or lessons that suits you.</p>
        <h3>GO</h3>
        <p>Book a lesson, pay online and go!</p>
        </div>
    </div>
  </div>  
  </div>

  <hr class="hr-invisible">

  <div class="row">
    <div class="col-md-12 text-center">
      <h3>"Sporten was nog nooit zo gemakkelijk. Sportlery maakt sporten laagdrempelig"</h3>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-4">
        <h2 class="featurette-heading">Flexibel <h4><span class="text-muted">Geen vaste abbonementskosten.</span></h4>
      </div>
      <div class="col-md-4">
        <h2 class="featurette-heading">Variatie <h4><span class="text-muted">Ontdek meer sporten en doe mee aan evenementen.</span></h4>
      </div>
      <div class="col-md-4">
        <h2 class="featurette-heading">Motivatie <h4><span class="text-muted">Er zijn meerdere mensen om je heen die graag sporten, sport samen!</span></h4>
      </div>
    </div>
  </div> <!-- end row -->

  <hr class="hr-invisible-sm">


</div>