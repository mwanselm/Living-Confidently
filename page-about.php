<?php
/*
*  Template Name: About Page
*/
?>

<?php get_header(); ?>

	<section class="hero about-lc">
	<div class="hero-copy">
		<?php the_field('hero_copy'); ?>
	</div>
	<div class="hero-img desktop">
		
	</div>
</section>
<section class="about-body">
<?php 
if ( have_posts() ) {
    while ( have_posts() ) : the_post();
        the_content();
    endwhile; // end while
} // end if
?>
	
</section>

<?php get_footer(); ?>