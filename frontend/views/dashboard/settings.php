
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
</div>