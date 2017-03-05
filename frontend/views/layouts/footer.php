<?php

use yii\helpers\Html;

?>

<div class="graphic hidden-xs"></div>

<footer class="footer">
    <div class="col-md-4">
        <p class="text-muted text-center">
             <span class="lead">Supported By:</span> <br>
                <?= Html::a(Html::img('@web/images/center-for-innovation.png', ['class' => 'footer-logo']), 'http://centre4innovation.org/'); ?>
                <?= Html::a(Html::img('@web/images/logo_ece.png', ['class' => 'footer-logo']), 'http://http://ece.nl/'); ?>
                <?= Html::a(Html::img('@web/images/sbb.png', ['class' => 'footer-logo']), 'https://www.s-bb.nl/'); ?>
        </p>  
    </div>
    <div class="col-md-4">
        <p class="text-muted text-center">Copyright Sportlery &copy; <?= date("Y");?></p>  
    </div>
    <div class="col-md-4 text-center">
        <a href="https://twitter.com/sportlery" target="_blank" class="btn btn-social-icon btn-twitter">
            <span class="fa fa-twitter"></span>
        </a>
        <a href="https://www.facebook.com/sportlery" target="_blank" class="btn btn-social-icon btn-facebook">
            <span class="fa fa-facebook"></span>
        </a>
        <a href="https://instagram.com/sportlery_community" target="_blank" class="btn btn-social-icon btn-instagram">
            <span class="fa fa-instagram"></span>
        </a>
    </div>

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

<script type="text/javascript" src="https://cdn.queueat.com/assets/sdk/v3/queue.js" defer></script>
<script type="text/javascript">
   document.addEventListener('DOMContentLoaded', function(event) {
     window.queue = new Queue('b2f3e086-f433-11e6-9852-06867b48a32e'); 
   });
</script>

</footer>
