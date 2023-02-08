
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<div class="modal fade " id="warning_modal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="submitPetLabel" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header p-2 no-bd bg-primary">
				<h5 class="modal-title">
					<span class="fw-mediumbold text-white">
					Train2Success</span> 
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
			</div>
			<div class="modal-body">
		        <div class="row">
			        <div class="col-md-6 my-auto text-center">
			            <h5> Please login for free access to all the tutorial</h5>
			            <a class="btn btn-modern dark" onclick="onclickLogin()">Login</a>
			        </div>
			        <div class="col-md-6 my-auto text-center">
			            <h5>  If not already registered </h5>
			            <a class="btn btn-modern dark" onclick="onclickSignup()">Sign Up</a>
			        </div>
			    </div>
			</div>	
		</div>
	</div>
</div>

<!-- ============================ Page Title Start================================== -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcrumbs-wrap">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
							<li class="breadcrumb-item">Courses</li>
						</ol>
					</nav>
					<h1 class="breadcrumb-title"><?php echo $category->categoryname; ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ============================ Page Title End ================================== -->	

<section class="pt-0">
	<div class="container">
		<!-- Row -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 order-1 order-lg-2 order-md-1">
				<!-- Row -->
				<div class="row align-items-center mt-3 mb-3">
					
				</div>
				<!-- /Row -->
				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<!-- Course Style 1 For Student -->
						<div class="dashboard_container">
							<div class="dashboard_container_header">
								<div class="dashboard_fl_1">
								<h4 id='course_list_title'>Loading courses...</h4>
								</div>
								<div class="dashboard_fl_2">
									<ul class="mb0">
										<li class="list-inline-item">
											
										</li>
										<li class="list-inline-item">
											<div class="form-inline my-2 my-lg-0">
												<input class="form-control" id="search_field" type="search" placeholder="Search courses" aria-label="Search" onkeypress="filter(event)">
												<button class="btn my-2 my-sm-0" type="submit" onclick="filterCourses()"><i class="ti-search"></i></button>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="dashboard_container_body" id="course_list">
								
								<!-- Single Course -->
								<div class="dashboard_single_course">
									<div class="dashboard_single_course_thumb">
										<img src="<?php echo base_url();?>assets/img/co-1.jpg" class="img-fluid" alt="" />
										<div class="dashboard_action">
											
											<a href="#" class="btn btn-ect">Loading...</a>
										</div>
									</div>
									<div class="dashboard_single_course_caption">
										<div class="dashboard_single_course_head">
											<div class="dashboard_single_course_head_flex">
												
												<h4 class="dashboard_course_title">Loading...</h4>
												
											</div>
											<div class="dc_head_right">
												<h4 class="dc_price_rate theme-cl">₹ 0.00</h4>
											</div>
										</div>
										<div class="dashboard_single_course_des">
											<p>Loading...</p>
										</div>
										
										<div class="dashboard_single_course_progress">
											<div class="dashboard_single_course_progress_1"></div>
											<div class="dashboard_single_course_progress_2">
												<a href="#" class="btn btn-modern dark">Take this course</a>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
					</div>
				</div>
				<!-- /Row -->
			</div>
		</div>
		<!-- Row -->
	</div>
</section>

<script type="text/javascript">
	
	var _category = <?php echo ($category) ? json_encode($category) : 'null';?>;
	var _courses_list = <?php echo ($courses) ? json_encode($courses) : 'null';?>;
	var _curr_cnt = 0, _total_cnt = 0, _increment = 5;
	
	$(document).ready(function page_init(){
		_total_cnt = _courses_list.length;
		_curr_cnt = (_courses_list.length > _increment) ? _increment : _courses_list.length;
		populateCourseList(_courses_list);
	});

	function populateCourseList(courselist){
		if(!courselist || courselist == null || courselist.length == 0){
			$('#course_list_title').text('No courses found');
			$('#course_list').html('');
			return;
		}
		var html = '';
		var course = null;
		for(var i=0; i < _curr_cnt; i++){
			course = courselist[i];
			html += '<div class="dashboard_single_course">';
			html += '<div class="dashboard_single_course_thumb">';
			html += '<img src="'+ course.thumbnail +'" class="img-fluid" alt="'+course.coursetitle+'" />';
			html += '<div class="dashboard_action">';
			html += '<a class="btn btn-ect" onclick="viewCourse(\''+ course.course_tag +'\')">View</a>';
			html += '</div></div>';
			html += '<div class="dashboard_single_course_caption">';
			html += '<div class="dashboard_single_course_head">';
			html += '<div class="dashboard_single_course_head_flex">';
			html += '<h4 class="dashboard_course_title">'+course.coursetitle+'</h4>';
			html += '</div><div class="dc_head_right">';
			html += '<h4 class="dc_price_rate theme-cl">'+ ((!course.fees || course.fees == null || course.fees == 0) ? 'Free' : '₹ '+course.fees) +'</h4>';
			html += '</div></div>';
			html += '<div class="dashboard_single_course_des">';
			html += '<p>'+course.shortdesc+'</p></div>';
			html += '<div class="dashboard_single_course_progress">';
			html += '<div class="dashboard_single_course_progress_1"></div>';
			html += '<div class="dashboard_single_course_progress_2">';
			html += '<a class="btn btn-modern dark" onclick="viewCourse(\''+ course.course_tag +'\')">Take this course</a>';
			html += '</div></div></div></div>';
		}
		html += '<div class="dashboard_single_course"><div class="dashboard_single_course_progress_1">Courses Shown : '+_curr_cnt+' / '+courselist.length+'</div>';
		html += '<div class="dashboard_single_course_progress_2">';
		if(_curr_cnt < courselist.length) {
			html += '<a href="javascript:showmore();" class="btn btn-modern dark">Show More...</a>';
		}
		html += '</div></div>';
		$('#course_list').html(html);
		$('#course_list_title').text('All Courses');
	}
	
	function viewCourse(course_tag){		
	    window.location.replace(base_url+'/courses/details/'+course_tag+'');
	}
	
	function onclickLogin(){
	    window.location.replace(base_url+'/Login');
	}
	
	function onclickSignup(){
	    window.location.replace(base_url+'/Register');
	}

	function filter(e){
		var key = e.which;
 		if(key == 13){
 			filterCourses();
 		}
	}

	function filterCourses(){
		var srchtxt = $('#search_field').val();
		if(srchtxt == null || $.trim(srchtxt).length == 0){
			_curr_cnt = (_courses_list.length > _curr_cnt) ? _curr_cnt : _courses_list.length;
			populateCourseList(_courses_list);
			return;
		}
		srchtxt = $.trim(srchtxt);
		var srchStr = new RegExp(srchtxt, "i");
		var courses = [], course = null;
		for (var i = 0; i < _courses_list.length; i++) {
			course = _courses_list[i];
			if(course.coursetitle.search(srchStr) > -1 
			 || course.shortdesc.search(srchStr) > -1){
				courses.push(course);
			}
		}
		_curr_cnt = (courses.length > _curr_cnt) ? _curr_cnt : courses.length;
		populateCourseList(courses);
	}

	function showmore(){
		_curr_cnt += _increment;
		filterCourses();
	}

</script>


