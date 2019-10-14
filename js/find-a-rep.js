function isValidUSZip(sZip) {

  validValue = true;
  url = "/wp-content/themes/lc_phase_2/valid_zipcode.php?zip=" + sZip;
  
    jQuery.ajax(url, {
      type: "get", async: false, success: function (data) {
        if (data == "false"){
          validValue = false;
        }
      }
     });
     
     return validValue;

}

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
                  
		            	var posting = $.post( "/wp-content/themes/lc_phase_2/find-a-rep.php",{zip:query});
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
		                //alert(query);
		                $('input#zip_slider').val('');
		                return false;

		            } else {
	                    // Send the data using post
	                    var posting = $.post( "/wp-content/themes/lc_phase_2/find-a-rep.php",{zip:query});
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
