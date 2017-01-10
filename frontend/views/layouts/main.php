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
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
    <link rel="icon" href="vendor/twbs/bootstrap/docs/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title>Sportlery</title>

    <?php $this->head() ?>

  </head>

  <body>
      <div id="partnerModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Wie ben je?</h4>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-8 text-center">
                        <div class="col-md-4">
                          <p>Ik ben van een sportclub en ik bied een locatie aan.</p>
                          <?= Html::a('Sportclub', ['sportclub'], ['class'=>'btn btn-default']) ?>    
                        </div>
                        <div class="col-md-4">
                          <p>Ik ben een trainer en ik geef sportlessen en/of workshops.</p>
                          <?= Html::a('Trainer', ['trainer'], ['class'=>'btn btn-default']) ?>    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->beginBody() ?>
    
    <?php require 'navbar.php'; ?>

    <?= $content ?>    

    <?php require 'footer.php'; ?>

<?php $this->endBody() ?>

  </body>
</html>
<?php $this->endPage() ?>
