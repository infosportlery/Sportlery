<?php 
	use yii\helpers\Html;
	use yii\helpers\Url;
  use yii\helpers\VarDumper;
  use yii\bootstrap\Modal;
  use kartik\form\ActiveForm;


  // if(Yii::$app->user->identity->favorite_sport == NULL) {
  //   Modal::begin([
  //         'header'=>'<h4>Stap 1: Welke sport(en) doe je?</h4>',
  //         'id'=>'stepone',
  //         'size'=>'modal-md',
  //      ]);

  //     echo $this->renderAjax('/user/_form', ['model' => $model]);
  //   Modal::end();
  // }
?>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>135</h3>

              <p>Betaalde Locaties</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">
              Bekijk Locaties <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>93</h3>

              <p>Publiekelijke Locaties</p>
            </div>
            <div class="icon">
              <i class="fa fa-map-o"></i>
            </div>
            <a href="#" class="small-box-footer">
              Bekijk Locaties <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>13</h3>

              <p>Sportlers in Schiedam</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">
              Bekijk Sportlers <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>420</h3>

              <p>Groepschats</p>
            </div>
            <div class="icon">
              <i class="fa fa-comment"></i>
            </div>
            <a href="#" class="small-box-footer">
              Bekijk Sportlers <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Actieve Sporten:</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Sportlocaties</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php echo $this->render('/location/publicgridview', ['publicProvider' => $publicProvider, 'searchModel' => $searchModel]);?>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Sportlers</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php echo $this->render('/location/usergridview', ['userProvider' => $userProvider, 'userSearchModel' => $userSearchModel]);?>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>