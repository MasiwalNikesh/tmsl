@extends('app-uae')
@section('content')

    <div id="content">


			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-one">
				<div data-src="{{ asset('images/slides/1.jpg') }}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated text-white">VAT experts harnessing the power of digital tax transformation</p>
							<h1 class="wow fadeInUp animated text-white" data-wow-delay="0.2s">Automation, Expertise <br> & Experience</h1>
							<a href="{{ route('services') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="{{ asset('images/slides/2.jpg') }}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated text-white">Litigation Support for GCC</p>
							<h1 class="wow fadeInUp animated text-white" data-wow-delay="0.2s">Identify Exposures <br>on your Company</h1>
							<a href="{{ route('services') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="{{ asset('images/slides/3.jpg') }}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated text-white">Identification of avenues of process automation and optimization</p>
							<h1 class="wow fadeInUp animated text-white" data-wow-delay="0.2s">Digital Advisory and <br>Process Optimisation</h1>
							<a href="{{ route('services') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
			</div> <!-- /#theme-main-banner -->
			
			
			<!-- 
			=============================================
				Top Feature
			============================================== 
			-->
			<div class="top-feature section-spacing">
				<div class="top-features-slide">
					<div class="item item-height">
						<div class="main-content" style="background:#fafafa;">
							<img style="max-width:50% !important" src="{{ asset('images/home/t.png') }}" alt="">
							<h4><a href="{{ route('tax-technology') }}"><u>T</u>ax Technology</a></h4>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item item-height">
						<div class="main-content" style="background:#f6f6f6;">
							<img style="max-width:50% !important" src="{{ asset('images/home/m.png') }}" alt="">
							<h4><a href="{{ route('management-service') }}"><u>M</u>anaged Services</a></h4>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item item-height">
						<div class="main-content" style="background:#efefef;">
							<img style="max-width:42% !important"  src="{{ asset('images/home/s.png') }}" alt="">
							<h4><a href="{{ route('structuring-tax') }}"><u>S</u>tructuring Transaction</a></h4>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item item-height">
						<div class="main-content" style="background:#e9e9e9;">
							<img style="max-width:42% !important" src="{{ asset('images/home/l.png') }}" alt="">
							<h4><a href="{{ route('litigation-management') }}"><u>L</u>itigation Management</a></h4>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					</div> <!-- /.top-features-slide -->
			</div> <!-- /.top-feature -->


			<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12"><img src="{{ asset('images/home/Tmslweb.jpg') }}" alt=""></div>
						<div class="col-lg-6 col-12">
							<div class="text">
								<div class="theme-title-one">
									<h2>About TMSL</h2>
									<p>We are a modern day Tax Technology firm that serve tax solutions through technology</p>
									<p>TMSL is aiming to go beyond the traditional consulting for a leading-edge performance that incorporates technology into its tax function. TMSL is tapping into the changing dynamics of the way compliances are being conducted.</p>
								</div> <!-- /.theme-title-one -->
								<ul class="mission-goal clearfix">
									<li>
										<i class="icon flaticon-star"></i>
										<h4>Vision</h4>
									</li>
									<li>
										<i class="icon flaticon-target"></i>
										<h4>Missions</h4>
									</li>
									<li>
										<i class="icon flaticon-medal"></i>
										<h4>Goals</h4>
									</li>
								</ul> <!-- /.mission-goal -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay -->


			<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2>We are tax experts harnessing the power of digital tax transformation</h2>
						{{-- <a href="#" class="theme-button-one"></a> --}}
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


			<!-- 
			=============================================
				Service Style One
			============================================== 
			-->
			<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Articles and Footprints</h2>
						<p>
						TMSL regularly updates you with latest articles and footprints in the field of Tax Technology and Tax Automation.
						</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('images/services/1.jpg') }}" alt=""></div>
									<div class="text">
										<h5><a href="{{ route('services') }}">TMSL India Update</a></h5>
										<p>Update from TMSL's team</p>
										<a href="{{ route('services') }}" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('images/services/2.jpg') }}" alt=""></div>
									<div class="text">
										<h5><a href="{{ route('services') }}">TMSL UAE Update</a></h5>
										<p>Update from TMSL's team</p>
										<a href="{{ route('services') }}" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('images/services/1.jpg') }}" alt=""></div>
									<div class="text">
										<h5><a href="{{ route('services') }}">TMSL India Update</a></h5>
										<p>Update from TMSL's team</p>
										<a href="{{ route('services') }}" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('images/services/2.jpg') }}" alt=""></div>
									<div class="text">
										<h5><a href="{{ route('services') }}">TMSL UAE Update</a></h5>
										<p>Update from TMSL's team</p>
										<a href="{{ route('services') }}" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('images/services/1.jpg') }}" alt=""></div>
									<div class="text">
										<h5><a href="{{ route('services') }}">TMSL India Updates</a></h5>
										<p>Update from TMSL's team</p>
										<a href="{{ route('services') }}" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
							<div class="col-xl-4 col-md-6 col-12">
								<div class="single-service">
									<div class="img-box"><img src="{{ asset('images/services/2.jpg') }}" alt=""></div>
									<div class="text">
										<h5><a href="{{ route('services') }}">TMSL India Update</a></h5>
										<p>Update from TMSL's team</p>
										<a href="{{ route('services') }}" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					<div class="contact-text">
						<h4>You can also send us an email and we’ll get in touch shortly, or Call us</h4>
						<h5><a href="#">info@tmsl.in</a>  (or)  <a href="#">+91 97405 55590</a></h5>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->


			<!--
			=====================================================
				Testimonial Slider
			=====================================================
			-->
			<div class="testimonial-section section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="wrapper">
							<div class="bg">
								<div class="testimonial-slider">
									<div class="item">
										<p>“ Pratik, I would like to take this opportunity to thank you personally for being so approachable. During testing times, we have always approached you without looking at clock and can happily say we are proud our association with you. ”</p>
										<div class="name">
											<h6>Accounts & Finance Head MNC in Real Estate Sector, UAE</h6>
										
										</div> <!-- /.name -->
									</div> <!-- /.item -->
									<div class="item">
										<p>“ Jigar, just wanted to let you know that you and your team bring immense technical depth on the table on Indirect Taxes and we have very high regards for you and your team. We deeply appreciate all the efforts and continuous engagement. ”</p>
										<div class="name">
											<h6>Finance Director – A large corporate in Scaffolding Systems</h6>
											
										</div> <!-- /.name -->
									</div> <!-- /.item -->
																		<div class="item">
																			<p>“ Jigar and his team provided us regular updates on the numerous notifications released by the Government along with its impact on our business. Their implementation support is commendable as they understand the business and our ways of working before providing any solution. ”</p>
																			<div class="name">
																				<h6>Finance Business Partner  – India, Middle East and South Asia – MNC in Marine Engineering Industry</h6>
																				
																			</div> <!-- /.name -->
																		</div> <!-- /.item -->
																	</div> <!-- /.testimonial-slider -->
																</div> <!-- /.bg -->
															</div> <!-- /.wrapper -->
														</div> <!-- /.container -->
													</div> <!-- /.overlay -->
												</div> <!-- /.testimonial-section -->


												<!--
												=====================================================
													Our Team
												=====================================================
												-->
												<div class="our-team section-spacing">
													<div class="container">
														<div class="theme-title-one">
															<h2>Our TEAM</h2>
															<p> Keeping the global market in mind, TMSL lays its expertise in the Indian and GCC Indirect Taxes. </p>
														</div> <!-- /.theme-title-one -->
														<div class="wrapper">
															<div class="row">
															<div class="col-lg-3 col-sm-6 col-12">
																	<div class="team-member">
																		<div class="image-box">
																			<img src="{{ asset('images/team/2.jpg') }}" alt="">
																			<div class="overlay">
																				<div class="hover-content">
																					<ul>
																						<li><a href="https://www.linkedin.com/in/pratik-shah-99306a86/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
																						
																					</ul>
																					<p>Pratik possesses a rich experience of 20 years of specialization in field of Indirect Taxes in India and Globally.</p>
																				</div> <!-- /.hover-content -->
																			</div> <!-- /.overlay -->
																		</div> <!-- /.image-box -->
																		<div class="text">
																			<h6>Pratik Shah</h6>
																			<span>Founding Partner</span>
																		</div> <!-- /.text -->
																	</div> <!-- /.team-member -->
																</div> <!-- /.col- -->
																<div class="col-lg-3 col-sm-6 col-12">
																	<div class="team-member">
																		<div class="image-box">
																			<img src="{{ asset('images/team/1.jpg') }}" alt="">
																			<div class="overlay">
																				<div class="hover-content">
																					<ul>
																						<li><a href="https://www.linkedin.com/in/jigar-doshi-b4b84686/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
																						
																					</ul>
																					<p>A visionary in automation and to move in line with the global trends</p>
																				</div> <!-- /.hover-content -->
																			</div> <!-- /.overlay -->
																		</div> <!-- /.image-box -->
																		<div class="text">
																			<h6>Jigar Doshi</h6>
																			<span>Founding Partner</span>
																		</div> <!-- /.text -->
																	</div> <!-- /.team-member -->
																</div> <!-- /.col- -->
																
																<div class="col-lg-3 col-sm-6 col-12">
																	<div class="team-member">
																		<div class="image-box">
																			<img src="{{ asset('images/team/3.jpg') }}" alt="">
																			<div class="overlay">
																				<div class="hover-content">
																					<ul>
																						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
																						
																					</ul>
																					<p>An expert in Trade & Industry from GCC VAT</p>
																				</div> <!-- /.hover-content -->
																			</div> <!-- /.overlay -->
																		</div> <!-- /.image-box -->
																		<div class="text">
																			<h6>Piyush Baid</h6>
																			<span>Team Manager</span>
																		</div> <!-- /.text -->
																	</div> <!-- /.team-member -->
																</div> <!-- /.col- -->
																<div class="col-lg-3 col-sm-6 col-12">
																	<div class="team-member">
																		<div class="image-box">
																			<img src="{{ asset('images/team/4.jpg') }}" alt="">
																			<div class="overlay">
																				<div class="hover-content">
																					<ul>
																						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
																					
																					</ul>
																					<p>An expert in GST and Tax Automation in India</p>
																				</div> <!-- /.hover-content -->
																			</div> <!-- /.overlay -->
																		</div> <!-- /.image-box -->
																		<div class="text">
																			<h6>Yash Goenka</h6>
																			<span>Team Manager</span>
																		</div> <!-- /.text -->
																	</div> <!-- /.team-member -->
																</div> <!-- /.col- -->
															</div> <!-- /.row -->
														</div> <!-- /.wrapper -->
													</div> <!-- /.container -->
												</div> <!-- /.our-team -->


												<!--
												=====================================================
													Theme Counter
												=====================================================
												-->
												<div class="theme-counter section-spacing">
													<div class="container">
														<div class="bg">
															<h6>TMSL provides an all-at-source solution to the Indian and GCC Indirect Taxes challenges
															</h6>
															<h2>
																TMSL's Success
															</h2>

															<div class="cunter-wrapper">
																<div class="row">
																	<div class="col-md-3 col-6">
																		<div class="single-counter-box">
													        				<div class="number"><span class="timer" data-from="0" data-to="6" data-speed="1200" data-refresh-interval="5">0</span>+</div>
													        				<p>Automation Tools</p>
													        			</div> <!-- /.single-counter-box -->
																	</div>  <!-- /.col- -->
																	<div class="col-md-3 col-6">
																		<div class="single-counter-box">
													        				<div class="number"><span class="timer" data-from="0" data-to="70" data-speed="1200" data-refresh-interval="5">0</span>cr</div>
													        				<p>Transactions Structured</p>
													        			</div> <!-- /.single-counter-box -->
																	</div>  <!-- /.col- -->
																	<div class="col-md-3 col-6">
																		<div class="single-counter-box">
													        				<div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5">0</span></div>
													        				<p>Litigation Resolved</p>
													        			</div> <!-- /.single-counter-box -->
																	</div>  <!-- /.col- -->
																	<div class="col-md-3 col-6">
																		<div class="single-counter-box">
													        				<div class="number"><span class="timer" data-from="0" data-to="12" data-speed="1200" data-refresh-interval="5">0</span></div>
													        				<p>Awards Won</p>
													        			</div> <!-- /.single-counter-box -->
																	</div>  <!-- /.col- -->
																</div> <!-- /.row -->
															</div> <!-- /.cunter-wrapper -->
															<a href="#" class="theme-button-one">VIEW CASE STUDIES</a>
														</div> <!-- /.bg -->
													</div> <!-- /.container -->
												</div> <!-- /.theme-counter -->


												<!--
												=====================================================
													Free Consultation
												=====================================================
												-->
												@include('partials.free-consultation')


												<!--
												=====================================================
													Partner Slider
												=====================================================
												-->
												{{-- <div class="partner-section bg-color">
													<div class="container">
														<div class="row">
															<div class="col-md-3 col-sm-4 col-12">
																<h6>OUR <br>PARTNERS</h6>
															</div>
															<div class="col-md-9 col-sm-8 col-12">
																<div class="partner-slider">
																	<div class="item"><img src="{{ asset('images/logo/p-1.png') }}" alt=""></div>
																	<div class="item"><img src="{{ asset('images/logo/p-2.png') }}" alt=""></div>
																	<div class="item"><img src="{{ asset('images/logo/p-3.png') }}" alt=""></div>
																	<div class="item"><img src="{{ asset('images/logo/p-4.png') }}" alt=""></div>
																	<div class="item"><img src="{{ asset('images/logo/p-5.png') }}" alt=""></div>
																</div>
															</div>
														</div>
													</div>
												</div> <!-- /.partner-section --> --}}



</div>


@endsection
