<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Locaties';
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

<hr class="hr-invisible">

<div class="container">

    <p>
        <?= Html::a('Locatie Toevoegen', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </p>

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
                                $data->city . '<br>' . 
                                '<hr>' . 
                                '<i class="fa fa-soccer-o"></i>'
                                ;

                        return $info;
                },
                'contentOptions'=>['class'=>'col-md-4 location-list']
                ],
                [
                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                'format' => 'html',
                'value' => function ($data) {

                        if($data->type == 1)
                        {
                            $button = Html::a('Boek Nu!', ['location/view', 'id' => $data->id], ['class' => 'btn btn-primary pull-right']);
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
                'contentOptions'=>['class'=>'col-md-4 location-list']
                ],
                [
                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                'format' => 'html',
                'value' => function ($data) {

                        if($data->type == 1)
                        {
                            $button = Html::a('Boek Nu!', ['location/view', 'id' => $data->id], ['class' => 'btn btn-primary']);
                        } elseif ($data->type == 0) {
                            $button = Html::a('Bekijk', ['location/view', 'id' => $data->id], ['class' => 'btn btn-primary']);
                        }
                        return $button;
                },
                'contentOptions'=>['class'=>'col-md-1 location-list']
                ],
            ],
        ]);

        ?>

    <div class="col-md-4">
        <h2>Zoeken</h2>
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-8">
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
</div>
