<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>
<!-- Header -->
{{-- <header id="header" class="fullwidth light">

	<!-- Top Bar -->
	<div id="top-bar">
		<div class="container">
			<div class="module left">
				<ul class="list-inline">
					<li><i class="i-before ti-email text-primary"></i>info@tmsl.in</li>
					<li><i class="i-before ti-mobile text-primary"></i>+91 9090909090</li>
				</ul>
			</div>
			<div class="module right">
				<ul class="list-inline">
					<li><i class="i-before ti-location text-primary"></i>1001 – B, Pinnacle Corporate Park, BKC CST Link Rd, Next to Trade Centre, Bandra Kurla Complex, Bandra East, Mumbai, Maharashtra - 400051.
</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Navigation Bar -->
	<div id="nav-bar">

		<div class="container">
			<!-- Logo -->
			<a class="logo-wrapper" href="{{ route('home') }}">
				<img class="logo logo-dark" src="{{ asset('img/logo-dark.png') }}" alt="Okno">		
			</a>

			<nav class="module-group right">

				<!-- Primary Menu -->
				<div class="module menu left">
					<ul id="nav-primary" class="nav nav-primary">
						<li class="">
							<a href="{{ route('home') }}">Home</a>
					
						</li>
						<li class="">
						
						<a href="{{ route('about') }}">About Us</a>
						</li>
						<li class="">
							
							<a href="{{ route('services') }}">Services</a>
						</li>
						<li class="">
							
							<a href="{{ route('insights') }}">Insights</a>
							<ul>
								<li class="has-dropdown">
									<a href="#">Insights - India</a>
									<ul>
										<li><a href="#">Insights – Indian Indirect Taxes</a></li>
										<li><a href="#">Insights – GCC Indirect Taxes</a></li>
										<li><a href="#">Post Cards</a></li>
									</ul>
								</li>
							
								
							</ul>
						</li>
						<li class="">
							<a href="https://tmsl.in/careers/">Careers</a>
						
						</li>
						<li class="">
							<a href="{{ route('contact') }}">Contact Us</a>
					
						</li>
						<li><a href="#" target="_blank">TMSL Bot</a></li>
						<li class="has-dropdown lang">
							<a href="#">Region</a>
							<ul>
								
								
							</ul>
						</li>
					</ul>
				</div>

				<!-- Language Menu -->
				<div class="module language left">
					<ul class="nav nav-primary">
						<li class="has-dropdown">
							<a href="{{ route('home') }}">India</a>
							<ul>
								<li><a href="{{ route('home-uae') }}">UAE</a></li>
								
							</ul>
						</li>
					</ul>
				</div>

				<!-- Shopping Cart -->
				{{-- <div class="module shopping-cart has-popup left">
					<span class="trigger"><i class="ti-shopping-cart"></i></span>
					<div class="popup cart">
						<ul class="cart-items">
							<li>
								<a href="#" class="image"><img src="assets/img/shop/product01.jpg" alt=""></a>
								<div class="content">
									<a href="#">The Camera</a>
									<span class="price">$39.98</span>
								</div>
							</li>
							<li>
								<a href="#" class="image"><img src="assets/img/shop/product02.jpg" alt=""></a>
								<div class="content">
									<a href="#">The Glasses</a>
									<span class="price">$39.98</span>
								</div>
							</li>
						</ul>
						<div class="cart-bottom">
							<a href="shop-cart.html" class="btn btn-filled btn-primary btn-sm btn-block">Go to Cart <i class="i-after ti-arrow-right"></i></a>
						</div>
					</div>
					<span class="notification">2</span>
				</div> --}}

				<!-- Search -->
				{{-- <div class="module search left">
					<span class="trigger" data-toggle="search-bar"><i class="ti-search"></i></span>
				</div> --}}

		
<!-- Header / End -->


<header class="header-one">
				<div class="top-header">
					<div class="container clearfix">
						<div class="logo float-left"><a href="{{ route('home') }}"><img width="200" src="{{ asset('images/logo/logo.png') }}" alt=""></a></div>
						<div class="address-wrapper float-right">
							<ul>
								<li class="address">
									<i class="icon flaticon-placeholder"></i>
									<h6>Address:</h6>
									{{-- <p>1001 – B, Pinnacle Corporate Park, BKC CST Link Rd, Next to Trade Centre, Bandra Kurla Complex, Bandra East, Mumbai, Maharashtra - 400051.</p> --}}
								</li>
								<li class="address">
									<i class="icon flaticon-multimedia"></i>
									<h6>Mail us:</h6>
									<p>info@tmsl.in</p>
								</li>
								<li>
									<a href="{{ route('home-uae') }}" style="display: flex">
										<img width="50" src="{{ asset('images/home/united-arab-emirates.png') }}" alt="United Arab Emirates Flag">
									</a>
								</li>
								<li>
									<a href="{{ route('home') }}" style="display: flex">
										<img width="50" src="{{ asset('images/home/india.png') }}" alt="India Flag">
									</a>
								</li>
								
							</ul>
						</div> <!-- /.address-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="active">	<a href="{{ route('home') }}">Home</a>
									    	
									    </li>
									    <li><a href="{{ route('about') }}">About Us</a>
									    	
									    </li>
									    <li><a href="{{ route('services') }}">Services & Tools</a>
									    	<ul class="dropdown">
													<li><a href="{{ route('tax-technology') }}">Tax Technology</a></li>
													<li><a href="{{ route('management-service') }}">Managed Services</a></li>
													<li><a href="{{ route('structuring-tax') }}">Structuring Transaction</a></li>
													<li><a href="{{ route('litigation-management') }}">Litigation Management</a></li>
																		        
																		        	
							
									       </ul>
									    </li>
									    <li><a href="{{ route('insights') }}">Insights</a>
									    	{{-- <ul class="dropdown">
									        	<li><a href="project.html">project</a></li>
									        	<li><a href="project-details.html">Project details</a></li>
									       </ul> --}}
									    </li>
									    {{-- <li><a href="#">Blog</a>
									    	<ul class="dropdown">
									        	<li><a href="blog.html">Blog List</a></li>
									        	<li><a href="blog-grid.html">Blog Grid</a></li>
									        	<li><a href="blog-details.html">Blog details</a></li>
									       </ul>
									    </li> --}}
									    <li><a href="{{ route('contact') }}">Contact</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<div class="right-widget float-right">
					   			<ul>
					   				<li class="social-icon">
					   					<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											
										</ul>
					   				</li>
					   				{{-- <li class="cart-icon">
					   					<a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
					   				</li> --}}
					   				<li class="search-option">
					   					<div class="dropdown">
					   						<button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
											<form action="#" class="dropdown-menu">
												<input type="text" Placeholder="Enter Your Search">
												<button><i class="fa fa-search"></i></button>
											</form>
					   					</div>
					   				</li>
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-one -->
