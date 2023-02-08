<div class="alert alert_top alert-dismissible fade show" role="alert">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-3 col-xs-4">
				<div class="headertop_content">
					<i class="fa fa-envelope" aria-hidden="true"></i> : contact@train2success.in                        
				</div>
			</div>
			<div class="col-md-8 col-sm-9 col-xs-8">
				<?php $userid = $this->session->userdata('userid');
				if($userid && $userid > 0) { ?>
				<ul class="topmenu">
					<li><a href="#" rel="nofollow" class=" vbplogin"><?php echo $this->session->userdata('username');?><span class="submenu-indicator"></span></a>
						<ul class="nav-dropdown nav-submenu">
							<li>
								<a href="<?php echo base_url('mydashboard/');?>">Dashboard</a>
							</li>
							<li>
								<a href="<?php echo base_url('myprofile/');?>">My Profile</a>
							</li>
							<li>
								<a href="<?php echo base_url('login/logout');?>">Logout</a> 
							</li>
						</ul>
					</li>
					<li><a href="<?php echo base_url('login/logout');?>" class="vbpregister">Logout</a></li>
				</ul>
				<?php } else { ?>
				<ul class="topmenu">
					<li><a href="<?php echo base_url('Login/');?>" rel="nofollow" class=" vbplogin">Login</a></li>
					<li><a href="<?php echo base_url('Register/');?>" class="vbpregister" title="Create an account">Sign Up</a></li>
				</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<!-- Start Navigation -->
<div class="header header-light head-shadow">
	<div class="container">
		<nav id="navigation" class="navigation navigation-landscape">
			<div class="nav-header">
				<a class="nav-brand" href="<?php echo base_url();?>">
					<img src="<?php echo base_url();?>assets/img/logo.png" class="logo" alt="d" />
				</a>
				<div class="nav-toggle"></div>
			</div>
			<div class="nav-menus-wrapper" style="transition-property: none;">
				<ul class="nav-menu align-to-right">
					<li class="<?=(current_url()==base_url()) ? 'active':''?>" >
						<a href="<?php echo base_url();?>">Home</a> 
					</li>
					<li class="<?=(current_url()==base_url('courses/categories/1')) ? 'active':''?>">
						<a href="#">Courses<span class="submenu-indicator"></span></a>
						<ul class="nav-dropdown nav-submenu"  id="course_cat_menu_list">
							<li>
								<a href="<?php echo base_url('courses/1/');?>">Basic Business Skills</a>
							</li>
							<li>
								<a href="<?php echo base_url('courses/2/');?>">Professional Management Courses</a> 
							</li>
						</ul>
					</li>
					<li class="<?php if($this->uri->uri_string() == 'companyprofile') { echo 'active'; } else if($this->uri->uri_string() == 'founders')  { echo'active'; }  ?>" >
						<a href="#">About Us<span class="submenu-indicator"></span></a>
						<ul class="nav-dropdown nav-submenu">
							<li><a href="<?php echo base_url();?>companyprofile/">Company Profile</a></li>
							<li><a href="<?php echo base_url();?>founders/">Founders</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Videos<span class="submenu-indicator"></span></a>    
					    
						<ul class="nav-dropdown nav-submenu">
							<li><a href="https://train2success.in/blog/all-about-leadership/">All About Leadership</a></li>
							<li><a href="https://train2success.in/blog/public-speaking-small-group-facilitation/">Public Speaking & </br>small group facilitation</a></li>
						</ul>
					</li>
					
					
					<li><a href="/blog">Blog </a> </li>
					<li class="<?php if($this->uri->uri_string() == 'contactus') { echo 'active'; } ?>"><a href="<?php echo base_url();?>contactus/">Contact Us</a></li>
				</ul>
			</div>
		</nav>
	</div>
</div>
