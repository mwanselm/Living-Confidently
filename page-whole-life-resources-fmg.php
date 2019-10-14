<?php
/*
*  Template Name: Whole Life Resources - FMG
*/
 get_header(); ?>

<script>
    var whole_life_res_fmg = true, filter;
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

<section class="hero wl-resources-hero">
    <div class="home-hero-content">
        <div class="left">
            <p class="headline">Whole•istic Thinking </p>

            <h1 class="subhead">Find out more about how whole life insurance can help you live with greater financial and emotional confidence.</h1>
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
                    <option <?php if ($filter=='All') { echo 'selected'; } ?> value="All" data-orderby="meta_value" data-text='<span class="bold">All</span>'>
                        <span class="mobile">All</span>
                    </option>
                    <!-- <option disabled value="Articles" data-taxonomy-terms="guides" data-text='<span class="bold">Articles</span>'>
                        <span class="mobile">Articles</span>
                    </option> -->
                    <option <?php if ($filter=='Infographics') { echo 'selected'; } ?> value="Infographics" data-taxonomy-terms="infographics"  data-text='<span class="bold">Infographics</span>'>
                        <span class="mobile">Infographics</span>
                    </option>
                    
                    <option <?php if ($filter=='Videos') { echo 'selected'; } ?> value="Videos" data-taxonomy-terms="videos" data-text='<span class="bold">Videos</span>'>
                        <span class="mobile">Videos</span>
                    </option>
                </select>
            </div>
            <div class="filter-right wl-filter">
				<a href="<?= !empty($_SESSION['prev_page']) ? $_SESSION['prev_page'] : home_url('/wholistic-thinking-fmg'); ?>" target="_self">	
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
            
        <div class="tile-row ajax-wrap wl-tiles">
            <div class="no-results">
                <h2>No results found</h2>
            </div>
            <?php
                if (!$filter || $filter == 'All') {
                    echo do_shortcode('[ajax_load_more container_type="div" post_type="whole_life_resources" posts_per_page="8" scroll="false" button_label="Load More"]');
                } else {
                    echo do_shortcode('[ajax_load_more container_type="div" post_type="whole_life_resources" posts_per_page="8" scroll="false" taxonomy="whole_life_categories" taxonomy_terms="'.strtolower($filter).'" taxonomy_operator="IN"  button_label="Load More"]');
                }
            ?>
        </div>
    </div>
    <!-- <div class="load-tiles">
        <a class="btn btn-blue" href="javascript:;">Load More</a>
    </div> -->
</section>

<?php get_footer(); ?>