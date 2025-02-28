<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Contact | Kapray Vaghera';
include 'includes/header2.php';
?>
<body>
    <!-- header area start -->
    <?php include 'includes/navbar2.php' ?>
    <!-- contact-details start -->

    <!-- End Bradcaump area -->
    <!-- Start Contact Area -->
    <section class="htc__contact__area ptb--100 bg__white">
        <div class="container-fluid">
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
                                <form method="post">
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

    <!-- FOOTER START -->
    <?php include 'includes/footer.php'; ?>
    <!-- FOOTER END -->

    <!-- JS -->
    <?php include 'includes/jsfiles.php'; ?>
    
    <script>
        $(document).ready(function() {
            $("#contactForm").submit(function(e) {
                e.preventDefault(); // Prevent page reload
        debugger;
                $.ajax({
                    type: "POST",
                    url: "contact_submit.php",
                    data: $(this).serialize(), // Send form data
                    success: function(response) {
                        debugger;
                        $("#responseMessage").html(response);
                        $("#contactForm")[0].reset(); // Clear form fields
                    },
                    error: function() {
                        debugger;
                        $("#responseMessage").html("<span class='text-danger'>Failed to send message. Try again.</span>");
                    }
                });
            });
        });
    </script>
</body>
</html>