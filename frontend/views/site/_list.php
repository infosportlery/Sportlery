<?php
// _list_item.php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="col-sm-6 col-md-8 col-md-offset-2">
  <div class="thumbnail">
    <div class="media">
        <div class="media-left">
            <img src="/uploads/default.jpg">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?= $model->name ?></h4>
          <?= $model->city ?><br>
          <strong><?= $model->price ?> per uur</strong>
          <hr class="hr-invisible-xs">
          <?php
            if($model->type == 1)
            {
              echo Html::a('Boek Nu', ['location/view', 'id' => $model->id], ['class' => 'btn btn-default btn-block']);
            } elseif ($model->type == 0) {
              echo Html::a('Meer Info', ['location/view', 'id' => $model->id], ['class' => 'btn btn-default btn-block']);
            }
            ?>
        </div>
      </div>
  </div>
</div>