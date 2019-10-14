jQuery.noConflict();
jQuery(document).ready(function ($) {
	//	Cards Functionality

	//	$('#btn-1b , #btn-1a').click(function () {
	//		$(".cards .inner-wrapper").removeClass("state-1");
	//	});

	//    Shared Card Functionality
  
 function showDots() {
	  $('#images-loading')
    .delay(300)
     .fadeIn('slow')
		.delay(500)
		.queue(function () {
			$(this).fadeOut('slow').dequeue();
	  });
  }

	$('.btn-right , .btn-left').click(function () {
    $('.cards .inner-wrapper').addClass('answers').removeClass('questions');
    if ($(window).width() < 541 ) {
      console.log('notscrolling');
      $('body,html').animate({scrollTop: $('section.cards').offset().top - 67}, 700);
      $(".cards .inner-wrapper .intro").hide();
    }
	});

	$('.btn-answer').click(function () {
    
    showDots();
    
    $('.card-left').removeClass('not-active');
    $('.card-right').removeClass('not-active');
        
		setTimeout(function () {
        $('.cards .inner-wrapper').addClass('questions').removeClass('answers');
		}, 500);
        
		$('.card')
			.delay(2250)
			.queue(function () {
				$(this).removeClass('bounceOutUp').addClass('bounceInDown').dequeue();
			})
			.delay(2500)
			.queue(function () {
				$(this).removeClass("bounceInDown").dequeue();
		});
                

	});

	//    Question Functionality

	$('.btn-left').click(function () {
		var captionText = $(this).closest('.question').find('figcaption').text();

		$('.card-left').removeClass('active');
		$('.card-right .card').addClass('bounceOutUp');
		$('.card-right').delay(1000).queue(function () {
			$(this).addClass('active').dequeue();
		});
    
    //$('.card-left').addClass('not-active');

		ga('send', 'event', 'Click', 'My Retirement Reality - Answer', captionText);
	});

	$('.btn-right').click(function () {
		var captionText = $(this).closest('.question').find('figcaption').text();

		$('.card-left .card').addClass('bounceOutUp');
		$('.card-right').removeClass('active');
		$('.card-left').delay(1000).queue(function () {
			$(this).addClass('active').dequeue();
		});
    
    //$('.card-right').addClass('not-active');

		ga('send', 'event', 'Click', 'My Retirement Reality - Answer', captionText);
	});
	
	//    Answer Functionality




	$('.card-left .btn-answer').click(function () {
		$('.card-right .card').addClass('bounceOutUp');
	});

	$('.card-right .btn-answer').click(function () {
		$('.card-left .card').addClass('bounceOutUp');
	});

	$('.btn-answer-1a , .btn-answer-1b').click(function () {
		
    showDots();
    
    $('.card-dots').removeClass('one').addClass('two');
		$('.btn-1a')
			.removeClass('btn-1a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-2a').dequeue();
			});

		$('.btn-1b')
			.removeClass('btn-1b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-2b').dequeue();
			});
		
		$('.btn-answer-1a')
			.removeClass('btn-answer-1a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-2a').dequeue();
			});
		
		$('.btn-answer-1b')
			.removeClass('btn-answer-1b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-2b').dequeue();
			});

		$('.card-left img.img-d')
			.delay(1500)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-2a.jpg').dequeue();
			});
		$('.card-right img.img-d')
			.delay(1500)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-2b.jpg').dequeue();
			});
		$('.card-left img.img-m')
			.delay(1500)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-2a.jpg').dequeue();
			});
		$('.card-right img.img-m')
			.delay(1500)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-2b.jpg').dequeue();
			});
		$('.card-left figcaption')
			.delay(1500)
			.queue(function () {
				$(this).text('I plan on never cooking again! I’m eating out every chance I get.').dequeue();
			});

		$('.card-right figcaption')
			.delay(1500)
			.queue(function () {
				$(this).text('I plan to enjoy cooking at home.').dequeue();
			});
		$('.card-left .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('Now that you have the time, cooking at home can be a great way to enjoy what you love while cutting costs in retirement.').dequeue();
			});

		$('.card-right .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('Being a foodie might warrant saving more. A couple spending only $5 each per meal for 20 years would need $219,000 for food. This concept is referred to as The Rule of 219.').dequeue();
			});
	});

	$('body').on('click', '.btn-answer-2a , .btn-answer-2b', function () {
		// do something
        $('.card-dots').removeClass('two').addClass('three');
		$('.btn-2a')
			.removeClass('btn-2a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-3a').dequeue();
			});

		$('.btn-2b')
			.removeClass('btn-2b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-3b').dequeue();
			});
		$('.btn-answer-2a')
			.removeClass('btn-answer-2a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-3a').dequeue();
			});
		
		$('.btn-answer-2b')
			.removeClass('btn-answer-2b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-3b').dequeue();
			});

		$('.card-left img.img-d')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-3a.jpg').dequeue();
			});
		$('.card-right img.img-d')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-3b.jpg').dequeue();
			});
		$('.card-left img.img-m')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-3a.jpg').dequeue();
			});
		$('.card-right img.img-m')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-3b.jpg').dequeue();
			});
		$('.card-left figcaption')
			.delay(100)
			.queue(function () {
				$(this).text('I plan to travel, travel, travel. ').dequeue();
			});

		$('.card-right figcaption')
			.delay(100)
			.queue(function () {
				$(this).text('I’m more of a homebody and look forward to indulging in my hobbies.').dequeue();
			});
		$('.card-left .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('Connecting with others who have similar interests is a great way to stay social. And, staying social in retirement can have a positive impact on your health and well-being.').dequeue();
			});

		$('.card-right .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('Carpe diem! Traveling in retirement may mean spending more. Make sure you plan accordingly. ').dequeue();
			});

	});
	
	$('body').on('click', '.btn-answer-3a , .btn-answer-3b', function () {
		// do something
        $('.card-dots').removeClass('three').addClass('four');
		$('.btn-3a')
			.removeClass('btn-3a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-4a').dequeue();
			});

		$('.btn-3b')
			.removeClass('btn-3b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-4b').dequeue();
			});
		$('.btn-answer-3a')
			.removeClass('btn-answer-3a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-4a').dequeue();
			});
		
		$('.btn-answer-3b')
			.removeClass('btn-answer-3b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-4b').dequeue();
			});

		$('.card-left img.img-d')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-4a.jpg').dequeue();
			});
		$('.card-right img.img-d')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-4b.jpg').dequeue();
			});
		$('.card-left img.img-m')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-4a.jpg').dequeue();
			});
		$('.card-right img.img-m')
			.delay(100)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-4b.jpg').dequeue();
			});
		$('.card-left figcaption')
			.delay(100)
			.queue(function () {
				$(this).text('I’d like to spend time still doing the work I love.').dequeue();
			});

		$('.card-right figcaption')
			.delay(100)
			.queue(function () {
				$(this).text('Volunteering and giving back are essential for me.').dequeue();
			});
		$('.card-left .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('Retirees who volunteer report greater life satisfaction.').dequeue();
			});

		$('.card-right .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('Alternative work arrangements are a great way to keep doing what you love and transition into retired life.').dequeue();
			});

	});
	
	$('body').on('click', '.btn-answer-4a , .btn-answer-4b', function () {
		// do something
    $('.card-dots').removeClass('four').addClass('five');
		$('.btn-4a')
			.removeClass('btn-4a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-5a').dequeue();
			});

		$('.btn-4b')
			.removeClass('btn-4b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-5b').dequeue();
			});
		$('.btn-answer-4a')
			.removeClass('btn-answer-4a')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-5a').text('Finish').dequeue();
			});
		
		$('.btn-answer-4b')
			.removeClass('btn-answer-4b')
			.delay(1500)
			.queue(function () {
				$(this).addClass('btn-answer-5b').text('Finish').dequeue();
			});

		$('.card-left img.img-d')
			.delay(50)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-5a.jpg').dequeue();
			});
		$('.card-right img.img-d')
			.delay(50)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/d-card-5b.jpg').dequeue();
			});
		$('.card-left img.img-m')
			.delay(1000)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-5a.jpg').dequeue();
			});
		$('.card-right img.img-m')
			.delay(1000)
			.queue(function () {
				$(this).attr('src', wp_vars.template_path+'/img/m-card-5b.jpg').dequeue();
			});
		$('.card-left figcaption')
			.delay(100)
			.queue(function () {
				$(this).text('I want to embrace my inner adventure-seeker.').dequeue();
			});

		$('.card-right figcaption')
			.delay(100)
			.queue(function () {
				$(this).text('I will redefine the term “chillax.”').dequeue();
			});
		$('.card-left .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('If you are redefining relaxation in a warmer climate, don’t forget to cover up and protect your skin health.').dequeue();
			});

		$('.card-right .answer p')
			.delay(1500)
			.queue(function () {
				$(this).text('Staying active in retirement is essential to maintaining good health, strong social connections, and potentially keeping health care costs down.').dequeue();
			});

	});
	
	$('body').on('click', '.btn-answer-5a , .btn-answer-5b', function () {
        $('#images-loading').addClass('gone');
        $('.card-dots').removeClass('five').addClass('six');
		    $('.general-response').addClass('animated fadeIn').css('z-index' , '2');
        $('.card-left , .card-right').addClass('animated , fadeOut');
        // Hide the "Choose the answers that best fit you." text after answering
        $('.cards .intro').addClass('animated , fadeOut');
	});
  
  $(".img-overlay").hide(); // hide overlay initially on load, fade in when caorusel starts below
  
	$('.carousel-1').on('init', function(event, slick){ // this does not appear to be firing
    	console.log('startedplaying');
	});

	$(".carousel-1").slick({

		// normal options...
		autoplay: false,
		dots: true,
    	autoplaySpeed: 7000,
    	fade: true,
		arrows: false,
		speed: 1500,

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
				autoplaySpeed: 7000,
				fade: false
			}
    	}, {
			breakpoint: 300,
			//settings: "unslick" // destroys slick
    	}]
	});
    
  	$('.carousel-1').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
		$(".img-overlay").fadeOut('slow').delay(500).fadeIn('slow');
		$('.slick-active .slide-content h4 , .slick-active .slide-content p').delay(100).queue(function () {
			$(this).removeClass('fadeInUp').addClass('fadeOutUp').dequeue();
		});
		$('.img-cover').animate({ width:'100%' }, 500, function() {
			$(this).delay(250).queue(function() {
				$(this).fadeOut('slow').queue(function() {
					$(this).css({ width:0 }).fadeIn('fast').dequeue();
				}).dequeue();
			});
		});
	});

	$('.carousel-1').on('afterChange', function (event, slick, currentSlide, nextSlide) {
		$('.slick-active .slide-content h4 , .slick-active .slide-content p').addClass('animated fadeInUp').removeClass('fadeOutUp');
	});

	var carouselStarted = false;
  
	$(window).on('load', function() {
		$(window).on('scroll', function() {
			  var scrollTop = $(this).scrollTop(),
				carousel = $('.carousel-1'),
				panelTop = carousel.offset().top,
				diff = scrollTop - panelTop,
				range = -( $(this).height() );

			if ( diff >= range && !carouselStarted) {
				carousel.slick('slickPlay');
				$(".img-overlay").fadeIn(1000); // fade in first overlay
				$('.slick-active .slide-content h4 , .slick-active .slide-content p ').addClass('animated fadeInUp');
				carouselStarted = true;
			}
		});
	});

	tippy('.tippy', {
		arrowType: 'sharp',
		arrow: true,
		theme: 'light',
	});



	var delayInMilliseconds = 30000; //1 second

	if ($('#bodymovin').length) {
		var anim;
		var elem = document.getElementById('bodymovin');
		var animData = {
			container: elem,
			renderer: 'svg',
			loop: false,
			autoplay: false,
			/*MAKE SURE THIS IS FALSE*/
			rendererSettings: {
				progressiveLoad: false
			},
			path: wp_vars.files_path + 'guardian_graph.json',
			name: 'myAnimation',
		};
		anim = bodymovin.loadAnimation(animData);

		var waypoint = new Waypoint({
			element: elem,
			handler: function (direction) {
				if (direction === 'down') {
					anim.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
				}
			},
			offset: 'bottom-in-view'
		});

	}

	if ($('#bodymovin-fmg').length) {

		var anim2;
		var elem = document.getElementById('bodymovin-fmg');
		var animData = {
			container: elem,
			renderer: 'svg',
			loop: true,
			autoplay: true,
			/*MAKE SURE THIS IS FALSE*/
			rendererSettings: {
				progressiveLoad: false
			},
			path: wp_vars.files_path + 'guardian_graph.json',
			name: 'myAnimation',
		};
		anim2 = bodymovin.loadAnimation(animData);


	}


	/* Resources Section - Link Click */
	$('section.pie-chart .yellow-box a').click(function(e) {
		var text = $.trim($(this).text());

		ga('send', 'event', 'Click', 'Resource Section', text);
	});

	/* View Resources - Button Click */
	$('section.resources-link .btn').click(function() {
		ga('send', 'event', 'Click', 'View Resources Section', 'View Resources Button');
	});
  
	/* View Resources - Button Click */
	$('section.camera-hero .btn').click(function() {
		ga('send', 'event', 'Click', 'Find an Advisor', 'Find an Advisor Button');
	});



});