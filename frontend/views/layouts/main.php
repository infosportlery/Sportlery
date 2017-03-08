<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\bootstrap\Alert;

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
    <meta property="og:title" content="Sportlery - Together we sport! -" />
    <meta property="og:type" content="Main Page" />
    <meta property="og:image" content="http://www.sportlery.nl/images/logo.jpg" />
    <meta property="og:url" content="http://www.sportlery.nl/" />
    <meta property="og:video" content="https://www.youtube.com/watch?v=BfjCgfLW7Ec" />
    <meta property="og:video:secure_url" content="https://www.youtube.com/watch?v=BfjCgfLW7Ec">
    <meta property="og:video:width" content="472">
    <meta property="og:video:height" content="296">
    <meta name="google-site-verification" content="ozi80Hlv1omrSPOD36n78JVJnrv2Mka5esPRMPZp8yo" />
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <?= $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/ico', 'href' => 'images/favicon.ico']);?>
    <?= Html::csrfMetaTags() ?>
    <title>Sportlery</title>

    <?php $this->head() ?>


    <link href="https://campaigns.zoho.com/css/ui.theme.css" rel="stylesheet" type="text/css" />
    <link href="https://campaigns.zoho.com/css/ui.datepicker.css" rel="stylesheet" type="text/css" />
    <link href="https://campaigns.zoho.com/css/ui.core.css" rel="stylesheet" type="text/css" />


  </head>

  <body>
    <?php $this->beginBody() ?>
    
    <?php require 'navbar.php'; ?>

    <?= $content ?>    

    <?php require 'footer.php'; ?>

<?php $this->endBody() ?>

  </body>
</html>
<?php $this->endPage() ?>
