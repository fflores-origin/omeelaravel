@extends('_shared.layout', ['title'=>'Agregar Escuela'])

@section('contenido')

<style type="text/css">
	


</style>


<div align="center" class="title-form">
		<h3>Registrar Escuela</h3>
</div>

<div class="container col-md-6">
	
	<form action="{{ url('escuela')}}" method="post"> 
		{!! csrf_field() !!}

		<div class="form-group">
			<h6>Datos Escuela</h6>
			<input type="text" name="razon_social" placeholder="Razon Social" class="form-control" required>
		</div>
		
		<div  class="form-group">
			<input type="text" name="nombre_escuela" placeholder="Nombre Escuela" class="form-control" required>
		</div>
		
		<div class="form-group">
		<h6>Tipo Escuela</h6>
			<div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" id="omee" name="tipo_omee" value="1">
					Escuela OMEE
		      </label>
		    </div>
		    <div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" id="iap" name="tipo_iap" value="2">
					Escuela IAP
		      </label>
		    </div>
		</div>
		
		<div  class="form-group">
			<input type="text" name="nombre" placeholder="Nombre" class="form-control">
		</div>

		<div  class="form-group">
			<input type="text" name="apellido" placeholder="Apellido" class="form-control">
		</div>

		<div  class="form-group">
			<input type="text" name="direccion" placeholder="Direccion" class="form-control">
		</div>

		<div  class="form-group">
			<input type="text" name="codigo_postal" placeholder="Codigo Postal" class="form-control">
		</div>		
		<br>
		<h6>Ubicación</h6>
		<div  class="form-group">
			<input type="text" name="provincia" placeholder="Provincia" class="form-control">
		</div>	

		<div  class="form-group"> 
			<input type="text" name="cuidad" placeholder="Pais - DROPDOWN" class="form-control">
		</div>	

		<div  class="form-group"> 
			<input type="text" name="telefono" placeholder="Telefono" class="form-control">
		</div>	

		<div  class="form-group"> 
			<input type="email" name="email" placeholder="Direción de Email" class="form-control">
		</div>	

		<br>
		<h6>Datos de Usuario</h6>
		<div  class="form-group">
			<input type="text" name="usuario" placeholder="Usuario" class="form-control">
		</div>	

		<div  class="form-group">
			<input type="text" name="password" placeholder="Contraseña" class="form-control">
		</div>	

		<input class="btn btn-block btn-pink" type="submit" name="Registrar" value="Registrar">
	</form>

</div>


@stop