<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $publicProvider,
    'showHeader' => false,
    'summary' => false,
    'columns' => [
        [
            'format' => 'html',
            'value' => function($model) { 
                $info = '<div class="img-thumbnail">' . Html::img($model->avatarurl) . '</div>';
                return $info;
            },
            'contentOptions'=>[
                'class'=>'col-md-1 location-avatar img-responsive']
        ],
        [
        'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
        'format' => 'html',
        'value' => function ($data) {

                $info = '<h3>' . Html::a($data->name, ['location/view', 'id' => $data->id]) . '</h3><br>' .
                        '<b>Stad</b>: ' . $data->city . '<br>' .
                        '<b>Sport</b>: ' . $data->categoryName->name;

                return $info;
        },
        'contentOptions'=>['class'=>'col-md-10 location-list']
        ],
        [
        'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
        'format' => 'html',
        'value' => function ($data) {

                $button = Html::a('Bekijk', ['location/view', 'id' => $data->id], ['class' => 'btn btn-primary pull-right']);
                
                return $button;
        },
        'contentOptions'=>['class'=>'col-md-1 location-list']
        ],
    ],
]);

?>