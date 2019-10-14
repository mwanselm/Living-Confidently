
jQuery.noConflict();
jQuery(document).ready(function ($) {


  $('.answer-buttons .btn').on('click', function(e) {
    button_label = $(this).text();
    ga('send', 'event', 'LIAM-Interactive panel', 'Click', button_label);
  });
  $('#liam-video-btn .btn-liam').on('click', function(e) {
    ga('send', 'event', 'LIAM-video', 'Click', 'The Benefits of Mutuality');
  });
  $('#liam_wholeistic').on('click', function(e) {    
    ga('send', 'event', 'LIAM-Resources', 'Click', 'Whole*isitic Thinking');
  });
  $('#liam_wholeresources').on('click', function(e) {
    ga('send', 'event', 'LIAM-Resources', 'Click', 'Whole Life Resources');
  });
  $('#learnmore_liam').on('click', function(e) {    
    ga('send', 'event', 'Whole*istic Thinking', 'Click', 'Learn More-LIAM');
  });
  $('#wholeistic_find_a_rep').on('click', function(e) {    
    ga('send', 'event', 'LIAM-PR', 'Click', 'Find a Rep');
  });
  $('#wholeistic_back').on('click', function(e) {    
    ga('send', 'event', 'Whole*istic Thinking', 'Click', 'Resources-Back');
  });
  
  

});