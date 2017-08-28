@extends('_shared.layout', ['title'=>'Matricular Alumno'])

@section('contenido')

<div class="form">
	<div align="center" class="title-form">
			<h3>Matricuar alumno</h3>
	</div>
	<div class="container ">
		<div class="col-md-6 mx-auto">
			<form method="post" action="{{ url('profesionales') }}">
			{!! csrf_field() !!}

			<div class="form-group">
				<h6>Datos Alumno</h6>
				<input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<select class="form-control" name="escuela_id" id="escuelas">
					<option value="">Seleccione Escuela</option>
					@if(!$escuelas->isEmpty())		
						@foreach($escuelas as $e)
							<option value="{{ $e->id }}">{{ $e->razon_social }}</option>
						@endforeach
					@endif	

			    </select>
			</div>

			<div class="form-group">
				<input type="text" name="dni" placeholder="DNI" class="form-control" value="{{ old('dni') }}" required>
			</div>

			<div class="form-group">
				<span class="label label-default">Fecha de Nacimiento</span>
				<input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" value="{{ old('fecha_nacimiento') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="direccion" placeholder="Direccion" value="{{ old('direccion') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="ciudad" placeholder="Cuidad" value="{{ old('ciudad') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="codigo_postal" placeholder="Codigo Postal" value="{{ old('codigo_postal') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="pais" placeholder="Pais" value="{{ old('pais') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="horarios" placeholder="Horarios" value="{{ old('horarios') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<h6>Datos Usuario</h6>
				<input type="text" name="usuario" placeholder="Usuario" value="{{ old('usuario') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="password" name="password" placeholder="Contraseña" class="form-control" required>
			</div>

			<div align="center">
				<input type="submit" class="btn btn-pink btn-block col-md-6" name="store" value="Agregar">
			</div>
			</form>
		</div>
	</div>


</div>

@stop