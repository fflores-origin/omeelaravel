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

<div class="form">

@if(!$errors->isEmpty())

<div class="alert alert-danger" role="alert">
  <p>
		<strong>Error !</strong> Ha ingresado algunos datos erroneos:
  </p>
  <p>
		<ul>
	  	@foreach ($errors->all() as $error)
	    <li>{{ $error }}</li>
	  	@endforeach	
	  	</ul>
  </p>
  
</div>

   
@endif

@if ( session()->has('info') )
	<div class="container">
			<div class="alert alert-success" role="alert">
				<div class="container">
					<div class="row" style="font-size: 16px;">      
						<strong>¡ Felicidades ! </strong>&nbsp; {{ session('info') }}
			    	</div>
				</div>
			</div>		
	</div>

@else
	<div class="container ">
		<div class="col-md-6 mx-auto">
		<form action="{{ url('escuela')}}" method="post"> 
			{!! csrf_field() !!}

			<div class="form-group">
				<h6>Datos Escuela</h6>
				<input type="text" name="razon_social" placeholder="Razon Social" value="{{ old('razon_social') }}" class="form-control" required>
			</div>
			
			<div  class="form-group">
				<input type="text" name="nombre_escuela" placeholder="Nombre Escuela" class="form-control" value="{{old('nombre_escuela')}}" required>
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
				<input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{old('nombre')}}" required>
			</div>

			<div  class="form-group">
				<input type="text" name="apellido" placeholder="Apellido" value="{{old('apellido')}}" class="form-control" required>
			</div>

			<div  class="form-group">
				<input type="text" name="direccion" placeholder="Direccion" value="{{old('direccion')}}" class="form-control" required>
			</div>

			<div  class="form-group">
				<input type="text" name="codigo_postal" placeholder="Codigo Postal" class="form-control" value="{{old('codigo_postal')}}" required>
			</div>		
			<br>
			<h6>Ubicación</h6>
			<div  class="form-group">
				<input type="text" name="provincia" placeholder="Provincia" class="form-control" value="{{old('provincia')}}" required>
			</div>	

			<div  class="form-group"> 
				<input type="text" name="pais" placeholder="Pais" class="form-control" 
				value="{{old('pais')}}" required>
			</div>	

			<div  class="form-group"> 
				<input type="text" name="telefono" placeholder="Telefono" class="form-control" value="{{old('telefono')}}" required>
			</div>	

			<div  class="form-group"> 
				<input type="email" name="email" placeholder="Direción de Email" class="form-control" value="{{old('email')}}" required>
			</div>	

			<br>
			<h6>Datos de Usuario</h6>
			<div  class="form-group">
				<input type="text" name="usuario" placeholder="Usuario" class="form-control" value="{{old('usuario')}}" required>
			</div>	

			<div  class="form-group">
				<input type="password" name="password" placeholder="Contraseña" class="form-control" required>
			</div>	
			<input class="btn btn-block btn-pink" type="submit" name="Registrar" value="Registrar">
			<br>
		</form>
		</div>
	</div>

@endif
</div>

@stop