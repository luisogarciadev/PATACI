<form class="form-horizontal container" action="<?php echo base_url('Admin/userEditPost'); ?>" method="post">
	<input type="hidden" name="id" id="id" value="<?php echo $user->id; ?>">
	<div class="form-group">
    	<label for="firstName" class="col-sm-2 control-label">Nombre</label>
    	<div class="col-sm-10">
  			<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre" value="<?php echo $user->firstName; ?>">
		</div>
  	</div>
  	<div class="form-group">
      <label for="lastName" class="col-sm-2 control-label">Apellido</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellido" value="<?php echo $user->lastName; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="idRole" class="col-sm-2 control-label">Rol</label>
      <div class="col-sm-10">
        <select name="idRole" id="idRole" class="form-control">
          <?php 
            foreach($roles as $role) {
              echo '<option value="' . $role->id . '"';
              if ($role->id == $user->idRole) {
                echo ' selected="selected"';
              }
              echo '>' . $role->name . '</option>';
            }
          ?>
        </select>
      </div>
    </div>
  	<div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default">Guardar</button>
    	</div>
  	</div>
</form>