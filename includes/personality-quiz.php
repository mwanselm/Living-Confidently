<?php

function personality_quiz_func($atts, $content = ""){
	$html = '<div class="no-overflow">
<div id="blurcontainer" class="container over">

			<div id="content" class="clearfix row">

				<div id="main" class="col col-lg-12 clearfix" role="main">


					<article id="post-27" class="clearfix post-27 page type-page status-publish has-post-thumbnail hentry" role="article">

						<header>
					    <div id="tools_sub_head">
                         <div class="tools_sub_icon fancy"><span><img src="/wp-content/uploads/2014/09/personality_icon.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Personality Quiz Icon"></span></div>
							<div class="page-header"><h1>Retirement Personality Quiz</h1></div>
								                  <h2 class="tools_sub_title hidden-xs">Your Retirement Style Matters<sup>&reg;</sup> - Learn more</h2>
                						</div>
						</header> <!-- end article header -->



						              <section class="post_content">
                            <div id="tools_sub_section">
                                <div class="tools_intro">
<p>Planning for retirement is a serious process, but it isn’t only about numbers and calculators.</p>
<p>Personality matters too.</p>
<p>Indeed, your emotions and behaviors impact the way you plan for retirement. We’ve identified four distinct financial personalities. Which are you? </p>
<p>Let’s uncover more about how your personal style and financial habits intersect.</p>
<p class="landing_butt"><a href="' . site_url() . '/personality_quiz/personality-quiz-quiz.html" class="read_more">Take The Personality Assessment</a></p>

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

add_shortcode('personality_quiz', 'personality_quiz_func');
