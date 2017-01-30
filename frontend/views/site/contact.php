<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Contact';
?>
    <div class="sm-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $this->title ?></h1>
                </div>
            </div>
        </div>
    </div>

    <?php if (Yii::$app->session->hasFlash('success')): ?>
      <div class="alert alert-success alert-dismissable">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <?= Yii::$app->session->getFlash('success') ?>
      </div>
    <?php elseif (Yii::$app->session->hasFlash('danger')): ?>
      <div class="alert alert-success alert-dismissable">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <?= Yii::$app->session->getFlash('danger') ?>
      </div>
    <?php endif; ?>

    <div class="container">
    <div class="section-pull col-md-10 col-md-offset-1 align-left" id="contactsportlery">
    <hr class="hr-invisible">
        <div class="row">
            <div class="col-md-6">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <div class="form-group pull-right">
                        <?= Html::submitButton(Yii::t('app', 'Verstuur'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-5 col-md-offset-1 text-center">
                <i class="fa fa-envelope fa-5x"></i>
                <h3>Heb je vragen of suggesties?</h3>
                <hr class="hr-sm">
                <!-- <div class="row contact-information">
                    <div class="col-md-4 text-left">
                        <i class="fa fa-home fa-2x"></i>
                        <p class="">blablas</p>
                    </div>
                    <div class="col-md-2">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                    <div class="col-md-6 text-left">
                        <i class="fa fa-home fa-2x"></i>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

</div>
</div> 