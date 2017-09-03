@extends('_shared.admin-layout', ['title'=>'Usuarios'])

@section('contenido')

<div class="container">
<h2>Usuarios</h2>


<table class="table">
	<thead>
	<tr>
		<th>ID</th>
		<th>Usuario</th>
		<th>Email</th>
		<th>Roles</th>
		<th>Acciones</th>
	</tr>

	</thead>
	<tbody>
		@forelse($users as $u)
			<tr>
				<td>{{ $u->id }}</td>
				<td>{{ $u->name }}</td>
				<td>{{ $u->email }}</td>
				<td>
				<ul>
					
					@forelse($u->roles as $r)
						 <li>{{ $r->key }}</li>
					@empty
						<li>No tiene roles</li>
					@endforelse
				</ul>
				</td>
				<td></td>
			</tr>
		@empty
		<tr>
			<td>No hay Usuarios</td>
		</tr>
		@endforelse
	</tbody>
</table>
	
</div>

@stop