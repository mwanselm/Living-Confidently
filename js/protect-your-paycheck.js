
jQuery.noConflict();
jQuery(document).ready(function ($) {



	//	Desktop Search Click


	$('#desktop_search').on('click', function (e) {
		$('.search_dropdown').toggleClass("search_now"); //you can list several class names 
		e.preventDefault();
	});
	$('#close-search').on('click', function (e) {
		$('.search_dropdown').toggleClass("search_now");
		e.preventDefault();
	});


	//	Hamburger tap function

	$('#search-li').on('click', function (e) {
		$('#mobile-search').focus();
	});

	//	Mobile Search Focus
	$('.menu-icon').on('click', function (e) {
		$(this).toggleClass('pressed');
	});




	$('#globe-stat-anim').slick({
		dots: true,
		arrows: false,
		swipe: false,
		//autoplay: true,
		autoplaySpeed: 4000
	});


	$(".carousel-1").slick({

		// normal options...
		autoplay: true,
		dots: true,


		arrows: false,
		// the magic
		responsive: [{

			breakpoint: 1024,
			settings: {
				//slidesToShow: 3,
				//infinite: true
			}

    }, {

			breakpoint: 769,
			settings: {
				//slidesToShow: 2,
				arrows: true,
				appendArrows: $(".carousel .slick-navigation"),
				appendDots: $("section.carousel"),
				dots: false,
				vertical: true,
				speed: 800,
			}

    }, {

			breakpoint: 300,
			//settings: "unslick" // destroys slick

    }]
	});

	$('.slick-active .slide-content h4 , .slick-active .slide-content p ').addClass('animated fadeInUp');

	$('.carousel-1').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
		$(".img-overlay").fadeOut('slow').delay(500).fadeIn('slow');
		$('.slick-active .slide-content h4 , .slick-active .slide-content p').delay(100).queue(function () {
			$(this).removeClass('fadeInUp').addClass('fadeOutUp').dequeue();

		});

	});

	$('.carousel-1').on('afterChange', function (event, slick, currentSlide, nextSlide) {
		$('.slick-active .slide-content h4 , .slick-active .slide-content p').addClass('animated fadeInUp').removeClass('fadeOutUp');

	});



	var waypoint = new Waypoint({
		element: document.getElementById('resource-waypoint'),
		handler: function (direction) {
			// console.log('Scrolled to waypoint!')
			// $('#priorities-desktop').slick('slickPlay')
			$('#resources-blue').addClass('animated fadeInUp')

		},

		offset: '80%'
	})



	//	Desktop Escalator
	var animEscalatorD;
	var elemEscalatorD = document.getElementById('escalator-svg-d')
	var animDataEscalatorD = {
		container: elemEscalatorD,
		renderer: 'svg',
		loop: true,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/escalator/Escalator_Desktop.json',
		name: 'Escalator-D',
	};
	animEscalatorD = bodymovin.loadAnimation(animDataEscalatorD);


	//	animEscalatorD.addEventListener("enterFrame", function (animation) {
	//		if (animation.currentTime > (animEscalatorD.totalFrames - 1)) {
	//			animEscalatorD.pause();
	//		}
	//	});

	var waypoint = new Waypoint({
		element: document.getElementById('escalator-waypoint'),
		handler: function (direction) {
			animEscalatorD.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});

	//	Mobile Escalator

	var animEscalatorM;
	var elemEscalatorM = document.getElementById('escalator-svg-m')
	var animDataEscalatorM = {
		container: elemEscalatorM,
		renderer: 'svg',
		loop: true,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/escalator/Escalator_Mobile.json',
		name: 'Escalator-M',
	};
	animEscalatorM = bodymovin.loadAnimation(animDataEscalatorM);


	//	animEscalatorM.addEventListener("enterFrame", function (animation) {
	//		if (animation.currentTime > (animEscalatorM.totalFrames - 1)) {
	//			animEscalatorM.pause();
	//		}
	//	});

	var waypoint = new Waypoint({
		element: document.getElementById('escalator-svg-m'),
		handler: function (direction) {
			animEscalatorM.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});
	
	

	
	var animGlobeOne;
	var elemGlobeOne = document.getElementById('globe_1')
	var animDataGlobeOne = {
		container: elemGlobeOne,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_01.json',
		name: 'Globe-1',
	};
	animGlobeOne = bodymovin.loadAnimation(animDataGlobeOne);
	

	animGlobeOne.addEventListener("enterFrame", function (animation) {
		if (animation.currentTime > (animGlobeOne.totalFrames - 1)) {
			animGlobeOne.pause();
		}
	});

	var waypoint = new Waypoint({
		element: document.getElementById('globe_1'),
		handler: function (direction) {
			animGlobeOne.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});
	
	

	var animGlobeTwo;
	var elemGlobeTwo = document.getElementById('globe_2')
	var animDataGlobeTwo = {
		container: elemGlobeTwo,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_02.json',
		name: 'Globe-2',
	};
	
	
	
	
	animGlobeTwo = bodymovin.loadAnimation(animDataGlobeTwo);
	var animGlobeThree;
	var elemGlobeThree = document.getElementById('globe_3')
	var animDataGlobeThree = {
		container: elemGlobeThree,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_03.json',
		name: 'Globe-3',
	};
	animGlobeThree = bodymovin.loadAnimation(animDataGlobeThree);	
	
	var animGlobeFour;
	var elemGlobeFour = document.getElementById('globe_4')
	var animDataGlobeFour = {
		container: elemGlobeFour,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_04.json',
		name: 'Globe-4',
	};
	animGlobeFour = bodymovin.loadAnimation(animDataGlobeFour);	
	
	
	$('#link-globe-1').on('click', function (event) {
		animGlobeOne.goToAndPlay( 0 );

	});
	$('#link-globe-2').on('click', function (event) {
		animGlobeTwo.goToAndPlay( 0 );

	});
	$('#link-globe-3').on('click', function (event) {
		animGlobeThree.goToAndPlay( 0 );
	});
	$('#link-globe-4').on('click', function (event) {
		animGlobeFour.goToAndPlay( 0 );
	});
	
//	Globe Animations
	$('#globe-stat-anim').on('afterChange', function (event, slick, currentSlide) {
		$('#globe-stat-anim').find('.slick-active #globe_1_m').each(function(){
			animGlobeOneM.goToAndPlay( 0 ); 
		});
		$('#globe-stat-anim').find('.slick-active #globe_2_m').each(function(){
			animGlobeTwoM.goToAndPlay( 0 ); 
		});
		$('#globe-stat-anim').find('.slick-active #globe_3_m').each(function(){
			animGlobeThreeM.goToAndPlay( 0 ); 
		});
		$('#globe-stat-anim').find('.slick-active #globe_4_m').each(function(){
			animGlobeFourM.goToAndPlay( 0 ); 
		});
		
	});	
	
	$('#globe-stat-anim').on('beforeChange', function (event, slick, currentSlide) {
		$('#globe-stat-anim').find('.slick-active #globe_1_m').each(function(){
			animGlobeOneM.goToAndStop( 0 ); 
		});
		$('#globe-stat-anim').find('.slick-active #globe_2_m').each(function(){
			animGlobeTwoM.goToAndStop( 0 ); 
		});
		$('#globe-stat-anim').find('.slick-active #globe_3_m').each(function(){
			animGlobeThreeM.goToAndStop( 0 ); 
		});
		$('#globe-stat-anim').find('.slick-active #globe_4_m').each(function(){
			animGlobeFourM.goToAndStop( 0 ); 
		});
	});

	
	var animGlobeOneM;
	var elemGlobeOneM = document.getElementById('globe_1_m')
	var animDataGlobeOneM = {
		container: elemGlobeOneM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_01.json',
		name: 'Globe-1-m',
	};
	animGlobeOneM = bodymovin.loadAnimation(animDataGlobeOneM);
	
	var waypoint = new Waypoint({
		element: document.getElementById('globe_1_m'),
		handler: function (direction) {
			animGlobeOneM.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});
	
	var animGlobeTwoM;
	var elemGlobeTwoM = document.getElementById('globe_2_m')
	var animDataGlobeTwoM = {
		container: elemGlobeTwoM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_02.json',
		name: 'Globe-2-m',
	};
	animGlobeTwoM = bodymovin.loadAnimation(animDataGlobeTwoM);	
	
	var animGlobeThreeM;
	var elemGlobeThreeM = document.getElementById('globe_3_m')
	var animDataGlobeThreeM = {
		container: elemGlobeThreeM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_03.json',
		name: 'Globe-3-m',
	};
	animGlobeThreeM = bodymovin.loadAnimation(animDataGlobeThreeM);	

	var animGlobeFourM;
	var elemGlobeFourM = document.getElementById('globe_4_m')
	var animDataGlobeFourM = {
		container: elemGlobeFourM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/globe/globe_04.json',
		name: 'Globe-4-m',
	};
	animGlobeFourM = bodymovin.loadAnimation(animDataGlobeFourM);
	

	//	var delayInMilliseconds = 10000; //1 second	
	//	anim.addEventListener("complete", function () {
	//
	//		setTimeout(function () {
	//			//your code to be executed after 1 second
	//			anim.stop();
	//		}, delayInMilliseconds);
	//	});

	// Priorities Desktop Slider scroll animations
	var waypoint = new Waypoint({
		element: document.getElementById('myth-carousel-waypoint'),
		handler: function (direction) {
			// console.log('Scrolled to waypoint!')
			// $('#priorities-desktop').slick('slickPlay')
			$(".slick-active .c-right img").delay(1500).queue(function () {
					$(this).addClass("animated fadeIn").dequeue();
				})
				// $('.c-right img').addClass('animated fadeIn');
				// $('.c-left .c-content').addClass('animated slideInLeft').css('visibility' , 'visible');
			
//			$(".slick-active .c-left .c-content").delay(2000).queue(function () {
//				$(this).addClass("animated fadeInUp").dequeue();
//			})
			$(".slick-active .c-left .c-content .myth").delay(1000).queue(function () {
				$(this).addClass("animated fadeInUp").dequeue();
			})
			$(".slick-active .c-left .c-content .fact").delay(2000).queue(function () {
				$(this).addClass("animated fadeInUp").dequeue();
			})
			$(".wipe-overlay").delay(800).queue(function () {
				$(this).addClass("full-width").dequeue();
			})
			$('#priorities-desktop').slick('slickPlay')
		},

		offset: '80%'
	})




	// Desktop Priorities Slider Button

	$('#priorities-desktop .btn').on('click', function (e) {
		// $('.priorities-facts').addClass("animated fadeInUp");
		$('.blue-overlay').addClass("animated fadeIn");
		$(".priorities-facts").delay(500).queue(function () {
			$(this).addClass("animated fadeInUp").dequeue();

		})
	});

	$('#priorities-desktop:not(.myth-desktop)').slick('unslick').slick({
		dots: true,
		arrows: false,
		//rtl: true,
		//autoplay: false,
		fade: true,
		speed: 1500,
		autoplaySpeed: 10000
	});
	
	// Priorities Desktop Slider Animation
	$('.landing-page:not(#myth-desktop)').on('afterChange', function (event, slick, currentSlide) {
//		$('.landing-page .slick-active .c-content').addClass('animated fadeInUp').removeClass('fadeOutUp');
		$('.landing-page .slick-active .c-right img').addClass('animated fadeIn');
		$('.landing-page .slick-active .c-left').removeClass('full-width');
		$(".landing-page .slick-active .c-content .myth").delay(200).queue(function () {
			$(this).addClass('animated fadeInUp').removeClass('fadeOutUp').dequeue();

		})
		$(".landing-page .slick-active .c-content .fact").delay(1000).queue(function () {
			$(this).addClass('animated fadeInUp').removeClass('fadeOutUp').dequeue();

		})
	});
	
	
	$('.landing-page:not(#myth-desktop)').on('beforeChange', function (event, slick, currentSlide) {
		
		$(".landing-page .slick-active .c-content .fact").delay(200).queue(function () {
			$(this).removeClass('fadeInUp').addClass('fadeOutUp').dequeue();

		})
		$(".landing-page .slick-active .c-content .myth").delay(200).queue(function () {
			$(this).removeClass('fadeInUp').addClass('fadeOutUp').dequeue();

		})
			// $('.landing-page .slick-active .c-content').removeClass('fadeInUp').addClass('fadeOutUp');
		$('.landing-page .slick-active .c-right img').removeClass('fadeIn');
		$(".landing-page .slick-active .c-left").delay(500).queue(function () {
			$(this).addClass("full-width").dequeue();

		})

	});

	$('#myth-fact-mobile .priorities-slider').slick('unslick').slick({
		arrows: true,
		vertical: true,
		draggable: false,
		autoplaySpeed: 11000,
//		autoplay: true,
		responsive: [ { breakpoint: 960, settings: { waitForAnimate : false, pauseOnFocus : false, pauseOnHover : false, swipe : false } }, ]
	});
	

	var waypoint = new Waypoint({
		element: document.getElementById('myth-fact-mobile'),
		handler: function (direction) {
			// console.log('Scrolled to waypoint!')
			// $('#priorities-desktop').slick('slickPlay')
//			$('#myth-fact-mobile .priorities-slider p').addClass('animated fadeInUp')
			$('#myth-fact-mobile .priorities-slider').slick('slickPlay')
			$("#myth-fact-mobile .myth").delay(1000).queue(function () {
				$(this).addClass("animated fadeInUp").dequeue();
			})
			$("#myth-fact-mobile .fact").delay(2000).queue(function () {
				$(this).addClass("animated fadeInUp").dequeue();
			})
			
		},

		offset: '80%'
	})
	
	
	$('#myth-fact-mobile .priorities-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
//		$('.copy-block p').removeClass('animated fadeInUp');
		$("#myth-fact-mobile .fact").removeClass('fadeInUp').addClass('fadeOut');

		$("#myth-fact-mobile .myth").removeClass('fadeInUp').addClass('fadeOut');

	});
	$('#myth-fact-mobile .priorities-slider').on('afterChange', function (event, slick, currentSlide) {
//		$('.copy-block p').addClass('animated fadeInUp');
		$("#myth-fact-mobile .myth").delay(600).queue(function () {
			$(this).addClass('animated fadeInUp').removeClass('fadeOut').dequeue();

		})
		$("#myth-fact-mobile .fact").delay(1200).queue(function () {
			$(this).addClass('animated fadeInUp').removeClass('fadeOut').dequeue();

		})
	});

	// Custom close handler for the Feranmi Video Modal
	$(document).on('click', '#feranmi-video .close-modal', function(e) {
		e.preventDefault();
		$.modal.close();
	});

	// Protect Your Paycheck - GA
	$('#stat-animation a.tablinks').on('click', function(e) {
		var type = $(this).text();
		ga('send', 'event', 'Stats Panel', 'Click', type);
	});

 
  
	$('.q-2 .more').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "MORE Q1");
	});
	$('.q-2 .less').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "LESS Q1");
	});
  
	$('.q-3 .more').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "MORE Q2");
	});
	$('.q-3 .less').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "LESS Q2");
	});
  
	$('.q-4 .more').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "MORE Q3");
	});
	$('.q-4 .less').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "LESS Q3");
	});
  
  
	$('#interactive .start-over').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "START OVER");
	});
  
	$('.q-1 .btn').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "START");
	});
  
	$('.q-5 .btn').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "NEXT");
	});
  
	$('.q-6 .btn').on('click', function(e) {
		ga('send', 'event', 'Interactive Panel', 'Click', "SHOW ME");
	});
  
  
  
	$('#resources-blue ul li a').on('click', function(e) {
		var res = $(this).text();
		ga('send', 'event', 'Resources Box', 'Click', res);
	});
	$('#di-kitchen .btn').on('click', function(e) {
		ga('send', 'event', 'Family Kitchen Panel', 'Click', 'View Resources');
	});
	$('#di-feranmi .btn').on('click', function(e) {
		ga('send', 'event', 'Feranmi Panel', 'Click', 'Watch His Story');
	});
	$('#income-pro .btn').on('click', function(e) {
		ga('send', 'event', 'Income Protection Panel', 'Click', 'Find an Advisor');
	});
  
	$('.page-template-page-disability-resources .home-tile-grid .tile a').on('click', function(e) {
    var res = $(this).text();
		ga('send', 'event', 'Disability Resources', 'Click', res);
	});
  
  

});