( function( $ ) {
	
	

	// Note: Live Photo Kt: https://developer.apple.com/documentation/livephotoskitjs
	
	// Splash Animation
	$(document).ready(
		function() {
			var navbarTop = $('#navbar').css('top');

			$('#splashContent').delay(2100).fadeOut();
			// Anim 1
			//$('#splash').delay(2500).animate({'height':'90px', 'top':navbarTop},800).animate({'width':'0px'},800).fadeOut();
			// Anim 2
			$('#splash').delay(2500).animate({'height':'90px', 'top':navbarTop},1200).fadeOut();
			// Fade
			//$('#splash').delay(2100).fadeOut(1200);
		}
	);

	function navbarFixed() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("navbarFixed");
		} else {
			navbar.classList.remove("navbarFixed");
		}
	}

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;
	window.onscroll = function() { navbarFixed(); };

	
	
	// Menu
	$('#navigation').click(function() {
		$('#nav').fadeToggle();
	});

	if($('#burgerBtn').is(':visible')) {
		$('#nav').hide();
	}

	//$('#splash').hide();


	
} )( jQuery );
