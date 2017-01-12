<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use app\models\Location;
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
	
		<?= $form->field($model, 'name', [
		    'addon' => ['prepend' => ['content'=>'<i class="fa fa-search"></i>']]])
		    ->textInput(['placeholder' => 'Zoek een sportlocatie.'])->label(false) ?>
		    
    	<?= Html::submitButton('Zoeken', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

