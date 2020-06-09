<!DOCTYPE html>
<html lang="en">

<?php include "files/header.php" ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154444946-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-154444946-2');
	</script>
</head>
<body class="contact">


			<div id="section-contact">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1>Get in Touch</h1>
						</div>
						<!-- Contact Form -->
						<div class="contact-form col-sm-12 col-md-6">
							<!-- Form -->
							<form action="#">
								<div class="row">
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="text" class="form-control" name="name" placeholder="Name" required="">
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="email" class="form-control" name="name" placeholder="Email*" required="">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number*" required="">
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="email" class="form-control" name="subject" placeholder="Subject" required="">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12">
										<textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<div class="checkbox">
										    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
										    <label for="styled-checkbox-1">I am not a robot <i class="flaticon-user"></i></label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12">
										<button type="submit">Submit</button>
									</div>
								</div>
							</form>
							<!-- /.Form -->
						</div>
						<!-- /.Contact Form -->
						<!-- Contact Details -->
						<div class="contact-details col-sm-12 col-md-6">
							<!-- Item -->
							<div class="item ez-animate" data-animation="fadeInRight">
								<div class="thumb-icon">
									<i class="flaticon-house"></i>
								</div>
								<div class="description">
									<p>8/308/3/2 om shanthi nagar,Tadipatri, anantapur dist<br>
                                        PIN no:515411,Andhra Pradesh

                                    </p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="item ez-animate" data-animation="fadeInRight">
								<div class="thumb-icon">
									<i class="flaticon-smartphone-1"></i>
								</div>
								<div class="description">
									<p> 092475 69697<br>79010 22362</p>
								</div>
							</div>
							<!-- /.Item -->
							<!-- Item -->
							<div class="item ez-animate" data-animation="fadeInRight">
								<div class="thumb-icon">
									<i class="flaticon-paper-plane"></i>
								</div>
								<div class="description">
									<p>raginidesignerstudio@gmail.com</p>
								</div>
							</div>
							<!-- /.Item -->
						</div>
						<!-- /.Contact Details -->
					</div>
				</div>
			</div>
			<!-- /.Section Contact -->

			<!-- /.Section Map -->
			<!-- Section Footer -->
            <?php include "files/footer.php" ?>
			<!-- /.Section Footer -->
		</div>
	</div>

	<!-- Javascript Files -->
	<script src="assets/js/jquery2.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- SLY Carousel -->
	<script src="assets/js/sly.min.js"></script>
	<script src="assets/js/sly.vendor.min.js"></script>
	<!-- OWL Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="assets/js/easy-waypoint-animate.js"></script>
	<!-- Scripts -->
	<script src="assets/js/scripts.js"></script>
	<!--Google Maps Init -->
    <script>
        function initMap() {

            var location = new google.maps.LatLng(-33.9280697, 151.1302219);

            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: location,
                zoom: 14,
                zoomControl: false,
	            mapTypeControl: false,
	            scaleControl: false,
	            streetViewControl: false,
	            rotateControl: false,
	            scrollwheel: false,
	            fullscreenControl: false,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            // var marker = new google.maps.Marker({
            //     position: location,
            //     map: map,
            //     icon: 'assets/images/marker.png'
            // });

        }

        google.maps.event.addDomListener(window, 'load', initMap);
                
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDO9a4QLB3Mw5L995FcMxObb9QYVzqyRU&amp;callback=initMap"></script>

</body>

<!-- Mirrored from csvisual.com/akroot-html/Contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 07:25:08 GMT -->
</html>
