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
    <link rel="icon" href="vendor/twbs/bootstrap/docs/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title>Sportlery</title>

    <?php $this->head() ?>

  </head>

  <body>
    <?php $this->beginBody() ?>
    
    <?php require 'navbar.php'; ?>

        <?= $content ?>
    
    <hr class="hr-invisible-sm"

    <?php require 'footer.php'; ?>

<?php $this->endBody() ?>

  </body>
</html>
<?php $this->endPage() ?>