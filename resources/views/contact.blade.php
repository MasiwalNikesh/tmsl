@extends('app')

@section('content')


<!-- ===================================================
	Loading Transition
==================================================== -->
<div id="loader-wrapper" style="display: none;">
	<div id="loader" style="display: none;"></div>
</div>

<h2 class="mb-4">Our Locations</h2>
<div class="container mt-4">

	<div class="row">
		<div class="col-md-6 col-lg-4 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h6>Mumbai</h6> <!-- Move the <h6> element above the card-title class -->
					<h6 class="card-title"><strong>Jigar Doshi</strong></h6> <!-- Make the <h6> element bold -->
					<p class="card-text">
						1001-B, Pinnacle Corporate Park, BKC CST Link Rd, Next to Trade Centre, Bandra East, Mumbai 400051.
					</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h6>Pune</h6> <!-- Move the <h6> element above the card-title class -->
					<h6 class="card-title"><strong>Sagar Shah</strong></h6> <!-- Make the <h6> element bold -->
					<p class="card-text">
						Level 212, East Street, Camp, Pune, Maharashtra 411001.
					</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h6>Bangalore</h6> <!-- Move the <h6> element above the card-title class -->
					<h6 class="card-title"><strong>Nikita Maheshwari</strong></h6> <!-- Make the <h6> element bold -->
					<p class="card-text">
						1st Floor, Bizzhub Aspire, 80 Feet Road, Sony World Crossing, Koramangala, Bengaluru, Karnataka 560034
					</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 mb-4">
			<div class="card h-100">
				<div class="card-body">

					<h6>Dubai</h6> <!-- Move the <h6> element above the card-title class -->
					<h6 class="card-title"><strong>Piyush Baid</strong></h6> <!-- Make the <h6> element bold -->
					<p class="card-text">
						Office No. 501, Al Moosa Tower 1, Sheikh Zayed Road, Trade Centre 1, PO Box: 43466, Dubai, United Arab Emirates.
					</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4 mb-4">
			<div class="card h-100">
				<div class="card-body">
					<h6>Ahmedabad</h6> <!-- Move the <h6> element above the card-title class -->
					<h6 class="card-title"><strong>Anshul Jain</strong></h6> <!-- Make the <h6> element bold -->
					<p class="card-text">
						904, Shitiratna Complex, Near Redission Blu Hotel, Panchwati Cross Road, C. G. Road, Ahmedabad, Gujarat – 380006
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 
=============================================
	Conatct us Section
============================================== 
-->
<hr>
<div class="contact-us-section section-spacing">

	<div class="col-lg-12 col-12">
		<div class="form-wrapper">
			<form action="inc/sendemail.php" class="theme-form-one form-validation" autocomplete="off" novalidate="novalidate">
				<div class="row">
					<div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name"></div>
					<div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone"></div>
					<div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email"></div>
					<div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="web"></div>
					<div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
				</div> <!-- /.row -->
				<button class="theme-button-one">SEND MESSAGE</button>
			</form>
		</div> <!-- /.form-wrapper -->
	</div> <!-- /.col- -->
</div> <!-- /.main-content -->
</div> <!-- /.container -->
</div> <!-- /.contact-us-section -->

<!--Contact Form Validation Markup -->
<!-- Contact alert -->
<div class="alert-wrapper" id="alert-success">
	<div id="success">
		<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
		<div class="wrapper">
			<p>Your message was sent successfully.</p>
		</div>
	</div>
</div> <!-- End of .alert_wrapper -->
<div class="alert-wrapper" id="alert-error">
	<div id="error">
		<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
		<div class="wrapper">
			<p>Sorry!Something Went Wrong.</p>
		</div>
	</div>
</div> <!-- End of .alert_wrapper -->
</div> <!-- /.contact-us-section -->



<!-- 
=============================================
	Compnay Branch Address
============================================== 
-->



<!-- Scroll Top Button -->
<button class="scroll-top tran3s" style="display: block;">
	<i class="fa fa-angle-up" aria-hidden="true"></i>
</button>



<!-- Optional JavaScript _____________________________  -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- jQuery -->
<script src="vendor/jquery.2.2.3.min.js"></script>
<!-- Popper js -->
<script src="vendor/popper.js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Camera Slider -->
<script src="vendor/Camera-master/scripts/jquery.mobile.customized.min.js"></script>
<script src="vendor/Camera-master/scripts/jquery.easing.1.3.js"></script>
<script src="vendor/Camera-master/scripts/camera.min.js"></script>
<!-- menu  -->
<script src="vendor/menu/src/js/jquery.slimmenu.js"></script>
<!-- WOW js -->
<script src="vendor/WOW-master/dist/wow.min.js"></script>
<!-- owl.carousel -->
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- js count to -->
<script src="vendor/jquery.appear.js"></script>
<script src="vendor/jquery.countTo.js"></script>
<!-- Fancybox -->
<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- Validation -->
<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
<!-- Google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

<!-- Theme js -->
<script src="js/theme.js"></script>
<script src="js/map-script.js"></script>
</div>

<!-- Content -->



@endsection
