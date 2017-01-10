<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<hr class="hr-invisible">
<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <input type="hidden" name="_csrf" value="<?php echo Yii::$app->request->getCsrfToken(); ?>">

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            
            <hr>

            <?php echo \nodge\eauth\Widget::widget(['action' => 'site/login']); ?>

            <br>

            <p>Nog geen account? Meld je <?= Html::a('direct', Url::to(['site/signup'])) ?> aan.</p>


            </div>
        </div>
    </div>
</div>