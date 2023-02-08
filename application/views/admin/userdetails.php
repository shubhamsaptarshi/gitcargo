<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>

	<div class="main-panel">
		<div class="content">				
			<div class="page-inner">
  				<div class="row">
    				<div class="col-sm-12">
     					<div class="card">
       						<!-- navigation in .card-header -->
       						<div class="card-header">
         						<ul class="nav nav-pills  card-header-pills">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab1">Student Profile Details</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab2">Subscription Renewal History</a>
									</li>
          
         						</ul>
       						</div>
       						<!-- .card-body.tab-content  -->
							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="tab1">       
					
									<form class="is-readonly">
										<div class="row ">
											<div class="col-md-6">
										  		<h4 class="card-title mb-2">Student Profile Details</h4>
											</div>
					
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">Progress Report Card</label>
													<div class="col-md-8 p-0">
														<a href="<?php echo base_url();?>admin/Progressreport/" class="btn btn-sm  w-100 btn-secondary">Click to view</a>												
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">Registration ID</label>
													<div class="col-md-8 p-0">
														<input disabled  type="text" value="1234" class="form-control input-full" id="inlineinput" placeholder="1234">
													</div>
												</div>					
											</div>
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">Birthdate</label>
													<div class="col-md-8 p-0">
														<input disabled  type="date" value="1987-09-15" class="form-control input-full" id="inlineinput" placeholder="Last Name">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">First Name</label>
													<div class="col-md-8 p-0">
														<input disabled  type="text" value="1234" class="form-control input-full" id="inlineinput" placeholder="First Name">
													</div>
												</div>
											</div>
					
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">Last Name</label>
													<div class="col-md-8 p-0">
														<input disabled  type="text" value="1234" class="form-control input-full" id="inlineinput" placeholder="Last Name">
													</div>
												</div>
											</div>
					
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">City </label>
													<div class="col-md-8 p-0">
														<input disabled  type="text" value="Thane" class="form-control input-full" id="inlineinput" placeholder="Thane">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">Join date</label>
													<div class="col-md-8 p-0">
														<input disabled  type="date" value="2021-02-22" class="form-control input-full" id="inlineinput" placeholder="2021-02-22">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">Country</label>
													<div class="col-md-8 p-0">
														<input disabled  type="text" value="India" class="form-control input-full" id="inlineinput" placeholder="India">
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 pl-0 pr-0 col-form-label">Student status</label>
													<div class="col-md-8 p-0">
														<select disabled class="form-control input-full"  name="topicstatus">
															<option selected value="Select School">Enable</option>
															<option value="Lock">Disable</option>																	
														</select>					
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-inline pl-0 pr-0">
													<label for="inlineinput" class="col-md-4 col-form-label pl-0 pr-0">Subscription status</label>
													<div class="col-md-8 p-0">
														<select disabled class="form-control input-full"  name="topicstatus">
															<option selected value="Select School">Active</option>
															<option value="Lock">Inactive</option>
														</select>
					
													</div>
												</div>
											</div>
											<div class="col-md-12 text-center">
												<div class="form-group ">
													<button type="button" class="btn btn-outline-primary btn-edit js-edit">Edit</button> <button type="button" class="btn btn-outline-primary btn-save js-save">Save</button>
													
												</div>							 
											</div>
										</div>
									</form>
         						</div>
         						<div class="tab-pane fade" id="tab2">         
		 							<div class="row ">
										<div class="col-md-12">
											<h4 class="card-title mb-2">Subscription Renewal History</h4>
										</div>
										<div class="col-md-12 pl-0 pr-0">
											<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header no-bd">
															<h5 class="modal-title">
																<span class="fw-mediumbold"  id="addtext" name="addtext">
																Add Lessons </span>
															</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closebtn" name="closebtn">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="<?php echo base_url();?>admin/Topic/savetopic"  method="POST" enctype="multipart/form-data" >
																<div class="form-group row" id="codesection" name="codesection">
																	<label for="exampleInputUsername2" class="col-sm-9 col-form-label">Topic Id <span style="margin-left:70px;" id="spcode"></span></label>
																	<input type="hidden" class="form-control" id="topicid" name="topicid" value="">
																</div>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label>Grade Type</label>
																			<select required class="form-control" onchange="getsubjectlist();" id="gradeid" name="gradeid">
																				<option value=""></option>
																			</select>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label>Subject Name</label>
																		<select required class="form-control" id="subjectid" name="subjectid" onchange="getchapterlist();">
																			<option value=""></option>
																			</select>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label>Chapter Name</label>
																			<select required class="form-control" id="chapterid" name="chapterid">
																			<option value=""></option>
																			</select>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<label>Lessons Name</label>
																			<input id="topicname" name="topicname" type="text" class="form-control" placeholder="Enter Lessons Name">
																		</div>
																	</div>
															
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Lessons Status</label>
																			<select onchange="unlock_div();"class="form-control" id="topicstatus" name="topicstatus">
																			<option value="">Select Lessons</option>
																			<option value="Lock">Lock</option>
																			<option value="Unlock">Unlock</option>
																		</select>
																		</div>
																	</div>
												     				<div class="col-sm-12">
																		<div class="form-group">
																		<label>Sequence no</label>
																		<input id="sequenceno" name="sequenceno" type="text" class="form-control" placeholder="Sequence no">
																		</div>
																	</div>                    

																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Video Id</label>
																			<input id="pageurl" name="pageurl" type="text" class="form-control" placeholder="Enter Page URL">
																		</div>
																	</div>

																	<div class="col-sm-12" id="unlock_section" name="unlock_section">
																		<div class="col-sm-12">
																			<div class="form-group">
																				<label class="mb-2">Overview</label>
																				<div id="learneditor">
																				</div>
																			</div>
																  			<input type="hidden" name="learn_desc" id="learn_desc" value="">
																		</div>
																		<div class="col-sm-12">
																			<div class="form-group">
																				<label class="mb-2">Quiz</label>
																				<div id="qaeditor">
																					<p></p>
																				</div>
																			</div>
																			<input type="hidden" name="qa_desc" id="qa_desc" value="">
																		</div>
														
																		<div class="col-sm-12">
																			<div class="form-group">
																				<label class="mb-2"> Summary Thumbnail </label>
	                            												<div class="media mb-2" id="image_div">
																					<input type='file'name="thumbnail_logo"  onchange="chk_thumbnail();" id="thumbnail_logo">
																					<img id="thumbnail_logo_circle" src="<?php echo base_url();?>assets/images/default_images.png" alt="your image" style="height:100px;width:100px"/>
	                     				      										<input type="hidden" class="form-control" id="thumbnail_flag" name="thumbnail_flag" placeholder=" thumbnail flag" value="0">
	                             												</div>
                     				  										</div> 
																		</div>

																		<div class="col-sm-12">
																			<div class="form-group">
																				<label class="mb-2">Lesson Summary</label>
	                            												<div class="media mb-2" id="image_div">
	                              													<input type='file'name="topic_logo"  onchange="chk_image();" id="topic_logo"/ accept="application/pdf">
	                     				 											<a target="_blank" id="topicpdf" name="topicpdf" href="#" download>Download PDF
	                         	  													</a>
														        					<input type="hidden" class="form-control" id="image_flag" name="image_flag" placeholder=" image flag" value="0">
	                             												</div>
                     				  										</div> 
																		</div>
												
																	</div>
																</div>
												   				<div id="success_div" name="success_div">
            			        								</div><br>
		                    									<div class="modal-footer no-bd">
																	<button id="addbtn" onclick="updateDescEditorData();"name="addbtn" type="submit" id="addRowButton" class="btn btn-primary">Add</button>
																	<button  class="btn btn-danger" data-dismiss="modal">Cancel</button>
																</div>
															</form>
														</div>
											
													</div>
												</div>
											</div>			
											<div class="table-responsive">
												<table id="package_table" name="package_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
													<thead>
														<tr>
															<th>Package Name</th>
															<th>Offer Name</th>
															<th>Amount</th>
															<th>Package Start Date</th>
															<th>Renewal Date</th>
															<th>Renewal Status</th>
														</tr>
													</thead>
													<tbody>											
														<tr>
															<td>Package 1</td>
															<td>Offer Tiger </td>
															<td>2001</td>
															<td>15/09/1987</td>
															<td>15/09/2021 </td>
															<td>Successful</td>
														</tr>
														<tr>
															<td>Package 1</td>
															<td>Offer Tiger </td>
															<td>2001</td>
															<td>15/09/1987</td>
															<td>15/09/2021 </td>
															<td>Successful</td>
														</tr>
											
														<tr>
															<td>Package 1</td>
															<td>Offer Tiger </td>
															<td>2001</td>
															<td>15/09/1987</td>
															<td>15/09/2021 </td>
															<td>Successful</td>
														</tr>
														<tr>
															<td>Package 1</td>
															<td>Offer Tiger </td>
															<td>2001</td>
															<td>15/09/1987</td>
															<td>15/09/2021 </td>
															<td>Successful</td>
														</tr>
														<tr>
															<td>Package 1</td>
															<td>Offer Tiger </td>
															<td>2001</td>
															<td>15/09/1987</td>
															<td>15/09/2021 </td>
															<td>Successful</td>
														</tr>
														<tr>
															<td>Package 1</td>
															<td>Offer Tiger </td>
															<td>2001</td>
															<td>15/09/1987</td>
															<td>15/09/2021 </td>
															<td>Successful</td>
														</tr>
													</tbody>
												</table>
											</div>					
										</div>
		 							</div>
         						</div>        
          					</div><!--/.card-body -->
      					</div><!--/.card-->
    				</div><!--/.col-sm-6 -->
  				</div>
				<div class="row ">
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

<?php $this->load->view('admin/include/footerjs');?>
<!--   Core JS Files   -->

<!-- jQuery UI -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<!-- jQuery Scrollbar -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- jQuery Sparkline -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Datatables -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/datatables/datatables.min.js"></script>


<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<!-- jQuery Vector Maps -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url();?>assets/admin/js/atlantis.min.js"></script>
<script type="text/javascript">
	
  	$(document).ready(function() {
		$('#package_table').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel'
			]	
		});

		$('#multi-filter-select').DataTable( {
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
					});
					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					});
				});
			}
		});

		// Add Row
		$('#add-row').DataTable({
			"pageLength": 5,
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
	$(document).ready(function(){
		$('.js-edit, .js-save').on('click', function(){
			var $form = $(this).closest('form');
			$form.toggleClass('is-readonly is-editing');
			var isReadonly  = $form.hasClass('is-readonly');
			$form.find('input,textarea,select').prop('disabled', isReadonly);
		});
	});	
</script>
</body>
</html>
