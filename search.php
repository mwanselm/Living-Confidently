<?php
/*
* @package Wordpress
* @subpackage Living Confidently
*/
?>

<?php get_header(); ?>
    <section class="search-title">
    <h1>&mdash; Search Results &mdash;</h1>
    <?php
        global $wp_query;
    ?>
    <p class="results-amt"><span class="variable"><?php echo $wp_query->found_posts; ?></span> results found for “<span class="keyword"><?php echo get_search_query(); ?></span>”</p>
    
</section>
<section class="article article-body <?php echo $article_class; ?>">
    <div class="article-container search-container">
<?php 
    while ( have_posts() ) : the_post(); 
    ?>
        <section class="search-result">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <a href="<?php the_permalink(); ?>" class="result-url"><?php the_permalink(); ?></a>
            <p class="results-preview"><?php the_excerpt(); ?></p>
        </section>
    <?php
    endwhile; // end while
?>
<div class="nav-previous alignleft"><?php next_posts_link( 'Next page' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Previous page' ); ?></div>
</div>
</section>
    

<?php get_footer(); ?>