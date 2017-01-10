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
    <style type="text/css">
        
        .content {
            background-color: #F46835;
            height: 100vh;
            width: 100vw;
            padding-top: 250px;
            color: white;
            margin-bottom: -500px;
        }
    </style>

    <?php $this->head() ?>

  </head>

  <body>
    <?php $this->beginBody() ?>
    
    <?php require 'navbar.php'; ?>

    <?= $content ?>

    <?php $this->endBody() ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#partnerModal").modal('show');
            });
        </script>
  </body>
</html>

<?php $this->endPage() ?>