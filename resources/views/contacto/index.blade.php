@extends('_shared.layout', ['title'=>'Contacto'])

@section('contenido')

<style type="text/css">
	.form-group label {
		font-size: 15px;
	}

	.btn {
		padding: 15px 60px;
	}

</style>


<div align="center" class="title-form">
	<h3>Contactenos</h3>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form method="POST" action="contacto">
				
				<div class="form-group">
					<label>Nombre y Apellido</label>	
    				<input type="text" class="form-control" name="apyn" required>
  				</div>

  				<div class="form-group">
  					<label for="msj">Correo de Contacto</label>
    				<input type="email" class="form-control" name="correo" placeholder="" required> 
  				</div>

  				<div class="form-group">
  					<label for="msj">Teléfono</label>
    				<input type="text" class="form-control" name="telefono" required>
  				</div>

  				<div class="form-group">
  					<label for="msj">Su Mensaje</label>
    				<textarea  rows="10" class="form-control" id="msj" name="mensaje" required></textarea>  
  				</div>
  				<button type="submit" class="btn btn-pink ">Enviar Consulta</button>

			</form>

		</div>
		<div class="col-md-6" style="font-size: 15px;">
		<div class="row">
			<div class="col-md-6">Teléfono:</div><div class="col-md-6">(054) 11.4624.3593</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">Móvil:</div><div class="col-md-6">(054) 9.11.6482.7358</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">Correo Eléctronico:</div><div class="col-md-6">info@omee.org</div>
		</div>

		<div>
		<br><br>
		<div class="alert alert-warning" role="alert">
			<div align="center"><h5>Legales</h5></div>
			<br><br>
  			Los certificados de la empresa  OMEE “organización mundial de escuelas de estilismo” son privados, los mismos no tienen carácter oficial ni local, pero sí registran a un profesional prestigioso que estudió con un sistema de estudio que se distribuye en distintos países del mundo logrando exitosos profesionales. Antes de comenzar con nuestros productos educativos Verifique la legislación de su país en relación a los cursos y certificados.  La empresa OMEE no se responsabiliza por estas cuestiones dado  que solo somos una  distribuidora privada de  material didáctico para las instituciones educativas.
		</div>
				
			
		</div>

		</div>
		

	</div>
</div>



@stop