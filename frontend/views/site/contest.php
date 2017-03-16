<?php 

  use yii\bootstrap\Modal;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\helpers\Url;

  use yii\widgets\ListView;


?>
<div class="sub-header" style="background-color:#29719B;">
  <div class="row" style="margin-left: 0px;">
	<h1 style="color: white;" class="text-center"><b><?= Yii::t('app', 'Welcome to the Ultimate Sports Community!'); ?></b></h1>
	<hr class="hr-sm">
	  <div class="col-md-5 col-md-offset-1 col-sm-12 text-center">
		<h2 style="margin-top: 0px;"><b>Launch @ 16th of April!</b></h2>
		  <hr class="hr-invisible-sm">
		<h3 style="line-height:1.5;">Like &amp; Follow us,<br/>Share with your friends,<br/>Earn points and WIN!</h3>
		  <hr class="hr-invisible-sm">
		<a class="btn btn-default" id="howto-contest-btn" style="font-size: 22px; margin: 15px;">How to win?</a>
	</div>
	<div class="col-md-5 col-sm-12">
		<!-- Video Contest -->
		<iframe style="width: 100%; height:315px;"  src="https://www.youtube.com/embed/BfjCgfLW7Ec" frameborder="0" allowfullscreen></iframe>
	</div> 
   </div>
</div>

<div class="container contest-container">
	<div class="row">
		<h2><b><?= Yii::t('app', 'THE ULTIMATE SPORT COMMUNITY') ?></b></h2>
	</div>
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<queue-community widget-height='1000px'></queue-community>		
		</div>
		<div class="col-md-4 col-sm-12">
			<h2 style="text-align:center;"><b><u><?= Yii::t('app', '2 WAYS TO WIN!')?></u></b></h2>
	      <h3><b><?= Yii::t('app', 'Lottery')?></b></h3>
	      <h4 style="font-size:22px;">For every <b>50 points</b> you get <b>one ticket</b></h4>
	      <h4>Next Draw <b>@29th of March!</b> </h4>
          <?= html::img('@web/images/drone-contest.png', ['class' => 'prize-image']); ?>
	      <h3><b><?= Yii::t('app', 'Rankings') ?></b></h3>
	      <h4><span class="label label-primary">#1</span> <?= Yii::t('app', 'GOPRO HERO SESSION!') ?></h4>
	      <?= Html::a(html::img('@web/images/hero-contest-img.png', ['class' => 'prize-image']), 'https://shop.gopro.com/EMEA/cameras/hero-session/CHDHS-104-master.html', ['target'=>'_blank']); ?>
	      <h4><span class="label label-primary">#2</span> <?= Yii::t('app', 'SAMSUNG GEARFIT 2') ?></h4>
	      <?= Html::a(html::img('@web/images/contest-gear-fit2.png', ['class' => 'prize-image']), 'http://www.samsung.com/global/galaxy/gear-fit2/', ['target'=>'_blank']); ?>
	      <h4><span class="label label-primary">#3</span> <?= Yii::t('app', ' COMBI CLINIC AT "DE KAAG"') ?></h4>
	      <?= Html::a(html::img('@web/images/de_kaag_img.png', ['class' => 'prize-image']), 'http://www.dekaag.nl/volwassenen/combi-clinic/', ['target'=>'_blank']); ?>
	      <hr class="hr-sm">
	      <div class="row text-center"><a style="font-size:26px; text-align:center;" class="btn btn-default" id="prizes-button-more"><b>More prizes below!</b></a></div>
	    </div>
	</div>
</div>

<div class="container" id="howtowin-contest">
	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center"><b><?= Yii::t('app', 'HOW TO WIN!') ?></b></h3>
			<p>Underneath you will find an overview of all possible activities that will be rewarded with points. Some you can do only once, whereas others can be done daily or even unlimited!</p>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<!-- Table Points -->
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>
								ACTION
							</th>
							<th>
								POINTS
							</th>
							<th>
								1X
							</th>
							<th>
								DAILY
							</th>
							<th>
								UNLIMITED
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								JOIN THE CONTEST
							</th>
							<td>
								+10
							</td>
							<td>
								&#x2713;
							</td>
							<td>							
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								EMAIL CONFIRMATION
							</th>
							<td>
								+10
							</td>
							<td>
								&#x2713;
							</td>
							<td>							
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								ADD COMMENT
							</th>
							<td>
								+10
							</td>
							<td>
								&#x2713;
							</td>
							<td>							
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								LIKE ON FACEBOOK
							</th>
							<td>
								+10
							</td>
							<td>
								&#x2713;		
							</td>
							<td>					
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								FOLLOW ON TWITTER
							</th>
							<td>
								+10
							</td>	
							<td>
								&#x2713;
							</td>
							<td>
														
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								SUBSCRIBE TO YOUTUBE
							</th>
							<td>
								+10
							</td>
							<td>
								&#x2713;
							</td>
							<td>
															
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								WATCH OUR VIDEO
							</th>
							<td>
								+10
							</td>
							<td>
								&#x2713;
							</td>
							<td>
															
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								FOLLOW ON INSTAGRAM
							</th>
							<td>
								+10
							</td>
							<td>
								&#x2713;
							</td>
							<td>							
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								SHARE ON FACEBOOK
							</th>
							<td>
								+5
							</td>
							<td>
								
							</td>
							<td>
								&#x2713;							
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								POST ON TWITTER
							</th>
							<td>
								+5
							</td>
							<td>
								
							</td>
							<td>
								&#x2713;							
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<th scope="row">
								REFER A FRIEND*
							</th>
							<td>
								+25
							</td>
							<td>
							</td>
							<td>							
							</td>
							<td>
								&#x2713;
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- End Table Points -->
			<p id="all-prizes-p">*You will recieve points as soon as your referrals have confirmed their email address.</p>
		</div>
	</div>
</div>


<div class="container ranking-lottery-container">
	<div class="row text-center">
		<h2><b><?= Yii::t('app', 'ALL PRIZES!') ?></b></h2>
	</div>
	<div class="row">
		<div class="col-md-12">

		</div>
		<div class="col-md-6 col-sm-12">
						
			<div class="content-lottery">
				<h3>
					<b>
						<?= Yii::t('app', 'LOTTERY ')?>
					</b>
				</h3>
				<p class="content-lottey-p" style="text-align: justify;"><b>
					<?= Yii::t('app', 'The lottery, where you can win a drone, will take place every two weeks. For every 50 points you earn in the competition, you will receive a ticket. More points mean more tickets, so more chance for you to win one of the drones!') ?>
					</b></p>
				
			      <p><?= Yii::t('app', '15th of March : "Jeroen Spee"') ?><br>
			      <?= Yii::t('app', '29th of March : "TBA"') ?><br>
			      <?= Yii::t('app', '15th of April : "TBA"') ?></p>
			</div>
		</div>
		<hr class="hr-sm hr-split-rank-lot">
		<div class="col-md-6 col-sm-12">
			<h3 class="text-left">
				<b>
				</b>
			</h3>
			<hr class="hr-invisible-sm">
			<div class="content-lottery">
	      		<?= html::img('@web/images/drone-contest.png', ['class' => 'price-image-lower-first']); ?>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr class="hr-invisible-sm">
		</div>
	</div>
	<hr class="hr-sm hr-sm-mob">
	<div class="row text-center">
		<div class="col-md-6">
			<h3 style="text-align: left; margin-top: 10.5px;"><b>RANKING</b></h3>
			<p style="text-align: justify;"><b>When the contest ends, one of you will be the new owner of the GoPro. That could be you, if you make sure you become and stay number one in the rankings, to be found on the left side of this page. Don’t worry if you didn’t make it that far, because the entire top 50 will receive one of our prizes!</b></p>
		</div>
		<div class="col-md-6">
		<h5 style="text-align: left;"><?= Yii::t('app', 'GoPro HERO Session') ?> <span class="badge">#1</span></h5>
	      <?= Html::a(html::img('@web/images/hero-contest-img.png', ['class' => 'price-image-lower-first']), 'https://shop.gopro.com/EMEA/cameras/hero-session/CHDHS-104-master.html', ['target'=>'_blank']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<h5><?= Yii::t('app', 'Samsung GearFit 2') ?> <span class="badge">#2</span></h5>
	      	<?= Html::a(html::img('@web/images/contest-gear-fit2.png', ['class' => ' price-image-lower']), 'http://www.samsung.com/global/galaxy/gear-fit2/', ['target'=>'_blank']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-6 col-sm-12">
			<h5><?= Yii::t('app', 'Combi Clinic at "De Kaag"') ?> <span class="badge">#3</span></h5>
	      <?= Html::a(html::img('@web/images/de_kaag_img.png', ['class' => 'price-image-lower']), 'http://www.dekaag.nl/volwassenen/combi-clinic/', ['target'=>'_blank']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-6 col-sm-12">
		<h5><?= Yii::t('app', 'Maximum Sports Nutrition Plan') ?> <span class="badge">#4 &amp; #5</span></h5>
			<?= Html::a(html::img('@web/images/maximumsports.png', ['class' => 'price-image-lower']), 'http://maximum-sports.nl/', ['target'=>'_blank']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-6 col-sm-12">
		<h5><?= Yii::t('app', 'Golf Arrangement') ?> <span class="badge">#6 - #10</span></h5>
	      <?= Html::a(html::img('@web/images/golfles.png', ['class' => 'price-image-lower']), 'http://www.golfbaanwaterlandamsterdam.nl/welkom/', ['target'=>'_blank']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-6 col-sm-12">
		<h5><?= Yii::t('app', 'Decathlon Giftcard') ?> <span class="badge">#11 - #20</span></h5>
			<?= Html::a(html::img('@web/images/logo-giftcard.jpg', ['class' => 'price-image-lower']), 'https://www.decathlon.nl/coolsingel.html', ['target'=>'_blank']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-6 col-sm-12r">
		<h5><?= Yii::t('app', 'Ping Pong Set') ?> <span class="badge">#21 - #30</span><br class="break-mob"> &amp; <br class="break-mob"><?= Yii::t('app', 'Sportlery Sunglasses') ?> <span class="badge">#31 / #50</span></h5>
			<?= html::img('@web/images/brilpingpong.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>
</div>
