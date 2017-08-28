@extends('_shared.admin-layout', ['title'=>'ADMIN - Matriculados'])

@section('contenido')

<div class="container">



<h2>Registrados</h2>

<br>
	
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>DNI</th>
			<th>Certificados</th>
		</tr>

	</thead>
	<tbody>
		@forelse($alumnos as $al)
			<tr>
				<td>{{ $al->id }}</td>
				<td>{{ $al->nombre }}</td>
				<td>{{ $al->apellido }}</td>
				<td>{{ $al->dni }}</td>
				<td><a href="#">Certificados</a></td>
			</tr>
		@empty
			<tr>
				<td> No hay alumnos que mostrar</td>
			</tr>
		@endforelse
	</tbody>
</table>




</div>

@stop