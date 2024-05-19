@extends('app')
@section('title', 'About Us Page')
@section('content')

<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>ABOUT US</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				CallOut Banner 
			============================================== 
			-->
			<div class="callout-banner no-bg">
				<div class="container clearfix">
					<h3 class="title">Serving Tax, <br> Technologically</h3>
					<p>
					TMSL stands for Tax Technology Managed Services LLP. TMSL is a modern day Tax Technology firm that provides tax services- technologically. TMSL is envisioned and founded by leaders to automate the routine and mundane compliances for businesses to focus on the essential strategic functions. With the increased demand of e-linking and e-assessments round the globe, TMSL provides an all-at-source solution to the Indian and GCC Indirect Taxes challenges. With the vide experience of the team in erstwhile taxes as well, our expertise is to provide the best solution with quick turnaround time. 
					The company is founded by Pratik Shah having 2 decades and Jigar Doshi having 15 years of experience in indirect taxes.
					</p>
					{{-- <a href="#" class="theme-button-one">CONTACT US</a> --}}
					<img width="80" src="images/bot/b1.png" alt="" class="sign">
				</div>
			</div> <!-- /.callout-banner -->
			
			
			
			<!-- 
			=============================================
				About Company Stye Two
			============================================== 
			-->
			<div class="about-compnay-two no-bg section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-12 text order-lg-last">
								<div class="theme-title-one">
									<h2>Vision | Mission</h2>
								</div> <!-- /.theme-title-one -->
								<h6>
								Re-calibrating Tax using Technology
								</h6>
								<p>
								To ensure customer delight by providing correct combination of technology and tax knowledge and thereby achieving stakeholder’s enrichment supported by employee growth in making them leaders in their areas of expertise.
								</p>
								<hr>
								<h6>
								Automate all that can be automated in Indirect Taxes
								</h6>
								<p>
								To align all the taxation related stakeholders by way of automation and ensuring computers do what they are supposed to do and creating the bandwidth for excellent minds in exploring their desires.
								</p>
								
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-12 order-lg-first">
								<img src="images/home/abouttmsl.jpg" alt="" class="left-img">
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.about-compnay-two -->


			<!--
			=====================================================
				Why We Best
			=====================================================
			-->
			
			<div class="why-we-best">
				<div class="overlay">
					<div class="container">
						<div class="theme-title-one">
							<h2>A truly global firm</h2>
							<p>
							Keeping the global market in mind, TMSL lays its expertise in the Indian and GCC Indirect Taxes. The established practice is all set to spread to other boundaries.
							</p>
						</div> <!-- /.theme-title-one -->

						<div class="wrapper row no-gutters">
							<div class="col-lg-6 col-12 order-lg-last"><div class="img-box"></div></div>
							<div class="col-lg-6 col-12 order-lg-first">
								<ul class="best-list-item">
									<li>
										<img width="50" src="images/home/india.png" alt="Indian Flag">
										<h5><a href="#">Indian GST and Taxation</a></h5>
										<p>Indian GST revolutionized taxation by replacing multiple indirect taxes with a unified Goods and Services Tax, 
										streamlining compliance and enhancing transparency in the Indian tax system.</p>
									</li>
									<li>
										<img width="50" src="images/home/united-arab-emirates.png" alt="Indian Flag">
										<h5><a href="#">UAE - GCC Direct Taxes</a></h5>
										<p>The UAE and GCC countries have implemented Direct Taxes regulations to diversify revenue sources, 
										aiming to bolster economic stability and reduce reliance on oil revenues while encouraging foreign investment in the region.</p>
									</li>
									
								</ul>
							</div> <!-- /.col- -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.why-we-best -->


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
		
			{{-- <div class="theme-counter-two section-spacing">
				<div class="container">
					<div class="clearfix">
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
					</div> <!-- /.clearfix -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter --> --}}

				@include('partials.team')
			<!-- 
			=============================================
				Core Values
			============================================== 
			-->
			<div class="core-values">
				<div class="container">
					<div class="theme-title-one">
						<h2>#TMSLLife</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="core-value-slider">
							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="images/life/3.jpg" alt="">
										
									</div> <!-- /.image-box -->
									
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="images/life/4.jpg" alt="">
										
									</div> <!-- /.image-box -->
									
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="images/life/5.jpg" alt="">
										
									</div> <!-- /.image-box -->
									
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->

							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="images/life/6.jpg" alt="">
										
									</div> <!-- /.image-box -->
									
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->


							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="images/life/7.jpg" alt="">
										
									</div> <!-- /.image-box -->
									
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->


							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="images/life/8.jpg" alt="">
										
									</div> <!-- /.image-box -->
									
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
						</div> <!-- /.core-value-slider -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.core-values -->

			

			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
		





{{-- <div id="content">
	
	<!-- Section -->
	<section>
		<div class="container text-center">
			<div class="row">   
				<div class="col-lg-8 col-lg-push-2">
					<h3 class="mb-40">Serving Tax, Technologically</h3>
					<!-- Nav tabs -->
  					<ul class="nav nav-pills mb-40" role="tablist">
  						<li class="active"><a href="#history" role="tab" data-toggle="tab">About Us</a></li>
  						<li><a href="#mission" role="tab" data-toggle="tab">Our Vision</a></li>
  						<li><a href="#whats-next" role="tab" data-toggle="tab">Our Mission</a></li>
  					</ul>
  					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="history">
						<h3 class="mb-40">About Us</h3>
							<p class="lead">TMSL stands for Tax Technology Managed Services LLP. TMSL is a modern day Tax Technology firm that provides tax services- technologically. TMSL is envisioned and founded by leaders to automate the routine and mundane compliances for businesses to focus on the essential strategic functions. With the increased demand of e-linking and e-assessments round the globe, TMSL provides an all-at-source solution to the Indian and GCC Indirect Taxes challenges. With the vide experience of the team in erstwhile taxes as well, our expertise is to provide the best solution with quick turnaround time. The company is founded by Pratik Shah having 2 decades and Jigar Doshi having 15 years of experience in indirect taxes.</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="mission">
							<div class="row">
							<h3 class="mb-40">Our Vision</h3>
								<p class="lead">To ensure customer delight by providing correct combination of technology and tax knowledge and thereby achieving stakeholder’s enrichment supported by employee growth in making them leaders in their areas of expertise.</p>

							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="whats-next">
						<h3 class="mb-40">Our Mission</h3>
							<p class="lead">To align all the taxation related stakeholders by way of automation and ensuring computers do what they are supposed to do and creating the bandwidth for excellent minds in exploring their desires.</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section -->
	<section class="bg-grey pt-30">
		<div class="container">
			<div class="row mb-30 text-center">
				<!-- Member -->
				<div class="col-md-6 mb-30">
					<img src="https://tmsl.in/wp-content/uploads/2019/04/jigar-profile.jpg" alt="">
					<div class="p-30 bg-white">
						<h5 class="mb-0">Jigar Doshi</h5>	
						<span class="text-muted">Founding Partner</span>
						<p class="mt-20 mb-0">A visionary in automation and to move in line with the global trends, Jigar is a Chartered Accountant by qualification and has over 15 years of extensive work experience in the field of indirect taxation. His domain expertise includes GST, Customs, erstwhile Indirect Taxes and UAE VAT legislations. He has substantial experience in advisory, compliance, refund assessments, representation and litigation. Jigar has been awarded young accountant of the year 2019 by IAB awards at London and he has been part of the 15 member (Indian) Group of Ministers meet for simplification of Indian GST return process. He has trained esteemed Indian Government officials as an empaneled trainer at National Academy of Customs Excise and Narcotics. He regularly writes for various journals and has spoken at multiple national and international forums. </p>
					</div>
				</div>
				<!-- Member -->
				<div class="col-md-6 mb-30">
					<img src="https://tmsl.in/wp-content/uploads/2019/04/pratik-profile.png" alt="">
					<div class="p-30 bg-white">
						<h5 class="mb-0">Pratik Shah</h5>
						<span class="text-muted">Founding Partner</span>
						<p class="mt-20 mb-0">
						Pratik possesses a rich experience of 20 years of specialization in field of Indirect Taxes in India and Globally. As an expert in the field of Indirect Taxes, Pratik has also worked on complex risk management and process consulting projects from tax and technology perspective. Pratik was also responsible for setting-up and expansion of Tax practice for a multinational Tax consultancy firm in different countries within GCC. The work experience includes handling of diverse projects related to VAT & GST policy and procedures, setting up of India compliance center as center of excellence, representation to Ministry of Finance and also before Tax authority for identifying issues of Trade & Industry from GCC VAT and India GST perspective. Pratik has also contributed to the Doing Business Guide – India Chapter as published by World Bank.

						</p>
					</div>
				</div>
				<!-- Member -->
			
			</div>
			<div class="row text-center">
			<p>&nbsp;</p>	
				<div class="col-lg-8 col-lg-push-2">
					<img src="https://tmsl.in/wp-content/uploads/2023/04/team.jpg" alt="">
				</div>
			</div>
			
		</div>
	</section>

	<!-- Section -->
	

	
</div> --}}

@endsection