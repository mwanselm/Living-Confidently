          <div class="container">
            <div id="repData-contact">
              <h3 class="search_title">HAVE A REPRESENTATIVE CONTACT YOU</h3>
              <h4 class="rep_sub_title hidden-xs">Please fill out the information below to be contacted by a Financial Representative near you.
              Just enter your address or zip code.</h4>
              <h4 class="rep_sub_title visible-xs">Please fill out the information below to be contacted by a Financial Representative near you.</h4>
            
            <div class="zip_slider_div">
              <!-- http://new6-server.com.s214851.gridserver.com/wp-content/themes/mrw/find-a-rep.php -->
              <form action="<?php echo get_stylesheet_directory_uri(); ?>/find-a-rep.php" id="repForm-contact" method="post">

                  <div class="first-name">
                    <label for="first-name">First Name <span class="form-required" title="This field is required.">*</span></label><span class="error-notice">Please complete the mandatory field value.</span>
                   <input type="text" id="first-name" name="first_name" value="" size="60" maxlength="128" class="form-text">
                  </div><!-- end first name -->

                  <div class="last-name">
                    <label for="last-name">Last Name <span class="form-required" title="This field is required.">*</span></label><span class="error-notice">Please complete the mandatory field value.</span>
                   <input type="text" id="last-name" name="last_name" value="" size="60" maxlength="128" class="form-text">
                  </div><!-- end last name -->

                  <div class="zip-code">
                    <label for="zip-code">Zip Code <span class="form-required" title="This field is required.">*</span></label><span class="error-notice">Mandatory field.</span>
                   <input type="text" id="zip-code" name="zip_code" size="6" min="1" max="99999" step="1" class="form-text form-number">
                  </div><!-- end zip code -->

                  <div class="contact-method">
                    <label for="contact-method">Contact Method <span class="form-required" title="This field is required.">*</span></label><span class="error-notice">Please complete the mandatory field value.</span>
                    <select id="contact-method" name="contact_method" class="form-select">
                      <option value="" selected="selected">Please choose one...</option>
                      <option value="1">Email</option>
                      <option value="2">Phone</option>
                    </select>
                  </div><!-- end contact method -->
                  
                  <div class="email-address webform-conditional-hidden">
                    <label for="email-address">Email Address <span class="form-required" title="This field is required.">*</span></label><span class="error-notice">Please complete the mandatory field value.</span>
                   <input class="form-email" type="text" id="email-address" name="email_address" size="60">
                  </div><!-- end email -->

                  <div class="phone-number webform-conditional-hidden">
                    <label for="phone-number">Phone Number <span class="form-required" title="This field is required.">*</span></label><span class="error-notice">Please complete the mandatory field value.</span>
                   <input placeholder="XXX-XXX-XXXX" type="text" id="phone-number" name="phone_number" value="" size="17" class="form-tel">
                  </div><!-- end phone -->


                  <div class="best-time-to-call webform-conditional-hidden">
                    <label for="best-time-to-call">Best Time to Call <span class="form-required" title="This field is required.">*</span></label><span class="error-notice">Please complete the mandatory field value.</span>
                   <input type="text" id="best-time-to-call" name="best_time_to_call" value="" size="60" maxlength="90" class="form-text">
                  </div><!-- end best time to call -->

                  <div class="im-interested-in">
                    <label for="im-interested-in">I'm Interested In <span class="form-required" title="This field is required.">*</span><span class="description">(Choose as many as you like)</span></label><span class="error-notice">Please complete the mandatory field value.</span>

                    <div class="clear"></div>
                   
                    <div class="form-checkboxes">
                      <div class="im-interested-in-25 form-type-checkbox">
                       <input type="checkbox" id="im-interested-in-25" name="im_interested_in[]" value="1" class="form-checkbox">  <label class="option" for="im-interested-in-25">Life Insurance </label>
                      </div>

                      <div class="im-interested-in-26 form-type-checkbox">
                       <input type="checkbox" id="im-interested-in-26" name="im_interested_in[]" value="2" class="form-checkbox">  <label class="option" for="im-interested-in-26">Disability Income Insurance </label>
                      </div>

                      <div class="im-interested-in-27 form-type-checkbox">
                       <input type="checkbox" id="im-interested-in-27" name="im_interested_in[]" value="3" class="form-checkbox">  <label class="option" for="im-interested-in-27">Annuities </label>
                      </div>

                      <div class="im-interested-in-28 form-type-checkbox">
                       <input type="checkbox" id="im-interested-in-28" name="im_interested_in[]" value="4" class="form-checkbox">  <label class="option" for="im-interested-in-28">Investments </label>
                      </div>

                      <div class="im-interested-in-29 form-type-checkbox">
                       <input type="checkbox" id="im-interested-in-29" name="im_interested_in[]" value="5" class="form-checkbox">  <label class="option" for="im-interested-in-29">401(k)/Retirement Plans </label>
                      </div>

                      <div class="im-interested-in-30 form-type-checkbox">
                       <input type="checkbox" id="im-interested-in-30" name="im_interested_in[]" value="6" class="form-checkbox">  <label class="option" for="im-interested-in-30">Workplace Benefits (incl. Dental) </label>
                      </div>

                      <div class="im-interested-in-31 form-type-checkbox">
                       <input type="checkbox" id="im-interested-in-31" name="im_interested_in[]" value="7" class="form-checkbox">  <label class="option" for="im-interested-in-31">Other </label>
                      </div>
                    </div><!-- end interested in -->   
                  </div><!-- end interested in outer-->



                  <div class="clear"></div>

                  <div class="additional-comments">
                    <label for="additional-comments">Tell us what you're looking for: </label>
                    <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                      <textarea id="additional-comments" name="additional_comments" cols="60" rows="5" class="form-textarea"></textarea>
                      <!-- <div class="grippie"></div> -->
                    </div>
                  </div>

                  <input type="hidden" name=agency_name id="agency-name" value="<?php echo $permalink; ?>" />
                    
                    <fieldset class="repData-thank-you">
                      <legend>
                        <span class="fieldset-legend">Thank you for contacting us</span>
                      </legend>
                      <div class="fieldset-wrapper"></div>
                    </fieldset>
                    
                    <p class="submit-prefix-text">Please review your information and ensure it is accurate.</p>
                    
                    <div class="form-actions">
                      <input id="repData-contact-submit" type="submit" name="contact_submit" value="Submit">
                    </div><!-- end form-actions -->

                
              </form>
              </div><!-- end zip slider div -->

            </div><!-- repData -->
          </div><!-- end container -->
          
          <script type="text/javascript">
              jQuery(document).ready(function($) {
                
                $('#contact-method').bind('change',function(){
                    var optionSelected = $('#contact-method').val()
                    if(optionSelected == 1){
                        $('.phone-number').hide();
                        $('.best-time-to-call').hide();
                        $('.email-address').show();
                    }else if(optionSelected == 2){
                        $('.phone-number').show();
                        $('.best-time-to-call').show();
                        $('.email-address').hide();
                    }
                });

                $('#repForm-contact').on('submit', function(e){
                    //e.preventDefault();
                    return validate();
                });

                function validate(){
                    var error = "";

                    if($('#first-name').val().length < 1){
                      $('input#first-name').addClass('error');
                      $('.first-name .error-notice').css({ 'display' : 'block' });
                      error = true;
                    } else{
                      $('input#first-name').removeClass('error');
                      $('.first-name .error-notice').css({ 'display' : 'none' });
                    }

                    $('#first-name').change(function() {
                      if($('#first-name').val().length > 1){
                        $('input#first-name').removeClass('error');
                        $('.first-name .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if($('#last-name').val().length < 1){
                      $('input#last-name').addClass('error');
                      $('.last-name .error-notice').css({ 'display' : 'block' });
                      error = true;
                    } else {
                      $('input#last-name').removeClass('error');
                      $('.last-name .error-notice').css({ 'display' : 'none' });
                    }

                    $('#last-name').change(function() {
                      if($('#last-name').val().length > 1){
                        $('input#last-name').removeClass('error');
                        $('.last-name .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if($('#zip-code').val().length < 5){
                      $('input#zip-code').addClass('error');
                      $('.zip-code .error-notice').css({ 'display' : 'block' });
                      error = true;
                    } else {
                      $('input#zip-code').removeClass('error');
                      $('.zip-code .error-notice').css({ 'display' : 'none' });
                    }

                    $('#zip-code').change(function() {
                      if($('#zip-code').val().length >= 5 ){
                        $('input#zip-code').removeClass('error');
                        $('.zip-code .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if($('select#contact-method').val() == "" || null ){
                      $('select#contact-method').addClass('error');
                      $('.contact-method .error-notice').css({ 'display' : 'block' });
                      error = true;
                    } else {
                      $('select#contact-method').removeClass('error');
                      $('.contact-method .error-notice').css({ 'display' : 'none' });
                    }

                    $('#contact-method').change(function() {
                      if($('#contact-method').val().length >= 1 ){
                        $('select#contact-method').removeClass('error');
                        $('.contact-method .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if($('select#contact-method').val() == 1){
                      if($('input#email-address').val().length < 5 || 
                         $('input#email-address').val().indexOf('@') < 1 ||
                         $('input#email-address').val().indexOf('.') < 1 ){
                            //$('select#contact-method').addClass('error');
                            $('input#email-address').addClass('error');
                            //$('.contact-method .error-notice').css({ 'display' : 'block' });
                            $('.email-address .error-notice').css({ 'display' : 'block' });
                            error = true;
                      } else {
                            //$('select#contact-method').removeClass('error');
                            $('input#email-address').removeClass('error');
                            //$('.contact-method .error-notice').css({ 'display' : 'none' });
                            $('.email-address .error-notice').css({ 'display' : 'none' });
                      }
                    }
                  
                    $('input#email-address').change(function() {
                      if($('input#email-address').val().indexOf('@') >= 1 &&
                         $('input#email-address').val().indexOf('.') >= 1 &&
                         $('input#email-address').val().length >= 5 ){
                            //$('select#contact-method').removeClass('error');
                            $('input#email-address').removeClass('error');
                            //$('.contact-method .error-notice').css({ 'display' : 'none' });
                            $('.email-address .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if($('select#contact-method').val() == 2){
                      if($('input#phone-number').val().length < 10){
                          //$('select#contact-method').addClass('error');
                          $('input#phone-number').addClass('error');
                          //$('.contact-method .error-notice').css({ 'display' : 'block' });
                          $('.phone-number .error-notice').css({ 'display' : 'block' });
                          error = true;
                      } else {
                          //$('select#contact-method').removeClass('error');
                          $('input#phone-number').removeClass('error');
                          //$('.contact-method .error-notice').css({ 'display' : 'none' });
                          $('.phone-number .error-notice').css({ 'display' : 'none' });
                      }
                    }

                    $('input#phone-number').change(function() {
                      if($('input#phone-number').val().length >= 10 ){
                            //$('select#contact-method').removeClass('error');
                            $('input#phone-number').removeClass('error');
                            //$('.contact-method .error-notice').css({ 'display' : 'none' });
                            $('.phone-number .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if($('select#contact-method').val() == 2){
                      if($('input#best-time-to-call').val() < 3){
                        $('input#best-time-to-call').addClass('error');
                        $('.best-time-to-call .error-notice').css({ 'display' : 'block' });
                        error = true;
                      } else {
                        $('input#best-time-to-call').removeClass('error');
                        $('.best-time-to-call .error-notice').css({ 'display' : 'none' });
                      }
                    }

                    $('input#best-time-to-call').change(function() {
                      if(($('select#contact-method').val() == 2) && $('input#best-time-to-call').val().length >= 3 ){
                            $('input#best-time-to-call').removeClass('error');
                            $('.best-time-to-call .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if(!$('.form-checkbox').is(':checked')){
                       $('.form-type-checkbox').addClass('error');
                       $('.im-interested-in .error-notice').css({ 'display' : 'block' });
                      error = true;
                    } else {
                      $('.form-type-checkbox').removeClass('error');
                      $('.im-interested-in .error-notice').css({ 'display' : 'none' });
                    }

                    $(".form-checkbox").bind('change', function(){  
                      if($('.form-checkbox').is(':checked')){
                          $('.form-type-checkbox').removeClass('error');
                          $('.im-interested-in .error-notice').css({ 'display' : 'none' });
                      }
                    });

                    if(error){
                      alert('Please fix errors before proceeding.');
                      return false;
                    } else{
                      return true;
                    }
                }
              });
          </script>