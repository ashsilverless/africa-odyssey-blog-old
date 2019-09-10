jQuery(document).ready(function( $ ) {

/* ADD CLASS ON LOAD*/

    $("html").delay(100).queue(function(next) {
        $(this).addClass("loaded");

        next();
    });

/* ADD CLASS ON SCROLL*/

	$(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    });
   
/* SMOOTH SCROLL TO ANCHOR */

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 1000);
			return false;
		}
	});

/* CLASS AND FOCUS ON CLICK */

    $(".where").click(function(event) {
        $('.where-wrapper').siblings(".expand").removeClass("expand");
        $('.where-wrapper').addClass("expand");
    });

    $( ".where-wrapper" ).mouseout(function() {
        $(this).removeClass( "expand" );
    });

    $(".what").click(function(event) {
        $('.what-wrapper').siblings(".expand").removeClass("expand");
        $('.what-wrapper').addClass("expand");
    });

    $( ".what-wrapper" ).mouseout(function() {
        $(this).removeClass( "expand" );
    });

    $(".inspire").click(function(event) {
        $('.inspire-wrapper').siblings(".expand").removeClass("expand");
        $('.inspire-wrapper').addClass("expand");
    });

    $( ".inspire-wrapper" ).mouseout(function() {
        $(this).removeClass( "expand" );
    });

    $(".more").click(function(event) {
        $('.more-wrapper').siblings(".expand").removeClass("expand");
        $('.more-wrapper').addClass("expand");
    });

    //$( ".more-wrapper" ).mouseout(function() {
    //    $(this).removeClass( "expand" );
    //});

});//Don't remove ---- end of jQuery wrapper

