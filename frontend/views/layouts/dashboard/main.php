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

DashboardAsset::register($this);

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

            Welkom, <b><a href='index.php?r=site/profile&id=<?= Yii::$app->user->identity->id?> '><?= Yii::$app->user->identity->username ?> </a></b>
            <hr>
          </div>
          <ul class="nav nav-sidebar">
            <li class="active"><?= Html::a('<i class="fa fa-home"></i> Dashboard', Url::to('index.php?r=dashboard/index')); ?></li>
          </ul>
           <ul class="nav nav-sidebar">
            <li><?= Html::a('<i class="fa fa-cog"></i> Settings', Url::to(['dashboard/settings', 'id' => Yii::$app->user->identity->id])); ?></li>
          </ul>
          <?php if(Yii::$app->user->can('admin')): ?>
            
            <ul class="nav nav-sidebar">
              <li class="sidebar-header">Admin</li>
              <li><?= Html::a('<i class="fa fa-plus"></i> Create Location', Url::to('index.php?r=location/create')); ?></li>
            </ul>

          <?php endif ?>
        </div>
      </div>
        <?= $content ?>
    </div>
        
          
    

<?php $this->endBody() ?>

  </body>
</html>
<?php $this->endPage() ?>