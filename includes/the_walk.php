<?php

function the_walk_func($atts, $content = ""){
	$html = '<div class="no-overflow" id="walk-intro">
<div id="blurcontainer" class="container over">

			<div id="content" class="clearfix row">

				<div id="main" class="col col-lg-12 clearfix" role="main">


					<article id="post-25" class="clearfix post-25 page type-page status-publish has-post-thumbnail hentry" role="article">

						<header>
					    <div id="tools_sub_head">
                         <div class="tools_sub_icon fancy"><span><img src="/wp-content/uploads/2014/09/walk_icon.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Retirement Walk Icon"></span></div>
							<div class="page-header"><h1>My Retirement Walk<sup>&reg;</sup></h1></div>
								                  <h2 class="tools_sub_title hidden-xs">Take the walk to see what the road to retirement holds for you</h2>
                						</div>
						</header> <!-- end article header -->



						              <section class="post_content">
                            <div id="tools_sub_section">
                                <p><!-- <iframe src="http://myretirementwalk.com/walk/" width="850" height="650" align="middle" scrolling="no"></iframe> --></p>
<div class="tools_intro">
<p>Awareness inspires you to plan for retirement.<br>
Your actions define how you’ll live through it.</p>
<p>Go on a journey towards retirement.</p>


<p class="landing_butt"><a href="' . site_url() . '/the_walk/thewalk2.html" class="read_more">Take The Walk</a>
</p>

<p class="disclaimer">This material is intended for general public use. By providing this material, neither The Guardian Life Insurance Company of America nor any of its affiliates (“Guardian") are undertaking to provide legal, tax or investment advice for any specific individual or situation, or to otherwise act in a fiduciary capacity. Please contact your tax, investment or legal advisor for guidance and information specific to your individual situation. Guardian is not responsible for the consequences of any decisions or actions taken in reliance upon or as a result of the information provided by this material.</p>

</div>

<p class="disclaimer new-mobile">This material is intended for general public use. By providing this material, neither The Guardian Life Insurance Company of America nor any of its affiliates (“Guardian") are undertaking to provide legal, tax or investment advice for any specific individual or situation, or to otherwise act in a fiduciary capacity. Please contact your tax, investment or legal advisor for guidance and information specific to your individual situation. Guardian is not responsible for the consequences of any decisions or actions taken in reliance upon or as a result of the information provided by this material.</p>

                            </div>

						</section> <!-- end article section -->

						<footer class="hidden-xs">

							<p class="clearfix"></p>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->






				</div> <!-- end #main -->


			</div> <!-- end #content -->



</div><!-- .no-overflow -->
</div>';

return $html;
}

add_shortcode('the_walk', 'the_walk_func');
