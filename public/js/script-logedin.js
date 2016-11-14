$(document).ready(function () {
/*-- INDEX --*/
$(window).bind('scroll',function(e){
  parallaxScroll();
 });

function parallaxScroll(){
	var scrolled = $(window).scrollTop();
		
		//*-- STEP ONE --*//
		var sec3 = $("#step_3").offset().top;
		if (scrolled >= sec3-50) {
    		$('.movestep3').css({ opacity: 1 });
			$('.movestep3').addClass('animated bounceInUp');
		}else{
			/*--$('#step_2').removeClass('changed');--*/
		}
}




});
