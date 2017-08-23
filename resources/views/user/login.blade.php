@include('_shared.header-public',['title'=>'Ingresar'])



<div class="form">

	<div align="center" class="title-form">
		<h3>Ingresar</h3>
	</div>
	<div class="container">
		<div class="col-md-6 form-group mx-auto">
			
						
			
			<form id="login" action="user/login" method="post" >
				
			<div class="customInput">
				<input name="usuario" placeholder="Usuario ..." class="form-control"></input>
			</div>

			<div class="customInput">
				<input name="usuario" placeholder="Contraseña ..." class="form-control"></input>
			</div>			

			<div style="margin-top: 10px; font-size: 16px;" class="form-group">
			    <label class="form-check-label custom-control custom-checkbox"> 
			    	<input class="form-check-input" type="checkbox" class="custom-control-input">&nbsp;Recordarme
			    </label>
			</div>

			<div class="form-group form-inline">
					<input type="submit" class="btn btn-block btn-pink" id="btnlogin" name="userlogin" value="Ingresar"></input>
					<input type="button" class="btn btn-block" id="register" value="Registrarse"></input>
			</div>
			<div class="form-group" align="center">
				<a href="#" style="font-size: 13px;">¿Perdiste tu contraseña?</a>
			</div>		

			</form>
		</div>
	</div>
   
</div>




@include('_shared.footer-public')