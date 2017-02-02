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
        <a href="https://instagram.com/sportlerynl" target="_blank" class="btn btn-social-icon btn-instagram">
            <span class="fa fa-instagram"></span>
        </a>
    </div>
</footer>