<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="row ">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Progress report</h4>
								<a href="<?php echo base_url();?>admin/Download/" class="btn btn-primary btn-sm ml-auto" >
									<i class="fa fa-download"></i>
									Download Report
								</a>	
							</div>
						</div>	
						<div class="card-body">
							<!-- Modal -->	
							<div class="row ">
								<div class="col-md-6">
									<div class="form-group form-inline pl-0 pr-0">
										<label for="inlineinput" class="justify-content-start col-md-4 pl-0 pr-0 col-form-label">Student Name :</label>
										<div class="col-md-8 p-0">											
											<label class="form-control border-0 input-full">Sachin Shahane</label>
										</div>
									</div>					
								</div>
								<div class="col-md-6">
									<div class="form-group form-inline pl-0 pr-0">
										<label for="inlineinput" class="justify-content-start col-md-4 pl-0 pr-0 col-form-label">Date Range :</label>
										<div class="col-md-8 p-0">					
											<label class="form-control border-0 input-full">15-09-2020</label>
										</div>
									</div>
								</div>
					
								<div class="col-md-6">
									<div class="form-group form-inline pl-0 pr-0">
										<label for="inlineinput" class="justify-content-start col-md-4 pl-0 pr-0 col-form-label">No. of Courses Accessed :</label>
										<div class="col-md-8 p-0">
											<label class="form-control border-0 input-full">10</label>
										</div>
									</div>
								</div>
					
								<div class="col-md-6">
									<div class="form-group form-inline pl-0 pr-0">
										<label for="inlineinput" class="justify-content-start col-md-4 pl-0 pr-0 col-form-label">No. of Quiz Attempted :</label>
										<div class="col-md-8 p-0">
											<label class="form-control border-0 input-full">12</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
						
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Topics Covered</div>
						</div>
						<div class="card-body">
							<div class="chart-container">
								<canvas id="topicsChart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Topics visited</div>
						</div>
						<div class="card-body pl-0 pr-0">
							<div class="table-responsive">
								<table id="score_table" class="display table table-striped  table-bordered table-hover responsive nowrap" style="width:100%">
									<thead>
										<tr>	
											<th>Last Visited</th> 
											<th>Topic</th>  
											<th>Grade</th> 
											<th>Subject</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>
										<tr>
											<td>Last visited</td>
											<td>Topic Name</td>
											<td>Grade 7</td>
											<td>Subject Name</td>
										</tr>										
									</tbody>
								</table>
							</div>
						</div>
					</div>							
				</div>
				<div class="col-md-12">	
							
				<div class="card">
					<div class="card-header">
						<div class="card-title">Quiz Attempted</div>
					</div>
					<div class="card-body pl-0 pr-0">
						<div class="table-responsive">
							<table id="quiz_table" class="display table table-striped  table-bordered table-hover responsive nowrap" style="width:100%">
								<thead>
									<tr>
										<th>Date</th> 
										<th>Score</th> 
										<th>Last Attempted</th> 
										<th>Topic</th> 
										<th>Grade</th> 
										<th>Subject</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
									</tr>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
									</tr>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
									</tr>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
									</tr>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
									</tr>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
									</tr>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
									</tr>
									<tr>
										<td>15-09-2000</td>
										<td>50</td>
										<td>Last Attempted</td>
										<td>Topic Name</td>
										<td>Grade 7</td>
										<td>Subject Name</td>
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
	
	<script type="text/javascript">

	var _user_detail = <?php echo json_encode($user_detail);?>;
	var base_url = '<?php echo base_url()?>';

	$(document).ready(function() {
		loaduserList();	
		initDatatable();
		if(!_user_detail || _user_detail.length == 0){
            loaduserList();
        } else {
            populateuserTable();
        }
	});

	function loaduserList(){
	$.ajax({
		url:'<?php echo base_url('admin/progressreport');?>',
		method: 'GET',
		dataType: 'json',
		success: function(data){
			if(!data || data == null || data.length == 0 || data == 'null'){
				_user_detail = [];
			} else {
				_user_detail = data;
			}
			populateuserTable();
		}
	});
}

function populateuserTable(){
	var tableObj = $('#score_table').DataTable();
	tableObj.clear();
	if(!_user_detail || _user_detail == null || _user_detail.length == 0){
		tableObj.rows.add( [ {"userid":"No records found"}]).draw();
		return;
	}
	tableObj.rows.add(_user_detail).draw();
}

function initDatatable(){
	$('#score_table').DataTable({
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
					var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:edituserDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
					var delBtn="<button type='button' onclick='javascript:deleteuser("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";				
					return editBtn + delBtn;
				}
			}
		],

	});
} 

// ================================================================
			
			

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
