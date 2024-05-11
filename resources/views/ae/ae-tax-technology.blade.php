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
                        {{-- <p>Tax technology revolutionizes the way businesses approach tax compliance and strategy. This service encompasses a suite of digital solutions designed to optimize tax processes, ensure compliance with global regulations, and leverage tax planning opportunities.</p> --}}
                        <hr>
                        <div class="theme-title-one">
                            <h4>Tax Automation</h4>
                            <hr>
                        </div> <!-- /.theme-title-one -->
                        <p>Tax automation refers to the use of technology to streamline and automate tax-related tasks and processes. It eliminates manual data entry, reduces errors, and improves efficiency in tax compliance and reporting.</p>
                        <hr>
                        <div class="theme-title-one">
                            <h4>RPA Solutions</h4>
                            <hr>
                        </div> <!-- /.theme-title-one -->
                        <p>RPA (Robotic Process Automation) solutions are software robots that can mimic human actions to perform repetitive and rule-based tasks. In the context of tax, RPA can be used to automate data extraction, data validation, and data entry, freeing up tax professionals to focus on more strategic activities.</p>
                        <hr>
                        <div class="theme-title-one">
                            <h4>VAT Tool</h4>
                            <hr>
                        </div> <!-- /.theme-title-one -->
                        <p>A VAT (Value Added Tax) tool is a software application that helps businesses manage their VAT compliance and reporting obligations. It automates VAT calculations, generates VAT returns, and ensures compliance with VAT regulations.</p>
                         <hr>
                        <div class="theme-title-one">
                            <h4>E-invoicing</h4>
                            <hr>
                        </div> <!-- /.theme-title-one -->
                        <p>E-invoicing is the electronic exchange of invoices between suppliers and buyers. It eliminates the need for paper-based invoices, reduces manual errors, and improves the efficiency of invoice processing. E-invoicing solutions often integrate with tax systems to ensure accurate and compliant invoicing.</p>
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

            <div class="our-solution section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our {Service} SOLUTIONS</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<!-- Tax Automation -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="single-solution-block">
        <img src="images/icon/services/tax/1.png" alt="Tax Automation Icon" class="icon">
        <h5><a href="">Tax Automation</a></h5>
        <p>Streamline tax processes through automated solutions that reduce manual tasks, enhance accuracy, and improve compliance with regulations.</p>
    </div> <!-- /.single-solution-block -->
</div> <!-- /.col- -->

<!-- RPA Solutions -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="single-solution-block">
        <img src="images/icon/services/tax/2.png" alt="RPA Solutions Icon" class="icon">
        <h5><a href="">RPA Solutions</a></h5>
        <p>Implement Robotic Process Automation to handle repetitive tax-related tasks, boosting efficiency and allowing your team to focus on strategic activities.</p>
    </div> <!-- /.single-solution-block -->
</div> <!-- /.col- -->

<!-- VAT Tool -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="single-solution-block">
        <img src="images/icon/services/tax/3.png" alt="VAT Tool Icon" class="icon">
        <h5><a href="">VAT Tool</a></h5>
        <p>Utilize our specialized VAT Tool to calculate, file, and manage VAT returns seamlessly, ensuring compliance with local tax laws.</p>
    </div> <!-- /.single-solution-block -->
</div> <!-- /.col- -->

<!-- E-invoicing -->
<div class="col-lg-4 col-sm-6 col-12">
    <div class="single-solution-block">
        <img src="images/icon/services/tax/4.png" alt="E-invoicing Icon" class="icon">
        <h5><a href="">E-invoicing</a></h5>
        <p>Adopt electronic invoicing to streamline your billing processes, reduce paper waste, and meet statutory digital submission requirements.</p>
    </div> <!-- /.single-solution-block -->
</div> <!-- /.col- -->

						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div>


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