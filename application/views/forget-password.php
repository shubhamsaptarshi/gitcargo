<!DOCTYPE html>
<html lang="en">

<?php include('admin/include/header.php'); ?>
	
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
		    <?php include('admin/include/header.php'); ?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			
		<section class="log-space">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-11 col-md-11">
						
							<div class="row no-gutters position-relative log_rads">
								<div class="col-lg-6 col-md-5 bg-cover" style="background:#1f2431 url(<?php echo base_url();?>assets/img/log.png)no-repeat;">
									
								</div>
								
								<div class="col-lg-6 col-md-7 position-static p-4" id="get_otp_section" name="get_otp_section">
									<div class="log_wraps">
										<div class="log__heads">
											<h4 class="mt-0 logs_title">Password <span class="theme-cl">Recovery</span></h4>
										</div>
										<form id="forgot_password_form" method="post">										
											<div class="form-group">
												<label>Enter Registered Email Id*</label>
												<input id="email" name="email" type="text" class="form-control" placeholder="email@gmail.com">
											</div>

											<div class="card-action text-center">
												<div id="success_div" name="success_div">
												</div>
												<button class="btn btn-success">Get OTP</button>
												<label> OR </label>
												<a href="<?php echo base_url();?>Login/" class="theme-cl">Sign In?</a>
											</div>
										</form>
										
									</div>
								</div>
								<div id="update_password_section" name="update_password_section">
									<form id="update_password_form" method="post">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-12">
													<div class="form-group">
														<label for="password" >OTP</label>
														<input required type="number" class="form-control" id="otp" name="otp" placeholder="Enter otp">
													</div>
													<div class="form-group">
														<label>Enter Password</label>
														<input type="password" class="form-control" placeholder="Password" id="password" name="password" required onkeyup="resetMsg()">
														<label id="pwd_err" style="display:none; color:red;font-weight: 600;"></label>
													</div>
													<div class="form-group">
														<label>Enter Confirm Password</label>
														<input type="password" class="form-control" placeholder="Confirm Password" id="cpassword" name="cpassword" required onkeyup="resetMsg()">
														<label id="cpwd_err" style="display:none; color:red;font-weight: 600;"></label>
													</div>

												</div>
											</div>
										</div>
										<div class="card-action text-center">
											<div id="success_div" name="success_div">
											</div>
											<button class="btn btn-success">Submit</button>
										</div>                                    
									</form>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</section>
			
			
			
			
		
			
			<!-- ============================ Footer Start ================================== -->
			<?php include('admin/include/footerjs.php'); ?>
			<!-- ============================ Footer End ================================== -->
			
	
			
		
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
	 <?php include('admin/include/footerjs.php'); ?>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

</html>

<script type="text/javascript">
   var base_url = '<?php echo base_url();?>';

    $(document).ready(function(){
		$("#update_password_section").hide();
   		$('#forgot_password_form').on('submit', forgot_password_Form);
		$('#update_password_form').on('submit', update_password_Form);
    });

    function forgot_password_Form(event) {
    event.preventDefault();
    $.ajax({
    url: '<?php echo base_url('forgetpassword/otp');?>',
    method: 'POST',
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend: function() {
      $('#forgot_password_form').attr('disabled', 'disabled');
    },
    success: function(data) {
		console.log(data);
      if (data.successful) {
			$('#success_div').html('<b style="color:green"> Please Check email for Otp.</b>');
			setTimeout(function() {
				$("#success_div").hide();
				$("#get_otp_section").hide();
				$("#update_password_section").show();
				// window.location.replace('<?php echo base_url();?>'+'forgetpassword/setpassword/');
			}, 3000);
      }
     else if(data.error){
          $('#success_div').html('<b style="color:red">Please Enter Registered Email Id.</b>');
       }
    },  
  });
}

	function resetMsg(){
		$('#pwd_err').text('');
		$('#pwd_err').css('display', 'none');
		$('#cpwd_err').text('');
		$('#cpwd_err').css('display', 'none');
	}

	function validateData(){
		var pwd = $('#password').val();
		var cpwd = $('#cpassword').val();

		if(!pwd || pwd == null || $.trim(pwd).length == 0){
			$('#pwd_err').text('Password cannot be empty');
			$('#pwd_err').css('display','block');
			return false;
		}
		if($.trim(pwd).length < 5){
			$('#pwd_err').text('Password should have at least 5 characters');
			$('#pwd_err').css('display','block');
			return false;
		}
		if(!cpwd || cpwd == null || $.trim(cpwd).length == 0){
			$('#cpwd_err').text('Confirm password cannot be empty');
			$('#cpwd_err').css('display','block');
			return false;
		}
		if(pwd != cpwd){
			$('#pwd_err').text('The password and confirm password are not matching');
			$('#pwd_err').css('display','block');
			return false;
		}
		return true;
	}

	function update_password_Form(event) {
		if(!validateData()){
			return;
		}
        event.preventDefault();
        $.ajax({
            url: '<?php echo base_url('forgetpassword/updatepassword');?>',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function() {
                $('#update_password_form').attr('disabled', 'disabled');
            },
            success: function(data) {
                if (data.successful) {
                    $('#success_div').html('<b style="color:green"> Password updated successfully.</b>');
                    setTimeout(function() {
                        $("#success_div").hide();
                        window.location.href = "<?php echo base_url('home/'); ?>";
                    }, 3000);
                }
                else if(data.wrongotp){
                    $('#success_div').html('<b style="color:red">Please enter correct otp.</b>');
                }
                else{
                    $('#success_div').html('<b style="color:red">Invalid Login</b>');
                }
            },
    
        });
    }

</script>
