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
				<input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
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
				<input type="text" name="dni" placeholder="DNI" class="form-control" required>
			</div>

			<div class="form-group">
				<span class="label label-default">Fecha de Nacimiento</span>
				<input type="date" name="fecha_naciemiento" placeholder="Fecha de Nacimiento" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="direccion" placeholder="Direccion" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="cuidad" placeholder="Cuidad" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="codigo_postal" placeholder="Codigo Postal" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="pais" placeholder="Pais" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="text" name="horarios" placeholder="Horarios" class="form-control" required>
			</div>

			<div class="form-group">
				<h6>Datos Usuario</h6>
				<input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="email" name="email" placeholder="Email" class="form-control" required>
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