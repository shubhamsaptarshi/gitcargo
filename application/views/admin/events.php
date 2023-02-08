<?php $this->load->view('admin/include/header');?>
<?php $this->load->view('admin/include/sidebar');?>

		<div class="main-panel">
			<div class="content">
				
				<div class="page-inner ">
					<div class="row">
						<div class="col-md-12">
							<div class="card pb-4">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Manage Events</h4>
								<center>
				                <div id="del_div" style="display:none;margin-left: 200px;">
				                    <h4 style="color:green;"> Events Deleted Successfully </h4>
				                 </div>
                </center>
              <h4><?php echo $this->session->flashdata('successsmessage'); ?></h4>
              <h4><?php echo $this->session->flashdata('failmessage'); ?></h4> 
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal" onclick="editEventDetails(0);">
											<i class="fa fa-plus"></i>
											Add Events
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
														Add Events</span> 
													</h5>
													<button type="button" id="closebtn" name="closebtn" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
										<form action="<?php echo base_url();?>admin/Events/saveevent"  method="POST" enctype="multipart/form-data" >
													<div class="form-group row" id="codesection" name="codesection">
		                       <label for="exampleInputUsername2" class="col-sm-9 col-form-label">Event Id <span style="margin-left:70px;" id="spcode"></span></label>
		                        <input type="hidden" class="form-control" id="eventid" name="eventid" value="">
		                      </div>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group">
																	<label>Event Title</label>
																	<input id="eventtitle" name="eventtitle" type="text" class="form-control" placeholder="Add Event Title">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group">
																	<label>Event Date</label>
																	<input id="eventdate" name="eventdate"
                                   type="date" class="form-control" placeholder="Add Event Title">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group">
																	<label>Event Time</label>
																	<input id="eventtime" name="eventtime" type="time" class="form-control" placeholder="Add Event Title">
																</div>
															</div>
								      	</div>
          							     <div class="col-sm-12">
          										<div class="form-group">
          																<label>Event Image</label>
          																	<div class="form-group">
          	                            <div class="media mb-2" id="image_div">
          	                              <input type='file'name="event_logo"  onchange="chk_image();" id="event_logo"/>
          	                              <img id="event_logo_circle" src="assets/images/default_images.png" alt="your image" style="height:100px;width:100px" />
          	                                <input type="hidden" class="form-control" id="image_flag" name="image_flag" placeholder=" image flag" value="0">
          	                             </div>
                               	  </div> 
                              </div>
          								</div>
													   <div class="col-sm-12">
                                <div class="form-group">
                                  <label class="mb-2">Event Description</label>
                                  <div id="eventeditor">
                                    <p></p>
                                  </div>
                                </div>
                                  <input type="hidden" name="event_desc" id="event_desc" value="">
                              </div>		

														</div>
												<div id="success_div" name="success_div">
            
                    </div><br>
                    		<div class="modal-footer no-bd">
													<button id="addbtn" name="addbtn" type="submit" id="addRowButton" class="btn btn-primary" onclick="updateDescEditorData();">Add</button>
													<button  class="btn btn-danger" data-dismiss="modal">Cancel</button>
												</div>
													</form>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="events_table" name="events_table" class="display table table-bordered table-hover responsive nowrap" style="width:100%">
											<thead>
												<tr>
												   <th>Event Title</th>
													<th>Event Date</th>
													<th>Event Time</th>
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
  var _descriptionEditor;
  var _events_list = <?php echo json_encode($events_list);?>;
  var base_url ='<?php echo base_url()?>';
  $(document).ready(function(){
       $("#codesection").hide();
        initDatatable();
        if(!_events_list || _events_list.length == 0){
            loadEventList();
        } else {
            populateEventTable();
        }
            ClassicEditor
            .create( document.querySelector( '#eventeditor' ) )
            .then( newEditor => {
          _descriptionEditor = newEditor;
           console.log("Editor init complete");
           })
            .catch( error => {
                console.error( error );
            } );
    });
 

 function updateDescEditorData(){
      console.log("GET DATA FROM Editor : ", _descriptionEditor, _descriptionEditor.getData());
      //Set data in editor
      var discription_get = _descriptionEditor.getData();
      $('#event_desc').val(discription_get);
  }

    function loadEventList(){
                $.ajax({
                  url:'<?php echo base_url('admin/Events/events');?>',
                   method: 'GET',
                    dataType: 'json',
                    success: function(data){
                      if(!data || data == null || data.length == 0 || data == 'null'){
                          _events_list = [];
                      } else {
                          _events_list = data;
                      }
                      populateEventTable();
                    }
                });
            }
    function populateEventTable(){
        var tableObj = $('#events_table').DataTable();
        tableObj.clear();
        if(!_events_list || _events_list == null || _events_list.length == 0){
            tableObj.rows.add( [ {"eventid":"No records found"}]).draw();
            return;
        }
        //console.log("Doc List :", _hospitals_list);
        tableObj.rows.add(_events_list).draw();
    }

    function initDatatable(){
        $('#events_table').DataTable( {
         dom: 'Bfrtip',
          buttons: [
            'csv', 'excel', 'pdf'
       ],
            "columnDefs" : [
                {
                    "data" : 'eventtitle',
                    "targets" : [ 0 ]
                },{
                    "data" : 'eventdate',
                    "targets" : [ 1 ]
                },{
                    "data" : 'eventtime',
                    "targets" : [ 2 ]
                },{
                    "data" : "eventid",
                    "targets" : [ 3 ],
                    "render":function(data, type, row){
					var editBtn ="<button data-toggle='modal' data-target='#addRowModal'type='button' onclick='javascript:editEventDetails("+data+");' data-toggle='tooltip' class='btn btn-link btn-primary btn-lg' data-original-title='Edit Task'><i class='fa fa-edit'></i></button>";
					var delBtn="<button type='button' onclick='javascript:deleteevent("+data+");'  data-toggle='tooltip' class='btn btn-link btn-danger' data-original-title='Remove'><i class='fa fa-times'></i></button>";return editBtn + delBtn;
                        }
                 }
            ],

        });
    } 
   
    function deleteevent(eventid){
       var retVal = confirm("Do you want to continue ?");
        if( retVal == true ){
          var eventid = eventid;
          $.get(base_url + "admin/events/deleteevent?id="+eventid);
           $("#del_div").show();
          setTimeout(function() {
            $("#del_div").hide();
            }, 2000);//location.reload();
            loadEventList();
             return true;
            } else {
                return false;
                }
    }

   function findGradeById(eventid){
                if(!eventid || eventid < 1 || !_events_list || _events_list.length == 0){
                    return null;
                }
                for(var i=0; i < _events_list.length; ++i){
                   if(_events_list[i].eventid == eventid){
                        return _events_list[i];
                    }
                }
                return null;
            }

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#event_logo_circle').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}$("#event_logo").change(function(){
    readURL(this);
});

function chk_image()
      {
       var image_name  = $("#event_logo").val();
       if(image_name != null)
       {
         $('#image_flag').val(1);
       }
    }

   function editEventDetails(eventid){
    if(eventid == 0){
        $("#codesection").hide();
        $("#addtext").html('Add Event');
        $("#addbtn").html('Add');
        $('#event_logo_circle').attr("src",base_url + 'assets/images/default_images.png')
    }else{
    	 $("#codesection").show();
       $("#addtext").html('Edit Event');
       $("#addbtn").html('Update');
    }
       if(!_events_list || _events_list == null || _events_list.length == 0){
                    return;
                }
          var eventObj = findGradeById(eventid);
               if(eventObj == null && eventObj > 0){
                    return;
                }
	          $('#spcode').text(eventObj ? eventObj.eventid : '');
	          $('#eventid').val(eventObj ? eventObj.eventid : '');
	          $('#eventtitle').val(eventObj ? eventObj.eventtitle : '');
            var db_date = eventObj.eventdate;
            var eventdate= moment(db_date, "DD/MM/YYYY").format("YYYY-MM-DD");
           	$('#eventdate').val(eventdate);
	          var db_time = eventObj.eventtime;
            console.log(db_time);
            var eventtime = moment(db_time, "hh:mm:ss A").format("hh:mm");
            console.log(eventtime);
           	$('#eventtime').val(eventtime);
	          var event_logo = eventObj.image;
	        var test =  $('#event_logo_circle').attr("src", base_url + event_logo);
            _descriptionEditor.setData(eventObj.event_desc);
            $('#event_desc').val(eventObj.event_desc);

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