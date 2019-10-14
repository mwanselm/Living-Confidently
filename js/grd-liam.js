document.documentElement.setAttribute("data-agent", navigator.userAgent);


jQuery.noConflict();
jQuery(document).ready(function ($) {


	// Custom close handler for the Feranmi Video Modal
	// $(document).on('click', '#feranmi-video .close-modal', function(e) {
	// 	e.preventDefault();
	// 	$.modal.close();
	// });
	
	$('.answer-buttons .btn').click(function () {
		$(".blur").addClass("blurry");
		$('.answer-buttons').fadeOut();
//		$('.answer .next-button').fadeIn(1800);
	});
	$('.next-button .btn').click(function () {
		$(".blur").removeClass("blurry");
		$('.answer-buttons').fadeIn();
//		$(this).fadeOut();
	});
	
//	Set 1
	$('#btn-1').click(function () {
		$("#answer-1").fadeIn(1400);
	});
	$('#btn-2').click(function () {
		$("#answer-2").fadeIn(1400);
	});
	$('#set-1 .answer-buttons .btn').click(function () {
		$('#set-1 .answer .next-button').fadeIn(1800);
		
	});
	$('#set-1 .next-button .btn').click(function () {
		$('#set-1').fadeOut();
		$('#set-2').fadeIn();
		$('#liam-interractive .question').text("You’re planning a quick road trip out of town for the weekend. Which route do you take?");
		$(this).fadeOut();
		$('#dot-2').addClass('active');
	});
	//	Set 2
	$('#btn-3').click(function () {
		$("#answer-3").fadeIn(1400);
	});
	$('#btn-4').click(function () {
		$("#answer-4").fadeIn(1400);
	});
	$('#set-2 .answer-buttons .btn').click(function () {
		$('#set-2 .answer .next-button').fadeIn(1800);
	});
	$('#set-2 .next-button .btn').click(function () {
		$('#set-2').fadeOut();
		$('#set-3').fadeIn();
		$('#liam-interractive .question').text("You see that the weather is cloudy for the day. Do you still use sunscreen?");
		$('#dot-3').addClass('active');
	});
	//	Set 3
	$('#btn-5').click(function () {
		$("#answer-5").fadeIn(1400);
	});
	$('#btn-6').click(function () {
		$("#answer-6").fadeIn(1400);
	});
	$('#set-3 .answer-buttons .btn').click(function () {
		$('#set-3 .answer .next-button').fadeIn(1800);
	});	$('#set-3 .next-button .btn').click(function () {
		$('#set-3').fadeOut();
		$('#set-4').fadeIn();
		$('#dot-4').addClass('active');
	});
	
	
//	IE 11
	var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
//	alert(isIE11);
	if (isIE11) {
        $('.answer-buttons .btn').click(function () {
			$("svg.blur-ie").fadeIn();
		});
		
		$('.next-button .btn').click(function () {
			$("svg.blur-ie").fadeOut();
		});
    }
	
	var waypoint = new Waypoint({
		element: document.getElementById('liam-icon-1'),
		handler: function (direction) {

			$('#liam-icon-1').addClass('fadeInUp');
		},
		offset: '90%'
	})


	var waypoint = new Waypoint({
		element: document.getElementById('liam-icon-2'),
		handler: function (direction) {

			$('#liam-icon-2').addClass('fadeInUp');
		},
		offset: '90%'
	})


	var waypoint = new Waypoint({
		element: document.getElementById('liam-icon-3'),
		handler: function (direction) {

			$('#liam-icon-3').addClass('fadeInUp');
		},
		offset: '90%'
	})

	var waypoint = new Waypoint({
		element: document.getElementById('liam-meter-1'),
		handler: function (direction) {

			$('#liam-meter-1 .meter-box').addClass('fadeInUp');
		},
		offset: '50%'
	})

	var waypoint = new Waypoint({
		element: document.getElementById('liam-meter-2'),
		handler: function (direction) {

			$('#liam-meter-2 .meter-box').addClass('fadeInUp');
		},
		offset: '90%'
	})
	
	var waypoint = new Waypoint({
		element: document.getElementById('liam-easel-animation'),
		handler: function (direction) {

			$('#liam-easel-animation').addClass('fadeInUp');
		},
		offset: '90%'
	})
	
	var waypoint = new Waypoint({
		element: document.getElementById('liam-icons-2'),
		handler: function (direction) {

			$('#liam-icons-2 .icon').addClass('fadeInUp');
		},
		offset: '90%'
	})
	 
//	 var waypoint = new Waypoint({
//	 	element: document.getElementById('waypoint'),
//	 	handler: function (direction) {
//	 		console.log('Scrolled to waypoint!')
//	 	}
//	 })
	
	
	//	Meter 1
	var animMeter1;
	var elemMeter1 = document.getElementById('meter-1')
	var animDataMeter1 = {
		container: elemMeter1,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/liam/traditional_mix.json',
		name: 'Meter-1',
	};
	animMeter1 = bodymovin.loadAnimation(animDataMeter1);


	var waypoint = new Waypoint({
		element: document.getElementById('meter-1'),
		handler: function (direction) {
			animMeter1.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});
	
	//	Meter 2
	var animMeter2;
	var elemMeter2 = document.getElementById('meter-2')
	var animDataMeter2 = {
		container: elemMeter2,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/liam/whole_life_mix.json',
		name: 'Meter-2',
	};
	animMeter2 = bodymovin.loadAnimation(animDataMeter2);



	var waypoint = new Waypoint({
		element: document.getElementById('meter-2'),
		handler: function (direction) {
			animMeter2.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});
	
	//	Easel
	var animEasel;
	var elemEasel = document.getElementById('liam-easel-animation')
	var animDataEasel = {
		container: elemEasel,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/liam/R-and-R_chart.json',
		name: 'Easel',
	};
	animEasel = bodymovin.loadAnimation(animDataEasel);



	var waypoint = new Waypoint({
		element: document.getElementById('liam-easel-animation'),
		handler: function (direction) {
			animEasel.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});
	
		// Custom close handler for the Feranmi Video Modal
	$(document).on('click', '#benefits-video .close-modal', function(e) {
		e.preventDefault();
		$.modal.close();
	});
	
});