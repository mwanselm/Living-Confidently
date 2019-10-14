<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/favicon_100118b.png">

    <!-- Plain Description -->
    <title><?php wp_title(); ?></title>
    <!-- CSS & fonts -->
    <?php $template = get_page_template_slug(); ?>
    <?php if((get_the_ID() != 2231  || $template != 'page-whole-life.php' || get_the_ID() != 4440) && get_the_ID() != 6225) : ?>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen" type="text/css">
    <?php endif; ?>
    <?php wp_head(); ?>
    
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/lc-style.css?ver=1.3.5" media="screen" type="text/css">
    
    <?php if(is_singular( array('quizzes')  )) : ?>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/c2c/main.css?ver=1.2" media="screen" type="text/css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/thewalk.css" media="screen" type="text/css">
          
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/personality-quiz.css" media="screen" type="text/css">
    <?php endif; ?>
    <?php if( get_the_ID() == 2231  || $template == 'page-whole-life.php' ||  $template =='page-whole-life-fmg.php' || get_the_ID() == 4440) : ?>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/c2c/main.css?ver=1.232" media="screen" type="text/css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/thewalk.css?ver=1.0" media="screen" type="text/css">
    <?php endif; ?>
	
	 <?php if( get_the_ID() == 2231  || $template == 'page-retirement-experience.php' || get_the_ID() == 4440) : ?>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/c2c/main.css?ver=1.1" media="screen" type="text/css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/thewalk.css?ver=1.0" media="screen" type="text/css">
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/retirement-experience.css?ver=1.1" media="screen" type="text/css">
    <?php endif; ?>

    <?php if ($template == 'page-my-retirement-reality.php' ||  $template =='page-my-retirement-reality-fmg.php') : ?>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/my-retirement-reality.css?ver=1.0" media="screen" type="text/css">
    <?php endif; ?>

    <?php if ($template == 'page-protect-your-paycheck.php' ||  $template =='page-protect-your-paycheck-fmg.php') : ?>
	
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/di-pyp/style-grd-di.css" media="screen" type="text/css">
    <?php endif; ?>
	
	
	<?php if ($template =='page-protect-your-paycheck-fmg.php' ||  $template =='page-my-retirement-reality-fmg.php' ||  $template =='page-whole-life-fmg.php' ||  $template =='page-disability-resources-fmg.php' ||  $template =='page-whole-life-resources-fmg.php' ||  $template =='page-retirement-resources-fmg.php') : ?>
	
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style-fmg.css" media="screen" type="text/css">
    <?php endif; ?>
	
    
    <?php if(is_singular( 'tools' ) && get_the_ID() != 4440) : ?>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/c2c/main.css" media="screen" type="text/css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/thewalk.css" media="screen" type="text/css">
          
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/personality-quiz.css" media="screen" type="text/css">
    <?php endif; ?>

    <?php if(get_the_ID() == 2010): ?>
        <link href="<?php echo site_url(); ?>/wp-content/plugins/mrw-quiz/css/styles.css" type="text/css" rel="stylesheet">
    <?php endif; ?>
    
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/find-a-rep.css" media="screen" type="text/css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/shortcodes.css" media="screen" type="text/css">
    <?php if( get_the_ID() == 10 || get_the_ID() == 1953 ) : ?>

        
    <?php endif; ?>
    
    <?php
    if ( is_404() ) { ?>
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/c2c/main.css" media="screen" type="text/css">
         <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/404.css" media="screen" type="text/css">
   
    <?php
   }
    ?>
	<?php if ($template == 'page-whole-perspective.php') : ?>

		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/liam-wp/style-grd-liam.css" media="screen" type="text/css">
	<?php endif; ?>
    
    <?php if ($template =='page-millenials.php') : ?>
      
      	<link rel="stylesheet" href="https://use.typekit.net/mpf8sch.css">
        <!-- replace with new typekit account -->

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        
      	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/millenials-styles.css">
        
        <link rel="stylesheet" href="https://use.typekit.net/jos8lrq.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/js/slick/slick.css" >
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/js/slick/slick-theme.css" >  
      
    <?php endif; ?>
    
    
    <?php if ($template =='page-podcast.php') : ?>
      
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/grd-podcast/css/podcast/grd-podcast.css?v=2.6" >  
      
    <?php endif; ?>

    
    
    <style>
    .modal-sharebtns {margin:0 0 20px 0;}
    #info_this {display:inline-block; float:left;}
    #info_this .atc_s {background:url(<?php echo get_bloginfo('template_directory'); ?>/img/quiz_share_black.png) no-repeat top left; height:40px!important; width:220px!important;    color: transparent;}
    #download_pdf {vertical-align:middle;}
    #download_pdf a {color: #000;font-family: 'brandon_grotesquebold', Arial, sans-serif;text-transform: uppercase;font-size: 14px;line-height: 1.42857143;}
    #download_pdf a:hover {text-decoration:none;}
    .addthis_button_expanded{
        display: none !important;
    }
    .video-article{
        padding-bottom: 50px;
    }
    .single-quizzes section{
        /*background-color: transparent !important;*/
    }
    button.alm-load-more-btn {
        background-color: #328abd !important;
        text-transform: uppercase !important;
    }
    button.alm-load-more-btn.done{
        display: none !important;
    }
    @media screen and (device-aspect-ratio: 40/71) {
      .home-hero{
          height: 450px;
      }
      .page-id-2231 section.hero,
      .page-template-page-whole-life section.hero{
        height: 535px;
      }
    }
    @media screen and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {
      .home-hero{
          height: 450px;
      }
      .page-id-2231 section.hero,
      .page-template-page-whole-life section.hero{
        height: 535px;
      }
    }
    @media only screen and (max-width: 768px){
        section.hero .left {
            -webkit-transform: translate(-50%, 0%);
        }
    }
    
    


    @media only screen and (max-width : 480px) {
      #info_this, #download_pdf {clear:both; float:left; display:block; margin:0 0 10px 0; line-height:42px;}
      .row{
        margin-left: auto !important;
        margin-right: auto !important; 
      }
    }
    </style>
    
    <!-- Put your fonts here -->
    <style>
    img{
        max-width: 100% !important;
        height: auto !important;
    }
    #info_share_this, #download_pdf{
        display: inline-block;
    }
    p.post-meta{
        font: 700 14px 'Brandon Groteque Bold', sans-serif;
        text-transform: uppercase;
    }
    .container.over{
        margin-top: 0 !important;
    }
    .page-id-2231 section.question.gray-blurb,
    .page-id-2231 section.results-icons,
    .page-template-page-whole-life section.results-icons,
    .page-template-page-whole-life section.question.gray-blurb{
        overflow: hidden;
    }
    .page-id-2231 section.americans{
        display: none;
    }
    @media screen and (-webkit-min-device-pixel-ratio:0) and (max-width: 500px) {
        .video video{
            -webkit-transform: none;
            transform: none;
        }
    }
    /*.modal{
        display: none;
    }*/

    @media only screen and (min-width: 769px){
        section.results-icons {
            height: 325px;
            padding-bottom: 80px;
        }
    }
    
    </style>

       <!-- Google Analytics -->
               <script>
               (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
               (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
               m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
               })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

               ga('create', 'UA-55725769-2', 'auto');
               ga('require', 'spGaPlugin', { endpoint: 'https://collectorprod.glic.com' });
               </script>
               <script async src="https://d1fc8wv8zag5ca.cloudfront.net/sp-ga-plugin/0.1.0/sp-ga-plugin.js"></script>
               <!-- End Google Analytics -->

               <!-- Load the JavaScript for Snowplow --> 
               <script type="text/javascript" async=1>
               ;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalSnowplowNamespace=p.GlobalSnowplowNamespace||[];
               p.GlobalSnowplowNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
               };p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[0];n.async=1;
               n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,"script","https://d1fc8wv8zag5ca.cloudfront.net/2.9.0/sp.js","guardian_collector"));
               </script>
               <!-- End of loading the JavaScript for Snowplow -->

               <!-- Configure what values to collect --> 
               <script type="text/javascript">
               guardian_collector("newTracker", "clojure", "collectorprod.glic.com", {
                 appId: "livingconfidently.com",
                 platform: "web",
                 cookieDomain: null,
                 discoverRootDomain: true,
                 cookieName: "_sp_",
                 encodeBase64: false,
                 respectDoNotTrack: false,
                 userFingerprint: true,
                 userFingerprintSeed: 123456789,
                 pageUnloadTimer: 0,
                 post: true,
                 bufferSize: 1,
                 maxPostBytes: 45000,
                 cookieLifetime: 86400 * 31,
                 stateStorageStrategy: "localStorage",
                 contexts: {
                   webPage: true,
                   performanceTiming: true,
                   gaCookies: true,
                   geolocation: false
                 }
               });
               guardian_collector('trackPageView');
               </script>

    <script>
        var wp_vars = {
            template_path: '<?= get_template_directory_uri(); ?>',
            files_path: '<?= get_template_directory_uri() . '/files/'; ?>',
            is_alt_my_retirement_reality_page: <?= is_page('my-retirement-my-reality') ? 'true' : 'false'; ?>,
            is_alt_protect_your_paycheck_page: <?= is_page('protect-my-paycheck') ? 'true' : 'false'; ?>
        };
    </script>

</head>
<?php
$id = get_the_ID();

if($id == 2187){
    $body_id = "personalityquiz-intro";
}
elseif($id == 2205){
    $body_id = 'walkone';
}

if($id ==2010){
    $body_args = ["page-template-page-visiontest-php"];
}

if($id ==4440){
    $body_args = ["page-template-page-whole-life"];
}

?>
<?php
    $terms = wp_get_post_terms($id, 'home-categories');
    $home_categories = array();
    foreach ($terms as $t) {
        $home_categories[] = $t->name;
    }

    $image_type = get_field('image_type', $id);
?>
<body id="<?php echo $body_id; ?>" <?php body_class($body_args); ?> data-home-category="<?= implode(', ', $home_categories) ?>" data-image-type="<?= $image_type; ?>">

    <!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
        <nav class="main_nav">
            <div class="container">
                <a class="logo" href="<?= site_url(); ?>">
                </a>
                <ul class="desktop-nav">
                    <li><a href="<?php echo site_url(); ?>/tools-and-resources/">Tools &amp; Resources</a></li>
                    <li><a href="<?php echo site_url(); ?>/research/">Research</a></li>
                    <li><a href="<?php echo site_url(); ?>/about/">ABOUT</a></li>
                    <!-- <li><a href="">FOLLOW US</a></li> -->
                </ul>
                <input class="menu-btn mobile" type="checkbox" id="menu-btn" />
                <label class="menu-icon mobile" for="menu-btn"><span class="navicon"></span></label>
                <ul class="menu mobile">
                    <li id="search-li">
                        <label for="lc-search-mobile"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.94 58.27"><defs><style>.search-icon{fill:#fff;}</style></defs><path id="Search_Icon" data-name="Search Icon" class="search-icon" d="M39.5,0C51.88,0,62,9.61,61.92,21.33S51.78,42.57,39.25,42.54C27,42.51,17,32.84,17.05,21.16S27.22,0,39.5,0ZM50.68,21.25c0-5.92-5-10.6-11.3-10.57A10.87,10.87,0,0,0,28.29,21.31c0,5.86,5.06,10.62,11.23,10.59s11.21-4.81,11.17-10.64h0Zm-35.35,15a22.85,22.85,0,0,0,7.71,7.61l-0.37.39L9.72,56.5a6,6,0,0,1-7,1.07,5.15,5.15,0,0,1-1.21-8.15c0.64-.68,1.34-1.31,2-2L14.85,36.67Z" transform="translate(0.02 0.01)"/></svg></label>
                        <!-- <form>
                            <input type="text" name="search" placeholder="" id="mobile-search">
                        </form> -->
                        <form action="/" method="get" class="search_form" id="search_form">
                            <input type="text" name="s" id="lc-search-mobile" />
                        </form>
                    </li>
                    <li><a href="/">HOME</a></li>
                    <li><a href="<?php echo site_url(); ?>/tools-and-resources/">Tools &amp; Resources</a></li>
                    <li><a href="<?php echo site_url(); ?>/research/">Research</a></li>
                    <li><a href="<?php echo site_url(); ?>/about/">ABOUT</a></li>
                    <li>
                        <ul class="nav-social">
                            <li class="fb">
                                <a href="https://www.facebook.com/guardianlife/" target="_blank">
                                    <span class="sr-only">Facebook</span>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/guardianlife" target="_blank">
                                    <span class="sr-only">Twitter</span>
                                </a>
                            </li>
                            <li class="medium">
                                <a href="https://medium.com/life-well-lived" target="_blank">
                                    <span class="sr-only">Medium</span>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="https://www.linkedin.com/company/the-guardian-life-insurance-company-of-america_164085?trk=company_logo" target="_blank">
                                    <span class="sr-only">LinkedIn</span>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="https://www.youtube.com/guardianlife" target="_blank">
                                    <span class="sr-only">Youtube</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="footer-links"><a href="https://www.guardianlife.com/privacy-policy" target="_blank">Privacy</a></li>
                    <li class="footer-links"><a href="https://www.guardianlife.com/disclosures" target="_blank">Disclamer</a></li>
                    <li class="footer-links"><a href="https://www.guardianlife.com/" target="_blank">Guardian Life</a></li>
                    <li class="disclaimer">&copy;2017 The Guardian Life Insurance Company of America, New York, NY all rights reserved. </li>
                </ul>
                <a class="search desktop" id="desktop_search" href="javascript:;"></a>
            </div>
        </nav>
        <div class="search_dropdown">
            <div class="container">
                
                <div class="input-expand">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.02 39.01"><defs><style>.search-svg{fill:#363740;}</style></defs><title>Search_Icon_gray</title><g id="Search_Icon" data-name="Search Icon"><g id="Search_Icon-2" data-name="Search Icon-2"><path class="search-svg" d="M38.23,34.47L30.4,26.65a16.8,16.8,0,1,0-3.75,3.75l7.83,7.83A2.66,2.66,0,0,0,38.23,34.47ZM26,26a13,13,0,1,1,.12-0.12Z" transform="translate(0.01 0.01)"/></g></g></svg>
                    <form action="/" method="get" class="search_form" id="search_form">
                        <label for="lc-search">Search in <?php echo home_url( '/' ); ?></label>
                        <input type="text" name="s" id="lc-search" value="<?php the_search_query(); ?>" onkeypress="this.style.width = ((this.value.length + 1) * 18) + 'px';" />
                        <input type="submit" value="SEARCH" class="btn btn-blue" />
                    </form>
                    <a href="javascript:;" id="close-search"></a>
                </div>
            </div>
        </div>
    </header>
	