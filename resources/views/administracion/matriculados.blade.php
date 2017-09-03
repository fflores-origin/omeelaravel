@extends('_shared.admin-layout', ['title'=>'ADMIN - Matriculados'])

@section('contenido')

<div class="container">



<h2>Registrados 
@if(auth()->user()->hasRoles(['escuela']))
 - Escuela : {{ auth()->user()->nombre_escuela}}
@endif
</h2>

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
				<td>{{ $al->user->nombre }}</td>
				<td>{{ $al->user->apellido }}</td>
				<td>{{ $al->dni }}</td>
				<td>
					<ul>
						@forelse($al->certificados as $cert)
							<li>{{ $cert->name }}</li>		
						@empty
							<li> Sin Certificados </li>
						@endforelse
					</ul>
				</td>
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