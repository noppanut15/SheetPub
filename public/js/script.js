$(document).ready(function () {

/*-- Rate --*/

/*-- Rate --*/


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

$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);


$(window).bind('scroll',function(e){
  parallaxScroll();
 });

/*--
$(window).mousemove(function(event) {
	$(".move_icon").css({"left" : event.pageX * 0.1, "top" : event.pageY * 0.1});
});
--*/

var $root = $('html, body');
$('a').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });
    return false;
});


function parallaxScroll(){
	var scrolled = $(window).scrollTop();
		
		//*-- STEP ONE --*//
		var sec1 = $("#step_1").offset().top();
		var sec2 = $("#step_2").offset().top();
		var sec3 = $("#step_3").offset().top();
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


		$('.chalk_right').css
		({
			/*--'top':(60-(scrolled*.100))+'%',--*/
		});

		$('.bbonweb').css({
			'top':(0-(scrolled*.300))+'px',
		});
		



		$('.slogan').css
		({
			/*-- transform: 'scale('+(1-scrolled/500)+')', --*/
		});
  	/*--

  	Parallax Level
  	scrolled*.5
	scrolled*.75
	crolled*.9

	--*/
}




});
