<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use app\models\Location;
use app\models\Category;
use common\models\User;
use kartik\form\ActiveForm;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model frontend\models\LocationSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'action' => ['location/index'],
    'type' => ActiveForm::TYPE_INLINE,
    'fieldConfig' => ['autoPlaceholder'=>false],
    'method' => 'get',
]); ?>
<div class="row">

	
		<?= $form->field($model, 'category_id', ['showLabels'=>false])->widget(Select2::classname(), [
		    'data'=> ArrayHelper::map(Category::find()->all(), 'id', 'name'),
		    'pluginOptions'=> ['
		    	allowClear'=>true,
		    	'width' => '200px',
		    ],
		    'options' => ['placeholder'=>'Kies een sport'],
		    'size' => Select2::LARGE
		]); ?>


		<?= $form->field($model, 'city', ['showLabels'=>false])->widget(Select2::classname(), [
		    'data'=> ArrayHelper::map(Location::find()->all(), 'city', 'city'),
		    'pluginOptions'=> ['
		    	allowClear'=>true,
		    	'width' => '200px',
		    ],
		    'options' => ['placeholder'=>'Kies een stad'],
		    'size' => Select2::LARGE
		]); ?>


		    
    	<?= Html::submitButton('Zoeken', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

