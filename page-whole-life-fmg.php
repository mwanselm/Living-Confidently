<?php
/*
*  Template Name: Whole Life Landing - FMG
*/
?>

<?php get_header(); ?>
<style>
	section.hero.lp-hero {
	    background-image: url(<?= get_bloginfo('template_directory'); ?>/img/c2c/Landing_Hero_desktop.jpg);
	}
	@media only screen and (-webkit-min-device-pixel-ratio: 2), not all, not all, not all, only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx){
		section.hero.lp-hero{
			background-image: url(<?= get_bloginfo('template_directory'); ?>/img/c2c/Landing_Hero_desktop.jpg);
		}
	}
	@media only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 768px),
	only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 768px),
	only screen and (-o-min-device-pixel-ratio: 2 / 1) and (max-width: 768px),
	only screen and (min-device-pixel-ratio: 2) and (max-width: 768px),
	only screen and (min-resolution: 192dpi) and (max-width: 768px),
	only screen and (min-resolution: 2dppx) and (max-width: 768px) {
		section.hero.lp-hero{
			background-image: url(<?= get_bloginfo('template_directory'); ?>/img/c2c/hero-wholeistic-mobile.jpg);
		}
	}
</style>
<section class="whole-life hero lp">
	<div class="home-hero-content">
		<div class="left">
            <p class="headline">Whole&bull;istic Thinking</p>

            <p class="subhead">Whole life insurance is one of the key ingredients to living confidently.</p>
        </div>
    </div>
</section>
<section class="world-chaos whole-life-circle-ani std-padding" id="whole-life-circles">
	<p class="blurb-copy">
		Understanding and owning whole life insurance correlates with higher financial and emotional confidence. 
	</p>
	<div class="left desktop">
		<h2>Whole Life Insurance at a Glance: </h2>
		<ul class="fact-list">


			<li class="list-btn active"><a href="javascript:;" id="whole-life-one">Whole life owners</a></li>
			<li class="list-btn"><a href="javascript:;" id="whole-life-two">Households</a></li>
			<li class="list-btn"><a href="javascript:;" id="whole-life-three">Costs</a></li>
			<li class="list-btn"><a href="javascript:;" id="whole-life-four">Understanding</a></li>
			<li class="list-btn"><a href="javascript:;" id="whole-life-five">Planning ahead</a></li>
		</ul>
	</div>
	<div class="center desktop">
		<div class="gif-container">
			<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_01.gif" class="chaos-img gif" id="gif-one">
			<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_02.png" class="chaos-img gif" id="gif-two">
			<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_03.png" class="chaos-img gif" id="gif-three">
			<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_04.png" class="chaos-img gif" id="gif-four">
			<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_05.png" class="chaos-img gif" id="gif-five">
			<p class="percent-1 center chaos-percent">81%</p>
			<p class="percent-2 center chaos-percent">48%</p>
			<p class="percent-3 center chaos-percent">3X</p>
			<p class="percent-4 center chaos-percent">78%</p>
			<p class="percent-5 center chaos-percent">84%</p>
		</div>
		<p id="gif-caption-1" class="gif-caption show">of the most financially confident Americans own whole life insurance, according to the Guardian Study of Financial and Emotional Confidence. </p>
		<p id="gif-caption-2" class="gif-caption">of households need more life insurance</p>
		<p id="gif-caption-3" class="gif-caption">Life insurance costs 3 times less than most people think</p>
		<p id="gif-caption-4" class="gif-caption">of working Americans do not completely understand whole life insurance</p>
		<p id="gif-caption-5" class="gif-caption">of working Americans place a priority on providing for their family if they die or are unable to work</p>
	</div>
	<h2 class="mobile section-header">Whole Life Insurance at a Glance: </h2>
	<div class="wl-mobile-slider mobile" id="chaos-mobile">
		<div id="chaos-1">
			<figure>
				<div class="img-percent">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_01.png" class="chaos-img" id="gif-one-m">
					<span class="percent-mobile">81%</span>
				</div>
				<figcaption><span>of the most financially confident Americans own whole life insurance, according to the Guardian Study of Financial and Emotional Confidence.</span></figcaption>
			</figure>
		</div>
		<div id="chaos-2">
			<figure>
				<div class="img-percent">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_02.png" class="chaos-img" id="gif-two-m">
					<span class="percent-mobile">48%</span>
				</div>
				<figcaption><span>of households need more life insurance </span></figcaption>
			</figure>
		</div>
		<div id="chaos-3">
			<figure>
				<div class="img-percent">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_03.png" class="chaos-img" id="gif-three-m">
					<span class="percent-mobile">3X</span>
				</div>
				<figcaption><span>Life insurance costs 3 times less than most people think</span></figcaption>
			</figure>
		</div>
		<div id="chaos-4">
			<figure>
				<div class="img-percent">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_04.png" class="chaos-img" id="gif-four-m">
					<span class="percent-mobile">78%</span>
				</div>
				<figcaption><span>of working Americans do not completely understand whole life insurance</span></figcaption>
			</figure>
		</div>
		<div id="chaos-5">
			<figure>
				<div class="img-percent">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/gif/whole_life_stat_05.png" class="chaos-img" id="gif-five-m">
					<span class="percent-mobile">84%</span>
				</div>
				<figcaption><span>of working Americans place a priority on providing for their family if they die or are unable to work</span></figcaption>
			</figure>
		</div>
	</div>
</section>
<section class="box-container box-container--green">
	<div class="resources-box resources-box--green float-boxes" id="">
		<h3>Resources</h3>
		<ul>
			<li><a target="_blank" href="/whole_life_resources/video-the-importance-of-mutuality/" class="analytics icon-video" data-analytics="2">The Importance of Mutuality</a></li>
			<li><a target="_blank" href="/whole_life_resources/video-what-is-life-insurance-part-1/" class="analytics icon-video" data-analytics="7">What is Life Insurance? Part 1</a></li>
			<li ><a target="_blank" href="/whole_life_resources/video-what-type-part-2/" class="analytics icon-video" data-analytics="6">What Type? Part 2</a></li>
			<li ><a target="_blank" href="/whole_life_resources/video-how-much-part-3/" class="analytics icon-video" data-analytics="6">How Much? Part 3</a></li>
			<li ><a target="_blank" href="/whole_life_resources/an-important-piece-whole-financial-perspective/" class="analytics icon-infographic" data-analytics="6">An Important Piece of Your Whole Financial Perspective</a></li>
		</ul>
		<!-- <ul class="mobile">
			<li class="mobile"><a href="/whole_life_resources/a-whole-new-slice-of-the-pie/" class="analytics icon-infographic" data-analytics="6">A Whole New Slice of the Pie</a></li>
			<li class="mobile"><a href="/whole_life_resources/video-understanding-dividends/" class="analytics icon-video" data-analytics="6">Understanding Dividends</a></li>
						
		</ul> -->
	</div>
</section>

<section class="copy-blurb width-655">
	<h2 class="section-header">The Whole Truth: Benefits of Whole Life</h2>
	<p class="blurb-copy">
		Many working Americans identify their top life priorities as protecting their family, having enough money in retirement, and educating their children.
	</p>
	<p class="blurb-copy">
		Did you know that owners of whole life have access to a wide range of benefits to support those priorities?
	</p>
</section>
<section class="carousel light-blue halfsies">

	<div class="landing-page" id="benefits-desktop">
		<div class="c-left">
			<img id="benefits-gif" src="/wp-content/themes/lc_phase_2/img/c2c/Whole_Life_Benefits.gif" >
		</div>
		<div class="c-right">
			<h3>Benefits</h3>
			<ul>
				<li>Guaranteed death benefit protection for life – ensuring a legacy<sup>1</sup></li>
				<li>Guaranteed cash value that can be applied toward things such as a new home, education, retirement, charitable giving, or funding a business<sup>2</sup></li>
				<li>Guaranteed premiums once the policy is in force</li>
				<li>Potential dividend payments and additional growth<sup>3</sup></li>
				<li>Built-in tax advantages on both the cash value and death benefit.<sup>4</sup></li>
				<li>Protection from disability or illness through optional riders<sup>5</sup></li>
				<li>Protection from creditors, depending on your state<sup>6</sup></li>
			</ul>
		</div>
	</div>
</section>
<section class="copy-blurb">
	<h2 class="section-header">Whole Life Myths vs. Facts</h2>
	<p class="blurb-copy">Take the mystery out of whole life.</p>
</section>
<section class="lp-carousel carousel desktop lp-whole-life" id="myth-desktop">
	<div class="wipe-overlay"></div>
	<div class="landing-page myth-desktop" id="priorities-desktop">
		<div>
			<div class="c-left">
				<div class="c-content">
					<p>
						<strong>Myth:</strong> 
						The whole life policy you own can increase in cost as you age or become ill and the premiums will go on forever.
					</p>
					<p><strong>Fact:</strong> Whole life premiums are guaranteed to never increase once the policy is purchased.  There are various policy designs that can avoid “forever” premium payments.</p>
				</div>
			</div>
			<div class="c-right">
				<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth1.jpg">
			</div>
		</div>
		<div>
			<div class="c-left">
				<div class="c-content">
					<p><strong>Myth:</strong> Whole life is expensive.</p>
					<p><strong>Fact:</strong> While whole life costs more than term life, it includes many additional living benefits, such as cash value. Plus, it has a permanent death benefit, while you may outlive a term life death benefit.</p>
				</div>
			</div>
			<div class="c-right">
				<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth2.jpg">
			</div>
		</div>
		<div>
			<div class="c-left">
				<div class="c-content">
					<p><strong>Myth:</strong> Term life is a better option for most people.</p>
					<p><strong>Fact:</strong> Whole life offers permanent lifetime protection, while term offers only temporary protection. Consequently, people may use both for optimal protection and benefits.</p>
				</div>
			</div>
			<div class="c-right">
				<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth3.jpg">
			</div>
		</div>
		<div>
			<div class="c-left">
				<div class="c-content">
					<p><strong>Myth:</strong> People rarely use the living benefits of whole life when they’re alive.</p>
					<p><strong>Fact:</strong> Many people use the living benefits of whole life as a source for cash.</p>
				</div>
			</div>
			<div class="c-right">
				<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth4.jpg">
			</div>
		</div>

	</div>
</section>
<section class="priorities-mobile vertical-slider myth-slider mobile">
	<div class="priorities-slider myth-slider-wrapper">
		<div class="slide" id="priority-1">
			<div class="copy-block center">
				<p>
					<strong>Myth:</strong> 
					The whole life policy you own can increase in cost as you age or become ill and the premiums will go on forever.
				</p>
				<p class="start-showing"><strong>Fact:</strong> Whole life premiums are guaranteed to never increase once the policy is purchased.  There are various policy designs that can avoid “forever” premium payments.</p>
			</div>
			<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth1.jpg">
		</div>
		<div class="slide" id="priority-2">
			<div class="copy-block center">
				<p><strong>Myth:</strong> Whole life is expensive.</p>
				<p><strong>Fact:</strong> While whole life costs more than term life, it includes many additional living benefits, such as cash value. Plus, it has a permanent death benefit, while you may outlive a term life death benefit.</p>
			</div>
			<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth2.jpg">
		</div>
		<div class="slide" id="priority-3">
			<div class="copy-block center">
				<p><strong>Myth:</strong> Term life is a better option for most people.</p>
				<p><strong>Fact:</strong> Whole life offers permanent lifetime protection, while term offers only temporary protection. Consequently, people may use both for optimal protection and benefits.</p>
			</div>
			<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth3.jpg">
		</div>
		<div class="slide" id="priority-4">
			<div class="copy-block center">
				<p><strong>Myth:</strong> People rarely use the living benefits of whole life when they’re alive.</p>
				<p><strong>Fact:</strong> Many people use the living benefits of whole life as a source for cash.</p>
			</div>
			<img src="/wp-content/themes/lc_phase_2/img/c2c/wl_myth4.jpg">
		</div>
	</div>
</section>

<section class="copy-blurb rise-above width-725">
	<h2 class="section-header">An Insider’s Asset Class</h2>
	<p class="blurb-copy">Are you aware that whole life is considered an asset class that can help diversify your portfolio?</p>

	<p class="blurb-copy">The cash value in a whole life policy can help you manage risk when combined with a mix of fixed assets (like bonds) and equity assets (like stocks). What’s more, it’s insulated from market fluctuations, potentially increasing reward, so it’s there when you need it — now or in the future.</p>
	<img src="/wp-content/themes/lc_phase_2/img/c2c/whole_llfe_venn_complete.jpg">
<!--
	<div class="push-half">
		<img src="/wp-content/themes/lc_phase_2/img/c2c/whole_life_venn.png" >
	</div>
-->
</section>
<section id="wl-learn-more">
	<div class="wl-left">
		
	</div>
	<div class="wl-right">
		<div class="table">
			<div class="wrapper">
				<p>Find out how whole life works to reduce risk and increase reward.</p>
				<a href="/whole-perspective" class="btn btn-dark-blue" id="learnmore_liam" target="_blank">LEARN MORE</a>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</section>
<section class="copy-blurb blue-bg width-965">
	<h2 class="std-header">How much protection is right for me?</h2>
	<p class="wl-std-para">
		While term insurance can protect you in the short-term, the right amount of whole life protection you may want depends on where you are in your own life, who depends on you, and your earning power. In general, the younger you are, the more years of your income you need to take into account when deciding on the right policy protection for you.
	</p>
	<section class="results-icons wl-icons">
			<div class="fec-icon-container">
			<div class="fec-icon">
				<div ontouchstart="" class="copy-img">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/icon-twenties.png" alt="Confident Planner">
					<span class="copy-bubble desktop">
						<p>30x<br/>Income</p>
					</span>
				</div>
				
				<p class="mobile">30x<br/>Income</p>
			</div>
			<div class="fec-icon">
				<div ontouchstart="" class="copy-img">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/icon-thirties.png" alt="Ambitious Spender">
					<span class="copy-bubble desktop">
						<p>20x<br/>Income</p>
					</span>
				</div>
				
				<p class="mobile">20x<br/>Income</p>
			</div>
			<div class="fec-icon">
				<div ontouchstart="" class="copy-img">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/icon-fourties.png" alt="Retirement Realist">
					<span class="copy-bubble desktop">
						<p>15x<br/>Income</p>
					</span>
				</div>
				
				<p class="mobile">15x<br/>Income</p>
			</div>
			<div class="fec-icon">
				<div ontouchstart="" class="copy-img">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/icon-fifties.png" alt="Day-to-Day Decision-Maker">
					<span class="copy-bubble desktop">
						<p>10x<br/>Income</p>
					</span>
				</div>
				<p class="mobile">10x<br/>Income</p>
			</div>
			<div class="fec-icon">
				<div ontouchstart="" class="copy-img">
					<img src="/wp-content/themes/lc_phase_2/img/c2c/icon-sixties.png" alt="Day-to-Day Decision-Maker">
					<span class="copy-bubble desktop">
						<p>5x<br/>Income</p>
					</span>
				</div>
				<p class="mobile">5x<br/>Income</p>
			</div>
		</div>
	</section>
</section>
<section class="copy-blurb width-965">
	<h2 class="section-header">The Importance of Protection First</h2>
	<p class="blurb-copy">What do we mean by protection first? While saving for retirement and paying down debt is important, it should not come at the expense of adequate protection and coverage for you and your family. The most financially confident Americans prioritize protection and own the right tools for the job.</p>
</section>
<section class="hero family-reading wl-hero">
	<div class="left dark-text desktop">
		<h2 class="std-header">Start Building Your Whole Story</h2>
		<p>There’s so much more to whole life than you may already know. Check out our whole life resources page and find out more about how it can help you live with greater financial and emotional confidence.</p>
		<p>
			<a href="/whole-life-resources/" class="btn btn-dark-blue">Check out our resources</a>
		</p>
	</div>
</section>
<section class="mobile hero-mobile-content">
	<h2 class="std-header">Start Building Your Whole Story</h2>
	<p>There’s so much more to whole life than you may already know. Check out our whole life resources page and find out more about how it can help you live with greater financial and emotional confidence.</p>
	<p>
		<a href="/whole-life-resources/" class="btn btn-dark-blue">Check out our resources</a>
	</p>
</section>

<section class="hero laptop-illustration wl-hero">

	<div class="right light-text desktop">
		<h2 class="std-header">Together for the Long-Term</h2>
		<p>Strategic alliance is at the core of mutuality. A focus on the long term prioritizes policyholders, one key benefit of owning insurance with a mutual company. Learn more about what drives our long term vision.</p>
		<!-- <p>
			<a href="#watch-new" rel="modal:open" class="btn btn-dark-blue">I want to watch now</a>
		</p> -->
		<div class="grd-wistia-inline">
			<script src="https://fast.wistia.com/embed/medias/5p1qmikslm.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_5p1qmikslm videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
		</div>
	</div>
</section>
<section class="mobile hero-mobile-content white-mobile">
	<h2 class="std-header">Together for the Long-Term</h2>
	<p>Strategic alliance is at the core of mutuality. A focus on the long term prioritizes policyholders, one key benefit of owning insurance with a mutual company. Learn more about what drives our long term vision.</p>
	<div class="grd-wistia-inline">
			<script src="https://fast.wistia.com/embed/medias/5p1qmikslm.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_5p1qmikslm videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
		</div>
</section>
<?php
if (strpos($_SERVER['REQUEST_URI'],'protect-my-priorities') !== false){
  ?>
<div id="wl-find-rep">
	<p>Speak with your advisor about whole life insurance and start living more confidently.</p>
	<a href="/find-a-rep" class="btn btn-dark-blue" id="wholeistic_find_a_rep">FIND AN ADVISOR</a>
</div>
<?php } ?>
<section class="panel-sources">
	<h2>Sources &amp; Important Disclosures.</a></h2>
	<p><a href="https://www.limra.com/uploadedFiles/limra.com/LIMRA_Root/Posts/PR/_Media/PDFs/Facts-of-Life-2016.pdf " target="_blank">https://www.limra.com/uploadedFiles/limra.com/LIMRA_Root/Posts/PR/_Media/PDFs/Facts-of-Life-2016.pdf </a></p>
	<p><a href="http://www.limra.com/Posts/MarketFacts/_Digital_Edition/MarketFacts_-_2015_Number_3.aspx" target="_blank">http://www.limra.com/Posts/MarketFacts/_Digital_Edition/MarketFacts_-_2015_Number_3.aspx</a></p>
	<p><sup>1</sup>All whole life insurance policy guarantees are subject to the timely payment of all required premiums and the claims paying ability of the issuing insurance company. Policy loans and withdrawals affect the guarantees by reducing the policy’s death benefit and cash values.</p>
	<p><sup>2</sup>Policy benefits are reduced by any outstanding loan or loan interest and/or withdrawals. Dividends, if any, are affected by policy loans and loan interest. Withdrawals above the cost basis may result in taxable ordinary income. If the policy lapses, or is surrendered, any outstanding loans considered gain in the policy may be subject to ordinary income taxes. If the policy is a Modified Endowment Contract (MEC), loans are treated like withdrawals, but as gain first, subject to ordinary income taxes. If the policy owner is under 59 ½, any taxable withdrawal may also be subject to a 10% federal tax penalty.</p>
	<p><sup>3</sup>Dividends are not guaranteed. They are declared annually by Guardian’s Board of Directors. The total dividend calculation includes mortality experience and expense management as well as investment results.</p>
	<p><sup>4</sup>Guardian, its subsidiaries, agents, and employees do not provide tax, legal, or accounting advice. Consult your tax, legal, or accounting professional regarding your individual situation.</p>
	<p><sup>5</sup>Riders may incur an additional cost or premium. Rider benefits may not be available in all states.</p>
	<p><sup>6</sup>State creditor protection for life insurance policies varies by state. Contact your state’s insurance department or consult your legal advisor regarding your individual situation.</p>
	<p><strong>Disclaimer</strong></p>
	<p>This Material is Intended For General Public Use. By providing this material, we are not undertaking to provide investment advice for any specific individual or situation, or to otherwise act in a fiduciary capacity. Please contact one of our financial professionals for guidance and information specific to your individual situation.</p>
	<p>The total dividend calculation includes mortality experience and expense management as well as investment results.  For a whole life policy that is not a Modified Endowment Contract (MEC), if the amount of dividend payments used to repay the loan principal or interest exceeds the cost basis (cumulative premiums) of the policy, the excess dividend payments may be subject to income taxes.</p>
</section>
<div id="cash-value" style="display: none;">
	<iframe src="https://glic.wistia.com/embed/iframe/tkl6glh6r9"
	allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed"
	name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen
	oallowfullscreen msallowfullscreen width="100%" height="360"></iframe>
	<script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
</div>

<!-- <div id="source-panel" style="display: none;">
	
</div> -->
<script>
jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
	var waypoint = new Waypoint({
	      element: document.getElementById('whole-life-circles'),
	      handler: function(direction) {
	        $('.resources-box').addClass('animated fadeInUp');
	      },
	      offset: '50%'
	    });

    // var waypoint = new Waypoint({
    //   element: document.getElementById('video2'),
    //   handler: function(direction) {
    //     $('#video2').get(0).play()
    //   },
    //   offset: '50%'
    // })
    // var waypoint = new Waypoint({
    //   element: document.getElementById('video3'),
    //   handler: function(direction) {
    //     // console.log('Scrolled to waypoint!')
    //     $('#video3').get(0).play()
    //   },
    //   offset: '50%'
    // })
    var waypoint = new Waypoint({
      element: document.getElementById('gif-one'),
      handler: function(direction) {
        $('#gif-one').addClass('show').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_01.gif?" + Math.random()
)
        $('.percent-1').addClass('show');
        this.destroy()
    },

      offset: '50%',
      
    })

    var waypoint = new Waypoint({
      element: document.getElementById('gif-one-m'),
      handler: function(direction) {
        $('#gif-one-m').css('opacity', '1').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/gif/Whole_Life_Landing_01.gif?" + Math.random()
)
        this.destroy()
    },
      offset: '50%'
    })

        var waypoint = new Waypoint({
          element: document.getElementById('benefits-desktop'),
          handler: function(direction) {
            $('#benefits-gif').css('opacity', '1').attr("src", "/wp-content/themes/lc_phase_2/img/c2c/Whole_Life_Benefits.gif?" + Math.random()
    )
            this.destroy()
        },
          offset: '50%'
        })

$('#priority-1').removeClass('slick-active');
    var waypoint = new Waypoint({
      element: document.getElementById('priority-1'),
      handler: function(direction) {
        $("#priority-1 .copy-block p").delay(1000).queue(function(){
        $(this).addClass("animated fadeInUp").dequeue();
})
        $("#priority-1").delay(500).queue(function(){
        $(this).addClass("slick-active").dequeue();
})
    },

      offset: '50%'
    })
// Priorities Desktop Slider scroll animations
    var waypoint = new Waypoint({
      element: document.getElementById('myth-desktop'),
      handler: function(direction) {
        // console.log('Scrolled to waypoint!')
        // $('#priorities-desktop').slick('slickPlay')
        $(".slick-active .c-right img").delay(1500).queue(function(){
        $(this).addClass("animated fadeIn").dequeue();
    })
        // $('.c-right img').addClass('animated fadeIn');
        // $('.c-left .c-content').addClass('animated slideInLeft').css('visibility' , 'visible');
        $(".slick-active .c-left .c-content").delay(2000).queue(function(){
        $(this).addClass("animated fadeInUp").dequeue();
    });
        $(".slick-active .c-left .c-content p:last-of-type").delay(2900).queue(function(){
            $(this).addClass("animated fadeInUp").dequeue();
        })
        $(".wipe-overlay").delay(800).queue(function(){
        $(this).addClass("full-width").dequeue();
    })
        $('.myth-desktop').slick('slickPlay')
    },

      offset: '80%'
    })

});
</script>


<?php get_footer(); ?>