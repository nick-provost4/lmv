$(document).ready(function(){

	$(".container").toggleClass("showgrid");

	$(".toggle-grid").click( function( event ) {
		$(".container").toggleClass("showgrid");
		$("#header").toggleClass("hbground");
		$("#content").toggleClass("cbground");
		$("#footer").toggleClass("fbground");
	});

});