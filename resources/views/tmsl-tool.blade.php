@extends('app')
@section('title', 'Services Page')
@section('content')


			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>TMSL TOOL</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Service Details
			============================================== 
			-->
			<div class="service-details section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-12">
							<div class="service-content">
								<img src="images/demo.jpg" alt="" class="cover-img">
								<h3 class="main-title">TMSL DIY Legal Tool</h3>
								<p>
                                Introduction:
                                <strong>"Empower yourself to address legal notices directly. Our platform offers a comprehensive suite of expertly drafted replies to a wide range of legal notices. With DIY, handling legal documents is straightforward and secure."</strong>

                                How It Works:

                                <ul>
                                    <li>Select Your Notice Type: "Browse our library to find the specific notice you’ve received."</li>
                                    <li>Customize Your Reply: "Use our guided forms to tailor the expert-drafted reply to your situation."</li>
                                    <li>Send With Confidence: "Follow our step-by-step guide to send your professional response."</li>
                                </ul>

                                Why Choose Us:

                                <ul>
                                    <li>Expert Drafted: "Every reply is crafted by a team of legal experts to ensure compliance and effectiveness."</li>
                                    <li>Cost-Effective: "Manage legal notices without the high costs of hiring a lawyer for simple cases."</li>
                                    <li>Fast and Efficient: "Save time with templates that are easy to customize and ready to send."</li>
                                </ul>
                                </p>
								<div class="presentation-section">
									<h4 class="sub-heading">TMSL Legal Tool:</h4>
									<p>DIY enables you to handle notices with the help of replies drafted by a team of legal experts.</p>
									<div class="row">
										<div class="col-md-6 col-12">
											<ul class="best-list-item">
<li>
    <img width="60" src="images/tool1/ic1.png" alt=""> <h5>Crafted by Experts</h5>
    <p>Professionally designed by seasoned legal professionals for maximum efficacy</p>
</li>
												<li>
													<img width="60" src="images/tool1/ic2.png" alt=""> 
													<h5>Value for Money</h5>
													<p>High-quality service offered at a cost-effective price to ensure excellent returns on your investment.</p>
												</li>
												<li>
													<img width="60" src="images/tool1/ic3.png" alt=""> 
													<h5>Litigation ready</h5>
													<p>Prepared and fortified to meet the rigorous standards of legal proceedings, if necessary</p>
												</li>
                                                <li>
													<img width="60" src="images/tool1/ic4.png" alt=""> 
													<h5>Researched Reponses</h5>
													<p>Each reply is thoroughly investigated and backed by the latest legal precedents and statutes.</p>
												</li>
											</ul>
										</div>
										<div class="col-md-6 col-12"><img src="images/tmsltool.jpg" alt="" class="chart"></div>
									</div>
								</div> <!-- /.presentation-section -->

								<div class="topics">
									<h4 class="sub-heading">FAQs about the Tool</h4>
									<div class="accordion-one">
										<div class="panel">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        1. How do you ensure the legality of your drafted replies?</a>
                                        </h6>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        <p>Each reply is meticulously crafted and reviewed by our team of legal experts, ensuring adherence to current laws and regulations. We continuously update our templates to reflect the latest legal standards and practices.</p>
                                        </div>
                                    </div>
                                    </div> <!-- /panel 2 -->
									</div> <!-- End of .accordion-one -->
								</div> <!-- /.topics -->

							
							</div> <!-- /.service-content -->
						</div> <!-- /.col- -->

						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 theme-sidebar-one">
							<div class="sidebar-box service-categories">
								<h5 class="title">Our Tools</h5>
								<ul>
									<li><a href="#">TMSL NOTICE MANAGEMENT TOOL</a></li>
									<li class="active"><a href="#">TMSL DIY 
LegaL KiT</a></li>
									<li><a href="#">TMSL DESK AUDIT TOOL</a></li>
								
								</ul>
							</div> <!-- /.service-categories -->
							<div class="sidebar-box sidebar-brochures">
								<h5 class="title">Brochures</h5>
								<ul>
									<li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download file. pdf</a></li>
									<li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> Download file. ppt</a></li>
								</ul>
							</div> <!-- /.sidebar-brochures -->
							<div class="sidebar-box sidebar-contact">
								<h5 class="title">Contact Form</h5>
								<form action="#">
									<input type="text" placeholder="Name">
									<input type="email" placeholder="Email">
									<textarea placeholder="Message"></textarea>
									<button class="theme-button-one">SUBMIT</button>
								</form>
							</div> <!-- /.sidebar-contact -->
						</div> <!-- /.theme-sidebar-one -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.service-details -->




		
	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s" style="display: none;">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


@endsection