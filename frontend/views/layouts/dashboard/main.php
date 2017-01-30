
<?php 

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\DashboardAsset;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\bootstrap\Alert;
use frontend\controllers\NotFoundHttpException;
use frontend\controllers\UserController;

DashboardAsset::register($this);

Modal::begin([
      'header'=>'<h4>Wijzigen</h4>',
      'id'=>'modal',
      'size'=>'modal-md',
   ]);

  echo "<div id='modalContent'></div>";
Modal::end();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sportlery | Dashboard</title>

    <?php $this->head() ?>
  </head>

  <body>
  <?php $this->beginBody() ?>

    <?php require 'navbar.php'; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <div class="row text-center">
            <img src="<?= Yii::$app->user->identity->avatar ?>" class="avatar img-circle"><br>

            Welkom, 
                    <b><a href='index.php?r=user/view&id=<?= Yii::$app->user->identity->id?> '><?= Yii::$app->user->identity->username ?> </a></b>
            <hr>
          </div>
          <ul class="nav nav-sidebar">
            <li class="active"><?= Html::a('<i class="fa fa-home"></i> Dashboard', Url::to(['dashboard/index'])); ?></li>
            <li><?= Html::a('<i class="fa fa-envelope"></i> Berichten', Url::to(['site/comingsoon'])); ?></li>
            <li><?= Html::a('<i class="fa fa-soccer-ball-o"></i> Sporten', Url::to(['site/comingsoon'])); ?></li>
            <li><?= Html::a('<i class="fa fa-address-book-o"></i> Sportbuddies', Url::to(['sportbuddies/index'])); ?></li>
          </ul>
           <ul class="nav nav-sidebar">
            <li><?= Html::a('<i class="fa fa-cog"></i> Instellingen', Url::to(['user/settings', 'id' => Yii::$app->user->identity->id])); ?></li>
          </ul>
          <?php if(Yii::$app->user->can('admin')): ?>
            
            <ul class="nav nav-sidebar">
              <li class="sidebar-header">Admin</li>
              <li><?= Html::a('<i class="fa fa-plus"></i> Locatie Toevoegen', Url::to(['location/create'])); ?></li>
              <li><?= Html::a('<i class="fa fa-plus"></i> Gebruiker Role', Url::to(['auth-assignment/create'])); ?></li>
              <li><?= Html::a('<i class="fa fa-soccer-ball-o"></i> Sport Toevoegen', Url::to(['category/create'])); ?></li>
            </ul>


          <?php endif ?>
        </div>
      </div>
    </div>

    <div class="container"> 
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <?php if (Yii::$app->session->hasFlash('danger')): ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <h4><i class="icon fa fa-times"></i> Oeps!</h4>
                        <?= Yii::$app->session->getFlash('danger') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div> 
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?= $content ?>
    </div>
    </div>
    

  
    

<?php $this->endBody() ?>

  </body>
</html>
<?php $this->endPage() ?>