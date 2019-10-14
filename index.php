<?php
/*
* @package Wordpress
* @subpackage Living Confidently
*/
?>

<?php get_header(); ?>
<?php
$post_type = get_post_type();
$hero_img = '';
$article_class = '';

switch( $post_type ):
    case 'videos':
        $hero_img = '/img/c2c/Video_Header.svg';
        $article_class = 'video-article';
        break;
    case 'infographics':
        $hero_img = '/img/c2c/Video_Header.svg';
        $article_class = 'infographic';
        break;
    default:
        $hero_img = '/img/c2c/Video_Header.svg';

endswitch;
?>
<section class="hero article-hero" style="background-image: url(<?php echo get_bloginfo('template_directory') . $hero_img ;?>);"></section>
<section class="article article-body <?php echo $article_class; ?>">
    <div class="article-container">
<?php 
    while ( have_posts() ) : the_post(); 
    	the_post_thumbnail();
    ?>
        <h2 class="section-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php 

        the_excerpt(); 

        echo "<p><a href='" . get_permalink() . "'>Read More</a>";
            
    endwhile; // end while
?>
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
    </div>
</section>

<?php get_footer(); ?>