@extends('_shared.layout', ['title'=>'Examen'])

@section('contenido')

	<div align="center" class="title-form">
		<h3>Examen : {{ $examen->certificado->name}}</h3>
	</div>
	<div class="container" style="padding-top: 5px; padding-bottom: 10px;">
		<div class="col-md-7 mx-auto">
			<ul class="list-group">
				<li class="list-group-item list-group-item-warning"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Marcar la opción que crea correcta</li>
			</ul>
			<ul class="list-group">
				<li class="list-group-item list-group-item-warning"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Debe completar al menos una de cada pregunta</li>
			</ul>
			<ul class="list-group">
				<li class="list-group-item list-group-item-warning"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> El examen se aprueba superando los 70 puntos</li>
			</ul>
		</div>
	</div>

<div class="container col-md-6" style="padding-top: 20px">
	
	<form action="{{route('examinar')}}" method="POST">

	{{ csrf_field() }}

		@foreach($examen->preguntas as $p)
			<div class="form-group">
				<h5>¿{{$p->pregunta}}? <small style="color:orange;"> Puntos : {{$p->valor}}</small></h5>
				
				@foreach($p->respuestas as $r)

				 <div class="form-check">
      				<label class="form-check-label">
        			<input type="radio" class="form-check-input" name="{{$p->id}}" value="{{$r->id}}">
        			{{$r->respuesta}}
      				</label>
    				</div>

				@endforeach
				
			</div>

		@endforeach
		<br>
		<div class="col-md-6 mx-auto">
			<button type="submit" class="btn btn-pink btn-block">Evaluar</button>
		</div>
		<br>
	</form>

</div>


@stop