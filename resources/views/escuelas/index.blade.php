@extends('_shared.layout', ['title'=>'Escuelas'])

@section('contenido')


<style type="text/css">
	.card-inside {
		margin: 10px;
	}

	.card-separator {
		border-bottom: 1px #eee solid; 
		margin: 0 10px;
	}

	.card-title {
		font-weight: 900;
	}
	.card {
		max-width: 300px;
	}
	.more {
		height: 40px;
		font-size: 18px;
	}

	.more :hover {
		color:#ff2b99;
	}

	.ishidden {
		max-height: 120px;
	}

</style>

<div align="center" class="title-form">
		<h3>Escuelas</h3>
</div>	

<div class="container">

@if(!$data->isEmpty())

<div class="card-deck">
@foreach($data as $e)
	<div class="card ishidden">
		<div align="center" class="card-inside card-title"> 
			<h5>{{ $e->nombre_escuela }}</h5>
		</div>
	 <div class="card-block">
		 <div class="card-data" hidden>
		 	<div class="card-separator"></div>
			
			<div class="card-inside">
		   		<strong>Responsable</strong> : {{ $e->user->nombre }} {{ $e->user->nombre }}	
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

		<div class="more" align="center">
			<i class="fa fa-arrow-down" aria-hidden="true"></i>
		</div>

	  </div>	
	</div>

@endforeach
</div> {{-- cards --}}
@else

	<h3>No hay escuelas cargadas</h3>

@endif
</div>

<script>
	$('.more').click(function() {

		var card = $(this.parentElement.parentElement)

		var data = $(card).find('.card-data');

		var attr = $(data).attr('hidden');

		if (attr && attr !== false){
			data.removeAttr('hidden');
			card.removeClass('ishidden');
		}
		else {
			data.attr('hidden','hidden');
			card.class('ishidden');
		}

		

	});
		
</script>


@stop