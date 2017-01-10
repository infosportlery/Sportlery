<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Tabs;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Locations';
$this->params['breadcrumbs'][] = $this->title;

$searchForm = $this->render('_search', ['model' => $searchModel]);

?>
<div class="location-index">

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(51.9244200,4.4777330),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://www.sportlery.nl/maps.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRgMZIhZXbKDHhPpO1idJlbIOr7eYkEqY&callback=initMap">
    </script>

    <div class="sm-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end sm-header -->

     <?php 
            echo Breadcrumbs::widget([
                'homeLink' => [ 
                    'label' => Yii::t('yii', 'Home'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);
        ?>
    

    <!-- GOOGLE MAPS MULTIPLE MARKERS

    <script src="http://maps.google.com/maps/AIzaSyBtSVqKxPjRSL7dJPFA_JVK-7scC0N-NQQ/js?sensor=false" type="text/javascript"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="map" style="height: 400px; width: 500px;">
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php echo $this->render('@app/views/location/_search', array('model'=>$searchModel)); ?>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <?php 
                    if(Yii::$app->user->can('admin')){

                    echo Html::a('Locatie Toevoegen', ['create'], ['class' => 'btn btn-success']);
                    }
                ?>
            </div>
        </div>
        <hr class="hr-invisible-sm">
        <div class="row">
            <div class="col-md-12">
                
                <?php 
                    $publicGridView = GridView::widget([
                        'id' => 'publiclocations',
                        'dataProvider'=>$dataProvider,

                        //'filterModel' => $searchModel,
                        'filterUrl' => Url::to('location/index'),
                        'showHeader' => false,
                        'showFooter' => true,
                        'summary' => false,
                        'columns' => [
                                [
                                    'format' => 'html',
                                    'value' => function($model) { 
                                        $info = 
                                        Html::img($model->avatarurl) . '<br>' .
                                        'Price: ' . $model->price . '<br>' . 
                                        'Category: ' . $model->category;
                                        return $info;
                                    },
                                    'contentOptions'=>['style'=>'max-width: 80px;']
                                ],
                                [
                                    'format' => 'raw',
                                    'value' => function($model) {
                                        $info = 
                                        '<div class="locationList"><h3>' . Html::a($model->name, urldecode('index.php?r=location/view&id=' . $model->id)) . ' | <span class="text-muted">' . $model->city . '</span></h1><br>' . 
                                        substr($model->description, 0, 500) .
                                        '</div>';
                                        return $info;
                                    },
                                    'contentOptions'=>['style'=>'max-width: 400px;']
                                ],
                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                    ]);
                 ?>

                 <?php 
                 $paidGridView = GridView::widget([
                        'id' => 'paidlocations',
                        'dataProvider'=>$paidProvider,

                        //'filterModel' => $searchModel,
                        'showHeader' => false,
                        'showFooter' => true,
                        'summary' => false,
                        'columns' => [
                                [
                                    'format' => 'html',
                                    'value' => function($model) { 
                                        $info = 
                                        Html::img($model->avatarurl) . '<br>' .
                                        'Address: ' . $model->address . '<br>' . 
                                        'Zip: ' . $model->zip;
                                        return $info;
                                    },
                                    'contentOptions'=>['style'=>'max-width: 80px;']
                                ],
                                [
                                    'format' => 'raw',
                                    'value' => function($model) {
                                        $info = 
                                        '<div class="locationList"><h3>' . Html::a($model->company_name, urldecode('index.php?r=location/paid&id=' . $model->id)) . ' | <span class="text-muted">' . $model->city . '</span></h1><br>' . 
                                        substr($model->description, 0, 500) .
                                        '</div>';
                                        return $info;
                                    },
                                    'contentOptions'=>['style'=>'max-width: 400px;']
                                ],
                                ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{info}',
                                ],

                            ],
                    ]);
                 ?>
            
             <?php 

                if(isset($_GET['type']))
                {
                    $type = $_GET['type'];

                    if($type == 1){
                        echo Tabs::widget([
                            'items' => [
                                [
                                    'label' => 'Public',
                                    'content' => $publicGridView,
                                    'active' => false,
                                    'options' => ['id' => 'publiclocations'],
                                ],
                                [
                                    'label' => 'Paid',
                                    'content' => $paidGridView,
                                    'active' => true,
                                    'options' => ['id' => 'paitdlocations'],
                                ],
                            ],
                        ]);
                    } elseif ($type == 0) {
                        echo Tabs::widget([
                            'items' => [
                                [
                                    'label' => 'Public',
                                    'content' => $publicGridView,
                                    'active' => true,
                                    'options' => ['id' => 'publiclocations'],
                                ],
                                [
                                    'label' => 'Paid',
                                    'content' => $paidGridView,
                                    'active' => false,
                                    'options' => ['id' => 'paidlocations'],
                                ],
                            ],
                        ]);
                    }
                } else {
                 echo Tabs::widget([
                        'items' => [
                            [
                                'label' => 'Public',
                                'content' => $publicGridView,
                                'active' => true,
                                'options' => ['id' => 'publiclocations'],
                            ],
                            [
                                'label' => 'Paid',
                                'content' => $paidGridView,
                                'active' => false,
                                'options' => ['id' => 'paidlocations'],
                            ],
                        ],
                    ]);
                }

             ?>   
             </div>
        </div>
 </div>
    

</div>
