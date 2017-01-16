<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sportlocaties & Sportlers';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="sm-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-12 searchbar">
            <div class="col-md-6 col-md-offset-3 text-center">
                <?php  echo $this->render('_search', ['model' => $searchModel, 'userModel' => $userSearchModel]); ?>
            </div>
        </div>
    </div>

<div class="container">

    <?php 
        $publicGridView = GridView::widget([
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

                        if($data->type == 1)
                        {
                            $button = Html::a('Boek Nu!', $data->url, ['class' => 'btn btn-primary pull-right']);
                        } elseif ($data->type == 0) {
                            $button = Html::a('Bekijk', ['location/view', 'id' => $data->id], ['class' => 'btn btn-primary pull-right']);
                        }
                        return $button;
                },
                'contentOptions'=>['class'=>'col-md-1 location-list']
                ],
            ],
        ]);

        $paidGridView = GridView::widget([
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

        // OLD GRIDVIEW (LIST)

        $userGridView = GridView::widget([
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
                'value' => function ($data) {

                        $info = '<h3>' . Html::a($data->username, ['user/view', 'id' => $data->id]) . '</h3><br>' .
                                $data->city;

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

    <div class="row">
        <div class="col-md-6">
        <h2>Sportlocaties</h2>
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
        <div class="col-md-6">
        <h2>Sportlers</h2>
        <hr class="hr-invisible-md">
        <?php 
         echo $userGridView;
         ?>  
        </div>
    </div>
</div>
