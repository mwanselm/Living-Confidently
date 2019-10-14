<?php
	require('includes/financial-emotional-quiz.php');
	require('includes/personality-quiz.php');
	require('includes/the_walk.php');
	// require('includes/vision_test.php');
	// require('includes/research.php');

	function setup_session() {
		if (!session_id()) {
			session_start();
		}
	}
	add_action('init', 'setup_session', 1);

	function end_session() {
		session_destroy();
	}
	add_action('wp_logout', 'end_session');
	add_action('wp_login', 'end_session');

	function theme_assets(){
		//Styles
	    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1', 'all' );
	    
	    // wp_enqueue_style( 'lc-style', get_bloginfo('template_directory') . '/css/lc-style.css', array(), '1', 'all' );

	    //Scripts
	    wp_deregister_script( 'jquery' );
	    wp_enqueue_script( 'modernizr', get_bloginfo('template_directory') . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js');
	    wp_enqueue_script( 'jquery', get_bloginfo('template_directory') . '/js/jquery.min.js');
	}
	add_action( 'wp_enqueue_scripts', 'theme_assets');

	// Remove the WP Admin Bar
	add_filter('show_admin_bar', '__return_false');


	//SVG Support
	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');

	function custom_admin_head() {
	  $css = '';

	  $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';

	  echo '<style type="text/css">'.$css.'</style>';
	}
	add_action('admin_head', 'custom_admin_head');

	/* 
	   Debug preview with custom fields 
	*/ 

	add_filter('_wp_post_revision_fields', 'add_field_debug_preview');
	function add_field_debug_preview($fields){
	   $fields["debug_preview"] = "debug_preview";
	   return $fields;
	}

	add_action( 'edit_form_after_title', 'add_input_debug_preview' );
	function add_input_debug_preview() {
	   echo '<input type="hidden" name="debug_preview" value="debug_preview">';
	}

	//Return first image in post if no featured image is defined

	function catch_that_image() {
	  global $post, $posts;
	  $first_img = '';
	  ob_start();
	  ob_end_clean();
	  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	  $first_img = $matches[1][0];

	  if(empty($first_img)) {
	    $first_img = "http://thruue.com/wp-content/themes/Thruue_2015/images/blog-generic-placeholder.gif";
	  }
	  return $first_img;
	}

	function wpdocs_theme_setup() {
	    add_image_size( 'home-tile', 650, 510, true ); // (cropped)
	    add_image_size( 'home-tile-featured', 1321, 510, true ); // (cropped)
	    add_image_size( 'tools-tile', 516, 516, true ); // (cropped)
	    add_image_size( 'related', 476, 351, true ); // (cropped)
	}
	add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
	add_theme_support( 'post-thumbnails' ); 


	function theme_widgets_init() {

		register_sidebar( array(
			'name'          => 'Disclaimer',
			'id'            => 'disclaimers',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'theme_widgets_init' );


	function update_post_types() {
		$taxTerm = $_POST['tax_term'];
		$postTypes = array('infographics', 'post', 'podcasts', 'quizzes', 'videos', 'tools', 'calculators');
		$postCounts = array();

		foreach ($postTypes as $type){
			$postCounts[$type] = intval(empty($taxTerm));
		}



		$args = array(
			'post_type ' => array('infographics', 'post', 'podcasts', 'quizzes', 'videos', 'tools', 'calculators'),
			'tax_query' => array(
				array(
					'taxonomy' => 'home-categories',
					'field'    => 'slug',
					'terms'    => $taxTerm,
				),
			),
			'posts_per_page' => -1
		);

		$query = new WP_Query( $args );

		while ( $query->have_posts() ) {
			$query->the_post();
			$currentType = get_post_type();
			$postCounts[$currentType] = $postCounts[$currentType] + 1;
		}
		wp_reset_postdata();

		

		$response = $postCounts;
		die( json_encode($response) );
	}
	add_action('wp_ajax_update_post_types', 'update_post_types');
	add_action('wp_ajax_nopriv_update_post_types', 'update_post_types');

	function df_terms_clauses( $clauses, $taxonomy, $args ) {
		if ( isset( $args['post_type'] ) && ! empty( $args['post_type'] ) && $args['fields'] !== 'count' ) {
			global $wpdb;

			$post_types = array();

			if ( is_array( $args['post_type'] ) ) {
				foreach ( $args['post_type'] as $cpt ) {
					$post_types[] = "'" . $cpt . "'";
				}
			} else {
				$post_types[] = "'" . $args['post_type'] . "'";
			}

			if ( ! empty( $post_types ) ) {
				$clauses['fields'] = 'DISTINCT ' . str_replace( 'tt.*', 'tt.term_taxonomy_id, tt.taxonomy, tt.description, tt.parent', $clauses['fields'] ) . ', COUNT(p.post_type) AS count';
				$clauses['join'] .= ' LEFT JOIN ' . $wpdb->term_relationships . ' AS r ON r.term_taxonomy_id = tt.term_taxonomy_id LEFT JOIN ' . $wpdb->posts . ' AS p ON p.ID = r.object_id';
				$clauses['where'] .= ' AND (p.post_type IN (' . implode( ',', $post_types ) . ') OR p.post_type IS NULL)';
				$clauses['orderby'] = 'GROUP BY t.term_id ' . $clauses['orderby'];
			}
		}
		return $clauses;
	}

	add_filter( 'terms_clauses', 'df_terms_clauses', 10, 3 );

	function update_tax_list() {
		$postType = $_POST['post_type'];
		$postType = explode(",", $postType);
		$terms = '';

		$categories = get_terms('home-categories', array(
		 	'post_type' => $postType,
		 	'fields' => 'all'
		));
		foreach($categories as $term){
			$terms = $terms . $term->slug . ',';
		}
		$response = $terms . '*';
		die( json_encode($response) );
	}
	add_action('wp_ajax_update_tax_list', 'update_tax_list');
	add_action('wp_ajax_nopriv_update_tax_list', 'update_tax_list');

	function non_featured_one() {
		$taxTerm = $_POST['tax_term'];


		$args = array(
			'post_type ' => array('post', 'calculators', 'quizzes', 'infographics', 'videos', 'tools', 'podcasts'),
			'tax_query' => array(
				array(
					'taxonomy' => 'home-categories',
					'field'    => 'slug',
					'terms'    => $taxTerm,
				),
			),
			'posts_per_page' => 1,
			'meta_key'      => 'is_featured',
			'meta_value'    => '0',
			'offset' => 0,
			'ignore_custom_sort' => TRUE
		);

		$posts = new WP_Query( $args );
		// The Loop
		if ( $posts->have_posts() ) :
			while ( $posts->have_posts() ) : $posts->the_post();
				$id;
				$img = get_field('home_tile', $id);
				$thumb = $img['sizes'][ 'home-tile' ];
				$target = '';
				if(get_field('excerpt', $id)){
				   $content = get_field('excerpt', $id);
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
				$html = "<a href='" . $href . "' target='" . $target . "'><img src='" . $thumb . "'></a>";
				$html .= "<div class='tile-copy'><h3><a href='" . $href . "' target='" . $target ."'>" . get_the_title($id) . "</a></h3><p>" . wp_trim_words( $content, 25 ) . "<a href='".$href."'><svg width='20px' height='8px' id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 39.04 16.44'><defs><style>.cls-1{fill:#5a5a5f;}</style></defs><title>arrow_right</title><path id='G_Arrow_copy' data-name='G Arrow copy' class='cls-1' d='M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z' transform='translate(0 -0.02)'/></svg></a></p></div>";
			endwhile;
			/* Restore original Post Data */
			wp_reset_postdata();
		endif;

		$response = array(
			'html' => $html
		);
		die( json_encode($response) );
	}
	add_action('wp_ajax_non_featured_one', 'non_featured_one');
	add_action('wp_ajax_nopriv_non_featured_one', 'non_featured_one');


	function non_featured_two() {
		$taxTerm = $_POST['tax_term'];


		$args = array(
			'post_type ' => array('infographics', 'post', 'podcasts', 'quizzes', 'videos', 'tools', 'calculators'),
			'tax_query' => array(
				array(
					'taxonomy' => 'home-categories',
					'field'    => 'slug',
					'terms'    => $taxTerm,
				),
			),
			'posts_per_page' => 1,
			'meta_key'      => 'is_featured',
			'meta_value'    => '0',
			'offset' => 1,
			'ignore_custom_sort' => TRUE
		);

		$posts = new WP_Query( $args );
		// The Loop
		if ( $posts->have_posts() ) :
			while ( $posts->have_posts() ) : $posts->the_post();
				$id;
				$img = get_field('home_tile', $id);
				$thumb = $img['sizes'][ 'home-tile' ];
				$target = '';
				if(get_field('excerpt', $id)){
				   $content = get_field('excerpt', $id);
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
				$html = "<a href='" . $href . "' target='" . $target . "'><img src='" . $thumb . "'></a>";
				$html .= "<div class='tile-copy'><h3><a href='" . $href . "' target='" . $target ."'>" . get_the_title($id) . "</a></h3><p>" . wp_trim_words( $content, 25 ) . "<a href='".$href."'><svg width='20px' height='8px' id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 39.04 16.44'><defs><style>.cls-1{fill:#5a5a5f;}</style></defs><title>arrow_right</title><path id='G_Arrow_copy' data-name='G Arrow copy' class='cls-1' d='M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z' transform='translate(0 -0.02)'/></svg></a></p></div>";
			endwhile;
			/* Restore original Post Data */
			wp_reset_postdata();
		endif;

		$response = array(
			'html' => $html
		);
		die( json_encode($response) );
	}
	add_action('wp_ajax_non_featured_two', 'non_featured_two');
	add_action('wp_ajax_nopriv_non_featured_two', 'non_featured_two');


	function featured() {
		$taxTerm = $_POST['tax_term'];


		$args = array(
			'post_type ' => array('infographics', 'post', 'podcasts', 'quizzes', 'videos', 'tools', 'calculators'),
			'tax_query' => array(
				array(
					'taxonomy' => 'home-categories',
					'field'    => 'slug',
					'terms'    => $taxTerm,
				),
			),
			'posts_per_page' => 1,
			'meta_key'      => 'is_featured',
			'meta_value'    => '1',
			'ignore_custom_sort' => TRUE
		);

		$query = new WP_Query( $args );

		while ( $query->have_posts() ) {
			$query->the_post();
					$id = $post->ID;
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
					$html = "<a class='desktop-image' href='" . $href . "' target='" . $target . "'>" . get_the_post_thumbnail($id, 'home-tile-featured') . "</a>";
					$html .= "<a href='" . $href . "' class='mobile-img' target='" . $target . "'><img src='" . $thumb . "'></a>";
					$html .= "<div class='tile-copy'><h3><a href='" . $href . "' target='" . $target ."'>" . get_the_title($id) . "</a></h3><p>" . wp_trim_words( $content, 40 ) . "<a href='".$href."'><svg width='20px' height='8px' id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 39.04 16.44'><defs><style>.cls-1{fill:#5a5a5f;}</style></defs><title>arrow_right</title><path id='G_Arrow_copy' data-name='G Arrow copy' class='cls-1' d='M29.41,0L27.1,2.28l5.18,4.47H0v3.1H32.22l-5.11,4.32,2.29,2.29L39,8.31Z' transform='translate(0 -0.02)'/></svg></a></p></div>";
		}

		/*foreach ($posts as $post): setup_postdata( $post );
			
		endforeach;
		wp_reset_postdata();*/

		$response = array(
			'html' => $html,
			'post' => $query->posts,
			'args' => $args
		);
		die( json_encode($response) );
	}
	add_action('wp_ajax_featured', 'featured');
	add_action('wp_ajax_nopriv_featured', 'featured');



	/* Ajax Load More - Retirement Resources */
	function alm_retirement_resources_query($args) {
		$offset = $args['offset'];
		$paged = $args['paged'];
		$posts_per_page = $args['posts_per_page'];

		// Tell pre_get_posts() that this query is special and reset previous args
		$args = array();
		$args['post_type'] = array( 'post', 'calculators', 'infographics', 'videos', 'tools', 'podcasts', 'quizzes', 'retirement_resource' );
		$args['retirement_resources'] = TRUE;
		$args['offset'] = $offset;
		$args['paged'] = $paged;
		$args['posts_per_page'] = $posts_per_page;

		return $args;
	}
	add_filter('alm_query_args_retirement_resources', 'alm_retirement_resources_query', 10, 2);

	function alm_disability_resources_query($args) {
		$offset = $args['offset'];
		$paged = $args['paged'];
		$posts_per_page = $args['posts_per_page'];

		// Tell pre_get_posts() that this query is special and reset previous args
		$args = array();
		$args['post_type'] = array( 'post', 'calculators', 'infographics', 'videos', 'tools', 'podcasts', 'quizzes', 'disability_resource' );
		$args['disability_resources'] = TRUE;
		$args['offset'] = $offset;
		$args['paged'] = $paged;
		$args['posts_per_page'] = $posts_per_page;

		return $args;
	}
	add_filter('alm_query_args_disability_resources', 'alm_disability_resources_query', 10, 2);

	function get_specific_resource_posts($type) {
		$terms = isset($_GET['taxonomy_terms']) ? $_GET['taxonomy_terms'] : '';
		$q1_post_type = '';
		$q1_tax = '';
		$q2_show_key = '';

		switch ($type) {
		 	case 'retirement_resources':
		 		$q1_post_type = 'retirement_resource';
		 		$q1_tax = 'retirement_category';
		 		$q2_show_key = 'show_on_retirement_resources';
		 		break;
			case 'disability_resources':
				$q1_post_type = 'disability_resource';
				$q1_tax = 'disability_category';
				$q2_show_key = 'show_on_disability_resources';
				break;
		} 

		// Query Retirement Resources
		$tax_query = array();
		if (!empty($terms)) {
			$tax_query = array(
				'relation' => 'AND',
				array(
					'taxonomy' => $q1_tax,
					'field' => 'slug',
					'terms' => $terms
				)
			);
		}
		$query1 = get_posts(array(
			'post_type' => $q1_post_type,
			'posts_per_page' => -1,
			'tax_query' => $tax_query
		));

		// Query all other resources
		$post_types = array(
			'post',
			'calculators',
			'infographics',
			'videos',
			'tools',
			'podcasts',
			'quizzes'
		);
		if ($terms == 'blogs-articles') {
			$terms = 'post';
		}
		if (!empty($terms)) {
			$post_types = array_values(array_intersect($post_types, array($terms)));
			if ($terms == 'guides') {
				$post_types = array( '-1' );
			}
		}
		$query2 = get_posts(array(
			'post_type' => $post_types,
			'posts_per_page' => -1,
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key' => $q2_show_key,
					'value' => '1',
					'compare' => '=='
				)
			)
		));

		$queried_posts = array_merge( $query1, $query2 );
		$data = [];
		if (count($queried_posts)) {
			foreach ($queried_posts as $qp) {
				$data[] = $qp->ID;
			}
		} else {
			$data = array(-1); // Impossible to match against
		}

		//var_dump($data);
		
		return $data;
	}

	function filter_get_posts($query) {
		// Only run this on the ALM Retirement Resources queries
		if (!empty($query->query['retirement_resources'])) {	
			$query->set( 'post__in', get_specific_resource_posts('retirement_resources') );
		} else if (!empty($query->query['disability_resources'])) {
			$query->set( 'post__in', get_specific_resource_posts('disability_resources') );
		}
	}  
	add_action( 'pre_get_posts', 'filter_get_posts', 1, 10 );

  
  
  	//custom RSS feed - Andy Milk - 04.16.18
  
  
  	add_action('init', 'grapevineRSS');
  	function grapevineRSS(){
		add_feed('grapevine', 'grapevineRSSFunc');
  	}
  
  	function grapevineRSSFunc(){
		get_template_part('rss', 'grapevine');
  	}
    
  	add_action('init', 'grapevine2RSS');
  	function grapevine2RSS(){
		add_feed('grapevine2', 'grapevine2RSSFunc');
  	}
  
  	function grapevine2RSSFunc(){
		get_template_part('rss', 'grapevine2');
  	}
    

  	// Custom Short Codes
  	function twelve_steps_e_book_shortcode_handler($atts, $content) {
  		$a = shortcode_atts( array(
        	'download_button_image' => get_template_directory_uri() . '/img/e-book-download-button.svg',
        	'view_button_image' => get_template_directory_uri() . '/img/e-book-view-button.svg',
        	'download_button_url_desktop' => '#',
        	'view_button_url_desktop' => '#',
        	'download_button_url_mobile' => '#',
        	'view_button_url_mobile' => '#',
        	'open_in_new_window' => 'yes'
    	), $atts );
    	$open_in_new_window = ($a['open_in_new_window'] === 'yes' || $a['open_in_new_window'] === 'true');

  		ob_start();
  		?>
		<div class="twelve_steps_e_book_shortcode">
			<a href="<?= $a['download_button_url_desktop']; ?>" <?php if ($open_in_new_window) { echo 'target="_blank"'; } ?> class="download-button desktop">
				<img src="<?= $a['download_button_image']; ?>" alt="Download e-Book">
			</a>
			<a href="<?= $a['view_button_url_desktop']; ?>" <?php if ($open_in_new_window) { echo 'target="_blank"'; } ?> class="view-button desktop">
				<img src="<?= $a['view_button_image']; ?>" alt="View e-Book">
			</a>
			<a href="<?= $a['download_button_url_mobile']; ?>" <?php if ($open_in_new_window) { echo 'target="_blank"'; } ?> class="download-button mobile">
				<img src="<?= $a['download_button_image']; ?>" alt="Download e-Book">
			</a>
			<a href="<?= $a['view_button_url_mobile']; ?>" <?php if ($open_in_new_window) { echo 'target="_blank"'; } ?> class="view-button mobile">
				<img src="<?= $a['view_button_image']; ?>" alt="View e-Book">
			</a>
		</div><!-- end of .twelve_steps_e_book_shortcode -->
  		<?php

  		return ob_get_clean();
  	}
  	add_shortcode('twelve_steps_e_book', 'twelve_steps_e_book_shortcode_handler');
  
?>