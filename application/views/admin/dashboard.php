<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>


		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2"> Admin Dashboard</h5>
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Course Category</div>
								</div>
								<div class="card-body pb-0">
									<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url();?>assets/admin/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Course Category</h6>
											<small class="text-muted">total number of Course Category</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
										<h3 class="text-info fw-bold"><?php echo $totalCourseCatcount;?> </h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									
									
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Course</div>
								</div>
								<div class="card-body pb-0">
								
								<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url();?>assets/admin/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Course</h6>
											<small class="text-muted">total number of Course</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold"><?php echo $totalCoursecount;?></h3></h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
								
								
									<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url();?>assets/admin/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Module</h6>
											<small class="text-muted">total number of modules</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold"><?php echo $totalmodulecount;?></h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url();?>assets/admin/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Topic</h6>
											<small class="text-muted">total number of topics</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold"><?php echo $totaltopicscount;?></h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Active Users</div>
								</div>
								<div class="card-body pb-0">
									<div class="d-flex">
										<div class="avatar">
											<img src="<?php echo base_url();?>assets/admin/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Active Users</h6>
											<small class="text-muted">total number of Users</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold"><?php echo $totalActiveUsercount;?></h3>
										</div>
									</div>
									
									<div class="separator-dashed"></div>
									
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						Copyright 2021 Train2Success
					</nav>
					<div class="copyright ml-auto">
						Designed & Developed by  <a href="https://www.webdakaar.com/">WDDC</a>
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<?php $this->load->view('admin/include/footerjs');?>
