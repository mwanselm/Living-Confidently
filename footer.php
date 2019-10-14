	
    <a href="#0" class="cd-top"><span class="top-text">Top</span></a>

    <footer id="footer" role="contentinfo">

        <div class="region region-footer">
            <nav role="navigation">
                <div class="footer--inner-wrapper">
                    <div class="footer-social-menu-wrapper">
                        <div id="block-menu-menu-glic-social-media-menu" class="block block-menu">
                            <ul class="menu">
                                <li class="last leaf"><a href="https://www.facebook.com/LivingConfidently/" title="Facebook" class="menu_icon facebook" target="_blank">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="primary-footer-menu-wrapper">
                        <div id="block-menu-menu-glic-primary-footer-menu" class="block block-menu">
                            <ul class="menu">
                                <li class="first leaf"><a href="<?= site_url(); ?>" class="nav_footer">Living Confidently Home</a></li>
                                <li class="leaf dot">&bull;</li>
                                <li class="leaf"><a href="/tools-and-resources" class="nav_footer">Tools &amp; Resources</a></li>
                                <li class="leaf dot">&bull;</li>
                                <li class="leaf"><a href="/research" class="nav_footer">Research</a></li>
                                <li class="leaf dot">&bull;</li>
                                <li class="leaf"><a href="/about" class="nav_footer">About</a></li>
                                <li class="leaf dot footer_find_a_rep" style="display:none;">&bull;</li>
                                <li class="leaf footer_find_a_rep" style="display:none;"><a href="/find-a-rep<?php if (is_page('my-retirement-my-reality')) { echo '?utm_campaign=retirement_experience&utm_source=retirement-experience'; } ?>" class="nav_footer">Find a Rep</a></li>
                                 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-utility-menu-wrapper">
                    <div class="footer--inner-wrapper">
                        <div id="block-menu-menu-glic-footer-utility-menu" class="block block-menu">
                            <ul class="menu">
                                <li class="first leaf"><a href="https://www.guardianlife.com/privacy-policy" class="nav_footer" target="_blank">Privacy Policies</a></li>
                                <li class="leaf"><a href="https://www.guardianlife.com/disclosures" class="nav_footer" target="_blank">Disclosures</a></li>
								<li class="leaf"><a target="_blank" href="<?= site_url(); ?>/living-confidently-website-accessibility-statement" class="nav_footer" target="_blank">Accessibility</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="footer-copyright-wrapper">
                <div class="footer--inner-wrapper">
                    <div id="block-block-1" class="block block-block">
                        <p>&copy; <?= date('Y'); ?> The Guardian Life Insurance Company of America</p>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <?php wp_footer(); ?>
    
    <?php 
    
      if (strpos($_SERVER['REQUEST_URI'],'myretirementmyreality') !== false){
        ?>
        <script>
          
          jQuery.noConflict();
          jQuery( document ).ready(function( $ ) {
            $.cookie('find_a_rep_cta', 'true', { path: '/' });
            $.cookie('retirement_find_a_rep', 'true', { path: '/'})
          });</script>
        <?php
        
      }
        
        if (strpos($_SERVER['REQUEST_URI'],'myretirementreality') !== false){

          ?>
          <script>
          
            jQuery.noConflict();
            jQuery( document ).ready(function( $ ) {
              $.removeCookie('find_a_rep_cta', { path: '/' });
              $.removeCookie('retirement_find_a_rep', { path: '/' });
              
            });</script>
          <?php
        }
        
        
        if (strpos($_SERVER['REQUEST_URI'],'protect-my-paycheck') !== false){
          ?>
          <script>
          
            jQuery.noConflict();
            jQuery( document ).ready(function( $ ) {
              $.cookie('find_a_rep_cta', 'true', { path: '/' });
              $.cookie('disability_find_a_rep', 'true', { path: '/'})
            });</script>
          <?php
        
        }
        
          if (strpos($_SERVER['REQUEST_URI'],'protect-your-paycheck') !== false){

            ?>
            <script>
          
              jQuery.noConflict();
              jQuery( document ).ready(function( $ ) {
                $.removeCookie('find_a_rep_cta', { path: '/' });
                $.removeCookie('disability_find_a_rep', { path: '/' });
              
              });</script>
            <?php
          }
          
          
          if (strpos($_SERVER['REQUEST_URI'],'protect-my-priorities') !== false){
                     ?>
                     <script>
          
                       jQuery.noConflict();
                       jQuery( document ).ready(function( $ ) {
                         $.cookie('find_a_rep_cta', 'true', { path: '/' });
                         $.cookie('wholelife_find_a_rep', 'true', { path: '/'})
                       });</script>
                     <?php
        
                   }
        
                     if (strpos($_SERVER['REQUEST_URI'],'protect-your-priorities') !== false){
                       ?>
                       <script>
          
                         jQuery.noConflict();
                         jQuery( document ).ready(function( $ ) {
                           $.removeCookie('find_a_rep_cta', { path: '/' });
                           $.removeCookie('wholelife_find_a_rep', { path: '/' });
              
                         });</script>
                       <?php
                     }
        
        
        
      
    ?>
    
    <?php if (strpos($_SERVER['REQUEST_URI'],'vision-test') === false){?>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php } ?>
	<!-- Hotjar Tracking Code for https://www.livingconfidently.com -->
	<script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:921692,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>

    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.jTinder.js" type="text/javascript" charset="utf-8"></script>
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.transform2d.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.selectBoxIt.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js?ver=1.2"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/lc_analytics.js?v=3"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/c2c/analytics.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/c2c/inline-video.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/c2c/ion.rangeSlider.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/c2c/scale.fix.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/c2c/main.js?ver=1.2"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
    <?php if (get_page_template_slug() != 'page-millenials.php')  : ?>
       <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bodyMovin.js"></script>
    <?php endif; ?>
    
    <?php if (get_page_template_slug() == 'page-podcast.php')  : ?>
      
    	<script src="<?php echo get_bloginfo('template_directory'); ?>/grd-podcast/js/podcast/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
      
    	<script src="<?php echo get_bloginfo('template_directory'); ?>/grd-podcast/js/podcast/grd-podcast-plugins.js"></script>
    	<script src="<?php echo get_bloginfo('template_directory'); ?>/grd-podcast/js/podcast/grd-podcast.js?v2.64"></script>
      
    	<script type="text/javascript" src="https://w.soundcloud.com/player/api.js"></script>
      
    <?php endif; ?>
    
    <?php if (get_page_template_slug() == 'page-my-retirement-reality.php' || get_page_template_slug() == 'page-my-retirement-reality-fmg.php') : ?>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/my-retirement-reality-plugins.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/my-retirement-reality.js?ver=1.23"></script>
    <?php endif; ?>

	  <?php if (get_page_template_slug() == 'page-protect-your-paycheck.php' || get_page_template_slug() == 'page-protect-your-paycheck-fmg.php') : ?>
		    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/protect-your-paycheck-plugins.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/protect-your-paycheck.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/protect-your-paycheck-interactive.js"></script>
        
	  <?php endif; ?>

	<?php if (get_page_template_slug() == 'page-whole-perspective.php') : ?>
		<script src="<?php echo get_bloginfo('template_directory'); ?>/js/grd-liam-plugins.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/grd-liam.js"></script>
        
	<?php endif; ?>

  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/protect-your-priorities.js"></script>
  
    <!-- add Millenials JS -->
    <?php if (get_page_template_slug() == 'page-millenials.php')  : ?>
         <script src="<?php echo get_bloginfo('template_directory'); ?>/js/millenial.js"></script>
         <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bodymovin.js"></script> 
         <script>FontAwesomeConfig = { searchPseudoElements: true };</script>
    <?php endif; ?>



            
            
    <?php
    if(is_front_page()){
       wp_enqueue_script( 'home', get_template_directory_uri() . '/js/c2c/home.js'); 
    }

    ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=c0b42b107c0865346aec557ae6ea9235"></script>
    <script type="text/javascript" src="https://guardian-quiz.node1504.speedyrails.net/scores.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCLn-Fo341f31-V6l0pYeK7mTnOp6aaDHs&amp;ver=4.5.6"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/find-a-rep.js"></script>
    
</body>
       
</html>