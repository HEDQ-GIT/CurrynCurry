(function(){
	'use strict';

	/*-----------------------------------------
	BACKGROUND PARALLAX INIT
	------------------------------------------*/
	if( $('.parallax').length ){
		$('body').imagesLoaded(function(){
			$(window).stellar({horizontalOffset:0,horizontalScrolling:!1});
		});
	};

	/*-----------------------------------------
	MOBILE NAV INIT
	------------------------------------------*/
	function mobileNav(){
		var mobileNavContainer = $('.mobile-nav-container'),
			mainNavContainer = $('.main-nav-container'),
			navTrigger = $('.mobile-nav-trigger');

		mainNavContainer.find('.logo-container').clone().appendTo(mobileNavContainer);
		mainNavContainer.find('.main-nav').clone().appendTo(mobileNavContainer);

		navTrigger.on('click', function(event) {
			event.preventDefault();
			$(this).siblings('.main-nav').slideToggle();
		});
	};
	mobileNav();

	/*-----------------------------------------
	SCROLLTO INIT
	------------------------------------------*/
	$('.main-nav.onepage-nav').onePageNav();

	/*-----------------------------------------
	GALLERY INIT
	------------------------------------------*/
	if ( $('.gallery').length ) {
		$('.gallery-items-container').find('ul').mixItUp({
			animation: {
				duration: 550,
				effects: 'fade stagger(20ms) translateZ(-300px)',
				easing: 'cubic-bezier(0.645, 0.045, 0.355, 1)'
			}
		});
	};

	/*-----------------------------------------
	ITEM SLIDESHOW
	------------------------------------------*/
	function itemSlideshow(){

		var itemSlideshow = $(".item-slideshow"),
			mainImage = itemSlideshow.find('.main-image'),
			thumbnails = itemSlideshow.find('.thumbnails');

		mainImage.owlCarousel({
			items : 1,
			singleItem : true,
			animateIn: 'fadeInLeft',
			animateOut: 'fadeOutRight'
		});
		thumbnails.owlCarousel({
			items : 2,
			margin: 15,
			responsive : {
			    768: {
			        items: 3 
			    }
			}
		});

		thumbnails.find('.owl-item').on('click', function() {
			$(this).addClass('active').siblings().removeClass('active');
			mainImage.trigger('to.owl.carousel', $(this).index());
		});

	};
	/*--- Item Slideshow Init ---*/
	if ( $('.item-slideshow').length ) {
		$('.item-slideshow').imagesLoaded(function(){
			itemSlideshow();
		});
	};

	/*------------------------------------------
	SCROLL REVEAL INIT
	------------------------------------------*/
	if ( $('.wow').length ) {
		var wow = new WOW({mobile: false});
		wow.init();
	};


	/*------------------------------------------
	MAIN NAV NICESCROLL INIT
	------------------------------------------*/
	function mainNavNicescroll(){
		if ( $('.main-nav-container').length ) {
			$('.main-nav-container').niceScroll({
		        cursoropacitymax: 0.3
			});
		};
	};
	mainNavNicescroll();

	/*------------------------------------------
	MOBILE NAV STICKY INIT
	------------------------------------------*/
	function mobileNavStickyInit(){
		var mobileNavContainer = $('.mobile-nav-container'),
			mobileNavHeight = mobileNavContainer.outerHeight(),
			$window = $(window),
			wrapper = $('.wrapper');

		$('.main-header .logo-container').imagesLoaded(function(){
			$window.on('scroll', function(){
				//The window.requestAnimationFrame() method tells the browser that you wish to perform an animation- the browser can optimize it so animations will be smoother
				window.requestAnimationFrame(mobileNav);
			});
		});

		function mobileNav(){

			if ( $window.scrollTop() > mobileNavHeight && $window.width() <= 991 ) {
				$('.mobile-nav-container').addClass('sticky animated fadeInDown');
				wrapper.css('padding-top', mobileNavHeight);
			} else {
				$('.mobile-nav-container').removeClass('sticky animated fadeInDown');
				wrapper.css('padding-top', 0);
			};
		};
	};
	mobileNavStickyInit();

    /*------------------------------------------------------------
    FUNCTIONS THAT NEED TO RUN WHEN WINDOW IS RESIZED
    -------------------------------------------------------------*/
    $(window).on('resize', function() {
    	mobileNavStickyInit();
    });


})();