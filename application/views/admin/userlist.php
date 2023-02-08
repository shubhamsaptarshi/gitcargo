<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>

	<div class="main-panel">
		<div class="content">
				
			<div class="page-inner ">
				<div class="row ">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Manage Users</h4>
									<center>
										<div id="del_div" style="display:none;margin-left: 200px;">
											<h4 style="color:green;"> User Deleted Successfully </h4>
										</div>
            				    	</center>
								</div>
							</div>
							<div class="card-body">
							<!-- Modal -->
								<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header no-bd">
												<h5 class="modal-title">
													<span class="fw-mediumbold"  id="addtext" name="addtext">
													Add Users </span> 
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closebtn" name="closebtn">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form name="user_form" id="user_form" method="POST" enctype="multipart/form-data" >
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group " id="codesection" name="codesection">
		                       									<label for="exampleInputUsername2" >User Id <span style="margin-left:70px;" id="spcode"></span></label>
		                        								<input type="hidden" id="userid" name="userid">
		                      								</div>
										 				</div>				
										 			</div>		
										 			<div class="row">
														
														<div class="col-sm-6">
															<div class="form-group">
																<label>First Name</label>
																<input id="first_name" name="first_name" type="text" class="form-control">
															</div>
														</div>	
														<div class="col-sm-6">
															<div class="form-group">
																<label>Last Name</label>
															<input id="last_name" name="last_name" type="text" class="form-control">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label>Email id</label>
																	<input class="form-control" id="email" name="email">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label>Mobile no.</label>
																	<input  class="form-control" id="mobile" name="mobile" maxlength="10">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label>Role</label>
																<select class="form-control" id="role" name="role">
																	<option>user</option>
																	<option>admin</option>
																</select>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label>Joining Date</label>
																	<input  class="form-control" id="join_date" name="join_date" disabled>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label>City</label>
																	<input  class="form-control" id="city" name="city">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label>Status</label>
																<select class="form-control" id="status" name="status">
																<option value="Active">Active</option>
																<option value="Inactive">Inactive</option>
																
																</select>
															</div>
														</div>
															
													</div>
												   <div id="success_div" name="success_div">
            			        					</div><br>
		                    						<div class="modal-footer no-bd text-center">
														<button id="addbtn" name="addbtn" type="submit" id="addRowButton" class="btn btn-primary">Add</button>
														<button  class="btn btn-danger" data-dismiss="modal">Cancel</button>
													</div>
												</form>
											</div>											
										</div>
									</div>
								</div>
			
								<div class="table-responsive">
									<table id="userlist_table" name="userlist_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
										<thead>
											<tr>
												<th>User ID </th>
												<th>First Name </th>
												<th>Last Name </th>
												<th>Email ID </th>
												<th>Mobile No. </th>
												<th>Joining Date </th>
												<th>Role </th>
												<th>City </th>
												<th>Status </th>
												<th style="width: 10%">Action</th>
											</tr>
										</thead>
										<tbody>
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

<!-- Bootstrap Notify -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<!-- jQuery Vector Maps -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url();?>assets/admin/js/atlantis.min.js"></script>	
	
<script type="text/javascript">
	var _user_list = <?php echo json_encode($user_list);?>;
	var base_url = '<?php echo base_url()?>';

	$(document).ready(function() {		
		loaduserList();	
		initDatatable();
		edituserDetails();
		// populatePackageList();
		$("#codesection").hide();
        if(!_user_list || _user_list.length == 0){
            loaduserList();
        } else {
            populateuserTable();
        }	
		$('#user_form').on('submit', userForm);
	});

	// ========================================================================

	function userForm(event) {
		event.preventDefault();
		$.ajax({
			url: '<?php echo base_url('admin/userlist/saveuser');?>',
			method: 'POST',
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function() {
				$('#user_form').attr('disabled', 'disabled');
			},
			success: function(data) {
				if (data.successful) {
					//   console.log(data.recipientsnumber);
					$('#success_div').html('<b style="margin-left:100px;color:green;"> User added successfully</b>');
					setTimeout(function() {
						$("#success_div").hide();
						$("#closebtn").click();
						$("#closebtn").click().modal('hide');
						loaduserList();
					}, 2000);
				}
				else if(data.already){
					$('#success_div').html('<b style="margin-left:100px;color:red;"> User allready exists </b>');
					setTimeout(function() {
						$("#success_div").hide();
						$("#closebtn").click();
						$("#closebtn").click().modal('hide');
						loaduserList()
					}, 3000);
				}
			},
		});
	}

	function loaduserList(){
	$.ajax({
		url:'<?php echo base_url('admin/userlist');?>',
		method: 'GET',
		dataType: 'json',
		success: function(data){
// 			console.log("User data :: ",data);
			if(!data || data == null || data.length == 0 || data == 'null'){
				_user_list = [];
			} else {
				_user_list = data;
			}
			populateuserTable();
		}
	});
}

function populateuserTable(){
// 	console.log('populate users', _user_list);
	var tableObj = $('#userlist_table').DataTable();
	tableObj.clear();
	if(!_user_list || _user_list == null || _user_list.length == 0){
		tableObj.rows.add( [ {"userid":"No records found"}]).draw();
		return;
	}
	tableObj.rows.add(_user_list).draw();
}

// function populatePackageList() {
//         var options1 = '<option value="">Select Package </option>';
//         if (_package_list && _package_list != null && _package_list.length > 0) {
//             for (var i = 0; i < _package_list.length; ++i) {
//                 options1 += '<option value="' + _package_list[i].package_id + '">' + _package_list[i].package_title + '</option>';
//             }
//         }
//         $('#package_id').html(options1);
//     }

function initDatatable(){
	$('#userlist_table').DataTable({
	    "order": [],
		dom: 'Bfrtip',
		buttons: [
			'csv', 'excel', 'pdf'
		],
		"columnDefs" : [
			{
				"data" : 'userid',
				"targets" : [ 0 ]
			},{
				"data" : 'first_name',
				"targets" : [ 1 ]
			},{
				"data" : 'last_name',
				"targets" : [ 2 ]
			},{
				"data" : 'email',
				"targets" : [ 3 ]
			},{
				"data" : 'mobile',
				"targets" : [ 4 ]
			},{
				"data" : 'join_date',
				"targets" : [ 5 ]
			},{
				"data" : 'role',
				"targets" : [ 6 ]
			},{
				"data" : 'city',
				"targets" : [ 7 ]
			},{
				"data" : 'status',
				"targets" : [ 8 ]
			},{
				"data" : "userid",
				"targets" : [ 9 ],
				"render":function(data, type, row){
					var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:edituserDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' style='padding:.375rem .75rem;' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
					var delBtn="<button type='button' onclick='javascript:deleteuser("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' style='padding:.375rem .75rem;'data-original-title='Remove'><i class='fa fa-times'></i></button>";				
					return editBtn + delBtn;
				}
			}
		],

	});
} 

function deleteuser(userid){
		var retVal = confirm("Do you want to continue ?");
		if( retVal == true ){
			var userid = userid;
			$.get(base_url + "admin/userlist/deleteuser?id="+userid);
			$("#del_div").show();
			setTimeout(function() {
				$("#del_div").hide();
			}, 2000);
			location.reload();
			loaduserList();
			return true;
		} else {
			return false;
		}
	}

function finduserById(userid){
		if(!userid || userid < 1 || !_user_list || _user_list.length == 0){
			return null;
		}
		for(var i=0; i < _user_list.length; ++i){
			if(_user_list[i].userid == userid){
				return _user_list[i];
			}
		}
		return null;
	}

function edituserDetails(userid){
		if (userid == 0) {
			$("#codesection").hide();
			$("#addtext").html('Add User');
			$("#addbtn").html('Add');
		} else {
			$("#codesection").show();
			$("#addtext").html('Edit User');
			$("#addbtn").html('Update');
			}
		if(!_user_list || _user_list == null || _user_list.length == 0){
			return;
		}
		var userObj = finduserById(userid);
		if(userObj == null && userObj > 0){
			return;
		}
		$('#spcode').text(userObj ? userObj.userid : '');
		$('#userid').val(userObj ? userObj.userid : '');
	 	$('#first_name').val(userObj ? userObj.first_name : '');
		$('#last_name').val(userObj ? userObj.last_name : '');
 		$('#email').val(userObj ? userObj.email : '');
 		$('#mobile').val(userObj ? userObj.mobile : '');
 		$('#join_date').val(userObj ? userObj.join_date : '');
 		$('#role').val(userObj ? userObj.role : '');
 		$('#city').val(userObj ? userObj.city : '');
		$('#status').val(userObj ? userObj.status : '');

		if(userObj == null || userObj.length == 0){
			populateuserTable();
		}
	}
</script>

<script type="text/javascript">

	setTimeout(function(){
	$("#del_div").hide();
	},5000);

</script>

</body>
</html>
