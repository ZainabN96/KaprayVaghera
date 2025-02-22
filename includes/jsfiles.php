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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- main js
		============================================ -->
<script src="js/main.js"></script>

<script>
	// $(document).ready(function () {
	// 	$(".openNav").click(function () {
	// 		$("#sidebar").addClass("active");
	// 		$(".sidebar-overlay").addClass("active");
	// 	});

	// 	$(".closebtn, .sidebar-overlay").click(function () {
	// 		$("#sidebar").removeClass("active");
	// 		$(".sidebar-overlay").removeClass("active");
	// 	});
	// });
	// $(document).ready(function () {
	// 	$(".openNav").click(function () {
	// 		$("#sidebar").addClass("active");
	// 		$(".sidebar-overlay").addClass("active");
	// 	});

	// 	$(".closebtn, .sidebar-overlay").click(function () {
	// 		$("#sidebar").removeClass("active");
	// 		$(".sidebar-overlay").removeClass("active");
	// 	});

	// 	// Expand Category & Toggle +/-
	// 	$(".expand-cat").click(function () {
	// 		var subMenu = $(this).next(".sub-menu");
	// 		var icon = $(this).find("i");

	// 		if (!subMenu.hasClass("show")) {
	// 			$(".sub-menu").removeClass("show"); // Hide all other dropdowns
	// 			$(".expand-cat i").removeClass("fa-minus").addClass("fa-plus"); // Reset all icons
	// 			subMenu.addClass("show"); // Show current dropdown
	// 			icon.removeClass("fa-plus").addClass("fa-minus"); 
	// 		} else {
	// 			subMenu.removeClass("show"); // Hide if already open
	// 			icon.removeClass("fa-minus").addClass("fa-plus");
	// 		}
	// 	});
	// });

	// Open Sidebar
	document.querySelector('.openNav').addEventListener('click', function () {
		document.querySelector('.sidebar').classList.add('active');
		document.querySelector('.sidebar-overlay').classList.add('active');
	});

	// Close Sidebar
	document.querySelector('.closebtn').addEventListener('click', function () {
		document.querySelector('.sidebar').classList.remove('active');
		document.querySelector('.sidebar-overlay').classList.remove('active');
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