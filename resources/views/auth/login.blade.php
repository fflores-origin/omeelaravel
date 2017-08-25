@extends('_shared.layout', ['title'=>'Ingresar'])

@section('contenido')


<div class="form">

	<div align="center" class="title-form">
		<h3>Ingresar</h3>
	</div>
	<div class="container">
		<div class="col-md-6 form-group mx-auto">
			
						
			
			<form action="login" method="post" >
				{!! csrf_field() !!}
				<div class="customInput">
					<input type="email" name="email" placeholder="Usuario" class="form-control"></input>
				</div>

				<div class="customInput">
					<input type="password" name="password" placeholder="password" class="form-control"></input>
				</div>			

				<div style="margin-top: 10px; font-size: 16px;" class="form-group">
				    <label class="form-check-label custom-control custom-checkbox"> 
				    	<input class="form-check-input" type="checkbox" class="custom-control-input">&nbsp;Recordarme
				    </label>
				</div>

				
				<input type="submit" class="btn btn-block btn-pink col-md-12 " value="Ingresar"></input>
				<input type="button" class="btn btn-block col-md-12" value="Registrarse"></input>
					
			</form>
			<br>
			<div class="form-group" align="center">
				<a href="{{ url('reset') }}" style="font-size: 13px;">¿Perdiste tu contraseña?</a>
			</div>		

		</div>
	</div>
   
</div>



@stop