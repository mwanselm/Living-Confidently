<?php
/*
*  Template Name: Tools and Resources
*/
?>

<?php get_header(); ?>

<script>
    var tools_res = true, filter;

    <?php if (isset($_GET['filter'])) : $filter = $_GET['filter']; ?>
        filter = "<?= $filter; ?>";
    <?php else : ?>
        filter = 'quizzes,calculators,tools';
    <?php endif; ?>
</script>

<section class="hero tr-hero" id="slide-no-table">
    <div class="tr-slick">
        <div class="slide liam-resources-hero">

                
        <a href="<?php echo site_url(); ?>/whole-perspective" class="cover-link" style="width:100%; height:100%; display:block;"></a>
        <div class="hero-bounds">
            <p class="headline">The Whole Perspective</p>
            <h2>Yes, whole life insurance protects your loved ones. But, did you know it can also help diversify your financial portfolio?</h2>
            <a href="<?php echo site_url(); ?>/whole-perspective" class="btn btn-blue">Find out more</a>
        </div>


    </div>
      <div class="slide slide-stash">

             
              <a href="<?php echo site_url(); ?>/cash-stash-dash-calculator" class="cover-link" style="width:100%; height:100%; display:block;"></a>
              <div class="hero-bounds">
                  <p class="headline">The Cash Stash Dash</p>
                  <h2>How often do you eat out? What is it costing you over the long term? And, most of all, what else could you do with that cash? </h2>
                  <a href="<?php echo site_url(); ?>/cash-stash-dash-calculator" class="btn btn-blue">Play To Find Out ></a>
              </div>
        

      </div>
      
      
      <div class="slide-2 bg-image">
                 <div class="table-cell">
                     <div class="hero-bounds">
                         <p>It’s never too late to take control of your financial future. Identify where you can start making small changes today to ensure an even better tomorrow.</p>
                         <h2>How does your confidence measure up?</h2>
                         <a href="<?php echo site_url(); ?>/quizzes/financial-emotional-confidence-quiz/" class="btn btn-blue">TAKE THE QUIZ!</a>
                     </div>
                 </div>
             </div>
             
             
             <!--
      
        <div class="slide-1">
            <div class="table-cell">
                <h2>BECOME MORE CONFIDENT WITH OUR QUIZZES, CALCULATORS, AND PLANNING TOOLS</h2>
                <p>Scroll Down</p>
                <svg width="30px" height="15px" class="desktop" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.9 33.89"><defs><style>.arrow-down{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}</style></defs><path id="Arrow" class="arrow-down" d="M2,2L31.44,31.88,60.89,2" transform="translate(0.01 0.01)"/></svg>
            </div>
        </div>
               -->
        


        <div class="slide-whole-life wl-resources-hero disability-resources-hero">
           
                <a href="/protectyourpaycheck/" class="cover-link" style="width:100%; height:100%; display:block;"></a>
                <div class="left">
                    <p class="headline">Bridge the (Paycheck) Gap</p>
                    <h1 class="subhead">Find out how you can protect the asset that matters most &mdash; your ability to earn an income &mdash; with the right income protection plan.</h1>
                </div>
          
        </div>
        
        <div class="slide-whole-life wl-resources-hero retirement-resources-hero">
           
                <a href="/myretirementreality/" class="cover-link" style="width:100%; height:100%; display:block;"></a>
                <div class="left">
                    <p class="headline">Your Retirement Reality</p>
                    <h1 class="subhead">With the right strategy and solutions in place, you can create guaranteed income and secure a financially confident retirement.</h1>
                </div>
          
        </div>
        
        <div class="slide-whole-life wl-resources-hero">
           
                <a href="/protect-your-priorities/" class="cover-link"  style="width:100%; height:100%; display:block;"></a>
                <div class="left">
                    <p class="headline">Whole•istic Thinking </p>
                    <h1 class="subhead">Find out more about how whole life insurance can help you live with greater financial and emotional confidence.</h1>
                </div>
            
        </div>
        
        
        
    </div>
</section>


<section class="tr-tile-grid tile-grid">
    <div class="tile-filters">
        <div class="filter-container">
            <div class="filter-left">
                <h3>Sort By</h3>
            </div>
            <div class="filter-right mobile">
                <select>
                    <option disabled selected value>Select One</option>
                    <option <?php if ($filter == 'quizzes,calculators,tools') echo 'selected="selected"'; ?> data-post-type="quizzes,calculators,tools">All</option>
                    <option <?php if ($filter == 'quizzes') echo 'selected="selected"'; ?> data-post-type="quizzes">Quizzes</option>
                    <option <?php if ($filter == 'calculators') echo 'selected="selected"'; ?> data-post-type="calculators">Calculators</option>
                    <option <?php if ($filter == 'tools') echo 'selected="selected"'; ?> data-post-type="tools">Planning Tools</option>
                </select>
            </div>

            <ul class="desktop tool-filter">
                <li><a <?php if ($filter == 'quizzes,calculators,tools') echo 'class="active"'; ?> data-post-type="quizzes,calculators,tools" href="javascript:;">All</a></li>
                <li><a <?php if ($filter == 'quizzes') echo 'class="active"'; ?> data-post-type="quizzes" href="javascript:;">Quizzes</a></li>
                <li><a <?php if ($filter == 'calculators') echo 'class="active"'; ?> data-post-type="calculators" href="javascript:;">Calculators</a></li>
                <li><a <?php if ($filter == 'tools') echo 'class="active"'; ?> data-post-type="tools" href="javascript:;">Planning Tools</a></li>
            </ul>
            
        </div>
    </div>
    <style>
        .tile-grid .tiles .tile-row .tile img{
            height: auto;
        }
        .tile-grid .tiles .tile-row .tile.quarter{
            margin-bottom: 0.88763%;
        }
        
        .tile-grid .tiles .tile-row .tile.quarter:nth-of-type(4n){
            margin-right: 0;
        }
        .tile-grid.tr-tile-grid .tiles .tile-row{
            height: auto;
        }
        .alm-btn-wrap{
            clear: both;
        }
        .no-results{
            display: none;
            text-align: center;
            padding: 30px;
        }
        .no-results h2{
            color: white;
        }
    </style>
    <div class="tiles">
        <div class="no-results">
            <h2>No results found</h2>
        </div>
        <?php 
            if (!$filter || $filter == 'All') {
                echo do_shortcode('[ajax_load_more container_type="div" 
                    repeater="template_1" 
                    post_type="calculators, quizzes, tools" 
                    posts_per_page="8" 
                    scroll="false" 
                    button_label="Load More"]'
                );
            } else {
                echo do_shortcode('[ajax_load_more container_type="div" 
                    repeater="template_1" 
                    post_type="'.strtolower($filter).'" 
                    posts_per_page="8" 
                    scroll="false"
                    button_label="Load More"]'
                );
            }
        ?>
    </div>
</section>

<div id="interstitial" class="modal" style="display: none;">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 896 123"><defs><style>.modal-header{fill:#328abd;}.cls-2{fill:none;stroke:#328abd;stroke-linecap:round;stroke-width:2px;opacity:0.33;isolation:isolate;}</style></defs><title>modal-header</title><path class="modal-header" d="M405.57,85.11A23.34,23.34,0,1,1,428.9,61.77h0A23.36,23.36,0,0,1,405.57,85.11Zm0-45.34a22,22,0,1,0,22,22h0a22,22,0,0,0-22-22h0Zm0,45.59a23.59,23.59,0,1,1,23.57-23.6h0a23.61,23.61,0,0,1-23.57,23.59h0Zm0-46.67a23.09,23.09,0,1,0,23.07,23.1h0a23.11,23.11,0,0,0-23.07-23.09h0Zm0,45.34a22.25,22.25,0,1,1,22.24-22.27h0A22.27,22.27,0,0,1,405.57,84h0Zm0-44a21.75,21.75,0,1,0,21.74,21.77h0A21.77,21.77,0,0,0,405.57,40h0Zm0,32.76a0.92,0.92,0,0,1-.92-0.92V51.69a0.92,0.92,0,1,1,1.83,0V71.86a0.92,0.92,0,0,1-.92.92h0Zm10.08-10.08H395.49a0.92,0.92,0,1,1,0-1.83h20.16a0.92,0.92,0,0,1,0,1.83h0Zm72.78,22.42a23.34,23.34,0,1,1,23.32-23.35h0a23.36,23.36,0,0,1-23.32,23.34h0Zm0-45.34a22,22,0,1,0,22,22h0a22,22,0,0,0-22-22h0Zm0,45.59A23.59,23.59,0,1,1,512,61.76h0a23.61,23.61,0,0,1-23.57,23.59h0Zm0-46.67a23.09,23.09,0,1,0,23.07,23.1v0a23.11,23.11,0,0,0-23.07-23.09h0Zm0,45.34a22.25,22.25,0,1,1,22.24-22.27h0A22.27,22.27,0,0,1,488.43,84Zm0-44a21.75,21.75,0,1,0,21.74,21.77h0A21.77,21.77,0,0,0,488.43,40Zm7.13,29.8a0.91,0.91,0,0,1-.65-0.27L480.65,55.29A0.92,0.92,0,0,1,482,54L496.2,68.26a0.92,0.92,0,0,1-.65,1.56h0Zm-14.25,0a0.92,0.92,0,0,1-.65-1.57L494.91,54a0.92,0.92,0,0,1,1.3,1.3h0L481.95,69.56a0.92,0.92,0,0,1-.65.27h0Zm-34.9,52.93A23.34,23.34,0,1,1,469.72,99.4h0A23.36,23.36,0,0,1,446.4,122.75Zm0-45.34a22,22,0,1,0,22,22h0A22,22,0,0,0,446.4,77.41Zm0,45.59A23.59,23.59,0,1,1,470,99.4h0A23.61,23.61,0,0,1,446.4,123Zm0-46.68a23.09,23.09,0,1,0,23.07,23.1h0A23.11,23.11,0,0,0,446.4,76.32Zm0,45.34A22.25,22.25,0,1,1,468.64,99.4h0A22.27,22.27,0,0,1,446.4,121.67Zm0-44a21.75,21.75,0,1,0,21.74,21.77h0A21.77,21.77,0,0,0,446.4,77.66Zm10.08,22.67H436.32a0.92,0.92,0,0,1,0-1.83h20.16a0.92,0.92,0,0,1,.06,1.83h-0.06Zm-8-7.08a2.08,2.08,0,1,1-2.08-2.08,2.08,2.08,0,0,1,2.08,2.08h0Zm0,12.17a2.08,2.08,0,1,1-2.08-2.08,2.08,2.08,0,0,1,2.08,2.08h0ZM446.4,46.92a23.34,23.34,0,1,1,23.32-23.35h0A23.36,23.36,0,0,1,446.4,46.92Zm0-45.34a22,22,0,1,0,22,22h0A22,22,0,0,0,446.4,1.58Zm0,45.59A23.59,23.59,0,1,1,470,23.58h0A23.61,23.61,0,0,1,446.4,47.17Zm0-46.67a23.09,23.09,0,1,0,23.07,23.1h0A23.11,23.11,0,0,0,446.4.5Zm0,45.34a22.25,22.25,0,1,1,22.24-22.27h0A22.27,22.27,0,0,1,446.4,45.84Zm0-44A21.75,21.75,0,1,0,468.14,23.6h0A21.77,21.77,0,0,0,446.4,1.83ZM456.47,24.5H436.32a0.92,0.92,0,0,1,0-1.83h20.16a0.92,0.92,0,1,1,0,1.83h0Z" transform="translate(0 0)"/><path class="cls-2" d="M1,55H334" transform="translate(0 0)"/><path id="Shape_6_copy" data-name="Shape 6 copy" class="cls-2" d="M562,55H895" transform="translate(0 0)"/></svg>
	<p>You are leaving <span class="blue">LivingConfidently.com</span> to go to another site.</p>
    <a id="calc_btn" class="btn btn-blue" href="" target="_blank">Continue</a>
</div>

<?php get_footer(); ?>