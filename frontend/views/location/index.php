<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Locations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Locatie Toevoegen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 
        $publicGridView = GridView::widget([
            'id' => 'publiclocations',
            'dataProvider'=>$publicProvider,

            //'filterModel' => $searchModel,
            'filterUrl' => Url::to('location/index'),
            'showHeader' => false,
            'showFooter' => true,
            'summary' => false,
            'columns' => [
                [
                    'format' => 'html',
                    'value' => function($model) { 
                        $info = '<div class="locationAvatar img-responsive">' .
                        Html::img($model->avatarurl) . '</div><br>' . 
                        'Price: ' . $model->price . '<br>' . 
                        'Category: ' . $model->category;
                        return $info;
                    },
                    'contentOptions'=>['style'=>'max-width: 85px;']
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
            'filterUrl' => Url::to('location/index'),
            'showHeader' => false,
            'showFooter' => true,
            'summary' => false,
            'columns' => [
                [
                    'format' => 'html',
                    'value' => function($model) { 
                        $info = '<div class="locationAvatar">' .
                        Html::img($model->avatarurl) . '</div><br>' . 
                        'Price: ' . $model->price . '<br>' . 
                        'Category: ' . $model->category;
                        return $info;
                    },
                    'contentOptions'=>['style'=>'max-width: 85px;']
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
                ],
                ['class' => 'yii\grid\ActionColumn'],
            ],
    ]);
    ?> 
<?php 
 echo Tabs::widget([
        'items' => [
            [
                'label' => 'Openbaar',
                'content' => $publicGridView,
                'active' => true,
                'options' => ['id' => 'publiclocations'],
            ],
            [
                'label' => 'Betaald',
                'content' => $paidGridView,
                'active' => false,
                'options' => ['id' => 'paidlocations'],
            ],
        ],
    ]);
 ?>   
</div>
