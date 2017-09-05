@extends('_shared.admin-layout', ['title'=>'Escuelas'])

@section('contenido')

	<style>
		.activo {
			color:green;
			font-weight: bold;
		}
		.inactivo 
		{
			color:red;
			font-weight: bold;
		}
	</style>



	<div class="container"> 

		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
    			<a class="nav-link active" data-toggle="tab" href="#escuelas" role="tab">Escuelas</a>
  			</li>

	  		<li class="nav-item">
    			<a class="nav-link" data-toggle="tab" href="#pedientes" role="tab">Pendientes de Aprobar</a>
  			</li>

		</ul>

		<!-- Tab panes -->
		<div class="tab-content">

		<div class="tab-pane active" id="escuelas" role="tabpanel">

			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Razon Social</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<td>1</td>
						<td>Rz</td>
						<td>Name</td>
						<td>asdfasdf@gmail.com</td>
						<td>
							<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-down" aria-hidden="true"></i> Desactivar</button>
						</td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="tab-pane" id="pedientes" role="tabpanel">
		  	<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Razon Social</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Rz</td>
						<td>Name</td>
						<td>asdfasdf@gmail.com</td>
						<td>
							<button type="button" class="btn btn-success btn-sm"><i class="fa fa-arrow-up" aria-hidden="true"></i> Activar</button>
						</td>
					</tr>
				</tbody>
			</table>

		  </div>

		</div>

	</div>


@stop