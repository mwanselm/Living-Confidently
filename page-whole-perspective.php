<?php /* Template Name: Whole Perspective */ ?>
<?php get_header();
$_SESSION['prev_page_dr'] = $_SERVER['REQUEST_URI'];
?>

<section id="liam-hero">
		<picture>
			<source media="(max-width: 400px)" srcset="<?= get_template_directory_uri(); ?>/img/liam-hero-m.jpg">
			<source media="(max-width: 768px)" srcset="<?= get_template_directory_uri(); ?>/img/liam-hero-t.jpg">
			<source media="(min-width: 769px)" srcset="<?= get_template_directory_uri(); ?>/img/liam-hero-sm.jpg" );>
			<source media="(min-width: 1025px)" srcset="<?= get_template_directory_uri(); ?>/img/liam-hero-l.jpg" );>
			<img src="<?= get_template_directory_uri(); ?>/img/liam-hero-l.jpg" alt="Life Insurance Awareness Month Hero Image">
		</picture>
		<div class="hero-copy">
			<h2>The Whole Perspective</h2>
			<p id="icons-1">How often do you think about what life insurance can really do for you? If you're like most Americans, it's probably not very often. At its core, whole life insurance offers a way to protect your family upon your passing, through its death benefit.<sup>1</sup>
				<br>
				<br> However, when we take in the whole perspective, whole life insurance has many additional benefits such as a cash value component that grows over time, riders that provide additional protection, and the ability to pay additional premium to grow the cash value quicker.<sup>2</sup> </p>
		</div>
	</section>
	<section id="liam-icons-1" class="liam-icons">
		<div class="icons">
			<div class="animated icon" id="liam-icon-1">
				<svg width="228px" height="228px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168 168"><title>liam-icon-1</title><g id="820ad50d-87a7-4746-9484-00dded388c13" data-name="Layer 2"><g id="364fd236-fd32-41bd-87ec-1bdebf499c95" data-name="Layer 1"><g id="0d612959-f0b0-4bd3-821f-5e2fba7c93a8" data-name="Page-1"><g id="0102beeb-5a8b-42c0-8a52-cc82f7b34311" data-name="LIAM-Small-Desktop"><g id="812ce350-7f27-4c9e-a44d-804ed40f152c" data-name="Group-2"><circle id="1c8588eb-a56f-4860-94fb-4e58cf2fb3d5" data-name="Oval-Copy-3" cx="84" cy="84" r="84" fill="#5fa14e"/><g id="e4e1f3af-ce53-4281-8f60-a55275d3c63a" data-name="Group"><path id="484b4ff8-bb21-4e3f-bd74-ab88a8cacd88" data-name="Fill-6" d="M80.71,89.42h.15a2,2,0,0,0,2-1.8,2.36,2.36,0,0,0-.46-1.47A1.43,1.43,0,0,0,81,85.49a1.93,1.93,0,0,0-2.12,1.8,2.4,2.4,0,0,0,.45,1.47,2.17,2.17,0,0,0,1.37.66" fill="#fff"/><path id="87a6d0fb-5183-494c-9d08-d855c4773f06" data-name="Fill-8" d="M91.37,89.42a2.07,2.07,0,0,0-1.45.63,2,2,0,0,0,.17,2.84,1.85,1.85,0,0,0,1.28.47,2.06,2.06,0,0,0,1.44-.63,2,2,0,0,0-.16-2.84,3,3,0,0,0-1.28-.47" fill="#fff"/><path id="6ea73d02-e17e-420d-af40-11d231b449d9" data-name="Fill-10" d="M97.85,102.56h.47a2.1,2.1,0,0,0,1.57-2.37A1.88,1.88,0,0,0,98,98.62h-.47a2.43,2.43,0,0,0-1.25.94,2.65,2.65,0,0,0-.31,1.58,2,2,0,0,0,1.88,1.42" fill="#fff"/><path id="54b8a9ad-ae61-4dc8-aad1-effeb6dd7313" data-name="Fill-12" d="M98.71,110.6a1.42,1.42,0,0,0-.77-.15,2,2,0,0,0-1.86,1.21,2.62,2.62,0,0,0,0,1.52,1.88,1.88,0,0,0,1.08,1.06,1.45,1.45,0,0,0,.78.15,2,2,0,0,0,1.85-1.21,2.47,2.47,0,0,0,0-1.52c-.15-.46-.62-.76-1.08-1.06" fill="#fff"/><path id="99dafadd-cee7-453d-ab5f-7790cf24816f" data-name="Fill-14" d="M91.37,119.65a2.29,2.29,0,0,0-1,.3,1.9,1.9,0,0,0-1,1.21,2.39,2.39,0,0,0,.16,1.52,1.84,1.84,0,0,0,1.75.91,2.34,2.34,0,0,0,.95-.3,1.91,1.91,0,0,0,1-1.22,2.36,2.36,0,0,0-.16-1.51,2.76,2.76,0,0,0-1.74-.91" fill="#fff"/><path id="895711f3-c974-4401-b87e-c0d1ff56c03f" data-name="Fill-16" d="M81.08,122.3A1.93,1.93,0,0,0,78.89,124a2.14,2.14,0,0,0,.47,1.41,3.34,3.34,0,0,0,1.25.79h.16a2.18,2.18,0,0,0,2-1.73,1.94,1.94,0,0,0-1.73-2.19" fill="#fff"/><path id="192a365c-99fd-4773-8290-b62e40a82ffa" data-name="Fill-18" d="M69.06,118.33a2.09,2.09,0,0,0-1.46.63,2,2,0,0,0,.16,2.84,1.85,1.85,0,0,0,1.3.48,2.13,2.13,0,0,0,1.46-.63,2.21,2.21,0,0,0,.48-1.43,2.73,2.73,0,0,0-.65-1.41,3.1,3.1,0,0,0-1.29-.48" fill="#fff"/><path id="76b77b14-adcf-43c6-ae06-f3985b388987" data-name="Fill-20" d="M62.07,109.2a2,2,0,0,0-1.55,2.33,1.84,1.84,0,0,0,1.87,1.55h.46a2,2,0,0,0,1.56-2.33,2,2,0,0,0-2.34-1.55" fill="#fff"/><path id="8641bd6a-7261-4c76-9e7b-bf6430e493d6" data-name="Fill-22" d="M63.22,97.46a1.43,1.43,0,0,0-.79-.16,2,2,0,0,0-1.75,1.11,1.8,1.8,0,0,0,0,1.57,1.87,1.87,0,0,0,1.11,1.11,1.44,1.44,0,0,0,.8.16,2,2,0,0,0,1.75-1.11,2.33,2.33,0,0,0-1.12-2.68" fill="#fff"/><path id="48a2f0a4-a207-4b13-8aad-dee59768a2bf" data-name="Fill-24" d="M70.35,88.1a2.13,2.13,0,0,0-.94.31,1.84,1.84,0,0,0-.93,1.21,1.75,1.75,0,0,0,.15,1.52,1.82,1.82,0,0,0,1.72.91,2.27,2.27,0,0,0,.93-.31,1.84,1.84,0,0,0,.93-1.21A1.75,1.75,0,0,0,72.06,89a2,2,0,0,0-1.71-.91" fill="#fff"/><path id="869c9726-0018-4b53-8d43-41a201debc31" data-name="Fill-26" d="M37.05,63.35a4.2,4.2,0,0,0,2.47,2.45,10,10,0,0,0,2.47.71,5.76,5.76,0,0,0,2.3,1.4,14.87,14.87,0,0,0,4.77.7,5,5,0,0,0,4.07,1.93h1.06a4.06,4.06,0,0,0,1.41-.35,18.81,18.81,0,0,1,2.12-.52,2.74,2.74,0,0,0,1.41-1.06,2,2,0,0,0,.18-1.75A2.51,2.51,0,0,0,57,65.28a1.08,1.08,0,0,0-.7.17c-.71.18-1.24.35-2,.53-.35,0-.53.18-.88.18H52.6a2.68,2.68,0,0,0-.89-1.23A3,3,0,0,0,50,64.4h-.89a9.44,9.44,0,0,1-3.36-.53v-.7a3.27,3.27,0,0,0-1.41-1.23A71.27,71.27,0,0,0,60,54.57c7.6-5.09,23-10.53,23.5-10.88,6.71-2.46,11.66-3,17.14-1.93a45.71,45.71,0,0,1,11.84,4.56,67,67,0,0,0,6.18,2.81c.89.35,9.72,3.69,9.72,3.69a1.47,1.47,0,0,0,1.94-1.41l-.17-3.16-.36-1.4a4.86,4.86,0,0,0,1.6-.18c.17.35.53.7.7,1.06a60.28,60.28,0,0,1,7.07,14.92,45.41,45.41,0,0,1,1.24,4.56c.17.7.35,1.4.53,2.28s.35,1.93.53,2.81c-3.18.18-6.36.53-9.54.7l-.18-2.28-.18-2.28-4.59.35c-1.59.17-4.24.53-5.83.88a19.27,19.27,0,0,1-7.6-.53c-1.77-.53-3.36-1-5.3-1.76a32.13,32.13,0,0,0-3.71-1.22,42.62,42.62,0,0,0-4.42-1.41H100a55.56,55.56,0,0,0-12.37-3.33,12.22,12.22,0,0,0-2.47-.18,22.37,22.37,0,0,0-4.77,0l-5.3.53c-1.77.17-3.36.52-5.3.7h-.89a17.46,17.46,0,0,1-4.42-.18.17.17,0,0,1-.17-.17v-.53a4.79,4.79,0,0,1,3-1.23h.18c.35-.17.71-.17,1.06-.35a64.69,64.69,0,0,1,15-2.63c1.94-.18,3.71-.18,5.3-.18h1.24a5.77,5.77,0,0,0,1.76,0,2.12,2.12,0,0,0,1.59-.87,2.79,2.79,0,0,0,.53-1.58,2.19,2.19,0,0,0-2.29-2.11H89.17c-1.76,0-3.53,0-6,.18a73.65,73.65,0,0,0-16.08,2.8c-.36.18-.71.18-1.06.36-2,.52-4.25,1.05-5.66,3.15a5,5,0,0,0-.53,4.74,4.46,4.46,0,0,0,3.36,3,16.39,16.39,0,0,0,5.83.35c.35,0,.88,0,1.06-.18a53.42,53.42,0,0,0,5.3-.7h.18l4.94-.53a14.9,14.9,0,0,1,3.89,0c.71,0,1.42.18,2.12.18A56.57,56.57,0,0,1,98,69.14h.18c1.41.53,3,1,4.59,1.58A25.27,25.27,0,0,1,106.14,72a51.81,51.81,0,0,0,5.65,1.75,21,21,0,0,0,12.37-.17c.88,0,1.59-.18,2.47-.18a5.86,5.86,0,0,0,.18,1.76c.18,1.75,1.06,2.63,3,2.46l14.85-1.06c.35,0,.7-.17,1.23-.17-.35-2.64-.7-5.09-1.23-7.73-.36-1.58-.71-3.33-1.06-4.91a69.32,69.32,0,0,0-9.54-20.36c-.18-.18-.18-.35-.36-.53a1.77,1.77,0,0,0-1.23-.7,45.75,45.75,0,0,0-5,.35A2.84,2.84,0,0,0,125,45.27v1.4a37.75,37.75,0,0,1-10.6-4.39,40.73,40.73,0,0,0-10.78-4.38L101,37.37a32.84,32.84,0,0,0-5.83-.53A41.32,41.32,0,0,0,81.4,39.48c-.18,0-16.26,5.79-24.56,11.4a78.5,78.5,0,0,1-18,7.9,3.65,3.65,0,0,0-1.76,1.41,6.25,6.25,0,0,0,0,3.16" fill="#fff"/><path id="af378323-5a82-42c8-8f5f-2769f3ef48cb" data-name="Fill-3" d="M80.46,129.75a22.78,22.78,0,0,1-16.54-7,23.65,23.65,0,0,1-6.79-16.55A23.41,23.41,0,0,1,80.46,83.08a22.36,22.36,0,0,1,16.36,7,23.27,23.27,0,0,1-16.36,39.7M100,87.09a27.63,27.63,0,1,0-19.84,47h.17a27.57,27.57,0,0,0,27.5-27.52A26.51,26.51,0,0,0,100,87.09" fill="#fff"/></g></g></g></g></g></g></svg>
				<h3>Protection</h3>
				<p>Whole life is an essential part of planning for the unexpected, by covering you and your loved ones for your entire lifetime.</p>
			</div><div class="animated icon" id="liam-icon-2">
				<svg width="228px" height="228px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228 228"><title>liam-icon-2</title><g id="233c58b2-c62c-46bf-89fb-d6efb53f568c" data-name="Layer 2"><g id="4fb250ee-b91a-48ce-9400-214dd8ed04fb" data-name="Layer 1"><g id="7ba5b13b-8a37-4af7-9f34-c88dba419bc7" data-name="Page-1"><g id="3a7e272f-f021-4ddb-be87-dccb14f6d536" data-name="LIAM-Desktop-01-Copy-(1)"><g id="ec76bdac-0366-4e01-aa92-fd6445994f6a" data-name="Group"><circle id="7c91b788-239a-4ba2-b0ba-bc3a20ffb32a" data-name="Oval-Copy-3" cx="114" cy="114" r="114" fill="#5fa14e"/><path id="8eff462f-9810-42e3-a987-51be09b8ef8f" data-name="Fill-1" d="M179.48,175.48H138.84V115.12a24.75,24.75,0,0,0,40.64,0Zm-131-15.14a24.75,24.75,0,0,0,40.64,0v15.14H48.52Zm20.32-34.6a20.35,20.35,0,1,1-20.32,20.35A20.36,20.36,0,0,1,68.84,125.74Zm24.84,12a24.75,24.75,0,0,0,40.64,0v37.75H93.68ZM114,103.13a20.35,20.35,0,1,1-20.32,20.35A20.36,20.36,0,0,1,114,103.13Zm45.16-22.61a20.35,20.35,0,1,1-20.32,20.35A20.36,20.36,0,0,1,159.16,80.52Zm0-4.52a24.89,24.89,0,0,0-24.84,24.87v8.35a24.81,24.81,0,0,0-45.16,14.26v8.35A24.81,24.81,0,0,0,44,146.09V180H184V100.87A24.88,24.88,0,0,0,159.16,76Z" fill="#fff"/><polygon id="5135c9e6-41c3-4a50-a561-fb27379a8c25" data-name="Fill-9" points="50 101.04 52.15 105 158.22 47.97 153.1 56.89 157.03 59.12 168 40 146.02 40 146.02 44.5 155.16 44.5 50 101.04" fill="#fff"/><path id="542b1cad-0eb0-4e29-9651-90de827ce7e1" data-name="Fill-11" d="M89,58.5A4.51,4.51,0,1,1,84.44,63,4.52,4.52,0,0,1,89,58.5ZM56.14,83,82.26,69a9,9,0,1,0-2.34-6,9.42,9.42,0,0,0,.24,2L54,79Z" fill="#fff"/><polygon id="7f555321-47a9-418c-9319-4b5e63e8c78a" data-name="Fill-13" points="45 83.15 49.84 81 52 84.85 47.16 87 45 83.15" fill="#fff"/><path id="01869d26-1244-4f19-9400-021c8886c29c" data-name="Fill-15" d="M121,78.5A4.51,4.51,0,1,1,116.44,83,4.52,4.52,0,0,1,121,78.5ZM88.14,103l26.12-14a9,9,0,1,0-2.34-6,9.42,9.42,0,0,0,.24,2L86,99Z" fill="#fff"/><polygon id="c6d9d25e-8f1e-4d61-b76a-6e335b86c442" data-name="Fill-17" points="77 103.15 81.84 101 84 104.85 79.16 107 77 103.15" fill="#fff"/></g></g></g></g></g></svg>
				
				<h3>Growth</h3>
				<p>Whole life’s cash value continues to grow no matter what happens in the stock market. This cash value, that grows tax-deferred,<sup>3</sup> is the amount accumulated over time, through the premium payments you must make and the dividends paid into your policy.<sup>4</sup></p>
			</div><div class="animated icon" id="liam-icon-3">
				<svg width="228px" height="228px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228 228"><title>liam-icon-3</title><g id="56d3027e-8fb7-4c9c-8af6-04a0ad977269" data-name="Layer 2"><g id="7d832ca0-16dd-4a30-a6c8-6ef820a255d2" data-name="Layer 1"><g id="9469edf5-043a-47d4-a074-13d545d20cdf" data-name="Page-1"><g id="7bd5b05a-cbf1-48c6-ba17-dac6ceac243b" data-name="LIAM-Desktop-01-Copy-(1)"><g id="75c6ed8c-b838-46ea-86c2-67a4c3e3dc72" data-name="Group"><circle id="3e957dd5-9cac-43de-beae-d1ef647089c8" data-name="Oval-Copy-3" cx="114" cy="114" r="114" fill="#5fa14e"/><path id="2f75b7ca-5952-4bff-90c8-61530c3bf171" data-name="Fill-1" d="M155,130.89V144h5V130.89a7.66,7.66,0,0,0-7.66-7.7H116.5V113h-6v10.19H74.66a7.66,7.66,0,0,0-7.66,7.7V144h5.18V130.89a2.39,2.39,0,0,1,2.48-2.49h36V144h6V128.4h36a2.49,2.49,0,0,1,2.28,2.49" fill="#fff"/><path id="3a9850b8-6c5c-4074-ad4e-069cca965fc3" data-name="Fill-3" d="M163.79,171.73H151.21a8.15,8.15,0,0,1-8.05-8.23,8.29,8.29,0,0,1,8.05-8.23h12.58a8.23,8.23,0,0,1,0,16.46M173.08,154a13,13,0,0,0-9.29-4H151.21A13.45,13.45,0,0,0,138,163.5a12.82,12.82,0,0,0,3.92,9.49,13,13,0,0,0,9.29,4h12.58a13.49,13.49,0,0,0,9.29-23" fill="#fff"/><path id="7b722d9a-3d83-4647-952b-68276c55b108" data-name="Fill-5" d="M83.84,170.46a1.35,1.35,0,0,1-1.24,1.27H56.4a1.35,1.35,0,0,1-1.24-1.27V156.54a1.35,1.35,0,0,1,1.24-1.27H82.6a1.35,1.35,0,0,1,1.24,1.27ZM82.6,150H56.4a6.5,6.5,0,0,0-6.4,6.54v13.92A6.51,6.51,0,0,0,56.4,177H82.6a6.51,6.51,0,0,0,6.4-6.54V156.54A6.5,6.5,0,0,0,82.6,150Z" fill="#fff"/><path id="24a7cb62-8f1d-4e1e-874b-a364bafab654" data-name="Fill-7" d="M113.5,172.72a9.54,9.54,0,0,1-9.39-9.72,9.4,9.4,0,1,1,9.39,9.72m0-24.72c-8,0-14.5,6.76-14.5,15s6.54,15,14.5,15,14.5-6.76,14.5-15-6.54-15-14.5-15" fill="#fff"/><path id="2f4e10f9-f5dd-492f-ad06-79ff8627dac3" data-name="Fill-14" d="M73.35,59.07a2,2,0,0,1,1.44-1.87h.41l75.9.21a2.12,2.12,0,0,1,2.06,2.08v42.65a2.21,2.21,0,0,1-.62,1.45,1.84,1.84,0,0,1-1.44.63L75.2,104a1.85,1.85,0,0,1-1.85-1.87Zm82.9-4.78a6.64,6.64,0,0,0-4.94-2.08l-74-.21H75.2a7.35,7.35,0,0,0-4.11,1.25c-.42.41-.83.62-1.24,1A7,7,0,0,0,68,59.07v42.65a7,7,0,0,0,7,7.07l75.09.21h1.44a7.11,7.11,0,0,0,4.32-2.08,7.74,7.74,0,0,0,2-5V59.28A5.58,5.58,0,0,0,156.25,54.29Z" fill="#fff"/></g></g></g></g></g></svg>
				<h3>Diversification</h3>
				<p>The presence of cash value helps make whole life insurance a strong asset for diversifying your financial portfolio.</p>
			</div>
		</div>
	</section>
	<section class="liam-copy" id="liam-copy-1">
		<p>When we view whole life from a fresh angle as a way to diversify your financial portfolio, it does something unique. Whole life can help reduce overall portfolio risk and protect portfolio performance, so you may be both better protected and better rewarded.</p>
		
	</section>
	<section class="liam-meter" id="liam-meter-1">
		<h2 class="light-heading">Here's what it<br> looks like.</h2>
		<div class="meter-box animated">
			<div class="meter-copy">
				<h3>Traditional Mix</h3>
				<p>This traditional mix of investments seeks to balance the volatility that comes with market exposure with a mix of bonds and stocks that helps offset inflation, the continual rise in your cost of living. You want the return on your investments to be greater than inflation to maintain and grow the value of your money.</p>
			</div><div class="meter-animation" id="meter-1"></div>
			<div class="clear"></div>
		</div>
	</section>
	<section class="liam-meter" id="liam-meter-2">
		<div class="meter-box animated">
			<div class="meter-copy">
				<h3>Whole Life Mix</h3>
				<p>When a whole life policy’s cash value is added to the portfolio mix, we can gain a new perspective as both risk and reward can be affected for the better. Whole life is insulated from market fluctuations because it’s not affected by day-to-day volatility, unlike stocks and bonds, making the addition of whole life a great way to broaden your financial outlook.</p>
			</div><div class="meter-animation" id="meter-2"></div>
			<div class="clear"></div>
		</div>
	</section>
	<section id="liam-easel">
<!--		<h3 class="light-heading">And here's how it stacks up.</h3>-->
		<p>What about the reward? When you have a traditional portfolio mix and add whole life with cash value (CV), you gain many additional benefits: the steady growth of whole life’s cash value; a guaranteed death benefit for life; unique, built-in tax advantages; optional riders to protect from disability or illness; and the ability to add additional premium to help grow the policy’s cash value quicker.<sup>5</sup> It also protects its cash value from creditors, depending on your state.<sup>6</sup></p>
		<div class="animated" id="liam-easel-animation"></div>
		
		<h3 class="light-heading">Risk vs. Reward</h3>
		<div id="liam-copy-2" class="liam-copy">
			<p>Market risk leaves you exposed to market ups and downs, which is why many people add bonds to their portfolio to reduce risk, even though it can sacrifice upside potential. Meanwhile, a portfolio consisting of entirely bonds typically has a low rate of return, leaving you vulnerable to inflation.<br><br>But what if you could have less risk and still get more reward? There are few times in life when that’s possible — using whole life in your financial portfolio may be one of them.</p>

		</div>
	</section>

	<section id="liam-interractive-intro">
		<p>How do you balance risk and reward on a daily basis? <br>Let's find out. Choose your answer that best fits. </p>
	</section>
<!--	Interractive Element-->
	<section id="liam-interractive">
		<hr>
		<ul id="liam-dots">
			<li id="dot-1" class="active"></li>
			<li id="dot-2"></li>
			<li id="dot-3"></li>
			<li id="dot-4"></li>
		</ul>
		<p class="question">On your drive to work, you notice the low-gas warning. What do you do?</p>
		
		<div class="answer-container blur-wrapper">
			
			<div id="set-1" class="sets">
				<div class="cover blur" style="background-image: url('<?= get_template_directory_uri(); ?>/img/liam-int-1.jpg')"></div>
				
					<svg class="blur-ie" style="display: none;">
						<defs>
							<filter id="blur">
								<feGaussianBlur stdDeviation="12" />
							</filter>
						</defs>
						<image xlink:href="<?= get_template_directory_uri(); ?>/img/liam-int-1-dark.jpg" width="916" height="524" filter="url(#blur)"></image>
					</svg>
					<div class="svg-bg blur-ie"></div>
				
				<div class="answer-buttons">
					<a class="btn btn-blue" href="javascript:;" id="btn-1">Stop for gas</a>

					<a class="btn btn-blue" href="javascript:;" id="btn-2">Get it later</a>
				</div>
				<div class="answer">
					<p id="answer-1" class="answer-1">You prefer to play it safe, eliminating the risk of running out of gas. But, you also may be late for work.</p>
					<p id="answer-2" class="answer-2">You risk running out of gas on your way to work, but at least you made it on time!</p>
					<div class="next-button">
						<a class="btn btn-blue" href="javascript:;">Next</a>
					</div>
					
				</div>
			</div>
			
			<div id="set-2" class="sets">
				<div class="cover blur" style="background-image: url('<?= get_template_directory_uri(); ?>/img/liam-int-2.jpg')"></div>
				
				
				<svg class="blur-ie" style="display: none;">
						<defs>
							<filter id="blur">
								<feGaussianBlur stdDeviation="12" />
							</filter>
						</defs>
						<image xlink:href="<?= get_template_directory_uri(); ?>/img/liam-int-2-dark.jpg" width="916" height="524" filter="url(#blur)"></image>
					</svg>
					<div class="svg-bg blur-ie"></div>
				
				<div class="answer-buttons">
					<a class="btn btn-blue" href="javascript:;" id="btn-3">The interstate</a>

					<a class="btn btn-blue" href="javascript:;" id="btn-4">The scenic route</a>
				</div>
				<div class="answer">
					<p id="answer-3" class="answer-1">It may be the shortest route, but there's a good chance your only view will be miles of tail lights.</p>
					<p id="answer-4" class="answer-2">The scenic route is pretty, but you have to balance it with the extra time it takes to reach your destination.</p>
					<div class="next-button">
						<a class="btn btn-blue" href="javascript:;">Next</a>
					</div>
					
				</div>
			</div>
			
			<div id="set-3" class="sets">
				<div class="cover blur" style="background-image: url('<?= get_template_directory_uri(); ?>/img/liam-int-3.jpg')"></div>
				<svg class="blur-ie" style="display: none;">
						<defs>
							<filter id="blur">
								<feGaussianBlur stdDeviation="12" />
							</filter>
						</defs>
						<image xlink:href="<?= get_template_directory_uri(); ?>/img/liam-int-3-dark.jpg" width="916" height="524" filter="url(#blur)"></image>
					</svg>
					<div class="svg-bg blur-ie"></div>
				
				<div class="answer-buttons">
					<a class="btn btn-blue" href="javascript:;" id="btn-5">Yes</a>

					<a class="btn btn-blue" href="javascript:;" id="btn-6">No</a>
				</div>
				<div class="answer">
					<p id="answer-5" class="answer-1">You may not get a sunburn if you don't, but you know it's important to protect your skin.</p>
					<p id="answer-6" class="answer-2">You're saving your sunscreen for a beach day! Even so, you still could experience sun damage on a cloudy day.</p>
					<div class="next-button">
						<a class="btn btn-blue" href="javascript:;">Finish</a>
					</div>
					
				</div>
			</div>
			
			<div id="set-4" class="sets" style="display: none;">
				<div class="text-container">
					<p>The decisions you make every day usually have a risk and reward tradeoff, even if they're low-stakes. However, there are some rare instances when you can both lower risk and increase reward, like when you add whole life to your portfolio.</p>
					<p id="keep-reading">KEEP READING</p>
					<svg width="28px" height="13px" id="c1b7d303-2b3f-4512-af76-4a887db10289" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.71 14.06"><title>chevron-down</title><g id="2600d4e8-fafc-4281-ae2d-b68474b7d61f" data-name="Page-1"><g id="7e124f7e-09be-4a7e-8c29-dc5f0ada02be" data-name="LIAM-Desktop-01-Copy-(2)"><g id="5a2f2023-f8a5-4450-b3f9-6acfa9b70fbe" data-name="Group-5"><g id="906618da-5746-4a55-8ec7-8804e4d9509a" data-name="Group-17"><polyline id="9363e580-7189-45dd-9c81-51faea85ffb4" data-name="Path-2" points="0.35 0.35 13.35 13.35 26.35 0.35" fill="none" stroke="#fff"/></g></g></g></g></svg>
				</div>
			</div>
			
		</div>
		<hr>
	</section>
	<section class="liam-copy" id="liam-copy-3">
		<p>When actively diversifying your portfolio with whole life, the company you choose can make all the difference. Do your research and understand the financial strength,<sup>7</sup> structure and values of the company you're working with. Who you buy from matters.</p>
	</section>
	<section id="liam-video-btn">
		<h3 class="light-heading">Learn more about working with a<br> mutual company.</h3>
		<a href="#feranmi-video" rel="modal:open" class="btn btn-liam">Watch Video</a>
		<div id="feranmi-video" class="experience-modal modal" style="display: none;">
				<script src="https://fast.wistia.com/embed/medias/tjomt2k2ca.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_tjomt2k2ca videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/tjomt2k2ca/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>




			  
			</div>
		
		
	</section>
	<section class="liam-copy" id="liam-copy-4">
		<p>In addition to whole life’s guaranteed death benefit<sup>8</sup> and a more diversified portfolio, you are continually building cash value in your whole life policy. This value can be accessed for many opportunities, such as supplemental retirement income, to help fund college, or to help finance a new business, just to name a few.<sup>9</sup></p>
	</section>
	<section id="liam-icons-2" class="liam-icons">
		<div class="icons">
			<div class="icon animated">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 108"><title>liam-icon-4</title><g id="836ff8cd-c2ed-4694-b380-746703cf3645" data-name="Layer 2"><g id="ffc88efb-3b69-47cf-b99f-ea8a925f99e2" data-name="Layer 1"><g id="82f80f87-4431-4203-b8d9-c2388976a31b" data-name="Page-1"><g id="c3a25d88-b964-41e4-8def-6804552891d5" data-name="LIAM-Desktop-01-Copy-(1)"><g id="e7b22330-53eb-40b0-8146-3e7ca5940bf3" data-name="Group-13"><path id="860422f2-f89a-44af-b136-b98e4a8f3b5b" data-name="Fill-1" d="M79.24,76.27,63.76,91.53a7.59,7.59,0,0,1-5.29,2.16H7.74a2.46,2.46,0,1,1,0-4.92H55.55a7.49,7.49,0,0,0,5.29-2.16L75.29,72.37a2.8,2.8,0,0,1,2-.8,2.74,2.74,0,0,1,2,4.7ZM30.19,39C30.82,24.35,37,14.31,42.66,14.31S54.49,24.35,55.12,39ZM5.25,39c1.44-11.2,12.66-20.43,27.56-23.43C28.67,20.9,25.92,29.28,25.52,39Zm73.5,0H58.48c-.4-9.76-3.15-18.14-7.29-23.43C66.09,18.61,77.31,27.84,78.75,39ZM76.29,66.27a7.66,7.66,0,0,0-5.45,2.25L56.52,82.74a2.44,2.44,0,0,1-1.74.71H44.47V44.18H81.53A2.46,2.46,0,0,0,84,41.73c0-17-17.52-30.84-39.53-31.82V2.45a2.47,2.47,0,0,0-4.94,0V9.91C17.52,10.89,0,24.77,0,41.73a2.46,2.46,0,0,0,2.47,2.45H39.53V83.45H7.41A7.36,7.36,0,0,0,6,98l-2.55,5H2.47a2.46,2.46,0,1,0,0,4.91H4.94a2.48,2.48,0,0,0,2.21-1.36l4.26-8.46H39.53v2.46a2.46,2.46,0,0,1-2.47,2.45H34.59a2.46,2.46,0,1,0,0,4.91H49.41a2.46,2.46,0,1,0,0-4.91H46.94a2.46,2.46,0,0,1-2.47-2.45V98.18h13.2a12.49,12.49,0,0,0,2.45-.24l4.38,8.7A2.48,2.48,0,0,0,66.71,108h2.47a2.46,2.46,0,1,0,0-4.91h-1L64.67,96a12.32,12.32,0,0,0,1.73-1.42L81.74,79.35a7.65,7.65,0,0,0-5.45-13.08Z" fill="#1d3997"/></g></g></g></g></g></svg>
			</div>
			<div class="icon animated">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 108 115"><title>liam-icon-5</title><g id="0638bb28-881c-4791-b337-df943122101f" data-name="Layer 2"><g id="0858b7df-7180-469f-b1c7-e6b3d2506b3f" data-name="Layer 1"><path d="M5.36,61.11h5.41v5.38a1.79,1.79,0,0,0,1.8,1.8h1.8V97h-1.8a1.8,1.8,0,0,0-1.8,1.8v5.39H9.51a1.8,1.8,0,1,0,0,3.59H98.58a1.8,1.8,0,0,0,0-3.59H97.32V98.83a1.81,1.81,0,0,0-1.8-1.8H93.71V68.29h1.81a1.8,1.8,0,0,0,1.8-1.8V61.11h5.41a1.8,1.8,0,0,0,1.8-1.8v-6a1.77,1.77,0,0,0-.94-1.57L55.85,25.91V21.58h7.21v1.8a1.8,1.8,0,0,0,1.8,1.8H84.7a1.81,1.81,0,0,0,1.81-1.8,1.76,1.76,0,0,0-.37-1.08l-4.6-6.1,4.6-6.12a1.78,1.78,0,0,0-.37-2.51,1.88,1.88,0,0,0-1.07-.36H72.08V5.42a1.8,1.8,0,0,0-1.81-1.8H55.85V1.83A1.81,1.81,0,0,0,54.07,0h0a1.79,1.79,0,0,0-1.78,1.83V25.91L4.5,51.77a1.78,1.78,0,0,0-1,1.57v6A1.81,1.81,0,0,0,5.36,61.11ZM68.47,7.22V14.4a1.81,1.81,0,0,0,3.61,0V10.81h9l-3.25,4.3a1.83,1.83,0,0,0,0,2.16l3.25,4.31H66.67V20.07a1.78,1.78,0,0,0-.41-1.44l-.12-.13L66,18.4A1.84,1.84,0,0,0,64.59,18H55.87V7.24l0,0ZM14.37,64.7V61.11H28.79V64.7Zm10.82,3.59V97H18V68.29Zm3.6,35.93H14.37v-3.59H28.79Zm14.43-5.39v5.39H32.4V98.83A1.81,1.81,0,0,0,30.6,97H28.79V68.29H30.6a1.8,1.8,0,0,0,1.8-1.8V61.11H43.22v5.38a1.79,1.79,0,0,0,1.8,1.8h1.8V97H45A1.8,1.8,0,0,0,43.22,98.83Zm18,5.39H46.82v-3.59H61.25ZM46.82,64.7V61.11H61.25V64.7Zm10.82,3.59V97H50.43V68.29Zm18,30.54v5.39H64.86V98.83A1.81,1.81,0,0,0,63.05,97h-1.8V68.29h1.8a1.8,1.8,0,0,0,1.81-1.8V61.11H75.68v5.38a1.79,1.79,0,0,0,1.8,1.8h1.8V97h-1.8A1.8,1.8,0,0,0,75.68,98.83Zm18,5.39H79.28v-3.59H93.71ZM82.89,97V68.29H90.1V97ZM93.71,64.7H79.28V61.11H93.71ZM7.15,54.41,54,29l46.88,25.39v3.1H7.15Z" fill="#1d3997"/><path d="M54,53.92a9,9,0,1,0-9-9A9,9,0,0,0,54,53.92Zm0-14.37a5.39,5.39,0,1,1-5.41,5.39A5.38,5.38,0,0,1,54,39.55Z" fill="#1d3997"/><path d="M106.22,111.4H1.72A1.8,1.8,0,1,0,1.9,115H106.17a1.8,1.8,0,1,0,0-3.6Z" fill="#1d3997"/></g></g></svg>
			</div>
			<div class="icon animated">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 104"><title>liam-icon-6</title><g id="defc4116-32fe-4172-9eff-3df4829486ff" data-name="Layer 2"><g id="45245e00-c7b7-4f8f-848a-db014e7a13df" data-name="Layer 1"><path d="M106,37.63a3.84,3.84,0,0,0,0-.48v-.08a2.05,2.05,0,0,0-.16-.41v-.07l-11-21.1a2.23,2.23,0,0,0-2-1.2H73.26V2.23A2.23,2.23,0,0,0,71,0H34.86a2.23,2.23,0,0,0-2.23,2.23V14.29H15.3a2.24,2.24,0,0,0-1.89,1.05L.24,36.43v.08a2,2,0,0,0-.17.4v.15a2,2,0,0,0-.07.42v5.77A10.76,10.76,0,0,0,7.55,53.5v48.27A2.22,2.22,0,0,0,9.77,104H96.23a2.22,2.22,0,0,0,2.22-2.23V53.53A10.73,10.73,0,0,0,106,43.28ZM37.08,4.46H68.8V24.55H37.08ZM16.54,18.76H32.63v8A2.23,2.23,0,0,0,34.86,29H71a2.23,2.23,0,0,0,2.23-2.23v-8H91.39l8.69,16.64H6.2Zm68.05,21.1v5.33a9.07,9.07,0,1,1-18.14,0V39.86ZM62,39.86v5.31a9.07,9.07,0,1,1-18.13,0V39.86Zm-22.57,0v5.31a9.07,9.07,0,0,1-18.13,0V39.86ZM4.36,43.28V39.86H16.85v3.42a6.25,6.25,0,1,1-12.49,0ZM61.22,99.54H44.66v-27H61.22Zm32.78,0H65.68V70.27A2.23,2.23,0,0,0,63.45,68h-21a2.23,2.23,0,0,0-2.23,2.23V99.54H11.89V53.92a10.64,10.64,0,0,0,6.24-3,13.48,13.48,0,0,0,23.53,1.71,13.47,13.47,0,0,0,22.58,0,13.48,13.48,0,0,0,23.52-1.71,10.63,10.63,0,0,0,6.24,3Zm7.53-56.26a6.25,6.25,0,1,1-12.49,0V39.86h12.49ZM42.66,10.4H62.05v5.2H42.66Zm-10,58.5H20.3a2.2,2.2,0,0,0-2.2,2.21V83.59a2.2,2.2,0,0,0,2.2,2.21H32.7a2.2,2.2,0,0,0,2.2-2.21V71.11A2.2,2.2,0,0,0,32.7,68.9ZM30.5,81.38h-8V73.32h8ZM74.59,68.9a2.21,2.21,0,0,0-2.2,2.21V83.59a2.21,2.21,0,0,0,2.2,2.21H87a2.21,2.21,0,0,0,2.2-2.21V71.11A2.21,2.21,0,0,0,87,68.9ZM84.73,81.45h-8l.07-8.13,7.94.07Z" fill="#1d3997"/></g></g></svg>
			</div>
		</div>
		<p>Learn more about the many <a href="/protect-your-priorities" id="liam_wholeistic">benefits of whole life</a>, or view some <a href="/whole-life-resources" id="liam_wholeresources">helpful resources</a>.</p>
	</section>
	<section id="liam-green">
		<p>Speak with your financial professional to get the whole perspective on how whole life can help you protect your loved ones and diversify your financial portfolio.</p>
	</section>
	<section id="liam-footnotes">
	<p><strong>1.</strong> Whole life insurance is intended to provide death benefit protection for an individual’s entire life. With payment of the required guaranteed fixed premiums, you will receive a guaranteed death benefit and guaranteed cash values inside the policy.
		<br>
		<strong>2.</strong> Some whole life policies don’t have any cash values in years one or two. Whole life insurance should be considered for its long term value. Early cash value accumulation and early payment of dividends depend upon policy type and/or policy design, and cash value accumulation is offset by insurance and company expenses. Consult with your Guardian representative and refer to your whole life insurance illustration for more information about your particular life insurance policy.
		<br>
		<strong>3.</strong> Guardian, its subsidiaries, agents, and employees do not provide tax, legal, or accounting advice.
		<br>
		<strong>4.</strong> Dividends are not guaranteed and are declared annually.
		<br>
		<strong>5.</strong> Riders may incur an additional cost or premium. Rider benefits may not be available in all states.
		<br>
		<strong>6.</strong> State creditor protection for life insurance policies varies by state. Contact your state’s insurance department or consult your legal advisor regarding your individual situation.
		<br>
		<strong>7.</strong> Financial information concerning Guardian as of December 31, 2017, on a statutory basis: Admitted assets = $55.6 billion; liabilities = $48.9 billion (including $41.8 billion of reserves); and surplus = $6.7 billion.
		<br>
		<strong>8.</strong> All whole life insurance policy guarantees are subject to the timely payment of all required premiums and the claims paying ability of the issuing insurance company. Policy loans and withdrawals affect the guarantees by reducing the policy’s death benefit and cash values.<br>
		<strong>9.</strong> Policy benefits are reduced by any outstanding loan or loan interest and/or withdrawals. Dividends, if any, are affected by policy loans and loan interest. Withdrawals above the cost basis may result in taxable ordinary income. If the policy lapses, or is surrendered, any outstanding loans considered gain in the policy may be subject to ordinary income taxes. If the policy is a Modified Endowment Contract (MEC), loans are treated like withdrawals, but as gain first, subject to ordinary income taxes. If the policy owner is under 59 &frac12;, any taxable withdrawal may also be subject to a 10% federal tax penalty. 
		<br><br>
		2018-62954 Exp. 7/20
	</p>
</section>

<?php get_footer(); ?>