<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use frontend\models\Mailing;
use yii\helpers\Url;
use Zelenin\yii\SemanticUI\Elements;

AppAsset::register($this);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:image" content="http://www.sportlery.nl/images/logo.png">
    <?= $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/ico', 'href' => 'images/favicon.ico']);?>
    <?= Html::csrfMetaTags() ?>
    <title>Sportlery</title>


    <?php $this->head() ?>

  </head>

  <body>
    <?php $this->beginBody() ?>
   
    <?php require 'navbar.php'; ?>

        <?= $content ?>
    
    <hr class="hr-invisible">

    <footer class="footer">
        <div class="col-md-4">
            <p class="text-muted text-center">
                <span class="lead">Supported By:</span> <br>
                <a href="http://centre4innovation.org/"><img src="images/center-for-innovation.png" class="footer-logo"></a>
                <a href="http://http://ece.nl/"><img src="images/logo_ece.png" class="footer-logo"></a>
                <a href="https://www.s-bb.nl/"><img src="images/sbb.png" class="footer-logo"></a>
            </p> 
        </div>
        <div class="col-md-4">
            <p class="text-muted text-center">Copyright Sportlery 2016</p>  
        </div>
        <div class="col-md-4 text-center">
        <a href="https://twitter.com/sportlery" class="btn btn-social-icon btn-twitter">
            <span class="fa fa-twitter"></span>
        </a>
        <a href="https://www.facebook.com/sportlery" class="btn btn-social-icon btn-facebook">
            <span class="fa fa-facebook"></span>
        </a>
        <a href="https://instagram.com/sportlerynl" class="btn btn-social-icon btn-instagram">
            <span class="fa fa-instagram"></span>
        </a>
    </div>
    </footer>

<?php $this->endBody() ?>

  </body>
</html>
<?php $this->endPage() ?>
