<!-- Location Listing -->


        <div class="row">
            <div class="col-md-6 text-center">
                <h1><strong>Sportlocaties</strong></h1>
            </div> <!-- end col -->
            <div class="col-md-6 text-center">
                <h1><strong>Matchmaking</strong></h1>
            </div> <!-- end col -->
        </div><!-- end row -->
    

    <div class="col-md-6">

        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Openbare Locaties</h3>
            </div>
        </div>
        
        <?= 
            ListView::widget([
                'dataProvider' => $publicProvider,
                'options' => [
                    'tag' => 'div',
                    'class' => 'list-wrapper',
                    'id' => 'list-wrapper',
                ],
                'layout' => "{items}",
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list',['model' => $model]);
                },
            ]); 
        ?>

        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Sportclubs</h2>
            </div>
        </div>
        
        <?= 
            ListView::widget([
                'dataProvider' => $paidProvider,
                'options' => [
                    'tag' => 'div',
                    'class' => 'list-wrapper',
                    'id' => 'list-wrapper',
                ],
                'layout' => "{items}",
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list',['model' => $model]);
                },
            ]); 
        ?>

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <button class="btn btn-primary btn-block btn-xs">Meer</button>
            </div>
        </div>
    </div>

    <div class="col-md-6">

        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Sportlers</h2>
            </div>
        </div>
        
        <?= 
            ListView::widget([
                'dataProvider' => $userProvider,
                'options' => [
                    'tag' => 'div',
                    'class' => 'list-wrapper',
                    'id' => 'list-wrapper',
                ],
                'layout' => "{items}",
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_userlist',['model' => $model]);
                },
            ]); 
        ?>

        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Groepschat</h2>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-12 text-center">
        <h1 class="comingsoon">COMING SOON</h1>
        </div>
        </div>
          


    </div> <!-- end .col -->

<!-- End Location Listing -->


<!-- Create Beta Profile -->

    <div class="col-md-12">
      <h2 class="featurette-heading">Creëer je eigen BETA profiel. <h4><span class="text-muted">Meld je direct aan!</span></h4>
      <?= Html::a('Aanmelden', ['/site/signup'], ['class'=>'btn btn-primary']) ?>
    </div>

<!-- End Beta Profile -->

<!-- Available At -->

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

<!-- End Available At -->


<!-- Parallax 1 -->

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


<!-- End Parallax 1 -->

<!-- Trainer Signup -->


<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <h2 class="featurette-heading">Ben jij een trainer? <h4><span class="text-muted">Creëer je eigen BETA profiel en bied je lessen aan.</span></h2>
            <?= Html::a('Aanmelden', ['/site/signup'], ['class'=>'btn btn-primary']) ?>
        </div>
    </div>
</div>

<!-- End Trainer Signup -->


<!-- Index Lessen display -->



<!-- End index lessen display -->