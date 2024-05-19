{{-- <footer id="footer" class="bg-secondary dark">
    
	<div class="container">
			<div class="row">

				{{-- <div class="col-md-3 text-center">
					<!-- Widget - Logo -->
					<div class="widget widget-logo">
						<img class="logo logo-dark" src="assets/img/logo-light.png" alt="Okno">
					</div>
					<div class="widget widget-follow">
						<a href="#" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook"></i></a>
						<a href="#" class="icon icon-circle icon-twitter icon-xs"><i class="fa fa-twitter"></i></a>
						<a href="#" class="icon icon-circle icon-google-plus icon-xs"><i class="fa fa-google-plus"></i></a>
					</div>
				</div> 

				<div class="col-md-12">
					<div class="feature boxed bg-danger rounded mb-60">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="mb-0"><i class="ti-mobile i-before text-dark"></i>Call Us! +91 98202 03026</h5>
							</div>
							<div class="col-sm-6">
								<h5 class="mb-0"><i class="ti-email i-before text-dark"></i>Write to Us! info@tmsl.in</h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- Widget - Contact -->
							<div class="widget widget-contact">
								<h6 class="text-uppercase text-muted">Contact Us</h6>
								<img src="assets/img/photos/location-photo01.jpg" alt="" class="img-rounded mb-20">
								<address>
									<strong>Address:</strong><br>
									A1001 – B, Pinnacle Corporate Park, BKC CST Link Rd, Next to Trade Centre, <br>Bandra Kurla Complex, Bandra East, Mumbai, Maharashtra - 400051
									<strong>Phone:</strong><br>
									+91 98202 03026<br><br>
									<strong>E-mail:</strong><br>
									info@tmsl.in<br>
								</address>
							</div>
						</div>

					

						<div class="col-md-6">
							<!-- Widget - Contact Form -->
							<div class="widget widget-contact-form">
								<h6 class="text-uppercase text-muted">Write to Us</h6>
								<form class="contact-form form-validate" id="contact-form-2">
									<input name="name" id="name" type="text" class="form-control input-sm" placeholder="Name">
									<input name="email" id="email" type="text" class="form-control input-sm" placeholder="E-mail address">
									<textarea name="message" id="message" cols="30" rows="4" class="form-control input-sm" placeholder="Message"></textarea>
									<button class="btn btn-filled btn-submit btn-sm btn-block"><span>Send it <i class="i-after ti-arrow-right"></i></span></button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<hr class="sep-line">
			<div class="row pt-50 pb-50">
				<div class="col-sm-6 text-muted">
					Copyright TMSL 2023. All rights reserved.<br>
					
				</div>
				{{-- <div class="col-sm-6 text-right">
					<ul class="nav nav-inline nav-sm mt-10">
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">Other products</a></li>
						<li><a href="#">Hire me</a></li>
					</ul>
				</div>
			</div>
		</div>

</footer> --}}
<!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
<footer class="theme-footer-one">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-sm-6 about-widget">
								<h6 class="title">About Us</h6>
								<p>
								TMSL stands for Tax Technology Managed Services LLP. TMSL is a modern day Tax Technology firm that provides tax services- technologically. TMSL is envisioned and founded by leaders to automate the routine and mundane compliances for businesses to focus on the essential strategic functions.
								</p>
								<div class="queries"><i class="flaticon-address"></i> Any Queries 	<div class="location-icon"><i class="fa fa-location"></i> 501, Al Moosa Tower, 1, Sheikh Zayed Road, Dubai, UAE </div> </div>
							</div> <!-- /.about-widget -->
						
							<div class="col-xl-4 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">Services</h6>
								<ul>
										<li><a href="{{ route('tax-technology') }}"><u>T</u>- Tax Technology</a></li>
													<li><a href="{{ route('management-service') }}"><u>M</u>- Managed Services</a></li>
													<li><a href="{{ route('structuring-tax') }}"><u>S</u>- Structuring Transaction</a></li>
													<li><a href="{{ route('litigation-management') }}"><u>L</u>- Litigation Management</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-xl-4 col-lg-2 col-sm-6 footer-newsletter">
								<h6 class="title">NEWSLETTER</h6>
								<form action="{{ route('handler') }}" method="GET">
									<input type="text" placeholder="Name *" name="name">
									<input type="email" placeholder="Email *" name="email">
									<button class="theme-button-one" type="submit">SUBSCRIBE</button>
								</form>
							</div>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12"><p>&copy; Copyrights 2024. All Rights Reserved.</p></div>
							<div class="col-md-6 col-12">
								<ul>
									{{-- <li><a href="{{ route('about') }}">About</a></li>
									<li><a href="{{ route('insights') }}">Insights</a></li>
									<li><a href="{{ route('tmsl-tool') }}">Tools</a></li>
									<li><a href="{{ route('contact') }}">Contact</a></li> --}}
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->

			</body>
</html>