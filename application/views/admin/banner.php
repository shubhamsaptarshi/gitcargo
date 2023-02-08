<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>

		<div class="main-panel">
			<div class="content">
				
				<div class="page-inner ">
					<div class="row ">
						<div class="col-md-12">
							<div class="card pb-4">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Manage Events</h4>
								<center>
				                <div id="del_div" style="display:none;margin-left: 200px;">
				                    <h4 style="color:green;"> Banner Deleted Successfully </h4>
				                 </div>
                </center>
              <h4><?php echo $this->session->flashdata('successsmessage'); ?></h4>
              <h4><?php echo $this->session->flashdata('failmessage'); ?></h4> 
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editBannerDetails(0);">
											<i class="fa fa-plus"></i>
											Add Banner
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
														Add Banner</span> 
													</h5>
													<button type="button" id="closebtn" name="closebtn" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
										<form action="<?php echo base_url();?>admin/Banner/savebanner"  method="POST" enctype="multipart/form-data" >
													<div class="form-group row" id="codesection" name="codesection">
		                       <label for="exampleInputUsername2" class="col-sm-9 col-form-label">Banner Id <span style="margin-left:70px;" id="spcode"></span></label>
		                        <input type="hidden" class="form-control" id="bannerid" name="bannerid" value="">
		                      </div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group">
																	<label>Banner Title</label>
																	<input id="bannertitle" name="bannertitle" type="text" class="form-control" placeholder="Banner Title">
																</div>
															</div>
													
								      	</div>

                          <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label>Banner Text</label>
                                  <input id="bannertext" name="bannertext" type="text" class="form-control" placeholder="Banner Text">
                                </div>
                              </div>
                          
                        </div>
                             <div class="col-sm-12">

          										<div class="form-group">
          																<label>Banner Image</label>
                                            <h4 style="color:red;">Image Size Should be 1920 X 800</h4>
          														<div class="form-group">
          	                            <div class="media mb-2" id="image_div">
          	                              <input type='file'name="banner_logo"  onchange="chk_image();" id="banner_logo"/>
          	                              <img id="banner_logo_circle" src="<?php echo base_url();?>assets/images/default_images.png" alt="your image" style="height:100px;width:100px" />
          	                                <input type="hidden" class="form-control" id="image_flag" name="image_flag" placeholder=" image flag" value="0">
          	                             </div>
                               	  </div> 
                              </div>
          								</div>
													
                        <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label>Button Text</label>
                                  <input id="buttontext" name="buttontext" type="text" class="form-control" placeholder="Button Text">
                                </div>
                              </div>
                        </div>

                          <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label>Button Link</label>
                                  <input id="buttonlink" name="buttonlink" type="text" class="form-control" placeholder="Button Link">
                                </div>
                              </div>
                        </div>

                          <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label>Sequence no</label>
                                  <input id="sequenceno" name="sequenceno" type="text" class="form-control" placeholder="Sequence no">
                                </div>
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
										<table id="banner_table" name="banner_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
											<thead>
												<tr>
												  <th>Banner Title</th>
													<th>Banner Text </th>
													<th>Banner Image</th>
                          <th>Button Text</th>
                          <th>Button Link</th>
                          <th> Sequence no</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
									
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

  <script src="<?php echo base_url();?>assets/js/moment.js"></script>

  <!-- Atlantis JS -->
  <script src="<?php echo base_url();?>assets/admin/js/atlantis.min.js"></script>
<script type="text/javascript">
  var _banner_list = <?php echo json_encode($banner_list);?>;
  var base_url ='<?php echo base_url()?>';
  $(document).ready(function(){
       $("#codesection").hide();
        initDatatable();
        if(!_banner_list || _banner_list.length == 0){
            loadBannerList();
        } else {
            populateBannerTable();
        }
           
    });
 
    function loadBannerList(){
                $.ajax({
                  url:'<?php echo base_url('admin/Banner/getbanner');?>',
                   method: 'GET',
                    dataType: 'json',
                    success: function(data){
                      if(!data || data == null || data.length == 0 || data == 'null'){
                          _banner_list = [];
                      } else {
                          _banner_list = data;
                      }
                      populateBannerTable();
                    }
                });
            }
    function populateBannerTable(){
        var tableObj = $('#banner_table').DataTable();
        tableObj.clear();
        if(!_banner_list || _banner_list == null || _banner_list.length == 0){
            tableObj.rows.add( [ {"bannerid":"No records found"}]).draw();
            return;
        }
        //console.log("Doc List :", _hospitals_list);
        tableObj.rows.add(_banner_list).draw();
    }

    function initDatatable(){
        $('#banner_table').DataTable( {
         dom: 'Bfrtip',
          buttons: [
            'csv', 'excel', 'pdf'
       ],
            "columnDefs" : [
                {
                    "data" : 'banner_title',
                    "targets" : [ 0 ]
                },{
                    "data" : 'banner_text',
                    "targets" : [ 1 ]
                },{
                    "data" : 'banner_image',
                    "targets" : [ 2 ],
                    "render":function(data, type, full, meta){
                    var img_data=base_url + data;
                      return '<img src="'+img_data+'" style="height:200px;width:250px;"/>';
                   }         
                },{
                    "data" : 'button_text',
                    "targets" : [ 3 ]
                },{
                    "data" : 'button_link',
                    "targets" : [ 4 ]
                },{
                    "data" : 'sequence_no',
                    "targets" : [ 5 ]
                },{
                    "data" : "bannerid",
                    "targets" : [ 6 ],
                    "render":function(data, type, row){
					var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:editBannerDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
					var delBtn="<button type='button' onclick='javascript:deletebanner("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";return editBtn + delBtn;
                        }
                 }
            ],

        });
    } 
   
    function deletebanner(bannerid){
       var retVal = confirm("Do you want to continue ?");
        if( retVal == true ){
          var bannerid = bannerid;
          $.get(base_url + "admin/Banner/deletebanner?id="+bannerid);
           $("#del_div").show();
          setTimeout(function() {
            $("#del_div").hide();
            }, 2000);//location.reload();
            loadBannerList();
             return true;
            } else {
                return false;
                }
    }

   function findBannerById(bannerid){
                if(!bannerid || bannerid < 1 || !_banner_list || _banner_list.length == 0){
                    return null;
                }
                for(var i=0; i < _banner_list.length; ++i){
                   if(_banner_list[i].bannerid == bannerid){
                        return _banner_list[i];
                    }
                }
                return null;
            }

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#banner_logo_circle').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}$("#banner_logo").change(function(){
    readURL(this);
});

function chk_image()
      {
       var image_name  = $("#banner_logo").val();
       if(image_name != null)
       {
         $('#image_flag').val(1);
       }
    }

   function editBannerDetails(bannerid){
    if(bannerid == 0){
        $("#codesection").hide();
        $("#addtext").html('Add Event');
        $("#addbtn").html('Add');
        $('#banner_logo_circle').attr("src",base_url + 'assets/images/default_images.png')
    }else{
    	 $("#codesection").show();
       $("#addtext").html('Edit Event');
       $("#addbtn").html('Update');
    }
       if(!_banner_list || _banner_list == null || _banner_list.length == 0){
                    return;
                }
          var eventObj = findBannerById(bannerid);
               if(eventObj == null && eventObj > 0){
                    return;
                }
	          $('#spcode').text(eventObj ? eventObj.bannerid : '');
	          $('#bannerid').val(eventObj ? eventObj.bannerid : '');
	          $('#bannertitle').val(eventObj ? eventObj.banner_title : '');
            $('#bannertext').val(eventObj ? eventObj.banner_text : '');
            $('#buttontext').val(eventObj ? eventObj.button_text : '');
            $('#buttonlink').val(eventObj ? eventObj.button_link : '');
            $('#sequenceno').val(eventObj ? eventObj.sequence_no : '');
        var banner_logo = eventObj.banner_image;
	      var test =  $('#banner_logo_circle').attr("src", base_url + banner_logo);
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