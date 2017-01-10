<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'firstname')->textInput() ?>
    <?= $form->field($model, 'lastname')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'file')->fileInput(); ?>
    <?= $form->field($model, 'favorite_sport')->textInput() ?>
    <?= $form->field($model, 'favorite_athlete')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Toevoegen' : 'Opslaan', ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
