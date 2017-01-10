<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MailingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mailings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mailing-index">

    <h1 class="page-header">Mailing List</h1>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->email), ['view', 'id' => $model->email]);
        },
    ]) ?>
</div>
