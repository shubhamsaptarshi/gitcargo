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
								<h4 class="card-title"> Manage Quiz</h4>
     						<center>
									<div id="del_div" style="display:none;margin-left: 200px;">
										<h4 style="color:green;"> Quiz Deleted Successfully </h4>
									</div>
          </center>
								<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editQuizDetails(0);">
									<i class="fa fa-plus"></i>
									Add Quiz
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
												Add Quiz</span>
											</h5>
											<button type="button" id="closebtn_quiz" name="closebtn_quiz" class="close" data-dismiss="modal" aria-label="Close" onclick="editQuizDetails(0);">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<!--<p class="small">Add Category new row using this form, make sure you fill them all</p>-->
											<form id="quiz_form" name="quiz_form">
												<div class="form-group row" id="codesection" name="codesection">
		                        					<label for="exampleInputUsername2" class="col-sm-9 col-form-label">Module Id <span style="margin-left:70px;" id="spcode"></span></label>
                            						<input type="hidden" class="form-control" id="quizid" name="quizid" value="">
		         	</div>
													<div class="row">
													<div class="col-sm-6">
													  <div class="form-group">
		            	<select required class="form-control" id="catid" name="catid" onchange="getcourselist();">
	              	<option value=""></option>																	
																</select>
											   	</div>
												  	</div>
												</div>
												
												<div class="row">
													<div class="col-sm-6">
           	<div class="form-group">
          						<select class="form-control" id="coursetitle" name="coursetitle">											
                 	<option value=""></option>
															</select>
												</div>
      	 	</div>
													<div class="col-sm-6">
														<div class="form-group">														
															<input required id="quiztitle" name="quiztitle" type="text" class="form-control" placeholder="Quiz Title">
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

							<div class="table-responsive">

								<table id="quiz_table" name="quiz_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
									<thead>
										<tr>								
											<th>Quiz ID</th>											
											<th>Course Category</th>
											<th>Course Title</th>											
											<th>Quiz Title</th>
											<!-- <th>No. of Questions</th> -->
											<th style="width: 10%">Action</th>											
										</tr>
									</thead>
									<tbody></tbody>
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


<script type="text/javascript">
	var _quiz_list = <?php echo json_encode($quiz_list);?>;
	var _category_list = <?php echo json_encode($category_list);?>;
 var _course_list = <?php echo json_encode($course_list);?>;
	var base_url ='<?php echo base_url()?>';
 $(document).ready(function() {
				$("#codesection").hide();
				populateCategoryList();
					initDatatable();
				if(!_quiz_list || _quiz_list.length == 0){
					loadQuizList();
				} else {
					populateQuizTable();
				}
				$('#quiz_form').on('submit', quizForm);		
			});

	function populateCategoryList(selectedcategory,selectedcourse) {
		var options1 = '<option value="">Select Category </option>';
    if (_category_list && _category_list != null && _category_list.length > 0) {
      for (var i = 0; i < _category_list.length; ++i) {
        options1 += '<option value="' + _category_list[i].catid + '">' + _category_list[i].categoryname + '</option>';
      }
    }
    $('#catid').html(options1);
        if(selectedcategory && selectedcategory != null){
          $('#catid').val(selectedcategory);
        	}
        	populateCourseList(selectedcourse);

	}

	function populateCourseList(selectedcourse) {
    var options1 = '<option value="">Select Course </option>';
    if (_course_list && _course_list != null && _course_list.length > 0) {
      for (var i = 0; i < _course_list.length; ++i) {
        options1 += '<option value="' + _course_list[i].courseid + '">' + _course_list[i].coursetitle + '</option>';
      }
    }
    $('#coursetitle').html(options1);
       if(selectedcourse && selectedcourse != null){
          $('#coursetitle').val(selectedcourse);
        	}
  }

	function quizForm(event) {
		event.preventDefault();
		$.ajax({
			url: '<?php echo base_url('admin/quiz/savequiz');?>',
			method: 'POST',
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function() {
				$('#quiz_form').attr('disabled', 'disabled');
			},
			success: function(data) {
				if (data.successful) {
					//   console.log(data.recipientsnumber);
					$('#success_div').html('<b style="margin-left:100px;color:green;"> Quiz added successfully</b>');
					setTimeout(function() {
						$("#success_div").hide();
						$("#closebtn_quiz").click();
						$("#closebtn_quiz").click().modal('hide');
						loadQuizList();
					}, 2000);
				}
				else if(data.already){
					$('#success_div').html('<b style="margin-left:100px;color:red;"> Course exists with other quiz </b>');
					setTimeout(function() {
						$("#success_div").hide();
						$("#closebtn_quiz").click();
						$("#closebtn_quiz").click().modal('hide');
						loadQuizList()
					}, 3000);
				}
			
			},
	
		});
	}

	// ===================================================


	function loadQuizList(){
		$.ajax({
			url:'<?php echo base_url('admin/Quiz/quiz');?>',
			method: 'GET',
			dataType: 'json',
			success: function(data){
				if(!data || data == null || data.length == 0 || data == 'null'){
					_quiz_list = [];
				} else {
					_quiz_list = data;
				}
				populateQuizTable();
			}
		});
	}

	function populateQuizTable(){
		var tableObj = $('#quiz_table').DataTable();
		tableObj.clear();
		if(!_quiz_list || _quiz_list == null || _quiz_list.length == 0){
			tableObj.rows.add( [ {"quizid":"No records found"}]).draw();
			return;
		}
		tableObj.rows.add(_quiz_list).draw();
	}

	function initDatatable(){
		$('#quiz_table').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf'
			],
			"columnDefs" : [
				{
					"data" : 'quizid',
					"targets" : [ 0 ]
				},{
					"data" : 'categoryname',
					"targets" : [ 1 ]
				},{
					"data" : 'coursetitle',
					"targets" : [ 2 ]
				},{
					"data" : 'quiztitle',
					"targets" : [ 3 ]
				},{
					"data" : 'quizid',
					"targets" : [ 4 ],				
					"render":function(data, type, row){
						var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:editQuizDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
						var delBtn="<button type='button' onclick='javascript:deletequiz("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";				
						return editBtn + delBtn;
					}
				}
			],

		});
	}

	function deletequiz(quizid){
		var retVal = confirm("Do you want to continue ?");
		if( retVal == true ){
			var quizid = quizid;
			$.get(base_url + "admin/quiz/deletequiz?id="+quizid);
			$("#del_div").show();
			setTimeout(function() {
				$("#del_div").hide();
			}, 2000);//location.reload();
			loadQuizList();
			return true;
		} else {
			return false;
		}
	}

	function findQuizById(quizid){
		if(!quizid || quizid < 1 || !_quiz_list || _quiz_list.length == 0){
			return null;
		}
		for(var i=0; i < _quiz_list.length; ++i){
			if(_quiz_list[i].quizid == quizid){
				return _quiz_list[i];
			}
		}
		return null;
	}

	function editQuizDetails(quizid){
		if (quizid == 0) {
			$("#codesection").hide();
			$("#addtext").html('Add Quiz');
			$('#catid').val('');
		 $('#coursetitle').val('');
		 $('#quiztitle').val('');
			
		} else {
			$("#codesection").show();
			$("#addtext").html('Edit Quiz');
			$("#addbtn").html('Update');
				if(!_quiz_list || _quiz_list == null || _quiz_list.length == 0){
			return;
		}
		var quizObj = findQuizById(quizid);
		if(quizObj == null && quizObj > 0){
			return;
		}
		$('#spcode').text(quizObj ? quizObj.quizid : '');
		$('#quizid').val(quizObj ? quizObj.quizid : '');
		$('#quizid').val(quizObj ? quizObj.quizid : '');
		$('#categoryname').val(quizObj ? quizObj.categoryname : '');
		$('#coursetitle').val(quizObj ? quizObj.courseid : '');
		$('#quiztitle').val(quizObj ? quizObj.quiztitle : '');
		//alert(quizObj.courseid)
			var selectedcourse = quizObj.courseid;
			var selectedcategory = quizObj.catid;
			populateCategoryList(selectedcategory,selectedcourse);
				 if(quizObj == null || quizObj.length == 0){
       				 populateCategoryList();
       				 populateCourseList();
    				  }
		}
}

	setTimeout(function(){
			$("#del_div").hide();
		},5000);


	function getcourselist(){
    var catid = $('#catid').val();
    $.ajax({
      url: base_url + "admin/quiz/getCourseDetails?id="+catid,
      method: 'GET',
      dataType: 'json',
      success: function(data) {
        var options1 = '<option value="">Select course </option>';
        if (!data || data == null || data.length == 0 || data == 'null') {
          _coursebycategory_list = [];
        } else {
          _coursebycategory_list = data;
          console.log("Selected : ", _coursebycategory_list);
          if (_coursebycategory_list && _coursebycategory_list != null && _coursebycategory_list.length > 0) {
            for (var i = 0; i < _coursebycategory_list.length; ++i) {
              options1 += '<option value="' + _coursebycategory_list[i].courseid + '">' + _coursebycategory_list[i].coursetitle + '</option>';
            }
          }
        }
        $('#coursetitle').html(options1);
      }
    }); 
  }
  
</script>

</body>
</html>
