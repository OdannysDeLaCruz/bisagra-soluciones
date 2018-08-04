<!--INICIO DE PERFIL -->
<section class="perfil row">
	<div class="col-xs-12 col-md-8 perfil_datos">
		<figure>
			@yield('foto_perfil')
		</figure>
		<section class="perfil_datos_info">
			@yield('info')			
		</section>
	</div>
	<div class="col-xs-12 col-md-4 perfil_solicitar">
		@yield('boton-solicitar')			
	</div>
</section>
<!-- FIN DE PERFIL -->
<!-- INICIO DE INFORMACION PERFIL -->
<div class="contenedor_principal_perfil">		
	<section class="contenedor row">
		<nav class="contenedor_nav col-xs-12 col-md-3">
			<ul class="contenedor_nav_links">
				<!-- Aqui van los elementos li -->
				@yield('link_1')
				@yield('link_2')				
			</ul>
		</nav>
		<section class="contenedor_info col-xs-12 col-md-9">
			@yield('elemento_1')
			
			@yield('elemento_2')
		</section>
	</section>
</div>
<!-- FIN DE INFORMACION PERFIL