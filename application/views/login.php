
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cargotiator </title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="15 days"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />
    <?php include('head.php'); ?> 
  </head>
  <body>
    <?php include('header.php'); ?> 
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div  class="col-md-12">
            <h1>Login</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="section-3">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
           
 <div  class="contact-form mb-1">
     
      <form>
        <div  class="row">
          
		  <div class="input-group mb-4 col-md-12 col-xs-12">
		  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
		  <input type="text" class="form-control" placeholder="User Email" aria-label="Username" aria-describedby="basic-addon1">
		  </div>
		   <div class="input-group mb-4 col-md-12 col-xs-12">
		  <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
		  <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
		  </div>
          <div  class="form-group col-md-3"><button  class="submit-btn " id="submit" type="submit">Login</button></div>
		  
		   <div  class="form-group col-md-6"><button  class="submit-btn " type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Forgot Password </button></div>
		 
        </div>
      </form>
    </div>
		   
          </div>
		 </div>
	 </div>
    </section>
	
	<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Email entered is not authorised! Please enter email used while registering the user.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
       
      </div>
    </div>
  </div>
</div>
	
	
    <?php include('footer.php'); ?> 
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <?php include('footerjs.php'); ?> 
  </body>
</html>
