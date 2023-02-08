<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>


<div class="main-panel">
	<div class="content">

		<div class="page-inner">

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title"> Manage Question Bank</h4>
								<center>
									<div id="del_div" style="display:none;margin-left: 200px;">
										<h4 style="color:green;"> Question Deleted Successfully </h4>
									</div>
								</center>
								<a href="<?php echo base_url(); ?>admin/Addquestion" class="btn btn-primary btn-round ml-auto">
									<i class="fa fa-plus"></i>
									Add Question
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="d-flex align-items-center mb-3">
								<div class="form-group">
									<select required class="form-control" onchange="getcourselist();" id="catid" name="catid">
										<option value=""></option>
									</select>
								</div>
								<div class="form-group">
									<select required class="form-control" id="courseid" name="courseid" onchange="populateSearch();">
										<option>Select Course</option>
										<option value=""></option>
									</select>
								</div>
							</div>
							<div class="table-responsive">
								<table id="question_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
									<thead>
										<tr>
											<th>Question No </th>
											<th>Quiz ID </th>
											<th>Question </th>
											<th>Marks </th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="search_section" name="search_section">
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
				Copyright 2020 Learners' Cove
			</nav>
			<div class="copyright ml-auto">
				Designed & Developed by <a href="https://www.webdakaar.com/">WDDC</a>
			</div>
		</div>
	</footer>
</div>


</div>

<?php $this->load->view('admin/include/footerjs'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

<script>
	// ClassicEditor
	//     .create( document.querySelector( '#info_school' ) )
	//     .catch( error => {
	//         console.error( error );
	//     } );
</script>

<script type="text/javascript">
	var _question_list = <?php echo json_encode($question_list); ?>;
	var _category_list = <?php echo json_encode($category_list); ?>;
	var base_url = '<?php echo base_url() ?>';
	$(document).ready(function() {
		populateCategoryList();
		$("#codesection").hide();
		initDatatable();
		if (!_question_list || _question_list.length == 0) {
			loadQuestionList();
		} else {
			populateQuestionTable();
		}

	});

	function populateCategoryList() {
		var options1 = '<option value="">Select Category </option>';
		if (_category_list && _category_list != null && _category_list.length > 0) {
			for (var i = 0; i < _category_list.length; ++i) {
				options1 += '<option value="' + _category_list[i].catid + '">' + _category_list[i].categoryname + '</option>';
			}
		}
		$('#catid').html(options1);
	}

	function getcourselist() {
		// 	console.log("getsubjectlist",selectedtopic);
		var catid = $('#catid').val();
		$.ajax({
			url: base_url + "admin/quiz/getcoursebycategory?id=" + catid,
			method: 'GET',
			dataType: 'json',
			success: function(data) {
				var options1 = '<option value="">Select Course </option>';
				if (!data || data == null || data.length == 0 || data == 'null') {
					coursebycategory_list = [];
				} else {
					coursebycategory_list = data;
					if (coursebycategory_list && coursebycategory_list != null && coursebycategory_list.length > 0) {
						for (var i = 0; i < coursebycategory_list.length; ++i) {
							options1 += '<option value="' + coursebycategory_list[i].courseid + '">' + coursebycategory_list[i].coursetitle + '</option>';
						}
					}
				}
				$('#courseid').html(options1);
				// if(selectedsubject && selectedsubject != null){
				//   $('#courseid').val(selectedsubject);
				// }
				//  getchapterlist(selectedchapter,selectedtopic);
			}
		});
	}



	function loadQuestionList() {
		$.ajax({
			url: '<?php echo base_url('admin/question/question'); ?>',
			method: 'GET',
			dataType: 'json',
			success: function(data) {
				if (!data || data == null || data.length == 0 || data == 'null') {
					_question_list = [];
				} else {
					_question_list = data;
				}
				populateQuestionTable();
			}
		});
	}

	function populateQuestionTable() {
		var tableObj = $('#question_table').DataTable();
		tableObj.clear();
		if (!_question_list || _question_list == null || _question_list.length == 0) {
			tableObj.rows.add([{
				"questionid": "No records found",
				"quizid": "",
				"question": "",
				"markweightage": "",
			}]).draw();
			return;
		}
		//console.log("Doc List :", _hospitals_list);
		tableObj.rows.add(_question_list).draw();
	}

	function initDatatable() {
		$('#question_table').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf'
			],
			"columnDefs": [{
				"data": 'questionid',
				"targets": [0]
			}, {
				"data": 'quizid',
				"targets": [1]
			}, {
				"data": 'question',
				"targets": [2]
			}, {
				"data": 'markweightage',
				"targets": [3]
			}, {
				"data": "questionid",
				"targets": [4],
				"render": function(data, type, row) {
					var editBtn = '<a href=' + base_url + 'admin/Addquestion/?id=' + data + ' data-toggle="tooltip" class=" data-original-title="Edit Task"><i class="fa fa-edit"></i></a>';
					var delBtn = "<button type='button' onclick='javascript:deletequestion(" + data + ");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";
					return editBtn + delBtn;
				}
			}],

		});
	}

	function populateSearch() {
		var courseid = $('#courseid').val();
		$.ajax({
			url: base_url + "admin/question/searchresult?courseid=" + courseid,
			method: 'GET',
			dataType: 'json',
			success: function(data) {
				//console.log("console data",data);
				if (!data || data == null || data.length == 0 || data == 'null') {
					$('#search_section').html('<p style="font-weight: 800;text-align:center;width: /100%;">No matching records found</p>');
					_question_list = [];
				} else {
					_question_list = data;
					populateQuestionTable();
				}
			}
		});
	}


	function deletequestion(questionid) {
		var retVal = confirm("Do you want to delete question ?");
		if (retVal == true) {
			var questionid = questionid;
			$.get(base_url + "admin/question/deletequestion?id=" + questionid);
			$("#del_div").show();
			setTimeout(function() {
				$("#del_div").hide();
			}, 3000);
			loadQuestionList();
			location.reload();
			return true;
		} else {
			return false;
		}
	}
</script>



</body>

</html>