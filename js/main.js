(function ($) {
 "use strict";
	/*-------------------------------------------
	scrollUp
	-------------------------------------------- */	
	jQuery.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
	/*-------------------------------------------
	mobile menu
	-------------------------------------------- */
	$('.mobile-menu').meanmenu({
		meanScreenWidth: "991"
	});	
	/*--------------------------
	 features-curosel
	----------------------------*/
	
	$('.features-curosel').owlCarousel({
		loop:true,
		margin:30,
		autoplay:false,
		nav:true,
		dots: false,
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		lazyLoad : true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1200:{
				items:4
			}
		}
	})

	$('.featuresthree-curosel').owlCarousel({
		loop:true,
		margin:30,
		autoplay:false,
		nav:true,
		dots: false,
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		lazyLoad : true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:2
			},
			1200:{
				items:3
			}
		}
	})
	
	
	// $(".featuresthree-curosel").owlCarousel({
	// 	autoPlay: false, 
	// 	slideSpeed:2000,
	// 	items : 3,
	// 	pagination:false,
	// 	navigation:true,
	// 	navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	// 	itemsDesktop : [1199,3],
	// 	itemsDesktopSmall : [979,2],
	// 	itemsMobile : [767,1],
	// 	rewindNav : false,
	// 	lazyLoad : true
	// });


	$('.block-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplay:false,
		nav:false,
		dots: false,
		lazyLoad : true,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2,
			},
			992:{
				items:1
			}
		}
	})

	$('.crusial-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplay:false,
		nav:false,
		dots: false,
		lazyLoad : true,
		items:1
	})
	
	$(".crusial-carousel").owlCarousel({
		autoPlay: false, 
		slideSpeed:2000,
		items : 1,
		pagination:true,
		navigation:false,
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsMobile : [767,1],
		rewindNav : false,
		lazyLoad : true
	});
	
	// $(".utmost-carousel").owlCarousel({
	// 	autoPlay: false, 
	// 	slideSpeed:2000,
	// 	items : 2,
	// 	pagination:false,
	// 	navigation:true,
	// 	navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	// 	itemsDesktop : [1199,2],
	// 	itemsDesktopSmall : [979,1],
	// 	itemsMobile : [767,1],
	// 	rewindNav : false,
	// 	lazyLoad : true
	// });
	
	$('.utmost-carousel').owlCarousel({
		loop:true,
		autoplay:false,
		nav:false,
		dots: false,
		lazyLoad : true,
		items: 2,
		responsive:{
			0:{
				items:1
			},
			992:{
				items:2
			},
			1200:{
				items: 2
			}
		}
	})

	$('.brand-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplay:false,
		nav:false,
		dots: false,
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		lazyLoad : true,
		responsive:{
			0:{
				items:2
			},
			768:{
				items:3
			},
			992:{
				items:4
			},
			1200:{
				items:5
			}
		}
	})
	
	
	/*---------------------------------------
	home 2 left category menu
	----------------------------------------- */	
	$('.category-heading').on( "click", function(){
		$('.category-menu-list').slideToggle(300);
	});
	/*-------------------------------------------
	countdown
	-------------------------------------------- */	
	$('[data-countdown]').each(function() {
	  var $this = $(this), finalDate = $(this).data('countdown');
	  $this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown years"><span class="time-count">%-Y</span> <p>Years</p></span> <span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span class="time-count">%S</span> <p>Sec</p></span>'));
	  });
	});
	/*-------------------------------------------
	price range slider
	-------------------------------------------- */		  
		$( "#slider-range" ).slider({
			range: true,
			min: 40,
			max: 600,
			values: [ 60, 570 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
			" - £" + $( "#slider-range" ).slider( "values", 1 ) );
	/*-------------------------------------------
	elevateZoom
	-------------------------------------------- */	
	$("#zoom1").elevateZoom({
		gallery:'gallery_01', 
		cursor: 'pointer', 
		galleryActiveClass: "active", 
		imageCrossfade: true
	});
	/*-------------------------------------------
	bxSlider
	-------------------------------------------- */	
	$('.bxslider').bxSlider({
		slideWidth: 80,
		slideMargin:15,
		minSlides: 3,
		maxSlides: 4,
		pager: false,
		speed: 500,
		pause: 3000,
		adaptiveHeight: false
	});
})(jQuery);    