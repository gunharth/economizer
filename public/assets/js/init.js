$(function() {

// main gallery page
	if($('#container-press').length > 0) {
		var $containerPress = $('#container-press');
		function initIsotopePress() {
			var colwidth = $('.item').outerWidth(true);
			$containerPress.isotope({
				"itemSelector": ".item",
				masonry: { columnWidth: colwidth },
				onLayout: function() {
					$(window).trigger("scroll");
				}
			}
	
			);
		}
		initIsotopePress();
		$(window).resize(function() {
			initIsotopePress();
		});
		$(window).load(function() {
			initIsotopePress('reLayout');
		});
		$containerPress.on('mouseenter','.item', function () {
			//if($(this).hasClass('titlebox') === true) {
				//$(this).find('>img').css('opacity',0.25);
			//}
		})
		.on('mouseleave','.item', function () {
			//$(this).find('>img').css('opacity',1);
		})
		.on('click','.item',function(e) {
			var url = $(this).find('a').attr('href');
			if(url !== undefined) {
				window.location.href = window.location.href+url;
			}
		});
	}
		
	if($('#container-roles').length > 0) {
		var $containerRoles = $('#container-roles');
		function initIsotopeRoles() {
			var colwidth = $('.item').outerWidth(true);
			$containerRoles.isotope({
				"itemSelector": ".item",
				masonry: { columnWidth: colwidth },
				onLayout: function() {
					$(window).trigger("scroll");
				}
			}
	
			);
		}
		initIsotopeRoles();
		$(window).resize(function() {
			initIsotopeRoles();
		});
		$(window).load(function() {
			initIsotopeRoles('reLayout');
		});
		$containerRoles.on('mouseenter','.item', function () {
			//$(this).find('>img').css('opacity',0.25);
		})
		.on('mouseleave','.item', function () {
			//$(this).find('>img').css('opacity',1);
		})
		.on('click','.item',function(e) {
			var url = $(this).find('a').attr('href');
			if(url !== undefined) {
				window.location.href = window.location.href+url;
			}
		});
	}
// END gallery page


// single gallery page
	if($('#container').length > 0) {
		var $container = $('#container');
		function initIsotope() {
			var colwidth = $('.item').outerWidth(true);
			$container.isotope({
				"itemSelector": ".item",
				masonry: { columnWidth: colwidth },
				onLayout: function() {
					$(window).trigger("scroll");
				}
			}
	
			);
		}
		initIsotope();
		$(window).resize(function() {
			initIsotope();
		});
		$(window).load(function() {
			initIsotope('reLayout');
		});

		$('#container').on('click','.item',function(e) {

				// project images slideshow
				var rel = parseInt($(this).attr('rel'));
				$('#slideshow-loader').show();
				$('.cycle-slideshow').hide();
				$('.slide-nav-close').hide();
				/*$('.slide-nav-prev').hide();
				$('.slide-nav-next').hide();
				$('.slide-nav-next').next().hide();*/
				setTimeout(function() { 
					$('.cycle-slideshow').fadeIn(); 
					$('#slideshow-loader').hide();
					$('.slide-nav-close').fadeIn();
					}, 2000);
				$('.cycle-slideshow').cycle(rel)
				if($('#slideshow-outer').is(':hidden')) {
					$('#slideshow-outer').slideToggle();
				}
				$("html, body").animate({ scrollTop: 0 }, function() {});
			
		});
	}
// END single gallery page
	
	//page scrolling when hitting one of the buttons
	$('.page-scroll a').bind('click', function(event) { 
		var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
	
	$('#slide-close a').bind('click', function(e) { 
		e.preventDefault();
		$('.cycle-slideshow').cycle('stop');
        $('#slideshow-outer').slideToggle();
    });
	
})