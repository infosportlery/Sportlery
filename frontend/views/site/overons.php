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
      <div class="row text-center">
        <h1 class=""><?= Yii::t('app', 'Over Sportlery'); ?></h1>
        <div class="col-md-4 col-sm-5 col-md-offset-2 col-sm-offset-1 text-right">
          <p>Sportlery is een platform waar sporters elkaar kunnen vinden, samen wedstrijden en evenementen organiseren, en heel gemakkelijk een sportlocatie kunnen boeken.</p>
          <p>Het idee voor Sportlery is ontstaan door het gevoel dat we heel graag vaker wilden sporten, maar dat niemand kon of dat er geen mogelijke sportlocatie beschikbaar was.</p>
          <p>Toen dachten we, dit moet makkelijker kunnen. Wij kwamen met Sportlery.</p>
          <p>Sportlery maakt het mogelijk dat jij een mede sportbuddy kan vinden bij jou in de buurt, met dezelfde interesses en hetzelfde niveau. Samen bepaal je wanneer jullie je sport willen beoefenen. Ook kun je zelf wedstrijden en toernooien creëeren met meerdere sporters.</p>
          <p>Daarnaast faciliteert Sportlery alle sportlocaties bij jou in de buurt. Zowel betaald als publiekelijk en binnenhallen als buitenvelden worden aangeboden.</p>
          <p>Zin om een nieuwe sport te ontdekken? Ga een surfworkshop volgen of een beginnersles Krav Maga, het kan allemaal!</p>
        </div>
        <div class="col-md-1 col-sm-4 vertical-rule">
        </div>
        <div class="col-md-4 col-sm-5 text-left">
          Image
        </div>
      </div>

    <hr class="hr-invisible">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1 people-col">
          <div class="peopleList" >
            <div class="person-field" id="person-1">
              <div class="col-md-8 col-sm-8 person-field">
                <h2>Floris</h2>
                <span class="lead">Founder</span>
              </div>
              <div class="col-md-4 col-sm-4 col-links-team">
                <a href="https://www.linkedin.com/in/floris-hage-79694361?authType=OUT_OF_NETWORK&authToken=a7Xk&locale=nl_NL&srchid=2265426511476173398613&srchindex=10&srchtotal=55&trk=cofc_people_res_name&trkInfo=VSRPsearchId%3A2265426511476173398613%2CVSRPtargetId%3A220305570%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Afalse%2CauthType%3AOUT_OF_NETWORK" class="btn btn-social-icon btn-linkedin">
                  <span class="fa fa-linkedin"></span>
                </a>
                <?= Html::button('<span class="fa fa-eye"></span>', ['class' => 'btn btn-social-icon btn-linkedin btn-read-acc', 'id' => 'person-1']); ?>
              </div>
            </div>
            <div class="person-field" id="person-2">
              <div class="col-md-8">
                <h2>Folkert</h2>
                <span class="lead">Co-Founder</span>
              </div>
              <div class="col-md-4 col-sm-4 col-links-team">
                <a href="https://www.linkedin.com/in/folkert-burghout-8a5a2757?authType=NAME_SEARCH&authToken=y2nD&locale=nl_NL&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A202604093%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476173531057%2Ctas%3Afolkert" class="btn btn-social-icon btn-linkedin">
                  <span class="fa fa-linkedin"></span>
                </a>
                <?= Html::button('<span class="fa fa-eye"></span>', ['class' => 'btn btn-social-icon btn-linkedin btn-read-acc', 'id' => 'person-2']); ?>
              </div>
            </div>
            <div class="person-field" id="person-3">
              <div class="col-md-8 col-sm-8 ">
                <h2>Benjamin</h2>
                <span class="lead">Lead Developer</span>
              </div>
              <div class="col-md-4 col-sm-4 col-links-team">
                <a href="https://www.linkedin.com/in/benjaminkalle?authType=NAME_SEARCH&authToken=vQl6&locale=nl_NL&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A344220258%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476173596423%2Ctas%3Abenjamin%20kalle" class="btn btn-social-icon btn-linkedin">
                  <span class="fa fa-linkedin"></span>
                </a>
                <?= Html::button('<span class="fa fa-eye"></span>', ['class' => 'btn btn-social-icon btn-linkedin btn-read-acc', 'id' => 'person-3']); ?>
              </div>
            </div>
            <div class="person-field" id="person-4">
              <div class="col-md-8 col-sm-8">
                <h2>Jesse</h2>
                <span class="lead">Stagiar Developer</span>
              </div>
              <div class="col-md-4 col-sm-4 col-links-team">
                <a href="https://www.linkedin.com/in/benjaminkalle?authType=NAME_SEARCH&authToken=vQl6&locale=nl_NL&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A344220258%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476173596423%2Ctas%3Abenjamin%20kalle" class="btn btn-social-icon btn-linkedin">
                  <span class="fa fa-linkedin"></span>
                </a> 
                <?= Html::button('<span class="fa fa-eye"></span>', ['class' => 'btn btn-social-icon btn-linkedin btn-read-acc', 'id' => 'person-4']); ?>
              </div>
            </div>
          </div>
        </div> <!-- End Userlist Col -->
        


        <div class="col-md-7 col-sm-7 col-md-offset-1 col-sm-offset-1 default-information">
          <div class="person-info" id="person-information">
            <div class="col-md-4 person-info-design">
              <?= html::img('@web/images/floris.jpg', ['class' => 'img-circle avatar']); ?>
              <div class="text-left">
                <h2>Floris</h2>
                <span class="lead">Founder</span>
              </div>
            </div>
            <div class="col-md-8">
              <p>Tijdens het afronden van de Hotelschool in Den Haag besloot hij dat een gewone stage niet voldeed aan zijn eisen.<br><br> De ondernemer in hem vond dat het tijd was voor een eigen bedrijf.<br><br> Met zijn communicatieve skills maakt hij het mogelijk om het team te laten werken als een geoliede machine, waardoor ze sneller en efficienter tot hun beoogde resultaat kunnen komen. In zijn vrije tijd speelt hij graag hockey.</p>
            </div>
          </div><!-- End Userinfomation Col --> 
      </div>
 
 

  </div>