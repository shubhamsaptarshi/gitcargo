<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Learners' Cove Login Page</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo base_url();?>assets/images/icon.ico" type="image/x-icon"/>
    <!-- Fonts and icons -->
    <script src="<?php echo base_url();?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
      	google: {"families":["Lato:300,400,700,900"]},
      	custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
      	active: function() {
      		sessionStorage.fonts = true;
      	}
      });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/atlantis.min.css">
  </head>
  <body>
    <div class="wrapper overlay-sidebar">
      <div class="content">
        <div class="page-inner ">
          <div class="row">
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
               <br><br><br><br>
              <div class="card">
                <div class="card-header text-center"> <a href="dashboard.html" class="logo"> <img src="<?php echo base_url();?>assets/admin/img/logo.png" alt="navbar brand" class="navbar-brand"></a>
                </div>
               <form class="pt-3" id="login_form" name="login_form">
                <div class="card-body pb-0">
                  <div class="form-group">
                    <label for="email2">Email Address to reset password</label>
                    <input type="email" required class="form-control" name="email" id="email" placeholder="Enter Email">
                  </div>
                  
                     <center><div id="success_div" name="success_div">
            
                    </div></center> <br>
					
					
                  <div class="form-group text-center mb-3">
                       <input type="submit" value="Submit"  class="btn btn-primary btn-round">

                  </div>
				  
				 
                </div>
                  </form>
              </div>
            </div>
            <div class="col-md-4">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/admin/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/core/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url();?>assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="<?php echo base_url();?>assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- jQuery Sparkline -->
    <script src="<?php echo base_url();?>assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
    <!-- Bootstrap Notify -->
    <script src="<?php echo base_url();?>assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- jQuery Vector Maps -->
    <script src="<?php echo base_url();?>assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <!-- Sweet Alert -->
    <script src="<?php echo base_url();?>assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- Atlantis JS -->
    <script src="<?php echo base_url();?>assets/admin/js/atlantis.min.js"></script>

  <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
  </body>
</html>


<script type="text/javascript">
  var base_url = '<?php echo base_url();?>';
  $(document).ready(function(){
  $('#login_form').on('submit', loginForm);
    });

function loginForm(event) {
  
    event.preventDefault();
    $.ajax({
    url: '<?php echo base_url('admin/Login/login');?>',
    method: 'POST',
    data: $(this).serialize(),
    dataType: 'json',
    beforeSend: function() {
      $('#login_form').attr('disabled', 'disabled');
    },
    success: function(data) {
   console.log(data);
      if (data.successful) {
              $('#success_div').html('<b style="color:green;">Login successful</b>');
          //  redirect('Dashboard/dashboard');
           setTimeout(function() {
              window.location.href = "<?php echo base_url('admin/Dashboard/'); ?>";
              }, 2000);
      }
     else if(data.incorrect){
          $('#success_div').html('<b style="color:red;">Please enter correct details</b>');
       }else if(data.error){
            $('#success_div').html('<b style="color:red;">Please enter correct details</b>');
       }

       
   },
  
  });
}
   
    
</script>