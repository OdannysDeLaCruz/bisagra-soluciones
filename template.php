<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="shortcut icon" href="{{asset('favicon.png')}}" />
	<link rel="icon" sizes="192x192" href="{{asset('favicon.png')}}">

	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/media-querys.css')}}">
	<title>{{ config('app.name', 'Laravel') }} | @yield('titulo')</title>
</head>
<body>
	
@section('menu-principal')
	<!-- INICIO DE HEADER PRINCIPAL -->
	<header class="header_principal">
		<figure>
			<a href="{{ url('/') }}">
				<img src="{{asset('img/iconos/svg/logo.svg')}}" alt="Bisagra | Solución inmediata">	
			</a>
		</figure>
		<nav class="nav_principal">
			<span class="fa fa-times cerrar_menu"></span>
			<ul>
				<li><a href="/">Inicio</a></li>
				<li><a href="/nosotros.php">¿Que hacemos?</a></li>
				<li><a href="/areas.php">Áreas</a></li>
				<li><a href="/trabajadores">Trabajadores</a></li>
				<li><a href="/contacto">Contactar</a></li>
			</ul>
		</nav>
		<span class="fa fa-bars abrir_menu"></span>
	</header>
	<!-- FIN DE HEADER PRINCIPAL -->
@show

@yield('buscar_trabajador')
	
@yield('areas')

@yield('beneficios')
	
@yield('trabajadores')

@yield('login')
@yield('register')
	
@section('footer')
	<footer>
		<section class="footer_contenedor row">
			<div class="col-xs-12 col-sm-4 footer_section">
				<h1 class="footer_titulo">Conectate con Bisagra</h1>
				<ul>
					<li class="footer_item_link"><a href="/contacto">Contactar</a></li>
					<li class="footer_item_link"><a href="/soporte">Soporte al Cliente</a></li>
					<li class="footer_item_link"><a href="/terminos">Terminos y condiciones</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 footer_section">
				<h1 class="footer_titulo">Nuestro Equipo</h1>					
				<ul>
					<!-- <li class="footer_item_link"><a href="">Conoce nuestro equipo</a></li> -->
					<li class="footer_item_link"><a href="/areas">Areas</a></li>
					<li class="footer_item_link"><a href="/trabajadores">Trabajadores</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 footer_section">
				<h1 class="footer_titulo">Redes Sociales</h1>
				<ul>
					<li class="footer_item_link">
						<span class="fa fa-facebook"></span> Facebook
						<a class="link" href="https://www.facebook.com/"></a>
					</li>
					<li class="footer_item_link">
						<span class="fa fa-twitter"></span> Twitter
						<a class="link" href="https://www.twitter.com/"></a>
					</li>
					<li class="footer_item_link">
						<span class="fa fa-instagram"></span> Instagram
						<a class="link" href="https://www.instagram.com/"></a>
					</li>
					<li class="footer_item_link">
						<span class="fa fa-phone"></span> Teléfono
					</li>
				</ul>
			</div>
		</section>
	</footer>
@show

@section('script-js')
    <!-- Primer jQuery, luego Popper.js, luego Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="{{asset('js/mi-app.js')}}"></script>
@show
    
</body>
</html>