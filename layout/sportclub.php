<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\SportclubsAsset;
use common\widgets\Alert;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use frontend\models\Mailing;
use yii\helpers\Url;

SportclubsAsset::register($this);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="vendor/twbs/bootstrap/docs/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title>Sportlery</title>

    <?php $this->head() ?>

  </head>

  <body>
    <?php $this->beginBody() ?>
    
    <?php require 'navbar.php'; ?>

    <div class="header3">
          <div class="container">
            <div class="row text-left">
              <div class="col-md-6">
                <h1>Bereik meer!</h1>
                <p class="lead">Op Sportlery is een groot publiek aan diverse sporters. Velen van hen willen graag deze sport beoefenen maar weten niet altijd waar ze dat het best kunnen doen. Door jouw sport locatie aan te bieden op Sportlery, kan je veel meer mensen bereiken en vergroot je de bezetting!</p>
                <button class="btn btn-default" id="btn-sportclub">Lees meer</button>
              </div>
            </div>
        </div>
    </div>

    <?= $content ?>

    <?php require 'footer.php'; ?>
    <?php $this->endBody() ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#partnerModal").modal('show');
            });
        </script>
  </body>
</html>

<?php $this->endPage() ?>