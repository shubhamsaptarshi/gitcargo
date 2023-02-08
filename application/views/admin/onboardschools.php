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
										<h4 class="card-title"> Manage Schools</h4>
     							<center>
				                <div id="del_div" style="display:none;margin-left: 200px;">
				                    <h4 style="color:green;"> Grade Deleted Successfully </h4>
				                 </div>
                                </center>

										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editGradeDetails(0);">
											<i class="fa fa-plus"></i>
											Add Schools
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
														Add Schools</span> 
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
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="School Name">
																</div>
															</div>
														
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="City">
																</div>
															</div>
															
												</div>
												
												<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Contact Number">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Email-id">
																</div>
															</div>
															
												</div>
												
												
												<div class="row">
												
													<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Address">
																</div>
															</div>
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="School URL">
																</div>
															</div>
														</div>	
														
													<div class="row">
												
													<div class="col-sm-12">
																<div class="form-group">
																	<label>Contact Person Details:</label>
																	
																</div>
															</div>
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="First Name">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Last Name">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Designation">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Contact Number">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Email-id">
																</div>
															</div>
															
															
														</div>	
														
														<div class="row">
														
														 <div class="col-sm-12">
                                <div class="form-group">
                                  <label class="mb-2">Brief info About School</label>
                                  <div id="info_school">
                                    <p></p>
                                  </div>
                                </div>
                                  <input type="hidden" name="info_school" id="info_school" value="">
                              </div>		
														
														
														<div class="col-sm-12">

          										<div class="form-group">
          																<label>School logo</label>
                                            <h4 style="color:red;">Image Size Should be 400 X 200</h4>
          														<div class="form-group">
          	                            <div class="media mb-2" id="image_div">
          	                              <input type='file'name="banner_logo"  onchange="chk_image();" id="banner_logo"/>
          	                              <img id="banner_logo_circle" src="<?php echo base_url();?>assets/images/default_images.png" alt="your image" style="height:100px;width:100px" />
          	                                <input type="hidden" class="form-control" id="image_flag" name="image_flag" placeholder=" image flag" value="0">
          	                             </div>
                               	  </div> 
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
								
								
								
								<th>Client ID</th>
								<th>School Name</th>
								<th>City</th>
								<th>URL Context</th>
								<th>Joining Date</th>
								<th>Package</th>
								<th>Subscription Status</th>
                                <th>Action</th>
								
								
								
								
								
							</tr>
						</thead>
				                              <tbody>
					                            <tr>
												<td>1</td>
												<td>JSV School</td>
												<td>Thane</td>
												<td>http://onlinetutor.com/jsvschool</td>
												<td>15-09-2020</td>	
												<td>Package Name </td>	
												<td>Active</td>	
												<td><a href="<?php echo base_url();?>admin/Viewschool">View</a></td>	



												
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