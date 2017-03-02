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
	      <h3><b><?= Yii::t('app', 'PRICES')?></b></h3>
	      <p style="text-align: justify; line-height: 1.6;"><?= Yii::t('app', 'By joining actively in the contest you will make a chance on the fantastic prizes. We have two different categories: the rankings and the lottery. In the rankings it is all about becoming number 1 and with the lottery you get lottery tickets by active participation.') ?></p>
	      <h3><b><?= Yii::t('app', 'THE LOTTERY')?></b></h3>
	      <p><b><?= Yii::t('app', 'Every two weeks we will give away this cool drone under our participants. For every 50 points that you make you will get a lottery ticket. So the more active you are, the higher your chances to win!') ?></b></p>
          <?= html::img('@web/images/drone-contest.png', ['class' => 'prize-image']); ?>
	      <h3><b><?= Yii::t('app', 'THE RANKINGS') ?></b></h3>
	      <p><b><?= Yii::t('app', 'At the end one of you will go home with that GoPro. Make sure you claim the number one spot on the rankings you see on the left. But there are way more prizes for the top 50 participants.') ?></b></p>
	      <h4><span class="label label-primary">#1</span> <?= Yii::t('app', 'THE LUCKY WINNER!') ?></h4>
	      <?= html::img('@web/images/hero-contest-img.png', ['class' => 'prize-image']); ?>
	      <h4><span class="label label-primary">#2</span> <?= Yii::t('app', 'SAMSUNG GEAR 2 WATCH') ?></h4>
	      <?= html::img('@web/images/contest-gear-fit2.png', ['class' => 'prize-image']); ?>
	      <h4><span class="label label-primary">#3</span> <?= Yii::t('app', 'SAILING COURSE AT "DE KAAG"') ?></h4>
	      <?= html::img('@web/images/de_kaag_img.png', ['class' => 'prize-image']); ?>
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
			<p>By completing these activities in the contest area above these are the points you will earn and howmany times, for more information about the dirrerent actions you can hover on the items in the contest area.</p>	
		</div>
		
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
							FACEBOOK LIKES
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
							TWITTER FOLLOW
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
							SUBSCRIBE TO OUR YOUTUBE
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
							WATCH THE VIDEO
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
							FACEBOOK SHARE
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
							FACEBOOK SEND MESSAGE
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
							TWEET
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
							EMAIL SHARE
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
							QUEUE COMMENT
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
							CONFIRM EMAIL
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
							JOIN QUEUE
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
							INVITED(REFFERED) FRIEND JOINS
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
	</div>
</div>


<div class="container ranking-lottery-container">
	<div class="row text-center">
		<h2><b><?= Yii::t('app', 'ALL PRICES!') ?></b></h2>
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
					<?= Yii::t('app', 'Beside the rankings we also Give away prizes among our active participants.') ?>
				</p>

				<p class="content-lottey-p">
					<?= Yii::t('app', 'How does it work? What can you do? All active particpants make a chance to win, you dont necessarily have to be number 1 in the ranking. By every 50 points you will get a lot in the lottery and the more you do the more chance to win!') ?>
				</p>
				<p class="content-lottey-p">
					<?= Yii::t('app', 'Prices') ?>
				</p>
				<p class="content-lottey-p">
					<?= Yii::t('app', '15 March');?><br>
					<?= Yii::t('app', '29 March');?><br>
					<?= Yii::t('app', '12 April');?><br>
				</p>
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
			<p class="content-lottey-p"><?= Yii::t('app', 'Here you can compete for a spot in the rankings. You can earn great prizes.')?></p>
		</div>
	</div>
	<hr class="hr-sm hr-sm-mob">
	<div class="row text-center">
		<div class="col-md-12 text-center">
		<h5><?= Yii::t('app', 'GoPro Session') ?> <span class="badge">#1</span></h5>
	      <?= html::img('@web/images/hero-contest-img.png', ['class' => 'price-image-lower-first']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-5 col-md-offset-1 col-sm-12 text-center">
			<h5><?= Yii::t('app', 'Samsung GearFit 2') ?> <span class="badge">#2</span></h5>
	      	<?= html::img('@web/images/contest-gear-fit2.png', ['class' => ' price-image-lower']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-5 col-sm-12 text-center">
			<h5><?= Yii::t('app', 'Privéles Kielboot De Kaag') ?> <span class="badge">#3</span></h5>
	      <?= html::img('@web/images/de_kaag_img.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-5 col-md-offset-1 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Maximum Sports Nutrition Plan') ?> <span class="badge">#4 &amp; #5</span></h5>
			<?= html::img('@web/images/maximumsports.png', ['class' => 'price-image-lower']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-5 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Golf Arrangement') ?> <span class="badge">#6 - #10</span></h5>
	      <?= html::img('@web/images/golfles.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>

	<hr class="hr-sm">
	<div class="row">
		<div class="col-md-5 col-md-offset-1 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Decathlon Giftcard') ?> <span class="badge">#11 - #20</span></h5>
			<?= html::img('@web/images/logo-giftcard.jpg', ['class' => 'price-image-lower']); ?>
		</div>
		<hr class="hr-sm hr-sm-mob">
		<div class="col-md-5 col-sm-12 text-center">
		<h5><?= Yii::t('app', 'Ping Pong Set') ?> <span class="badge">#21 - #30</span><br class="break-mob"> &amp; <br class="break-mob"><?= Yii::t('app', 'Sportlery Sunglasses') ?> <span class="badge">#31 / #50</span></h5>
			<?= html::img('@web/images/brilpingpong.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>
</div>
