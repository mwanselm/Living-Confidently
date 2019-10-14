var answers = new Array(0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);


jQuery.noConflict();





jQuery( document ).ready(function( $ ) {

  $(window).on('load resize', function(){
    if($(window).width() > 1024){
      $("#benefits-desktop .c-left").css({
        height: $("#benefits-desktop").height()
      })
    };
  })

   /* Landing Page List Items */

  $('.world-chaos .list-btn').on('click', function(e) {
    $('.world-chaos .list-btn').removeClass("active"); //you can list several class names 
    $(this).addClass('active');
    e.preventDefault();
  });

  d = new Date();

  $('.list-btn a').on('click', function(e) {
  	$('.gif-caption').removeClass('show');
  	$('.chaos-percent').removeClass('show').css('opacity','');
  	$('.chaos-img').removeClass('show');
  	e.preventDefault();
  });

  $('#chaos-btn-one').on('click', function(e) {
  	$('#gif-one')
  		.addClass('show', 500 )
  	    .queue(function() {
  	      $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif1.gif?" + Math.random() ).dequeue();
  	    })
  	    $('#gif-two').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif2.jpg").dequeue();
	    	
  		})
  		$('#gif-three').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif3.jpg").dequeue();
	    	
  		})
  		$('#gif-four').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif4.jpg").dequeue();
	    	
  		})

  	$('#gif-caption-1').addClass('show');
  	$('.percent-1').addClass('show');
  	e.preventDefault();
  });
  $('#chaos-btn-two').on('click', function(e) {
  	$('#gif-two')
  		.addClass('show', 500 )
  	    .queue(function() {
  	      $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif2.gif?" + Math.random() ).dequeue();
  	    })
  	    $('#gif-one').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif1.jpg").dequeue();
	    	
  		})
  		$('#gif-three').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif3.jpg").dequeue();
	    	
  		})
  		$('#gif-four').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif4.jpg").dequeue();
	    	
  		})
  	$('#gif-caption-2').addClass('show');
  	$('.percent-2').addClass('show');
  	e.preventDefault();
  });
  $('#chaos-btn-three').on('click', function(e) {
  	$('#gif-three')
  		.addClass('show', 500 )
  	    .queue(function() {
  	      $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif3.gif?" + Math.random() ).dequeue();
  	    })
  	    $('#gif-one').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif1.jpg").dequeue();
	    	
  		})
  		$('#gif-two').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif2.jpg").dequeue();
	    	
  		})
  		$('#gif-four').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif4.jpg").dequeue();
	    	
  		})
  	$('#gif-caption-3').addClass('show');
  	$('.percent-3').addClass('show');
  	e.preventDefault();
  });
  $('#chaos-btn-four').on('click', function(e) {
  	$('#gif-four')
  		.addClass('show', 500 )
  	    .queue(function() {
  	      $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif4.gif?" + Math.random() ).dequeue();
  	    })
  	    $('#gif-one').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif1.jpg").dequeue();
	    	
  		})
  		$('#gif-three').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif3.jpg").dequeue();
	    	
  		})
  		$('#gif-two').delay(500).queue(function(){
  	    	$(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif2.jpg").dequeue();
	    	
  		})
  	$('#gif-caption-4').addClass('show');
  	$('.percent-4').addClass('show');
  	e.preventDefault();
  });


  //Whole Life stat animations
  $('#whole-life-one').on('click', function(e) {
    $('#gif-one')
      .addClass('show', 500 )
        .queue(function() {
          $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_01.gif?" + Math.random() ).dequeue();
        })
        $('#gif-two').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_02.png").dequeue();
      
      })
      $('#gif-three').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_03.png").dequeue();
      
      })
      $('#gif-four').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_04.png").dequeue();
      
      })
      $('#gif-five').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_05.png").dequeue();
      
      })

    $('#gif-caption-1').addClass('show');
    $('.percent-1').addClass('show');
    e.preventDefault();
  });
  $('#whole-life-two').on('click', function(e) {
    $('#gif-two')
      .addClass('show', 500 )
        .queue(function() {
          $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_02.gif?" + Math.random() ).dequeue();
        })
        $('#gif-one').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_01.png").dequeue();
      
      })
      $('#gif-three').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_03.png").dequeue();
      
      })
      $('#gif-four').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_04.png").dequeue();
      
      })
      $('#gif-five').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_05.png").dequeue();
      
      })
    $('#gif-caption-2').addClass('show');
    $('.percent-2').addClass('show');
    e.preventDefault();
  });
  $('#whole-life-three').on('click', function(e) {
    $('#gif-three')
      .addClass('show', 500 )
        .queue(function() {
          $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_03.gif?" + Math.random() ).dequeue();
        })
        $('#gif-one').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_01.png").dequeue();
      
      })
      $('#gif-two').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_02.png").dequeue();
      
      })
      $('#gif-four').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_04.png").dequeue();
      
      })
      $('#gif-five').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_05.png").dequeue();
      
      })
    $('#gif-caption-3').addClass('show');
    $('.percent-3').addClass('show');
    e.preventDefault();
  });
  $('#whole-life-four').on('click', function(e) {
    $('#gif-four')
      .addClass('show', 500 )
        .queue(function() {
          $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_04.gif?" + Math.random() ).dequeue();
        })
        $('#gif-one').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_01.png").dequeue();
      
      })
      $('#gif-three').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_03.png").dequeue();
      
      })
      $('#gif-two').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_02.png").dequeue();
      
      })
      $('#gif-five').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_05.png").dequeue();
      
      })
    $('#gif-caption-4').addClass('show');
    $('.percent-4').addClass('show');
    e.preventDefault();
  });
  $('#whole-life-five').on('click', function(e) {
    $('#gif-five')
      .addClass('show', 500 )
        .queue(function() {
          $( this ).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_05.gif?" + Math.random() ).dequeue();
        })
        $('#gif-one').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_01.png").dequeue();
      
      })
      $('#gif-three').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_03.png").dequeue();
      
      })
      $('#gif-two').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_02.png").dequeue();
      
      })
      $('#gif-four').delay(500).queue(function(){
          $(this).attr( "src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_04.png").dequeue();
      
      })
    $('#gif-caption-5').addClass('show');
    $('.percent-5').addClass('show');
    e.preventDefault();
  });


  $('.hover-chart .list-btn').on('click', function(e) {
    $('.hover-chart .list-btn').removeClass("active"); //you can list several class names 
    $(this).addClass('active');
  

	
    e.preventDefault();
  });

  $('#chart-btn-1').on('click' , function(e) {
  	// removeClass
  	$('.bar-chart').attr('class', function(index, classNames) {
  	    return classNames.replace('active', '');
  	});
  	// addClass
  	$('.chart-1').attr('class', function(index, classNames) {
  	    return classNames + ' active';
  	});
  	e.preventDefault();
  });

  $('#chart-btn-2').on('click' , function(e) {
  	// removeClass
  	$('.bar-chart').attr('class', function(index, classNames) {
  	    return classNames.replace('active', '');
  	});
  	// addClass
  	$('.chart-2').attr('class', function(index, classNames) {
  	    return classNames + ' active';
  	});
  	e.preventDefault();
  });

  $('#chart-btn-3').on('click' , function(e) {
  	// removeClass
  	$('.bar-chart').attr('class', function(index, classNames) {
  	    return classNames.replace('active', '');
  	});
  	// addClass
  	$('.chart-3').attr('class', function(index, classNames) {
  	    return classNames + ' active';
  	});
  	e.preventDefault();
  });

  $('#chart-btn-4').on('click' , function(e) {
  	// removeClass
  	$('.bar-chart').attr('class', function(index, classNames) {
  	    return classNames.replace('active', '');
  	});
  	// addClass
  	$('.chart-4').attr('class', function(index, classNames) {
  	    return classNames + ' active';
  	});
  	e.preventDefault();
  });

  $('#chart-btn-5').on('click' , function(e) {
  	// removeClass
  	$('.bar-chart').attr('class', function(index, classNames) {
  	    return classNames.replace('active', '');
  	});
  	// addClass
  	$('.chart-5').attr('class', function(index, classNames) {
  	    return classNames + ' active';
  	});
  	e.preventDefault();
  });

  $('#chart-btn-6').on('click' , function(e) {
  	// removeClass
  	$('.bar-chart').attr('class', function(index, classNames) {
  	    return classNames.replace('active', '');
  	});
  	// addClass
  	$('.chart-6').attr('class', function(index, classNames) {
  	    return classNames + ' active';
  	});
  	e.preventDefault();
  });

  $('#chart-btn-7').on('click' , function(e) {
  	// removeClass
  	$('.bar-chart').attr('class', function(index, classNames) {
  	    return classNames.replace('active', '');
  	});
  	// addClass
  	$('.chart-7').attr('class', function(index, classNames) {
  	    return classNames + ' active';
  	});
  	e.preventDefault();
  });





  $('#tri-link-1').on('click' , function(e) {
  	//$('.triangle.desktop').removeClass();
  	$('.svg-triangle').addClass("tri-1-active");
  	$('.svg-triangle').removeClass('tri-2-active tri-3-active tri-4-active');
  	e.preventDefault();
  });

  $('#tri-link-2').on('click' , function(e) {
  	//$('.triangle.desktop').removeClass();
  	$('.svg-triangle').addClass("tri-2-active");
  	$('.svg-triangle').removeClass('tri-1-active tri-3-active tri-4-active');
  	e.preventDefault();
  });

  $('#tri-link-3').on('click' , function(e) {
  	//$('.triangle.desktop').removeClass();
  	$('.svg-triangle').addClass("tri-3-active");
  	$('.svg-triangle').removeClass('tri-1-active tri-2-active tri-4-active');
  	e.preventDefault();
  });

  $('#tri-link-4').on('click' , function(e) {
  	//$('.triangle.desktop').removeClass();
  	$('.svg-triangle').addClass("tri-4-active");
  	$('.svg-triangle').removeClass('tri-1-active tri-2-active tri-3-active');
  	e.preventDefault();
  });



  $('.triangle .list-btn').on('click', function(e) {
    $('.triangle .list-btn').removeClass("active"); //you can list several class names 
    $(this).addClass('active');
    e.preventDefault();
  });

  // Desktop Priorities Slider Button

  $('#priorities-desktop .btn').on('click', function(e) {
  	// $('.priorities-facts').addClass("animated fadeInUp");
  	$('.blue-overlay').addClass("animated fadeIn");
  	$(".priorities-facts").delay(500).queue(function(){
      	$(this).addClass("animated fadeInUp").dequeue();
    	
  	})
  });

  // Quiz Disclaimer Close Button

  $('.float-disclaimer .close').on('click', function(e) {
  	// $('.priorities-facts').addClass("animated fadeInUp");
  	$('.float-disclaimer').addClass("animated fadeOutDown");
  });


  $("select:not(#contact-method,#distance)").selectBoxIt({

      // Uses the jQuery 'fadeIn' effect when opening the drop down
      showEffect: "fadeIn",

      // Sets the jQuery 'fadeIn' effect speed to 400 milleseconds
      showEffectSpeed: 400,

      // Uses the jQuery 'fadeOut' effect when closing the drop down
      hideEffect: "fadeOut",

      // Sets the jQuery 'fadeOut' effect speed to 400 milleseconds
      hideEffectSpeed: 400,
      autoWidth: false,
      showFirstOption: false,
      downArrowIcon: "icon-hand-down"

    });

  //Quiz Input Sliders
  $(".range").ionRangeSlider({
    grid_snap: true,
    grid: true,
    grid_num: 100,
    min: 1,
    max: 4,
    hide_min_max: true,
    onChange: function (data) {
          // console.log("onFinish");
          $( '.irs-slider' ).addClass( "rubberBand animated" );
  	},
  	onFinish: function (data) {
  	    // console.log("onChange");
  	    setTimeout(function(){$( '.irs-slider' ).removeClass( "rubberBand animated" )}, 1000); 
      
        arrayIndex = parseInt(data.input.data('question')) - 1;
        answers[arrayIndex] = data.from;
        console.log(answers);
  	},
    prettify: function(num) {
      if (num == 1) {
        return "Not accurately at all"
      } else if (num == 2) {
        return "Not very accurately"
      } else if (num == 3) {
        return "Somewhat accurately"
      } else {
        return "Very accurately"
      }
    }
  });




  // Slick Sliders
  // $('#panel-facts').slick({
  // 	dots: false,
  // 	swipe: false,
  // 	infinite: false,
  // 	arrows: false,
  // 	fade: true,
  // 	//speed: 1000,
  // 	autoplaySpeed: 5000

  // });

  $('.single-item').slick({
  	dots: true,
  	swipe: false,
  	infinite: false
  });


  $('.lc-single-item').slick({
  	dots: true,
  	swipe: false,
  	infinite: false,
  	//arrows: false,
  	//fade: true,
  	nextArrow: '.quiz-next',
    	prevArrow: '.quiz-prev',
    	responsive: [
    		{
    			breakpoint: 769,
    			settings: {
    				adaptiveHeight: true
    			}
    		}
    	]
  	
  });

  $('.radio_question').click(function(){

    var currentSlide = $('.lc-single-item').slick('slickCurrentSlide');
  
    if(currentSlide == 4){
      question1 = $(".radio_question[data-question='7']:checked");
      question2 = $(".radio_question[data-question='8']:checked");
    
      if(question1.length > 0 && question2.length > 0){
        $('.quiz5 .quiz-next').addClass('show_next');
      };
    }
  
    if(currentSlide == 5){
      question1 = $(".radio_question[data-question='9']:checked");
      if(question1.length > 0){
        $('.quiz6 .quiz-next').addClass('show_next');
      };
    }
  
    if(currentSlide == 6){
      question1 = $(".radio_question[data-question='10']:checked");
      question2 = $(".radio_question[data-question='11']:checked");
      question3 = $(".radio_question[data-question='12']:checked");
      question4 = $(".radio_question[data-question='13']:checked");
      if(question1.length > 0 && question2.length > 0 && question3.length > 0 && question4.length > 0){
        $('.quiz7 .quiz-next').addClass('show_next');
      };
    }
  
    if(currentSlide == 7){
      question1 = $(".radio_question[data-question='14']:checked");
      question2 = $(".radio_question[data-question='15']:checked");
      question3 = $(".radio_question[data-question='16']:checked");
      question4 = $(".radio_question[data-question='17']:checked");
      question5 = $(".radio_question[data-question='18']:checked");
    
      if(question1.length > 0 && question2.length > 0 && question3.length > 0 && question4.length > 0 && question5.length > 0){
        $('.quiz8 .quiz-next').addClass('show_next');
      };
    }
  
    if(currentSlide == 8){
      question1 = $(".radio_question[data-question='19']:checked");
      question2 = $(".radio_question[data-question='20']:checked");
      question3 = $(".radio_question[data-question='21']:checked");
      question4 = $(".radio_question[data-question='22']:checked");
      question5 = $(".radio_question[data-question='23']:checked");
    
      if(question1.length > 0 && question2.length > 0 && question3.length > 0 && question4.length > 0 && question5.length > 0){
        $('#sendButton').addClass('show_next');
      };
    }
  
  });



  $('#priorities-desktop:not(.myth-desktop)').slick({
  	dots: true,
  	arrows: false,
  	//rtl: true,
  	//autoplay: false,
  	fade: true,
  	speed: 1500,
  	autoplaySpeed: 3000
  });

  $('.myth-desktop').slick({
    dots: true,
    arrows: false,
    //rtl: true,
    //autoplay: false,
    fade: true,
    speed: 1500,
    autoplaySpeed: 10000
  });

  $('.about-slider').slick({
  	dots: true,
  	arrows: false,
  	//rtl: true,
  	//autoplay: false,
  	fade: true,
  	speed: 2000,
  	autoplaySpeed: 5000
  });

  $('.chaos-slider').slick({
  	dots: true,
  	arrows: false,
  	swipe: false,
  	//autoplay: true,
  	autoplaySpeed: 4000
  });
  $('.wl-mobile-slider').slick({
    dots: true,
    arrows: false,
    swipe: false,
    //autoplay: true,
    autoplaySpeed: 4000
  });

  $('.priorities-slider:not(.myth-slider-wrapper)').slick({
  	arrows: true,
  	vertical: true,
  	draggable: false,
  	autoplaySpeed: 4000,
  	autoplay: true
  });

  $('.about-mobile-slider').slick({
  	arrows: true,
  	vertical: true,
  	draggable: false,
  	autoplaySpeed: 8000
  });


  $('.stats-slider').slick({
  	arrows: true,
  	vertical: true,
  	swipe: false,
  	autoplaySpeed: 8000,
  	autoplay: true
  	//verticalSwiping: true,
  	//speed: 1000
  });

  $('.tri-slider').slick({
  	arrows: true,
  	fade: true
  });

  $('.results-slider').slick({
  	arrows: false,
  	dots: false,
  	infinite: false,
  	centerMode: true,
  	initialSlide: 1,
  	//centerPadding: '5px',
  	//slide: 'tiles'
  });

});









jQuery( document ).ready(function( $ ) {
	



  $(".radio_question").click(function(){
    arrayIndex = $(this).data('question') - 1;
    answers[arrayIndex] = parseInt($(this).val());
    console.log(answers);
  });
  

  
  $("select#age, select#gender").change(function(){
    arrayIndex = $(this).data('question') - 1;
    answers[arrayIndex] = parseInt($(this).find('option:selected').val());
    console.log(answers);
    
    question1 = $("select[data-question='1']").find("option:selected");
    question2 = $("select[data-question='2']").find("option:selected");
    if (question1.length > 0 && question2.length > 0){
      $('#startQuiz').addClass("show_next");
    }
  });
  
  $('#startQuiz').click(function(){
    $('section.the-quiz').addClass('show_quiz');
    $('section.quiz-intro1').addClass('show_quiz');
    $('section.quiz-intro2').addClass('show_quiz');
    
  })
  
  
  $('#sendButton').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    $this.html("Submitted. . . ");
    var quiz = Quiz.instance({url: "https://guardian-quiz.node1504.speedyrails.net/scores"});
    quiz.setAnswers(answers);
    quiz.save().success(function(savedQuiz) {
      
      if(savedQuiz.segment == 1){
        segment = "AMBITIOUS SPENDER";
      }
      if(savedQuiz.segment == 2){
        segment = "DAY-TO-DAY DECISION-MAKER";
      }
      if(savedQuiz.segment == 3){
        segment = "RETIREMENT REALIST";
        
      }
      if(savedQuiz.segment == 4){
        segment = "CONFIDENT PLANNER";
      }
      
      ga('send', 'event', "Quiz", "Completed ", segment);
      
      window.location = "/c2c/results-" + savedQuiz.segment + ".html";
      //return value:  savedQuiz.segment
      //TO DO - redirect
    });
  });

  


	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	////////////////////////////////////////////////////////////////////////////////////////////////////////
        // Fly Out Tab
        /////////
        ///

//        var flyOutTab = function() {
//
//          $('.fly-out-tab--link-wrapper .fly-out-tab--link-one a, .fly-out-tab--link-wrapper .fly-out-tab--link-two a').attr('target', '_top');
//          $('.fly-out-tab.no-fr .fly-out-tab--link-wrapper .fly-out-tab--link-one a').attr('target', '_blank');
//          $('.fly-out-tab h4').on('click', function() {
//            $(this).toggleClass('fly-out-tab--x-toggle');
//            $('.fly-out-tab').toggleClass('fly-out-tab--toggle');
//          });
//
//        };
//
//        flyOutTab();

    $('.chaos-slider').on('afterChange', function(event, slick, currentSlide){
    	$('.slick-active #gif-one-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif1.gif?" + Math.random());
    	$('.slick-active #gif-two-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif2.gif?" + Math.random());
    	$('.slick-active  #gif-three-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif3.gif?" + Math.random());
    	$('.slick-active #gif-four-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif4.gif?" + Math.random());
	});
	$('.chaos-slider').on('beforeChange', function(event, slick, currentSlide){
    	$('.slick-active #gif-one-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif1.jpg");
    	$('.slick-active #gif-two-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif2.jpg");
    	$('.slick-active  #gif-three-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif3.jpg");
    	$('.slick-active #gif-four-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/gif4.jpg");
	});

      $('.wl-mobile-slider').on('afterChange', function(event, slick, currentSlide){
        $('.slick-active #gif-one-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_01.gif?" + Math.random());
        $('.slick-active #gif-two-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_02.gif?" + Math.random());
        $('.slick-active  #gif-three-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_03.gif?" + Math.random());
        $('.slick-active #gif-four-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_04.gif?" + Math.random());
        $('.slick-active #gif-five-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_05.gif?" + Math.random());
    });
    $('.wl-mobile-slider').on('beforeChange', function(event, slick, currentSlide){
        $('.slick-active #gif-one-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_01.png");
        $('.slick-active #gif-two-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_02.png");
        $('.slick-active  #gif-three-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_03.png");
        $('.slick-active #gif-four-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_04.png");
        $('.slick-active #gif-five-m').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_05.png");
    });
	


	$('.priorities-slider:not(.myth-slider-wrapper)').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	  $('.copy-block p').removeClass('animated fadeInUp');
	});
	$('.priorities-slider:not(.myth-slider-wrapper)').on('afterChange', function(event, slick, currentSlide){
    	$('.copy-block p').addClass('animated fadeInUp');
	});
  $(".myth-desktop").on('beforeChange', function(event, slick, currentSlide){
      $('.c-content p').removeClass('animated fadeInUp');
    });
  $(".myth-desktop").on('afterChange', function(event, slick, currentSlide){
      $('.c-content p:first-of-type').addClass('animated fadeInUp');
      setTimeout(function(){
        $('.c-content p:last-of-type').addClass('animated fadeInUp');
      }, 1100)
    });

  $('.myth-slider-wrapper').slick({
    arrows: true,
    vertical: true,
    draggable: false,
    autoplaySpeed: 10000,
    autoplay: false
  });
  // $(".myth-slider-wrapper").slick('slickPause');

  $(".myth-slider-wrapper").on('beforeChange', function(event, slick, currentSlide){
      $('.copy-block p').removeClass('animated fadeInUp');
    });
  $(".myth-slider-wrapper").on('afterChange', function(event, slick, currentSlide){
      $('.copy-block p:first-of-type').addClass('animated fadeInUp');
      setTimeout(function(){
        $('.copy-block p:last-of-type').addClass('animated fadeInUp');
      }, 1100)
    });

	$('.stats-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
     	$('.stats-slider .slick-active p').removeClass('fadeInUp').addClass('animated fadeOutUp');
	 });
	$('.stats-slider').on('afterChange', function(event, slick, currentSlide){
    	$('.stats-slider .slick-active p').addClass('animated fadeInUp').removeClass('fadeOutUp');
	});

	// Priorities Desktop Slider Animation
	$('.landing-page:not(#myth-desktop)').on('afterChange', function(event, slick, currentSlide){
    	$('.landing-page .slick-active .c-content').addClass('animated fadeInUp').removeClass('fadeOutUp');
    	$('.landing-page .slick-active .c-right img').addClass('animated fadeIn');
    	$('.landing-page .slick-active .c-left').removeClass('full-width');

	});
	$('.landing-page:not(#myth-desktop)').on('beforeChange', function(event, slick, currentSlide){
		$(".landing-page .slick-active .c-content").delay(100).queue(function(){
	    	$(this).removeClass('fadeInUp').addClass('fadeOutUp').dequeue();
	    	
		})
		// $('.landing-page .slick-active .c-content').removeClass('fadeInUp').addClass('fadeOutUp');
		$('.landing-page .slick-active .c-right img').removeClass('fadeIn');
		$(".landing-page .slick-active .c-left").delay(500).queue(function(){
	    	$(this).addClass("full-width").dequeue();
	    	
		})

	});
  
  
  
	// About Desktop Slider Animation
	$('.about-slider').on('afterChange', function(event, slick, currentSlide){
    	$('.about-slider .slick-active .c-content').addClass('animated fadeInUp').removeClass('fadeOutUp');
    	$('.about-slider .slick-active .c-right img').addClass('animated fadeIn');
    	$('.about-slider .slick-active .c-left').removeClass('full-width');
    	$('.about-1.slick-active .c-right img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_01.gif?" + Math.random());
    	$('.about-2.slick-active .c-right img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_02.gif?" + Math.random());
    	$('.about-3.slick-active .c-right img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_03.gif");
    	$('.about-4.slick-active .c-right img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_04.gif");
	});
	$('.about-slider').on('beforeChange', function(event, slick, currentSlide){
		$(".about-slider .slick-active .c-content").delay(100).queue(function(){
	    	$(this).removeClass('fadeInUp').addClass('fadeOutUp').dequeue();
	    	
		})
		// $('.landing-page .slick-active .c-content').removeClass('fadeInUp').addClass('fadeOutUp');
		$('.about-slider .slick-active .c-right img').removeClass('fadeIn');
		$(".about-slider .slick-active .c-left").delay(500).queue(function(){
	    	$(this).addClass("full-width").dequeue();
	    	
		})
		$(".about-1.slick-active .c-right img").delay(1000).queue(function(){
	    	$(this).attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_01.jpg").dequeue();
	    	
		})
		$(".about-2.slick-active .c-right img").delay(1000).queue(function(){
	    	$(this).attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_02.jpg").dequeue();
	    	
		})
		$(".about-3.slick-active .c-right img").delay(1000).queue(function(){
	    	$(this).attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_03.jpg").dequeue();
	    	
		})
		$(".about-4.slick-active .c-right img").delay(1000).queue(function(){
	    	$(this).attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_04.jpg").dequeue();
	    	
		})

	});
	$('.about-mobile-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	  $('.copy-block p').removeClass('animated fadeInUp');
	  $('#priority-1.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_01.jpg");
		$('#priority-2.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_02.jpg");
		$('#priority-3.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_03.jpg");
		$('#priority-4.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_04.jpg");
	});
	$('.about-mobile-slider').on('afterChange', function(event, slick, currentSlide){
    	$('.copy-block p').addClass('animated fadeInUp');
    	$('#priority-1.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_01.gif?" + Math.random());
    	$('#priority-2.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_02.gif?" + Math.random());
    	$('#priority-3.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_03.gif?" + Math.random());
    	$('#priority-4.slick-active img').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/About_Gif_04.gif?" + Math.random());
	});



	$('.stats-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
     	$('.stats-slider .slick-active p').removeClass('fadeInUp').addClass('animated fadeOutUp');
	 });
	$('.stats-slider').on('afterChange', function(event, slick, currentSlide){
    	$('.stats-slider .slick-active p').addClass('animated fadeInUp').removeClass('fadeOutUp');
	});

	$('#panel-facts').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	  $('#panel-facts .slick-active p').addClass('animated fadeOutUp');
	});
	$('#panel-facts').on('afterChange', function(event, slick, currentSlide, nextSlide){
	  $('#panel-facts .slick-active p').removeClass('fadeOutUp');
	});



	//Quiz Carousel Buttons

	$('.lc-single-item').on('afterChange', function(event, slick, currentSlide){
    	// $('.slick-active table tr').addClass('animated flipInX');
    	$(".slick-active table tr").each(function(i,el) {
		    var $this = $(this);
		    setTimeout(function() {
		            $this.addClass('animated flipInX');
		        }, i*250); // milliseconds
		});
		$(".slick-active .quiz-table .answer").each(function(i,el) {
		    var $this = $(this);
		    setTimeout(function() {
		            $this.addClass('animated flipInX');
		        }, i*250); // milliseconds
		});
	});



  // $('.quiz-next').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  //   console.log(event);
  // });
	$('.quiz-next').slick('slickNext');
  
	$('.quiz-prev').slick('slickPrev');
	// $('.lc-single-item').slick({
 //      prevArrow:"<button class='btn quiz-prev'>Previous</button>",
 //      nextArrow:"<button class='btn quiz-next'>Next</button>"
 //  });
 // Quiz Scroll To Top
});


  
jQuery( document ).on('click', '.the-quiz button', function(event){
    event.preventDefault();

    jQuery('html, body').animate({
        scrollTop: jQuery( jQuery.attr(this, 'href') ).offset().top - 72
    }, 500);
});


//$("#startQuiz").click(function() {
//    $('html, body').animate({
//        scrollTop: $("#quiz-start").offset().top
//    }, 2000);
//});

