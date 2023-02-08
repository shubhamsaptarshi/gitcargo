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
                                <h4 class="card-title">Manage Courses</h4>
							                         <center>
                                    <div id="del_div" style="display:none;margin-left: 200px;">
                                        <h4 style="color:green;"> Course Deleted Successfully </h4>
                                    </div>
            				                 </center>
                                   <h4><?php echo $this->session->flashdata('successsmessage'); ?></h4>
                                  <h4><?php echo $this->session->flashdata('failmessage'); ?></h4> 
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editCourseDetails(0);">
                                    <i class="fa fa-plus"></i>
                                    Add Course
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
                                                Add Course</span> 
                                            </h5>
                                            <button type="button" id="closebtn" name="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
										    <form id="course_form" action="<?php echo base_url();?>admin/course/saveCourses"  method="POST" enctype="multipart/form-data"  onsubmit="return courseForm()">
											    <div class="form-group row" id="codesection" name="codesection">
                                                    <label for="exampleInputUsername2" class="col-sm-9 col-form-label">Course Id <span style="margin-left:70px;" id="spcode"></span></label>
                                                    <input type="hidden" class="form-control" id="courseid" name="courseid" value="">
                                                </div>
									     		<div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Course Category</label>
                                                            <select required class="form-control" id="catid" name="catid">
                                                                <option value="">1</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>                                                   

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Course Name</label>
                                                            <input required id="coursetitle" name="coursetitle" type="text" class="form-control" placeholder="course name">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Course Tag / URL</label>
                                                            <input required id="course_tag" name="course_tag" type="text" class="form-control" placeholder="Course_tag" onkeypress="return alpha(event)">
                                                            <span id="userError" class="help-block" ></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group" id="myRadioGroup">
                                                            <label>Course Price</label>
                                                            <input type="radio" name="cars" checked="checked" value="2"/> Paid 
                                                            <input type="radio" name="cars" value="3" /> Free
                                                                
                                                            <div id="Cars2" class="desc mt-2">
                                                                <input type="text" class="form-control mb-2" name="fees" id="fees" maxlength="20" placeholder="If so, mention price">	
                                                            </div>																	
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
														<div class="form-group">
															<label>Status</label>
															<select class="form-control" id="status" name="status">
																<option value="">Select Status</option>
																<option value="Active">Active</option>
																<option value="Inactive">Inactive</option>
															</select>
														</div>
													</div>                                                        
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-2">Course Short Description </label>
                                                            <!--<div id="learneditor">
                                                            </div>
                                                            <input type="hidden" name="" id="shortdesc">-->
                                                            <textarea style="width:450px;" name="shortdesc" id="shortdesc" maxlength="350"></textarea>
                                                        </div>																  
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Meta Title</label>
                                                            <input id="meta_title" name="meta_title" type="text" class="form-control" placeholder="Meta Title">
                                                        </div>
                                                    </div>                                                    

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Meta Author</label>
                                                            <input id="meta_author" name="meta_author" type="text" class="form-control" placeholder="Meta Author">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-2">Meta Description</label>
                                                            <textarea style="width:450px;" name="meta_description" id="meta_description" maxlength="350"></textarea>
                                                        </div>																  
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-2">Meta Keywords</label>
                                                            <textarea style="width:450px;" name="meta_keywords" id="meta_keywords" maxlength="350"></textarea>
                                                        </div>																  
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="mb-2">SEO Script</label>                                                           
                                                            <textarea style="width:450px;" name="seo_script" id="seo_script"></textarea>
                                                        </div>																  
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                      <label>Course Thumbnail</label>
                                                       <div class="form-group">
                                                        <div class="media mb-2" id="image_div">
                                                          <input type='file'name="thumbnail"  onchange="chk_image();" id="thumbnail"/>
                                                          <img id="thumbnail_logo_circle" src="<?php echo base_url();?>assets/images/default_images.png" alt="your image" style="height:100px;width:100px" />
                                                            <input type="hidden" class="form-control" id="image_flag" name="image_flag" placeholder=" image flag" value="0">
                                                         </div>
                                                      </div> 

                                                        <!--<div class="form-group">
                                                            <label>Course Thumbnail</label>
                                                            <input type='file' onchange="readURL(this);" required id="thumbnail"  name="thumbnail"  class="form-control">
                                                            <div class="text-center">
                                                                <img id="blah" src="#" alt="your image" />
                                                            </div>
                                                        </div>-->
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
                                <table id="course_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Course Category</th>
                                            <th>Course Name</th>
                                            <th>Fees</th>
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
<script type="text/javascript">
   var _course_list = <?php echo json_encode($course_list);?>;
   var _category_list = <?php echo json_encode($category_list);?>;
   var base_url ='<?php echo base_url()?>';

    $(document).ready(function() {
        $("input[name$='cars']").click(function() {
            var test = $(this).val();
            $("div.desc").hide();
            $("#Cars" + test).show();
        });
      editCourseDetails();
   	    populateCategoryList();
        $("#codesection").hide();
        initDatatable();
        if(!_course_list || _course_list.length == 0){
            loadcourseList();
        } else {
            populatecourseTable();
        }
        //$('#course_form').on('submit', courseForm);
    });
    
    $(function (){
         $("#course_tag").keypress(function (e) {
             var keyCode = e.keyCode || e.which;
             $("#userError").html("");

             //Regex for Valid Characters i.e. Alphabets & numbers
            var regex = /^[a-zA-Z0-9-_]+$/;

             //Validate TextBox value against the Regex.
             var isValid = regex.test(String.fromCharCode(keyCode));
             if (!isValid) {
                //  $("#userError").html("Only Alphabets & Numbers Allowed");
             }
             return isValid;
         });
    });

    document.getElementById("course_tag").onclick = function() {
      var regex = /^[a-zA-Z0-9-_]+$/;
      var str = document.getElementById("course_tag").value;
      if (regex.exec(str) == null) {
        // alert("Not Allowed.");
        document.getElementById("course_tag").value = null;
        $("#userError").html("*Only alphabets, Numbers and following symbols of hyphen(-) & underscore (_) allowed.");
        return false;
      } else {
        // Do whatever you want.
      }
    }

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#thumbnail_logo_circle').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}$("#thumbnail").change(function(){
    readURL(this);
});

function chk_image()
      {
       var image_name  = $("#thumbnail").val();
       if(image_name != null)
       {
         $('#image_flag').val(1);
       }
    }
    function courseForm() {
        var course_tag = $('#course_tag').val();
        // console.log('Courese_tag ', course_tag);
        if(/^[a-zA-Z0-9-_]*$/.test(course_tag) == false) {
            $("#userError").html("*Only alphabets, Numbers and following symbols of hyphen(-) & underscore (_) allowed.");
            return false;
        }
        return true;
    }


    function populateCategoryList() {
        var options1 = '<option value="">Select Option </option>';
        if (_category_list && _category_list != null && _category_list.length > 0) {
            for (var i = 0; i < _category_list.length; ++i) {
                options1 += '<option value="' + _category_list[i].catid + '">' + _category_list[i].categoryname + '</option>';
            }
        }
        $('#catid').html(options1);
    }

 
    function loadcourseList(){
        $.ajax({
            url:'<?php echo base_url('admin/Course/course');?>',
            method: 'GET',
            dataType: 'json',
            success: function(data){
                if(!data || data == null || data.length == 0 || data == 'null'){
                    _course_list = [];
                } else {
                    _course_list = data;
                }
                populatecourseTable();
            }
        });
    }

    function populatecourseTable(){
        var tableObj = $('#course_table').DataTable();
        tableObj.clear();
        if(!_course_list || _course_list == null || _course_list.length == 0){
            tableObj.rows.add( [ {"courseid":"No records found"}]).draw();
            return;
        }
        tableObj.rows.add(_course_list).draw();
    }

    function initDatatable(){
        $('#course_table').DataTable({
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
                    "data" : 'fees',
                    "targets" : [ 2 ]
                },{
                    "data" : 'status',
                    "targets" : [ 3 ]
                },{
                    "data" : "courseid",
                    "targets" : [ 4 ],
                    "render":function(data, type, row){
                        var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:editCourseDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
                        var delBtn="<button type='button' onclick='javascript:deleteCourse("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";				
                        return editBtn + delBtn;
                    }
                }
            ],

        });
    } 
   
    function deleteCourse(courseid){
        var retVal = confirm("Do you want to continue ?");
        if( retVal == true ){
            var courseid = courseid;
            $.get(base_url + "admin/Course/deleteCourse?id="+courseid);
            $("#del_div").show();
            setTimeout(function() {
                $("#del_div").hide();
            }, 2000);
            location.reload();
            loadcourseList();
            return true;
        } else {
            return false;
        }
    }

   function findcourseById(courseid){
        if(!courseid || courseid < 1 || !_course_list || _course_list.length == 0){
            return null;
        }
        for(var i=0; i < _course_list.length; ++i){
            if(_course_list[i].courseid == courseid){
                return _course_list[i];
            }
        }
        return null;
    }

    function editCourseDetails(courseid){
        if (courseid == 0) {
            $("#codesection").hide();
            $("#addtext").html('Add Course');
            $("#addbtn").html('Add');
            $('#thumbnail_logo_circle').attr("src",base_url + 'assets/images/default_images.png');
            $('#spcode').text(courseObj ? courseObj.courseid : '');
        //  $('#courseid').val('');
            $('#catid').val('');
            $('#coursetitle').val('');
            $('#course_tag').val('');
            $('#fees').val('');
            $('#status').val('');
            $('#shortdesc').val('');
            $('#meta_description').val('');
            $('#meta_title').val('');
            $('#meta_author').val('');
            $('#meta_keywords').val('');
            $('#seo_script').val('');
        } else {
            $("#codesection").show();
            $("#addtext").html('Edit course');
            $("#addbtn").html('Update');
            if(!_course_list || _course_list == null || _course_list.length == 0){
                return;
            }
            var courseObj = findcourseById(courseid);
            if(courseObj == null && courseObj > 0){
            return;
            }
            $('#spcode').text(courseObj ? courseObj.courseid : '');
            $('#courseid').val(courseObj ? courseObj.courseid : '');
            $('#catid').val(courseObj ? courseObj.catid : '');
            $('#coursetitle').val(courseObj ? courseObj.coursetitle : '');
            $('#course_tag').val(courseObj ? courseObj.course_tag : '');
            $('#fees').val(courseObj ? courseObj.fees : '');
            $('#status').val(courseObj ? courseObj.status : '');
            $('#shortdesc').val(courseObj ? courseObj.shortdesc : '');
            $('#meta_title').val(courseObj ? courseObj.meta_title : '');
            $('#meta_author').val(courseObj ? courseObj.meta_author : '');
            $('#meta_description').val(courseObj ? courseObj.meta_description : '');
            $('#meta_keywords').val(courseObj ? courseObj.meta_keywords : '');
            $('#seo_script').val(courseObj ? courseObj.seo_script : '');
            var thumbnail_logo = (courseObj ? courseObj.thumbnail : '');
            if(thumbnail_logo == null || thumbnail_logo == undefined)
            {
                $('#thumbnail_logo_circle').attr("src", base_url + 'assets/images/default_images.png');
            }else{
                $('#thumbnail_logo_circle').attr("src", thumbnail_logo);
            }
         }
    }
    setTimeout(function(){
        $("#del_div").hide();
    },5000);
  
  setTimeout(function(){
  $("#hidediv").hide();
},5000);

</script>

</body>
</html>
