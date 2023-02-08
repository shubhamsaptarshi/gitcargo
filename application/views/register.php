<?php
$firstname = ($this->session->userdata('first_name')) ? $this->session->userdata('first_name') : '';
$lastname = ($this->session->userdata('last_name')) ? $this->session->userdata('last_name') : '';
$email = ($this->session->userdata('email')) ? $this->session->userdata('email') : '';
$userid = ($this->session->userdata('userid')) ? $this->session->userdata('userid') : '';
?>
<section class="log-space">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-md-11">

				<div class="row no-gutters position-relative log_rads">
					<div class="col-lg-6 col-md-5 bg-cover" style="background:#1f2431 url(<?php echo base_url(); ?>assets/img/log.png) no-repeat;">
					</div>

					<div class="col-lg-6 col-md-7 position-static p-4">
						<div class="log_wraps">

							<div class="log__heads">
								<h4 class="mt-0 logs_title">Create an <span class="theme-cl">Account</span></h4>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label>First Name*</label>
									<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required onkeyup="resetMsg()" value="<?php echo $firstname;?>">
									<label id="fname_err" style="display:none; color:red;font-weight: 600;"></label>
									<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
								</div>

								<div class="form-group col-md-6">
									<label>Last Name*</label>
									<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required onkeyup="resetMsg()" value="<?php echo $lastname;?>">
									<label id="lname_err" style="display:none; color:red;font-weight: 600;"></label>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Mobile Number</label>
									<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" onkeyup="resetMsg()" maxlength="10">
									<label id="mobile_err" style="display:none; color:red;font-weight: 600;"></label>
								</div>
								<div class="form-group col-md-6">
									<label>Email-ID*</label>
								<?php if($userid && $userid > 0) { ?>
									<input type="text" id="email_disabled" name="email_disabled" class="form-control" value="<?php echo $email;?>" disabled>
									<input type="hidden" id="email" name="email" value="<?php echo $email;?>">
								<?php } else { ?>
									<input type="text" id="email" name="email" class="form-control" placeholder="email@gmail.com" required onkeyup="resetMsg()" value="<?php echo $email;?>">
									<label id="email_err" style="display:none; color:red;font-weight: 600;"></label>
								<?php } ?>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label>City*</label>
									<input type="text" id="city" name="city" class="form-control" placeholder="City" required onkeyup="resetMsg()">
									<label id="city_err" style="display:none; color:red;font-weight: 600;"></label>
								</div>
								<div class="form-group col-md-6">
									<label>State*</label>
									<select name="state" id="state" class="form-control" onchange="resetMsg()">
										<option>Andhra Pradesh</option>
										<option>Andaman n Nicobar Islands</option>
										<option>Arunachal Pradesh</option>
										<option>Assam</option>
										<option>Bihar</option>
										<option>Chandigarh</option>
										<option>Chhattisgarh</option>
										<option>Dadar n Nagar Haveli</option>
										<option>Daman n Diu</option>
										<option>Delhi</option>
										<option>Lakshadweep</option>
										<option>Puducherry</option>
										<option>Goa</option>
										<option>Gujarat</option>
										<option>Haryana</option>
										<option>Himachal Pradesh</option>
										<option>Jammu n Kashmir</option>
										<option>Jharkhand</option>
										<option>Karnataka</option>
										<option>Kerala</option>
										<option>Ladakh</option>
										<option>Madhya Pradesh</option>
										<option>Maharashtra</option>
										<option>Manipur</option>
										<option>Meghalaya</option>
										<option>Mizoram</option>
										<option>Nagaland</option>
										<option>Odisha</option>
										<option>Punjab</option>
										<option>Rajasthan</option>
										<option>Sikkim</option>
										<option>Tamilnadu</option>
										<option>Telangana</option>
										<option>Tripura</option>
										<option>Uttar Pradesh</option>
										<option>Uttarakhand</option>
										<option>West Bengal</option>
									</select>
									<label id="state_err" style="display:none; color:red;font-weight: 600;"></label>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
								<?php if(!$userid || $userid == '') { ?>
									<label>Password*</label>
									<input type="password" id="pwd" name="pwd" class="form-control" placeholder="Enter password for you" onkeyup="resetMsg()">
									<label id="pwd_err" style="display:none; color:red;font-weight: 600;"></label>
								<?php } ?>
								</div>
								<div class="form-group col-md-6">
								<?php if(!$userid || $userid == '') { ?>
									<label>Confirm Password*</label>
									<input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="Enter confirm password" required onkeyup="resetMsg()">
									<label id="cpwd_err" style="display:none; color:red;font-weight: 600;"></label>
								<?php } ?>

								</div>
							</div>

							<div class="form-group">
								<a href="#" onclick="signupUser()" class="btn btn_apply w-100">Sign Up</a>
								<label id="signup_err" style="display:none; color:red;font-weight: 600;"></label>
							</div>

							<div class="form-group text-center mb-0 mt-3">
								Already have an account? <a href="<?php echo base_url(); ?>Login/" class="theme-cl">Sign In</a>
							</div>

							<!-- ------------------------------------------------new code------------------------------------------------->
							<div class="option-sep"><hr></div>
							<div class="form-row">
								<h5><?php echo $this->session->flashdata('flash_success'); ?></h5>
								<h5><?php echo $this->session->flashdata('failmessage'); ?></h5>

								<!-- <div class="col-sm-6 mb-20">
                                            <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                        </div>-->

								<div class="col-sm-6 mb-20">
									<a class="btn btn-danger btn-block btn-wth-icon" href="<?php echo $this->facebook->login_url(); ?>"><span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span>
									</a>
								</div>

								<div class="col-sm-6 mb-20">
									<a class="btn btn-danger btn-block btn-wth-icon" href="<?php echo $this->googleplus->loginURL(); ?>"><span class="icon-label"><i class="fa fa-google"></i> </span><span class="btn-text">Login with Google</span>
									</a>
								</div>


							</div>
							<!-- ----------------------------------------------------end new code----------------------------------------- -->


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	var cid = '<?php echo isset($cid) ? $cid : ''; ?>';
	console.log("On signup page : ", cid);
	var o_email = '<?php echo ($email != '') ? $email : ''; ?>';
	var glogin = <?php echo ($userid && $userid > 0 )? 'true' : 'false';?>;
	
	function signupUser() {
		var userid = $('#userid').val();  //Userid is used when user does google/facebook sign-up
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var mobile = $('#mobile').val();
		var email = $('#email').val();
		var city = $('#city').val();
		var state = $('#state').val();
		var pwd = $('#pwd').val();

		if (!validateData()) {
			return;
		}

		var usrdata = {
			'userid': userid,
			'firstname': firstname,
			'lastname': lastname,
			'mobile': mobile,
			'email': encodeURI(email),
			'city': encodeURI(city),
			'pwd': pwd,
			'state':state
		};
		$.ajax({
			type: "POST",
			url: base_url + "login/signup",
			data: usrdata,
			dataType: 'json',
			success: function(data) {
				console.log("Login status : "+JSON.stringify(data));
				console.log("Total data:",data.status);
				if(data && data.msg == 'This email id is already registered'){
					console.log("this data comming from login ...",data);
					$('#signup_err').text('This email id is already registered');
					$('#signup_err').css('display', 'block');
					$('#signup_err').css('color', 'red');
					setTimeout(function() {
							window.location.replace(base_url + 'register');
					}, 2000);
						return;
				}
				if (data && data.status && data.status == 'success' && data.msg == 'login successful') {
					$('#signup_err').text('Welcome to Train 2 Success!');
					$('#signup_err').css('display', 'block');
					$('#signup_err').css('color', 'green');
					setTimeout(function() {
						if (cid && cid.length > 0) {
							window.location.replace(base_url + 'courses/details/' + cid);
						} else {
							window.location.replace(base_url + 'home');
						}
					}, 1000);
				} else {
					$('#signup_err').text(data.msg);
					$('#signup_err').css('display', 'block');
				}
			},
			
			error: function(xhr, error) {
				$('#signup_err').text('Error occurred while signup. Please try after sometime.');
				$('#signup_err').css('display', 'block');
				console.log("Login error : ", error);
			}
		});
	}

	function resetMsg() {
		$('#fname_err').text('');
		$('#fname_err').css('display', 'none');
		$('#lname_err').text('');
		$('#lname_err').css('display', 'none');
		$('#email_err').text('');
		$('#email_err').css('display', 'none');
		$('#mobile_err').text('');
		$('#mobile_err').css('display', 'none');
		$('#city_err').text('');
		$('#city_err').css('display', 'none');
		$('#state_err').text('');
		$('#state_err').css('display', 'none');
		$('#pwd_err').text('');
		$('#pwd_err').css('display', 'none');
		$('#cpwd_err').text('');
		$('#cpwd_err').css('display', 'none');
		$('#signup_err').text('');
		$('#signup_err').css('display', 'none');
	}

	function validateData() {
		var userid = $('#useid').val();
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var mobile = $('#mobile').val();
		var email = $('#email').val();
		var city = $('#city').val();
		var state = $('#state').val();
		var pwd = $('#pwd').val();
		var cpwd = $('#cpwd').val();
		if (!firstname || firstname == null || $.trim(firstname).length == 0) {
			$('#fname_err').text('First name cannot be empty');
			$('#fname_err').css('display', 'block');
			return false;
		}
		if (!lastname || lastname == null || $.trim(lastname).length == 0) {
			$('#lname_err').text('Last name cannot be empty');
			$('#lname_err').css('display', 'block');
			return false;
		}
		if (mobile && mobile != null && $.trim(mobile).length != 10) {
			$('#mobile_err').text('Invalid mobile number');
			$('#mobile_err').css('display', 'block');
			return false;
		}
		if (!email || email == null || $.trim(email).length == 0) {
			$('#email_err').text('Email cannot be empty');
			$('#email_err').css('display', 'block');
			return false;
		}
		if (userid && userid > 0){
			if(email != o_email){
				$('#email_err').text('Email already is verified. You cannot be change the email');
				$('#email_err').css('display', 'block');
				return false;
			}
		}
		if (!city || city == null || $.trim(city).length == 0) {
			$('#city_err').text('City cannot be empty');
			$('#city_err').css('display', 'block');
			return false;
		}
		if (!state || state == null || $.trim(state).length == 0) {
			$('#state_err').text('Please select the state');
			$('#state_err').css('display', 'block');
			return false;
		}
		if(glogin == false){		
		

			if ($.trim(pwd).length < 5) {
				$('#pwd_err').text('Password should have at least 5 characters');
				$('#pwd_err').css('display', 'block');
				return false;
			}
			
			if (!cpwd || cpwd == null || $.trim(cpwd).length == 0) {
				$('#cpwd_err').text('Confirm password cannot be empty');
				$('#cpwd_err').css('display', 'block');
				return false;
			}
		
			if (pwd != cpwd) {
				$('#pwd_err').text('The password and confirm password are not matching');
				$('#pwd_err').css('display', 'block');
				return false;
			}
		}
		return true;
	}
</script>
