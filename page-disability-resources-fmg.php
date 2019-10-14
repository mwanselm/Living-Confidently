<?php
/*
*  Template Name: Disability Insurance Resources - FMG
*/
 get_header(); ?>

  <script>
    var disability_res = true;
    var filter;
    <?php

    if(isset($_GET["filter"])){
        $filter = $_GET["filter"];
        ?>

        filter="<?= $filter ?>";

        <?php
    }
    else{
        $filter='All';
    }
    ?>

</script>

<section class="hero wl-resources-hero disability-resources-hero">
    <div class="home-hero-content">
        <div class="left">
            <p class="headline">BRIDGE THE (PAYCHECK) GAP</p>

            <h1 class="subhead">Learn more about the benefits of income protection with these resources.</h1>
        </div>
    </div>
    
</section>
<script>

</script>
<section class="home-tile-grid tile-grid">
    <div class="tile-filters">
        <div class="filter-container">
            <div class="filter-left wl-filter">
                <h3>Sort By</h3>
                <select class="filters">
                    <option></option>
                    <option <?php if($filter=='All'){echo 'selected';} ?> value="All" data-orderby="meta_value" data-text='<span class="bold">All</span>'>
                        <span class="mobile">All</span>
                    </option>
                    <option <?php if($filter=='Infographics'){echo 'selected';} ?> value="Infographics" data-taxonomy-terms="infographics"  data-text='<span class="bold">Infographics</span>'>
                        <span class="mobile">Infographics</span>
                    </option>
                    <option <?php if($filter=='Videos'){echo 'selected';} ?> value="Videos" data-taxonomy-terms="videos" data-text='<span class="bold">Videos</span>'>
                        <span class="mobile">Videos</span>
                    </option>
                    <option <?php if($filter=='Articles'){echo 'selected';} ?> value="Articles" data-taxonomy-terms="blogs-articles" data-text='<span class="bold">Blogs/Articles</span>'>
                        <span class="mobile">Blogs/Articles</span>
                    </option>
                </select>
            </div>
            <div class="filter-right wl-filter">
                <a href="<?= !empty($_SESSION['prev_page_dr']) ? $_SESSION['prev_page_dr'] : home_url('/protect-your-paycheck-fmg'); ?>" target="_self">
                    <span class="pull-left"><svg style="transform: rotate(180deg);" width="20px" height="8px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.04 16.44"><defs><style>.arrow-stroke{fill:#ffffff;}</style></defs><title>arrow_right</title><path id="G_Arrow_copy" data-name="G Arrow copy" class="arrow-stroke" d="M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z" transform="translate(0 -0.02)"></path></svg> Back</span></a>
            </div>
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
                opacity: 0.5;
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

		<base target="_blank">
        
            
        <div class="tile-row ajax-wrap wl-tiles wlll-tiles">
            <div class="no-results">
                <h2>No results found</h2>
            </div>
            
            <!-- see functions.php for posts in query below for data -->
            <?php


           if(!$filter || $filter=='All'):

                echo do_shortcode('[ajax_load_more 
                    id="disability_resources" 
                    container_type="div" 
                    posts_per_page="8" 
                    scroll="false" 
                    button_label="Load More"
                    orderby="date"
                    ]'); 

            else:

               
                echo do_shortcode('[ajax_load_more 
                    id="disability_resources" 
                    container_type="div"
                    posts_per_page="8"
                    taxonomy="disability_category" 
                    taxonomy_terms="'.strtolower($filter).'" 
                    taxonomy_operator="IN" 
                    button_label="Load More"
                    scroll="false"]');
                

            endif;

            ?>    
            <!-- see functions.php for posts in query above for data -->
            
        </div>
    </div>
    <!-- <div class="load-tiles">
        <a class="btn btn-blue" href="javascript:;">Load More</a>
    </div> -->
</section>

<?php get_footer(); ?>

<script>

    /*
    window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload() 
        }
    };
    */

</script>