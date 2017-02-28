<?php 

  use yii\bootstrap\Modal;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\helpers\Url;

  use yii\widgets\ListView;


?>
<div class="sub-header">
  <div class="row index-contest-signup">
  	<div class="col-md-5 col-md-offset-1 col-sm-12">
  		<h2 style="color: white;"><b><?= Yii::t('app', 'WELCOME TO THE CONTEST'); ?></b></h2>
  		<p class="contest-p-header"><?= Yii::t('app', 'In this contest you can win various prices such as a GoPro Session, a Samsung GearFit 2, a Drone and many more!'); ?></p>
  		<p class="contest-p-header"><?= Yii::t('app', 'You can earn points in the contest by completing different activities, such as inviting your friends, sharing on social media and other actions!'); ?></p>
  		<p class="contest-p-header"><?= Yii::t('app', 'After the contest you will be invited to join the sportlery community. This contest helps the community to spread the word and expand.'); ?></p>
  		<p class="contest-p-header"><?= Yii::t('app', 'You will be able to find people, with the same level in sports as you, in your neighbourhood, challenge each other, create and join sporting events, and many more. Good Luck! And go get yourself that GoPro!'); ?></p>
  	</div>
  	<div class="col-md-4 col-md-offset-1 col-sm-12">
  		<!-- Video Contest -->
  		<iframe style="width: 100%; height:315px;"  src="https://www.youtube.com/embed/V9e3kf26WJo" frameborder="0" allowfullscreen></iframe>
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
	      <p style="text-align: justify; line-height: 1.6;"><?= Yii::t('app', 'By joining actively in the contest you will make a chance on the fantastic prices. We have two different categories: the rankings and the lottery. In the rankings it is all about becoming number 1 and with the lottery you get lottery tickets by active participation.') ?></p>
	      <h3><b><?= Yii::t('app', 'THE LOTTERY')?></b></h3>
	      <p><b><?= Yii::t('app', 'Every two weeks we will give away this cool drone under our participants. For every 100 points that you make you will get a lottery ticket. So the more active you are, the higher your chances to win!') ?></b></p>
          <?= html::img('@web/images/drone-contest.png', ['class' => 'prize-image']); ?>
	      <h3><b><?= Yii::t('app', 'THE RANKINGS') ?></b></h3>
	      <p><b><?= Yii::t('app', 'At the end one of you will go home with that GoPro. Make sure you claim the number one spot on the rankings you see on the left. But there are way more prices for the top 50 participants.') ?></b></p>
	      <h4><?= Yii::t('app', '#1 THE LUCKY WINNER!') ?></h4>
	      <?= html::img('@web/images/hero-contest-img.png', ['class' => 'prize-image']); ?>
	      <h4><?= Yii::t('app', '#2 SAMSUNG GEAR 2 WATCH') ?></h4>
	      <?= html::img('@web/images/contest-gear-fit2.png', ['class' => 'prize-image']); ?>
	      <h4><?= Yii::t('app', '#3 SAILING COURSE AT "DE KAAG"') ?></h4>
	      <?= html::img('@web/images/de_kaag_img.png', ['class' => 'prize-image']); ?>
	    </div>
	</div>
</div>

<div class="container ranking-lottery-container">
<hr class="hr-sm">
	<div class="row">
		<div class="col-md-6 col-sm-12 text-rankings-col">
			<h3 class="text-center">
				<b>
					<?= Yii::t('app', 'LOTTERY')?>
				</b>
			</h3>
			<div class="content-lottery">
				<p class="content-lottey-p">
					<?= Yii::t('app', 'Beside the rankings we also “verloten” prices among our active participants.') ?>
				</p>

				<p class="content-lottey-p">
					<?= Yii::t('app', 'How does it work? What can you do? All active particpants make a chance to win, you dont necessarily have to be number 1 in the ranking. By every 50 points you will get a lot in the lottery and the more you do the more chance to win!') ?>
				</p>
				<p class="content-lottey-p">
					<?= Yii::t('app', 'Prices') ?>
				</p>
				<p class="content-lottey-p">
					<?= Yii::t('app', '15 March - uitreiking drone');?><br>
					<?= Yii::t('app', '29 March - uitreiking drone');?><br>
					<?= Yii::t('app', '12 April - uitreiking drone');?><br>
				</p>
			</div>
		</div>
		<hr class="hr-sm hr-split-rank-lot">
		<div class="col-md-6 col-sm-12">
			<h3 class="text-left">
				<b>
					<?= Yii::t('app', 'WIN A DRONE') ?>
				</b>
			</h3>
			<hr class="hr-invisible-sm">
			<div class="content-lottery">
	      		<?= html::img('@web/images/drone-contest.png', ['class' => 'prize-image-lower']); ?>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<h4><?= Yii::t('app', 'RANKINGS') ?></h4>
			<p class="content-lottey-p"><?= Yii::t('app', 'Here you can compete for a spot in the rankings. You can earn great prices.')?></p>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-md-12 text-center">
	      <?= html::img('@web/images/hero-contest-img.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>

	<hr class="hr-invisible-sm">
	<div class="row">
		<div class="col-md-6 col-sm-12 text-center">
	      <?= html::img('@web/images/contest-gear-fit2.png', ['class' => ' price-image-lower']); ?>
		</div>
		<div class="col-md-6 col-sm-12 text-center">
			<?= html::img('@web/images/golfles.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>

	<hr class="hr-invisible-sm">
	<div class="row">
		<div class="col-md-6 col-sm-12 text-center">
	      <?= html::img('@web/images/de_kaag_img.png', ['class' => 'price-image-lower']); ?>
		</div>
		<div class="col-md-6 col-sm-12 text-center">
	      <?= html::img('@web/images/maximumsports.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>
	
	<hr class="hr-invisible-sm">
	<div class="row">
		<div class="col-md-6 col-sm-12 text-center">
			<?= html::img('@web/images/logo-giftcard.jpg', ['class' => 'price-image-lower']); ?>
		</div>
		<div class="col-md-6 col-sm-12 text-center">
			<?= html::img('@web/images/brilpingpong.png', ['class' => 'price-image-lower']); ?>
		</div>
	</div>
</div>
