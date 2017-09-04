@extends('_shared.layout', ['title'=>'Examenes'])

@section('contenido')

	<div align="center" class="title-form">
		<h3>Certificaciones Disponibles</h3>
	</div>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Certificado</th>
      <th>Intentos</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @forelse($data as $e)
    <tr>
      <td>{{ $e->id }}</td>
      <td>{{ $e->certificado->name }}</td>
      <td>{{ $e->intentos }}</td>
      <td><a href="{{ route('examen', $e->id) }}">Iniciar Examen</a></td>
      </tr>
    @empty
    <tr>
      <td>No hay Examenes dispinibles. Contacte con su escuela.</td>
    </tr>
    @endforelse
      
      


  </tbody>
</table>



	
   
</div>



@stop