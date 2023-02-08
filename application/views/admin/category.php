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
                <h4 class="card-title"> Manage Course Category</h4>
                <center>
                  <div id="del_div" style="display:none;margin-left: 200px;">
                    <h4 style="color:green;"> Course Category Deleted Successfully </h4>
                  </div>
                </center>

                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editCategoryDetails(0);">
                  <i class="fa fa-plus"></i>
                  Add Course Category
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
                          Add Course Category
                        </span> 
                      </h5>
                      <button type="button" id="closebtn" name="closebtn" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!--<p class="small">Add category new row using this form, make sure you fill them all</p>-->
                      <form id="category_form" name="category_form">
                        <div class="form-group row" id="codesection" name="codesection">
                          <label for="exampleInputUsername2" class="col-sm-9 col-form-label">Category Id <span style="margin-left:70px;" id="spcode"></span></label>
                          <input type="hidden" class="form-control" id="catid" name="catid" value="">
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>Course Category Name</label>
                              <input required id="categoryname" name="categoryname" type="text" class="form-control" placeholder="Course Category name">
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

                <table id="category_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Course Category Name</th>
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
  var _category_list = <?php echo json_encode($category_list);?>;
  var base_url ='<?php echo base_url()?>';
  $(document).ready(function(){
    $("#codesection").hide();
    initDatatable();
    if(!_category_list || _category_list.length == 0){
      loadCategoryList();
    } else {
      populateCategoryTable();
    }
    $('#category_form').on('submit', categoryForm);
  });

  function categoryForm(event) {
    event.preventDefault();
    $.ajax({
      url: '<?php echo base_url('admin/Category/saveCategory');?>',
      method: 'POST',
      data: $(this).serialize(),
      dataType: 'json',
      beforeSend: function() {
        $('#category_form').attr('disabled', 'disabled');
      },
      success: function(data) {
        if (data.successful) {
          // console.log(data.recipientsnumber);
          $('#success_div').html('<b style="margin-left:100px;color:green;"> Category added Successfully</b>');
          setTimeout(function() {
            $("#success_div").hide();
            $("#closebtn").click();
            $("#closebtn").click().modal('hide');
            loadCategoryList();
          }, 2000);
        }
        else if(data.already){
          $('#success_div').html('<b style="margin-left:100px;color:red;"> Category allready exist </b>');
          setTimeout(function() {
            $("#success_div").hide();
            $("#closebtn").click();
            $("#closebtn").click().modal('hide');
            loadCategoryList()
          }, 3000);
        } 
      },  
    });
  }
   
  function loadCategoryList(){
    $.ajax({
      url:'<?php echo base_url('admin/Category/Category');?>',
      method: 'GET',
      dataType: 'json',
      success: function(data){
        if(!data || data == null || data.length == 0 || data == 'null'){
          _category_list = [];
        } else {
          _category_list = data;
        }
        populateCategoryTable();
      }
    });
  }
  function populateCategoryTable(){
    var tableObj = $('#category_table').DataTable();
    tableObj.clear();
    if(!_category_list || _category_list == null || _category_list.length == 0){
      tableObj.rows.add( [ {"catid":"No records found"}]).draw();
      return;
    }
    //console.log("Doc List :", _hospitals_list);
    tableObj.rows.add(_category_list).draw();
  }

  function initDatatable(){
    $('#category_table').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'csv', 'excel', 'pdf'
      ],
      "columnDefs" : [
        {
          "data" : 'categoryname',
          "targets" : [ 0 ]
        },
        {
          "data" : "catid",
          "targets" : [ 1 ],
          "render":function(data, type, row){
            var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:editCategoryDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
            var delBtn="<button type='button' onclick='javascript:deleteCategory("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";				
            return editBtn + delBtn;
          }
        }
      ],

    });
  } 
   
  function deleteCategory(catid){
    var retVal = confirm("Do you want to continue ?");
    if( retVal == true ){
      var catid = catid;
      $.get(base_url + "admin/Category/deleteCategory?id="+catid);
      $("#del_div").show();
      setTimeout(function() {
        $("#del_div").hide();
      }, 2000); location.reload();
      loadCategoryList();
      return true;
    } 
    else {
      return false;
    }
  }

  function findCategoryById(catid){
    if(!catid || catid < 1 || !_category_list || _category_list.length == 0){
      return null;
    }
    for(var i=0; i < _category_list.length; ++i){
      if(_category_list[i].catid == catid){
        return _category_list[i];
      }
    }
    return null;
  }

  function editCategoryDetails(catid){
    if(catid == 0){
      $("#codesection").hide();
      $("#addtext").html('Add Course Category');
      $("#addbtn").html('Add');
      $('#catid').val('');
      $('#categoryname').val('');
    }else{
          $("#addtext").html('Edit Course Category');
          $("#addbtn").html('Update');
        if(!_category_list || _category_list == null || _category_list.length == 0){
          return;
        }
        var categoryObj = findCategoryById(catid);
        if(categoryObj == null && categoryObj > 0){
          return;
        }
        $('#spcode').text(categoryObj ? categoryObj.catid : '');
        $('#catid').val(categoryObj ? categoryObj.catid : '');
        $('#categoryname').val(categoryObj ? categoryObj.categoryname : '');
    }
  }

  setTimeout(function(){
    $("#del_div").hide();
  },5000);
  
</script>

</body>
</html>