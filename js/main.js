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

	document.addEventListener("DOMContentLoaded", function () {
		var phoneNumber = '+923264577208';
	  
		$('#contactUsBtn').on('click', function (e) {
	e.preventDefault();
		  var whatsappLink = 'https://api.whatsapp.com/send?phone=' + encodeURIComponent(phoneNumber);
		  window.open(whatsappLink, '_blank');
		  });
		});

		// document.addEventListener('DOMContentLoaded', function() {
        //     const leftScroll = document.querySelector('.left-scroll');
        //     const rightScroll = document.querySelector('.right-scroll');

        //     function handleScroll() {
        //         const scrollPosition = window.scrollY;
        //         const elementOffset = leftScroll.offsetTop; 

        //         if (scrollPosition > elementOffset - window.innerHeight / 2) {
        //             leftScroll.style.opacity = 1;
        //             leftScroll.style.transform = 'translateY(0)';
        //         }

        //         if (scrollPosition > elementOffset - window.innerHeight / 2) {
        //             rightScroll.style.opacity = 1;
        //             rightScroll.style.transform = 'translateY(0)';
        //         }
        //     }

        //     window.addEventListener('scroll', handleScroll);
        // });

		
		document.addEventListener("DOMContentLoaded", function() {
			AOS.init({
			  duration: 1000,
			  easing: 'ease-in-out',
			  once: true,
			  mirror: false
			});
		  });
		 
		   
		 
const plus =document.querySelector(".plus"),
minus =document.querySelector(".minus"),
 num =document.querySelector(".num");

 let a = 1;

plus.addEventListener("click", ()=> {
a++;
a = (a < 10) ? "0" + a : a;
num.innerText = a ;
console.log(a);


 }); 	
 minus.addEventListener("click", ()=> {
	if(a > 1){
	a--;
	a = (a < 10) ? "0" + a : a;
	num.innerText = a ;
	}
 });	
 
});


// document.addEventListener('DOMContentLoaded', function () {
//   const codRadio = document.getElementById('cod');
//  const creditRadio = document.getElementById('credit');
//  const creditCardDetails = document.getElementById('creditCardDetails');

//  codRadio.addEventListener('change', toggleCreditCardDetails);
//  creditRadio.addEventListener('change', toggleCreditCardDetails);

//  function toggleCreditCardDetails() {
// 	 if (creditRadio.checked) {
// 		 creditCardDetails.style.display = 'block';
// 	 } else {
// 		 creditCardDetails.style.display = 'none';
// 	 }
//  }


//  toggleCreditCardDetails();



// });

 // Define a mapping of provinces to cities
 var provinceCities = {
	'Punjab': ['Lahore', 'Rawalpindi', 'Faisalabad', 'Multan', 'Gujranwala', 'Sialkot', 'Lodhran', 'Jhang', 'Bahawalpur', 'Sahiwal'],
    'Balochistan': ['Quetta', 'Gwadar', 'Turbat', 'Khuzdar', 'Loralai', 'Chaman', 'Zhob', 'Kharan', 'Hub', 'Nushki'],
    'Sindh': ['Karachi', 'Hyderabad', 'Larkana', 'Sukkur', 'Mirpur Khas', 'Nawabshah', 'Jacobabad', 'Shikarpur', 'Dadu', 'Thatta'],
    'Azad Jammu and Kashmir': ['Muzaffarabad', 'Mirpur', 'Bhimber', 'Kotli', 'Rawalakot', 'Hattian', 'Neelum', 'Bagh', 'Sudhanoti', 'Poonch'],
    'Gilgit-Baltistan': ['Gilgit', 'Skardu', 'Hunza', 'Ghizer', 'Astore', 'Diamer', 'Shigar', 'Ghanche', 'Kharmang', 'Nagar'],
    'Khyber Pakhtunkhwa': ['Peshawar', 'Abbottabad', 'Mardan', 'Swat', 'Charsadda', 'Nowshera', 'Kohat', 'Haripur', 'Bannu', 'Mansehra'],
	'Islamabad Capital Territory': ['Islamabad']
	// Add other provinces and their cities as needed
};

function updateCities() {
	var provinceDropdown = document.getElementById('province');
	var cityDropdown = document.getElementById('city');

	// Clear existing options
	cityDropdown.innerHTML = '<option value="">Choose...</option>';

	// Get selected province
	var selectedProvince = provinceDropdown.value;

	// Add cities based on the selected province
	if (provinceCities[selectedProvince]) {
		provinceCities[selectedProvince].forEach(function(city) {
			addCityOption(city);
		});
	}
}

function addCityOption(city) {
	var cityDropdown = document.getElementById('city');
	var option = document.createElement('option');
	option.value = city;
	option.text = city;
	cityDropdown.add(option);
}



(jQuery);    