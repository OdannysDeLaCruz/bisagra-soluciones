$(document).ready(function(){

	// EFECTOS DEL MENÚ

	$('.abrir_menu').on( 'click', function() {
    	$('.nav_principal').css("left", "0%");
	});
    $('.cerrar_menu').on('click', function(){
    	$('.nav_principal').css("left", "-100%");
    });

    // ACTIVAR LOS ELEMENTOS DEL PERFIL
    
    $('#link_1').on('click', function(){
    	$('#link_1').addClass("link_active");
    	$('#link_2').removeClass("link_active");

    	$('#elemento_1').addClass("activar_contenedor");
    	$('#elemento_2').removeClass("activar_contenedor");
    });
    $('#link_2').on('click', function(){
    	$('#link_2').addClass("link_active");
    	$('#link_1').removeClass("link_active");

    	$('#elemento_2').addClass("activar_contenedor");
    	$('#elemento_1').removeClass("activar_contenedor");
    });

    //MOSTRAR MODAL DE DETALLES

    $('.btn_cerrar_modal').on('click', function(){
    	$('.contenedor_modal').css("display","none");
    	$('body').css("overflow","auto");
    });

    //ABRIR MENU DE PERFIL 
     $('#menu_perfilDropdown').on('click', function(){
        $('.menu_perfil').toggleClass("menu_perfil_active");
    }); 
});