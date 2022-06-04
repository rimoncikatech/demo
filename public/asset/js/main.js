$(document).ready(function(){
	$('.hero-area-carousel').slick({
		autoplay: true, 
		arrows: false, 
		speed: 1000,
		fade: true,
		cssEase: 'linear',
		pauseOnHover: true, 
	});

	$('.course-carousel').slick({
		autoplay: true, 
		arrows: false, 
		slidesToShow: 5, 
		pauseOnHover: true, 
		responsive: [
			{
				breakpoint: 1886,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 1518,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 1126,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 700,
				settings: {
					slidesToShow: 1,
				},
			}
		]
	});

	$('.logo-slider').slick({
		autoplay: true, 
		arrows: false, 
		slidesToShow: 4, 
		pauseOnHover: true, 
	});
});

$(document).ready(function() {
	$('.main-navigation').stellarNav();

	setTimeout(() => {
		$('#header-navigation .menu-toggle').html('<img src="./1assets/imgs/_hamberger.svg" alt="">');
	}, 0);
	
	$('#header-navigation').stellarNav();
	
})