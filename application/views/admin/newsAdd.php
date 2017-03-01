<form class="form-horizontal container" action="<?php echo base_url('Admin/newsAddPost'); ?>" method="post">
	<div class="form-group">
    	<label for="header" class="col-sm-2 control-label">Encabezado</label>
    	<div class="col-sm-10">
  			<input type="text" class="form-control" id="header" name="header" placeholder="Encabezado">
		</div>
  	</div>
  	<div class="form-group">
    	<label for="subHeader" class="col-sm-2 control-label">Subencabezado</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="subHeader" name="subHeader" placeholder="Subencabezado">
    	</div>
  	</div>
  	<div class="form-group">
    	<label for="newsText" class="col-sm-2 control-label">Texto</label>
    	<div class="col-sm-10">
    		<textarea class="form-control" name="newsText" id="newsText" cols="30" rows="20" placeholder="Texto de la noticia"></textarea>
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