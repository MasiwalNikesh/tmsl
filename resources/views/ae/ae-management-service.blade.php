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
        <!-- Managed Services Title and Description -->
        <div class="theme-title-one">
            <h2>Managed Services</h2>
            <p>Managed Services offer a strategic approach to managing your company's IT infrastructure and operations. By outsourcing these critical functions, businesses can focus on their core objectives while benefiting from expert support and the latest technologies.</p>
        </div> <!-- /.theme-title-one -->

        <!-- Managed Services Benefits -->
        <div class="wrapper">
            <div class="theme-title-one">
                <h4>Benefits</h4>
                <hr>
            </div> <!-- /.theme-title-one -->

            <div class="row">
                <!-- Benefit 1: Expertise -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Expertise</a></h5>
                            <p>Access to a team of IT professionals with specialized skills and knowledge.</p>
                            <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->

                <!-- Benefit 2: Cost Efficiency -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Cost Efficiency</a></h5>
                            <p>Reduce operational costs with a scalable service model tailored to your needs.</p>
                            <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->

                <!-- Benefit 3: Focus -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Focus</a></h5>
                            <p>Redirect internal resources towards strategic initiatives, knowing your IT operations are in expert hands.</p>
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
						<h2>Empower Your Business with Expert IT Support! Discover how our Managed Services can streamline your operations and secure your technology. Get started now and focus on what you do best</h2>
					
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