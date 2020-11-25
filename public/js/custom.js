(function($) {
	

	var $window		= $(window),
	$header			= $('#header'),	
	$dropdown  		= $('.dropdown-toggle'),
	$image_slider 	= $('.image-gallery'),
	$contact		= $('#contact-form')
	
	
	
	
	// Put slider space for nav not in mini screen
	// Autometic count header height and take space body from header
	
	if(document.querySelector('.nav-on-top') !== null) {
		var get_height = jQuery('.nav-on-top').height();
			if(get_height > 0 && $window.width() > 991){
			jQuery('.nav-on-top').next().css('margin-top', get_height);
		}
		$window.on('resize', function(){
			if($window.width() < 991){
				jQuery('.nav-on-top').next().css('padding-top', '0');
			}
			else {
				jQuery('.nav-on-top').next().css('margin-top', get_height);
			}
		});
	 }
	 if(document.querySelector('.nav-on-banner') !== null) {
		var get_height = jQuery('.nav-on-banner').height();
			if(get_height > 0 && $window.width() > 991){
			jQuery('.nav-on-banner').next().css('padding-top', get_height);
		}
		$window.on('resize', function(){
			if($window.width() < 991){
				jQuery('.nav-on-banner').next().css('padding-top', '0');
			}
			else {
				jQuery('.nav-on-banner').next().css('padding-top', get_height);
			}
		});
	}





	// Custom input numbering
	// Click on plus and minus icon in form auto added number
	
	jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up bg-primary">+</div><div class="quantity-button quantity-down bg-primary">-</div></div>').insertAfter('.quantity input');
		jQuery('.quantity').each(function() {
		  var spinner = jQuery(this),
			input = spinner.find('input[type="number"]'),
			btnUp = spinner.find('.quantity-up'),
			btnDown = spinner.find('.quantity-down'),
			min = input.attr('min'),
			max = input.attr('max');

		  btnUp.click(function() {
			var oldValue = parseFloat(input.val());
			if (oldValue >= max) {
			  var newVal = oldValue;
			} else {
			  var newVal = oldValue + 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		  });

		  btnDown.click(function() {
			var oldValue = parseFloat(input.val());
			if (oldValue <= min) {
			  var newVal = oldValue;
			} else {
			  var newVal = oldValue - 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		  });
     });
	

	
	
	
	// Update Header Style + Scroll to Top
	// Added fixed class with header when page scroll
	
	function headerStyle() {
		if($header.length){
			var windowpos = $window.scrollTop();
			if (windowpos >= 100) {
				$header.addClass('fixed-top');
			} else {
				$header.removeClass('fixed-top');
			}
		}
	}
	
	



	// dropdown submenu on hover in desktopand dropdown sub menu on click in mobile
	// Hover and dropdown menu system
	
	$('#navbarSupportedContent').each(function() {
		$dropdown.on('click', function(e){
			if($window.width() < 1100){
				if($(this).parent('.dropdown').hasClass('visible')){
				//	$(this).parent('.dropdown').children('.dropdown-menu').first().stop(true, true).slideUp(300);
				//	$(this).parent('.dropdown').removeClass('visible');
					window.location = $(this).attr('href');
				}
				else{
					e.preventDefault();
					$(this).parent('.dropdown').siblings('.dropdown').children('.dropdown-menu').slideUp(300);
					$(this).parent('.dropdown').siblings('.dropdown').removeClass('visible');
					$(this).parent('.dropdown').children('.dropdown-menu').slideDown(300);
					$(this).parent('.dropdown').addClass('visible');
				}
				e.stopPropagation();
			}
		});
		
		$('body').on('click', function(e){
			$dropdown.parent('.dropdown').removeClass('visible');
		});
		
		$window.on('resize', function(){
			if($window.width() > 991){
				$('.dropdown-menu').removeAttr('style');
				$('.dropdown ').removeClass('visible');
			}
		});
		
	});




    // Auto active class adding with navigation
	// When you open a link, active class will add with the nav autometically
	
    $window.on('load', function () {
        var current = location.pathname;
        var $path = current.substring(current.lastIndexOf('http://unicoderbd.com/') + 1);
        $('.navbar-nav a').each(function (e) {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($path == $this.attr('href')) {
                $this.addClass('active');
            } else if ($path == '') {
                $('.navbar-nav li:first-child > a').addClass('active');
            }
        })
    })
	
	
	
	
	
	
	// Layer slider settings jQuesy
	// You can edit the settings by reading layerSlider documentation
			
	$('#slider-full').layerSlider({
		sliderVersion: '6.0.0',
		type: 'fullwidth',
		responsiveUnder: 0,
		layersContainer: 1200,
		allowFullscreen: true,
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'noskin',
		showBarTimer: true,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'skins/',
		height: 940
	});
	
	$('#slider').layerSlider({
		sliderVersion: '6.0.0',
		type: 'fullwidth',
		responsiveUnder: 0,
		layersContainer: 1200,
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'v5',
		showBarTimer: true,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'skins/',
		height: 840
	});
	
	$('#slider5').layerSlider({
		sliderVersion: '6.0.0',
		type: 'fullwidth',
		responsiveUnder: 0,
		layersContainer: 1200,
		maxRatio: 1,
		parallaxScrollReverse: true,
		hideUnder: 0,
		hideOver: 100000,
		skin: 'v5',
		showBarTimer: true,
		thumbnailNavigation: 'disabled',
		allowRestartOnResize: true,
		skinsPath: 'skins/',
		height: 980
	});
	

	// 06. Our Doctor Carousel HealthLine
    if ($image_slider.length) {
        $image_slider.owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            autoplayHoverPause: false,
            smartSpeed: 300,
            autoplay: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1024: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
    };
	




	// Fact Counter For Achivement Counting
	// Autometic counting number when you page scroll and visible that part
	
	function factCounter() {
	  if($('.fact-counter').length){
	   $('.fact-counter .count.animated').each(function() {
	  
		var $t = $(this),
		 n = $t.find(".count-num").attr("data-stop"),
		 r = parseInt($t.find(".count-num").attr("data-speed"), 10);
		 
		if (!$t.hasClass("counted")) {
		 $t.addClass("counted");
		 $({
		  countNum: $t.find(".count-text").text()
		 }).animate({
		  countNum: n
		 }, {
		  duration: r,
		  easing: "linear",
		  step: function() {
		   $t.find(".count-num").text(Math.floor(this.countNum));
		  },
		  complete: function() {
		   $t.find(".count-num").text(this.countNum);
		  }
		 });
		}
		
		//set skill building height
		 var size = $(this).children('.progress-bar').attr('aria-valuenow');
		 $(this).children('.progress-bar').css('width', size+'%');

		
	   });
	  }
	}
	
	
	
	
	// DatePicker Function Call
	// Calender will appear when you click on date on the form
	
	$('#datepairExample .date').datepicker({
		'format': 'm/d/yyyy',
		'autoclose': true
	});
	
	
	
	

	// Contact Form Validation
	// jQuery validation when before form submit
	
	if($contact.length){
		$contact.validate({  //#contact-form contact form id
			rules: {
				firstname: {
					required: true    // Field name here
				},
				email: {
					required: true, // Field name here
					email: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			},
			
			messages: {
                firstname: "Please enter your First Name", //Write here your error message that you want to show in contact form
                email: "Please enter valid Email", //Write here your error message that you want to show in contact form
                subject: "Please enter your Subject", //Write here your error message that you want to show in contact form
				message: "Please write your Message" //Write here your error message that you want to show in contact form
            },

            submitHandler: function (form) {
                $('#send').attr({'disabled' : 'true', 'value' : 'Sending...' });
                $.ajax({
                    type: "POST",
                    url: "email.php",
                    data: $(form).serialize(),
                    success: function () {
                        $('#send').removeAttr('disabled').attr('value', 'Send');
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 5000);
                        form.reset();
                    },
                    error: function() {
                        $('#send').removeAttr('disabled').attr('value', 'Send');
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 5000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

		});
	} 
	



	// Elements Animation if you add the class
	// Call wow function and content appear when page scroll
	
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}
	
	
	
	

	// Scroll to a Specific Div
	// back to top when you click on the text
	
	if($('.btn-scroll').length){
		$(".btn-scroll").on('click', function(e) {
			e.preventDefault();
			var target = $(this).attr('data-target');
			// animate
			$('html, body').animate({scrollTop: $(target).offset().top }, 1000);
		});
	}
	
	
	
	

	// Acive scroll top button
	// Back to top text appear when you page scroll
	
	function jumptotop(){
		var $scrollsize = $window.scrollTop();
		if($scrollsize > 300){
			$('.scroll-to-top').fadeIn(1000);
		}
		else {
			$('.scroll-to-top').fadeOut(1000);
		}
	}




    // When document is Scrollig, do
	// Function called when page scroll
	
    $window.on('scroll', function () {
		jumptotop();
        headerStyle();
        factCounter();
    });





	// LightBox / Fancybox Functions
	
    $('[data-fancybox="gallery"]').fancybox({
       animationEffect: "zoom",
       transitionEffect: "fade"
    });
	
	
	
	
	
	// Gallery With Filters List
	
    if($('.filter-list').length){
       $('.filter-list').mixItUp({});
    }




    // Youtube and Vimeo video popup control
	// all youtube jquery system and function called
	
	jQuery(function(){
		$.fn.YouTubePopUp = function(options) {

			var YouTubePopUpOptions = $.extend({
					autoplay: 1
			}, options );

			$(this).on('click', function (e) {

				var youtubeLink = $(this).attr("href");

				if( youtubeLink.match(/(youtube.com)/) ){
					var split_c = "v=";
					var split_n = 1;
				}

				if( youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(vimeo.com\/)+[0-9]/) ){
					var split_c = "http://unicoderbd.com/";
					var split_n = 3;
				}

				if( youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/) ){
					var split_c = "http://unicoderbd.com/";
					var split_n = 5;
				}

				var getYouTubeVideoID = youtubeLink.split(split_c)[split_n];

				var cleanVideoID = getYouTubeVideoID.replace(/(&)+(.*)/, "");

				if( youtubeLink.match(/(youtu.be)/) || youtubeLink.match(/(youtube.com)/) ){
					var videoEmbedLink = "https://www.youtube.com/embed/"+cleanVideoID+"?autoplay="+YouTubePopUpOptions.autoplay+"";
				}

				if( youtubeLink.match(/(vimeo.com\/)+[0-9]/) || youtubeLink.match(/(vimeo.com\/)+[a-zA-Z]/) ){
					var videoEmbedLink = "https://player.vimeo.com/video/"+cleanVideoID+"?autoplay="+YouTubePopUpOptions.autoplay+"";
				}

				$("body").append('<div class="YouTubePopUp-Wrap YouTubePopUp-animation"><div class="YouTubePopUp-Content"><span class="YouTubePopUp-Close"></span><iframe src="'+videoEmbedLink+'" allowfullscreen></iframe></div></div>');

				if( $('.YouTubePopUp-Wrap').hasClass('YouTubePopUp-animation') ){
					setTimeout(function() {
						$('.YouTubePopUp-Wrap').removeClass("YouTubePopUp-animation");
					}, 600);
				}

				$(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click(function(){
					$(".YouTubePopUp-Wrap").addClass("YouTubePopUp-Hide").delay(515).queue(function() { $(this).remove(); });
				});

				e.preventDefault();

			});

			$(document).keyup(function(e) {

				if ( e.keyCode == 27 ){
					$('.YouTubePopUp-Wrap, .YouTubePopUp-Close').click();
				}
			});
		};
		jQuery("a.video-popup").YouTubePopUp();
		//jQuery("a.video-popup").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
	});
	
	
	
	
	
	// Template Settings 
	// Color Settings, Template Settings, Background Settings
	
	$('.color-panel').each(function(){
		$('.on-panel').on('click', function(){
			$('.color-panel').toggleClass('open');
		});
		
		$('.color-box li').on('click', function(){
			$('.color-box li').removeClass('active');
			$(this).addClass('active');
			 var path = $(this).data('path');
			 var logo1 = $(this).data('image');
			 var logo2 = $(this).data('target');
			 $('#color-change').attr('href', path);
			 $('.nav-logo').attr('src', logo1);
			 $('.logo-bottom').attr('src', logo2);
		});	
		
		// Template color change
		$(".color-box li").each( function() {		
			if ($.cookie('uwash_color') && $.cookie('uwash_color') == $(this).attr('class')) {
				$(this).addClass('active');
				var path = $(this).data('path');
				var logo1 = $(this).data('image');
				var logo2 = $(this).data('target');
				$('#color-change').attr('href', path);
				$('.nav-logo').attr('src', logo1);
				$('.logo-bottom').attr('src', logo2);
			}
		});
		
		$(".color-box li").on('click',function() {
			var file_name = $(this).attr('data-name');
			$.cookie('uwash_color', file_name, { path: '/', expires: 365 });
		});
		
		// Layout select with slide button
		$("#layout_type").each( function() {
			var name = $(this).attr('name');
			if ($.cookie(name) && $.cookie(name) == "boxLayout") {
				$(this).prop('checked', true);
				$('#page_wrapper').addClass('box-layout');
			}
		});
		
		$("#layout_type").change(function() {
			var name = $(this).attr('name');
			if($(this).prop('checked')){
				$.cookie(name, 'boxLayout', { path: '/', expires: 365 });
			}
			else {
				$.cookie(name, '', { path: '/', expires: 365 });
			}
		});
		
		$('#layout_type').on('click', function(){	
			if($(this).is(':checked')){
				$('#page_wrapper').addClass('box-layout');
				location.reload();
			}
			else {
				$('#page_wrapper').removeClass('box-layout');
				location.reload();
			}
		});
		
		
		// Background select with check
		$(".box_bg_style li input[type='radio']").on('click', function(){
			$('body').removeAttr('class');
			if($(this).is(':checked')){
				var class_nm = $(this).attr('value');
				$('body').addClass(class_nm);
			}
			var name = $("#bg_over").attr('name');
			if ($.cookie(name) && $.cookie(name) == "true") {
				$(this).prop('checked', $.cookie(name));
				$('body').addClass('body_overlay');
			}
		});
		
		$(".box_bg_style li input[type='radio']").each( function() {		
			if ($.cookie('bg_layout') && $.cookie('bg_layout') == $(this).attr('value')) {
				$(this).prop('checked', true);
				$('body').addClass($.cookie('bg_layout'));
			}
		});
		
		$(".box_bg_style li input[type='radio']").change(function() {
			var name = $(this).attr('value');
			if($(this).prop('checked')){
				$.cookie('bg_layout', name, { path: '/', expires: 365 });
			}
		});
		
		// Background Overly settinhs
		$("#bg_over").each( function() {
			var name = $(this).attr('name');
			if ($.cookie(name) && $.cookie(name) == "true") {
				$(this).prop('checked', $.cookie(name));
				$('body').addClass('body_overlay');
			}
		});
		
		$("#bg_over").change(function() {
			var name = $(this).attr('name');
			$.cookie(name, $(this).prop('checked'), { path: '/', expires: 365 });
		});
		
		$('#bg_over').on('click', function(){	
			if($(this).is(':checked')){
				$('body').addClass('body_overlay');
			}
			else {
				$('body').removeClass('body_overlay');
			}
		});
		
	});
    
    // Date Count Down
	$('[data-countdown]').each(function() {
		var $this = $(this),
			finalDate = $(this).data('countdown');

		$this.countdown(finalDate, function(event) {
		  $this.html(event.strftime('<ul class="cd100"><li class="font-weight-bold"><span class="days d-block">%D</span><br><span>Days</span></li><li class="font-weight-bold"><span class="hour d-block">%H</span><br><span>Hour</span></li><li class="font-weight-bold"><span class="min d-block">%M</span><br><span>Min</span></li><li class="font-weight-bold"><span class="sec d-block">%S</span><br><span>Sec</span></li></ul>'));
		});
	  });



})(jQuery);