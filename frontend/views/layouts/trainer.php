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

      <!-- Header Begin -->

    <div class="header4">
      <div class="container">
        <div class="row text-left">
          <div class="col-md-6">
            <h1><?= Yii::t('app','Extend your reach!'); ?></h1>
            <p class="lead"><?= Yii::t('app', 'Sportlery has large and diverse community. Most of them want to discover new sports or simply improve their skills. By offering your classes, you can attract more people and increase the occupancy of your classes!'); ?></p>
            <button class="btn btn-default" id="btn-trainer"><?= Yii::t('app', 'Read more!'); ?></button>
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
