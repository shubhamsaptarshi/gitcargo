<!-- ============================ Page Title Start================================== -->
<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcrumbs-wrap">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url('courses/categories/').$course->catid;?>"><?php echo $course->categoryname;?></a></li>
						</ol>
					</nav>
					<h1 class="breadcrumb-title"><?php echo $course->coursetitle; ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!----------------------------------------------------------------------------------------------------------------------------->
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
			            <a class="btn btn-modern dark" onclick="onclickLogin('<?php echo $this->uri->segment(3); ?>')">Login</a>
			        </div>
			        <div class="col-md-6 my-auto text-center">
			            <h5>  If not already registered </h5>
			            <a class="btn btn-modern dark" onclick="onclickSignup('<?php echo $this->uri->segment(3); ?>')">Sign Up</a>
			        </div>
			    </div>
			</div>	
		</div>
	</div>
</div>
<!-- ============================ Page Title End ================================== -->	
			
<section class="bg-light pt-0 pb-0">
	<div class="side-wrapper">
	  <!-- Sidebar Holder -->
	 	<nav id="sidebar">
	    	<div class="sidebar-header">
	      		<h3>Course Curriculum</h3>
	    	</div>
		    <ul class="list-unstyled components" id="modulelist">
		      <li class="active">
		        <a href="#homeSubmenu" data-toggle="expand" aria-expanded="true">Loading modules...</a>
		        <ul class="collapse list-unstyled lectures_lists" id="homeSubmenu">
		          <li><div class="lectures_lists_title"><i class="ti-check-box text-success"></i></div> <a href="#">Loading topics...</a></li>
		        </ul>
		      </li>
     	      <li><a href="#" class="article">Loading quiz...</a></li>
		    </ul>
		</nav>

		<!-- Page Content Holder -->
		<div id="content">
          	<button type="button" id="sidebarCollapse" class="btn btn-sidemenu mb-2">
                <i class="ti-menu-alt"></i>
				<span>Course Modules</span>
			</button>
		
			<div class="container">
			    <div class="row">
					<div class="col-lg-12 col-md-12">
			    		<div class="inline_edu_first" style="padding:0 10px;">
							<h2 id="topic_title"></h2>
			   			</div>
			    	</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div >
							<div class="thumb">
								<video id="video_tag" poster="https://s3.eu-central-1.amazonaws.com/pipe.public.content/poster.png" oncontextmenu="return false;" controls controlsList="nodownload"  width="100%" height="450" controls>
										<source id="video_src" src="" type="video/mp4">
								</video>			
							</div>
							<div class="thumb">
								<a href="#" id="next-btn" onclick="selectNextTopic()" style="display: block; max-width: 200px; margin: 0 auto; color: white;" class="btn btn-sidemenu">Next Topic ></a>
							</div>
						</div>
						
						<div class="mb-0 mt-2">
							<!-- <div class="inline_edu_first">
								<h2 id="topic_title"><?php echo $course->coursetitle; ?></h2>
							</div> -->	
							<div class="edu_wraper">
								<h4 class="edu_title">Course Overview</h4>
								<p><?php echo $course->shortdesc; ?></p>		
							</div>
							<div>
	                            <button type="button" class="btn btn-sidemenu mb-2" onclick="openfeedbackmodal()">
			                        <span>Feedback/Suggestion</span>
		                        </button>
	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

<!-- Feedback/ Suggestion modal-->
<div class="modal fade" id="feedbackmodal" tabindex="-1" role="dialog" aria-labelledby="feedbackmodal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" id="feedback_popop" name="feedback_popop">
			<div class="modal-header bg-grey-dark-5">
				<h6 class="modal-title" id="exampleModalPopoversLabel">Write to us</h6>
			
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
				
			<div class="modal-body">
            	<form id="feedback_form" name="feedback_form" method="POST" >
            	    <div class="form-group">
            				<input type="text" name="your-name" id="your-name" placeholder="Name" class="form-control simple" required>
            				<span id="userError" class="help-block" ></span>
            		</div>
            		<div class="form-group">
            			<input name="your-email" id="your-email" type="email" placeholder="Email" class="form-control simple" maxlength="50" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
            		</div>	
            			
            		<div class="form-group">
            			
            			<input type="text" name="phone" id="phone" placeholder="Contact Number" class="form-control simple" maxlength="10" required>
            			<span id="phoneError" class="help-block" ></span>
            		</div>
            		
            		<div class="form-group">
            			
            			<textarea  maxlength="250" name="comment"  id="comment" placeholder="Message" class="form-control simple" required></textarea>
            			<span id="lblError" class="help-block mt-4 d-block" ></span>
            		</div>
            		<div id="success_div" name="success_div">
            		<div class="form-group">
            			<button class="btn btn-theme" type="submit">Submit </button>
            		</div>
            	
            	</form>
            </div>
        </div>
    </div>
</div>
<!--------------------Modal end ------------------------>

<!-- Quiz Modal -->
<div class="modal fade" id="courseModalQuiz" tabindex="-1" role="dialog" aria-labelledby="courseModalQuiz" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-grey-dark-5">
				<h6 class="modal-title" id="exampleModalPopoversLabel"><?php echo $course->coursetitle;?> Quiz</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
		   
			<div class="modal-body">
				<div id="quiz">
					<div id="quiz-start-screen">
						<p><a href="#" id="quiz-start-btn" class=" mt-5 quiz-button btn btn-primary ">Start</a></p>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!----------------------------------------------------------------------------------------------------------------------------------------->
<div class="modal fade" id="#myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

        </button>
        <h4 class="modal-title">Modal title</h4>

      </div>
      <div class="modal-body">
        <p>Kindly login to access the restricted content.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery.quiz.js');?>"></script>
<script>
	var _module_list = <?php echo ($modulelist) ? json_encode($modulelist) : '[]';?>;
	var _topic_list = <?php echo ($topiclist) ? json_encode($topiclist) : '[]';?>;
	var _course = <?php echo ($course) ? json_encode($course) : 'null';?>;
	var _hasquiz = false;
	var _quizdata = null;
	var _selectedTopicId = null;
	var _selectedModuleId = null;
	var _userprogress = <?php echo ($userprogress) ? json_encode($userprogress) : '[]';?>;
	var _accesstopics = [];
    var base_url ='<?php echo base_url()?>';
	var media_events = new Array();
	media_events["play"] = 0;
	media_events["ended"] = 0;
	
	$(document).ready(function() {
	    if(!isUserLoggedIn){
	        alert("User is not loggedin, Please login first");
	    }
		$("#sidebarCollapse").on("click", function() {
	    	$("#sidebar").toggleClass("active");
	    	$(this).toggleClass("active");
		});
		
		_hasquiz = (_course && _course.hasquiz == 1);
		initModuleList();
		if(_userprogress && _userprogress.length > 0){
			for (var i = 0; i < _userprogress.length; i++) {
				if(i==0){
					_accesstopics.push(_userprogress[i].topicid);
				}
				if(_userprogress[i].completed == 1){
					_selectedTopicId = _userprogress[i].topicid;
					if(i+1 < _topic_list.length){
						_accesstopics.push(_topic_list[i+1].topicid);
					}
				}
			}
			var lastVisitedTopicId = (_userprogress.length > 1) ? _userprogress[_userprogress.length - 1].topicid : _userprogress[0].topicid;
			if(lastVisitedTopicId != _selectedTopicId){
				_selectedTopicId = lastVisitedTopicId;
			}
			//Enable quiz if all topics are covered
			if(_userprogress.length == _topic_list.length){
				if(_userprogress[_userprogress.length - 1].completed == 1 && _hasquiz){
					enableQuiz();
				}
			}
		} else {
			_selectedTopicId = (_topic_list && _topic_list.length > 0) ? _topic_list[0].topicid : 0;
			_accesstopics.push(_selectedTopicId);
		}
		selectTopic(_selectedTopicId, false);
		initVideo();
		//enableQuiz();
		  $('#feedback_form').on('submit', feedbackForm);
	});

	function initModuleList(_selectedModuleId){
	   
		if(_module_list == null || _module_list.length == 0){
			$('#modulelist').html('<li><a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">No modules found</a></li>');
			return;
		}

		var htags = '';
		for(var i = 0, j; i < _module_list.length; i++) {
		   console.log(_selectedModuleId);
			  	htags += (_selectedModuleId == _module_list[i].moduleid) ? '<li class="active">' : '<li>';
		  	
			htags += '<a href="#submenu_'+ _module_list[i].moduleid +'" data-toggle="collapse" aria-expanded="false">'+ _module_list[i].modulename +'</a>';
			var topics = getTopicsByModuleId(_module_list[i].moduleid);
			if(topics && topics.length > 0) {
				htags += '<ul class="collapse list-unstyled lectures_lists" id="submenu_'+_module_list[i].moduleid+'">';
				for(j = 0; j < topics.length; j++) {
			    	htags += '<li><div class="lectures_lists_title"><i id="topicstatus_'+ topics[j].topicid +'" lock-type="'+ topics[j].type+'" ';

			    	if(hasTopicCompleted(topics[j].topicid)){
			    		htags += 'class="ti-check-box text-success"></i></div>';
			    	} else {
			    		if(topics[j].type == 'Lock'){
			    			htags += 'class="ti-lock"></i></div>';	
			    		} else {
			    			htags += 'class="ti-control-play"></i></div>';
			    		}
			    	}
					htags += '<a href="#" onclick="selectTopic('+ topics[j].topicid +', true)">'+ topics[j].topictitle +'</a></li>';
				}
				htags += '</ul>';
			}
			htags += '</li>';
		}
		if(_hasquiz != undefined && _hasquiz != null && _hasquiz){
			htags += '<li class="active"><a id="quiz-btn" href="javascript:void(0)" >Start Quiz</a></li>';	
		}
		$('#modulelist').html(htags);
	}
	
	function onclickLogin(course_tag){
	    if(course_tag != null || course_tag != undefined){
	       // console.log("Current : ", course_tag);
	        window.location.replace(base_url+'/Login?cid='+ course_tag);
	    }
	}
	
	function onclickSignup(course_tag){
	    console.log("Current signup : ", course_tag);
	    if(course_tag != null || course_tag != undefined){
	        window.location.replace(base_url+'/Register?cid='+course_tag);
	    }
	}

	function isUserLoggedIn(){
		return (userid != undefined && userid != null && userid > 0);
	}
	
	function openfeedbackmodal(){
	     $('#feedbackmodal').modal('show');
	}

	function selectTopic(topicid, checklogin){
		var locktype = $('#topicstatus_'+topicid).attr('lock-type');
		if(checklogin && !isUserLoggedIn() && locktype == 'Lock'){
// 			alert('Kindly login to access the restricted content.');
            $('#warning_modal').modal('show');
			return;
		}
		
		if(!isTopicAccessible(topicid) && checklogin){
			alert('Kindly complete the earlier topics to access this topic.');
			return;
		}

		if(_topic_list && _topic_list != null && _topic_list.length > 0) {
			for(var j = 0; j < _topic_list.length; j++) {
				if(_topic_list[j].topicid == topicid){
					
					_selectedTopicId = topicid;
                    _selectedModuleId =_topic_list[j].moduleid
                  	$('#topic_title').text( _topic_list[j].topictitle );
					if(_topic_list[j].videoposter && _topic_list[j].videoposter.length > 0){
						$('#video_tag').attr('poster', _topic_list[j].videoposter)
					} else {
						$('#video_tag').removeAttr('poster');
					}
					$('#video_src').attr('src', _topic_list[j].videourl);
    				initModuleList(_selectedModuleId);
    				
    				// =========================Abhishek Parihar========================
    				<?php $userid = $this->session->userdata('userid'); ?>
    				if(!userid && _topic_list[j].type == 'Lock'){
    				    hideNextTopicBtn();
    				    $('#warning_modal').modal('show');
    				    return;
    				}else{
    				    $('#video_tag').get(0).load();
    				    hideNextTopicBtn();
    				}
					
					return;
				}
			}
		}
	}

	function hideNextTopicBtn(){
		$('#next-btn').hide();
	}

	function showNextTopicBtn(){
		if(_topic_list[_topic_list.length - 1].topicid == _selectedTopicId){
			$('#next-btn').text('Take the Quiz');
			$('#next-btn').attr('data-toggle', 'modal');
			$('#next-btn').attr('data-target', '#courseModalQuiz');
		} else {
			$('#next-btn').text('Next Topic >');
		}
		$('#next-btn').show();
	}

	function selectNextTopic(){
		for(var j = 0; j < _topic_list.length; j++) {
			if(_topic_list[j].topicid == _selectedTopicId){
				if(j+1 == _topic_list.length && _hasquiz){
					startQuiz();
				} else {
					selectTopic(_topic_list[j+1].topicid, true);
				}
				break;
			}
		}
	}

	function initVideo(){
	    $('#video_tag').on('play', videoStarted);
		$('#video_tag').on('ended', videoCompleted);
	}

	function videoStarted(event){
		if(event.type == 'play' && isUserLoggedIn()){
			$.ajax({
				type: "GET",
				url: base_url + "Courses/videoplayed?topicid="+_selectedTopicId
			});		
		}
	}

	function videoCompleted(event) {
		if(event.type != 'ended'){
			return;
		}
		//Mark the topic as complete and enable next topic
	 	for (var i = 0; i < _topic_list.length; i++) {
	 		if(_topic_list[i].topicid == _selectedTopicId){
	 			if(i+1 < _topic_list.length){
	 				_accesstopics.push(_topic_list[i+1].topicid);
	 			} else if(i+1 == _topic_list.length && _hasquiz){
	 				//If all topic are covered then enable quiz
	 				enableQuiz();
	 			}
	 			var topicInProg = false;
	 			for (var indx = 0; indx < _userprogress.length; indx++) {
	 				if(_userprogress[indx].topicid == _selectedTopicId){
	 					_userprogress[indx].completed = 1;
	 					topicInProg = true;
	 					break;
	 				}
	 			}
	 			//Change the topic icon to completed
	 			$('#topicstatus_'+ _selectedTopicId)
					.removeClass('ti-lock')
					.removeClass('ti-control-play')
					.addClass('ti-check-box')
					.addClass('text-success');
				
				showNextTopicBtn();

	 			if(!topicInProg){
	 				_userprogress.push({'topicid': _selectedTopicId, 'completed':1});
	 			}
	 			break;
	 		}
	 	}

	 	//Store the updated status
	 	if(isUserLoggedIn()){
			$.ajax({
				type: "GET",
				url: base_url + "Courses/videoended?topicid="+_selectedTopicId
			});
		}
	}

	function isTopicAccessible(topicid){
		for (var i = 0; i < _accesstopics.length; i++) {
			if(_accesstopics[i] == topicid){
				return true;
			}
		}
		return false;
	}

	function getTopicsByModuleId(moduleid){
		var topicarr = [];
		if(_topic_list && _topic_list != null && _topic_list.length > 0) {
			for(var j = 0; j < _topic_list.length; j++) {
				if(_topic_list[j].moduleid == moduleid){
					topicarr.push(_topic_list[j]);
				}
			}
		}
		//TODO: Sort the topics by seq no

		return topicarr;
	}

	function hasTopicCompleted(topicid){
		if(_userprogress && _userprogress.length > 0){
			for (var i = 0; i < _userprogress.length; i++) {
				if(_userprogress[i].topicid == topicid){
					return _userprogress[i].completed == 1;
				}
			}
		}
		return false;
	}

	function enableQuiz(){
		if(!_hasquiz){
			return;
		}
		$('#quiz-btn').attr('data-toggle', 'modal');
		$('#quiz-btn').attr('data-target', '#courseModalQuiz');
		$('#quiz-btn').on('click', startQuiz);
	}

	function startQuiz(){
		if(!_hasquiz){
			return;
		}
		$.ajax({
          type: "GET",
          url: base_url + 'courses/quizdata?courseid='+ _course.courseid,
          success: function(data) {
          	if(typeof data == 'string'){
          		data = JSON.parse(data);
          	}
			//console.log('Quiz Data : ', typeof data , JSON.stringify(data));
			if(data && data != null){
				_quizdata = data;
			} else {
				_quizdata = [];
			}
			//init quiz
			$('#quiz').quiz({
			  counterFormat: 'Question %current of %total',
			  questions: _quizdata,
			});
		  }
        });
	}

	function feedbackForm(event) {
        event.preventDefault();
        $.ajax({
        url: '<?php echo base_url('contactus/feedbackform');?>',
        method: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() {
          $('#feedback_form').attr('disabled', 'disabled');
        },
        success: function(data) {
       //   console.log(data);
        if (data.successful) {
                  $('#success_div').html('<b style="margin-left:100px;color:green;"> Thank you for your feedback.</b>');
                   setTimeout(function() {
                   $("#success_div").hide();
                   $("#closebtn").click();
                   $("#feedback_popop").click().modal('hide');
                  location.reload();
                  }, 4000);
          }
          else if(data.error){
                   $('#success_div').html('<b style="margin-left:100px;color:red;"> Invalid Email id </b>');
                        setTimeout(function() {
                   $("#success_div").hide();
                  }, 4000);
          }
     
       },
     
      });
    }
    
    function updateScore(correctAns, totalQues){
		$.ajax({
			type: "GET",
			url: base_url + "Courses/quizended?courseid="+_course.courseid+'&userid='+userid+'&score='+correctAns
		});
	}

</script>
