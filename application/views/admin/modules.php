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
                <h4 class="card-title">Manage Modules</h4>
                <center>
                  <div id="del_div" style="display:none;margin-left: 200px;">
                    <h4 style="color:green;"> Modules Deleted Successfully </h4>
                  </div>
                </center>
                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editModuleDetails(0);">
                  <i class="fa fa-plus"></i>
                  Add Module
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
                        <span class="fw-mediumbold" id="addtext" name="addtext">
                        Add Module</span>                       
                      </h5>
                      <button type="button" id="closebtn" name="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
												
										  <form id="module_form" name="module_form">
											  <div class="form-group row" id="codesection" name="codesection">
		                        <label for="exampleInputUsername2" class="col-sm-9 col-form-label">Module Id <span style="margin-left:70px;" id="spcode"></span></label>
                            <input type="hidden" class="form-control" id="moduleid" name="moduleid" value="">
		                    </div>

						  <div class="row">
							  <div class="col-sm-12">
								  <div class="form-group">
										<label>Course Category</label>
                              <select required class="form-control" id="catid" name="catid" onchange="getcourselist();">
                                <option value=""></option>																	
															</select>
											      </div>
												  </div>	
							<div class="col-sm-12">
                            <div class="form-group">
                              <label>Course Name</label>
                              <select required class="form-control" id="coursetitle" name="coursetitle">											
                                <option value=""></option>
												      </select>
											      </div>
                          </div>	
													
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Module Name</label>
                              <input required id="modulename" name="modulename" type="text" class="form-control" placeholder="Enter module Name">
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Seqno.</label>
                              <input required id="seqno" name="seqno" type="text" class="form-control" placeholder="Enter sequence no">
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
                <table id="module_table" name="module_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Course Category</th>
                      <th>Course Name</th>
                      <th>Module Name</th>
                      <th>Sequence no</th>
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
<script type="text/javascript">
  var _module_list = <?php echo json_encode($module_list);?>;
  var _category_list = <?php echo json_encode($category_list);?>;
  var _course_list = <?php echo json_encode($course_list);?>;
  
  console.log("_course_list: ",_course_list);

  var base_url ='<?php echo base_url()?>';
  $(document).ready(function(){
    populateCategoryList();
    // populateCourseList();
    $("#codesection").hide();
    initDatatable();
    if(!_module_list || _module_list.length == 0){
        loadModuleList();
    } else {
        populateModuleTable();
    }
      $('#module_form').on('submit', moduleForm);
  });

  function populateCategoryList() {
    var options1 = '<option value="">Select Option </option>';
    if (_category_list && _category_list != null && _category_list.length > 0) {
      for (var i = 0; i < _category_list.length; ++i) {
        options1 += '<option value="' + _category_list[i].catid + '">' + _category_list[i].categoryname + '</option>';
      }
    }
    $('#catid').html(options1);
  }
  
  function populateCourseList(catid){  //used only at the time of module editing
      var options2 = '<option value="">Select Course </option>';
    if (_course_list && _course_list != null && _course_list.length > 0) {
      for (var i = 0; i < _course_list.length; ++i) {
          if(_course_list[i].catid == catid){
            options2 += '<option value="' + _course_list[i].courseid + '">' + _course_list[i].coursetitle + '</option>';
          }
      }
    }
    $('#coursetitle').html(options2);
  }

  function getcourselist() {
     //   console.log("getsubjectlist",selectedtopic);
  var catid = $('#catid').val();
    $.ajax({
        url: base_url + "admin/quiz/getcoursebycategory?id="+catid,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          var options2 = '<option value="">Select Course </option>';
          if (!data || data == null || data.length == 0 || data == 'null') {
            coursebycategory_list = [];
          } else {
            coursebycategory_list = data;
          if (coursebycategory_list && coursebycategory_list != null && coursebycategory_list.length > 0) {
              for (var i = 0; i < coursebycategory_list.length; ++i) {
                options2 += '<option value="'+coursebycategory_list[i].courseid+'">'+coursebycategory_list[i].coursetitle+'</option>';
              }
            }
          }
          $('#coursetitle').html(options2);
        }
      }); 
  }


  function moduleForm(event) {
    event.preventDefault();
    $.ajax({
      url: '<?php echo base_url('admin/modules/savemodule');?>',
      method: 'POST',
      data: $(this).serialize(),
      dataType: 'json',
      beforeSend: function() {
        $('#module_form').attr('disabled', 'disabled');
      },
      success: function(data) {
       if (data.successful) {
          // console.log(data.recipientsnumber);
          $('#success_div').html('<b style="margin-left:100px;color:green;"> module added Successfully</b>');
          setTimeout(function() {
            $("#success_div").hide();
            $("#closebtn").click();
            $("#closebtn").click().modal('hide');
            loadModuleList();
          }, 2000);
        }
        else if(data.already){
          $('#success_div').html('<b style="margin-left:100px;color:red;"> module allready exist </b>');
          setTimeout(function() {
            $("#success_div").hide();
            $("#closebtn").click();
            $("#closebtn").click().modal('hide');
            loadModuleList()
          }, 3000);
        } 
      },  
    });
  }
   
  function loadModuleList(){
    $.ajax({
      url:'<?php echo base_url('admin/Modules/modules');?>',
      method: 'GET',
      dataType: 'json',
      success: function(data){
        if(!data || data == null || data.length == 0 || data == 'null'){
          _module_list = [];
        } else {
          _module_list = data;
        }
        populateModuleTable();
      }
    });
  }

  function populateModuleTable(){
    var tableObj = $('#module_table').DataTable();
    tableObj.clear();
    if(!_module_list || _module_list == null || _module_list.length == 0){
      tableObj.rows.add( [ {"moduleid":"No records found"}]).draw();
      return;
    }
    //console.log("module List :", _module_list);
    tableObj.rows.add(_module_list).draw();
  }

  function initDatatable(){
    $('#module_table').DataTable({
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
          "data" : 'seqno',
          "targets" : [ 3 ]
        },{
          "data" : "moduleid",
          "targets" : [ 4 ],
          "render":function(data, type, row){
            var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:editModuleDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
            var delBtn="<button type='button' onclick='javascript:deleteModule("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";				
            return editBtn + delBtn;
          }
        }
      ],

    });
  } 
   
  function deleteModule(moduleid){
    var retVal = confirm("Do you want to continue ?");
    if( retVal == true ){
      var moduleid = moduleid;
      $.get(base_url + "admin/modules/deleteModule?id="+moduleid);
      $("#del_div").show();
      setTimeout(function() {
        $("#del_div").hide();
      }, 2000);//location.reload();
      loadModuleList();
      return true;
    } else {
      return false;
    }
  }

  function findModuleById(moduleid){
    if(!moduleid || moduleid < 1 || !_module_list || _module_list.length == 0){
      return null;
    }
    for(var i=0; i < _module_list.length; ++i){
      if(_module_list[i].moduleid == moduleid){
        return _module_list[i];
      }
    }
    return null;
  }

  function editModuleDetails(moduleid){
    if(moduleid == 0){
      $("#codesection").hide();
      $("#addtext").html('Add module');
      $("#addbtn").html('Add');
    }else{
      $("#codesection").show();
      $("#addtext").html('Edit module');
      $("#addbtn").html('Update');
    }
  
    if(!_module_list || _module_list == null || _module_list.length == 0){
      return;
    }
    var moduleObj = findModuleById(moduleid);
    if(moduleObj == null && moduleObj > 0){
      return;
    }
    populateCourseList(moduleObj ? moduleObj.catid : '');
    
    $('#spcode').text(moduleObj ? moduleObj.moduleid : '');
    $('#moduleid').val(moduleObj ? moduleObj.moduleid : '');
    $('#modulename').val(moduleObj ? moduleObj.modulename : '');
    $('#seqno').val(moduleObj ? moduleObj.seqno : '');
    $('#catid').val(moduleObj ? moduleObj.catid : '');
    $('#coursetitle').val(moduleObj ? moduleObj.courseid : '');
    // $('#coursetitle').val(moduleObj ? moduleObj.coursetitle : '');
   
  }

  setTimeout(function(){
    $("#del_div").hide();
  },5000);
  

</script>

</body>
</html>
