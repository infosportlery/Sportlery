<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

// OLD GRIDVIEW (LIST)

echo GridView::widget([
    'dataProvider' => $userProvider,
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
        'value' => function ($model) {

                $info = '<h3>' . Html::a($model->username, ['user/view', 'id' => $model->id]) . '</h3><br>' .
                        $model->city;

                return $info;
        },
        'contentOptions'=>['class'=>'col-md-10 location-list']
        ],
    ],
]);

// NEW GRIDVIEW

// $userGridView = GridView::widget([
//     'dataProvider' => $userProvider,
//     'showHeader' => false,
//     'summary' => false,

//     'columns' => [
//         [
//             'format' => 'html',
//             'value' => function($model) { 
//                 $info = '<div class="img-thumbnail">' . Html::img($model->avatarurl) . '</div><br>' . 
//                 $model->username


//                 ;
//                 return $info;
//             },
//             'contentOptions'=>[
//                 'class'=>'col-md-1 location-avatar img-responsive']
//         ],
//     ],
// ]);

?>