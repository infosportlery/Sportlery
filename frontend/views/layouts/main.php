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
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <?= $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/ico', 'href' => 'images/favicon.ico']);?>
    <?= Html::csrfMetaTags() ?>
    <title>Sportlery</title>

    <?php $this->head() ?>

<script type="text/javascript" src="https://cdn.queueat.com/assets/sdk/v3/queue.js" defer></script>
<script type="text/javascript">
   document.addEventListener('DOMContentLoaded', function(event) {
     window.queue = new Queue('b2f3e086-f433-11e6-9852-06867b48a32e'); 
   });
</script>

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
