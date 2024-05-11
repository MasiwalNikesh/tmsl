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
                        <h2>SERVICES</h2>
                    </div> <!-- /.container -->
                </div> <!-- /.overlay -->
            </div> <!-- /.theme-inner-banner -->


            <!-- 
            =============================================
                Service Style One
            ============================================== 
            -->
            <div class="service-style-one section-spacing">
                <div class="container">
                    <div class="theme-title-one">
                        <h2>Tax Technology</h2>
                        <p>Tax technology revolutionizes the way businesses approach tax compliance and strategy. This service encompasses a suite of digital solutions designed to optimize tax processes, ensure compliance with global regulations, and leverage tax planning opportunities.</p>
                    </div> <!-- /.theme-title-one -->
                    <div class="wrapper">
                     <div class="theme-title-one">
                        <h4>Benefits</h4>
                        <hr>
                    </div> <!-- /.theme-title-one -->
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="single-service">
                                    <div class="img-box"><img src="images/services.jpg" alt=""></div>
                                    <div class="text">
                                        <h5><a href="#">Accuracy and Compliance</a></h5>
                                        <p>Automate tax calculations and filings to reduce human errors and ensure compliance with ever-changing tax laws.</p>
                                        <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div> <!-- /.text -->
                                </div> <!-- /.single-service -->
                            </div> <!-- /.col- -->
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="single-service">
                                    <div class="img-box"><img src="images/services.jpg" alt=""></div>
                                    <div class="text">
                                        <h5><a href="#">Efficiency</a></h5>
                                        <p>Streamline tax processes, freeing up valuable time for strategic planning and core business activities.</p>
                                        <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div> <!-- /.text -->
                                </div> <!-- /.single-service -->
                            </div> <!-- /.col- -->
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="single-service">
                                    <div class="img-box"><img src="images/services.jpg" alt=""></div>
                                    <div class="text">
                                        <h5><a href="#">Insights</a></h5>
                                        <p>Gain valuable insights from tax data to inform decision-making and identify tax savings opportunities.</p>
                                        <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div> <!-- /.text -->
                                </div> <!-- /.single-service -->
                            </div> <!-- /.col- -->
                        </div> <!-- /.row -->
                    </div> <!-- /.wrapper -->

                    
                </div> <!-- /.container -->
            </div> <!-- /.service-style-one -->

            <!-- 
            =============================================
                Benefits Section
            ============================================== 
            -->
      
			

			
			<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2>Transform Your Tax Strategy Today! Unlock efficiency and insights with our cutting-edge Tax Technology solutions. Click here to start simplifying tax compliance and driving strategic value</h2>
						
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			@include('partials.free-consultation')

			<!-- 
			=============================================
				Top Feature
			============================================== 
			-->
			



@endsection