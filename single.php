<?php
/*
* @package Wordpress
* @subpackage Living Confidently
*/
?>

<?php get_header(); ?>
<?php
$article_wrapper_open = '';
$article_wrapper_close = '';
$post_type = get_post_type();

if ($post_type == 'post' || $post_type == 'podcasts') {
    $article_wrapper_open = '<div class="article-wrapper">';
    $article_wrapper_close = '</div><!-- end of .article-wrapper -->';
}
?>

<?= $article_wrapper_open; ?>

<?php

$hero_img = '';

switch( $post_type ):
    case 'videos':
        $hero_img = get_bloginfo('template_directory') . '/img/c2c/Video_Header.svg';
        break;
    case 'infographics':
        $hero_img = get_bloginfo('template_directory') . '/img/c2c/Video_Header.svg';
        $article_class = 'infographic';
        break;
    case 'post':
  	case 'whole_life_resource':
    case 'podcasts':
        $hero_img = get_the_post_thumbnail_url();
        break;
    default:
        $hero_img = get_bloginfo('template_directory') . '/img/c2c/Video_Header.svg';

endswitch;

if(has_term('infographics', 'whole_life_categories') || has_term('infographics', 'retirement_category') || has_term('guides', 'retirement_category') || has_term('infographics', 'disability_category')):
    $article_class = 'infographic';
endif;

$pdf = get_field('pdf');
ob_start();
?>

    <div class="modal-sharebtns" style="overflow: hidden; margin-bottom: 20px;">
        <div id="info_this" class="">
            <a class="addthis_counter" addthis:url="" addthis:title="" href="#" style="display: inline-block;" tabindex="0"><a class="addthis_button_expanded" target="_blank" title="More" href="#">2</a>
        </div>
        <?php if($pdf): ?>
            <div id="download_pdf" ><img src="<?php echo get_bloginfo('template_directory'); ?>/img/pdf_icon_black.png"><a href="<?php echo $pdf['url']; ?>" target="_blank">&nbsp;&nbsp;Download PDF</a></div>
        <?php endif; ?>
        </div>
    <?php
    $share_and_download_html = ob_get_clean();
    ?>

    <?php 
        while ( have_posts() ) : the_post(); ?>
            <?php if(is_singular(array('post', 'podcasts')) && !get_field('hide_hero')): ?>
                <section class="hero article-hero">
                    <img src="<?php echo $hero_img ;?>" alt="">
                </section>
            <?php endif; ?>
            
            <?php
                if(is_singular('videos') || has_term('videos', 'whole_life_categories')):
                    $article_class = 'video-article';
                endif;
                ?>
            <section class="article article-body <?php echo $article_class; ?>">
                <div class="article-container">
                    <?php
                    if(is_singular( 'infographics') || has_term('infographics', 'whole_life_categories') || has_term('infographics', 'retirement_category') || has_term('infographics', 'disability_category')) {
                        echo $share_and_download_html;
                    }
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <?php if(get_field('show_author') || get_field('show_date')): ?>
                        <p class="post-meta">
                            <?php if(get_field('show_author')): ?>
                                By <?php the_author(); ?>
                            <?php endif; ?>
                            <?php if(get_field('show_author') && get_field('show_date')): ?>
                                &nbsp; | &nbsp;
                            <?php endif; ?>
                            <?php if(get_field('show_date')): ?>
                                <?php the_date(); ?>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                    
                    <?php if(get_field('show_date')): ?>
                        <p><?php the_date(); ?></p>
                    <?php endif; ?>

                    <?php the_content(); ?>

                    <?php
                    if (has_term('guides', 'retirement_category')) {
                        echo $share_and_download_html;
                    }
                    ?>

                    <?php 
                        if(is_singular('videos') || has_term('videos', 'whole_life_categories') || has_term('videos', 'retirement_category') || has_term('videos', 'disability_category')):
                            the_field('video_code');
                        endif;
                    ?>
                </div>
            </section>
            <?php if(get_field('sources') || get_field('show_global_disclaimer') || get_field('custom_disclaimer')): ?>
            <section class="article article-disclaimers">
                <div class="article-container">
                <?php
                    if(get_field('sources')):
                ?>
                    <h2>SOURCES:</h2>
                    
                    <?php the_field('sources'); ?>
                <?php endif; ?>
                    <?php
                        if(get_field('show_global_disclaimer') && !get_field('custom_disclaimer')){
                            dynamic_sidebar( 'disclaimers' );
                        }
                        elseif(get_field('custom_disclaimer')){
                                echo '<h2>DISCLAIMERS:</h2>';
                                the_field('custom_disclaimer');
                        }
                    ?>
                    
                </div>
            </section>
            <?php endif; ?>
            <?php if(is_singular('post')): ?>
                <?php $terms = get_the_terms( get_the_ID(), 'home-categories' ); ?>
                    <?php if ($terms !== FALSE) : ?>
                <section class="article related">
                    <div class="article-container">
                        <h2>Related:</h2>
                        <?php
                            $term_array = [];
                            foreach ($terms as $term){
                                array_push($term_array, $term->slug);
                            }
                            $term_string = implode(",", $term_array);
                        ?>
                        <div class="article-slick">
                        <?php


                            $args1 = array(
                                'post_type' => array('post', 'calculators', 'quizes', 'infographics', 'videos', 'tools', 'podcasts'),
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                        array(
                                            'taxonomy' => 'home-categories',
                                            'field'    => 'slug',
                                            'terms'    => $term_array,
                                        ),
                                    ),
                                'post__not_in' => array(get_the_ID())
                            );
                            // the query
                            $the_query = new WP_Query( $args1 ); 
                            ?>


                            <?php if ( $the_query->have_posts() ) : 
                                $class = 1;
                            ?>

                                <!-- pagination here -->

                                <!-- the loop -->
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                            <div class="related-<?php echo $class; ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="preview">
                                        <?php $img = get_field('home_tile'); ?>
                                        <img src="<?= $img['url']; ?>" alt="">
                                    </div><!-- end of .preview -->
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>
                            <?php
                            $class++;
                            endwhile;
                            wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </section>
                <?php endif; ?>
            <?php endif; ?>
        <?php
        endwhile; // end while
    ?>

<?= $article_wrapper_close; ?>

<?php get_footer(); ?>