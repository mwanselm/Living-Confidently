<?php
/**
 * Template Name: Custom RSS Template - Feedname
 */

// Tell pre_get_posts() that this query is special and reset previous args
$args = array();
$args['posts_per_page'] = 1000;

// $args['post_type'] = array( 'post', 'calculators', 'infographics', 'videos', 'tools', 'podcasts', 'quizzes', 'retirement_resource' );
// $args['retirement_resources'] = TRUE;
$args['orderby'] = "date";
$args['order'] = "desc";
$args['post_type'] = array( 'post', 'page', 'calculators', 'infographics', 'videos', 'tools', 'podcasts', 'quizzes', 'retirement_resource', 'disability_resource', 'whole_life_resources');
//, 'sd_podcasts'
// $query = new WP_Query( $args );
// echo $query->request;
$posts = query_posts( $args );


header('Content-Type: '.feed_content_type('rss-http').'; charset='.get_option('blog_charset'), true);
echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>';
?>
<rss version="2.0"
        xmlns:content="http://purl.org/rss/1.0/modules/content/"
        xmlns:wfw="http://wellformedweb.org/CommentAPI/"
        xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:atom="http://www.w3.org/2005/Atom"
        xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
        xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
        <?php do_action('rss2_ns'); ?>>
<channel>
        <title><?php bloginfo_rss('name'); ?> - Feed</title>
        <atom:link href="<?php self_link(); ?>" rel="self" type="application/rss+xml" />
        <link><?php bloginfo_rss('url') ?></link>
        <description><?php bloginfo_rss('description') ?></description>
        <lastBuildDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_lastpostmodified('GMT'), false); ?></lastBuildDate>
        <sy:updatePeriod><?php echo apply_filters( 'rss_update_period', 'hourly' ); ?></sy:updatePeriod>
        <sy:updateFrequency><?php echo apply_filters( 'rss_update_frequency', '1' ); ?></sy:updateFrequency>
        <?php do_action('rss2_head'); ?>
        <?php while(have_posts()) : the_post(); 
          
          $excerpt = "";
          $image = "";
          if(get_field('excerpt')){
             $excerpt = get_field('excerpt');
          }
          $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
          $show_in_feed = true;
            if (get_field('hide_from_rss_feed',$post->ID)){
              $show_in_feed = false;
            }
            if(get_post_type() == 'sd_podcasts'){
              $url = get_site_url() . "/podcast#episode" . get_field('episode_number');
            }else{
              $url = get_permalink();
            }
              
          
          if ($post->ID != 4966 && $post->ID != 5140 && $show_in_feed == true){
          ?>
                <item>
                        <title><?php echo str_replace("&bull;","",get_the_title()); ?></title>
                        <link><?php echo $url; ?></link>
                        <pubDate><?php echo mysql2date('D, d M Y H:i:s +0000', get_post_time('Y-m-d H:i:s', true), false); ?></pubDate>
                        <enclosure url="<?php echo $image;?>" type="image/jpeg" />
                        <guid isPermaLink="false"><?php the_guid(); ?></guid>
                </item>
        <?php
      }
         endwhile; ?>
</channel>
</rss>
