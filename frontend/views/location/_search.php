<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\LocationSearch */
/* @var $form yii\widgets\ActiveForm */
?>


    <?php $form = ActiveForm::begin([
        'action' => ['location/index'],
        'method' => 'get',
    ]); ?>

  <form class="form-inline">

    <!-- Search Form -->
        <form role="form">
        
        <!-- Search Field -->
            <div class="row">
                <div class="form-group">
                    <div class="input-group">
                        <?= $form->field($model, 'globalSearch')->textInput()->input('text', ['placeholder' => "Naar welke sport ben je opzoek?"])->label(false); ?>
                        <span class="input-group-btn">
                        <?= Html::submitButton('Zoeken', ['class' => 'btn btn-primary']) ?> 
                        </span>
                        </span>
                    </div>
                </div>
            </div>
            
        </form>
  </form>



    <?php ActiveForm::end(); ?>