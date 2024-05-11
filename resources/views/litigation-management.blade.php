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
        <!-- Litigation Management Title and Description -->
        <div class="theme-title-one">
            <h2>Litigation Management</h2>
            <p>Litigation Management involves the strategic handling of legal disputes and litigation to protect your business interests. Our service covers everything from risk assessment to resolution, ensuring that your legal challenges are managed efficiently and effectively.</p>
        </div> <!-- /.theme-title-one -->

        <!-- Litigation Management Benefits -->
        <div class="wrapper">
            <div class="theme-title-one">
                <h4>Benefits</h4>
                <hr>
            </div> <!-- /.theme-title-one -->

            <div class="row">
                <!-- Benefit 1: Risk Management -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Risk Management</a></h5>
                            <p>Proactively identify and mitigate legal risks to your business.</p>
                            <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->

                <!-- Benefit 2: Strategic Advice -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Strategic Advice</a></h5>
                            <p>Benefit from expert legal strategy to navigate disputes and litigation.</p>
                            <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->

                <!-- Benefit 3: Cost Control -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Cost Control</a></h5>
                            <p>Manage legal costs effectively, avoiding unnecessary expenses.</p>
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
						<h2>Protect Your Interests with Proactive Litigation Management! Don't let legal challenges distract you from your business goals. Reach out now for strategic support and peace of mind</h2>
						
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