<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

echo GridView::widget([
            'dataProvider' => $paidProvider,
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
                                $data->city;

                        return $info;
                },
                'contentOptions'=>['class'=>'col-md-10 location-list']
                ],
                [
                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                'format' => 'html',
                'value' => function ($data) {

                        if(isset($data->url)) {
                            $button = Html::a('Boek Nu!', $data->url, ['class' => 'btn btn-primary']);
                        } 
                        return $button;
                },
                'contentOptions'=>['class'=>'col-md-1 location-list']
                ],
            ],
        ]);

?>