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

	$('.hamburger-button').click(function() {
		var target = $($(this).attr('data-target'));
		var speed = 200;

		$(this).toggleClass('open');

		if ( $(this).hasClass('open') ) {
			$(target).slideDown(speed);
			$('.icon-close').show();
			$('.icon-hamburger').hide();
		} else {
			$(target).slideUp(speed);
			$('.icon-close').hide();
			$('.icon-hamburger').show();
		}
	});

	var home_width = 0;
	var home_position = 60;
	
	if ( $('.nav .current-menu-item').length ) {
		home_width = $('.nav .current-menu-item a').width();
		home_position = $('.nav .current-menu-item a').position().left + 10;
		$('.nav .current-menu-item').removeClass('current-menu-item');
		$('.underline').css({ left: home_position, width: home_width });
	}

	$('.nav .menu-item').hover(function(){
		var width = $(this).width();
		var position = $(this).position().left + 10;
		$('.underline').stop(false, false).animate({ left: position, width: width }, 400);
	}, function(){
		$('.underline').stop(false, false).animate({ left: home_position, width: home_width }, 400);
	});

	function setFooterPosition(){
		var winHeight 		= $(window).height();
		var headerHeight	= $('.bg-header').outerHeight();
		var contentHeight 	= $('body > .wrapper').outerHeight();
		var footerHeight	= $('.bg-footer').outerHeight();
			
		if (winHeight > (headerHeight + contentHeight + footerHeight)) {
			$('body > .wrapper').css('min-height', winHeight - headerHeight - footerHeight - 40);
		}
	}
	setFooterPosition();
	$(window).resize(function() { setFooterPosition(); });
});