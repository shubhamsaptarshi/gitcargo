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
										<h4 class="card-title"> Manage Course Packages</h4>
     							<center>
				                <div id="del_div" style="display:none;margin-left: 200px;">
				                    <h4 style="color:green;"> Grade Deleted Successfully </h4>
				                 </div>
                                </center>

										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editGradeDetails(0);">
											<i class="fa fa-plus"></i>
											Add Packages
										</button>
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
														Add Packages</span> 
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
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Package ID" Disabled>
																</div>
															</div>
														
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Package title">
																</div>
															</div>
															
												</div>
												
												<div class="row">
															<div class="col-sm-12">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Package short description">
																</div>
															</div>
															
															
												</div>
												
												
												<div class="row">
												<div class="col-sm-6">
																<div class="form-group">
																	
																
																	
																	<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Type</option>
																	<option>Student</option>
																	<option>School</option>
																	
																</select>
																	
																</div>
															</div>
													<div class="col-sm-6">
																<div class="form-group">
																	
																	
																	
																		<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Duration</option>
																	<option>7 days</option>
																	<option>1 month</option>
																	<option>6 months</option>
																	<option>12 months</option>
																</select>
																	
																	
																</div>
															</div>
															
															<div class="col-sm-6">
																<div class="form-group">
																		<select class="form-control" id="defaultSelect">
																<option disabled selected>Duration Period</option>
																	<option>Days</option>
																	<option>Month</option>
																	
																</select>
																	
																</div>
															</div>
															
															
															<div class="col-sm-6">
																<div class="form-group">
																		<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Payment Frequency</option>
																	<option>Onetime</option>
																	<option>Recurring</option>
																	
																</select>
																	
																</div>
															</div>
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Amount">
																</div>
															</div>
															
															
															<div class="col-sm-6">
																<div class="form-group">
																		<select class="form-control" id="defaultSelect">
																<option disabled selected>Select Status</option>
																	<option>Active</option>
																	<option>Inactive</option>
																	
																</select>
																	
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
								
								
								
								
								<th>ID</th>
								<th>Package title</th>
								<th>Package Desc.</th>
								<th>Type </th>
								<th>Duration </th>
								<th>Duration  Type</th> 
								<th>Payment Frequency </th>
								<th>Amount</th>
								<th>Status</th>
								<th>Action</th>
								
								
								
							</tr>
						</thead>
				                              <tbody>
					                            <tr>
												<td>1</td>
												<td>Diwali Offer</td>
												<td>This is short descriptio for package</td>
												<td>School</td>
												<td>1 Month</td>	
												<td>3 Months </td>
												<td> Recurring </td>
												<td> 10000 </td>
												<td>Active</td>	
												
												<td>
												
												
												<a href="#" class="pl-1 pr-1 btn btn-link btn-primary btn-lg">
																<i class="fa fa-eye"></i>
															</a>
												<a class="pl-1 pr-1 btn btn-link btn-success btn-lg" href="#"><i class="fa fa-edit"></i></a>
												
												<a href="" class="pl-1 pr-1 btn btn-link  btn-danger btn-lg">
																<i class="fa fa-trash"></i>
												</a>
												
												
												</td>
												</tr>
												
												<tr>
												<td>2</td>
												<td>New Year Offer</td>
												<td>This is short descriptio for package</td>
												<td>Student</td>
												<td>3 Month</td>	
												<td>6 Months </td>
												<td> Onetime </td>
												<td> 10000 </td>
												<td>Active</td>	
												
												<td>
												
												
												<a href="#" class="pl-1 pr-1 btn btn-link btn-primary btn-lg">
																<i class="fa fa-eye"></i>
															</a>
												<a class="pl-1 pr-1 btn btn-link btn-success btn-lg" href="#"><i class="fa fa-edit"></i></a>
												
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