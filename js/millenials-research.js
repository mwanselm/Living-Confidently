	//	Desktop Escalator
	var animEscalatorD;
	var elemEscalatorD = document.getElementById('escalator-svg-d')
	var animDataEscalatorD = {
		container: elemEscalatorD,
		renderer: 'svg',
		loop: true,
		autoplay: false,
		/*MAKE SURE THIS IS FALSE*/
		rendererSettings: {
			progressiveLoad: false
		},
		path: wp_vars.template_path + '/img/svg/escalator/Escalator_Desktop.json',
		name: 'Escalator-D',
	};
	animEscalatorD = bodymovin.loadAnimation(animDataEscalatorD);


	//	animEscalatorD.addEventListener("enterFrame", function (animation) {
	//		if (animation.currentTime > (animEscalatorD.totalFrames - 1)) {
	//			animEscalatorD.pause();
	//		}
	//	});

	var waypoint = new Waypoint({
		element: document.getElementById('escalator-waypoint'),
		handler: function (direction) {
			animEscalatorD.play(); /*THIS IS WHERE WE PLAY THE ANIMATION*/
		},

		offset: 'bottom-in-view'

	});