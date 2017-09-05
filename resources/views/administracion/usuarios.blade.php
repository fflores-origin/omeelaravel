@extends('_shared.admin-layout', ['title'=>'Usuarios'])


@section('refs')

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

@stop

@section('contenido')

<div class="container">
<h2>Usuarios</h2>


<table class="table" id="table">
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
				<td>
					<button type="button" class="btn btn-primary btn-sm">Roles</button>
					<button type="button" class="btn btn-danger btn-sm">Desactivar</button>
				</td>
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

@section('scripts')
<script>
		
    $('.table').DataTable();

</script>


@stop