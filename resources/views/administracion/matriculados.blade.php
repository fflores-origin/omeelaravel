@extends('_shared.admin-layout', ['title'=>'ADMIN - Matriculados'])

@section('contenido')

<div class="container">


@if ( session()->has('info') )
	<div class="container">
			<div class="alert alert-success" role="alert">
				<div class="container">
					<div class="row" style="font-size: 16px;">      
						<strong>¡ Felicidades ! </strong>&nbsp; {!! session('info') !!}
			    	</div>
				</div>
			</div>		
	</div>

@endif

<h2>Registrados 
@if(auth()->user()->hasRoles(['escuela']))
 - Escuela : {{ auth()->user()->nombre_escuela}}
@endif
</h2>

<br>
<table class="table">
	<thead>
		<tr>
			<th>Matricula-ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>DNI</th>
			<th>Certificados</th>
			<th>Acciones</th>
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
				<td><a class="btn btn-primary btn-sm" href="{{ route('admin-certificar', $al->id )}}">Examen</a></td>
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