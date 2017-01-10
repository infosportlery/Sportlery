<?php 

  use yii\helpers\Html;
 ?>

<div id="partnerModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Wie ben je?</h4>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 text-center">
                    <div class="col-md-4">
                      <p>Ik ben van een sportclub en ik bied een locatie aan.</p>
                      <?= Html::a('Sportclub', ['sportclub'], ['class'=>'btn btn-default']) ?>    
                    </div>
                    <div class="col-md-4">
                      <p>Ik ben een trainer en ik geef sportlessen en/of workshops.</p>
                      <?= Html::a('Trainer', ['trainer'], ['class'=>'btn btn-default']) ?>    
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Sportlery</h1>
      </div>
    </div>
  </div>
</div>