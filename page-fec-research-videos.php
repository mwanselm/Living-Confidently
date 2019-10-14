<?php /* Template Name: FEC Research Videos */ ?>
<?php get_header(); ?>

<?php
global $wp_query, $paged;

if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} else if ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else{
    $paged = 1;
}

$post_per_page = 3;
$wp_query = new WP_Query(array(
    'post_type' => array( 'videos' ),
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    'meta_query' => array(
        array(
            'key' => 'show_on_fec_research_videos_page',
            'value' => '"yes"',
            'compare' => 'LIKE'
        )
    )
));
$hero_img = '/img/c2c/Video_Header.svg';
$article_class = 'video-article';

?>
<style>
img{
    max-width: 100%;
    height: auto;
}
</style>
<section class="hero article-hero" style="background-image: url(<?php echo get_bloginfo('template_directory') . $hero_img ;?>);"></section>
<section class="article article-body <?php echo $article_class; ?>">
    <div class="article-container">
        <?php 
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <h2 class="section-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <?php 
                the_content();
                the_field('video_code', get_the_ID());
            endwhile;
        ?>
        <div class="nav-previous alignleft"><?php next_posts_link( 'Next page' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Previous page' ); ?></div>
        <?php wp_reset_query(); ?>
    </div>
</section>

<?php get_footer(); ?>