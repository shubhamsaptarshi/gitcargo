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
								<h4 class="card-title">User Access report</h4>
							</div>
						</div>
						<div class="card-body">
						<!-- Modal -->
							<div class="table-responsive">
								<table id="progress_table" name="progress_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
									<thead>
										<tr>
											<th>User Id </th>
											<th>First Name </th>
											<th>Last Name </th>
											<th>Join Date </th>
											<th>Quiz Attempted</th>
											<th>Topics visited </th>
											<!-- <th style="width: 10%">Action</th> -->
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

<!-- ================================================================================== -->

<script type="text/javascript">
	var _user_list = <?php echo json_encode($user_list);?>;
	var base_url = '<?php echo base_url()?>';

	$(document).ready(function() {		
// 		loaduserList();	
		initDatatable();
		// edituserDetails();
		$("#codesection").hide();
        if(!_user_list || _user_list.length == 0){
            loaduserList();
        } else {
            populateuserTable();
        }	
		$('#user_form').on('submit', progress_table);
	});

	function loaduserList(){
	$.ajax({
		url:'<?php echo base_url('admin/Studentprogressreport');?>',
		method: 'GET',
		dataType: 'json',
		success: function(data){
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
	var tableObj = $('#progress_table').DataTable();
	tableObj.clear();
	if(!_user_list || _user_list == null || _user_list.length == 0){
		tableObj.rows.add( [ {"userid":"No records found"}]).draw();
		return;
	}
	tableObj.rows.add(_user_list).draw();
}

function initDatatable(){
	$('#progress_table').DataTable({
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
				"data" : 'join_date',
				"targets" : [ 3 ]
			},{
				"data" : 'quizattemptedcount',
				"targets" : [ 4 ]
			},{
				"data" : 'topicvisitedcount',
				"targets" : [ 5 ]
			// },{
			// 	"data" : "userid",
			// 	"targets" : [ 6 ],
			// 	"render":function(data, type, row){
			// 		var viewBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:viewuserDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'>View</button>";
			// 		// var delBtn="<button type='button' onclick='javascript:deleteuser("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";		
							
			// 		return viewBtn;
			// 	}
			}
		],

	});
}

	setTimeout(function(){
		$("#del_div").hide();
	},5000);
  
</script>

</body>
</html>
