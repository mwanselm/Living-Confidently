<?php get_header(); ?>

<script>
    var home_res = true;
    <?php 
        if ( isset($_GET["type"]) ) {
            $sort = $_GET["type"];
        } else {
            $sort = 'post, calculators, quizzes, infographics, videos, tools, podcasts';
        }
        
        if (isset($_GET['category'])) {
            $filter = $_GET['category'];  
        } else {
            $filter = '';
        }
    ?>
</script>

<section class="hero home-hero">
    <div class="home-hero-content">
        
        <div id="hhc-left">
          <h1>Spend it now,<br/>or save it for tomorrow?</h1>
          <a href="/cash-stash-dash-calculator/" class="btn btn-blue">PLAY THE CASH STASH DASH</a>
        </div>
        <div class="animation" id="anim7"></div>
                    
            
    </div>
</section>


<script>

</script>
<section class="home-tile-grid tile-grid">
    <div class="tile-filters">
        <div class="filter-container">
            <div class="filter-left">
                <h3>Sort By</h3>
                <select class="filters">
                    <option></option>
                    <option <?php if ($sort == 'Featured') echo 'selected="selected"'; ?> value="Featured" data-orderby="meta_value" data-text='<span class="bold">Featured</span>'>
                        <span class="mobile">Featured</span>
                    </option>
                    <option <?php if ($sort == 'Most Recent') echo 'selected="selected"'; ?> value="Most Recent" data-orderby="date"  data-text='<span class="bold">Most Recent</span>'>
                        <span class="mobile">Most Recent</span>
                    </option>
                    <option <?php if ($sort == 'Most Popular') echo 'selected="selected"'; ?> value="Most Popular" data-orderby="post_views" data-text='<span class="bold">Most Popular</span>' class="most-popular-link">
                        <span class="mobile">Most Popular</span>
                    </option>
                    <option disabled value="Type" data-text='<span class="bold">Type</span>'>
                        <span class="mobile">Type</span>
                    </option>
                    <option <?php if ($sort == 'post, calculators, quizzes, infographics, videos, tools, podcasts') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="post, calculators, quizzes, infographics, videos, tools, podcasts">All</option>
                    <option <?php if ($sort == 'infographics') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="infographics">Infographics</option>
                    <option <?php if ($sort == 'post') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="post">Blogs/articles</option>
                    <option <?php if ($sort == 'podcasts') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="podcasts">Podcasts</option>
                    <option <?php if ($sort == 'quizzes') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="quizzes">Quizzes</option>
                    <option <?php if ($sort == 'videos') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="videos">Videos</option>
                    <option <?php if ($sort == 'tools') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="tools">Tools</option>
                    <option <?php if ($sort == 'calculators') echo 'selected="selected"'; ?> data-filter="post_type" data-post-type="calculators">Calculators</option>
                </select>
            </div>
            <div class="filter-right mobile">
                <h3>Filter By</h3>
                <select>
                    <option disabled selected value>Select One</option>
                    <option <?php if ($filter == 'financial-planning') echo 'selected="selected"'; ?> data-taxonomy-terms="financial-planning">Financial Planning</option>
                    <option <?php if ($filter == 'retirement') echo 'selected="selected"'; ?> data-taxonomy-terms="retirement">Retirement</option>
                    <option <?php if ($filter == 'investing') echo 'selected="selected"'; ?> data-taxonomy-terms="investing">Investing</option>
                    <option <?php if ($filter == 'budgeting') echo 'selected="selected"'; ?> data-taxonomy-terms="budgeting">Budgeting</option>
                    <option <?php if ($filter == 'insurance') echo 'selected="selected"'; ?> data-taxonomy-terms="insurance">Insurance</option>
                    <option <?php if ($filter == 'entrepreneurship') echo 'selected="selected"'; ?> data-taxonomy-terms="entrepreneurship">Entrepreneurship</option>
                    <option <?php if ($filter == 'Most Popular') echo 'selected="selected"'; ?> data-taxonomy-terms="" class="most-popular-link">Most Popular</option>
                    <!--option data-taxonomy-terms="advanced-topics">Advanced Topics</option-->
                </select>
            </div>

            <ul class="desktop tile-cat-filter">
                <li><a <?php if ($filter == 'financial-planning') echo 'class="active"'; ?> href="javascript:;" data-taxonomy-terms="financial-planning">Financial Planning</a></li>
                <li><a <?php if ($filter == 'retirement') echo 'class="active"'; ?> href="javascript:;" data-taxonomy-terms="retirement">Retirement</a></li>
                <li><a <?php if ($filter == 'investing') echo 'class="active"'; ?> href="javascript:;" data-taxonomy-terms="investing">Investing</a></li>
                <li><a <?php if ($filter == 'budgeting') echo 'class="active"'; ?> href="javascript:;" data-taxonomy-terms="budgeting">Budgeting</a></li>
                <li><a <?php if ($filter == 'insurance') echo 'class="active"'; ?> href="javascript:;" data-taxonomy-terms="insurance">Insurance</a></li>
                <li><a <?php if ($filter == 'entrepreneurship') echo 'class="active"'; ?> href="javascript:;" data-taxonomy-terms="entrepreneurship">Entrepreneurship</a></li>
                <li><a <?php if ($filter == 'Most Popular') echo 'class="active"'; ?> href="javascript:;" data-taxonomy-terms="" class="most-popular-link">Most Popular</a></li>
                <!--li><a href="javascript:;" data-taxonomy-terms="advanced-topics">Advanced Topics</a></li-->
            </ul>
        </div>
    </div>
    <div class="tiles">
        <style>
            .tile-grid .tiles .tile-row .tile img{
                height: auto;
            }
            .ajax-load-more-wrap, .alm-ajax, .alm-reveal{
                height: 100%;
            }
            .alm-reveal{
                margin-bottom: 0.88763%;
                height: 522px !important;
            }
            button.alm-load-more-btn{
                height: 50px;
                line-height: 50px;
                border-radius: 2px;
                letter-spacing: 1px;
                font-family: "brandon_grotesquemedium";
                display: inline-block;
                text-transform: uppercase;
                font-size: 0.78125em;
                text-decoration: none;
                text-align: center;
                padding-left: 15px;
                padding-right: 15px;
                background-color: #328abd;
                color: white;
            }
            .tile-cat-filter a.active{
                text-decoration: underline !important;
            }
            .alm-btn-wrap{
                margin: 25px 140px;
                clear: both;
            }
            .tile-grid .tiles .tile-row.ajax-wrap{
                height: auto;
            }
            .no-results{
                display: none;
                text-align: center;
                padding: 30px;

            }
            .no-results h2{
                color: white;
            }
            li.selectboxit-disabled{
                pointer-events: none;
            }
            li.selectboxit-disabled:not([data-id="2"]){
                opacity: 0.5;
            }
            .home-hero-content li.selectboxit-disabled{
                opacity: 0.5 !important;
            }
            .tile-cat-filter a.disabled{
                opacity: 0.5;
                pointer-events: none;
            }
            .selectboxit-container .selectboxit-options{
                cursor: initial;
            }
            a.selectboxit-option-anchor{
                cursor: pointer;
            }

            @media only screen and (max-width: 768px){
                .no-results h2{
                    color: #002c5f;
                }
                section.home-tile-grid{
                    overflow: visible;
                }
            }
            @media only screen and (max-width: 767px) and (orientation: landscape){
                .tile-grid .tiles .tile.half{
                    height: 430px;
                }
            }
            @media only screen and (max-width: 768px) and (min-width: 380px){
                .tile-grid.home-tile-grid .tiles .tile,
                .tile-grid.home-tile-grid .tiles .tile:last-child{
                    margin-right: 0.38763%;
                }
                .tile-grid .tiles .tile:nth-of-type(even) {
                    margin-right: 0.5%;
                }
                .tile-grid .tiles .tile-row.first-row{
                    display: flex;
                    flex-wrap: wrap;
                }
                
                .tile-grid .tiles .tile.half{
                    width: 100%;
                    order: 0;
                }

                .tile-grid .tiles .tile-row.first-row .tile:first-of-type{
                    order: 1;
                }

                .tile-grid .tiles .tile-row.first-row .tile:last-of-type{
                    order: 2;
                }
                
            }

            .mobile-img{
                display: none !important;
            }

            .no-results{
                display: none;
                text-align: center;
                padding: 30px;

            }
            .no-results h2{
                color: white;
            }

            @media only screen and (max-width: 379px){
                .tile-grid .tiles .tile > a.desktop-image{
                    display:  none;
                }
                .mobile-img{
                    display: block !important;
                }
                .tile-grid .tiles .tile-row.first-row{
                    display: flex;
                    flex-wrap: wrap;
                }
                
                .tile-grid .tiles .tile.half{
                    width: 100%;
                    order: 0;
                }

                .tile-grid .tiles .tile-row.first-row .tile:first-of-type{
                    order: 1;
                }

                .tile-grid .tiles .tile-row.first-row .tile:last-of-type{
                    order: 2;
                }
            }
        </style>



        <?php
        $featured_ids = '';
        $featured_posts = [];
        if( !$_GET['type'] ):
        $category = $_GET['category'];
        $type = $_GET['type'];

        if($type):
            $post_type_query = array($type);
        else:
            $post_type_query = array('post', 'calculators', 'quizzes', 'infographics', 'videos', 'tools', 'podcasts');
        endif;
        ?>


        <div class="tile-row first-row">
                            <?php
                            //FEATURED
                            if($_GET['category']):
                                $args1 = array(
                                    'post_type' => $post_type_query,
                                    'posts_per_page' => 1,
                                    'meta_key'      => 'is_featured',
                                    'meta_value'    => '0',
                                    'tax_query' => array(
                                            array(
                                                'taxonomy' => 'home-categories',
                                                'field'    => 'slug',
                                                'terms'    => $category,
                                            ),
                                        ),
                                );
                            else:
                                $args1 = array(
                                    'post_type' => $post_type_query,
                                    'posts_per_page' => 1,
                                    'meta_key'      => 'is_featured',
                                    'meta_value'    => '0'
                                );
                            endif;
                            // the query
                            $the_query = new WP_Query( $args1 ); ?>

                            <?php if ( $the_query->have_posts() ) : ?>

                                <!-- pagination here -->

                                <!-- the loop -->
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                    
                                         $img = get_field('home_tile');
                                         $thumb = $img['sizes'][ 'home-tile' ];
                                         if(get_field('excerpt')){
                                            $content = get_field('excerpt');
                                         }
                                            else{
                                            $content = get_the_content();
                                            }

                                            $post_type = get_post_type();
                                            if($post_type == 'calculators'){
                                                $href = get_field('calculator_url');
                                                $target="";
                                            }
                                            else{
                                                $href = get_permalink();
                                            }

 ?>
<div class="tile quarter" id="non-featured-one">
                <a href='<?php echo $href; ?>' target="<?php echo $target; ?>"><img src="<?php echo $thumb; ?>"></a>
                <div class="tile-copy">
                    <h3><a href='<?php echo $href; ?>' target="<?php echo $target; ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words( $content, 25 ); ?><a href="<?php echo $href; ?>" target="<?php echo $target; ?>"><svg width="20px" height="8px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.04 16.44"><defs><style>.cls-1{fill:#5a5a5f;}</style></defs><title>arrow_right</title><path id="G_Arrow_copy" data-name="G Arrow copy" class="cls-1" d="M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z" transform="translate(0 -0.02)"/></svg></a></p>
                </div>
</div>
                                <?php 

                                endwhile;
                                wp_reset_postdata();
                                endif;
                                if($_GET['category']):
                                    $args = array(
                                        'post_type ' => $post_type_query,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'home-categories',
                                                'field'    => 'slug',
                                                'terms'    => $category,
                                            ),
                                        ),
                                        'posts_per_page' => 1,
                                        'meta_key'      => 'is_featured',
                                        'meta_value'    => '1',
                                    );

                                    $posts = get_posts( $args );
                                    $query = new WP_Query( $args );

                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                                $id = $post->ID;
                                                array_push($featured_posts, $id);
                                                $img = get_field('home_tile', $id);
                                                            $thumb = $img['sizes'][ 'home-tile' ];
                                                            if(get_field('featured_post_excerpt', $id)){
                                                                $content = get_field('featured_post_excerpt', $id);
                                                            }
                                                               else{
                                                               $content = get_the_content($id);
                                                               }

                                                               $post_type = get_post_type($id);
                                                               if($post_type == 'calculators'){
                                                               $href = get_field('calculator_url', $id);
                                                               $target="_blank";
                                                               }
                                                               else{
                                                               $href = get_permalink($id);
                                                               }
                                                $html = "<div class='tile half' id='featured'><a class='desktop-image' href='" . $href . "' target='" . $target . "'>" . get_the_post_thumbnail($id, 'home-tile-featured') . "</a>";
                                                $html .= "<a href='" . $href . "' class='mobile-img' target='" . $target . "'><img src='" . $thumb . "'></a>";
                                                $html .= "<div class='tile-copy'><h3><a href='" . $href . "' target='" . $target ."'>" . get_the_title($id) . "</a></h3><p>" . wp_trim_words( $content, 40 ) . "<a href='javascript:;'><svg width='20px' height='8px' id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 39.04 16.44'><defs><style>.cls-1{fill:#5a5a5f;}</style></defs><title>arrow_right</title><path id='G_Arrow_copy' data-name='G Arrow copy' class='cls-1' d='M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z' transform='translate(0 -0.02)'/></svg></a></p></div></div>";
                                                echo $html;
                                    }
                                    wp_reset_postdata();
                                else:
                                $post_object = get_field('featured_post');

                                    if( $post_object ): 

                                        // override $post
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        array_push($featured_posts, get_the_ID());
                                        $img = get_field('home_tile');
                                        $thumb = $img['sizes'][ 'home-tile' ];
                                        if(get_field('featured_post_excerpt')){
                                            $content = get_field('featured_post_excerpt');
                                        }
                                           else{
                                           $content = get_the_content();
                                           }

                                           $post_type = get_post_type();
                                           if($post_type == 'calculators'){
                                           $href = get_field('calculator_url');
                                           $target="";
                                           }
                                           else{
                                           $href = get_permalink();
                                           }
                                        ?>
                                        <div class="tile half" id="featured">
                                            <a class="desktop-image" href='<?php echo $href; ?>' target="<?php echo $target; ?>"><?php the_post_thumbnail('home-tile-featured'); ?></a>
                                            <a href='<?php echo $href; ?>' class="mobile-img" target="<?php echo $target; ?>"><img src="<?php echo $thumb; ?>"></a>
                                            <div class="tile-copy">
                                                <h3><a href='<?php echo $href; ?>' target="<?php echo $target; ?>"><?php the_title(); ?></a></h3>
                                                <p><?php echo wp_trim_words( $content, 40 ); ?><a href='<?php echo $href; ?>' target="<?php echo $target; ?>"><svg width="20px" height="8px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.04 16.44"><defs><style>.cls-1{fill:#5a5a5f;}</style></defs><title>arrow_right</title><path id="G_Arrow_copy" data-name="G Arrow copy" class="cls-1" d="M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z" transform="translate(0 -0.02)"/></svg></a></p>
                                            </div>
                                        </div>
                                    <?php 

                                    
                                    wp_reset_postdata();
                                    endif; //End Post Object
                                endif; //End Params

                                if($_GET['category']):
                                    $args3 = array(
                                        'post_type' => $post_type_query,
                                        'posts_per_page' => 1,
                                        'offset' => 1,
                                        'meta_key'      => 'is_featured',
                                        'meta_value'    => '0',
                                        'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'home-categories',
                                                    'field'    => 'slug',
                                                    'terms'    => $category,
                                                ),
                                            ),
                                    );
                                else:
                                    $args3 = array(
                                        'post_type' => $post_type_query,
                                        'posts_per_page' => 1,
                                        'offset' => 1,
                                        'meta_key'      => 'is_featured',
                                        'meta_value'    => '0'
                                    );
                                endif;
                                // the query
                                $the_query3 = new WP_Query( $args3 ); ?>

                                <?php if ( $the_query3->have_posts() ) : ?>

                                    <!-- pagination here -->

                                    <!-- the loop -->
                                    <?php while ( $the_query3->have_posts() ) : $the_query3->the_post(); 
                                             $img = get_field('home_tile');
                                             $thumb = $img['sizes'][ 'home-tile' ];
                                             if(get_field('excerpt')){
                                                $content = get_field('excerpt');
                                             }
                                                else{
                                                $content = get_the_content();
                                                }

                                                $post_type = get_post_type();
                                                if($post_type == 'calculators'){
                                                $href = get_field('calculator_url');
                                                $target="";
                                                }
                                                else{
                                                $href = get_permalink();
                                                }

                                                $terms = wp_get_post_terms(get_the_ID(), 'home-categories');
                                                $home_categories = array();
                                                foreach ($terms as $t) {
                                                    $home_categories[] = $t->name;
                                                }
                                         ?>
                                        <div class="tile quarter" id="non-featured-two" data-home-category="<?= implode(', ', $home_categories) ?>">
                                                        <a href='<?php echo $href; ?>' target="<?php echo $target; ?>"><img src="<?php echo $thumb; ?>"></a>
                                            <div class="tile-copy">
                                                <h3><a href='<?php echo $href; ?>' target="<?php echo $target; ?>"><?php the_title(); ?></a></h3>
                                                <p><?php echo wp_trim_words( $content, 25 ); ?><a href='<?php echo $href; ?>' target="<?php echo $target; ?>"><svg width="20px" height="8px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.04 16.44"><defs><style>.cls-1{fill:#5a5a5f;}</style></defs><title>arrow_right</title><path id="G_Arrow_copy" data-name="G Arrow copy" class="cls-1" d="M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z" transform="translate(0 -0.02)"/></svg></a></p>
                                            </div>
                                        </div>
                                    <?php 

                                    endwhile;
                                    wp_reset_postdata();
                                    else:
                                        echo "<div style='color: white'>No results found: " . $category . "</div>";
                                    var_dump($post_type);
                                    endif;
                                ?>
            </div>


        <?php endif; ?>
            
        <div class="tile-row ajax-wrap">
            <?php

            $offset = 2;
            $featured_ids = implode(', ', $featured_posts);
            $taxonomy = '';
            $taxonomy_terms = '';
            $meta_key = '';
            $meta_value = '';
            $meta_compare = '';
            $orderby = '';
            $post_type = 'post, calculators, quizzes, infographics, videos, tools, podcasts';

            if($_GET['category']){
                $offset = 2;
                $taxonomy = 'home-categories';
                $taxonomy_terms = $_GET['category'];
            }

            if($_GET['type']){
                $offset = 0;
                $post_type = $_GET['type'];
            }
            
            
            if ($sort == 'Featured') {
                $post_type = 'post, calculators, quizzes, infographics, videos, tools, podcasts';
                $meta_key = 'is_featured';
                $meta_value = 1;
                $meta_compare = '=';
                $offset = 0;
            } else if ($sort == 'Most Recent') {
                $post_type = 'post, calculators, quizzes, infographics, videos, tools, podcasts';
                $orderby = 'date';
                $offset = 0;
            } else if ($sort == 'Most Popular' || $filter == 'Most Popular') {
                $post_type = 'post, calculators, quizzes, infographics, videos, tools, podcasts';
                $orderby = 'post_views';
                $offset = 0;
            }







            ?>
            <div class="no-results">
                <h2>No results found</h2>
            </div>
            <?= do_shortcode('[ajax_load_more container_type="div" post_type="' . $post_type . '" posts_per_page="4" scroll="false" offset="' . $offset . '" exclude="' . $featured_ids . '" taxonomy_terms="' . $taxonomy_terms . '" taxonomy="' . $taxonomy . '" meta_key="'.$meta_key.'" meta_value="'.$meta_value.'" meta_compare="'.$meta_compare.'" orderby="'.$orderby.'" button_label="Load More"]'); ?>
        </div>
    </div>
    <!-- <div class="load-tiles">
        <a class="btn btn-blue" href="javascript:;">Load More</a>
    </div> -->
</section>

<div id="interstitial" class="modal" style="display: none;">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 896 123"><defs><style>.modal-header{fill:#328abd;}.cls-2{fill:none;stroke:#328abd;stroke-linecap:round;stroke-width:2px;opacity:0.33;isolation:isolate;}</style></defs><title>modal-header</title><path class="modal-header" d="M405.57,85.11A23.34,23.34,0,1,1,428.9,61.77h0A23.36,23.36,0,0,1,405.57,85.11Zm0-45.34a22,22,0,1,0,22,22h0a22,22,0,0,0-22-22h0Zm0,45.59a23.59,23.59,0,1,1,23.57-23.6h0a23.61,23.61,0,0,1-23.57,23.59h0Zm0-46.67a23.09,23.09,0,1,0,23.07,23.1h0a23.11,23.11,0,0,0-23.07-23.09h0Zm0,45.34a22.25,22.25,0,1,1,22.24-22.27h0A22.27,22.27,0,0,1,405.57,84h0Zm0-44a21.75,21.75,0,1,0,21.74,21.77h0A21.77,21.77,0,0,0,405.57,40h0Zm0,32.76a0.92,0.92,0,0,1-.92-0.92V51.69a0.92,0.92,0,1,1,1.83,0V71.86a0.92,0.92,0,0,1-.92.92h0Zm10.08-10.08H395.49a0.92,0.92,0,1,1,0-1.83h20.16a0.92,0.92,0,0,1,0,1.83h0Zm72.78,22.42a23.34,23.34,0,1,1,23.32-23.35h0a23.36,23.36,0,0,1-23.32,23.34h0Zm0-45.34a22,22,0,1,0,22,22h0a22,22,0,0,0-22-22h0Zm0,45.59A23.59,23.59,0,1,1,512,61.76h0a23.61,23.61,0,0,1-23.57,23.59h0Zm0-46.67a23.09,23.09,0,1,0,23.07,23.1v0a23.11,23.11,0,0,0-23.07-23.09h0Zm0,45.34a22.25,22.25,0,1,1,22.24-22.27h0A22.27,22.27,0,0,1,488.43,84Zm0-44a21.75,21.75,0,1,0,21.74,21.77h0A21.77,21.77,0,0,0,488.43,40Zm7.13,29.8a0.91,0.91,0,0,1-.65-0.27L480.65,55.29A0.92,0.92,0,0,1,482,54L496.2,68.26a0.92,0.92,0,0,1-.65,1.56h0Zm-14.25,0a0.92,0.92,0,0,1-.65-1.57L494.91,54a0.92,0.92,0,0,1,1.3,1.3h0L481.95,69.56a0.92,0.92,0,0,1-.65.27h0Zm-34.9,52.93A23.34,23.34,0,1,1,469.72,99.4h0A23.36,23.36,0,0,1,446.4,122.75Zm0-45.34a22,22,0,1,0,22,22h0A22,22,0,0,0,446.4,77.41Zm0,45.59A23.59,23.59,0,1,1,470,99.4h0A23.61,23.61,0,0,1,446.4,123Zm0-46.68a23.09,23.09,0,1,0,23.07,23.1h0A23.11,23.11,0,0,0,446.4,76.32Zm0,45.34A22.25,22.25,0,1,1,468.64,99.4h0A22.27,22.27,0,0,1,446.4,121.67Zm0-44a21.75,21.75,0,1,0,21.74,21.77h0A21.77,21.77,0,0,0,446.4,77.66Zm10.08,22.67H436.32a0.92,0.92,0,0,1,0-1.83h20.16a0.92,0.92,0,0,1,.06,1.83h-0.06Zm-8-7.08a2.08,2.08,0,1,1-2.08-2.08,2.08,2.08,0,0,1,2.08,2.08h0Zm0,12.17a2.08,2.08,0,1,1-2.08-2.08,2.08,2.08,0,0,1,2.08,2.08h0ZM446.4,46.92a23.34,23.34,0,1,1,23.32-23.35h0A23.36,23.36,0,0,1,446.4,46.92Zm0-45.34a22,22,0,1,0,22,22h0A22,22,0,0,0,446.4,1.58Zm0,45.59A23.59,23.59,0,1,1,470,23.58h0A23.61,23.61,0,0,1,446.4,47.17Zm0-46.67a23.09,23.09,0,1,0,23.07,23.1h0A23.11,23.11,0,0,0,446.4.5Zm0,45.34a22.25,22.25,0,1,1,22.24-22.27h0A22.27,22.27,0,0,1,446.4,45.84Zm0-44A21.75,21.75,0,1,0,468.14,23.6h0A21.77,21.77,0,0,0,446.4,1.83ZM456.47,24.5H436.32a0.92,0.92,0,0,1,0-1.83h20.16a0.92,0.92,0,1,1,0,1.83h0Z" transform="translate(0 0)"/><path class="cls-2" d="M1,55H334" transform="translate(0 0)"/><path id="Shape_6_copy" data-name="Shape 6 copy" class="cls-2" d="M562,55H895" transform="translate(0 0)"/></svg>
    <p>You are leaving <span class="blue">LivingConfidently.com</span> to go to another site.</p>
    <a id="calc_btn" class="btn btn-blue" href="javascript:;" target="_blank">Continue</a>
</div>

<?php get_footer(); ?>