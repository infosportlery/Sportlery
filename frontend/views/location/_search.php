<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use kartik\select2\Select2;
use kartik\form\ActiveForm;
use app\models\Location;
use common\models\User;
use app\models\Category;


/* @var $this yii\web\View */
/* @var $model frontend\models\LocationSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin([
    'action' => ['location/index'],
    'method' => 'get',
        'type' => ActiveForm::TYPE_INLINE
]); ?>

<div class="row">
	
		<?= $form->field($model, 'category_id', ['showLabels'=>false])->widget(Select2::classname(), [
		    'data'=> ArrayHelper::map(Category::find()->all(), 'id', 'name'),
		    'pluginOptions'=>['
		    	allowClear'=>true,
		    	'width' => '250px',
		    ],

		    'options' => ['placeholder'=>'Selecteer een sport'],
		    'size' => Select2::MEDIUM
		]); ?>

		<?= $form->field($model, 'city', ['showLabels'=>false])->widget(Select2::classname(), [
		    'data'=> ArrayHelper::map(Location::find()->all(), 'city', 'city'),
		    'pluginOptions'=>['
		    	allowClear'=>true,
		    	'width' => '250px',
		    ],
		    'options' => ['placeholder'=>'Zoek een Sportbuddy op locatie'],
		    'size' => Select2::MEDIUM
		]); ?>

		<?= $form->field($userModel, 'city', ['showLabels'=>false])->widget(Select2::classname(), [
		    'data'=> [ArrayHelper::map(User::find()->all(), 'city', 'city')],
		    'pluginOptions'=>['
		    	allowClear'=>true,
		    	'width' => '250px',
		    ],
		    'options' => ['placeholder'=>'Selecteer een sportlocatie'],
		    'size' => Select2::MEDIUM
		]); ?>

	
    <?= Html::submitButton('Zoeken', ['class' => 'btn btn-primary']) ?>


	</div>
</div>


<div class="form-group">
</div>
	
<?php ActiveForm::end(); ?>

