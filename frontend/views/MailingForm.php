<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mailing */
/* @var $form ActiveForm */
?>
<div class="MailingForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- MailingForm -->
