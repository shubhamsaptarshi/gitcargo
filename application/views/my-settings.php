<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>
	
    <body class="red-skin">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
    
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
		    <?php include('header.php'); ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			
		<section class="gray pt-0">
				<div class="container-fluid">
					
					<!-- Row -->
					<div class="row">
					
						<div class="col-lg-3 col-md-3 p-0 ">
							<div class="dashboard-navbar mt-2 ">
								
								<div class="d-user-avater text-left">
									
									<h4>Adam Harshvardhan</h4>
									<span class="text-white">Canada USA</span>
								</div>
								
								<div class="d-navigation">
									<ul id="side-menu">
										
										<li><a href="<?php echo base_url();?>Myprofile/"><i class="ti-heart"></i>Dashboard</a></li>
										
										
										<li class="active"><a href="<?php echo base_url();?>Mysettings/"><i class="ti-settings"></i>Profile Settings</a></li>
										
										<li><a href="#"><i class="ti-power-off"></i>Log Out</a></li>
									</ul>
								</div>
								
							</div>
							
							
						</div>	
						
						<div class="col-lg-9 col-md-9 col-sm-12">
						
							<div class="row mt-2">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
												<h4>Setup Your Detail</h4>
											</div>
										</div>
										<div class="dashboard_container_body p-4">
											<!-- Basic info -->
											<div class="submit-section">
												<div class="form-row">
												
													<div class="form-group col-md-6">
														<label>Your Name</label>
														<input type="text" class="form-control" value="Shaurya Preet">
													</div>
													
													<div class="form-group col-md-6">
														<label>Email</label>
														<input type="email" class="form-control" value="preet77@gmail.com">
													</div>
													
													<div class="form-group col-md-6">
														<label>Your Title</label>
														<input type="text" class="form-control" value="Web Designer">
													</div>
													
													<div class="form-group col-md-6">
														<label>Phone</label>
														<input type="text" class="form-control" value="123 456 5847">
													</div>
													
													<div class="form-group col-md-6">
														<label>Address</label>
														<input type="text" class="form-control" value="522, Arizona, Canada">
													</div>
													
													<div class="form-group col-md-6">
														<label>City</label>
														<input type="text" class="form-control" value="Montquebe">
													</div>
													
													<div class="form-group col-md-6">
														<label>State</label>
														<input type="text" class="form-control" value="Canada">
													</div>
													
													<div class="form-group col-md-6">
														<label>Zip</label>
														<input type="text" class="form-control" value="160052">
													</div>
													
													
													<div class="form-group col-lg-12 col-md-12">
															<button class="btn btn-theme" type="submit">Save Changes</button>
														</div>
												</div>
											</div>
											<!-- Basic info -->
											
											
											
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			
			
			
			
		
			
			<!-- ============================ Footer Start ================================== -->
			<?php include('footer.php'); ?>
			<!-- ============================ Footer End ================================== -->
			
	
			
		
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
	 <?php include('footerjs.php'); ?>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

</html>