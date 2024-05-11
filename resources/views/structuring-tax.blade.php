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
        <!-- Structuring Transactions Title and Description -->
        <div class="theme-title-one">
            <h2>Structuring Transactions</h2>
            <p>Structuring Transactions is a specialized service designed to optimize the financial and legal aspects of your business deals. From mergers and acquisitions to joint ventures, we ensure your transactions support your strategic objectives while minimizing risk.</p>
        </div> <!-- /.theme-title-one -->

        <!-- Structuring Transactions Benefits -->
        <div class="wrapper">
            <div class="theme-title-one">
                <h4>Benefits</h4>
                <hr>
            </div> <!-- /.theme-title-one -->

            <div class="row">
                <!-- Benefit 1: Strategic Alignment -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Strategic Alignment</a></h5>
                            <p>Tailor transaction structures to align with your business goals and market conditions.</p>
                            <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->

                <!-- Benefit 2: Risk Mitigation -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Risk Mitigation</a></h5>
                            <p>Identify and address potential legal and financial risks before they impact the transaction.</p>
                            <a href="#" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-service -->
                </div> <!-- /.col- -->

                <!-- Benefit 3: Efficiency -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-service">
                        <div class="img-box"><img src="images/services.jpg" alt=""></div>
                        <div class="text">
                            <h5><a href="#">Efficiency</a></h5>
                            <p>Streamline the transaction process to save time and reduce costs.</p>
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
						<h2>Optimize Your Next Big Move! Ensure your transactions are structured for success with our expert guidance. Contact us today to navigate complex deals with confidence and strategic insights</h2>
						
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