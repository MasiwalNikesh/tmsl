<div class="consultation-form section-spacing">
													<div class="container">
														<div class="theme-title-one">
															<h2>Connect with us</h2>
															<p>Get in touch</p>
														</div> <!-- /.theme-title-one -->
														<div class="clearfix main-content no-gutters row">
															<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
															<div class="col-xl-6 col-lg-7 col-12">
																<div class="form-wrapper">
																	<form action="{{ route('handler') }}" method="GET" class="theme-form-one">
																		@csrf
																		<div class="row">
																			<div class="col-md-6"><input type="text" name="name" placeholder="Name *"></div>
																			<div class="col-md-6"><input type="text" name="phone" placeholder="Phone *"></div>
																			<div class="col-md-6"><input type="email" name="email" placeholder="Email *"></div>
																			<div class="col-md-6">
																				<select class="form-control" id="exampleSelect1" name="service">
																					<option>Service you’re looking for?</option>
																					<option>Tax Automation</option>
																					<option>Litigation Issues</option>
																					<option>TMSL Tools</option>
																					<option>GCC VAT</option>
																				</select>
																			</div>
																			<div class="col-12"><textarea name="message" placeholder="Message"></textarea></div>
																		</div> <!-- /.row -->
																		<button type="submit" class="theme-button-one">GET A CALL BACK</button>
																	</form>
																	</form>
																</div> <!-- /.form-wrapper -->
															</div> <!-- /.col- -->
														</div> <!-- /.main-content -->
													</div> <!-- /.container -->
												</div> <!-- /.consultation-form -->
