<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Learners' Cove Login Page</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/admin/img/icon.ico" type="image/x-icon"/>
    <!-- Fonts and icons -->
    <script src="assets/admin/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
      	google: {"families":["Lato:300,400,700,900"]},
      	custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/fonts.min.css']},
      	active: function() {
      		sessionStorage.fonts = true;
      	}
      });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/admin/css/atlantis.min.css">
  </head>
  <body>
    <div class="wrapper overlay-sidebar">
      <div class="content">
        <div class="page-inner ">
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header text-center"> <a href="dashboard.html" class="logo"> <img src="assets/admin/img/logo-LC.jpg" alt="navbar brand" class="navbar-brand"></a>
                </div>
                <div class="card-body pb-0">
                  <div class="form-group">
                    <label for="email2">Email Address</label>
                    <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                    <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="form-group text-center mb-3">
                    <button class="btn btn-primary btn-round">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/admin/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/admin/js/core/popper.min.js"></script>
    <script src="assets/admin/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- jQuery Sparkline -->
    <script src="assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
    <!-- Bootstrap Notify -->
    <script src="assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- jQuery Vector Maps -->
    <script src="assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <!-- Sweet Alert -->
    <script src="assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- Atlantis JS -->
    <script src="assets/admin/js/atlantis.min.js"></script>
  </body>
</html>