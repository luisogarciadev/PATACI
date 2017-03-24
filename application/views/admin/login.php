<form class="form-horizontal container" action="<?php echo base_url('login/loginAttempt'); ?>" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Nombre de Usuario:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario">
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 control-label">Contrase&ntilde;a:</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		</div>
	</div>
	<div class="form-group">
  	<div class="col-sm-offset-2 col-sm-10">
    		<button type="submit" class="btn btn-default">Ingresar</button>
  	</div>
	</div>
</form>