<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = 'Sport Toevoegen';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="page-header"><i class="fa fa-cog"></i> <?= Html::encode($this->title) ?></h1>
<?php 
echo Breadcrumbs::widget([
    'homeLink' => [ 
        'label' => Yii::t('yii', 'Home'),
        'url' => Yii::$app->homeUrl,
    ],
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);
?>

<div class="row">
	<div class="col-md-6">
	 	<div class="panel panel-default">
	        <div class="panel-heading">
	            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
	        </div>
	        <div class="panel-body">
			    <?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>
	        </div>
	    </div>
	</div>
</div>

<p>
	Wordt aan gewerkt. Toevoegen geeft nog een SQL error.
</p>