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
								<h4 class="card-title" id="addtext" name="addtext"> Add Question Details</h4>
								<center>
									<div id="del_div" style="display:none;margin-left: 200px;">
										<h4 style="color:green;"> Question Deleted Successfully </h4>
									</div>
								</center>
							</div>
						</div>
						<div class="card-body">

							<form action="<?php echo base_url(); ?>admin/Addquestion/savequestion" method="POST">

								<input type="hidden" name="questionid" id="questionid" value="">
								<div class="d-flex align-items-center mb-1">
									<div class="form-group">
										<select required class="form-control" onchange="getcourselist();" id="catid" name="catid">
											<option value=""></option>
										</select>
									</div>
									<div class="form-group">
										<select required class="form-control" id="courseid" name="courseid">
											<option>Select Course</option>
											<option value=""></option>
										</select>
									</div>
									<input type="hidden" name="quizid" id="quizid" value="">
									<div class="form-group">
										<input type="text" class="form-control" id="num_of_marks" name="num_of_marks" placeholder="Enter Marks">
									</div>
									<div class="form-group">
										<select class="form-control btn pl-2 pr-2" id="num_of_options" name="num_of_options" onchange="showOptionDiv();">
										</select>
									</div>
								</div>
								<div class="row pb-3">
									<div class="col-sm-12">
										<label class="mb-2 mt-2">Question :</label>
										<div class="form-group">
											<!--<div id="question_desc_editor">
																	</div>-->
											<textarea style="width:300px;" name="question_desc" id="question_desc" required maxlength="150"></textarea>

											<label id="question_err" style="display:none;font-size:0.8em !important;color:red !important"></label>
										</div>

										<!--	<input type="hidden" name="question_desc" id="question_desc" value="">-->
									</div>

									<div class="col-sm-12">
										<label class="mb-2 mt-2">Correct Option Explanation :</label>
										<div class="form-group">
											<!--	<div id="question_explanation_editor">
									</div>-->
											<textarea style="width:300px;" name="question_explanation" id="question_explanation" maxlength="150"></textarea>
										</div>
										<!--	<input type="hidden" name="question_explanation" id="question_explanation" value="">-->
									</div>
								</div>

								<div class="row pb-3">
									<div class="col-sm-12" id="optiondiv_1" name="optiondiv_1">
										<div class="form-group d-flex align-items-center pb-0">
											<div class=" form-inline">
												<label>Option &nbsp;</label> <label id="optionno_A_label"> A </label>
												<input type="hidden" name="optionno[]" id="optionno_A" value="A">
												<input type="hidden" name="option_id[]" id="option_id_A" value="">
											</div>
											<div class=" form-inline">
												<label for="inlineinput" class="col-md-6 col-form-label">Percent Weightage :</label>
												<div class="col-md-6 p-1">
													<input type="text" pattern="[0-9]{1,5}" required id="weightagepercent_1" name="weightagepercent[]" class="form-control" placeholder="Enter Marks">
													<label id="mark_1_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

												</div>
											</div>
										</div>
										<div class="form-group ">
											<!--<div id="option_desc1_editor"> </div>-->
											<textarea style="width:300px;" name="option_desc[]" id="option_desc1" maxlength="150" required></textarea>
											<!--	<input type="hidden" name="option_desc[]" id="option_desc1" value=""> -->
											<label id="option_A_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

										</div>
									</div>

									<div class="col-sm-12" id="optiondiv_2" name="optiondiv_2">
										<div class="form-group d-flex align-items-center pb-0">
											<div class=" form-inline">
												<label>Option &nbsp;</label> <label id="optionno_B_label"> B </label>
												<input type="hidden" name="optionno[]" id="optionno_B" value="B">
												<input type="hidden" name="option_id[]" id="option_id_B" value="">
											</div>
											<div class=" form-inline">
												<label for="inlineinput" class="col-md-6 col-form-label">Percent Weightage :</label>
												<div class="col-md-6 p-1">
													<input type="text" pattern="[0-9]{1,5}" required class="form-control" name="weightagepercent[]" id="weightagepercent_2" placeholder="Enter Marks">
													<label id="mark2_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

												</div>
											</div>
										</div>

										<div class="form-group ">
											<!--<div id="option_desc2_editor"> </div>-->
											<textarea style="width:300px;" name="option_desc[]" id="option_desc2" maxlength="150" required></textarea>
											<!--<input type="hidden" name="option_desc[]" id="option_desc2" value="">-->
											<label id="option_B_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

										</div>

									</div>

									<div class="col-sm-12" id="optiondiv_3" name="optiondiv_3" style="display: none;">
										<div class="form-group d-flex align-items-center pb-0">
											<div class=" form-inline">
												<label>Option &nbsp;</label> <label id="optionno_C_label"> C </label>
												<input type="hidden" name="optionno[]" id="optionno_C" value="C">
												<input type="hidden" name="option_id[]" id="option_id_C" value="">
											</div>
											<div class="form-inline">
												<label for="inlineinput" class="col-md-6 col-form-label">Percent Weightage :</label>
												<div class="col-md-6 p-1">
													<input type="text" pattern="[0-9]{1,5}" required class="form-control" id="weightagepercent_3" name="weightagepercent[]" placeholder="Enter Marks">
													<label id="mark3_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

												</div>
											</div>
										</div>
										<div class="form-group ">
											<!--	<div id="option_desc3_editor"> </div>-->
											<!--	<input type="hidden" name="option_desc[]" id="option_desc3" value=""> -->
											<textarea style="width:300px;" name="option_desc[]" id="option_desc3" maxlength="150"></textarea>
											<label id="option_C_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

										</div>
									</div>
									<div class="col-sm-12" id="optiondiv_4" name="optiondiv_4" style="display: none;">
										<div class="form-group d-flex align-items-center pb-0">
											<div class=" form-inline">
												<label>Option &nbsp;</label> <label id="optionno_D_label"> D </label>
												<input type="hidden" name="optionno[]" id="optionno_D" value="D">
												<input type="hidden" name="option_id[]" id="option_id_D" value="">
											</div>
											<div class=" form-inline">
												<label for="inlineinput" class="col-md-6 col-form-label">Percent Weightage :</label>
												<div class="col-md-6 p-1">
													<input type="text" pattern="[0-9]{1,5}" required class="form-control" id="weightagepercent_4" name="weightagepercent[]" placeholder="Enter Marks">
													<label id="mark4_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

												</div>
											</div>
										</div>
										<div class="form-group ">
											<!--<div id="option_desc4_editor"> </div>
																<input type="hidden" name="option_desc[]" id="option_desc4" value=""> -->
											<textarea style="width:300px;" name="option_desc[]" id="option_desc4" maxlength="150"></textarea>
											<label id="option_D_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

										</div>
									</div>

									<div class="col-sm-12" id="optiondiv_5" name="optiondiv_5" style="display: none;">
										<div class="form-group d-flex align-items-center pb-0">
											<div class=" form-inline">
												<label>Option &nbsp;</label> <label id="optionno_E_label"> E </label>
												<input type="hidden" name="optionno[]" id="optionno_E" value="E">
												<input type="hidden" name="option_id[]" id="option_id_E" value="">
											</div>
											<div class=" form-inline">
												<label for="inlineinput" class="col-md-6 col-form-label">Percent Weightage :</label>
												<div class="col-md-6 p-1">
													<input type="text" pattern="[0-9]{1,5}" required class="form-control" id="weightagepercent_5" name="weightagepercent[]" placeholder="Enter Marks">
													<label id="mark5_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

												</div>
											</div>
										</div>
										<div class="form-group ">
											<!--<div id="option_desc5_editor"> </div>
																<input type="hidden" name="option_desc[]" id="option_desc5" value=""> -->
											<textarea style="width:300px;" name="option_desc[]" id="option_desc5" maxlength="150"></textarea>
											<label id="option_E_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

										</div>
									</div>


									<div class="col-sm-12" id="optiondiv_6" name="optiondiv_6" style="display: none;">
										<div class="form-group d-flex align-items-center pb-0">
											<div class=" form-inline">
												<label>Option &nbsp;</label> <label id="optionno_F_label"> F </label>
												<input type="hidden" name="optionno[]" id="optionno_F" value="F">
												<input type="hidden" name="option_id[]" id="option_id_F" value="">
											</div>
											<div class=" form-inline">
												<label for="inlineinput" class="col-md-6 col-form-label">Percent Weightage :</label>
												<div class="col-md-6 p-1">
													<input type="text" pattern="[0-9]{1,5}" required class="form-control" id="weightagepercent_6" name="weightagepercent[]" placeholder="Enter Marks">
													<label id="mark6_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

												</div>
											</div>
										</div>
										<div class="form-group ">
											<!--	<div id="option_desc6_editor"> </div>
																<input type="hidden" name="option_desc[]" id="option_desc6" value=""> -->
											<textarea style="width:300px;" name="option_desc[]" id="option_desc6" maxlength="150"></textarea>
											<label id="option_F_err" style="display:none;font-size:0.8em !important;color:red !important"></label>

										</div>
									</div>

								</div>
								<!--<button  type="submit" onclick="updateDescEditorData();" id="addbtn" name="addbtn" class="btn btn-primary">Add</button>-->
								<button type="submit" id="addbtn" name="addbtn" onclick="return validateData();" class="btn btn-primary">Add</button>

						</div>
						</form>
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

<script src="<?php echo base_url(); ?>assets/admin/js/editors/ckeditor/ckeditor-super-build.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/editors/ckeditor/ckeditor.js"></script>

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>-->
<script type="text/javascript">
	$().ready(function() {
		// $.validator.addMethod("EMAIL", function(value, element) {
		// 	return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
		// }, "Email Address is invalid: Please enter a valid email address.");

		// $.validator.addMethod("PASSWORD", function(value, element) {
		// 	return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/i.test(value);
		// }, "Passwords are 8-16 characters with uppercase letters, lowercase letters and at least one number.");

		// $.validator.addMethod("SUBMIT", function(value, element) {
		// 	return this.optional(element) || /[^ ]/i.test(value);
		// }, "You did not click the submit button.");

		// // Validate signup form on keyup and submit
		// $("#LOGIN").validate({
		// 	rules: {
		// 		EMAIL: "required EMAIL",
		// 		PASSWORD: "required PASSWORD",
		// 		SUBMIT: "required SUBMIT",
		// 	},
		// });
	});
	var _category_list = <?php echo json_encode($category_list); ?>;
	var _questionsset = <?php echo json_encode($questionsset); ?>;
	var _quiz_list = '';
	var _opt_nos = ['A', 'B', 'C', 'D', 'E', 'F'];
	// alert(_quiz_list);
	var base_url = '<?php echo base_url() ?>';
	var _descriptionEditor_question;
	var _descriptionEditor_question_exp;
	var _descriptionEditor_option_desc1;
	var _descriptionEditor_option_desc2;
	var _descriptionEditor_option_desc3;
	var _descriptionEditor_option_desc4;
	var _descriptionEditor_option_desc5;
	var _descriptionEditor_option_desc6;
	$(document).ready(function() {
		populateCategoryList();
		populateNumberOfOption();
		editQuestionDetails();
		//		 	question_Editor();
		//	 	showOptionDiv();
	});

	function populateCategoryList(selectedcategory, selectedcourse) {
		var options1 = '<option value="">Select Category </option>';
		if (_category_list && _category_list != null && _category_list.length > 0) {
			for (var i = 0; i < _category_list.length; ++i) {
				options1 += '<option value="' + _category_list[i].catid + '">' + _category_list[i].categoryname + '</option>';
			}
		}
		$('#catid').html(options1);
		if (selectedcategory && selectedcategory != null) {
			$('#catid').val(selectedcategory);
		}
		getcourselist(selectedcourse);
	}

	function getcourselist(selectedcourse) {
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
							options1 += '<option value="' + coursebycategory_list[i].quizid + '">' + coursebycategory_list[i].coursetitle + '</option>';
						}

					}
				}
				$('#courseid').html(options1);
				if (selectedcourse && selectedcourse != null) {
					$('#courseid').val(selectedcourse);
				}
			}
		});
	}


	function showOptionDiv() {
		var num_of_options = $('#num_of_options').val();
		if (num_of_options == 2) {
			$('#optiondiv_1').show();
			$('#optiondiv_2').show();
			$('#optiondiv_3').hide();
			$('#optiondiv_4').hide();
			$('#optiondiv_5').hide();
			$('#optiondiv_6').hide();
		} else if (num_of_options == 3) {
			$('#optiondiv_1').show();
			$('#optiondiv_2').show();
			$('#optiondiv_3').show();
			$('#optiondiv_4').hide();
			$('#optiondiv_5').hide();
			$('#optiondiv_6').hide();
		} else if (num_of_options == 4) {
			$('#optiondiv_1').show();
			$('#optiondiv_2').show();
			$('#optiondiv_3').show();
			$('#optiondiv_4').show();
			$('#optiondiv_5').hide();
			$('#optiondiv_6').hide();
		} else if (num_of_options == 5) {
			$('#optiondiv_1').show();
			$('#optiondiv_2').show();
			$('#optiondiv_3').show();
			$('#optiondiv_4').show();
			$('#optiondiv_5').show();
			$('#optiondiv_6').hide();
		} else if (num_of_options == 6) {
			$('#optiondiv_1').show();
			$('#optiondiv_2').show();
			$('#optiondiv_3').show();
			$('#optiondiv_4').show();
			$('#optiondiv_5').show();
			$('#optiondiv_6').show();
		}
	}


	function validateData() {
		// $('#question_err').text('Quetion should not contain special char');
		var num_of_options = $('#num_of_options').val();
		var questionValue = $("#question_desc").val();
		
		var option_A_value = $("#option_desc1").val();
		var option_B_value = $("#option_desc2").val();
		var option_C_value = $("#option_desc3").val();
		var option_D_value = $("#option_desc4").val();
		var option_E_value = $("#option_desc5").val();
		var option_F_value = $("#option_desc6").val();

		var mark1_value = $("#weightagepercent_1").val();
		var mark2_value = $("#weightagepercent_2").val();
		var mark3_value = $("#weightagepercent_3").val();
		var mark4_value = $("#weightagepercent_4").val();
		var mark5_value = $("#weightagepercent_5").val();
		var mark6_value = $("#weightagepercent_6").val();


		var regx = /^[a-zA-Z0-9?$@#()'!,+\-=_:.&€£*%\s]+$/;
		var regx1 = /^[0-9]+$/;
		var validationerr = false;
		if (num_of_options >=1 && !regx.test(option_A_value)) {
			$('#option_A_err').css('display', 'block');
			$('#option_A_err').text('  Option should not contains special characters');
			$('#option_A_err').show();
			validationerr = true;
		} else {
			$('#option_A_err').hide();
		}
		if (num_of_options >=2 && !regx.test(option_B_value)) {
			$('#option_B_err').css('display', 'block');
			$('#option_B_err').text('  Option should not contains special characters');
			$('#option_B_err').show();
			validationerr = true;
		} else {
			$('#option_B_err').hide();
		}
		if (num_of_options >=3 && !regx.test(option_C_value)) {
			$('#option_C_err').css('display', 'block');
			$('#option_C_err').text('  Option should not contains special characters');
			$('#option_C_err').show();
			validationerr = true;
		} else {
			$('#option_C_err').hide();
		}
		if (num_of_options >=4 && !regx.test(option_D_value)) {
			$('#option_D_err').css('display', 'block');
			$('#option_D_err').text('  Option should not contains special characters');
			$('#option_D_err').show();
			validationerr = true;
		} else {
			$('#option_D_err').hide();
		}
		if (num_of_options >=5 && !regx.test(option_E_value)) {
			$('#option_E_err').css('display', 'block');
			$('#option_E_err').text(' Option should not contains special characters');
			$('#option_E_err').show();
			validationerr = true;
		} else {
			$('#option_E_err').hide();
		}
		if (num_of_options >=6 && !regx.test(option_F_value)) {
			$('#option_F_err').css('display', 'block');
			$('#option_F_err').text(' Option should not contains special characters');
			$('#option_F_err').show();
			validationerr = true;
		} else {
			$('#option_F_err').hide();
		}
		
		if (!regx.test(questionValue)) {
			$('#question_err').css('display', 'block');
			$('#question_err').text(' Question should not contains special characters');
			$('#question_err').show();
			validationerr = true;
		} else {
			$('#questionValue').hide();
		}
		
		if (!validationerr) {
			
			alert("correct");
			var option_cnt = $('#num_of_options').val();
			var Totalweightageper = 0;
			for (var i = 0; i < option_cnt; i++) {
				Totalweightageper += parseInt($('#weightagepercent_' + (i + 1)).val());
			}

			if (Totalweightageper == 1) {
				return true;
			} else {
				alert("Total Weightage Percent should be 1");
				return false;
			}
		}
		return false;
	}

	function populateNumberOfOption(selectedoptioncount) {
		var options1 = '<option> Select Number of Options </option>';
		options1 += '<option value="2">2</option>';
		options1 += '<option value="3">3</option>';
		options1 += '<option value="4">4</option>';
		options1 += '<option value="5">5</option>';
		options1 += '<option value="6">6</option>';

		$('#num_of_options').html(options1);
		if (selectedoptioncount && selectedoptioncount != null) {
			$('#num_of_options').val(selectedoptioncount);
		}
	}


	function editQuestionDetails() {
		var parts = window.location.search.substr(1).split("&");
		var $_GET = {};
		for (var i = 0; i < parts.length; i++) {
			var temp = parts[i].split("=");
			$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
		}
		var id = ($_GET['id']); // 1
		if (id != null) {
			$('#addtext').text('Edit Question Details');
			$('#addbtn').text('Update');
			$('#catid').attr("disabled", true);
			$('#courseid').attr("disabled", true);
		}
		$('#num_of_marks').val(_questionsset.markweightage);
		$('#question_explanation').val(_questionsset.correctansdesc);
		$('#questionid').val(_questionsset.questionid);
		$('#question_desc').val(_questionsset.question);

		// var categoryset = _questionsset['categoryset'];
		// var selectedcategory = categoryset[0]['catid'];
		// var selectedcourse = categoryset[0]['quizid'];
		// populateCategoryList(selectedcategory, selectedcourse);
		//  				 if(categoryset == null || categoryset.length == 0){
		//	 populateCategoryList();
		// }
		var optionset = _questionsset['optionset'];
		var valid_opt_cnt = optionset.length;

		for (var oindx = 0; oindx < 6; oindx++) {
			if (oindx < valid_opt_cnt) {
				$('#optiondiv_' + (oindx + 1)).show();
				if (optionset[oindx].weightagepercent) {
					$('#weightagepercent_' + (oindx + 1)).val(optionset[oindx].weightagepercent);
				} else {
					$('#weightagepercent_' + (oindx + 1)).val('');
				}
				$('#optionno_' + _opt_nos[oindx] + '_label').text(_opt_nos[oindx]);
				$('#optionno_' + _opt_nos[oindx]).val(_opt_nos[oindx]);
			} else {
				$('#optiondiv_' + (oindx + 1)).hide();
			}
		}
		var selectedoptioncount = valid_opt_cnt;
		populateNumberOfOption(selectedoptioncount);
		if (optionset == null || optionset.length == 0) {
			populateNumberOfOption();
		}
		$('#quizid').val(_questionsset.quizid);
		if(optionset != null && optionset != '' && optionset.length > 0){
			for(var i=0; i<optionset.length; i++){
				$('#option_desc'+(i+1)).val(optionset[i].optiontext);
			}
		}
	}
</script>
</body>

</html>