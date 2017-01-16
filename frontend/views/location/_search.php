<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use kartik\select2\Select2;
use kartik\form\ActiveForm;
use app\models\Location;


/* @var $this yii\web\View */
/* @var $model frontend\models\LocationSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'action' => ['location/index'],
    'method' => 'get',
]); ?>

<?= $form->field($model, 'name', [
    'addon' => ['prepend' => ['content'=>'<i class="fa fa-search"></i>']]])
    ->textInput(['placeholder' => 'Verfijn Zoekresultaat']) ?>

<?= $form->field($model, 'city', ['showLabels'=>false])->widget(Select2::classname(), [
    'data'=> ArrayHelper::map(Location::find()->all(), 'city', 'city'),
    'pluginOptions'=>['allowClear'=>true],
    'options' => ['placeholder'=>'Selecteer een stad..']
]); ?>


<div class="form-group">
    <?= Html::submitButton('Zoeken', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

