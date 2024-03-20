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
		 
		   
		 
// const plus =document.querySelector(".plus"),
// minus =document.querySelector(".minus"),
//  num =document.querySelector(".num");

//  let a = 1;

// plus.addEventListener("click", ()=> {
// a++;
// a = (a < 10) ? "0" + a : a;
// num.innerText = a ;
// console.log(a);


//  }); 	
//  minus.addEventListener("click", ()=> {
// 	if(a > 1){
// 	a--;
// 	a = (a < 10) ? "0" + a : a;
// 	num.innerText = a ;
// 	}
//  });	
 



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

});

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
function user_register(){
	jQuery('.field_error').html('');
	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var mobile=jQuery("#mobile").val();
	var password=jQuery("#password").val();
	var is_error='';
	if(name==""){
		jQuery('#name_error').html('Please enter name');
		is_error='yes';
	}if(email==""){
		jQuery('#email_error').html('Please enter email');
		is_error='yes';
	}if(mobile==""){
		jQuery('#mobile_error').html('Please enter mobile');
		is_error='yes';
	}if(password==""){
		jQuery('#password_error').html('Please enter password');
		is_error='yes';
	}
	if(is_error==''){
		jQuery.ajax({
			url:'register_submit.php',
			type:'post',
			data:'name='+name+'&email='+email+'&mobile='+mobile+'&password='+password,
			success:function(result){
				result=result.trim();
				if(result=='email_present'){
					jQuery('#email_error').html('Email id already present');
				}
				if(result=='mobile_present'){
					jQuery('#mobile_error').html('Mobile number already present');
				}
				if(result=='insert'){
					jQuery('.register_msg .field_success').html('Thanks for registering!');
				}
			}	
		});
	}
	
}

function user_login(){
	jQuery('.field_error').html('');
	var email=jQuery("#login_email").val();
	var password=jQuery("#login_password").val();
	var is_error='';
	if(email==""){
		jQuery('#login_email_error').html('Please enter your email');
		is_error='yes';
	}if(password==""){
		jQuery('#login_password_error').html('Please enter your password');
		is_error='yes';
	}
	if(is_error==''){
		jQuery.ajax({
			url:'login_submit.php',
			type:'post',
			data:'email='+email+'&password='+password,
			success:function(result){
				result=result.trim();
				if(result=='wrong'){
					jQuery('.login_msg p').html('Please enter valid login details');
				}
				if(result=='valid'){
					window.location.href=window.location.href;
				}
			}	
		});
	}	
}

function wishlist_manage(pid,type){
	jQuery.ajax({
		url:'wishlist_manage.php',
		type:'post',
		data:'pid='+pid+'&type='+type,
		success:function(result){
			result=result.trim();
			if(result=='not_login'){
				window.location.href='login.php';
			}else{
				jQuery('.htc__wishlist').html(result);
			}
		}	
	});	
}

function manage_cart_update(pid,type,size_id,color_id){
	jQuery('#cid').val(color_id);
	jQuery('#sid').val(size_id);
	manage_cart(pid,type);
}

function manage_cart(pid,type,is_checkout){
	var is_error='';
	if(type=='update'){
		var qty=jQuery("#"+pid+"qty").val();
	}else{
		var qty=jQuery("#qty").val();
	}
	let cid=jQuery('#cid').val();
	let sid=jQuery('#sid').val();
	if(type=='add'){
		
		
		if(is_color!=0 && cid==''){
			jQuery('#cart_attr_msg').html('Please select color');
			is_error='yes';
		}
		if(is_size!=0 && sid=='' && is_error==''){
			jQuery('#cart_attr_msg').html('Please select size');
			is_error='yes';
		}
	}
	if(is_error==''){
	
		jQuery.ajax({
			url:'manage_cart.php',
			type:'post',
			data:'pid='+pid+'&qty='+qty+'&type='+type+'&cid='+cid+'&sid='+sid,
			success:function(result){
				result=result.trim();
				if(type=='update' || type=='remove'){
					window.location.href=window.location.href;
				}
				if(result=='not_avaliable'){
					alert('Qty not avaliable');	
				}else{
					jQuery('.htc__qua').html(result);
					if(is_checkout=='yes'){
						window.location.href='checkout.php';
					}
				}
			}	
		});	
	}
}

function sort_product_drop(cat_id,site_path){
	var sort_product_id=jQuery('#sort_product_id').val();
	window.location.href=site_path+"categories.php?id="+cat_id+"&sort="+sort_product_id;
}


// jQuery('.imageZoom').imgZoom();

function loadAttr(c_s_id,pid,type){
	jQuery('#cart_qty').addClass('hide');
	jQuery('#is_cart_box_show').addClass('hide');
	jQuery('#cid').val(c_s_id);				
	if(is_size==0){
		jQuery('#cart_attr_msg').html('');
		jQuery('#cart_qty').removeClass('hide');
		getAttrDetails(pid);
	}else{
		jQuery('#cart_attr_msg').html('');
		jQuery.ajax({
			url:'load_attr.php',
			type:'post',
			data:'c_s_id='+c_s_id+'&pid='+pid+'&type='+type,
			success:function(result){
				jQuery('#size_attr').html("<option value=''>Size</option>"+result);
			}
			
		});	
	}
	
}

function showQty(){
	let cid=jQuery('#cid').val();
	if(cid=='' && is_color>0){
		jQuery('#cart_attr_msg').html('Please select color');
	
	}else{
		let sid=jQuery('#size_attr').val();
		
		jQuery('#sid').val(sid);
		getAttrDetails(pid);
	}
}

function getAttrDetails(pid){
	jQuery('#is_cart_box_show').addClass('hide');
	jQuery('#cart_qty').hide();
	let color=jQuery('#cid').val();
	let size=jQuery('#sid').val();
	jQuery.ajax({
		url:'getAttrDetails.php',
		type:'post',
		data:'pid='+pid+'&color='+color+'&size='+size,
		success:function(result){
			result=jQuery.parseJSON(result);
			jQuery('.old__prize').html(result.mrp);
			jQuery('.new__price').html(result.price);
			var qty=result.qty;
			
			if(qty>0){
				var html='';
				for(i=1;i<=qty;i++){
					html=html+"<option>"+i+"</option>";
				}
				jQuery('#cart_qty').show();
				jQuery('#qty').html(html);
				jQuery('#is_cart_box_show').removeClass('hide');
				jQuery('#cart_attr_msg').html('');
				jQuery('#cart_qty').removeClass('hide');
			}else{
				jQuery('#cart_attr_msg').html('Out of stock');
			}
		}
	});
}



(jQuery);    