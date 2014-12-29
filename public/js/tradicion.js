$(document).ready(function() {

	//var path = 'http://192.168.0.11/webtradicionlocal/public';
	//var path = 'http://localhost/web/public';
	var path = 'http://mezcaldonaji.com';

	var url = window.location.pathname;
	var segmentos = url.split("/");
	var seccion = segmentos[segmentos.length -1];

	$(document).on('mouseover', '#vermenuproductos', function(e){
		e.preventDefault();
		$("#submenu").slideDown();
	});

	$(document).on('mouseleave', '#submenu', function(e){
		e.preventDefault();
		$("#submenu").slideUp();
	});

});
