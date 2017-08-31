@extends('_shared.layout', ['title'=>'Profesionales'])

@section('contenido')

<div align="center" class="title-form">
		<h3>Matriculados</h3>
</div>	

<div class="container">

@if(!$data->isEmpty())

<div class="card-columns">
@foreach($data as $e)
	<div class="card">
		<div align="center" class="card-inside card-title"> 
			<h5>{{ $e->nombre_escuela }}</h5>
		</div>
  		<div class="card-separator"></div>
	 <div class="card-block">
		<div class="card-inside">
	   		<strong>Responsable</strong> : {{ $e->nombre }} {{ $e->nombre }}	
		</div>
		<div class="card-inside">
	   		<strong>Direccion</strong> : {{ $e->direccion }}	
		</div>
		<div class="card-inside">
	   		<strong>Codigo Postal</strong> : {{ $e->codigo_postal }}	
		</div>
		<div class="card-inside">
	   		<strong>Provincia</strong> : {{ $e->provincia }}
		</div>
		<div class="card-inside">
	   		<strong>Pais</strong> : {{ $e->pais }}	
		</div>
		<div class="card-inside">
	   		<strong>Telefono</strong> : {{ $e->telefono }}	
		</div>
		<div class="card-inside">
	   		<strong>Email</strong> : {{ $e->user->email }}
		</div>
	  </div>	
	</div>

@endforeach
</div> {{-- cards --}}
@else

	<h3>No hay alumnos cargadas</h3>

@endif
</div>


	


@stop