<?php
/*
*  Template Name: Podcast Page
*/
?>

<?php  get_header();  ?>


<div id="grd-podcast">
	<div class="article-wrapper">
	
		<section class="podcast-hero">
      
      <?php
      
        $per_page = 10;
        
        global $wp_query, $paged;

        if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } else if ( get_query_var('page') ) {
            $paged = get_query_var('page');
        } else{
            $paged = 1;
        }
      

        wp_reset_query();
    
        $args4 = array(
            'post_type' => 'sd_podcasts',
            'posts_per_page' => -1
        );
        // the query
        $wp_query = new WP_Query( $args4 );
        $all_episodes = array();

         if ( $wp_query->have_posts() ) : ?>

            <!-- pagination here -->
            <script>all_episodes = [];</script>
            <!-- the loop -->
            <?php 
            $podcast_count = 1;
            
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
              
              
              $page_number = ceil($podcast_count / $per_page);
              $podcast_count++;
              $all_episodes[intval(get_field('episode_number'))] = $page_number;
              ?>
              <script>all_episodes[<?php echo intval(get_field('episode_number'))?>] = <?php echo $page_number?>;</script>
              <?php 
            endwhile;
          endif;

        ?>
        
        
        <script>
            current_page = <?php echo $paged;?>;
            if (window.location.hash != ""){
              episode_number = window.location.hash.substring(window.location.hash.indexOf("episode")+7);
              episode_page = all_episodes[episode_number];
              if (current_page != episode_page && episode_number !== undefined){
                window.location.href = "/podcast/page/" + episode_page + "/#episode" + episode_number;
              }
            }
        </script>
            
        
      
      <?php

      $args1 = array(
          'post_type' => 'sd_podcasts',
          'posts_per_page' => -1,
    			'meta_key'      => 'hero_cta',
    			'meta_value'    => '1'
      );
      // the query
      $the_query = new WP_Query( $args1 );

       if ( $the_query->have_posts() ) : ?>

          <!-- pagination here -->

          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
          	$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            $title = get_the_title();
            $description = str_replace("<p>", "<span>", get_field('description'));
            $description = str_replace("</p>", "</span>", $description);
            
            $episode_number = get_field('episode_number');
            
            $prepend_link = "";
            if ($all_episodes[$episode_number] != $paged){
              $prepend_link = "/podcast/page/" . $all_episodes[$episode_number] . "/";
            }
            
            
          ?>
          
          
          
			<div class="podcast-hero-content row middle-xs">
				<div id="std-logo" class="col-md-4">
					<svg width="245px" height="318px" id="babb409d-5186-469b-9369-f81109546d41" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 244.84 317.55"><defs><mask id="0bc77c51-8adf-456f-a9f8-ff23230841ee" x="0" y="0" width="244.84" height="317.55" maskUnits="userSpaceOnUse"><g transform="translate(0 -0.45)"><g id="b1708986-3235-4043-b7b3-69c7a49a988e" data-name="mask-2"><polygon id="800ec52e-2649-469a-b21a-c30d3cea9d41" data-name="path-1" points="0 0.45 244.84 0.45 244.84 318 0 318 0 0.45" fill="#fff"/></g></g></mask><mask id="d105e454-ccfc-400d-9307-b7bbba0281d1" x="0" y="0" width="244.84" height="317.55" maskUnits="userSpaceOnUse"><g transform="translate(0 -0.45)"><g id="d6da8f8c-7a80-4f1c-980b-92ee9aae5142" data-name="mask-4"><polygon id="a74b370b-f886-4c49-9a48-e9335095785e" data-name="path-3" points="0 318 244.84 318 244.84 0.45 0 0.45 0 318" fill="#fff"/></g></g></mask></defs><title>std-logo-web</title><g id="361dff6b-5193-4969-b01e-e1729e952173" data-name="Welcome"><g id="4e96304a-6b01-4207-aa2f-e146b658bbfb" data-name="Podcast-Page-Ver-2-/-Expanded-Episode-Description"><g id="3e8adcd3-515e-4407-af7b-5487a26c9309" data-name="Group-47"><g id="a643ea2c-e4cd-4827-9065-1ce2d331d12d" data-name="Group-3"><g mask="url(#0bc77c51-8adf-456f-a9f8-ff23230841ee)"><path id="66e3ddcf-bb37-41f6-b875-7c95cd8fb73f" data-name="Fill-1" d="M244.84,195.63V22.14H213.17L206.61.45H38.14L31.58,22.14H0V195.63a122.42,122.42,0,0,0,244.84,0" transform="translate(0 -0.45)" fill="#383934"/></g></g><g id="ea80b8e1-9181-4545-8b01-352143684132" data-name="Group-46"><path id="a5f1c17a-49ad-4695-b395-ead768010687" data-name="Fill-4" d="M236,193V32.07H206.6L200.52,12H44.24L38.16,32.07H8.87V193A113.55,113.55,0,0,0,236,193" transform="translate(0 -0.45)" fill="#fefefd"/><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="2de0e9f9-c915-41f9-9b59-ce68dd851c2b" data-name="Fill-6" points="17.62 156.41 227.22 156.41 227.22 129.62 17.62 129.62 17.62 156.41" fill="#f1c291"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="ef3ca8c6-751c-4b1e-8322-8cdd47f21f33" data-name="Fill-8" points="17.62 182.79 227.22 182.79 227.22 156 17.62 156 17.62 182.79" fill="#edb57b"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="bd796773-81e8-4dd3-868c-7c06938a50be" data-name="Fill-9" points="17.62 208.93 227.22 208.93 227.22 182.13 17.62 182.13 17.62 208.93" fill="#e29144"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="cab4b82e-a310-46e0-8f3e-8ac9a0c1c5df" data-name="Fill-10" points="227.22 37.77 200.11 37.77 194.5 19.2 50.27 19.2 44.66 37.77 17.62 37.77 17.62 129.61 227.22 129.61 227.22 37.77" fill="#383934"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="39551a88-90d6-4e44-8df4-34e6959dbb27" data-name="Fill-11" d="M56.9,67a8.41,8.41,0,0,1,2.7,1.88l-2.51,2.51a4.3,4.3,0,0,0-3.51-1.51c-1.51,0-2.47.36-2.89,1.07a1.46,1.46,0,0,0,0,1.82,5,5,0,0,0,2.89,1.12,9.37,9.37,0,0,1,4.33,1.57,4.72,4.72,0,0,1,1.94,4.2,4.81,4.81,0,0,1-2.07,3.89,7.61,7.61,0,0,1-4.84,1.63,11.18,11.18,0,0,1-4.38-.75,9.35,9.35,0,0,1-3-2L48.06,80a6,6,0,0,0,4.26,1.75c1.68,0,2.72-.35,3.13-1.06a2,2,0,0,0,0-2.14C55,77.8,54,77.36,52.32,77.2a10.26,10.26,0,0,1-4.14-1.38,4.18,4.18,0,0,1-1.88-3.89,4.67,4.67,0,0,1,2.14-4,7.52,7.52,0,0,1,4.4-1.51A10.42,10.42,0,0,1,56.9,67" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="14ad1a2f-9033-450f-b88e-549daff630d2" data-name="Fill-12" points="78.58 65.96 78.58 69.47 72.3 69.47 72.3 84.77 68.54 84.77 68.54 69.47 62.26 69.47 62.26 65.96 78.58 65.96" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="5cf8b221-af40-4b50-9c58-d438b314a1b5" data-name="Fill-13" d="M89.89,71.43,87,78.58h5.65ZM80.38,85.22l7.53-18.81h3.77l7.51,18.8h-4l-1.13-2.88H85.53L84.4,85.22Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="3b585b81-add3-4eb0-b34a-aa2a36f6df87" data-name="Fill-14" points="102 84.77 102 65.96 103.26 65.96 115.05 77.75 115.05 65.96 118.82 65.96 118.82 84.77 117.44 84.77 105.77 73.11 105.77 84.77 102 84.77" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="467a2f87-ce02-4166-94ef-a4095dbc2e6b" data-name="Fill-15" d="M130,81.47c3.34,0,5-1.89,5-5.65s-1.68-5.65-5-5.65h-3.48v11.3Zm-7.25,3.75V66.4H130q8.79,0,8.79,9.42T130,85.22Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="f2bdc3b4-d807-44e1-a70d-751a0f3a3b15" data-name="Fill-16" d="M151.32,71.43l-2.86,7.15h5.64Zm-9.51,13.79,7.53-18.81h3.76l7.52,18.8h-4l-1.12-2.88H147l-1.13,2.88Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="fd5fe507-5f84-42a0-bd2f-aa8e5b77d70e" data-name="Fill-17" d="M167.19,73.93h5.27c1.52,0,2.29-.71,2.34-2.07S174,70,172.5,69.93h-5.31ZM174.76,77l4.69,8.2h-4.31l-4.51-7.77h-3.44v7.77h-3.76V66.41h8.21q6.59,0,6.58,5.42Q178.22,75.91,174.76,77Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="65922981-bf05-445b-8fe2-e12557272466" data-name="Fill-18" d="M188.66,81.47c3.34,0,5-1.89,5-5.65s-1.68-5.65-5-5.65h-3.49v11.3Zm-7.25,3.75V66.4h7.25q8.79,0,8.79,9.42t-8.79,9.4Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="f6aa3d59-9fc3-44e8-bbeb-5010e4c0dc46" data-name="Fill-19" d="M46.27,107.16q5,0,5-5.65t-5-5.65H42.78v11.3ZM39,110.91V92.09h7.25q8.77,0,8.78,9.42t-8.78,9.4Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="b06d1f35-307b-4b79-a437-82dcd5ad5677" data-name="Fill-20" points="59.04 110.46 59.04 91.66 72.87 91.65 72.87 95.16 62.81 95.16 62.81 99.17 70.35 99.17 70.35 102.67 62.81 102.67 62.81 106.95 72.85 106.95 72.85 110.46 59.04 110.46" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="dfcb3995-839b-41e2-b177-aee8691cf5b5" data-name="Fill-21" points="79.52 91.65 84.87 105.43 90.31 91.65 94.33 91.65 86.81 110.46 83.05 110.46 75.51 91.65 79.52 91.65" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="b8148565-363b-4048-8472-9b7c0a868c0f" data-name="Fill-22" points="97.45 110.46 101.21 110.46 101.21 91.63 97.45 91.63 97.45 110.46" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="e05cafba-2ee0-47f3-8c4b-94da7da1905f" data-name="Fill-23" d="M113.5,97.12l-2.86,7.15h5.65ZM104,110.91l7.53-18.81h3.77l7.51,18.8h-4L117.67,108h-8.53L108,110.91Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="584add55-66b9-4509-9b1c-aff09eb17d8d" data-name="Fill-24" points="140.97 91.65 140.97 95.16 134.7 95.16 134.7 110.46 130.93 110.46 130.93 95.16 124.66 95.16 124.66 91.65 140.97 91.65" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="4953456a-0bcf-4d49-926a-a12470c61c54" data-name="Fill-25" points="143.77 110.46 147.52 110.46 147.52 91.63 143.77 91.63 143.77 110.46" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="ea26ed15-c549-4064-bc99-0201f3cb62c2" data-name="Fill-26" d="M159.77,107.4a5.3,5.3,0,0,0,4.07-1.69,6.45,6.45,0,0,0,0-8.41,5.77,5.77,0,0,0-8.16,0,6.42,6.42,0,0,0,0,8.41,5.32,5.32,0,0,0,4.09,1.69m-6.73.81a9.71,9.71,0,1,1,6.72,2.7,9.1,9.1,0,0,1-6.72-2.7" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="2f8b80bb-7186-4eb0-85c2-b490a00844f9" data-name="Fill-27" points="171.97 110.46 171.97 91.65 173.22 91.65 185.02 103.44 185.02 91.65 188.78 91.65 188.78 110.46 187.4 110.46 175.73 98.8 175.73 110.46 171.97 110.46" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="e0bbad50-9447-47ea-a864-1682e09bcb7c" data-name="Fill-28" d="M202.87,92.73a8.41,8.41,0,0,1,2.7,1.88l-2.51,2.51a4.3,4.3,0,0,0-3.51-1.51c-1.51,0-2.47.36-2.89,1.07a1.46,1.46,0,0,0,0,1.82,5,5,0,0,0,2.89,1.12,9.37,9.37,0,0,1,4.33,1.57,4.72,4.72,0,0,1,1.94,4.2,4.81,4.81,0,0,1-2.07,3.89,7.61,7.61,0,0,1-4.84,1.63,11.18,11.18,0,0,1-4.38-.75,9.35,9.35,0,0,1-3-2l2.51-2.5a6,6,0,0,0,4.26,1.75c1.68,0,2.72-.35,3.13-1.06a2,2,0,0,0,0-2.14c-.41-.71-1.45-1.15-3.13-1.31a10.26,10.26,0,0,1-4.14-1.38,4.18,4.18,0,0,1-1.88-3.89,4.67,4.67,0,0,1,2.14-4,7.52,7.52,0,0,1,4.4-1.51,10.42,10.42,0,0,1,4.06.63" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="895ceb1e-518a-4e1e-b781-87b82882e2b7" data-name="Fill-29" d="M122.42,298C174.86,298,218.3,262.9,226,217.1H18.84C26.54,262.9,70,298,122.42,298" transform="translate(0 -0.45)" fill="#383934"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="1dafd044-f29b-4319-abca-f6960d4cb88c" data-name="Fill-30" d="M167.19,35.12V47.76A.24.24,0,0,1,167,48H154.3a.24.24,0,0,1-.24-.24V35.12a.24.24,0,0,1,.24-.24H167a.24.24,0,0,1,.24.24" transform="translate(0 -0.45)" fill="#fefefd"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="e8a618a1-9980-4640-937b-4e4bbba2ea1b" data-name="Fill-31" d="M128.23,41.44a7.11,7.11,0,1,1,7.1,7.1,7.1,7.1,0,0,1-7.1-7.1" transform="translate(0 -0.45)" fill="#fefefd"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="7206798f-3e59-4fb6-ab68-be6c31caad9a" data-name="Fill-32" d="M77.65,41.44a7.11,7.11,0,1,1,7.11,7.1,7.1,7.1,0,0,1-7.11-7.1" transform="translate(0 -0.45)" fill="#fefefd"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="6fdc2892-3eef-40e5-9435-cdec35329263" data-name="Fill-33" d="M102.94,41.44a7.11,7.11,0,1,1,7.11,7.1,7.1,7.1,0,0,1-7.11-7.1" transform="translate(0 -0.45)" fill="#fefefd"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="f300f0d8-0ce4-4397-8190-7cd951a1bca9" data-name="Fill-34" d="M67.25,246.15l-1.84,4.61h3.64Zm-6.14,8.9L66,242.91H68.4l4.85,12.14H70.67l-.73-1.86H64.43l-.72,1.86Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="c3a5f3fb-3079-412c-944c-b813305235ea" data-name="Fill-35" points="84.98 242.46 84.98 244.73 80.93 244.73 80.93 254.6 78.5 254.6 78.5 244.73 74.45 244.73 74.45 242.46 84.98 242.46" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="0bf41e13-b515-42d2-9893-2c6f3679ef93" data-name="Fill-36" points="89.24 242.46 89.24 252.34 95.72 252.34 95.72 254.6 86.81 254.6 86.81 242.46 89.24 242.46" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="bee30f97-2fe2-438d-a39d-157b62a9d3c6" data-name="Fill-37" d="M103.22,246.15l-1.85,4.61H105Zm-6.14,8.9,4.86-12.14h2.42l4.86,12.14h-2.59l-.73-1.86h-5.5l-.73,1.86Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="6f88589e-0cc7-447c-85fa-bc759e0c7a4e" data-name="Fill-38" points="111.03 254.6 111.03 242.46 111.84 242.46 119.45 250.07 119.45 242.46 121.88 242.46 121.88 254.6 120.99 254.6 113.46 247.07 113.46 254.6 111.03 254.6" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><polygon id="d04b8816-4dca-4989-98d4-c2ed6c5a8136" data-name="Fill-39" points="134.31 242.46 134.31 244.73 130.26 244.73 130.26 254.6 127.83 254.6 127.83 244.73 123.78 244.73 123.78 242.46 134.31 242.46" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="81f33e6e-058f-47db-bd16-a3f4f75c727d" data-name="Fill-40" d="M141.62,246.15l-1.85,4.61h3.64Zm-6.14,8.9,4.86-12.14h2.43l4.85,12.14H145l-.73-1.86h-5.5l-.73,1.86Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="49fb0da7-adf0-4ed8-9941-7ac865d28429" data-name="Fill-41" d="M150.56,255.05h-.09a1.17,1.17,0,0,1-.89-.32,1.07,1.07,0,0,1-.33-.81,1.1,1.1,0,0,1,.33-.81,1.15,1.15,0,0,1,.87-.33,1.22,1.22,0,0,1,.91.33,1.13,1.13,0,0,1,.32.81V254a2.85,2.85,0,0,1-1.62,2.77l-.4-.72a1.52,1.52,0,0,0,.9-1" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="6a07dd40-3036-48db-9640-05c9476f475b" data-name="Fill-42" d="M161,253.31a6.08,6.08,0,0,1,4.32-10.4,6.57,6.57,0,0,1,4.46,1.62l-1.62,1.77a4.52,4.52,0,0,0-2.84-1,3.62,3.62,0,0,0-2.64,1,3.57,3.57,0,0,0-1,2.59,3.69,3.69,0,0,0,1,2.69,3.61,3.61,0,0,0,2.64,1,3.4,3.4,0,0,0,2-.52V250h-1.62v-2.27h4.05v5.67a6.54,6.54,0,0,1-4.46,1.61,5.87,5.87,0,0,1-4.32-1.74" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="91462427-2ce9-4f9c-93a7-5de2af43bd9d" data-name="Fill-43" d="M177.72,246.15l-1.84,4.61h3.64Zm-6.13,8.9,4.86-12.14h2.42l4.86,12.14h-2.59l-.73-1.86h-5.5l-.73,1.86Z" transform="translate(0 -0.45)" fill="#fafafa"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="75da99f6-7d71-446d-8850-e28a2150d3c1" data-name="Fill-44" d="M186.36,192.38l-.31-.22c-5-3.75-11.91-12.75-19.24-22.29-6.46-8.39-13.13-17.05-19.93-24.23v0l-.73-.77-4.54-4.71v.28c-7.36-6.73-13.55-9.91-19.19-9.91-5.87,0-12.35,3.46-20.12,10.77V141l-4.56,4.84-.71.76v0c-6.49,7-12.85,15.24-19,23.24-7,9-13.51,17.56-18.42,21.63l0,0c-.28.23-.55.45-.82.65h0c-13.87,10.39-41,11.72-41.26,11.73l.12,5.28h209.6l.11-5.28c-.26,0-27-1.31-41-11.53" transform="translate(0 -0.45)" fill="#fff"/></g><g mask="url(#d105e454-ccfc-400d-9307-b7bbba0281d1)"><path id="5959145b-8011-47c1-976c-dfbedfe6f1b5" data-name="Fill-45" d="M187.44,203.91v-4.6a62,62,0,0,0,10.72,4.6Zm-5.28,0H146.88V153.47c5.32,6.07,10.6,12.93,15.75,19.62,7.54,9.81,14.11,18.34,19.53,22.72Zm-40.55,0H102.3v-55.2c8.33-8.7,14.92-12.93,20.12-12.93,5,0,11.29,3.92,19.19,12Zm-44.58,0H63.91v-9.15c5.18-4.61,11.29-12.56,18.31-21.68C87.05,166.8,92,160.35,97,154.54Zm-38.39,0h-12a59.83,59.83,0,0,0,12-5.31Zm127.72-11.53-.31-.22c-5-3.75-11.91-12.75-19.24-22.29-6.46-8.39-13.13-17.05-19.93-24.23v0l-.73-.77-4.54-4.71v.28c-7.36-6.73-13.55-9.91-19.19-9.91-5.87,0-12.35,3.46-20.12,10.77V141l-4.56,4.84-.71.76v0c-6.49,7-12.85,15.24-19,23.24-7,9-13.51,17.56-18.42,21.63l0,0c-.28.23-.55.45-.82.65h0c-13.87,10.4-41,11.73-41.26,11.74l.12,5.28h209.6l.11-5.28C227.07,203.9,200.34,202.6,186.36,192.38Z" transform="translate(0 -0.45)" fill="#383934"/></g></g></g></g></g></svg>
				</div>
				<div class="pod-hero-copy col-md-8">
					<p>Join us for a look at money, mind and meaning, all through a psychological lens. Psychologist and <em>New York Times</em> bestselling author Dr. Daniel Crosby interviews experts in everything from finance to literature to wellness.</p>
					<div class="row middle-xs">
						<a href="<?php echo $prepend_link;?>#episode<?php echo $episode_number;?>" data-episode-number="<?php echo $episode_number;?>" class="hero_play scrollLink btn btn-blue col-md-4 col-xs-12 episode<?php echo $episode_number;?>">Play Episode</a>
						<p class="podcast-hero-lg col-md-8 col-xs-12"><?php echo $title;?></p>
					</div>
				</div>
			</div>
        
        <?php 
      endwhile;
     endif;
       ?>
      
		</section>
		
		<section class="article article-body">
			<div class="article-container">
				<section class="podcast featured-pod">
          <div id="app-btns" class="row center-xs">
            <div class="app-btn col-xs-6 col-sm-4">
              <a href="https://soundcloud.com/daniel-crosby-994064665" id="app-soundcloud" target="_blank"></a>
            </div>
            <div class="app-btn col-xs-6 col-sm-4">
              <a href="https://itunes.apple.com/gb/podcast/standard-deviations/id1241946146?mt=2" id="app-apple" target="_blank"></a>
            </div>
            <div class="app-btn col-xs-6 col-sm-4">
              <a href="https://www.stitcher.com/podcast/daniel-crosby/standard-deviations" id="app-stitcher" target="_blank"></a>
            </div>

          </div>
					<h2>FEATURED EPISODES</h2>
	
					<div class="row">
						
            
            <?php
            wp_reset_query();
            $args2 = array(
                'post_type' => 'sd_podcasts',
                'posts_per_page' => -1,
          			'meta_key'      => 'featured_episode',
          			'meta_value'    => '1'
            );
            // the query
            $the_query = new WP_Query( $args2 );

             if ( $the_query->have_posts() ) : ?>
	
                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                	$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                  $title = get_the_title();
                  $description = str_replace("<p>", "<span>", get_field('description'));
                  $description = str_replace("</p>", "</span>", $description);
                  $episode_number = get_field('episode_number');
                  $pub_date = get_the_date('F j, Y');
                  
                  $prepend_link = "";
                  if ($all_episodes[$episode_number] != $paged){
                    $prepend_link = "/podcast/page/" . $all_episodes[$episode_number] . "/";
                  }
                ?>
                
						<div class="col-xs-6 col-sm-3 pod-ep">
								<a href="<?php echo $prepend_link;?>#episode<?php echo $episode_number;?>" class="featured_play scrollLink pod-embed episode<?php echo $episode_number;?>" data-episode-number="<?php echo $episode_number;?>">
										<div class="ft-pod row">
											<div class="col-xs-8 ft-img">
												<img alt="Podcast Image" src="<?php echo $image;?>">
											</div>
											<div class="col-xs-4 ft-play">
													<svg width="62px" height="61px" id="925bdf6d-cb8d-4d34-ba1d-4fcb4bf74410" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 61 60">
														<title>pod-play-web</title>
														<g id="25554911-c848-4aca-8284-9e99dcbeef6d" data-name="Welcome">
															<g id="db782b66-3f9d-48eb-8c75-f92893be23fb" data-name="Podcast-Page-Ver-2-/-2-Featured-Episodes">
																<g id="3b025c8e-6bba-4174-9dd4-2cf5b14ce33a" data-name="Group-2-Copy">
																	<g id="8d00d592-1b13-446e-a2a1-924eff6eebb6" data-name="Group-2">
																		<ellipse id="0ae8ee89-8e88-4b23-8de2-3f73c9896ec8" data-name="Oval-Copy-10" cx="30.5" cy="30" rx="29" ry="28.5"
																		fill="none" stroke="#1c9cff" stroke-width="3" />
																		<path id="a6a75936-0183-4dce-8264-dc36832d8277" data-name="Fill-1-Copy-10" d="M41.48,29.62,26.55,21.14A1,1,0,0,0,25,22V39a1,1,0,0,0,1.55.88l14.93-8.48a1,1,0,0,0,0-1.76"
																		transform="translate(-0.5 -0.5)" fill="#1c9cff" />
																	</g>
																</g>
															</g>
														</g>
													</svg>
											</div>
											
										</div>
										
									</a>
								<p class="ep-head"><?php echo $title;?></p>
								<div class="ep-body"><?php echo $description;?></div>
                <span class="ellipses">...&nbsp;</span><a href="<?php echo $prepend_link;?>#episode<?php echo $episode_number;?>" class="show-more featured_play scrollLink pod-embed episode<?php echo $episode_number;?>" data-episode-number="<?php echo $episode_number;?>">SHOW MORE</a>
								<p class="ep-date">#<?php echo $episode_number;?> / <?php echo $pub_date;?></p>
							</div>
            <?php endwhile;
   endif;?>
					</div>
        </section>
        
				<section class="podcast all-ep" id="all-ep">
					<h2>ALL EPISODES</h2>
					<div id="accordion">
            
          <?php
          wp_reset_query();
          
          
          
          
          $args3 = array(
              'post_type' => 'sd_podcasts',
              'posts_per_page' => $per_page,
              'paged'          => $paged
          );
          // the query
          $wp_query = new WP_Query( $args3 );

           if ( $wp_query->have_posts() ) : ?>

              <!-- pagination here -->

              <!-- the loop -->
              <?php 
              $podcast_count = 0;
              
              while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
              	$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                $title = get_the_title();
                $description = str_replace("<p>", "<span class='paragraph'>", get_field('description'));
                $description = str_replace("</p>", "</span>", $description);
                $episode_number = get_field('episode_number');
                $soundcloud_id = get_field('soundcloud_id');

                $pub_date = get_the_date('F j, Y');
              ?>
              
              <script>
                jQuery.noConflict();
                jQuery(document).ready(function ($) {
                  $('.episode<?php echo $episode_number;?>').on('click', function(){
                    
                    event.preventDefault();
                    
                    anchor = $(this).attr('href') + "-anchor";
                    
                    setTimeout(function(){
                      console.log($(this).attr("href") + "-anchor");
                      $("html, body").animate({ scrollTop: $(anchor).offset().top-100}, 1000);
                    }, 500);
                    
                    episode_number = $(this).data('episode-number');
                    $("#accordion").accordion("option", "active", <?php echo $podcast_count;?> );
                    player = SC.Widget("podcast_embed<?php echo $episode_number;?>");
                    player.play();
                  }); 
                  
                  if (window.location.hash == "#episode<?php echo $episode_number;?>"){
                    ga('send','event','Podcast-page', 'Play', "Traffic-<?php echo $episode_number;?>");

                    setTimeout(function(){
                      $("#accordion").accordion("option", "active", <?php echo $podcast_count;?> );
                      
                      $("html, body").animate({ scrollTop: $("#episode<?php echo $episode_number;?>-anchor").offset().top-100}, 1000);
                      
                      setTimeout(function(){
                        player = SC.Widget("podcast_embed<?php echo $episode_number;?>");
                        player.play();
                      }, 500);
                    }, 3000);
                  }
                });
              </script>
            <div class="acc-trigger" id="episode<?php echo $episode_number;?>-anchor" data-episode-number="<?php echo $episode_number;?>">
								<div class="row">
										<div class="col-xs-10">
											<p class="ep-head"><?php echo $title;?></p>
											<div class="acc-hide">
													
                        <p class="ep-body"><?php echo $description;?></p>
                        <p class="acc-more"><span class="morePoints">&nbsp;	...</span> <span class="show-more">SHOW MORE</span></p>
														<p class="ep-date">#<?php echo $episode_number;?> / <?php echo $pub_date;?></p>
											</div>
										</div>
										<div class="ep-details col-xs-2 acc-hide">
											<svg width="62px" height="61px" id="925bdf6d-cb8d-4d34-ba1d-4fcb4bf74410" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 61 60">
		
												<g id="25554911-c848-4aca-8284-9e99dcbeef6d" data-name="Welcome">
													<g id="db782b66-3f9d-48eb-8c75-f92893be23fb" data-name="Podcast-Page-Ver-2-/-2-Featured-Episodes">
														<g id="3b025c8e-6bba-4174-9dd4-2cf5b14ce33a" data-name="Group-2-Copy">
															<g id="8d00d592-1b13-446e-a2a1-924eff6eebb6" data-name="Group-2">
																<ellipse id="0ae8ee89-8e88-4b23-8de2-3f73c9896ec8" data-name="Oval-Copy-10" cx="30.5" cy="30" rx="29" ry="28.5"
																fill="none" stroke="#1c9cff" stroke-width="3"></ellipse>
																<path id="a6a75936-0183-4dce-8264-dc36832d8277" data-name="Fill-1-Copy-10" d="M41.48,29.62,26.55,21.14A1,1,0,0,0,25,22V39a1,1,0,0,0,1.55.88l14.93-8.48a1,1,0,0,0,0-1.76"
																transform="translate(-0.5 -0.5)" fill="#1c9cff"></path>
															</g>
														</g>
													</g>
												</g>
											</svg>
										</div>
									</div>
							</div>
              <div class="frame-acc">
								<div class="full-desc">
                  <p class="ep-body"><?php echo $description;?></p>
                  <p class="acc-more"><a class="show-more reduce" href="javascript:;" data-episode-number="<?php echo $episode_number;?>">SHOW LESS</a></p>
                  <p class="ep-date">#<?php echo $episode_number;?> / <?php echo $pub_date;?></p>
                </div>
                <iframe id="podcast_embed<?php echo $episode_number;?>" width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo $soundcloud_id;?>&color=%231c9cff&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false&show_teaser=false&visual=true"></iframe>
              </div>


              
              
            <?php 
                $podcast_count++;
              endwhile;
            endif;
              ?>
            
            <div id="all-pod-pagination" class="podcast">
                            <ul>
                              <li  class="pagination-btn pagination-btn-prev"><?php if ($paged == 2){?><a href="/podcast?p=1" >Previous</a><?php }else{echo previous_posts_link('Previous');}?></li>

                          <?php if ($paged <= 5){ ?>


                              <li <?php if ($paged == 1){?>class="active"<?php } ?>><a href="/podcast/page/1">1</a></li>
                              <?php if ($wp_query->max_num_pages >=2){ ?><li <?php if ($paged == 2){?>class="active"<?php } ?>><a href="/podcast/page/2">2</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=3){ ?><li <?php if ($paged == 3){?>class="active"<?php } ?>><a href="/podcast/page/3">3</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=4){ ?><li <?php if ($paged == 4){?>class="active"<?php } ?>><a href="/podcast/page/4">4</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=5){ ?><li <?php if ($paged == 5){?>class="active"<?php } ?>><a href="/podcast/page/5">5</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=6){ ?><li><a href="/podcast/page/6">...</a></li><?php }?>


                          <?php } ?>


                          <?php if ($paged > 5){ ?>

                              <li><a href="/podcast/page/5">...</a></li>

                              <?php if ($wp_query->max_num_pages >=6){ ?><li <?php if ($paged == 6){?>class="active"<?php } ?>><a href="/podcast/page/6">6</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=7){ ?><li <?php if ($paged == 7){?>class="active"<?php } ?>><a href="/podcast/page/7">7</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=8){ ?><li <?php if ($paged == 8){?>class="active"<?php } ?>><a href="/podcast/page/8">8</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=9){ ?><li <?php if ($paged == 9){?>class="active"<?php } ?>><a href="/podcast/page/9">9</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=10){ ?><li <?php if ($paged == 10){?>class="active"<?php } ?>><a href="/podcast/page/10">10</a></li><?php }?>

                          <?php } ?>

                          <?php if ($paged > 10){ ?>

                              <li><a href="/podcast/page/10">...</a></li>

                              <?php if ($wp_query->max_num_pages >=11){ ?><li <?php if ($paged == 11){?>class="active"<?php } ?>><a href="/podcast/page/11">11</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=12){ ?><li <?php if ($paged == 12){?>class="active"<?php } ?>><a href="/podcast/page/12">12</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=13){ ?><li <?php if ($paged == 13){?>class="active"<?php } ?>><a href="/podcast/page/13">13</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=14){ ?><li <?php if ($paged == 14){?>class="active"<?php } ?>><a href="/podcast/page/14">14</a></li><?php }?>
                              <?php if ($wp_query->max_num_pages >=15){ ?><li <?php if ($paged == 15){?>class="active"<?php } ?>><a href="/podcast/page/15">15</a></li><?php }?>

                          <?php } ?>


                              <li class="pagination-btn pagination-btn-next"><?php echo next_posts_link('Next');?></li>
                            </ul>

                          </div>
            
            

            
            
            

				</section>
				<section class="pod-about podcast">
					<h2>About Dr. Daniel Crosby</h2>
					<div class="row pod-photo-bio">
						<div class="col-xs-12 col-md-4">
							<img src="<?php echo get_bloginfo('template_directory'); ?>/grd-podcast/img/crosby.jpg" alt="Dr. Daniel Crosby">
						</div>
						<div class="col-xs-12 col-md-8">
                <?php 
                wp_reset_query();
                if ( have_posts() ) {
                    while ( have_posts() ) : the_post();
                      $crosby_bio = get_field('crosby_bio');
                    endwhile;
                    $crosby_bio = str_replace("<p>", "<p class='pod-bio'>", $crosby_bio);
                    echo $crosby_bio;
                  }
                ?>
								
						</div>
					</div>
					
					<p class="pod-disclaimer">All opinions expressed by Dr. Daniel Crosby and podcast guests are solely their own opinions
							and do not reflect the opinion of The Guardian Life Insurance Company of America (Guardian) and its affiliates,
							subsidiaries, employees and agents. This podcast is for informational purposes only and should not be relied upon as
							a basis for legal, tax and investment decisions, as participants are not undertaking advice for any specific
							individual or situation. The opinions are based upon information participants consider reliable and Dr. Crosby and
							Guardian are not responsible for the consequences of any decisions or actions taken because of the information
							provided. Not all guests are not employees of Guardian or any of its affiliates.  GUARDIAN<sup>&reg;</sup> and the GUARDIAN G<sup>&reg;</sup> logo
							are registered service marks and are used with express permission. 
							All materials are subject to United States copyright laws.  <sup>&copy;</sup> 2018 Guardian. 2018-67236 Exp 9/2020
						</p>
				</section>
			</div>
		</section>
	
	</div>
</div>

<?php get_footer(); ?>