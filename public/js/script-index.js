$(document).ready(function () {

/*-- INDEX.HTML --*/

$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

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

$(window).bind('scroll',function(e){
  parallaxScroll();
 });


function parallaxScroll(){
	var scrolled = $(window).scrollTop();

		$('.bbonweb').css({
			'top':(0-(scrolled*.300))+'px',
		});
}



});
