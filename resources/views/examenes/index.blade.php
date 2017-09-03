@extends('_shared.layout', ['title'=>'Examenes'])

@section('contenido')

	<div align="center" class="title-form">
		<h3>Certificaciones Disponibles</h3>
	</div>

<div class="container">

@if($data == null)

	


@endif

<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Certificado</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">x</th>
      <td>{{ 'nombre' }}</td>
      <td><a href="#">Iniciar Examen</a></td>

    </tr>

  </tbody>
</table>



	{{ $data }}
   
</div>



@stop