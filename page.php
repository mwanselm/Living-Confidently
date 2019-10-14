<?php
/*
* @package Wordpress
* @subpackage Living Confidently
*/
?>

<?php get_header(); ?>

<?php 
if ( have_posts() ) {
    while ( have_posts() ) : the_post();

    if(get_field('content')){
    	the_field('content');
    }
    else{
        the_content();

    }
    endwhile; // end while
} // end if
?>

<?php get_footer(); ?>