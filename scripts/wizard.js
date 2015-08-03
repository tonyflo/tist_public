// Action when an institution is selected
function institution_selected(id) {
	// Get name and id of institution
	var institution_name = $("#"+id+" option:selected").text();
	var institution_id = $("#"+id+" option:selected").val();

	// Based on the selected institution, query the db for all labs for that institution and populate the drop down
	$.getJSON('helpers/lists/get_list_of_labs.php', {institution_id: institution_id}, function (data) {
		var select = $('#list_of_labs');
		var options = select.prop('options');
		$('option', select).remove();
		$.each(data, function (index, array) {
			//Option(text, value)
			var inst = new Option(array[1], array[0]);
			options[options.length] = inst;
		});
	});

	// Set the header text to the institution name and show the lab div
	$("#selected_institution_name").text(institution_name);
	$("#div_new_join_or_existing_lab").show();
}

// Action when a lab is selected
function lab_selected(id) {
	// Get name and id of lab
	var lab_name = $("#"+id+" option:selected").text();
	var lab_id = $("#"+id+" option:selected").val();

	// Based on the selected lab, query the db for all projects for that lab and populate the drop down
	$.getJSON('helpers/lists/get_list_of_projects.php', {lab_id: lab_id}, function (data) {
		var select = $('#list_of_projects');
		var options = select.prop('options');
		$('option', select).remove();
		$.each(data, function (index, array) {
			//Option(text, value)
			var inst = new Option(array[1], array[0]);
			options[options.length] = inst;
		});
	});

	// Set the header text to the lab name and show the project div
	$("#selected_lab_name").text(lab_name);
	$("#selected_lab_id").text(lab_id);
	$("#div_new_join_or_existing_project").show();
}


// Executed when page loads
$(document).ready(function(){
	// Hide all elements intitally
	$("#div_new_project").show();
	$("#div_new_join_or_existing_lab").hide();
	$("#div_new_join_or_existing_project").hide();
	$("#btn_join_project").hide();
	$("#selected_lab_id").hide();

	// Action when buttons are clicked
	$("#btn_lab_new").click(function(){
		var inst_id = $('#list_of_user_institutions').val();
		location.href='new_lab.php?institution_id=' + inst_id;
	});
	$("#btn_project_new").click(function(){
		var inst_id = $('#list_of_user_institutions').val();
		var lab_id = $('#list_of_labs').val(); // Existing lab
		if(lab_id < 0) {
			lab_id = $('#list_of_user_labs').val(); // User's lab
			if(lab_id < 0) {
				alert("Please select a lab before continuing");
				return;
			}
		}
		location.href='new_project.php?institution_id=' + inst_id + '&lab_id=' + lab_id;
	});
	$("#btn_join_project").click(function(){
		var project_id = $('#list_of_projects').val();
		var project_name = $('#list_of_projects option:selected').text();
		var lab_name = $("#selected_lab_name").text();
		var lab_id = $("#selected_lab_id").text();
		var institution_name = $("#selected_institution_name").text();
		location.href='join_project.php?project_id=' + project_id
			+ '&project_name=' + project_name
			+ '&lab_name=' + lab_name
			+ '&lab_id=' + lab_id
			+ '&institution_name=' + institution_name;
	});


	// Action when an institution is selected
	$('#list_of_user_institutions').change(function() {
		$("#join_institution").hide();

		// If a valid value is selected
		if ($(this).val() != -1) {
			institution_selected(this.id);
		} else {
			$("#div_new_join_or_existing_lab").hide();
			$("#join_institution").show();
		}
	});

	// Action when a lab is selected
	$('#list_of_labs').change(function() {

		// If a valid value is selected
		if ($(this).val() != -1) {
			$("#list_of_user_labs").val(-1);
			lab_selected(this.id);
		} else {
			$("#div_new_join_or_existing_project").hide();
		}
	});

	// Action when a user's lab is selected
	$('#list_of_user_labs').change(function() {

		// If a valid value is selected
		if ($(this).val() != -1) {
			$("#list_of_labs").val(-1);
			lab_selected(this.id);
		} else {
			$("#div_new_join_or_existing_project").hide();
		}
	});

	// Action when a project is selected
	$('#list_of_projects').change(function() {

		// If a valid value is selected
		if ($(this).val() != -1) {
			$("#btn_join_project").show();
		} else {
			$("#btn_join_project").hide();
		}
	});


});
