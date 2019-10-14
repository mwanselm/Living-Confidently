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
    while ( have_posts() ) : the_post(); ?>
        <h2 class="section-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <?php 

        if($post_type == 'infographics'):
            $pdf = get_field('pdf');
        ?>
            <div class="modal-sharebtns" style="overflow: hidden; margin-bottom: 20px;">
                                         <div id="info_this" class="">
                                           <a class="addthis_counter" addthis:url="" addthis:title="" href="#" style="display: inline-block;" tabindex="0"><a class="addthis_button_expanded" target="_blank" title="More" href="#">2</a>
                                         </div>
                                         <?php if($pdf): ?>
                                             <div id="download_pdf" ><img src="<?php echo get_bloginfo('template_directory'); ?>/img/pdf_icon_black.png"><a href="<?php echo $pdf['url']; ?>" target="_blank">&nbsp;&nbsp;Download PDF</a></div>
                                        <?php endif; ?>
                                        </div>
            <?php endif;

        the_content(); 
        if($post_type == 'videos'):
            the_field('video_code', $post->ID);
        endif;
            
    endwhile; // end while
?>
<div class="nav-previous alignleft"><?php next_posts_link( 'Next page' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Previous page' ); ?></div>
    </div>
</section>

<?php get_footer(); ?>