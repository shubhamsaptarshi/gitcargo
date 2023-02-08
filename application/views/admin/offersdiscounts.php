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
										<h4 class="card-title"> Manage Offers and Discounts</h4>
     							<center>
				                <div id="del_div" style="display:none;margin-left: 200px;">
				                    <h4 style="color:green;"> Grade Deleted Successfully </h4>
				                 </div>
                                </center>

										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editGradeDetails(0);">
											<i class="fa fa-plus"></i>
											Add Offers
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
														Add Offers</span> 
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
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Offer ID" disabled>
																</div>
															</div>
														
															
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Offer name">
																</div>
															</div>
															
												</div>
												
												<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Offer description">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<select class="form-control" id="defaultSelect">
																<option disabled selected>Discount Type</option>
																	<option>Fixed </option>
																	<option>Percentage</option>
																	
																</select>
																</div>
															</div>
															
												</div>
												
												
												<div class="row">
												
													<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Discount value">
																</div>
															</div>
															
															<div class="col-sm-6">
																
																	
																	<div class="form-group">
																	<select class="form-control" id="defaultSelect">
																<option disabled selected>Status</option>
																	<option>Active </option>
																	<option>Inactive</option>
																	
																</select>
																</div>
																
															</div>
														</div>	
														
													<div class="row">
												
													
															
															<div class="col-sm-6">
																<div class="form-group">
																	<label>Offer Start Date</label>
																	<input required id="gradename" value="2020-09-21"  name="gradename" type="date" class="form-control" >
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label>Offer End Date</label>
																	<input required id="gradename" value="2021-09-21" name="gradename" type="date" class="form-control">
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group">
																	
																	<input required id="gradename" name="gradename" type="text" class="form-control" placeholder="Offer Code">
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
								
								
								
								
								<th>Offer ID</th>
								<th>Offer name</th>
								<th>Offer description</th>
								<th>Discount type</th> 
								<th>Discount value</th>
								<th>Offer start date</th>
								<th>Offer end date</th>
								<th>Earnings</th> 
								<th>People opted</th>
								<th>Status</th>
								<th>Updated By</th>
								<th>Updated At </th>
								<th>Action</th>
								
								
								
								
								
							</tr>
						</thead>
				                              <tbody>
					                            <tr>
												<td>1</td>
												<td>Diwali Offer</td>
												<td>Offer Short Description</td>
												<td>Fixed</td>
												<td>100</td>	
												<td>15-09-2020</td>	
												<td>15-09-2021</td>	
												<td>4567</td>
												<td>432</td>
												<td>Active</td>	
												<td>Sachin Singh</td>	
												<td>14-09-2020</td>
												
												<td><a href="#" class="pl-1 pr-1 btn btn-link btn-primary btn-lg"><i class="fa fa-eye"></i></a>
												<a class="pl-1 pr-1 btn btn-link btn-success btn-lg" href="#"><i class="fa fa-edit"></i></a>
												<a href="" class="pl-1 pr-1 btn btn-link  btn-danger btn-lg"><i class="fa fa-trash"></i>
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