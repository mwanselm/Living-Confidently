function openAnimation(evt, animationName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(animationName).style.display = "block";
	evt.currentTarget.className += " active";
}



jQuery.noConflict();
jQuery(document).ready(function ($) {


//	Interactive Panel tabs
	
	$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
	
	$('#interactive .q-1').on('click', function (e) {
		$('#interactive #tabs').removeClass('question-1');
		$('#interactive #tabs').addClass('question-2');
		animBridgeOneM.play();	
		animBridgeOneD.play();	
	});

	$('#interactive .q-2').on('click', function (e) {
		$('#interactive #tabs').removeClass('question-2');
		$('#interactive #tabs').addClass('question-3');
		animBridgeTwoM.play();	
		animBridgeTwoD.play();	
	});

	$('#interactive .q-3').on('click', function (e) {
		$('#interactive #tabs').removeClass('question-3');
		$('#interactive #tabs').addClass('question-4');
		animBridgeThreeM.play();
		animBridgeThreeD.play();
	});
	
	
	
	$('#interactive .q-4').on('click', function (e) {
		$('#interactive #tabs').removeClass('question-4');
		$('#interactive #tabs').addClass('question-5');
		animBridgeLessFourM.play();	
		animBridgeMoreFourM.play();	
		animBridgeLessFourD.play();	
		animBridgeMoreFourD.play();	
//		$("#interactive .q-5 a[href='#tabs-6']").delay(6000).queue(function () {
//			$(this).trigger( "click" ).dequeue();
//		});

	});

 
	
	$('#interactive .q-5').on('click', function (e) {
		$('#interactive #tabs').removeClass('question-5');
		$('#interactive #tabs').addClass('question-6');
		animBridgeLessFiveM.play();	
		animBridgeMoreFiveM.play();	
		animBridgeLessFiveD.play();	
		animBridgeMoreFiveD.play();
	});

	
	
	$('#interactive .q-6').on('click', function (e) {
		$('#interactive #tabs').removeClass('question-6');
		$('#interactive #tabs').addClass('question-7');
		animBridgeSixM.play();	
		animBridgeSixD.play();
	});
	$('#interactive li .less').on('click', function (e) {
		$('#interactive').addClass('less-clicked');
	});
	
	
	var animBridgeZeroM;
	var elemBridgeZeroM = document.getElementById('mobile_00')
	var animDataBridgeZeroM = {
		container: elemBridgeZeroM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/00/mobile_00.json',
		name: 'Mobile-0',
	};
	animBridgeZeroM = bodymovin.loadAnimation(animDataBridgeZeroM);	
	
	var animBridgeOneM;
	var elemBridgeOneM = document.getElementById('mobile_01')
	var animDataBridgeOneM = {
		container: elemBridgeOneM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/01/mobile_01.json',
		name: 'Mobile-1',
	};
	animBridgeOneM = bodymovin.loadAnimation(animDataBridgeOneM);
	
	var animBridgeTwoM;
	var elemBridgeTwoM = document.getElementById('mobile_02')
	var animDataBridgeTwoM = {
		container: elemBridgeTwoM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/02/mobile_02.json',
		name: 'Mobile-2',
	};
	animBridgeTwoM = bodymovin.loadAnimation(animDataBridgeTwoM);
	
	var animBridgeThreeM;
	var elemBridgeThreeM = document.getElementById('mobile_03')
	var animDataBridgeThreeM = {
		container: elemBridgeThreeM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/03/mobile_03.json',
		name: 'Mobile-3',
	};
	animBridgeThreeM = bodymovin.loadAnimation(animDataBridgeThreeM);	
	
	var animBridgeLessFourM;
	var elemBridgeLessFourM = document.getElementById('mobile_less_04')
	var animDataBridgeLessFourM = {
		container: elemBridgeLessFourM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/04/mobile_less_04.json',
		name: 'Mobile-less-4',
	};
	animBridgeLessFourM = bodymovin.loadAnimation(animDataBridgeLessFourM);
	
	var animBridgeMoreFourM;
	var elemBridgeMoreFourM = document.getElementById('mobile_more_04')
	var animDataBridgeMoreFourM = {
		container: elemBridgeMoreFourM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/04/mobile_more_04.json',
		name: 'Mobile-more-4',
	};
	animBridgeMoreFourM = bodymovin.loadAnimation(animDataBridgeMoreFourM);	
	
	var animBridgeLessFiveM;
	var elemBridgeLessFiveM = document.getElementById('mobile_less_05')
	var animDataBridgeLessFiveM = {
		container: elemBridgeLessFiveM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/05/mobile_less_05.json',
		name: 'Mobile-less-5',
	};
	animBridgeLessFiveM = bodymovin.loadAnimation(animDataBridgeLessFiveM);
	
	var animBridgeMoreFiveM;
	var elemBridgeMoreFiveM = document.getElementById('mobile_more_05')
	var animDataBridgeMoreFiveM = {
		container: elemBridgeMoreFiveM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/05/mobile_more_05.json',
		name: 'Mobile-more-5',
	};
	animBridgeMoreFiveM = bodymovin.loadAnimation(animDataBridgeMoreFiveM);	

	var animBridgeSixM;
	var elemBridgeSixM = document.getElementById('mobile_06')
	var animDataBridgeSixM = {
		container: elemBridgeSixM,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/06/mobile_06.json',
		name: 'mobile_06',
	};
	animBridgeSixM = bodymovin.loadAnimation(animDataBridgeSixM);	

	
	var animBridgeZeroD;
	var elemBridgeZeroD = document.getElementById('desktop_00')
	var animDataBridgeZeroD = {
		container: elemBridgeZeroD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/00/desktop_00.json',
		name: 'Desktop-00',
	};
	animBridgeZeroD = bodymovin.loadAnimation(animDataBridgeZeroD);	
	
	var animBridgeOneD;
	var elemBridgeOneD = document.getElementById('desktop_01')
	var animDataBridgeOneD = {
		container: elemBridgeOneD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/01/desktop_01.json',
		name: 'Desktop-01',
	};
	animBridgeOneD = bodymovin.loadAnimation(animDataBridgeOneD);

	var animBridgeTwoD;
	var elemBridgeTwoD = document.getElementById('desktop_02')
	var animDataBridgeTwoD = {
		container: elemBridgeTwoD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/02/desktop_02.json',
		name: 'Desktop-02',
	};
	animBridgeTwoD = bodymovin.loadAnimation(animDataBridgeTwoD);	
	
	var animBridgeThreeD;
	var elemBridgeThreeD = document.getElementById('desktop_03')
	var animDataBridgeThreeD = {
		container: elemBridgeThreeD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/03/desktop_03.json',
		name: 'Desktop-3',
	};
	animBridgeThreeD = bodymovin.loadAnimation(animDataBridgeThreeD);
	
	var animBridgeMoreFourD;
	var elemBridgeMoreFourD = document.getElementById('desktop_more_04')
	var animDataBridgeMoreFourD = {
		container: elemBridgeMoreFourD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/04/desktop_more_04.json',
		name: 'Desktop-more-4',
	};
	animBridgeMoreFourD = bodymovin.loadAnimation(animDataBridgeMoreFourD);		
	
	var animBridgeLessFourD;
	var elemBridgeLessFourD = document.getElementById('desktop_less_04')
	var animDataBridgeLessFourD = {
		container: elemBridgeLessFourD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/04/desktop_less_04.json',
		name: 'Desktop-less-4',
	};
	animBridgeLessFourD = bodymovin.loadAnimation(animDataBridgeLessFourD);	
	
	var animBridgeMoreFiveD;
	var elemBridgeMoreFiveD = document.getElementById('desktop_more_05')
	var animDataBridgeMoreFiveD = {
		container: elemBridgeMoreFiveD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/05/desktop_more_05.json',
		name: 'Desktop-more-5',
	};
	animBridgeMoreFiveD = bodymovin.loadAnimation(animDataBridgeMoreFiveD);		
	
	var animBridgeLessFiveD;
	var elemBridgeLessFiveD = document.getElementById('desktop_less_05')
	var animDataBridgeLessFiveD = {
		container: elemBridgeLessFiveD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/05/desktop_less_05.json',
		name: 'Desktop-less-5',
	};
	animBridgeLessFiveD = bodymovin.loadAnimation(animDataBridgeLessFiveD);		
	
	var animBridgeSixD;
	var elemBridgeSixD = document.getElementById('desktop_06')
	var animDataBridgeSixD = {
		container: elemBridgeSixD,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/interactive_panel/06/desktop_06.json',
		name: 'Desktop-6',
	};
	animBridgeSixD = bodymovin.loadAnimation(animDataBridgeSixD);		
});