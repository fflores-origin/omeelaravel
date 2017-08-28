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
					<option value="">Escuela</option>
					@if(!$escuelas->isEmpty())		
						

					@endif

			    </select>
			</div>
			<div align="center">
				<input type="submit" class="btn btn-pink btn-block col-md-6" name="store" value="Agregar">
			</div>
			</form>
		</div>
	</div>


</div>

@stop