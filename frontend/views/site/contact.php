<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Contact';
?>
    <div class="sm-header sm-header-1">
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

                    <?= $form->field($model, Yii::t('app', 'name'))->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, Yii::t('app', 'email')) ?>

                    <?= $form->field($model, Yii::t('app', 'subject')) ?>

                    <?= $form->field($model, Yii::t('app', 'body'))->textarea(['rows' => 6]) ?>

                    <div class="form-group pull-right">
                        <?= Html::submitButton(Yii::t('app', 'Send'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-5 col-md-offset-1 text-center">
                <i class="fa fa-envelope fa-5x"></i>
                <h3><?= Yii::t('app', 'Any questions or suggestions?') ?></h3>
                <hr class="hr-sm">
            </div>
        </div>
    </div>

</div>
</div> 
