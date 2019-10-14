<?php
/*
*  Template Name: My Retirement Reality
*/
?>

<?php get_header();
$_SESSION['prev_page'] = $_SERVER['REQUEST_URI'];
?>

<section class="hero">
	<picture>
	  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/re-hero-home-m.jpg">
		<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/re-hero-home.jpg">
	  <source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/re-hero-home.jpg">
	  <img src="<?= get_template_directory_uri(); ?>/img/re-hero-home.jpg" alt="Alt Text">
	</picture>
	<div class="hero-content">
		<h2>Your Retirement Reality</h2>
		<p>Make the most of it.</p>
	</div>
</section>
<section class="stripes bg-img center-text">
	<div class="inner-wrapper">
		<p class="squeeze">We get it. Retirement means something different to everyone and requires more planning than it did for our parents. Let’s figure out what you’ll be doing in your second-half and find a way to make it a reality.</p>
	</div>
</section>
<section class="wood-overlay bg-img center-text">
	<div class="inner-wrapper">
		<h3>What does your next chapter look like when every day feels like Saturday?</h3>
		<p>Let’s think about the only retirement that matters – yours. </p>
	</div>
</section>
<section class="cards bg-img">
	<div class="inner-wrapper card-1">
        <ul class="card-dots one">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
		<p class="intro center-text">Choose the answers that best fit you.</p>
		<div class="card-left">
            <div class="question">
                <figure class="card animated">
                    <img class="img-d" src="<?= get_template_directory_uri(); ?>/img/d-card-1a.jpg" alt="Alt Text">
					<img class="img-m" src="<?= get_template_directory_uri(); ?>/img/m-card-1a.jpg" alt="Alt Text">
<!--
                    <picture>
                        <source media="(max-width: 500px)" srcset="img/card-1a.jpg">
                        <source media="(max-width: 900px)" srcset="img/d-card-1a.jpg">
                        <source media="(min-width: 901px)" srcset="img/d-card-1a.jpg">
                        <img src="img/card-1a.jpg" alt="Alt Text">
                    </picture>
-->
                    <figcaption>I plan to stay in the region where I live now.</figcaption>
                </figure>
                <a href="javascript:;" class="btn-1a btn-question btn btn-blue btn-left">SELECT</a>
            </div>
                <div class="answer"><p class=" ">There are a lot of affordable locations for retirees that can help you to maintain your lifestyle.</p><br><a href="javascript:;" class="btn-answer btn btn-blue btn-answer-1a">NEXT</a></div>
		</div>
		<div class="card-right">
            <div class="question">
                <figure class="card animated">
                    <img class="img-d" src="<?= get_template_directory_uri(); ?>/img/d-card-1b.jpg" alt="Alt Text">
                    <img class="img-m" src="<?= get_template_directory_uri(); ?>/img/m-card-1b.jpg" alt="Alt Text">
					
<!--
                    <picture>
                        <source media="(max-width: 500px)" srcset="img/card-1b.jpg">
                        <source media="(max-width: 900px)" srcset="img/d-card-1b.jpg">
                        <source media="(min-width: 901px)" srcset="img/d-card-1b.jpg">
                        <img src="img/d-card-1b.jpg" alt="Alt Text">
                    </picture>
-->
                    <figcaption>I plan to move somewhere new.</figcaption>
                </figure>
                <a href="javascript:;" class="btn-1b btn-question btn btn-blue btn-right">SELECT</a>
            </div>
			
                <div class="answer"><p class=" ">Community and stability are important for people during life transitions.</p><br><a href="javascript:;" class="btn-answer-1b btn btn-blue btn-answer">NEXT</a></div>
		</div>
        <div class="clear"></div>
		<div class="general-response">
			<p>Are you getting a better sense of how your retirement is as unique as you are?</p><p class="smaller">Keep reading to learn more.</p>
			<p class="scroll-down">
        <a href="#" class="gotochart"><span>SCROLL DOWN</span></a></p>
			  <a href="#" class="gotochart"><svg width="28px" height="21px" id="2cfbdb0e-b6b4-4d2e-8b9f-33119a6befb7" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.28 20.07"><title>Arrow</title><path id="6e417274-6f5b-44e3-89d2-ed4bf9c82347" data-name="Arrow" d="M2,8,14,18,26,8" transform="translate(-1.36 0.77)" fill="none" stroke="#002c5f" stroke-width="2"/><path id="f0347b3b-dc19-43d0-b7bf-99ff13429de6" data-name="Arrow-2" d="M6.82,0,14.5,6.35,22.18,0" transform="translate(-1.36 0.77)" fill="none" stroke="#002c5f" stroke-width="2"/></svg></a>
		</div>
    
    <div id="images-loading">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
    
	</div>
</section>



<section class="pie-chart" id="mypiechart">
	<div class="inner-wrapper">
		<h3 class="center-text">Whatever your vision, income is the common element to a confident future.</h3>
		<div class="columns">
			<div class="column graphic center-text">
				<div class="inner">
					<h4>Working Americans</h4>
					<img src="<?= get_template_directory_uri(); ?>/img/pie-chart.jpg" alt="Pie Chart">
				</div>
			</div>
			<div class="column list">
				<div class="inner">
					<h4>The secret to confidence*</h4>
					<ol>
						<li>Living within your means</li>
						<li>Planning for income replacement in retirement</li>
						<li>Owning solutions that provide guaranteed income</li>
						<li>Working with an advisor</li>
					</ol>
				</div>
			</div>
			
			<div class="column yellow-box">
				<h4>Resources</h4>
				<ul>
					<?php
						$retirement_guide = get_page_by_path('retirement-guide',OBJECT,'retirement_resource');
						$pdf = get_field('pdf', $retirement_guide->ID);
						if (empty($pdf)) {
							$pdf = '#';
						} else {
							$pdf = $pdf['url'];
						}
					?>
					<li><a href="<?= $pdf; ?>?utm_campaign=retirement_experience&utm_source=retirement-experience&utm_medium=resources-box&" target="_blank"><svg width="17px" height="22.333333333333333px" id="ffbd2d88-0283-4f15-8931-284aa6a01290" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.05 53.05"><title>icon-paper</title><polyline points="22.18 2 2 2 2 51.05 38.05 51.05 38.05 16.89" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/><polygon points="22.18 2 22.18 16.89 38.05 16.89 22.18 2" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/></svg> Retirement Guide</a></li>
					<?php
						$risks_retirement = get_page_by_path('infographic-risks-retirement',OBJECT,'infographics');
						$pdf = get_field('pdf', $risks_retirement->ID);
						if (empty($pdf)) {
							$pdf = '#';
						} else {
							$pdf = $pdf['url'];
						}
					?>
					<li><a href="<?= the_permalink($risks_retirement->ID); ?>?utm_campaign=retirement_experience&utm_source=retirement-experience&utm_medium=resources-box" ><svg width="22.666666666666667px" height="23px" id="daf6a2e5-a0a0-4e23-a95a-b9f59323bc05" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.4 48.4"><title>icon-pie</title><path d="M839.92,1963.19a22.36,22.36,0,0,0,22.32-22.32v-.19a1.91,1.91,0,0,0-1.94-1.94H842.05V1920.5a1.91,1.91,0,0,0-1.94-1.94h-.19a22.32,22.32,0,0,0,0,44.63Zm-1.75-40.69v18.18a1.91,1.91,0,0,0,1.94,1.94h18.18a18.44,18.44,0,1,1-20.12-20.12Z" transform="translate(-817.6 -1914.79)" fill="#fff"/><path d="M846.84,1914.8a1.94,1.94,0,0,0-1.55.45,1.87,1.87,0,0,0-.65,1.49v17.46a1.91,1.91,0,0,0,1.94,1.94H864a2.11,2.11,0,0,0,1.49-.65A1.94,1.94,0,0,0,866,1934l-.06-.26A22.51,22.51,0,0,0,847,1914.8Zm1.68,4.27a18.64,18.64,0,0,1,13.2,13.2h-13.2Z" transform="translate(-817.6 -1914.79)" fill="#fff"/></svg> Risks at Retirement</a></li>
					<?php
						$income_gap_worksheet = get_page_by_path('income-gap-worksheet',OBJECT,'retirement_resource');
						$pdf = get_field('pdf', $income_gap_worksheet->ID);
						if (empty($pdf)) {
							$pdf = '#';
						} else {
							$pdf = $pdf['url'];
						}
					?>
					<li><a href="<?= $pdf; ?>?utm_campaign=retirement_experience&utm_source=retirement-experience&utm_medium=resources-box" target="_blank"><svg width="17px" height="22.333333333333333px" id="ffbd2d88-0283-4f15-8931-284aa6a01290" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.05 53.05"><title>icon-paper</title><polyline points="22.18 2 2 2 2 51.05 38.05 51.05 38.05 16.89" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/><polygon points="22.18 2 22.18 16.89 38.05 16.89 22.18 2" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/></svg> Income Gap Worksheet</a></li>
					<?php
						$facts_guaranteed_income = get_page_by_path('infographic-cash-life-lottery-isnt-way',OBJECT,'infographics');
						$pdf = get_field('pdf', $facts_guaranteed_income->ID);
						if (empty($pdf)) {
							$pdf = '#';
						} else {
							$pdf = $pdf['url'];
						}
					?>
					<li><a href="<?= the_permalink($facts_guaranteed_income->ID); ?>?utm_campaign=retirement_experience&utm_source=retirement-experience&utm_medium=resources-box"><svg width="22.666666666666667px" height="23px" id="daf6a2e5-a0a0-4e23-a95a-b9f59323bc05" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.4 48.4"><title>icon-pie</title><path d="M839.92,1963.19a22.36,22.36,0,0,0,22.32-22.32v-.19a1.91,1.91,0,0,0-1.94-1.94H842.05V1920.5a1.91,1.91,0,0,0-1.94-1.94h-.19a22.32,22.32,0,0,0,0,44.63Zm-1.75-40.69v18.18a1.91,1.91,0,0,0,1.94,1.94h18.18a18.44,18.44,0,1,1-20.12-20.12Z" transform="translate(-817.6 -1914.79)" fill="#fff"/><path d="M846.84,1914.8a1.94,1.94,0,0,0-1.55.45,1.87,1.87,0,0,0-.65,1.49v17.46a1.91,1.91,0,0,0,1.94,1.94H864a2.11,2.11,0,0,0,1.49-.65A1.94,1.94,0,0,0,866,1934l-.06-.26A22.51,22.51,0,0,0,847,1914.8Zm1.68,4.27a18.64,18.64,0,0,1,13.2,13.2h-13.2Z" transform="translate(-817.6 -1914.79)" fill="#fff"/></svg> Facts About<br>Guaranteed Income</a></li>
					<?php
						$women_retirement = get_page_by_path('women-retirement',OBJECT,'infographics');
						$pdf = get_field('pdf', $women_retirement->ID);
						if (empty($pdf)) {
							$pdf = '#';
						} else {
							$pdf = $pdf['url'];
						}
					?>
					<li><a href="<?= the_permalink($women_retirement->ID); ?>?utm_campaign=retirement_experience&utm_source=retirement-experience&utm_medium=resources-box"><svg width="22.666666666666667px" height="23px" id="daf6a2e5-a0a0-4e23-a95a-b9f59323bc05" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.4 48.4"><title>icon-pie</title><path d="M839.92,1963.19a22.36,22.36,0,0,0,22.32-22.32v-.19a1.91,1.91,0,0,0-1.94-1.94H842.05V1920.5a1.91,1.91,0,0,0-1.94-1.94h-.19a22.32,22.32,0,0,0,0,44.63Zm-1.75-40.69v18.18a1.91,1.91,0,0,0,1.94,1.94h18.18a18.44,18.44,0,1,1-20.12-20.12Z" transform="translate(-817.6 -1914.79)" fill="#fff"/><path d="M846.84,1914.8a1.94,1.94,0,0,0-1.55.45,1.87,1.87,0,0,0-.65,1.49v17.46a1.91,1.91,0,0,0,1.94,1.94H864a2.11,2.11,0,0,0,1.49-.65A1.94,1.94,0,0,0,866,1934l-.06-.26A22.51,22.51,0,0,0,847,1914.8Zm1.68,4.27a18.64,18.64,0,0,1,13.2,13.2h-13.2Z" transform="translate(-817.6 -1914.79)" fill="#fff"/></svg> Women and Retirement</a></li>
				</ul>
			</div>
		</div>
		
	</div>
</section>
<section class="tooltips bg-img">
	<div class="inner-wrapper">
		<h3 class="center-text">How can you create income in retirement?</h3>
		<p class="center-text smaller-text">In our working lives, we know where our money is coming from. In later years, it’s not as simple. If you’re like most and not completely prepared, don’t fret. With the right plan in place, you can create a stream of income that can last for your full retirement.</p>
    
    <div id="tooltips-flex">
      
		<div class="tooltips-left">
			<h4>Sources of <strong>guaranteed</strong> income</h4>
			<ul>
				<li><span class="tippy" title="A federal program that provides benefits to the retired, as well as those who are unemployed or disabled.">Social Security <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><title>icon-tooltip</title><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
				<li><span class="tippy" title="An employer-paid retirement account with a set payout based on salary and years of service.">Pensions <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
				<li><span class="tippy" title="A debt security issued by a government or corporation. Generally considered to be lower risk.<br><br> 
					An insured bank deposit made for a specific period of time.">Bonds, CDs <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
				<li><span class="tippy" title="Contracts where an insurance company promises to make payments to an annuitant over a specified period of time or for life.">Annuities** <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
				<li><span class="tippy" title="Life insurance that pays a benefit on the death of the insured and also accumulates a cash value.">Whole life insurance*** <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
			</ul>
		</div>
		<div class="tooltips-right">
			<h4>Sources of <strong>non</strong>-guaranteed income</h4>
			<ul>
				<li><span class="tippy" title="Accounts held at a financial facility for the purpose of long-term investments for capital preservation, growth, fixed income or for personal money management.">Bank and investment accounts <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
				<li><span class="tippy" title="A type of investment or savings account that comes with tax benefits to help save for retirement.">Individual retirement accounts (IRA) <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
				<li><span class="tippy" title="A savings account used in conjunction with a high-deductible health insurance policy that allows tax-free saving against medical expenses.">Health savings accounts (HSA) <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
				<li class="employer-sponsored"><span class="tippy" title="Retirement accounts sponsored by employers which allow employees to save and invest with pre-tax dollars until withdrawal. 457s are specific to government employees. 403s are specific to public school employees and employees of tax-exempt organizations.">Employer-sponsored 401(k), 457(b), 403(b) <svg width="23px" height="23px" "10c682f3-8057-4252-a725-dc5e97033acf" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17"><circle cx="8.5" cy="8.5" r="8" fill="none" stroke="#1a2f5a" stroke-miterlimit="10"/><path d="M20.42,22.82a4.44,4.44,0,0,1-2.14,1.47c-.29,0-.48-.23-.19-1.44L19,19.1c.09-.32.09-.47,0-.47a2.84,2.84,0,0,0-1,.63l-.18-.34A4.92,4.92,0,0,1,20,17.53c.32,0,.31.47.15,1.16l-1,4c-.09.35-.06.47,0,.47a3,3,0,0,0,1-.69Zm.38-7.45a.82.82,0,0,1-.78.85.62.62,0,0,1-.62-.64.86.86,0,0,1,.81-.87A.61.61,0,0,1,20.8,15.37Z" transform="translate(-11 -11)" fill="#192f59"/></svg></span></li>
			</ul>
		</div>
    
  </div><!-- end tooltips-flex-->
    
        <div class="clear"></div>
	</div>
</section>
<section class="center-text">
	<div class="inner-wrapper">
		<h3 id="" class="hidebr">DO YOU KNOW THE FORCES THAT CAN PUT YOUR <br>SAVINGS AT RISK?</h3>
	</div>
</section>
<section class="animation">
	<div class="chart-left">
		<div class="" id="bodymovin"></div>
	</div>
	<div class="chart-right">
		<div class="inner-wrapper">
			<p id="animation-waypoint">A health event, inflation, or market fluctuations can impact your retirement savings. A steady source of monthly guaranteed income can help you from running out of money.</p>
		</div>
	</div>
    <div class="clear"></div>
</section>
<section>
	<div class="inner-wrapper">
		<h3 class="center-text">RISKS IN RETIREMENT</h3>
       
	</div>
</section>




<section class="carousel" >
  
  <div class="wipe-overlay"></div>
  
	<div class="slick-navigation">
	
	</div>
	<div class="carousel-1 landing-page" id="yellow-carousel">
    
    
    <!-- Test Slide 
    
    <div class="slide">
		<div class="c-left">
			<div class="c-content">
				<h4>Inflation</h4>
				<p>Prices go up, which can eat away at your purchasing power over a decades-long retirement.</p>
			</div>
		</div>
		<div class="c-right">
			<div class="slide-img" style="background-image: url(<?= get_template_directory_uri(); ?>/img/carousel-1.jpg);">
				<picture>
				  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-1-m.jpg">
					<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-1.jpg">
					<source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-1.jpg">
				  <img src="<?= get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="Carousel Image 1">
				</picture>
			</div>
		</div>
  </div>
  
   END Test Slide -->
    
		<div class="slide">
			<div class="slide-content">
				<div class="center-content">
					<h4>Inflation</h4>
					<p>Prices go up, which can eat away at your purchasing power over a decades-long retirement.</p>	
				</div>
			</div>
			<div class="img-cover"></div>
			<div class="img-overlay"></div>
			<div class="slide-img" style="background-image: url(<?= get_template_directory_uri(); ?>/img/carousel-1.jpg);">
				<picture>
				  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-1-m.jpg">
					<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-1.jpg">
					<source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-1.jpg">
				  <img src="<?= get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="Carousel Image 1">
				</picture>
			</div>
			
    <div class="clear"></div>
		</div>
    
		<div class="slide">
			<div class="slide-content">
				<div class="center-content">
					<h4>MARKET FLUCTUATIONS</h4>
					<p>If the market moves down too much, you may need more time to recover. Diversifying can help protect your future you.</p>	
				</div>
				
			</div>
			<div class="img-cover"></div>
			<div class="img-overlay"></div>
			<div class="slide-img" style="background-image: url(<?= get_template_directory_uri(); ?>/img/carousel-2.jpg);">
				<picture>
				  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-2-m.jpg">
					<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-2.jpg">
					<source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-2.jpg">
				  <img src="<?= get_template_directory_uri(); ?>/img/carousel-2.jpg" alt="Carousel Image 2">
				</picture>
			</div>
			
            <div class="clear"></div>
		</div>
    
		<div class="slide">
			<div class="slide-content">
				<div class="center-content">
					<h4>SEQUENCE OF RETURNS</h4>
					<p>Finishing with confidence is just as important as beginning with confidence. The sequence of positive and negative annual returns, when you’re withdrawing and not adding, may impact how long your savings will last.</p>
				</div>
			</div>
			<div class="img-cover"></div>
			<div class="img-overlay"></div>
			<div class="slide-img" style="background-image: url(<?= get_template_directory_uri(); ?>/img/carousel-3.jpg);">
				<picture>
				  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-3-m.jpg">
					<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-3.jpg">
					<source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-3.jpg">
				  <img src="<?= get_template_directory_uri(); ?>/img/carousel-3.jpg" alt="Carousel Image 3">
				</picture>
			</div>
			
            <div class="clear"></div>
		</div>
    
		<div class="slide">
			<div class="slide-content">
				<div class="center-content">
					<h4>INCOME GAP</h4>
					<p>What will you have available to spend? Your income in retirement may not meet your vision. This is the income gap risk.</p>	
				</div>
			</div>
			<div class="img-cover"></div>
			<div class="img-overlay"></div>
			<div class="slide-img" style="background-image: url(<?= get_template_directory_uri(); ?>/img/carousel-4.jpg);">
				<picture>
				  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-4-m.jpg">
					<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-4.jpg">
					<source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-4.jpg">
				  <img src="<?= get_template_directory_uri(); ?>/img/carousel-4.jpg" alt="Carousel Image 4">
				</picture>
			</div>
			
            <div class="clear"></div>
		</div>
    
		<div class="slide">
			<div class="slide-content">
				<div class="center-content">
					<h4>OUTLIVING YOUR SAVINGS</h4>
					<p>People are living longer and longer (and longer!). Even if you save and invest well, you can run out of cash in retirement without the proper plans in place.</p>	
				</div>
			</div>
			<div class="img-cover"></div>
			<div class="img-overlay"></div>
			<div class="slide-img"  style="background-image: url(<?= get_template_directory_uri(); ?>/img/carousel-5.jpg);">
				<picture>
				  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-5-m.jpg">
					<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-5.jpg">
					<source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/carousel-5.jpg">
				  <img src="<?= get_template_directory_uri(); ?>/img/carousel-5.jpg" alt="Carousel Image 5">
				</picture>
			</div>
            <div class="clear"></div>
		</div>
		
	</div>
    <div class="bg-scroll bg-img"></div>
</section>
<section>
	<div class="inner-wrapper">
		<h3 class="center-text">Cheers to Your Future!</h3>
	</div>
</section>
<section class="resources-link center-text">
	<picture>
	  <source media="(max-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/img/bg-resources-link-sm.jpg">
		<source media="(max-width: 900px)" srcset="<?= get_template_directory_uri(); ?>/img/bg-resources-link-m.jpg">
	  <source media="(min-width: 901px)" srcset="<?= get_template_directory_uri(); ?>/img/bg-resources-link-m.jpg">
	  <img src="<?= get_template_directory_uri(); ?>/img/bg-resources-link-m.jpg" alt="Alt Text">
	</picture>
		<div class="hero-content"><p>As you discover more about your retirement reality, there are resources to empower you along the way.</p><br>
		<a href="<?= home_url('/retirement-resources?utm_campaign=retirement_experience&utm_source=retirement-experience'); ?>" class="btn btn-blue">View Resources</a></div>
	
</section>
<section class="camera-hero center-text bg-img">
    <div class="hero-content">
        <div class="image-banner">
            <div class="inner-wrapper">
                <h3>MakE Your Future a Reality</h3>
            </div>

        </div>
        <div class="image-caption">
            <p>
            	Speak with your advisor about planning for your retirement.<br><br>
				<strong>YOU HAVE A VISION.</strong><br>
				<strong>NOW, MAKE IT A REALITY.</strong><br><br>
            </p>
                <?php if (is_page('my-retirement-my-reality')) : ?>
                	<a href="<?= home_url('/find-a-rep?utm_campaign=retirement_experience&utm_source=retirement-experience'); ?>" class="btn btn-blue">Find an Advisor</a>
				<?php endif; ?>
        </div>
    </div>
</section>
<section class="disclaimer-footer">
	<div class="inner-wrapper">
		<h3 class="disclaimer">Disclosure</h3>
		<p class="disclaimer">*The Guardian Study of Financial and Emotional Confidence, 2016.<br>
**Annuity guarantees are backed exclusively by the strength and claims-paying ability of the issuing insurance company.<br>
***While the primary purpose of life insurance is death benefit protection, it is important to understand the advantages that cash value accumulation can provide to clients, including supplemental income during retirement.<br><br>
This material is intended for general public use. By providing this material, neither The Guardian Life Insurance Company of America nor any of its affiliates (“Guardian") are undertaking to provide legal, tax or investment advice for any specific individual or situation, or to otherwise act in a fiduciary capacity. Please contact your tax, investment or legal advisor for guidance and information specific to your individual situation. Guardian is not responsible for the consequences of any decisions or actions taken in reliance upon or as a result of the information provided by this material.<br><br>

2018-54083 Exp. 04/20

</p>
	</div>
</section>


<?php get_footer(); ?>