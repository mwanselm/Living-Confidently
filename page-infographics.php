<?php
/*
*  Template Name: Infographics
*/
?>

<?php get_header(); ?>
<section class="hero article-hero" style="background-image: url('https://www.livingconfidently.com/wp-content/themes/lc_phase_2/img/c2c/Video_Header.svg');"></section>
<section class="article article-body infographic">
    <div class="article-container">

<?php

$args1 = array(
    'post_type' => 'infographics',
    'posts_per_page' => -1,
    'meta_key'      => 'list_infographic',
    'meta_value'    => '1'
);
// the query
$the_query = new WP_Query( $args1 );

 if ( $the_query->have_posts() ) : ?>
	
    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
    	$pdf = get_field('pdf');
    ?>
    	<h2 class="section-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="modal-sharebtns" style="overflow: hidden; margin-bottom: 20px;">
	                             <div id="info_this" class="">
	                               <a class="addthis_counter" addthis:url="" addthis:title="" href="#" style="display: inline-block;" tabindex="0"><a class="addthis_button_expanded" target="_blank" title="More" href="#">2</a>
	                             </div>
	                             <?php if($pdf): ?>
	                                 <div id="download_pdf" ><img src="<?php echo get_bloginfo('template_directory'); ?>/img/pdf_icon_black.png"><a href="<?php echo $pdf['url']; ?>" target="_blank">&nbsp;&nbsp;Download PDF</a></div>
	                            <?php endif; ?>
	                            </div>
    <?php
    	the_content(); 
    endwhile;
   endif;
   ?>


</div>
</section>

   
<?php get_footer(); ?>