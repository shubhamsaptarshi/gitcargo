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
                <h4 class="card-title"> Question Details</h4>
              </div>
            </div>
            <!-- .card-body.tab-content  -->
            <div class="card-body tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <div class="row ">
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Question ID :</label>
                      <div class="col-md-9 p-0">
                        <label class="form-control border-0 input-full">1</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Quiz ID :</label>
                      <div class="col-md-9 p-0">
                        <label class="form-control border-0 input-full">45</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Topic :</label>
                      <div class="col-md-9 p-0">
                        <label class="form-control border-0 input-full">Topic name</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Question Type  :</label>
                      <div class="col-md-9 p-0">
                        <select class="form-control  input-full" id="defaultSelect">
                          <option disabled selected>Select option</option>
                          <option>Single correct option</option>
                          <option>Multiple correct options</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Weightage / Marks :</label>
                      <div class="col-md-9 ">
                        <input type="text" value="100" class="form-control input-full" id="inlineinput" placeholder="100">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-3 pl-0 pr-0 col-form-label">Status  :</label>
                      <div class="col-md-9 p-0">
                        <select class="form-control  input-full" id="defaultSelect">
                          <option disabled selected>Select Status</option>
                          <option>Active</option>
                          <option>Inactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-12 pl-0 pr-0 col-form-label">Question  :</label>
                      <div class="col-md-12 p-0">
                        <div id="Question_editor">
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-inline pl-0 pr-0">
                      <label for="inlineinput" class="justify-content-start col-md-12 pl-0 pr-0 col-form-label">Correct answer explanation  :</label>
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
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <h4 class="card-title"> Options List</h4>
            <center>
              <div id="del_div" style="display:none;margin-left: 200px;">
                <h4 style="color:green;"> Grade Deleted Successfully </h4>
              </div>
            </center>
            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editGradeDetails(0);">
            <i class="fa fa-plus"></i>
            Add Options
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="modal fade " id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header no-bd">
                  <h5 class="modal-title">
                    <span class="fw-mediumbold" id="addtext" name="addtext">
                    Add Options</span> 
                  </h5>
                  <button type="button" id="closebtn" name="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="grade_form" name="grade_form">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Option ID" Disabled>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Option ">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Percent weightage">
                        </div>
                      </div>
                    </div>
                    <div id="success_div" name="success_div">
                    </div>
                    <br>
                    <div class="modal-footer no-bd">
                      <button id="addbtn" name="addbtn" type="submit" id="addRowButton" class="btn btn-primary">Add</button>
                      <button  class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-12">
              <div class="table-responsive">
                <table id="option_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Option ID</th>
                      <th>Option </th>
                      <th>Percent weightage</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Option Name</td>
                      <td>100 </td>
                      <td><a href="<?php echo base_url();?>admin/Optionpage" class="pl-1 pr-1 btn btn-link btn-primary btn-lg">
                        <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-link btn-success pl-1 pr-1 btn-lg" href="<?php echo base_url();?>admin/Optionpage"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-link pl-1 pr-1 btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Option Name</td>
                      <td>100</td>
                      <td>
                        <a href="<?php echo base_url();?>admin/Optionpage" class="pl-1 pr-1 btn btn-link btn-primary btn-lg">
                        <i class="fa fa-eye"></i>
                        </a>
                        <a class="pl-1 pr-1 btn btn-link btn-success btn-lg" href="<?php echo base_url();?>admin/Optionpage"><i class="fa fa-edit"></i></a>
                        <a href="" class="pl-1 pr-1 btn btn-link  btn-danger btn-lg">
                        <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
<script>
  ClassicEditor
      .create( document.querySelector( '#Correct_answer_explanation' ) )
      .catch( error => {
          console.error( error );
      } );
  
  ClassicEditor
      .create( document.querySelector( '#Question_editor' ) )
      .catch( error => {
          console.error( error );
      } );	
  
</script>
<script type="text/javascript">
  $(document).ready(function() {
  		
  		$('#option_table').DataTable( {
  			
  			"searching": false,
  			
  			"pageLength": 10,
  			initComplete: function () {
  				this.api().columns().every( function () {
  					var column = this;
  					var select = $('<select class="form-control"><option value=""></option></select>')
  					.appendTo( $(column.footer()).empty() )
  					.on( 'change', function () {
  						var val = $.fn.dataTable.util.escapeRegex(
  							$(this).val()
  							);
  
  						column
  						.search( val ? '^'+val+'$' : '', true, false )
  						.draw();
  					} );
  
  					column.data().unique().sort().each( function ( d, j ) {
  						select.append( '<option value="'+d+'">'+d+'</option>' )
  					} );
  				} );
  			}
  		});
  
  $('#score_table').DataTable( {
  			
  			dom: 'Bfrtip',
                 buttons: ['csv', 'excel'],
  			
  			"pageLength": 5,
  			initComplete: function () {
  				this.api().columns().every( function () {
  					var column = this;
  					var select = $('<select class="form-control"><option value=""></option></select>')
  					.appendTo( $(column.footer()).empty() )
  					.on( 'change', function () {
  						var val = $.fn.dataTable.util.escapeRegex(
  							$(this).val()
  							);
  
  						column
  						.search( val ? '^'+val+'$' : '', true, false )
  						.draw();
  					} );
  
  					column.data().unique().sort().each( function ( d, j ) {
  						select.append( '<option value="'+d+'">'+d+'</option>' )
  					} );
  				} );
  			}
  		});
  		var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
  
  		$('#addRowButton').click(function() {
  			$('#add-row').dataTable().fnAddData([
  				$("#addName").val(),
  				$("#addPosition").val(),
  				$("#addOffice").val(),
  				action
  				]);
  			$('#addRowModal').modal('hide');
  
  		});
  	});
  
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