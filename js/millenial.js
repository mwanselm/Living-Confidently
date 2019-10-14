// Main JS file

var ME = {};

(function($) {

	ME._init = function() {	    
    ME.startListeners();
    
    var animationload = bodymovin.loadAnimation({
      container: document.getElementById('animload'),
      renderer: 'svg',
      loop: true,
      autoplay: false,
      path: '/wp-content/themes/lc_phase_2/json/load_icon.json'
    }); 
    
    $('#entertimes').on('click', function() {
     animationload.play(); 
     //track click on Go button
     ga('send','event', 'Click', 'Go', 'Click Go');
     console.log('Clicked Go');
    });
        
	}
  
	ME.startListeners = function() {        
		$('#entertimes').on('click', handlers.submitTimes);     
	}
  
  function numberWithCommas(x)  {
   return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
  
	var handlers = {
        
		submitTimes: function(e) {
    
      var X = jQuery("#times").val();
      
       if ( X=='' ) {
        console.log('empty');
        alert('Please enter a number between 0-99.');
        jQuery("#times").val('') ;
        return false;
      }
      
      if (X > 99) {
         console.log('too many');
         alert('Please enter a number between 0-99.');
         jQuery("#times").val('') ;
        return false;
      }
      
      if (X >= 5) {
        jQuery("#rt-average").addClass('show');
      }
      if ( (X > 0) && (X < 5)) {
        jQuery("#rt-belowaverage").addClass('show');
      }
      if ( X == 0 ) {
        jQuery("#rt-zero").addClass('show');
        X = 5;
      }
      
      jQuery("#millenial").addClass('calculating');
      jQuery("#millenial").removeClass('start');
      jQuery('#millenial-intro h1, #millenial-intro p').removeClass('inview');
      
      var Y = X * 13000; 
      
      var calc1 = Y / 430;
      calc1 = calc1.toFixed(0);
      calc1 = numberWithCommas(calc1);
      if ( calc1 < 1 ) {
        calc1 = 'less than 1';
      }
      jQuery("#calc1").html(calc1);
      
      var calc2 = Y / 500;
      calc2 = calc2.toFixed(0);
      calc2 = numberWithCommas(calc2);
      if ( calc2 < 1 ) {
        calc2 = 'less than 1';
      }
      jQuery("#calc2").html(calc2);
      
      var calc3 = Y / 150;
      calc3 = calc3.toFixed(0);
      calc3 = numberWithCommas(calc3);
      if ( calc3 < 1 ) {
        calc3 = 'less than 1';
      }
      jQuery("#calc3").html(calc3);
      
      var calc4 = Y / 5000;
      calc4 = calc4.toFixed(0);
      calc4 = numberWithCommas(calc4);
      if ( calc4 < 1 ) {
        calc4 = 'less than 1';
      }
      jQuery("#calc4").html(calc4);
      
      var calc5 = Y / 1000;
      calc5 = calc5.toFixed(0);
      calc5 = numberWithCommas(calc5);
      if ( calc5 < 1 ) {
        calc5 = 'less than 1';
      }
      jQuery("#calc5").html(calc5);
      
      var calc6 = Y / 23500;
      calc6 = calc6.toFixed(0);
      calc6 = numberWithCommas(calc6);
      if ( calc6 < 1 ) {
        calc6 = 'less than 1';
      }
      jQuery("#calc6").html(calc6);
      
      
      if (calc6 <= 1) {
        var yeartext = 'year';
      }
      else {
        var yeartext = 'years';
      }
      jQuery("#yeartext").html(yeartext);
      
      var calc7 = Y / 1300;
      calc7 = calc7.toFixed(0);
      calc7 = numberWithCommas(calc7);
      if ( calc7 < 1 ) {
        calc7 = 'less than 1';
      }
      jQuery("#calc7").html(calc7);
      
      var calc8 = Y / 54700;
      calc8 = calc8.toFixed(0);
      calc8 = numberWithCommas(calc8);
      if ( calc8 < 1 ) {
        calc8 = 'less than 1';
      }
      jQuery("#calc8").html(calc8);
      
      var calc9 = Y / 240;
      calc9 = calc9.toFixed(0);
      calc9 = numberWithCommas(calc9);
      if ( calc9 < 1 ) {
        calc9 = 'less than 1';
      }
      jQuery("#calc9").html(calc9);
      
      var calc10 = Y / 120;
      calc10 = calc10.toFixed(0);
      calc10 = numberWithCommas(calc10);
      if ( calc10 < 1 ) {
        calc10 = 'less than 1';
      }
      jQuery("#calc10").html(calc10);
      
      var calc11 = Y / 15400;
      calc11 = calc11.toFixed(0);
      calc11 = numberWithCommas(calc11);
      if ( calc11 < 1 ) {
        calc11 = 'less than 1';
      }
      jQuery("#calc11").html(calc11);
      
      var calc12 = Y / 120;
      calc12 = calc12.toFixed(0);
      calc12 = numberWithCommas(calc12);
      if ( calc12 < 1 ) {
        calc12 = 'less than 1';
      }
      jQuery("#calc12").html(calc12);
      
      var xfixed = (X*1).toFixed(0);
      var yfixed = (Y*1).toFixed(0);
      
      var xfixed2 = (X*1).toFixed(0);
      var yfixed2 = (Y*1).toFixed(0);
            
      newX = numberWithCommas(xfixed2);
      newY = numberWithCommas(yfixed2);
      
      jQuery("#xtimes").html(newX);
      jQuery("#ytimes").html(newY);
                       
      jQuery("#plate").hide();
      jQuery("#animload").addClass('show');
      
      
      setTimeout(function(){     
        jQuery("#millenial").addClass('resultstime');
        jQuery("#millenial").removeClass('calculating');
        
        $('#results-carousel').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 2,
          arrow: true,
          autoplay:true,
          autoplaySpeed: 10000,
          infinite: false,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
          ]
        });
      
        $('#final-carousel').slick({
          dots: false,
          infinite: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrow: false,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
          ]
        }); 
        
        jQuery(".slick-dots").append('<li id="extra-dot"><button></button></li>');
        
        jQuery('button.slick-prev.slick-disabled').attr({readonly:"readonly"});
        
        //go back to initial screen on first back arrow

        jQuery(document).on('mousedown', function(event) {
          
          if ( jQuery("#slick-slide00").hasClass('slick-active') ) {
            
            var targetClassName = $(event.target).attr('class');
             
            if(targetClassName == 'slick-prev slick-arrow slick-disabled'){
              location.reload();
            }
            
          }
  
        });
                        
        //go to last slide
        jQuery('body').on('click', '#extra-dot', function() {
          jQuery("#millenial").addClass('lastSlide');
          jQuery("#final-carousel").show();                   
        });
                                             
        
      }, 3000);   
               
      
      setTimeout(function(){  
        
        var animation1 = bodymovin.loadAnimation({
          container: document.getElementById('anim1'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: '/wp-content/themes/lc_phase_2/json/1L_hand_concert.json'
        });

        var animation2 = bodymovin.loadAnimation({
          container: document.getElementById('anim2'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: '/wp-content/themes/lc_phase_2/json/1R_plant_heart.json'
        }); 
        
        
        var animation3 = bodymovin.loadAnimation({
          container: document.getElementById('anim3'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/2L_lotus_blossom.json'
        });
  
        var animation4 = bodymovin.loadAnimation({
          container: document.getElementById('anim4'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/2R_safe.json'
        });
  
        var animation5 = bodymovin.loadAnimation({
          container: document.getElementById('anim5'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/3L_phone_emoji.json'
        });
  
        var animation6 = bodymovin.loadAnimation({
          container: document.getElementById('anim6'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/3R_balloons.json'
        });
  
        var animation7 = bodymovin.loadAnimation({
          container: document.getElementById('anim7'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/4L_plane_fast.json'
        });
  
        var animation8 = bodymovin.loadAnimation({
          container: document.getElementById('anim8'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/4R_pennant.json'
        });
  
        var animation9 = bodymovin.loadAnimation({
          container: document.getElementById('anim9'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/5L_cake.json'
        });
  
        var animation10 = bodymovin.loadAnimation({
          container: document.getElementById('anim10'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/5R_paycheck.json'
        });
  
        var animation11 = bodymovin.loadAnimation({
          container: document.getElementById('anim11'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/6L_delorean.json'
        });
  
        var animation12 = bodymovin.loadAnimation({
          container: document.getElementById('anim12'),
          renderer: 'svg',
          loop: true,
          autoplay: false,
          path: '/wp-content/themes/lc_phase_2/json/6R_family_photo.json'
        });
  
        var animationfinal = bodymovin.loadAnimation({
          container: document.getElementById('animfinal'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: '/wp-content/themes/lc_phase_2/json/7_handshake.json'
        });  
        
        $("#results-carousel").on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            
            //track clicks
            if(currentSlide < nextSlide){
              jQuery("#results-carousel .slick-active" ).each(function() {
                var target = $(this).data('slick-index');
                ga('send','event', 'Cash Stash Dash', 'Click', 'Go Next, Panel' + target);
                console.log('Clicked Next');
              });
            } else{
              jQuery( "#results-carousel .slick-active" ).each(function() {
                var target = $(this).data('slick-index');
                ga('send','event', 'Cash Stash Dash', 'Click', 'Go Previous, Panel' + target);
                console.log('Clicked Previous');
              });
            }
        });
        
        
        
        // on slide change
        $('#results-carousel').on('afterChange', function(event, slick, currentSlide){
    
          var count = $('#results-carousel .slick-active').length;
          console.log(count);
    
          $( "#results-carousel .slick-active" ).each(function() {
            var target = $(this).data('slick-index');
            if (target) {
              target = target + 1;
              eval('animation'+target).play();
            }
          });
    

          $('#ghost').remove();
          $("button.slick-next.slick-disabled" ).after('<div id="ghost"></div>');
          if ($('#ghost').length) {
             $("#ghost").on('click', function() {
               jQuery("#millenial").addClass('lastSlide');
               jQuery("#final-carousel").show();
             });
          }
          
          // lets check for last slide and if so, pause and add setimeout to trigger ghost
          var $window = $(window);
          var windowsize = $window.width();
          
          //if window is wider than 767
          if ( windowsize > 767) {
            
            console.log(slick.$slides.length);
            console.log(currentSlide);
            $('#results-carousel').slick('slickPlay');
          
            if (slick.$slides.length-2 == currentSlide) {
                console.log("Last slide desktop");
                $('#results-carousel').slick('slickPause');
                
                setTimeout(function(){ 
                 $('#ghost').trigger('click');
                }, 10000);
            }
            
          }
          
          if ( windowsize <= 767) {
            
            console.log(slick.$slides.length);
            console.log(currentSlide);
            $('#results-carousel').slick('slickPlay');

          
            if (slick.$slides.length-1 == currentSlide) {
                console.log("Last slide mobile");
                $('#results-carousel').slick('slickPause');
                
                setTimeout(function(){ 
                 $('#ghost').trigger('click');
                }, 10000);
                
            }
            
          }
          
          
                    
        });
        
        
      }, 4000);  
         
		},
		loadIntroItems: function(e) {
      for ( var i=0; i < items.length; i++ ) {
        var item = items[i];
        // stagger transition with transitionDelay
        item.style[ transitionProp + 'Delay' ] = ( i * 50 ) + 'ms';
        item.classList.toggle('is-moved');
      }
		},
	}

})(jQuery);

jQuery(document).ready(function() {
	ME._init();
  
 
  // get vendor transition property
  var docElemStyle = document.documentElement.style;
  var transitionProp = typeof docElemStyle.transition == 'string' ?
      'transition' : 'WebkitTransition';
  
  jQuery("#millenial").addClass('start');
  
  jQuery('#millenial-stage').one('transitionend webkitTransitionEnd oTransitionEnd', function () {
    var items = document.querySelectorAll('#millenial-intro h1, #millenial-intro p, #millenial-intro #animload');
    for ( var i=0; i < items.length; i++ ) {
      var item = items[i];
      // stagger transition with transitionDelay
      item.style[ transitionProp + 'Delay' ] = ( i * 50 ) + 'ms';
      item.classList.add('inview');
    }
  });
  
  jQuery('#results-carousel').one('transitionend webkitTransitionEnd oTransitionEnd', function () {
    jQuery("#result-top").delay(500).addClass('show');
    jQuery("#millenial").delay(500).addClass('showSlides');
  });
  
  // On edge hit
  jQuery('#results-carousel').on('init', function(event, slick, direction){
    jQuery("#millenial").addClass('animatein');
  });
  
  //go back
  jQuery('#final-prev').on('click', function(){
    //jQuery("#final-carousel").hide();
    jQuery("#millenial").removeClass('lastSlide');
  });
  
  
  
  
  //start over
  jQuery('#recalc').on('click', function(){
    //track click on Recalc button
    ga('send','event', 'Click', 'Cash Stash Dash', 'Click Recalculate');
    console.log('Clicked Recalculate');
    //reload page
    location.reload();
  });
  
  //hover on ghost to make button go solid
  jQuery('#ghost').on('mouseenter', function(){
    jQuery("button.slick-next.slick-disabled").addClass('hover');
  });
  //hover on ghost to make button go solid
  jQuery('#ghost').on('mouseleave', function(){
    jQuery("button.slick-next.slick-disabled").removeClass('hover');
  });
  
  jQuery('#times').keydown(function(e) {
    
    var input = jQuery("#times").val();
    
    if (input >= 100) {
      jQuery("#times").val('') ;
      alert('Please enter a number between 0-99.');
      return false;
    }
    if (input < 0) {
      jQuery("#times").val('') ;
      alert('Please enter a number between 0-99.');
      return false;
    }
    
      var key = e.which;
      var keyCode = e.which;
      if (key == 13) // the enter key code
      {
        $('#entertimes').trigger('click');
      }
      if (keyCode == 190) {
        return true;
      }
      if ( (keyCode != 8 || keyCode == 32 ) && (keyCode < 48 || keyCode > 57)  && (keyCode < 96 || keyCode > 105)  ) { 
        return false;
      }
      

      
  });
  
  //jQuery('#times').on('change', function(){
    //var input = jQuery("#times").val();
    
    //if (input < 0) {
      //jQuery("#times").val('') ;
      //alert('Please enter a number between 0-99.');
      //}
    //if (input >= 100) {
      //jQuery("#times").val('') ;
      //alert('Please enter a number between 0-99.');
      //}
  //});
  
  document.addEventListener("keydown", function(event) {
    console.log(event.which);
    if(event.keyCode == 13){
      jQuery("#entertimes").trigger( "click" );
    }
  });
  
  jQuery("#results-carousel").on('breakpoint', function(event, slick, breakpoint) {
    jQuery(".slick-dots").append('<li id="extra-dot"><button></button></li>');
    console.log('breakpoint');        
    
  });
  
  jQuery("#final-carousel").on('breakpoint', function(event, slick, breakpoint) {
    console.log('breakpoint final');        
    
  });
  
  jQuery(window).on('orientationchange', function() {
    jQuery('#final-carousel').slick('resize');
    jQuery('#final-carousel').slick('setPosition');
    console.log('resized');
  });
  
});


   

 

