<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Contact | Kapray Vaghera';
include 'includes/header2.php';
?>

<body>

    <!-- header area start -->
    <?php include 'includes/navBar2.php' ?>
    <!-- contact-details start -->

    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner">
                            <!-- <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Contact Us</span>
                                </nav> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Contact Area -->
    <section class="htc__contact__area ptb--100 bg__white">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <div class="map-contacts--2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d13603.812130803182!2d74.3398965!3d31.5254499!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDMxJzIzLjYiTiA3NMKwMjAnMjQuMiJF!5e0!3m2!1sen!2s!4v1731558270652!5m2!1sen!2s" width="650" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title__line--6">CONTACT US</h2>
                    <div class="address">
                        <div class="address__icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="address__details">
                            <h2 class="ct__title">our address</h2>
                            <p>2-C Zahoor Elahi Rd, Block C Gulberg 2, near KIMS and Green Halls </p>
                        </div>
                    </div>


                    <div class="address">
                        <div class="address__icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="address__details">
                            <h2 class="ct__title">opening hour</h2>
                            <p> Mon - Sun : 12:00 pm - 10:00 pm</p>
                        </div>
                    </div>

                    <div class="address">
                        <div class="address__icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="address__details">
                            <h2 class="ct__title">Phone Number</h2>
                            <p>03136414263</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="contact-form-wrap mt--60">
                    <!-- <div class="col-xs-12">
                        <div class="contact-title">
                            <h2 class="title__line--6">SEND A MAIL</h2>
                        </div>
                    </div> -->
                    <h2 class="text-center my-4 fs-1">Contact Us</h2>

                    <div class="row">
                        <!-- Contact Form -->
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form action="contact_submit.php" method="post">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name *</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your Email *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Your Phone Number *</label>
                                        <div class="input-group">
                                            <span class="input-group-text">+92</span>
                                            <input type="tel" class="form-control" id="phone" name="phone" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="message" class="form-label">Your Message *</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 fs-5">Submit</button>
                                </form>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h4 class="fs-2">CONTACT INFORMATION</h4>
                                <!-- <p><strong>Sapphire Retail Head Office</strong></p> -->
                                <p>2C Maratab Ali Road Gulberg-2 near KIMS and Green Halls academy
                                </p>
                                <p><strong>Email:</strong> <a href=" mailto:customercare@kvonline.shop" class="text-dark text-decoration-none fw-bold">customercare@kvonline.shop</a>
                                </p>
                                <p><strong>Phone:</strong> <a href="tel:03136414263" class="text-dark text-decoration-none fw-bold">03136414263</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo "></script>
    <script src="js/contact-map.js"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#141516"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Ramble!',
                icon: 'images/icons/map-2.png',
                animation: google.maps.Animation.BOUNCE

            });
        }
    </script>


    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>

</body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:18 GMT -->

</html>