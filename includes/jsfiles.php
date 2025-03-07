<!-- jquery-1.11.3.min js
		============================================ -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- bootstrap js
		============================================ -->
<script src="js/bootstrap.min.js"></script>

<!-- Nivo slider js
		============================================ -->
<script src="custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="custom-slider/home.js" type="text/javascript"></script>

<!-- owl.carousel.min js
		============================================ -->
<script src="js/owl.carousel.min.js"></script>

<!-- jquery scrollUp js 
		============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>

<!-- price-slider js
		============================================ -->
<script src="js/price-slider.js"></script>


<!-- elevateZoom js 
		============================================ -->
<script src="js/jquery.elevateZoom-3.0.8.min.js"></script>

<!-- jquery.bxslider.min.js
		============================================ -->
<script src="js/jquery.bxslider.min.js"></script>

<!-- mobile menu js
		============================================ -->
<script src="js/jquery.meanmenu.js"></script>

<!-- wow js
		============================================ -->
<script src="js/wow.js"></script>

<!-- plugins js
		============================================ -->
<script src="js/plugins.js"></script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- Include jQuery and Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
<!-- main js
		============================================ -->
<script src="js/main.js"></script>

<script>
	// $(window).on('load', function() {
	// 	$('#loader').delay(100).fadeOut('slow');
	// 	$('#loader-wrapper').delay(500).fadeOut('slow');
	// });

	// var loader = document.getElementById("loader");
	// window.addEventListener("load", function() {
	// 	loader.style.display = "none";
	// })

	// Open Sidebar
	document.querySelector('#toggleSidebar').addEventListener('click', function () {
		document.querySelector('.sidebar').classList.add('active');
		document.querySelector('.sidebar-overlay').classList.add('active');
	});

	// Close Sidebar
	document.querySelector('.closebtn').addEventListener('click', function () {
		document.querySelector('.sidebar').classList.remove('active');
		document.querySelector('.sidebar-overlay').classList.remove('active');
	});
	
	$(".closebtn, .sidebar-overlay").click(function () {
        $("#sidebar").removeClass("active");
        $(".sidebar-overlay").removeClass("active");
    });

	// Toggle Dropdown
	document.querySelectorAll('.expand-cat').forEach(item => {
		item.addEventListener('click', function () {
			this.nextElementSibling.classList.toggle('show');
			this.querySelector('i').classList.toggle('fa-plus');
			this.querySelector('i').classList.toggle('fa-minus');
		});
	});
</script>