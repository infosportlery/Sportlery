<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sportlocaties';
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
            <div class="col-md-6 col-sm-2 col-md-offset-3 text-center">
                <?php  echo $this->render('_search', ['model' => $searchModel, 'userModel' => $userSearchModel]); ?>
            </div>
        </div>
    </div>

<hr class="hr-invisible-sm">

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Openbare Locaties</h2>
                </div>
            </div>

            <?php 

                echo ListView::widget([
                    'dataProvider' => $publicProvider,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'list-wrapper',
                        'id' => 'list-wrapper',
                    ],
                    'layout' => "{items}",
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('_list',['model' => $model]);
                    },
                ]); 

            ?>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Sportclubs</h2>
                </div>
            </div>
            <?php 

                echo ListView::widget([
                    'dataProvider' => $paidProvider,
                    'options' => [
                        'tag' => 'div',
                        'class' => 'list-wrapper',
                        'id' => 'list-wrapper',
                    ],
                    'layout' => "{items}",
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('_list',['model' => $model]);
                    },
                ]); 

            ?>
        </div>
    </div>      

</div>
