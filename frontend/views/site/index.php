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

<div class="container">
  <queue-greeting-bar></queue-greeting-bar>
  <queue-exit-popup></queue-exit-popup>
  <div class="row">
    <queue-signup type="horizontal"></queue-signup>
  </div>

  <div class="row">
    <queue-socialproof></queue-socialproof>
  </div>

</div>

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
        <p><?= Yii::t('app', 'Discover and try-out new sports! A clear overview of all classes and workshops that are being offered in your neighbourhood.'); ?></p>
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

<div class="parallax3" style="background-color: rgb(244, 104, 53);padding: 25px 0 25px 0px;">
	<div class="container" style="background-color: rgb(244, 104, 53);">
		  <div class="row text-center">
	    <h3 style="color: white;"><b><?= Yii::t('app', 'Do you want to become one of the first Sportlers? Fill in your e-mail address below:'); ?></b></h3>
	    <div class="mailing col-md-12">

	         <?php if(Yii::$app->language == 'nl'){?>
                <!--Zoho  Web-Optin Form Starts Here-->
                <link href="https://campaigns.zoho.com/css/ui.theme.css" rel="stylesheet" type="text/css" />
                <link href="https://campaigns.zoho.com/css/ui.datepicker.css" rel="stylesheet" type="text/css" />
                <link href="https://campaigns.zoho.com/css/ui.core.css" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="https://campaigns.zoho.com/js/jquery-1.11.0.min.js"></script>
                <script type='text/javascript' src='https://campaigns.zoho.com/js/jquery-migrate-1.2.1.min.js'></script>
                <script type="text/javascript" src='https://campaigns.zoho.com/js/ui.datepicker.js'  charset="utf-8"></script>
                <script type="text/javascript" src="https://campaigns.zoho.com/js/jquery.form.js"></script>
                <script type="text/javascript" src="https://campaigns.zoho.com/js/optin_min.js"></script>
                <script type="text/javascript">
                var $ZC = jQuery.noConflict();
                var trackingText='ZCFORMVIEW';
                $ZC(document).ready( function($) {
                $ZC("#zc_trackCode").val(trackingText);
                $ZC("#fieldBorder").val($ZC("[changeItem='SIGNUP_FORM_FIELD']").css("border-color"));
                _setOptin(false,function(th){
                /*Before submit, if you want to trigger your event, "include your code here"*/
                });

                /*Load Captcha For this*/ 
                loadCaptcha('https://campaigns.zoho.com/campaigns/CaptchaVerify.zc?mode=generate');

                /*Tracking Enabled*/ 
                trackSignupEvent(trackingText);
                });
                </script>

                <title>Sportlery</title>
                <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
                <div id="customForm">
                <div style="overflow: hidden; margin: 0px auto; padding: 0px;  width: 100%;" name="SIGNUP_BODY" id="SIGNUP_PAGE">
                <div style="text-align: left; font-weight: bold; color: rgb(136, 136, 136); padding: 10px; font-family: Arial; " id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER"></div>
                <div style="position:relative;top: 30px;">
                <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px; ">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                <td width="10%">
                <img class="successicon" src="https://campaigns.zoho.com/images/challangeiconenable.jpg" align="absmiddle">
                </td>
                <td>
                <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; ">&nbsp;&nbsp;Bedankt voor het aanmelden!</span>
                </td>
                </tr>
                </tbody>
                </table>
                </div>
                </div>
                <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://zc1.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup">
                <div style="display:none;background-color:#FFEBE8;padding:10px 10px; color:#d20000; margin:10px;border:solid 1px #ffd9d3; margin-top:20px;" id="errorMsgDiv">&nbsp;&nbsp;De ingevulde gegevens zijn niet correct.</div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                <td align="center" valign="top">
                <div style="padding-left:10px; padding-right:10px;padding-bottom:10px; padding-top:10px;">
                <input changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" style=" height: 44px; line-height: 20px; margin: 0px -4px 0px 0px; padding: 0px 7px 0px 6px; border: 1px solid rgb(235, 235, 235); vertical-align: middle; color: rgb(85, 85, 85); width: 60%; text-align: center; font-size: 22px; background-color: rgb(255,255,255);" placeholder="Laat hier je e-mail adres achter." class="placeholder">
                <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,E-mail contactpersoon,2</span>
                <input name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" type="button" style="-webkit-appearance: none; background-color: #29719B; height: 44px; border: 1px solid #29719B; line-height: 34px; margin: 0px; color: rgb(255, 255, 255); vertical-align: middle; width: 25%; cursor: pointer; padding: 5px 12px; font-size: 20px;" value="Aanmelden">
                </div>
                </td>
                </tr>
                </tbody>
                </table><!-- Do not edit the below Zoho Campaigns hidden tags -->
                <input type="hidden" id="fieldBorder" value="rgb(235, 235, 235)">
                <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="" onload="">
                <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                <input type="hidden" id="lD" name="lD" value="13359360d640b931">
                <input type="hidden" name="emailReportId" id="emailReportId" value="">
                <input type="hidden" id="formType" name="formType" value="QuickForm">
                <input type="hidden" name="zx" id="cmpZuid" value="125e11428">
                <input type="hidden" name="zcvers" value="2.0">
                <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                <input type="hidden" id="zcld" name="zcld" value="13359360d640b931">
                <input type="hidden" id="document_domain" value="zoho.com">
                <input type="hidden" id="zc_Url" value="zc1.maillist-manage.com">
                <input type="hidden" id="zc_formIx" name="zc_formIx" value="7d0970377ce5f483c9b6d55caf35fed33f55c077a21faf59"><!-- End of the campaigns hidden tags --></form>
                </div>
                <img src="https://zc1.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
                </div>
                <div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
                <div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
                <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
                <img src="https://campaigns.zoho.com/images/videoclose.png">
                </span>
                <div id="zcOptinSuccessPanel"></div>
                </div>

                <!--Zoho  Web-Optin Form Ends Here-->
	        <?php } else { ?>
                <!--Zoho  Web-Optin Form Starts Here-->
                <link href="https://campaigns.zoho.com/css/ui.theme.css" rel="stylesheet" type="text/css" />
                <link href="https://campaigns.zoho.com/css/ui.datepicker.css" rel="stylesheet" type="text/css" />
                <link href="https://campaigns.zoho.com/css/ui.core.css" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="https://campaigns.zoho.com/js/jquery-1.11.0.min.js"></script>
                <script type='text/javascript' src='https://campaigns.zoho.com/js/jquery-migrate-1.2.1.min.js'></script>
                <script type="text/javascript" src='https://campaigns.zoho.com/js/ui.datepicker.js'  charset="utf-8"></script>
                <script type="text/javascript" src="https://campaigns.zoho.com/js/jquery.form.js"></script>
                <script type="text/javascript" src="https://campaigns.zoho.com/js/optin_min.js"></script>
                <script type="text/javascript">
                var $ZC = jQuery.noConflict();
                var trackingText='ZCFORMVIEW';
                $ZC(document).ready( function($) {
                $ZC("#zc_trackCode").val(trackingText);
                $ZC("#fieldBorder").val($ZC("[changeItem='SIGNUP_FORM_FIELD']").css("border-color"));
                _setOptin(false,function(th){
                /*Before submit, if you want to trigger your event, "include your code here"*/
                });

                /*Load Captcha For this*/ 
                loadCaptcha('https://campaigns.zoho.com/campaigns/CaptchaVerify.zc?mode=generate');

                /*Tracking Enabled*/ 
                trackSignupEvent(trackingText);
                });
                </script>

                <title>Sportlery</title>
                <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
                <div id="customForm">
                <div style="overflow: hidden; margin: 0px auto; padding: 0px; width: 100%;" name="SIGNUP_BODY" id="SIGNUP_PAGE">
                <div style="text-align: left; font-weight: bold; color: rgb(136, 136, 136); padding: 10px; font-family: Arial;" id="SIGNUP_HEADING" name="SIGNUP_HEADING" changeid="SIGNUP_MSG" changetype="SIGNUP_HEADER"></div>
                <div style="position:relative;top: 30px;">
                <div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px; ">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                <td width="10%">
                <img class="successicon" src="https://campaigns.zoho.com/images/challangeiconenable.jpg" align="absmiddle">
                </td>
                <td>
                <span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; ">&nbsp;&nbsp;Thank you for Signing Up!</span>
                </td>
                </tr>
                </tbody>
                </table>
                </div>
                </div>
                <form method="POST" id="zcampaignOptinForm" style="margin:0px;" action="https://zc1.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup">
                <div style="display:none;background-color:#FFEBE8;padding:10px 10px; color:#d20000; margin:10px;border:solid 1px #ffd9d3; margin-top:20px;" id="errorMsgDiv">&nbsp;&nbsp;Please correct the marked field(s) below</div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                <td align="center" valign="top">
                <div style="padding-left:10px; padding-right:10px;padding-bottom:10px; padding-top:10px;">
                <input changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="text" id="CONTACT_EMAIL" style=" height: 44px; line-height: 20px; margin: 0px -4px 0px 0px; padding: 0px 7px 0px 6px; border: 1px solid rgb(235, 235, 235); vertical-align: middle; color: rgb(85, 85, 85); width: 60%; text-align: center; background-color: rgb(255, 255, 255); font-size:22px;" placeholder="Please enter your E-mail address" class="placeholder">
                <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,E-mail contactpersoon,2</span>
                <input name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" type="button" style="-webkit-appearance: none; background-color: #29719B; height: 44px; line-height: 34px; margin: 0px; color: rgb(255, 255, 255); vertical-align: middle; border: 1px solid #29719B; width: 25%; cursor: pointer;  padding: 5px 12px; font-size: 22px;" value="Subscribe">
                </div>
                </td>
                </tr>
                </tbody>
                </table><!-- Do not edit the below Zoho Campaigns hidden tags -->
                <input type="hidden" id="fieldBorder" value="rgb(235, 235, 235)">
                <input type="hidden" name="zc_trackCode" id="zc_trackCode" value="" onload="">
                <input type="hidden" id="submitType" name="submitType" value="optinCustomView">
                <input type="hidden" id="lD" name="lD" value="13359360d640b931">
                <input type="hidden" name="emailReportId" id="emailReportId" value="">
                <input type="hidden" id="formType" name="formType" value="QuickForm">
                <input type="hidden" name="zx" id="cmpZuid" value="125e11428">
                <input type="hidden" name="zcvers" value="2.0">
                <input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
                <input type="hidden" id="mode" name="mode" value="OptinCreateView">
                <input type="hidden" id="zcld" name="zcld" value="13359360d640b931">
                <input type="hidden" id="document_domain" value="zoho.com">
                <input type="hidden" id="zc_Url" value="zc1.maillist-manage.com">
                <input type="hidden" id="zc_formIx" name="zc_formIx" value="7d0970377ce5f483ba56f43292fca905c98e811ca5f0889b"><!-- End of the campaigns hidden tags --></form>
                </div>
                <img src="https://zc1.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
                </div>
                <div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div>
                <div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;">
                <span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess">
                <img src="https://campaigns.zoho.com/images/videoclose.png">
                </span>
                <div id="zcOptinSuccessPanel"></div>
                </div>

                <!--Zoho  Web-Optin Form Ends Here-->
	        <?php } ?>
	    </div>
	  </div>
	</div>
</div>
<div class="container">

  <hr class="hr-invisible-sm">


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
