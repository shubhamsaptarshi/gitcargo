<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>


		<div class="main-panel">
			<div class="content">
				
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"> View Question Bank</h4>
     						

									
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade " id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
													<span class="fw-mediumbold" id="addtext" name="addtext">
														Add Question</span> 
													</h5>
													<button type="button" id="closebtn" name="closebtn" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!--<p class="small">Add Grade new row using this form, make sure you fill them all</p>-->
									<form id="grade_form" name="grade_form">
											



									     		<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Quiz ID">
																</div>
															</div>
														
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	
																<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Grade</option>
													<option>Grade 7</option>
													<option>Grade 8</option>
													<option>Grade 9</option>
													<option>Grade 10</option>
													
												</select>
																
																</div>
															</div>
															
												</div>
												
												<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Subjects</option>
													<option>Subject 1</option>
													<option>Subject 2</option>
													<option>Subject 3</option>
													<option>Subject 4</option>
													
												</select>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	
																		<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Chapters</option>
													<option>Chapter 7</option>
													<option>Chapter 8</option>
													<option>Chapter 9</option>
													<option>Chapter 10</option>
													
												</select>
																</div>
															</div>
															
												</div>
												
												
												<div class="row">
												
													<div class="col-sm-6">
																<div class="form-group">
																	
																	<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Topics</option>
													<option>Topic 7</option>
													<option>Topic 8</option>
													<option>Topic 9</option>
													<option>Topic 10</option>
													
												</select>
																</div>
															</div>
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="No. of questions to display">
																</div>
															</div>
														</div>	
														<div class="row">
												
													<div class="col-sm-6">
																<div class="form-group">
																	
																	<select class="form-control" id="defaultSelect">
																<option disabled selected>Change Status</option>
													<option>Active</option>
													<option>Inactive</option>
													
													
												</select>
																</div>
															</div>
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="No. of attempts allowed">
																</div>
															</div>
														</div>	
													
														
																
														
														
															
												
														   <div id="success_div" name="success_div">
            
                    </div><br>
                    		<div class="modal-footer no-bd">
													<button id="addbtn" name="addbtn" type="submit" id="addRowButton" class="btn btn-primary">Add</button>
													<button  class="btn btn-danger" data-dismiss="modal">Cancel</button>
												</div>
													</form>
												</div>
										
											</div>
										</div>
									</div>

									<div class="table-responsive">

				<table id="onboardschools_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
						<thead>
							<tr>
								<th>Question ID</th>
								<th>Quiz ID</th>
								<th>Topic title</th>
								<th>Question</th>
								<th>Type </th>
								<th>No. of options added</th>
								<th>Weightage </th>
								<th>Status</th>
								<th>Action</th>
								
							</tr>
						</thead>
				                              <tbody>
					                            <tr>
												<td>1</td>
												<td>2</td>
												<td>topic title</td>
												<td>what type of question is this?</td>
												<td>Single correct option</td>	
												<td>10 </td>
												<td>100 </td>
												<td>Active </td>
												<td><a href="<?php echo base_url();?>admin/Questiondetails">View</a></td>
												</tr>
												 <tr>
												<td>2</td>
												<td>3</td>
												<td>topic title</td>
												<td>what type of question is this?</td>
												<td>Single correct option</td>	
												<td>20 </td>
												<td>100 </td>
												<td>Active </td>
												<td><a href="<?php echo base_url();?>admin/Questiondetails">View</a></td>
												</tr>
												
					                          </tbody>
			</table>
		</div>
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

   <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#info_school' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script type="text/javascript">



  $(document).ready(function() {
			
			$('#onboardschools_table').DataTable( {
				
				dom: 'Bfrtip',
                buttons: ['csv', 'excel'],
				
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

</body>
</html>