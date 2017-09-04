<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    
	<!-- ICON PAGE -->
	<link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
	<link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>

	<!-- Resoureces -->



	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css">
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">	
	<link rel="stylesheet" href="{{ URL::asset('css/styleOmee.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/omee-forms.css') }}">	
	<script type="text/javascript" src="{{ URL::asset('/js/cookieTool.js') }}"></script>

</head>
<body>
<header id="site-header">


@if(auth()->check())

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 30px;">
  <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ URL::asset('favicon.ico') }}" height="15px"> OMEE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    @if(!auth()->user()->hasRoles(['alumno']))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin-index')}}">Administración <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin-profesionales')}}">Matriculados</a>
      </li>
     @endif
    </ul>
    <div class="form-inline my-2">
	      	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item">
					<a class="nav-link" href="#" style="color:#ff2b99;">{{ auth()->user()->getUserName() }}</a>
				</li>
	      	</ul>
	    </div>
  </div>
</nav>


@endif


		<!--COOKIE TOP BAR -->
		<div id="top-bar-wrap" >
			<div id="top-bar" class="container" style="margin-top: 10px;">
				<div id="top-bar-content" class="top-bar-centered">
				Este sitio utiliza cookies para asegurarte la mejor experiencia mientras navegas por la plataforma.
				Si continúas, asumimos que esto no te supone ningún problema. <button  id="closeCookies" onclick="hideTopBar()" type="button" style="float: right;">&times</button><br/>Para más información sobre nuestra Política de Cookies, <a href="{{ url('/politicas')}}">haz click aquí</a>
				</div>
			</div>
		</div>
		<!--COOKIE TOP BAR -->

		<!-- LOGO -->
		<div id="site-header-inner" class="container align-center">
			<div id="site-logo" class="site-branding header-three-logo col-lg-12 col-md-6 top-bar-centered">
				<div id="site-logo-inner" class="clr">
					<a href="{{ url('/') }}" title="OMEE" rel="home" class="main-logo" style="max-widht:900px;">
						<img src="{{ URL::asset('images/cabezal.png') }}" alt="OMEE">
					</a>
				</div>
			</div>
		</div>
		<!-- LOGO -->

		<!-- NAV 1 -->
		<div class="firstnav">
			<div class="navbar-style">
				<nav id="site-navigator ">
					<ul class="navbar first-ul container">
						<li><a href="{{ url('profesionales')}}"><span>Matriculados</span></a></li>
						<li><a href="{{ route('prof-create')}}"><span >Matricular Alumnos</span></a></li>
						<li><a href="{{ route('certificados') }}"><span >Certificarme en OMEE</span></a></li>
						<li><a href="{{ route('escuelas') }}"><span >Escuelas de Belleza</span></a></li>
						<li><a href="{{ route('escuelas.create') }}"><span >Agregar Mi Escuela</span></a></li>
						<li><a href="#"><span >Ser Auspiciante</span></a></li>
						<li><a href="#"><span >Bolsa de Trabajo</span></a></li>
						<li><a href="{{ url('contacto')}}"><span >Contacto</span></a></li>
						<li>
							@if (auth()->check())
								<a href="{{ url('logout') }}"><span ><span class="fa fa-sign-out fa-lg"></span></span></a>
							@endif
							@if (auth()->guest())
								<a href="{{ url('login') }}"><span ><span class="fa fa-sign-in fa-lg"></span></span></a>
							@endif	
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- NAV 1 -->

		<!-- NAV 2 -->
		<div class="secondnav">

				<nav class="container">
					<div class="navbar-toggeable-md container" style="max-width:90%">
						<a href="{{ url('/categoria/actualidad')}}" title="Actualidad">Actualidad</a>
						<a href="{{ url('/categoria/colorimetria')}}" title="Colorimetría">Colorimetría</a>
						<a href="{{ url('/categoria/entrevistas')}}" title="Entrevistas">Entrevistas</a>
						<a href="{{ url('/categoria/estetica')}}" title="Estética">Estética</a>
						<a href="{{ url('/categoria/peinados')}}" title="Peinados">Peinados</a>
						<a href="{{ url('/categoria/tendencia')}}" title="Tendencia">Tendencia</a>
					</div>
				</nav>

		</div>
		<!-- NAV 2 -->
</header>

<body>

@yield('contenido')



<footer id="footer-bottom" class="footer" align="center">
	<div id="footer-bottom-inner" class="container">
	<p>
		Copyright <a href="{{ url('/') }}"> OMEE </a> - Todos los Derechos Reservados | <a href="{{ url('/') }}">Legales</a> | <a href="{{ url('politicas') }}">Política de Cookies</a>
	</p>
					
		
	</div>
</footer>


</body>
</html>