

@extends('_shared.layout', ['title'=> 'Profesional'])

@section('contenido')


<style type="text/css">
	.profile-pic
	{
		max-width: 200px;
		max-height: 200px;
	}

	.title-profile 
	{
		font-weight: 900;
		padding: 20px;
	}

	.data-container
	{
		padding: 0 60px;
	}
	.data-name, .data-value
	{
		padding: 10px 0;
	}
	.data-name {
		border-bottom: 2px solid #D8D8D8;
	}
	.data-item 
	{
		padding: 0 20px;
	}

</style>

<div class="container">
	<div class="col" align="center">
		<img src="http://omee.hol.es/wp-content/uploads/2016/04/omee_logo.jpg" class="profile-pic">
		<div class="title-profile">
				<h3>{{ $alumno->user->nombre }} {{ $alumno->user->apellido }}</h3>
		</div>
	</div>
	
<hr>
<div class="container" style="font-size: 16px;">
	
	{{-- Data alumno --}}
	<div class="row data-container" >

		<div class="col-md-6">
		
			<div class="row data-item">
				<div class="col data-name"><strong> DNI</strong></div>
				<div class="w-100"></div>
				<div class="col data-value" > {{ $alumno->dni }}</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="row data-item">
				<div class="col data-name"><strong> Matricula</strong></div>
				<div class="w-100"></div>
				<div class="col data-value" > {{ $alumno->id }}</div>
			</div>
		</div>

	</div>
	<hr>

	{{-- CERTIFICADOS --}}
	<div class="title-profile" align="center"><h4>Certificados Obtenidos</h4></div>
	<div class="row" align="center">



		@forelse($alumno->certificados as $cert)
			<div class="col data-item" align="center"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp; {{ $cert->name }}</div>
			<div class="w-100"></div>	
		@empty
			<div class="col"> Sin Certificados </div>
		@endforelse

	</div>
<div style="padding-bottom: 50px;">
	
</div>
</div>







</div>


@stop