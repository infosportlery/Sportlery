<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Location */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?= Html::activeDropDownList($model, 'category_id',
        ArrayHelper::map(Category::find()->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6, 'id' => 'txtArea']) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'type')->dropDownList(array(1 => 'Paid', 0 =>'Public')) ?>

    <?php 


    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
