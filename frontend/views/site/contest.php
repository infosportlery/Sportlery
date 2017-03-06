<?php 

  use yii\bootstrap\Modal;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\helpers\Url;

  use yii\widgets\ListView;


?>
<div class="sub-header">
	<div class="container">
	  <div class="row index-contest-signup">
	  	<div class="col-md-5 col-md-offset-1 col-sm-12">
	  		<h2 style="color: white;"><b><?= Yii::t('app', 'WELCOME TO THE CONTEST'); ?></b></h2>
	  		<p class="contest-p-header"><?= Yii::t('app', 'In this contest you can win various prizes such as a GoPro Session, a Samsung GearFit 2, a Drone and many more!'); ?></p>
	  		<p class="contest-p-header"><?= Yii::t('app', 'You can earn points in the contest by completing different activities, such as inviting your friends, sharing on social media and other actions!'); ?></p>
	  		<p class="contest-p-header"><?= Yii::t('app', 'After the contest you will be invited to join the sportlery community. This contest helps the community to spread the word and expand.'); ?></p>
	  		<p class="contest-p-header"><?= Yii::t('app', 'You will be able to find people, with the same level in sports as you, in your neighbourhood, challenge each other, create and join sporting events, and many more. Good Luck! And go get yourself that GoPro!'); ?></p>
	  	</div>
	  	<div class="col-md-5 col-sm-12">
	  		<!-- Video Contest -->
	  		<iframe style="width: 100%; height:315px;"  src="https://www.youtube.com/embed/BfjCgfLW7Ec" frameborder="0" allowfullscreen></iframe>
	  	</div> 
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
	      <h3><b><?= Yii::t('app', 'PRIZES')?></b></h3>
	      <p style="text-align: justify; line-height: 1.6;"><?= Yii::t('app', 'By joining actively in the contest, you will have a chance to win one of our fantastic prizes. We have two different categories: the rankings and the lottery. In the rankings, it is all about becoming and staying number one. You will also receive lottery tickets for active participation in the contest.') ?></p>
	      <h3><b><?= Yii::t('app', 'THE LOTTERY')?></b></h3>
	      <p><b><?= Yii::t('app', 'The lottery, where you can win a drone, will take place every two weeks. For every 50 points you earn in the competition, you will receive a ticket. More points mean more tickets, so more chance for you to win one of the drones!') ?></b></p>
          <?= html::img('@web/images/drone-contest.png', ['class' => 'prize-image']); ?>
	      <h3><b><?= Yii::t('app', 'THE RANKINGS') ?></b></h3>
	      <p><b><?= Yii::t('app', 'When the contest ends, one of you will be the new owner of the GoPro. That could be you, if you make sure you become and stay number one in the rankings, to be found on the left side of this page. Don’t worry if you didn’t make it that far, because the entire top 50 will receive one of our prizes!') ?></b></p>
	      <h4><span class="label label-primary">#1</span> <?= Yii::t('app', 'GOPRO HERO SESSION!') ?></h4>
	      <?= Html::a(html::img('@web/images/hero-contest-img.png', ['class' => 'prize-image']), 'https://shop.gopro.com/EMEA/cameras/hero-session/CHDHS-104-master.html', ['target'=>'_blank']); ?>
	      <h4><span class="label label-primary">#2</span> <?= Yii::t('app', 'SAMSUNG GEARFIT 2') ?></h4>
	      <?= Html::a(html::img('@web/images/contest-gear-fit2.png', ['class' => 'prize-image']), 'http://www.samsung.com/global/galaxy/gear-fit2/', ['target'=>'_blank']); ?>
	      <h4><span class="label label-primary">#3</span> <?= Yii::t('app', ' COMBI CLINIC AT "DE KAAG"') ?></h4>
	      <?= Html::a(html::img('@web/images/de_kaag_img.png', ['class' => 'prize-image']), 'http://www.dekaag.nl/volwassenen/combi-clinic/', ['target'=>'_blank']); ?>
	      <hr class="hr-sm">
	      <h5 style="color:#F46835;" class="text-center"><b>More prizes below!</b></h5>
	    </div>
	</div>
</div>

<div class="container">
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
			<p>*You will recieve points as soon as your referrals have confirmed their email address.</p>
		</div>
	</div>
</div>


<div class="container ranking-lottery-container">
	<div class="row text-center">
		<h2><b><?= Yii::t('app', 'ALL PRIZES!') ?></b></h2>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<h3 class="text-center">
				<b>
					<?= Yii::t('app', 'LOTTERY ')?> - 
					<?= Yii::t('app', 'WIN A DRONE') ?> <span class="badge">X3</span>
				</b>
			</h3>
		</div>
		<div class="col-md-6 col-sm-12">
			
			<div class="content-lottery">
				<p class="content-lottey-p">
					<?= Yii::t('app', 'As often said, participating is more important than winning. Therefore, during the online contest, active participation will be rewarded! Every 50 points you have earned, will also get you a ticket in the lottery. Every two weeks, one of these tickets will be picked at random, and the owner of that ticket will receive a brand-new drone!') ?>
				</p>

				<p class="content-lottey-p"><u>
					<?= Yii::t('app', 'Lottery dates:') ?>
				</u></p>
				<p class="content-lottey-p"><b>
					<?= Yii::t('app', '15 March');?><br>
					<?= Yii::t('app', '29 March');?><br>
					<?= Yii::t('app', '12 April');?><br>
				</b></p>
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
		<div class="col-md-12 text-center">
			<h3><b><?= Yii::t('app', 'RANKINGS') ?></b></h3>
			<p class="content-lottey-p"><?= Yii::t('app', 'These are the amazing prizes which you can compete for in our online contest!')?></p>
		</div>
	</div>
	<hr class="hr-sm hr-sm-mob">
	<div class="row text-center">
		<div class="col-md-12 text-center">
		<h5><?= Yii::t('app', 'GoPro HERO Session') ?> <span class="badge">#1</span></h5>
	      <?= Html::a(html::img('@web/images/hero-contest-img.png', ['class' => 'price-image-lower-first']), 'https://shop.gopro.com/EMEA/cameras/hero-session/CHDHS-104-master.html', ['target'=>'_blank']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-5 col-md-offset-1 col-sm-12 text-center">
			<h5><?= Yii::t('app', 'Samsung GearFit 2') ?> <span class="badge">#2</span></h5>
	      	<?= Html::a(html::img('@web/images/contest-gear-fit2.png', ['class' => ' price-image-lower']), 'http://www.samsung.com/global/galaxy/gear-fit2/', ['target'=>'_blank']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-5 col-sm-12 text-center">
			<h5><?= Yii::t('app', 'Combi Clinic at "De Kaag"') ?> <span class="badge">#3</span></h5>
	      <?= Html::a(html::img('@web/images/de_kaag_img.png', ['class' => 'price-image-lower']), 'http://www.dekaag.nl/volwassenen/combi-clinic/', ['target'=>'_blank']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-5 col-md-offset-1 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Maximum Sports Nutrition Plan') ?> <span class="badge">#4 &amp; #5</span></h5>
			<?= Html::a(html::img('@web/images/maximumsports.png', ['class' => 'price-image-lower']), 'http://maximum-sports.nl/', ['target'=>'_blank']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-5 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Golf Arrangement') ?> <span class="badge">#6 - #10</span></h5>
	      <?= Html::a(html::img('@web/images/golfles.png', ['class' => 'price-image-lower']), 'http://www.golfbaanwaterlandamsterdam.nl/welkom/', ['target'=>'_blank']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-5 col-md-offset-1 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Decathlon Giftcard') ?> <span class="badge">#11 - #20</span></h5>
			<?= Html::a(html::img('@web/images/logo-giftcard.jpg', ['class' => 'price-image-lower']), 'https://www.decathlon.nl/coolsingel.html', ['target'=>'_blank']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-5 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Ping Pong Set') ?> <span class="badge">#21 - #30</span><br class="break-mob"> &amp; <br class="break-mob"><?= Yii::t('app', 'Sportlery Sunglasses') ?> <span class="badge">#31 / #50</span></h5>
			<?= html::img('@web/images/brilpingpong.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>
</div>
