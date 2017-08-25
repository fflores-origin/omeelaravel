@extends('_shared.layout', ['title'=>'Agregar Escuela'])

@section('contenido')


<div align="center" class="title-form">
		<h3>Registrar Escuela</h3>
</div>

<div class="container">
	
	<form action="{{ url('escuela')}}" method="post"> 
		{!! csrf_field() !!}
		<input type="submit" name="Registrar">
	</form>

</div>


@stop