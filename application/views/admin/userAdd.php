<form class="form-horizontal container" action="<?php echo base_url('Admin/userAddPost'); ?>" method="post">
	<div class="form-group">
  	<label for="username" class="col-sm-2 control-label">Nombre de Usuario</label>
  	<div class="col-sm-10">
			<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario">
		</div>
	</div>
	<div class="form-group">
  	<label for="password" class="col-sm-2 control-label">Contrase&ntilde;a</label>
  	<div class="col-sm-10">
    		<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
  	</div>
	</div>
	<div class="form-group">
    <label for="firstName" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="firstName" class="form-control" id="firstName" name="firstName" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="lastName" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-10">
      <input type="lastName" class="form-control" id="lastName" name="lastName" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="idRole" class="col-sm-2 control-label">Rol</label>
    <div class="col-sm-10">
      <select name="idRole" id="idRole" class="form-control">
        <?php 
          foreach($roles as $role) {
            echo '<option value="' . $role->id . '">' . $role->name . '</option>';
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


<script src="//cloud.tinymce.com/stable/tinymce.min.js?apikey=rljqj6dfbrcezpli75m0lpp6odx0q5nwq5o91clhkdm2z27t"></script>
<script>
	tinymce.init({ selector:'textarea',
		plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code'
		],
		toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		content_css: '//www.tinymce.com/css/codepen.min.css'
	});
</script>