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
          <h4 class="media-heading"><?= $model->username ?></h4>
          <?= $model->city ?><br>
          <strong><?= $model->favorite_sport ?></strong>
          <hr class="hr-invisible-xs">
          <a href="#" class="btn btn-default btn-block" role="button">Voeg toe</a></p>
        </div>
      </div>
  </div>
</div>