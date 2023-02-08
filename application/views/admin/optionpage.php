<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>
<div class="main-panel">
  <div class="content">
    <div class="page-inner ">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <!-- navigation in .card-header -->
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title"> Option Page</h4>
              </div>
            </div>
            <!-- .card-body.tab-content  -->
            <div class="card-body tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <div class="row ">
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Option ID :</label>
                      <div class="col-md-9 p-0">
                        <input type="text" value="45" class="form-control input-full" id="inlineinput" placeholder="45">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Percent Weightage :</label>
                      <div class="col-md-9 ">
                        <input type="text" value="100" class="form-control input-full" id="inlineinput" placeholder="100">
                      </div>
                    </div>
                  </div>
				   <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Question ID :</label>
                      <div class="col-md-9 p-0">
                        <input type="text" value="45" class="form-control input-full" id="inlineinput" placeholder="45" disabled>
                      </div>
                    </div>
                  </div>
				  <div class="col-md-12">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-12 pl-0 pr-0 col-form-label">Question:</label>
                      <div class="col-md-12 p-0">
                       
                          <p class="mb-0 pb-0">
						  
						  This is the sample question for demo purpose...? This is the sample question for demo purpose...? This is the sample question for demo purpose...? This is the sample question for demo purpose...?
						  </p>
                        
                      </div>
                    </div>
                  </div>
				  
				  
                  <div class="col-md-12">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-12 pl-0 pr-0 col-form-label">Option  :</label>
                      <div class="col-md-12 p-0">
                        <div id="Option_editor">
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-12 pl-0 pr-0 col-form-label">Correct Answer Explanation  :</label>
                      <div class="col-md-12 p-0">
                        <div id="Correct_answer_explanation">
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
				   <div class="col-md-12 text-center">
                    <div class="form-group ">
                      <button type="button" class="btn btn-outline-primary btn-save js-save">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card-->
      </div>
      <!--/.col-sm-6 -->
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
<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/chart.js/chart.min.js"></script>
<!-- Datatables -->
<!-- Bootstrap Notify -->
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<!-- jQuery Vector Maps -->
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<!-- Sweet Alert -->
<!-- Atlantis JS -->
<script>
  ClassicEditor
      .create( document.querySelector( '#Correct_answer_explanation' ) )
      .catch( error => {
          console.error( error );
      } );
  
  
  ClassicEditor
      .create( document.querySelector( '#Option_editor' ) )
      .catch( error => {
          console.error( error );
      } );
  
  
</script>
<script type="text/javascript">

  setTimeout(function(){
   $("#del_div").hide();
  },5000);
   
</script>
<script>
  var canvas = document.getElementById('topicsChart');
  var data = {
   labels: ["January", "February", "March", "April", "May", "June", "July"],
   datasets: [{
     label: "Topics Covered",
     backgroundColor: "rgba(255,99,132,0.2)",
     borderColor: "rgba(255,99,132,1)",
     borderWidth: 2,
     hoverBackgroundColor: "rgba(255,99,132,0.4)",
     hoverBorderColor: "rgba(255,99,132,1)",
     data: [65, 59, 30, 81, 56, 55, 40],
   }]
  };
  var option = {
   animation: {
     duration: 5000
   }
  
  };
  
  
  var myBarChart = Chart.Bar(canvas, {
   data: data,
   options: {
  			responsive: true, 
  			maintainAspectRatio: false,
  			scales: {
  				yAxes: [{
  					ticks: {
  						beginAtZero:true
  					}
  				}]
  			},
  		}
  });
  
  
</script>
<script>
  var canvas = document.getElementById('quizChart');
  var data = {
   labels: ["January", "February", "March", "April", "May", "June", "July"],
   datasets: [{
     label: "Quiz Taken",
  
  
     backgroundColor: "rgba(65,44,77,0.2)",
     borderColor: "rgba(65,44,77,1)",
     borderWidth: 2,
     hoverBackgroundColor: "rgba(255,99,132,0.4)",
     hoverBorderColor: "rgba(255,99,132,1)",
     data: [15, 54, 32, 21, 43, 78, 20],
   }]
  };
  var option = {
   animation: {
     duration: 5000
   }
  
  };
  
  
  var myBarChart = Chart.Bar(canvas, {
   data: data,
   options: {
  			responsive: true, 
  			maintainAspectRatio: false,
  			scales: {
  				yAxes: [{
  					ticks: {
  						beginAtZero:true
  					}
  				}]
  			},
  		}
  });
  
  
</script>
</body>
</html>