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
        <div class="col-md-8 col-md-offset-2 text-center">
        <h1 class=""><?= Yii::t('app', 'Over Sportlery'); ?></h1>
          <p>Sportlery is een platform waar sporters elkaar kunnen vinden, samen wedstrijden en evenementen organiseren, en heel gemakkelijk een sportlocatie kunnen boeken.</p>
          <p>Het idee voor Sportlery is ontstaan door het gevoel dat we heel graag vaker wilden sporten, maar dat niemand kon of dat er geen mogelijke sportlocatie beschikbaar was.</p>
          <p>Toen dachten we, dit moet makkelijker kunnen. Wij kwamen met Sportlery.</p>
          <p>Sportlery maakt het mogelijk dat jij een mede sportbuddy kan vinden bij jou in de buurt, met dezelfde interesses en hetzelfde niveau. Samen bepaal je wanneer jullie je sport willen beoefenen. Ook kun je zelf wedstrijden en toernooien cre�eren met meerdere sporters.</p>
          <p>Daarnaast faciliteert Sportlery alle sportlocaties bij jou in de buurt. Zowel betaald als publiekelijk en binnenhallen als buitenvelden worden aangeboden.</p>
          <p>Zin om een nieuwe sport te ontdekken? Ga een surfworkshop volgen of een beginnersles Krav Maga, het kan allemaal!</p>
        </div>
      </div>

    <hr class="hr-invisible">


      <div class="row">
        <div class="col-md-4 col-md-offset-1 block-default text-center">
          <?= html::img('@web/images/floris.jpg', ['class' => 'img-circle avatar']); ?>
          <h1>Floris</h1>
          <span class="lead">Founder</span>
          <br>
          <p>Tijdens het afronden van de Hotelschool in Den Haag besloot hij dat een �gewone� stage niet voldeed aan zijn eisen. De ondernemer in hem vond dat het tijd was voor een eigen bedrijf. Met zijn communicatieve skills maakt hij het mogelijk om het team te laten werken als een geoliede machine, waardoor ze sneller en efficienter tot hun beoogde resultaat kunnen komen. In zijn vrije tijd speelt hij graag hockey.</p>
             <a href="https://www.linkedin.com/in/floris-hage-79694361?authType=OUT_OF_NETWORK&authToken=a7Xk&locale=nl_NL&srchid=2265426511476173398613&srchindex=10&srchtotal=55&trk=cofc_people_res_name&trkInfo=VSRPsearchId%3A2265426511476173398613%2CVSRPtargetId%3A220305570%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Afalse%2CauthType%3AOUT_OF_NETWORK" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
              </a>
        </div>

        <div class="col-md-4 col-md-offset-2 block-default text-center">
          <?= html::img('@web/images/folkert.jpg', ['class' => 'img-circle avatar']); ?>
          <h1>Folkert</h1>
          <span class="lead">Founder</span>
          <p>Na het behalen van z�n Bachelor Bedrijskunde en Master in Innovative Hospitality besloot hij om te gaan reizen in Centraal- & Zuid-Amerika. Hier heeft hij zijn creativiteit erop losgelaten en is met frisse business ide�en terug gekomen. Zijn specialiteit ligt in het �out-of-the-box� denken, wat perfect aansluit bij zijn marketing rol binnen het bedrijf. Na het werk gaat hij vaak kitesurfen, om zo lekker even stoom af te blazen.</p>
          <a href="https://www.linkedin.com/in/folkert-burghout-8a5a2757?authType=NAME_SEARCH&authToken=y2nD&locale=nl_NL&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A202604093%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476173531057%2Ctas%3Afolkert" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
              </a>
        </div>
      </div>

      <hr class="hr-invisible">

      <div class="row">
        <div class="col-md-3 col-md-offset-1 block-default text-center">
          <?= html::img('@web/images/benjamin.jpg', ['class' => 'img-circle avatar']); ?>
          <h1>Benjamin</h1>
          <span class="lead">Front-/Backend Developer</span>
          <p>Hij is een all-round programmeur die vele verschillende progammeertalen spreekt. Met zijn goede planningen en krachtige uitleg zorgt hij ervoor dat iedereen weet wat er wanneer en waarom moet gebeuren. In zijn vrije tijd is hij te vinden in het zwembad, waar hij alle stress van zich af kan zwemmen.</p>
          <a href="https://www.linkedin.com/in/benjaminkalle?authType=NAME_SEARCH&authToken=vQl6&locale=nl_NL&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A344220258%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1476173596423%2Ctas%3Abenjamin%20kalle" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
              </a>
        </div>

        <div class="col-md-4 block-default-out text-center">
          <h1>Voor ons werken?</h1>
          <span class="lead">Neem nu contact op!</span>
          <br>
          <br>
          <p>Ben jij klaar voor een nieuwe uitdaging bij een jong en dynamisch team? Ben jij stress bestendig en neem jij alleen genoegen met perfectie? Ben jij gespecialiseerd in Marketing & Sales en wil je doorgroeien in ons bedrijf? Neem dan contact met ons op en misschien staat jouw foto binnekort naast die van ons!</p>
          <hr class="hr-invisible">

          <?= Html::a('Neem contact op', ['contact'], ['class'=>'btn btn-default']) ?>

        </div>

        <div class="col-md-3 block-default text-center">
          <?= html::img('@web/images/jesse.png', ['class' => 'img-circle avatar']); ?>
          <h1>Jesse</h1>
          <span class="lead">Stagiar</span>
          <p>Hij is op dit moment 2e jaars student Media Development en trotse stagiair bij Sportlery. In z�n vrije tijd is hij vaak websites aan het ontwerpen voor zowel zichzelf als anderen. Daarnaast houdt hij erg veel van muziek en speelt regelmatig op de gitaar. Een hardwerkende jongen die naar een perfect resultaat streeft.</p>
          <a href="https://www.linkedin.com/in/jesse-berkhof-0a3a5163" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
              </a>
        </div>
      </div>
    <hr class="hr-invisible-sm">

  </div>