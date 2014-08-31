jQuery(document).ready(function($) {
	$('.dark-toggle').click(function() {
		$('body').toggleClass('dark');

		if ( $('body').hasClass('dark') ) {
			$('.featured-header').attr("src", "images/foxglove/header-foxtail.jpg");
			$('.logo').attr("src", "images/foxglove/logo-foxtail.png");
		} else {
			$('.featured-header').attr("src", "images/snapdragon/header-about.jpg");
			$('.logo').attr("src", "images/snapdragon/logo-snapdragon.png");
		}
	});

	var home_width = 0;
	var home_position = 60;
	
	if ( $('.nav .selected').length ) {
		home_width = $('.nav .selected a').width();
		home_position = $('.nav .selected a').position().left + 10;
		$('.nav .selected').removeClass('selected');
		$('.underline').css({ left: home_position, width: home_width });
	}

	$('.nav .menu-item').hover(function(){
		var width = $(this).width();
		var position = $(this).position().left + 10;
		$('.underline').stop(false, false).animate({ left: position, width: width }, 300);
	}, function(){
		$('.underline').stop(false, false).animate({ left: home_position, width: home_width }, 300);
	});
});