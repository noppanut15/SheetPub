$(document).ready(function () {
/*-- INDEX --*/
$(window).bind('scroll',function(e){
  parallaxScroll();
 });

function parallaxScroll(){
	var scrolled = $(window).scrollTop();
		
		//*-- STEP ONE --*//
		var sec1 = $("#step_1").offset().top;
		var sec2 = $("#step_2").offset().top;
		var sec3 = $("#step_3").offset().top;
    	if (scrolled >= sec1-50) {
    		$('.instepONE').css({ opacity: 1 });
    		$('.number_step1').addClass('animated bounceInUp');
			$('.instepONE h1').addClass('animated bounceInUp');
			$('.instepONE h2').addClass('animated bounceInUp');
			$('.button_bg').addClass('animated bounceInUp');
			$('.next_step').addClass('animated bounceInUp')
		}else{}

		if (scrolled >= sec2-50) {
    		$('.instepTWO').css({ opacity: 1 });
			$('.instepTWO h1').addClass('animated bounceInUp');
			$('.instepTWO h2').addClass('animated bounceInUp');
			$('.facebook').addClass('animated bounceInUp');
			$('.twitter').addClass('animated bounceInUp');
			$('.google-plus').addClass('animated bounceInUp');
			$('.number_step2').addClass('animated bounceInUp');
			$('.next_step_2').addClass('animated bounceInUp')

		}else{
			/*--$('#step_2').removeClass('changed');--*/
		}

		if (scrolled >= sec3-50) {
    		$('.movestep3').css({ opacity: 1 });
			$('.movestep3').addClass('animated bounceInUp');
		}else{
			/*--$('#step_2').removeClass('changed');--*/
		}
}




});
