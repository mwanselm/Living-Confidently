<?php
/*
Template Name: Find a Rep
*/
?>
<?php get_header(); ?>

<script type="application/javascript">

			jQuery(document).ready(function($) {

				//Submit data for the Find a Rep dropdown
				// Attach a submit handler to the form
				$( "#repForm" ).submit(function( event ) {
					// Stop form from submitting normally
					event.preventDefault();
					// Get some values from elements on the page:
					var query = $("#repForm").find('input[name="zip"]').val();
					// Send the data using post
          
          if(query.length != 5 || (!(isValidUSZip(query)))){
		                
		                $('input#zip_slider').val('');
		                return false;

		            } else{

		            	var posting = $.post( "<?php echo get_template_directory_uri(); ?>/find-a-rep.php",{zip:query});
						// Put the results in a div
						posting.done(function(data) {
						//$( "#repData" ).replaceWith(data);
						$('#results_container').append(data);
                    	$('#rep_first_slider').css({ "display" : "none" });
                    	$('#rep_second_slider').css({ "display" : "none" });
                    	$('#rep_third_slider').css({ "display" : "none" });
						});
		            }
				});

                //Submit data for the Find a Rep static page
                // Attach a submit handler to the form
                $( "#repForm-s" ).submit(function( event ) {
                    // Stop form from submitting normally
                    event.preventDefault();
                    // Get some values from elements on the page:
                    var query = $("#repForm-s").find('input[name="zip"]').val();
                    
                    
                  if(query.length != 5 || (!(isValidUSZip(query)))){
		                $('#repForm-s').before('<p class="error">Please enter a valid five digit zip code.</p>');
		                $('input#zip_slider').val('');
		                return false;

		            } else {
	                    // Send the data using post
	                    var posting = $.post( "<?php echo get_template_directory_uri(); ?>/find-a-rep.php",{zip:query});
	                    // Put the results in a div
	                    posting.done(function(data) {
	                    	/*$( "#repData-s" ).replaceWith(data);
	                    	$('#results_container').append(data);*/
	                    	var $container = $(data).wrap('<div />').parent();
	                		$container.find('#footer').remove();
	                		$('#blurcontainer').html($container);
	                		// $(".repFormSmall").reset();
	                    });
	                }
                });
				

});	/*end of docready*/		
</script>


      <?php if ($_GET['zipcode']){
            $zipcode = $_GET['zipcode'];
        } ?>
<div id="blurcontainer" class="container over">
            <div id="results_container">
      </div>
      

      <div id="rep_first_slider">
        <div class="container">
          <div id="repData-s">
            <h3 class="search_header">FIND A GUARDIAN FINANCIAL REPRESENTATIVE</h3>
            <h4 class="search_header">The hardest part about making plans is deciding to take action. Start now by entering your zip code to find a Guardian Financial Representative near you. Or, fill in the form below, and we’ll get back to you promptly.</h4>
          </div>
        </div>
      </div>

      <div id="rep_second_slider">
        <div class="container">
          <div id="repData-s">   
            <h3 class="search_title">Find a financial representative</h3>
            <!-- <h4 class="rep_sub_title hidden-xs">We're here to help answer any retirement questions you may have. If you're not currently<br />
              working with a Financial Representative, you can search for a Guardian Financial Representative near you.<br />
              Just enter your address or zip code.</h4> -->
              <!-- <h4 class="rep_sub_title visible-xs">We're here to help answer any retirement questions you may have. If you're not currently working with a Financial Representative, you can search for a Guardian Financial Representative near you. Just enter your address or zip code. It's that easy!</h4> -->
            <div class="zip_slider_div">
              <form action="/" id="repForm-s">
                <input type="text" id="zip_slider" name="zip" value="<?php echo $zipcode ?>" placeholder="Enter zip code" />
                <input type="submit" id="zip_button" value="search" onclick="_gaq.push(['_trackEvent', 'find_a_rep', 'search', 'zip']);"/>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div id="rep_third_slider">
        <?php include "find-a-rep-form.php"; ?>
      </div><!--  end third Slider -->
</div>
<?php get_footer(); ?>
<script type="text/javascript">
        jQuery(document).ready(function($) {

          
              var field = 'zipcode';
              var url = window.location.href;

              if(url.indexOf('?' + field + '=') != -1){
                $('#repForm-s').submit();
              }
        });
</script>