@extends('_shared.layout', ['title'=>'Profesionales'])

@section('contenido')

<style type="text/css">
	.card-link 
	{
		clear: both;	
	}

	.card-link
	{
		font-size: 19px;
		padding-top: 30px;
		padding-bottom: 2px;
		color: black;
	}



	.card {
		padding: 30px;
	}

</style>

<div align="center" class="title-form">
		<h3>Matriculados</h3>
</div>	

<div class="container" style="padding: 0 70px;">

@if(!$data->isEmpty())

<div class="card-columns">
@foreach($data as $e)
	<div class="card">
		<div align="center"> 
			<img src="http://omee.hol.es/wp-content/uploads/2016/04/omee_logo.jpg" width="140" height="140" alt="">
		</div>
	 <div align="center">
	   		<a href="{{ route('profesional', $e->id ) }}" class="card-link">{{ $e->user->nombre }} {{ $e->user->apellido }}</a>		
	  </div>	
	</div>

@endforeach

</div> {{-- cards --}}

@else

	<h3>No hay alumnos cargadas</h3>

@endif

</div>

@stop