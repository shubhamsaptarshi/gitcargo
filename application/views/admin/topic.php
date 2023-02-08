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
								<h4 class="card-title">Manage Topics</h4>
								<center>
									<div id="del_div" style="display:none;margin-left: 200px;">
										<h4 style="color:green;"> Topic Deleted Successfully </h4>
									</div>
            				    </center>
								<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" onclick="editTopicDetails(0);"data-target="#addRowModal" >
									<i class="fa fa-plus"></i>
									Add Topic
								</button>

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
												Add Topic </span> 
												
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closebtn" name="closebtn">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form name="topic_form" id="topic_form"  method="POST" enctype="multipart/form-data" >
												<div class="form-group row" id="codesection" name="codesection">
													<label for="exampleInputUsername2" class="col-sm-9 col-form-label">Topic Id <span style="margin-left:70px;" id="spcode"></span></label>
													<input type="hidden" class="form-control" id="topicid" name="topicid" value="">
												</div>
												<div class="row">
														
													<div class="col-sm-6">
														<div class="form-group">
															<label>Course Category</label>
															<select required class="form-control" onchange="getcourselist();" id="catid" name="catid">
																<option value=""></option>
															</select>
														</div>
													</div>	
													<div class="col-sm-6">
														<div class="form-group">
															<label>Course Name</label>
															<select required class="form-control" id="courseid" onchange="getmodulelist();" name="courseid">
																<option value=""></option>
															</select>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label>Module Name</label>
															<select required class="form-control" id="moduleid" name="moduleid">
																<option value=""></option>
															</select>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label>Topic Name</label>
															<input id="topictitle" name="topictitle" type="text" class="form-control" placeholder="Enter Topic Name">
														</div>
													</div>
															
													<div class="col-sm-12">
														<div class="form-group">
															<label>Video Status</label>
															<select class="form-control" id="type" name="type">
																<option value="">Select Videos</option>
																<option value="Lock">Lock</option>
																<option value="Unlock">Unlock</option>
															</select>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group">
															<label>Sequence no</label>
															<input id="seqno" name="seqno" type="text" class="form-control" placeholder="Sequence no">
														</div>
													</div>
                    

													<div class="col-sm-12">
														<div class="form-group">
															<label>Video Id</label>
															<input id="videourl" name="videourl" type="text" class="form-control" placeholder="Enter Page URL">
														</div>
													</div>
					
												</div>
												<div id="success_div" name="success_div">
            	</div><br>
		          <div class="modal-footer no-bd">
													<button id="addbtn"name="addbtn" type="submit" id="addRowButton" class="btn btn-primary">Add</button>
													<button  class="btn btn-danger" data-dismiss="modal">Cancel</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
			
							<div class="table-responsive">
								<table id="topic_table" name="topic_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
									<thead>
										<tr>
											<th>Course Category</th>
											<th>Course Name</th>
											<th>Module Name</th>
											<th>Topic Name</th>
											<th>Status</th>
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
<!-- jQuery Vector Maps -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo base_url();?>assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="<?php echo base_url();?>assets/admin/js/atlantis.min.js"></script>
<script type="text/javascript">

 var _topic_list = <?php echo json_encode($topic_list);?>;
	var _category_list = <?php echo json_encode($category_list);?>;
	var base_url ='<?php echo base_url()?>';

	$(document).ready(function(){
		//  populateCategoryList();
		editTopicDetails();
					$("#codesection").hide();
					initDatatable();
					if(!_topic_list || _topic_list.length == 0){
						loadTopicList();
					} else {
						populateTopicTable();
					}
				$('#topic_form').on('submit', topicForm);

	});

	  function populateCategoryList(selectedcat,selectedcourse,selectedmodule) {
    var options1 = '<option value="">Select Option </option>';
    if (_category_list && _category_list != null && _category_list.length > 0) {
      for (var i = 0; i < _category_list.length; ++i) {
        options1 += '<option value="' + _category_list[i].catid + '">' + _category_list[i].categoryname + '</option>';
      }
    }
    $('#catid').html(options1);
    	 if(selectedcat && selectedcat != null){
              $('#catid').val(selectedcat);
            }
            getcourselist(selectedcourse,selectedmodule);
  }


  function getcourselist(selectedcourse,selectedmodule) {
     //   console.log("getsubjectlist",selectedtopic);
  var catid = $('#catid').val();
    $.ajax({
        url: base_url + "admin/quiz/getcoursebycategory?id="+catid,
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
        	 if(selectedcourse && selectedcourse != null){
              $('#courseid').val(selectedcourse);
            }
            getmodulelist(selectedmodule);
        }
      }); 
  }

    function getmodulelist(selectedmodule) {
			  var courseid = $('#courseid').val();
   	 $.ajax({
        url: base_url + "admin/modules/getmodulebycourse?id="+courseid,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          var options1 = '<option value="">Select Module </option>';
          if (!data || data == null || data.length == 0 || data == 'null') {
            modulebycourse_list = [];
          } else {
            modulebycourse_list = data;
         				 if (modulebycourse_list && modulebycourse_list != null && modulebycourse_list.length > 0) {
             		 for (var i = 0; i < modulebycourse_list.length; ++i) {
                options1 += '<option value="' + modulebycourse_list[i].moduleid + '">' + modulebycourse_list[i].modulename + '</option>';
              	}
            }
          }
          $('#moduleid').html(options1);
         	 if(selectedmodule && selectedmodule != null){
              $('#moduleid').val(selectedmodule);
            }
        }
      }); 
  }

	function topicForm(event) {
		event.preventDefault();
		$.ajax({
			url: '<?php echo base_url('admin/topic/savetopic');?>',
			method: 'POST',
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function() {
				$('#topic_form').attr('disabled', 'disabled');
			},
			success: function(data) {
				if (data.successful) {
					//   console.log(data.recipientsnumber);
					$('#success_div').html('<b style="margin-left:100px;color:green;"> Topic added successfully</b>');
					setTimeout(function() {
						$("#success_div").hide();
						$("#closebtn").click();
						$("#closebtn").click().modal('hide');
						loadTopicList();
					}, 2000);
				}
				else if(data.already){
					$('#success_div').html('<b style="margin-left:100px;color:red;"> Topic allready exists </b>');
					setTimeout(function() {
						$("#success_div").hide();
						$("#closebtn").click();
						$("#closebtn").click().modal('hide');
						loadTopicList()
					}, 3000);
				}
			
			},
	
		});
	}

	function loadTopicList(){
		$.ajax({
			url:'<?php echo base_url('admin/topic/topics');?>',
			method: 'GET',
			dataType: 'json',
			success: function(data){
				if(!data || data == null || data.length == 0 || data == 'null'){
					_topic_list = [];
				} else {
					_topic_list = data;
				}
				populateTopicTable();
			}
		});
	}

	function populateTopicTable(){
		var tableObj = $('#topic_table').DataTable();
		tableObj.clear();
		if(!_topic_list || _topic_list == null || _topic_list.length == 0){
			tableObj.rows.add( [ {"courseid":"No records found"}]).draw();
			return;
		}
		tableObj.rows.add(_topic_list).draw();
	}

	function initDatatable(){
		$('#topic_table').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'csv', 'excel', 'pdf'
			],
			"columnDefs" : [
				{
					"data" : 'categoryname',
					"targets" : [ 0 ]
				},{
					"data" : 'coursetitle',
					"targets" : [ 1 ]
				},{
					"data" : 'modulename',
					"targets" : [ 2 ]
				},{
					"data" : 'topictitle',
					"targets" : [ 3 ]
				},{
					"data" : 'type',
					"targets" : [ 4 ]
				},{
					"data" : "topicid",
					"targets" : [ 5 ],
					"render":function(data, type, row){
						var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:editTopicDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
						var delBtn="<button type='button' onclick='javascript:deletetopic("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";				
						return editBtn + delBtn;
					}
				}
			],

		});
	} 

	function deletetopic(topicid){
		var retVal = confirm("Do you want to continue ?");
		if( retVal == true ){
			var topicid = topicid;
			$.get(base_url + "admin/topic/deletetopic?id="+topicid);
			$("#del_div").show();
			setTimeout(function() {
				$("#del_div").hide();
			}, 2000);
			location.reload();
			loadTopicList();
			return true;
		} else {
			return false;
		}
	}

	function findTopicById(topicid){
		if(!topicid || topicid < 1 || !_topic_list || _topic_list.length == 0){
			return null;
		}
		for(var i=0; i < _topic_list.length; ++i){
			if(_topic_list[i].topicid == topicid){
				return _topic_list[i];
			}
		}
		return null;
	}

	function editTopicDetails(topicid){
		if (topicid == 0) {
			$("#codesection").hide();
			$("#addtext").html('Add Topic');
				$("#addbtn").html('Add');
			} else {
			$("#codesection").show();
			$("#addtext").html('Edit Topic');
			$("#addbtn").html('Update');
			}
		if(!_topic_list || _topic_list == null || _topic_list.length == 0){
			return;
		}
		var topicObj = findTopicById(topicid);
		if(topicObj == null && topicObj > 0){
			return;
		}
		$('#spcode').text(topicObj ? topicObj.topicid : '');
	//	$('#topicid').val(topicObj ? topicObj.topicid : '');
		$('#topicid').val(topicObj ? topicObj.topicid : '');
	 $('#topictitle').val(topicObj ? topicObj.topictitle : '');
		$('#videourl').val(topicObj ? topicObj.videourl : '');
		$('#seqno').val(topicObj ? topicObj.seqno : '');
 	$('#type').val(topicObj ? topicObj.type : '');
		var selectedcat =(topicObj ? topicObj.catid : '');
		var selectedcourse =(topicObj ? topicObj.courseid : '');
		var selectedmodule =(topicObj ? topicObj.moduleid : '');
		populateCategoryList(selectedcat,selectedcourse,selectedmodule);
		if(topicObj == null || topicObj.length == 0){
			populateCategoryList();
		}
	}


	setTimeout(function(){
		$("#del_div").hide();
	},5000);

</script>

</body>
</html>
