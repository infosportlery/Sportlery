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

      <!-- Header Begin -->

    <div class="header4">
      <div class="container">
        <div class="row text-left">
          <div class="col-md-6">
            <h1>Bereik meer!</h1>
            <p class="lead">Op Sportlery is een groot publiek aan diverse sporters. Velen van hen willen nieuwe sporten leren of simpelweg beter worden. Door jouw lessen aan te bieden op Sportlery kan je veel meer mensen bereiken en vergroot je de bezetting van je lessen.</p>
            <button class="btn btn-default" id="btn-trainer">Lees meer</button>
            <?= Html::a('Registreer nu', ['site/signup'], ['class' => 'btn btn-default']) ?>
          </div>
        </div>
    </div>
    </div>

    <div class="container">
    
    <?= $content ?>

    </div>

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
