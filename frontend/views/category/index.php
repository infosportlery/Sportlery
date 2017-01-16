<?php

use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CategorySearch */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Categories';
 
           ['class' => 'yii\grid\SerialColumn'],
           'id',
           'title',
           'name',
           ['class' => 'yii\grid\ActionColumn'],
       ],
   ]); 

   ?>

