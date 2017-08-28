<!DOCTYPE html>
<html>
<head>
@if($title) 
	<title>{{ $title }}</title>
@else
	<title>ADMIN</title>
@endif

	<!-- ICON PAGE -->
	<link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
	<link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">OMEE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="{{ route('/') }}">Volver al Sitio <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{ route('admin-profesionales')}}">Matriculados</a>
	     </li>
		<li class="nav-item">
			<a class="nav-link" href="#">Certificados</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Examenes</a>
		</li>
		</ul>
	<div class="form-inline my-2 my-lg-0">
      	<ul class="navbar-nav mr-auto">
      		<li class="nav-item">
			<span class="label label-default">Usuario</span>
			</li>
      	</ul>
    </div>
  </div>
</nav>



@yield('contenido')


</body>
</html>