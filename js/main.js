//main.js


function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

(function($) {

  if (getParameterByName('t') == "1"){
    setTimeout(function(){
      $('html, body').animate({
              scrollTop: $(".home-tile-grid").offset().top - 20
          }, 100);
    }, 1000);
  };


})(jQuery);

(function($) {

  var $done = 'no';

  $.fn.almDone = function(){
      console.log('All posts have been loaded Here!');
      //get card count
      var resource_count = $(".alm-listing .tile").length;
      if(resource_count==0){
        //handle no results
        console.log("No results were found.");
        $(".no-results").fadeIn();
      }
   };

   $.fn.almComplete = function(alm){
      console.log("Ajax Load More Completed.");
      jQuery(".no-results").hide();

      /*
      var $filter_type = getParameterByName('type');
      if ($filter_type) {
        $(".tiles").addClass('myhiddenNew');
        console.log('myhiddenNew');
      }
      else {
        var $target = $(".filter-left .selectboxit-list li.selectboxit-selected").data('val');

        console.log('select target: ', $target);

        if ($target =='All') {
          $(".tiles").removeClass('myhidden');
          $done = 'yes';
          console.log('equalsall');
        }

        if ($target != 'All' && $done =='yes') {
          $(".tiles").removeClass('myhidden');
        }

        if ($target != 'All' && $done !='yes') {
            var selectBox = $("select.filters").data("selectBox-selectBoxIt");
            setTimeout(function() {
                selectBox.selectOption($target);
                $done = 'yes';
            }, 250);
        }
      }

      */

    };

    $.fn.almEmpty = function(alm){
      console.log("Nothing found in this Ajax Load More query :(");
    };

})(jQuery);

jQuery.noConflict();

jQuery( document ).ready(function( $ ) {

  if($('body').hasClass("home")){

    //add in bodymovin here
    var animation7 = bodymovin.loadAnimation({
      container: document.getElementById('anim7'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: '/wp-content/themes/lc_phase_2/json/_plane_banner.json'
    });
    //end bodymovin add in

  }

  //Find a rep link from lead nurture email

  if (getParameterByName('utm_campaign') == "fr" || $.cookie('find_a_rep_cta')){
    $.cookie('find_a_rep_cta', 'true', { path: '/' });
    $('.footer_find_a_rep').show();
  };

    function checkForFindARep() {
        if (wp_vars.is_alt_my_retirement_reality_page == 1 || wp_vars.is_alt_protect_your_paycheck_page == 1 || $.cookie('find_a_rep_cta')) {
            $('.footer_find_a_rep').show();
            if ($(window).width() <= 1230) {
                $('.footer_find_a_rep.dot').hide();
            }
        }
    }
    $(window).on('resize', checkForFindARep);
    checkForFindARep();

	var $filter_type = getParameterByName('type');
	var $tax_term = getParameterByName('category');

    if ($filter_type) {
        updateNavTaxonomies($filter_type);
        home_selected_sort = $filter_type;
    }
    if ($tax_term) {
        updateNavPostTypes($tax_term);
        home_selected_filter = $tax_term;
    }

    //  Select Boxit

    var selects = $("select:not(#contact-method,#distance)").selectBoxIt({

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

    $("select.home").selectBoxIt({

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

	//Home Filters
	var alm_is_animating = false;
	transition = 'fade', // 'slide' | 'fade' | null
	speed = '300'; //in milliseconds
	$featured = $(".first-row");
	if($(".alm-listing").length > 0){
		var exclude = $(".alm-listing").data('exclude');
		console.log(exclude);
	}
	var data = {
		postType : '',
		offset : 0,
		taxonomy: '',
		taxonomyTerms: '',
		exclude: '',
        metaKey: '',
        orderby: ''
	};

    var home_selected_sort, home_selected_filter;

    function getHomeQueryArgs() {
        var return_string = '/';
        if (home_selected_sort) {
            return_string += '?type=' + home_selected_sort;
        }
        if (home_selected_filter) {
            return_string += !home_selected_sort ? '?' : '&';
            return_string += 'category=' + home_selected_filter;
        }
        return return_string;
    }

    function updateNavTaxonomies(post_type) {
        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'post',
            data: {
                action: 'update_tax_list',
                post_type: post_type
            },
            dataType: "json",
            success: function( response ) {
                var terms = response.split(',');

                console.log("Terms: " + terms);
                $(".tile-cat-filter a").addClass("disabled");
                $(".filter-right.mobile option").prop('disabled', true);
                $("span.home.second").closest(".selectboxit-container").find("li").addClass("selectboxit-disabled").attr('data-disabled', 'true');
                $(".home.second option").prop('disabled', true);

                for (var i = 0; i <= terms.length; i++) {
                    $(".tile-cat-filter a[data-taxonomy-terms='" + terms[i] + "']").removeClass("disabled");
                    $(".filter-right.mobile option[data-taxonomy-terms='" + terms[i] + "']").prop('disabled', false);
                    $("li[data-taxonomy-terms='" + terms[i] + "']").removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                    $("option[data-taxonomy-terms='" + terms[i] + "']").prop('disabled', false);
                }

                $(".tile-cat-filter a.most-popular-link").removeClass("disabled");
                $(".filter-right.mobile option.most-popular-link").prop('disabled', false);
                $("a.most-popular-link").closest('li').removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                $("option.most-popular-link").prop('disabled', false);
            }
        });
    }

    function updateNavPostTypes(term) {
        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'post',
            data: {
                action: 'update_post_types',
                tax_term: term
            },
            dataType: "json",
            success: function( response ) {
                $("li:not([data-id='2'])").removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                $("option:not([value='Type'])").prop('disabled', false);

                for (var key in response) {
                    if(response[key] == 0){
                        $("li[data-post-type='" + key + "']").addClass("selectboxit-disabled").attr('data-disabled', 'true');
                        $(".filters option[data-post-type='" + key + "']").prop('disabled', true);
                    }
                }

                $("li[class=most-popular-link]").removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                $("option[class=most-popular-link]").prop('disabled', false);
            }
        });
    }

    function onFilterChange(){

        //change url (for retirement resource page only)

        if(typeof(retirement_res) != "undefined"){
            var selected_filter = $(".filters option:selected").val();
            history.pushState(null, "Retirement Resources", "/retirement-resources/?filter="+selected_filter);
        }
        if (typeof(disability_res) != 'undefined') {
            var selected_filter = $(".filters option:selected").val();
            history.pushState(null, "Disability Resources", "/disability-resources/?filter="+selected_filter);
        }
        if (typeof whole_life_res != 'undefined') {
            var selected_filter = $('.filters option:selected').val();
            history.pushState(null, "Whole Life Resources", "/whole-life-resources/?filter="+selected_filter);
        }
        if (typeof whole_life_res_fmg != 'undefined') {
            var selected_filter = $('.filters option:selected').val();
            history.pushState(null, "Whole Life Resources FMG", "/whole-life-resources-fmg/?filter="+selected_filter);
        }
        if (typeof home_res != 'undefined') {
            home_selected_sort = $(".filters option:selected").data('post-type');
            if (!home_selected_sort) {
                home_selected_sort = $(".filters option:selected").val();
            }
            history.pushState(null, "Home", getHomeQueryArgs());
        }

        var $this = $(this),
            isWholeLifeResourcesPage = $('body').hasClass('page-template-page-whole-life-resources') || $('body').hasClass('page-template-page-whole-life-resources-fmg'),
            is_disability_resources_page = $('body').hasClass('page-template-page-disability-resources'),
            is_most_popular = $(".filters option:selected").val() == 'Most Popular';

        if($('body').hasClass("home")){

            data.postType = $(".filters option:selected").data('post-type') || 'post, calculators, quizzes, infographics, videos, tools, podcasts';
            data.orderby = $(".filters option:selected").data('orderby') || '';
            if( $(".filters option:selected").val() != 'Featured' || $(".filters option:selected").val() != 'Most Recent' || !is_most_popular) {
                if( $(".filters option:selected").val() != 'All'){
                  $featured.fadeOut();
                  data.offset = 0;
                  data.exclude = '';
                }
                else{
                  $featured.fadeIn();
                  data.offset = 3;
                  data.taxonomy = '';
                  data.taxonomyTerms = '';
                  data.exclude = exclude;
                  $(".tile-cat-filter a").removeClass("active");
                }

                //Update Tax List
                updateNavTaxonomies(data.postType);
            }
        } else {
            if (isWholeLifeResourcesPage) {
                data['postType'] = 'whole_life_resources';
                data['taxonomy'] = 'whole_life_categories';
            } else if (is_disability_resources_page) {
                ga('send', 'event', 'Sort', 'Disability Resources', $.trim($(".filters option:selected").text()));
            } else {
                data['postType'] = 'post,calculators,infographics,videos,tools,podcasts,quizzes,retirement_resource';
                data['taxonomy'] = 'retirement_category';

                ga('send', 'event', 'Sort', 'Retirement Resources', $.trim($(".filters option:selected").text()));
            }
            if( $(".filters option:selected").val() != 'All'){
                data['taxonomyTerms'] = $(".filters option:selected").data('taxonomy-terms');
            }
            else{
                data['taxonomyTerms'] = '';
            }
        }
        console.log(data);
        jQuery.fn.almFilter(transition, speed, data);
        history.replaceState('', '', '');
    }
    $('.filters').on('change', onFilterChange);


    $(".home.second").on('change', function(){
        var $this = $(this);
        var term = $(".home.second option:selected").data('taxonomy-terms');
        data.taxonomy = 'home-categories';
        data.taxonomyTerms = term;
        if( $(".filters option:selected").val() == 'Featured' || $(".filters option:selected").val() == 'Most Recent' || $(".filters option:selected").val() == 'All') {
            data.offset = 0;
            data.exclude = '';
        }
        else{
            data.exclude = exclude;
            data.offset = 2;
        }

        data.postType = $(".filters option:selected").data('post-type');
        console.log(term);
        // $featured.fadeOut();
        jQuery.fn.almFilter(transition, speed, data);
        history.replaceState('', '', '');
        $("#non-featured-one, #non-featured-two, #featured").animate({
            opacity: 0
        });

        //Non Featured 1
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'non_featured_one',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    $("#non-featured-one").html(response['html']);

                    $("#non-featured-one").animate({
                        opacity: 1
                    });
                }
            });
        //Non Featured 2
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'non_featured_two',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    $("#non-featured-two").html(response['html']);
                    $("#non-featured-two").animate({
                        opacity: 1
                    });
                }
            });
        //Featured
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'featured',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    data.exclude = response['post'].shift().ID;
                    jQuery.fn.almFilter(transition, speed, data);

                    $("#featured").html(response['html']);
                    $("#featured").animate({
                        opacity: 1
                    });
                }
            });
            	$.ajax({
        		url: '/wp-admin/admin-ajax.php',
        		type: 'post',
        		data: {
        			action: 'update_post_types',
        			tax_term: term
        		},
        		dataType: "json",
        		success: function( response ) {
        			$("li:not([data-id='2'])").removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                            $("option:not([value='Type'])").prop('disabled', false);

        			for (var key in response) {
        			    if(response[key] == 0){
        			    	console.log("No Results" + key);
        			    	$("li[data-post-type='" + key + "']").addClass("selectboxit-disabled").attr('data-disabled', 'true');
                                    $(".filters option[data-post-type='" + key + "']").prop('disabled', true);
        			    }
        			}

                    $("li[class=most-popular-link]").removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                    $("option[class=most-popular-link]").prop('disabled', false);
        		}
        	});
    });

    $(".home .filter-right.mobile select").on('change', function(){
        var $this = $(this);
        var term = $(".filter-right.mobile select option:selected").data('taxonomy-terms');
        var is_most_popular = $(".filters option:selected").val() == 'Most Popular';

        if (typeof home_res != 'undefined') {
            home_selected_filter = term;
            history.pushState(null, "Home", getHomeQueryArgs());
        }

        data.taxonomy = 'home-categories';
        data.taxonomyTerms = term;
        if( $(".filters option:selected").val() == 'Featured' || $(".filters option:selected").val() == 'Most Recent' || is_most_popular){
            data.offset = 0;
        }
        else{
            data.offset = 2;
        }

        data.postType = $(".filters option:selected").data('post-type');

        if (is_most_popular || $(".filter-right.mobile select option:selected").val() == 'Most Popular') {
            data.orderby = 'post_views';
            data.taxonomy = '';
            data.taxonomyTerms = '';
            data.offset = 0;
            data.exclude = '';
            $featured.fadeOut();
        } else {
            data.orderby = '';
            data.exclude = exclude;
            $featured.fadeIn();
        }

        console.log(term);
        // $featured.fadeOut();

        if (!term) {
            jQuery.fn.almFilter(transition, speed, data);
        } else {
            $('.alm-listing').html('');
        }

        history.replaceState('', '', '');

        $.ajax({
    		url: '/wp-admin/admin-ajax.php',
    		type: 'post',
    		data: {
    			action: 'update_post_types',
    			tax_term: term
    		},
    		dataType: "json",
    		success: function( response ) {
    			$("li:not([data-id='2'])").removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                        $("option:not([value='Type'])").prop('disabled', false);

    			for (var key in response) {
    			    if(response[key] == 0){
    			    	console.log("No Results" + key);
    			    	$("li[data-post-type='" + key + "']").addClass("selectboxit-disabled").attr('data-disabled', 'true');
                        $(".filters option[data-post-type='" + key + "']").prop('disabled', true);
    			    }
    			}

                $("li[class=most-popular-link]").removeClass("selectboxit-disabled").attr('data-disabled', 'false');
                $("option[class=most-popular-link]").prop('disabled', false);
    		}
    	});

        if (term) {
            $("#non-featured-one, #non-featured-two, #featured").animate({
                opacity: 0
            });
            //Non Featured 1
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'non_featured_one',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    $("#non-featured-one").html(response['html']);
                    $("#non-featured-one").animate({
                        opacity: 1
                    });
                }
            });
            //Non Featured 2
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'non_featured_two',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    $("#non-featured-two").html(response['html']);
                    $("#non-featured-two").animate({
                        opacity: 1
                    });
                }
            });
            //Featured
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'featured',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    data.exclude = response['post'].shift().ID;
                    jQuery.fn.almFilter(transition, speed, data);

                    $("#featured").html(response['html']);
                    $("#featured").animate({
                        opacity: 1
                    });
                }
            });
        }
    });



    $(".tile-cat-filter a").on('click', function(e){
    	e.preventDefault();
    	var $this = $(this);
    	var term = $this.data('taxonomy-terms');
        var is_most_popular = $(".filters option:selected").val() == 'Most Popular';

        data.postType = $(".filters option:selected").data('post-type');
        data.offset = 2;
        data.metaKey = 'is_featured';
        data.metaValue = '0';
        data.metaCompare = '=';

    	if (term){
            data.taxonomy = 'home-categories';
            data.taxonomyTerms = term;
            if ( $(".filters option:selected").val() == 'Featured' || $(".filters option:selected").val() == 'Most Recent' || is_most_popular ) {
                data.offset = 0;
            }
            else{
                data.offset = 2;
            }
    	}

        if (is_most_popular || $this.text() == 'Most Popular') {
            data.orderby = 'post_views';
            data.metaKey = '';
            data.metaValue = '';
            data.metaCompare = '';
            data.offset = 0;
            data.exclude = '';
            $featured.fadeOut();
        } else {
            data.orderby = '';
            data.exclude = exclude;
            $featured.fadeIn();
        }

    	console.log("Term!: ", term);
    	// $featured.fadeOut();
        if (!term) {
            jQuery.fn.almFilter(transition, speed, data);
        } else {
            $('.alm-listing').html('');
        }

    	$(".tile-cat-filter a").removeClass("active");
    	$this.addClass("active");
    	history.replaceState('', '', '/');

        if (typeof home_res != 'undefined') {
            home_selected_filter = term;
            if (is_most_popular || $this.text() == 'Most Popular') {
                home_selected_sort = 'Most Popular';
            }
            history.pushState(null, "Home", getHomeQueryArgs());
        }

        updateNavPostTypes(term);

        if (term) {// && !is_most_popular) {
            $("#non-featured-one, #non-featured-two, #featured").animate({
                opacity: 0
            });

            //Non Featured 1
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'non_featured_one',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    $("#non-featured-one").html(response['html']);
                    console.log(response['html']);
                    $("#non-featured-one").animate({
                        opacity: 1
                    });
                }
            });
            //Non Featured 2
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'non_featured_two',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    $("#non-featured-two").html(response['html']);
                    $("#non-featured-two").animate({
                        opacity: 1
                    });
                }
            });
            //Featured
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'featured',
                    tax_term: term
                },
                dataType: "json",
                success: function( response ) {
                    data.exclude = response['post'].shift().ID;
                    jQuery.fn.almFilter(transition, speed, data);

                    $("#featured").html(response['html']);
                    $("#featured").animate({
                        opacity: 1
                    });
                }
            });
        }
    });

    //Tool Filters
    $(".tool-filter a").on('click', function(e){
        e.preventDefault();
        var $this = $(this);

        if (typeof(tools_res) != 'undefined') {
            var selected_filter = $(this).data('post-type');
            history.pushState(null, "Tools and Resources", "/tools-and-resources/?filter="+selected_filter);
        }

        $('.tool-filter a').removeClass('active');
        $this.addClass('active');

        data.postType = $(this).data('post-type');
        data.taxonomy = ''
        data.taxonomyTerms = '';
        data.offset = 0;
        jQuery.fn.almFilter(transition, speed, data);
    });

    $(".page-template-page-tools-resources .filter-right.mobile select").on('change', function(){
        var $this = $(this);
        data.postType = $('.filter-right.mobile select option:selected').data('post-type');

        data.taxonomy = ''
        data.taxonomyTerms = '';
        data.offset = 0;
        jQuery.fn.almFilter(transition, speed, data);
    });

    //Calc modal dynamic button
    $(document).on('click', ".tile a", function(e){
        // e.preventDefault();
        var $this = $(this);
        var calc_url = $this.data('calc-url');
        console.log("calc_url");
        if(calc_url){
            $("#calc_btn").attr('href', calc_url);
            // Pass the Home Category from the tile to the Interstitial Modal
            $('#interstitial').data('home-category', $this.closest('.tile').data('home-category'));
        }
    });

	//	Desktop Search Click


	$('#desktop_search').on('click', function (e) {
		$('.search_dropdown').toggleClass("search_now"); //you can list several class names
		e.preventDefault();
	});
	$('#close-search').on('click', function (e) {
		$('.search_dropdown').toggleClass("search_now");
		e.preventDefault();
	});

	$(".home-hero-content select").selectBoxIt({
		showFirstOption: false
	});

	//	Hamburger tap function

	$('#search-li').on('click', function (e) {
		$('#mobile-search').focus();
	});

	//	Mobile Search Focus
	$('.menu-icon').on('click', function (e) {
		$(this).toggleClass('pressed');
	});

	//	Modal
	// $("#interstitial").modal({

	// 	    showClose: false, // Shows a (X) icon/link in the top-right corner

	// 	    fadeDuration: 1000, // Number of milliseconds the fade transition takes (null means no transition)
	// 	    fadeDelay: 1.0 // Point during the overlay's fade-in that the modal begins to fade in (.5 = 50%, 1.5 = 150%, etc.)
	// 	  });
	// $.modal.close();
	$.modal.defaults = {
	  closeExisting: true,    // Close existing modals. Set this to false if you need to stack multiple modal instances.
	  escapeClose: true,      // Allows the user to close the modal by pressing `ESC`
	  clickClose: true,       // Allows the user to close the modal by clicking the overlay
	  closeText: 'Close',     // Text content for the close <a> tag.
	  closeClass: '',         // Add additional class(es) to the close <a> tag.
	  showClose: true,        // Shows a (X) icon/link in the top-right corner
	  modalClass: "modal",    // CSS class added to the element being displayed in the modal.
	  spinnerHtml: null,      // HTML appended to the default spinner during AJAX requests.
	  showSpinner: true,      // Enable/disable the default spinner during AJAX requests.
	  fadeDuration: null,     // Number of milliseconds the fade transition takes (null means no transition)
	  fadeDelay: 1.0          // Point during the overlay's fade-in that the modal begins to fade in (.5 = 50%, 1.5 = 150%, etc.)
	};

	$('.tr-slick').slick({
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					//arrows: false
				}
			}
		]
	});

	$('.article-slick').slick({
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: false,
					centerMode: true,
					initialSlide: 1,
					arrows: false,
					//					centerPadding: '5px',
				}
			}
		]
	});

	//	Truncate Search Results
	//	$('.results-preview').truncate('<p>Stuff and <i>Nonsense</i></p>', {
	//		length: 13,
	//		stripTags: true
	//	});

    /* Google Analytics Custom Dimensions */
    if (typeof ga !== 'function') {
        window.ga = function(i, s, o, m, e, t, r, i, c) {
            // dummy function to fill in missing ga() on staging
        }
    }

    function sendGAPageView(category, contentType) {
        if (typeof(ga) === 'function') {
            if (category) {
                ga('set', 'dimension1', category);
            }
            if (contentType) {
                ga('set', 'dimension2', contentType);
            }
            ga('send', 'pageview');
            console.log('Sent GA pageview', category, contentType);
        }
    }

    var body = $('body'),
        cat = body.data('home-category'),
        imageType = body.data('image-type'),
        cType;

    if (body.hasClass('single-infographics')) {
        cType = 'Infographic';
    } else if (body.hasClass('single-post')) {
        cType = 'Article';
        if (imageType != 'none' && imageType) {
            cType += ' with ' + imageType;
        }
    } else if (body.hasClass('single-podcasts')) {
        cType = 'Podcast';
    } else if (body.hasClass('single-quizzes') || body.hasClass('single-tools')) {
        cType = 'Interactive Experience';
    } else if (body.hasClass('single-videos')) {
        cType = 'Video';
    }
    sendGAPageView(cat, cType);

    $('#calc_btn').on('click', function() {
        sendGAPageView(
            $('#interstitial').data('home-category'),
            'Interactive Experience'
        );
    });
    /* End Google Analytics Custom Dimensions */


	/**
	 * jTinder initialization
	 */
	$("#tinderslide").jTinder({
		// dislike callback
		onDislike: function (item) {
			// set the status text
			$('#status').html('Dislike image ' + (item.index()+1));
		},
		// like callback
		onLike: function (item) {
			// set the status text
			$('#status').html('Like image ' + (item.index()+1));
		},
		animationRevertSpeed: 200,
		animationSpeed: 400,
		threshold: 1,
		likeSelector: '.like',
		dislikeSelector: '.dislike'
	});

	/**
	 * Set button action to trigger jTinder like & dislike.
	 */
	$('.actions .like, .actions .dislike').click(function(e){
		e.preventDefault();
		$("#tinderslide").jTinder($(this).attr('class'));
	});

	//smooth scroll to next section

  $nextsection = $('.gotochart');

	$nextsection.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({scrollTop: $('#mypiechart').offset().top - 67 }, 700);
	});

	if ($filter_type) {

        $(".filters option[data-post-type=" + $filter_type +"]").prop('selected', true);

        if($(".tool-filter").length > 0){
            var alm_is_animating = false;
            transition = 'fade', // 'slide' | 'fade' | null
            speed = '300'; //in milliseconds
           var data = {
                postType : '',
                offset : 0,
                taxonomy: '',
                taxonomyTerms: '',
            };
            $(".tool-filter a[data-post-type=" + $filter_type +"]").addClass("active").trigger('click');

            data.postType = $filter_type;
            data.taxonomy = ''
            data.taxonomyTerms = '';
            data.offset = 0;
            jQuery.fn.almFilter(transition, speed, data);
        }
	}

	if($tax_term){
		$(".home .filter-right.mobile select option[data-taxonomy-terms=" + $tax_term + "]").prop('selected', true);
		$(".home.second option[data-taxonomy-terms=" + $tax_term + "]").prop('selected', true);
		$(".tile-cat-filter a[data-taxonomy-terms=" + $tax_term + "]").addClass('active');
	}

});
