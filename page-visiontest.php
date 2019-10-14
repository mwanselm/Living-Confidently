<?php
/*
Template Name: Vision Test
*/
?>
<?php get_header(); ?>


        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/visiontest.css" media="screen" type="text/css">



<?php if (isset($_REQUEST['patient_dreamer']) || isset($_REQUEST['frugal_realist']) || isset($_REQUEST['lux_lifer']) || isset($_REQUEST['moment_maximizer'])){ ?>

<?php } else { ?>
<div class="quiz-header">
      <header>
        <div id="tools_sub_head">
          <?php if (isset($_REQUEST['patient_dreamer']) || isset($_REQUEST['frugal_realist']) || isset($_REQUEST['lux_lifer']) || isset($_REQUEST['moment_maximizer'])){ ?>
          	<div class="tools_sub_icon fancy fancy-contrast"><span><img src="<?php echo get_template_directory_uri(); ?>/images/vision_test_logo_2.png" /></span></div>
          <?php } else { ?>
          	<div class="tools_sub_icon fancy"><span><img src="<?php echo get_bloginfo('url'); ?>/wp-content/plugins/mrw-quiz/images/vision_test_logo_1.png" /></span></div>
          <?php } ?>
          <?php if (isset($_REQUEST['patient_dreamer']) || isset($_REQUEST['frugal_realist']) || isset($_REQUEST['lux_lifer']) || isset($_REQUEST['moment_maximizer'])){ ?>
          
          <?php } else { ?>
      		<div class="page-header">
	            <h1>The Long Term Vision Test</h1>
	            <h2 class="hidden-xs">Take the test to learn how you see the future</h2>
	          </div>
          <?php } ?>
        </div>
      </header><!-- end article header -->
</div>
<?php } ?>

<div id="content" class="clearfix row">
  <div id="main" class="col col-lg-12 clearfix" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
      <section class="post_content">
        <div id="social_quiz">
            <div id="quiz_info_share_this" class="">
                <a class="addthis_counter" addthis:title="<?php echo $title; ?>" data-url="<?php the_permalink(); ?>"></a>
            </div>
        </div>
            <div id="tools_sub_section" class="mrw-quiz-content">
              <?php the_content(); ?>
            </div>
      </section>
      <!-- end article section -->
      
      <!-- end article footer --> 
    </article>
    <!-- end article -->
    
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <!-- end #main -->
  <?php //get_sidebar(); // sidebar 1 ?>
</div>

<!-- Modal -->
<div class="modal fade" id="quizModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">How does this work?</h4>
      </div>
      <div class="modal-body hidden-xs">
		    Simply click the "Let's Do This" button to begin the test. <br />
        Each statement has a corresponding slider that allows you to<br />
        determine the accuracy of that particular statement. <br />
        Once you have made your selection simply click the <br />
        "Next" button to advance.
      </div>
      <div class="modal-body visible-xs">
        Simply click the "Let's Do This" button to begin the test. Each statement has a corresponding slider that allows you to determine the accuracy of that particular statement. <br />
        Once you have made your selection simply click the "Next" button to advance.
      </div>
    </div>
  </div>
</div>
<!-- end #content -->
<?php get_footer(); ?>
