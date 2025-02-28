<?php 

  use Zelenin\yii\SemanticUI\Elements;
  use rmrevin\yii\fontawesome\FA;
  use yii\bootstrap\Modal;
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\bootstrap\Button;
  use yii\helpers\Url;
  
?>
<div class="header2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="thin">Sportlery</h1>
        <p class="lead thin">TOGETHER WE SPORT</p>
        <br>
      </div>
    </div>
    <hr class="hr-invisible">
  </div>
</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-1 text-left about-text-style">
        <h1 class=""><?= Yii::t('app', 'About Sportlery'); ?></h1>
          <p><?= Yii::t('app', 'Sportlery is an online platform where sports enthusiasts can meet, to play and organise games together, and easily book a sport location.');?> <?= Yii::t('app', 'The first the idea for Sportlery crossed our mindss, was during the summerbreak of 2016, when we felt like we wanted to go out and sport, but no one was available and we could not find the right location.'); ?> <?= Yii::t('app', 'So we decided that there should be a solution for this, and we created Sportlery!'); ?></p>
          <br>
          <p><?= Yii::t('app', 'Sportlery creates the opportunity of finding another sports enthusiast around you, with the same intrest and level in sports as you do. Together you decide where and when you practice your sport. You could also create your own sporting event'); ?> <?= Yii::t('app', 'Furthermore, Sporlery facilitates all kinds of sportlocation in your neighbourhood. As well commercial sportclubs as public fields, indoor or outdoor, we got it all.'); ?></p>
          <br>
          <p><?= Yii::t('app', 'Do you feel like discovering a new sport? Take a surfworkshop or book your first Krav Maga class, whatever suits you best!'); ?></p>
        </div>
        <div class="col-md-4" id="contact-side-img"></div>
      </div>

    <hr class="hr-invisible">


      <div class="row">
        <div class="col-md-3 col-md-offset-2 block-default text-center">
          <?= html::img('@web/images/floris.jpg', ['class' => 'img-circle avatar']); ?>
          <h1>Floris</h1>
          <span class="lead"><?= Yii::t('app', 'Co-founder / Managing Director'); ?></span>
          <br>
          <p><?= Yii::t('app', 'While finishing off his Bachelor at Hotelschool The Hague, he decided that a ‘regular’ internship was not the right thing to do. His entrepreneurial mind triggered him to start his own business.  His ability to communicate creates a host of opportunities and allows our team to coordinate itself like an oiled machine, which results in a more effective and efficient working pace. In his free time, he loves to play hockey.'); ?></p>
          <div class="linkedin-bottom">
             <a href="https://www.linkedin.com/in/floris-hage-79694361?authType=OUT_OF_NETWORK&authToken=a7Xk&locale=nl_NL&srchid=2265426511476173398613&srchindex=10&srchtotal=55&trk=cofc_people_res_name&trkInfo=VSRPsearchId%3A2265426511476173398613%2CVSRPtargetId%3A220305570%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Afalse%2CauthType%3AOUT_OF_NETWORK" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
              </a>
          </div>
        </div>

        <div class="col-md-3 col-md-offset-2 block-default text-center">
          <?= html::img('@web/images/folkert.jpg', ['class' => 'img-circle avatar']); ?>
          <h1>Folkert</h1>
          <span class="lead"><?= Yii::t('app', 'Co-founder / Creative Director'); ?></span>
          <p><?= Yii::t('app', 'After obtaining his Bachelor Business Administration and Master in Innovative Hospitality, he decided to travel to Central- and South-America. During this period, he used his creativity to come up with new business ideas and came back with a fresh entrepreneurial mindset. His specialty lays in the field of ‘out-of-the-box’ thinking, which is a valuable strength regarding his marketing role within the company. After working hours, he can be at the sea, kitesurfing to blow off some steam.'); ?></p>
          <div class="linkedin-bottom">
            <a href="https://www.linkedin.com/in/folkert-burghout-8a5a2757?authType=NAME_SEARCH&authToken=y2nD&locale=nl_NL&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A202604093%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476173531057%2Ctas%3Afolkert" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
            </a>
          </div>
          
        </div>
      </div>

      <hr class="hr-invisible">

      <div class="row">
        <div class="col-md-3 col-md-offset-2 block-default text-center">
          <?= html::img('@web/images/benjamin.jpg', ['class' => 'img-circle avatar']); ?>
          <h1>Benjamin</h1>
          <span class="lead"><?= Yii::t('app', 'Co-founder / Application Developer'); ?></span>
          <p><?= Yii::t('app', 'He is an all-round programmer who is fluent in multiple programming languages. With his ability to prioritize and explanation skills, he ensures that everyone knows what needs to be done by when and why. During his days off, he can be found in the swimming pool, where he can let go his tension and relax.'); ?></p>
          <div class="linkedin-bottom">
            <a href="https://www.linkedin.com/in/benjaminkalle?authType=NAME_SEARCH&authToken=vQl6&locale=nl_NL&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A344220258%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476173596423%2Ctas%3Abenjamin%20kalle" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
              </a>
          </div>
          
        </div>

        <div class="col-md-3 col-md-offset-2 block-default text-center">
          <h1><?= Yii::t('app', 'Want to join our team?');?></h1>
          <span class="lead"><?= Yii::t('app', 'Contact us!'); ?></span>
          <br>
          <br>
          <p><?= Yii::t('app', 'Are you ready for a new challenge at a young and dynamic team? Are you immune to stress and only accept the very best? Are you specialised in Marketing & Sales and willing to keep on growing with our company? Contact us now and maybe your picture will join our gallery very soon!'); ?></p>
          <hr class="hr-invisible">

          <?= Html::a(Yii::t('app', 'Contact us'), ['contact'], ['class'=>'btn btn-primary']) ?>

        </div>

        
      </div>
    <hr class="hr-invisible-sm">

  </div>
