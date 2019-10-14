
// analytics = new Array();
// analytics[0] = new Array();
// analytics[1] = new Array();
// analytics[2] = ["Whitepaper", "Download", "Top resource block"]
//



jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
  
  
  //Whole Life Analytics
  
  $('.page-id-4438 .filters').on('change',function(){
    selected = $( ".page-id-4438 .filters" ).text();
    ga('send', 'event', "Whole Life", "Sort", selected);  
  });
  
  
  $(document).on('click','.page-id-5009 .cover-link',function(){
    ga('send', 'event', "Video", "Play", "Whole Life:  Together for the Long Term");  
  });
  
  $(document).on('click','.page-id-5009 .cash_value',function(){
    ga('send', 'event', "Video", "Play", "Whole Life:  Cash Value");  
  });
  
  $(document).on('click','.page-id-5009 .resources-box a',function(){
    clicked = $(this).html();
    ga('send', 'event', "Whole Life", "Resource", clicked);
  });
  
  $(document).on('click','.page-id-5009 .family-reading a',function(){
    ga('send', 'event', "Whole Life", "Resource", "View Resources");
  });
  
  //Whole Life - PR versions
  $(document).on('click','.page-id-6069 .cover-link',function(){
    ga('send', 'event', "Video", "Play", "Whole Life:  Together for the Long Term - PR");  
  });
  
  $(document).on('click','.page-id-6069 .cash_value',function(){
    ga('send', 'event', "Video", "Play", "Whole Life:  Cash Value - PR");  
  });
  
  $(document).on('click','.page-id-6069 .resources-box a',function(){
    clicked = $(this).html() + " - PR";
    ga('send', 'event', "Whole Life", "Resource", clicked);
  });
  
  $(document).on('click','.page-id-6069 .family-reading a',function(){
    ga('send', 'event', "Whole Life", "Resource", "View Resources - PR");
  });
  
  
  $('a').on('click',function(){
    if($(this).attr('href') == "/cash-stash-dash-calculator/"){
      console.log("Cash Stash");
      ga('send','event', 'Homepage', 'Cash Stash Dash button', 'Play the Cash Stash Dash');
    }
  });
  
  
  
  
  
  $(document).on('click','.home .home-hero-content .selectboxit-option',function(){
    clicked = $(this).data('val');
    console.log(clicked);
    ga('send', 'event', "Homepage", "Hero Filter", clicked);  
  });
  
  $(document).on('click','.home .filter-left .selectboxit-option',function(){
    
    this_filter = $(this).data('val');
    
    if ($(".tile-cat-filter li a.active").length > 0){
      this_topic = $(".tile-cat-filter li a.active").html();
    }else{
      this_topic = "All";
    }
    combo = this_filter + " + " + this_topic;
    console.log(combo);
    ga('send', 'event', "Homepage", "Filter", combo);  
  });
  
  //mobile
  $(document).on('click','.home .filter-right .selectboxit-option',function(){
    
    this_topic = $(this).data('val');
    
    this_taxonomy = $(this).data('taxonomy-terms') || 'all';
    
    $('.filter-container .tile-cat-filter li a').removeClass('active');
    $('.filter-container .tile-cat-filter li a[data-taxonomy-terms=' + this_taxonomy + ']').addClass('active');
    
    
    if ($(".filter-left .selectboxit-focus").length > 0){
      this_filter = $(".filter-left .selectboxit-focus").data('val');
    }else{
      this_filter = "Featured";
    }
    combo = this_filter + " + " + this_topic;
    console.log(combo);
    ga('send', 'event', "Homepage", "Filter", combo);  
  });
  //end mobile
  
  $(document).on('click','.home .tile-cat-filter li a',function(){
    
    this_topic = $(this).html();
   
    if ($(".filter-left .selectboxit-focus").length > 0){
      this_filter = $(".filter-left .selectboxit-focus").data('val');
    }else{
      this_filter = "Featured";
    }
    combo = this_filter + " + " + this_topic;
    console.log(combo);
    ga('send', 'event', "Homepage", "Filter", combo);  
  });
  
  
  $(document).on('click','.tool-filter li a',function(){
    clicked = $(this).html();
    console.log(clicked);
    ga('send', 'event', "Tools & Resources", "Filter", clicked);  
  });

  //mobile
  $(document).on('click','.page-template-page-tools-resources-php .selectboxit-focus',function(){
    clicked =  $(this).data('val');
    
    if (clicked !== undefined){
      console.log(clicked);
      ga('send', 'event', "Tools & Resources", "Filter", clicked); 
    } 
  });

  $(document).on('click','.page-template-page-tools-resources-php .hero a',function(){
    clicked = $(this).html();
    console.log(clicked);
    ga('send', 'event', "Tools & Resources", "CTA Click", clicked);  
  });
  
  $(document).on('click','#download_pdf a',function(){
    clicked = $('.article h1').html();
    console.log(clicked);
    ga('send', 'event', "Infographic", "Download", clicked);  
  });
  
  
  // $(document).on('click','#mep_0', function() {
//     clicked = $('.article h1').html();
//     console.log(clicked);
//     ga('send', 'event', "Podcast", "Play", clicked);
//   });
//
  
  
  $(document).on('click','.related a',function(){
    console.log("Related: " + $(this).find('h3').html());
    ga('send', 'event', "Link", "Click", $(this).find('h3').html());
  });
  
  
  function shareEventHandler(evt) { 
      if (evt.type == 'addthis.menu.share') { 
        
          clicked = $('.article h1').html();
          console.log(clicked);
          ga('send', 'event', "Infographic", "Share", clicked);  

      }
  }

  // Listen for the share event
  addthis.addEventListener('addthis.menu.share', shareEventHandler);

 
  
  

  $(document).on('click','a',function(){
    link = $(this).attr('href');
    if (link !== undefined){
      
      
      if(link.indexOf('livingconfidently.com') == -1 || link.indexOf('.pdf') != -1){
        clicked = link;
        console.log(clicked);
        ga('send', 'event', "Link", "Click", clicked);
      }
    }
  });



});

