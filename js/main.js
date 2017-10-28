$(window).load(function(){
	// $('.slider').fractionSlider({
	// 	'fullWidth': 			true,
	// 	'controls': 			true,
	// 	'pager': 				true,
	// 	'responsive': 			true,
	// 	'dimensions': 			"1000,400",
	//     'increase': 			false,
	// 	'pauseOnHover': 		true,
	// 	'slideEndAnimation': 	true
	// });

});

$(document).ready(function() {

	$('#myCarousel').carousel({
		interval: 10000
	})
	$('.fdi-Carousel .item').each(function () {
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		var next2 = next.next();
		if (!next2.length) {
			next2 = $(this).siblings(':first');
		}
		next2.children(':first-child').clone().appendTo($(this));

		var next3 = next2.next();
		if(!next3.length){
			next3 = $(this).siblings(':first');
		}
		next3.children(':first-child').clone().appendTo($(this));
	});

	var BLUR_RADIUS = 40;
	var sourceImages = [];

	$('.src-image').each(function(){
		sourceImages.push($(this).attr('src'));
	});

	$('.avatar img').each(function(index){
		$(this).attr('src', sourceImages[index] );
	});

	var drawBlur = function(canvas, image) {
		var w = canvas.width;
		var h = canvas.height;
		var canvasContext = canvas.getContext('2d');
		canvasContext.drawImage(image, 0, 0, w, h);
		stackBlurCanvasRGBA(canvas, 0, 0, w, h, BLUR_RADIUS);
	};


	$('.card canvas').each(function(index){
		var canvas = $(this)[0];

		var image = new Image();
		image.src = sourceImages[index];

		image.onload = function() {
			drawBlur(canvas, image);
		}
	});

	var dd = $('.changing_news').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 4000,
		height: 'auto',
		visible: 3,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');


});
