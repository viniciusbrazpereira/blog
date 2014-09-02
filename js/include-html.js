$(document).ready(function() {  	
  	$( "#menu-banner" ).load( "include/menu-banner.html" );
  	$('a[href="' + this.location.pathname + '"]').parent('li').addClass('active');
}); 