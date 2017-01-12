
<h1 class="page-header"><i class="fa fa-cog"></i> Settings</h1>

<div class="row">
	<div class="col-md-6">
	 	<div class="panel panel-default">
	        <div class="panel-heading">
	            <h3 class="panel-title">Persoonlijke Informatie</h3>
	        </div>
	        <div class="panel-body">
	           <?= $this->render('/user/_form', [
			        'model' => $model,
			    ]) ?>
	        </div>
	    </div>
	</div>
</div>