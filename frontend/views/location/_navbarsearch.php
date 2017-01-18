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


    <div class="row navbar_search pull-right">
        <div class="col-md-12">

            <?= $form->field($model, 'category_id', ['showLabels'=>false])->widget(Select2::classname(), [
                'data'=> ArrayHelper::map(Category::find()->all(), 'id', 'name'),
                'pluginOptions'=>['
                  allowClear'=>true,
                  'width' => '100%',
                ],
                'options' => ['placeholder'=>'Selecteer een sport'],
                'size' => Select2::SMALL
            ]); ?>

            <?= $form->field($model, 'city', ['showLabels'=>false])->widget(Select2::classname(), [
                'data'=> ArrayHelper::map(Location::find()->all(), 'city', 'city'),
                'pluginOptions'=>['
                  allowClear'=>true,
                  'width' => '150px',
                ],
                'options' => ['placeholder'=>'Selecteer een locatie'],
                'size' => Select2::SMALL
            ]); ?>

            <?= Html::submitButton('Zoeken', ['class' => 'btn btn-primary btn-sm']) ?>
        </div>
    </div>

  
<?php ActiveForm::end(); ?>