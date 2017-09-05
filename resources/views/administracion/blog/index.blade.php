@extends('_shared.admin-layout', ['title'=>'Blog'])


@section('contenido')

	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>

		tinymce.init({
	    selector: "textarea",
	    plugins: [
	        "advlist autolink lists link image charmap print preview",
	        "searchreplace visualblocks code fullscreen",
	        "media table contextmenu paste"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist outdent indent | link image"
		});


	</script>

	<div class="container">
		<h3>Administracion Blog - Noticias</h3>
	</div>

	<hr>



	<div class="container"> 

		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
    			<a class="nav-link active" data-toggle="tab" href="#noticias" role="tab">Noticias</a>
  			</li>

	  		<li class="nav-item">
    			<a class="nav-link" data-toggle="tab" href="#categorias" role="tab">Categorias</a>
  			</li>

  			<li class="nav-item">
    			<a class="nav-link " data-toggle="tab" href="#agregar" role="tab">Agregar Noticia</a>
  			</li>
		</ul>

<!-- Tab panes -->
<div class="tab-content">

  <div class="tab-pane active" id="noticias" role="tabpanel">
  				
  	<table class="table">
	  	<thead>
	  		<tr>
	  			<th>ID</th>
	  			<th>Nombre</th>
	  			<th>Fecha Publicación</th>
	  			<th>Categoria</th>
	  			<th>Acciones</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<tr>
	  			<td>1</td>
	  			<td>titulo 1</td>
	  			<td>2017-01-01</td>
	  			<td>Categoria-Desc</td>
	  			<td>
	  				<button type="submit" class="btn btn-primary btn-sm">Editar</button>
	  				<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
	  			</td>
	  		</tr>
	  	</tbody>
  		
  	</table>

  </div>

  <div class="tab-pane" id="agregar" role="tabpanel">
	  <div class="group-form">
		  <form method="POST">
			<br>

		  	<div class="form-group">
		    	<label>Añadir nueva entrada</label>
		    	<input type="text" name="titulo" class="form-control col-md-4" placeholder="Ingresar titulo">
			</div>

			<div class="form-group">
		    	<label>Categoria</label>
		    	<select name="categoria_id" class="form-control col-md-4" style="height: 40px;" >
		    		<option value="1">Sin Categoria</option>
		    	</select>
			</div>

			<div class="form-group">
		    	<textarea name="texto" class="form-control"></textarea>
			</div>

			<button type="submit" class="btn btn-success">Guardar</button>

		  </form>

	  </div>

  </div>

  <div class="tab-pane" id="categorias" role="tabpanel">
	  	<div>
	  		<table class="table">
	  			<thead>
	  				<tr>
	  					<th>ID</th>
	  					<th>Nombre</th>
	  				</tr>
	  			</thead>
	  			<tbody>
	  					<tr>
	  						<td>1</td>
	  						<td>Categoria</td>
	  					</tr>
	  			</tbody>
	  		</table>
	  	</div>		

	  	<form class="form-inline" type="POST">
			<div class="form-group" style="vertical-align: middle;">
				Categoria 
			</div>
			<div class="form-group mx-sm-3">
				<input type="text" class="form-control" name="categoria" placeholder="Categoria">
			</div>
			<button type="submit" class="btn btn-primary">Agregar</button>
		</form>
  </div>

</div>

	</div>

	
	

@stop