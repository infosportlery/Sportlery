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
    <?= $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/ico', 'href' => 'images/favicon.ico']);?>
    <?= Html::csrfMetaTags() ?>
    <title>Sportlery</title>

    <?php $this->head() ?>

  </head>

  <body>
    <?php $this->beginBody() ?>
    
    <?php require 'navbar.php'; ?>

    <div class="header3">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12 text-left">
                <h1><?= Yii::t('app','Extend your reach!'); ?></h1>
                <p class="lead"><?= Yii::t('app', 'Sportlery has large and diverse community. All of them want to practice their favourite sport, but don&apos;t always know where to go. By offering your sport location, you can attract more people and increase your occupancy!'); ?></p>
                <button class="btn btn-default" id="btn-sportclub"><?= Yii::t('app','Read more!'); ?></button>
              </div>
              <div class="col-md-5 col-md-offset-1 col-sm-12" style="margin-top: 50px;">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/IVrDoaDp0-o" frameborder="0" allowfullscreen=""></iframe>
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
