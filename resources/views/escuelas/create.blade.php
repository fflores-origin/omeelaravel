@extends('_shared.layout', ['title'=>'Agregar Escuela'])

@section('contenido')

<style type="text/css">
	
	.form-check-label {
		font-size: 14px;
	}

	.form-check-input {
		font-size: 20px;
	}

</style>


<div align="center" class="title-form">
		<h3>Registrar Escuela</h3>
</div>

<div class="container ">
	<div class="col-md-6 mx-auto">
	<form action="{{ url('escuela')}}" method="post"> 
		{!! csrf_field() !!}

		<div class="form-group">
			<h6>Datos Escuela</h6>
			<input type="text" name="razon_social" placeholder="Razon Social" class="form-control" required>
		</div>
		
		<div  class="form-group">
			<input type="text" name="nombre_escuela" placeholder="Nombre Escuela" class="form-control" required>
		</div>
		
		<h6>Tipo Escuela</h6>
		<div>
			<div class="form-check">
			  <label class="form-check-label">
			    <input class="form-check-input" type="radio" name="tipo_id" id="radio1" value="1" checked>
			    Escuela OMEE
			  </label>
			</div>
			<div class="form-check">
			  <label class="form-check-label">
			    <input class="form-check-input" type="radio" name="tipo_id" id="radio2" value="2">
			    Escuela IAP
			  </label>
			</div>	
		</div>
		
		<div  class="form-group">
			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
		</div>

		<div  class="form-group">
			<input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
		</div>

		<div  class="form-group">
			<input type="text" name="direccion" placeholder="Direccion" class="form-control" required>
		</div>

		<div  class="form-group">
			<input type="text" name="codigo_postal" placeholder="Codigo Postal" class="form-control" required>
		</div>		
		<br>
		<h6>Ubicación</h6>
		<div  class="form-group">
			<input type="text" name="provincia" placeholder="Provincia" class="form-control" required>
		</div>	

		<div  class="form-group"> 
			<input type="text" name="pais" placeholder="Pais - DROPDOWN" class="form-control" required>
		</div>	

		<div  class="form-group"> 
			<input type="text" name="telefono" placeholder="Telefono" class="form-control" required>
		</div>	

		<div  class="form-group"> 
			<input type="email" name="email" placeholder="Direción de Email" class="form-control" required>
		</div>	

		<br>
		<h6>Datos de Usuario</h6>
		<div  class="form-group">
			<input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
		</div>	

		<div  class="form-group">
			<input type="text" name="password" placeholder="Contraseña" class="form-control" required>
		</div>	
		<input class="btn btn-block btn-pink" type="submit" name="Registrar" value="Registrar">
		<br>
	</form>
	</div>
</div>


@stop