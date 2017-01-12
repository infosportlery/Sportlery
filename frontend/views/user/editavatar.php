<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */
?>


 	<div class="row">
	 	<div class="col-md-12">
           <?= $this->render('_avatar', [
		        'model' => $model,
		    ]) ?>
		</div>
	</div>