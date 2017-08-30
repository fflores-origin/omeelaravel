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

<?php function activeMenu($url){
		return request()->is($url) ? 'active' : '';
	}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size: 14px; margin-bottom: 20px;">
  <a class="navbar-brand" href="#">OMEE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link {{ activeMenu('/') }}" href="{{ route('/') }}">Volver al Sitio <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ activeMenu('admin/profesionales') }}" href="{{ route('admin-profesionales')}}">Matriculados</a>
	     </li>
		<li class="nav-item">
			<a class="nav-link {{ activeMenu('admin/certificados') }}" href="{{ route('admin-certificados') }}">Certificados</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ activeMenu('admin/examenes') }}" href="{{ route('admin-examenes') }}">Examenes</a>
		</li>
		@if(auth()->user()->hasRole('admin'))
		<li class="nav-item">
			<a class="nav-link {{ activeMenu('admin/usuarios') }}" href="{{ route('admin-usuarios') }}">Usuarios</a>
		</li>
		@endif
		</ul>
		<div class="form-inline my-2">
	      	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item">
					<a class="nav-link" href="#">{{ auth()->user()->perfil }}</a>
				</li>
	      	</ul>
	    </div>
  </div>
</nav>

@yield('contenido')


</body>
</html>