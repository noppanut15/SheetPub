$(document).ready(function () {

/*-- Menu All Page --*/

$('.menu_respon').click(function(event) {
	/* Act on the event */
	$('#h-menu ul li').toggleClass('display-on');
});

$('.profile_menu button i').click(function(event) {
	/* Act on the event */
	$('.menudrop_user').toggleClass('display-on');
});

$('.category_menu').click(function(event) {
	/* Act on the event */
	$('.arrow-up').toggleClass('display-on');
	$('.arrow-down').toggleClass('display-off');
	$('#menu ul li ul').toggleClass('display-on');
});


});
