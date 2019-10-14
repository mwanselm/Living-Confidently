jQuery.noConflict();
jQuery(document).ready(function ($) {
  
  // window.onload = function () { alert("It's loaded!") }
   

    setTimeout(function () {
      // Do something after 2 seconds

      function accordianReduce() {
        $("#accordion").accordion({
          header: ".acc-trigger",
          autoHeight: false,
          active: 'none',
          collapsible: true,
        });
      }
      accordianReduce()
      $('.reduce').on('click', function () {
        accordianReduce()
      })
    }, 2000);
      
    // $(".pod-embed").on("click", function () {
    //     $(this).addClass('ft-click');
    //     $(this).find('.ft-img , .ft-play').fadeOut("slow", function () {
    //         $(".ft-click .ft-frame").fadeIn("slow").trigger("click");
            
    //     });
    //     $(this).filter('.playButton__play').click();
    // });

    $( "a.scrollLink" ).click(function( event ) {
        
    });
    
    $(function(){
        $(".acc-trigger").click(function() {
            episode_number = $(this).data('episode-number');
            player = SC.Widget("podcast_embed" + episode_number);
            player.toggle();
            
            ga('send','event','Podcast-page', ('Play-Episode ' + episode_number));
        });
        
        $('.hero_play').click(function(){
          ga('send','event','Podcast-page', 'Click', "Hero CTA");
          
        });
        $('#all-pod-pagination a').click(function(){
          page_number = $(this).text();
          ga('send','event','Podcast-page', 'Page', ("All Episodes-Page " + page_number));
        });
        
        $('.pod-bio a').click(function(){
          ga('send','event','Podcast-page', 'Click', $(this).text());
        });
        
        if (window.location.hash == "" && window.location.href.indexOf('/page/') != -1){
          $("html, body").scrollTop($('#all-ep').offset().top-90);
        };

        $(".reduce").click(function () {
          episode_number = $(this).data('episode-number');
          player = SC.Widget("podcast_embed" + episode_number);
          player.pause();

        });

        
        

    });
    
    // var widget2 = SC.Widget("pod2");
    // $(function(){
    //     $("#pod-click-2").click(function() {
    //         widget2.play();
    //     });
    // })
    $('.featured-pod .ep-body').each(function(){
      $(this).text($(this).text().substring(0,200));
    });
    
    $('.acc-hide .ep-body').each(function(){
      $(this).text($(this).text().substring(0,200));
    });



    // $(function () {
    //   var charLimit = 200;

    //   var numberOfToggled = document.getElementsByClassName('toggledText');
    //   for (i = 0; i < numberOfToggled.length; i++) {

    //     var el = numberOfToggled[i];
    //     var elText = el.innerHTML.trim();

    //     if (elText.length > charLimit) {
    //       var showStr = elText.slice(0, charLimit);
    //       var hideStr = elText.slice(charLimit);
    //       el.innerHTML = showStr + '<span class="trimmed">' + hideStr + '</span>';
    //       el.parentElement.innerHTML = el.parentElement.innerHTML + "<span class='morePoints'>...</span> <div class='read-more'><a href='#' class='more'></a>";
    //     }

    //   }

    //   window.onclick = function (event) {
    //     if (event.target.className == 'more') {
    //       event.preventDefault();
    //       event.target.parentElement.parentElement.classList.toggle('showAll');

    //     }
    //   }
    // });
});
