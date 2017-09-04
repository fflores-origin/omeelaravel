@extends('_shared.admin-layout', ['title'=>'Generar examen'])

@section('contenido')
	<div class="container">
		
		<h3>Examen</h3>
		<div class="row" style="padding: 30px 0;">
			<div class="col-md-2"><strong>Alumno : </strong></div> 
			<div class="col-md-6">{{ $alumno->user->nombre }} {{ $alumno->user->apellido }}</div>
		</div>

		
		<form action="{{ route('examen-save') }}" method="post">
		{!! csrf_field() !!}

		<input type="hidden" name="alumno_id" value="{{$alumno->id}}">
		<div class="row" >
			<div class="col-md-2"><strong>Certificado : </strong></div> 
			<div class="col-md-6">
			<select name="certificado_id" class="custom-select">
				<option selected>Seleccionar certificado</option>

				@foreach($certificados as $c)
					<option value="{{ $c->id }}">{{ $c->name}}</option>
				@endforeach
			</select>
			 </div>
		</div>

		<div class="row" style="padding: 30px 10px;">

			<button type="submit" class="btn btn-primary">Generar</button>
			
		</div>	
		</form>


	</div>


@stop