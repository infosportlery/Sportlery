<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\form\ActiveForm;
use app\models\AuthAssignment;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name', ['showLabels'=>true])->widget(Select2::classname(), [
        'data'=> ArrayHelper::map(AuthAssignment::find()->all(), 'item_name', 'item_name'),
        'pluginOptions'=>['allowClear'=>true],
        'options' => ['placeholder'=>'Selecteer een role.']
    ]); ?>

    <?= $form->field($model, 'user_id', ['showLabels'=>true])->widget(Select2::classname(), [
        'data'=> ArrayHelper::map(User::find()->all(), 'id', 'username'),
        'pluginOptions'=>['allowClear'=>true],
        'options' => ['placeholder'=>'Selecteer een gebruiker.']
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Aanpassen' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
