// Action when an institution is selected
function institution_selected(id) {
	// Get name and id of institution
	var institution_name = $("#"+id+" option:selected").text();
	var institution_id = $("#"+id+" option:selected").val();

	// Base on the selected institution, query the db for all labs for that institution an populate the drop down
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

// Executed when page loads
$(document).ready(function(){
	// Hide all elements intitally
	$("#div_new_project").hide();
	$("#div_existing_project").hide();
	$("#div_new_join_or_existing_lab").hide();

	// Action when buttons are clicked
	$("#btn_project_new").click(function(){
		$("#div_new_project").show();
		$("#div_existing_project").hide();
		$("#btn_project_new").hide();
		$("#btn_project_existing").hide();
		$("#div_new_join_or_existing_lab").hide();
	});
	$("#btn_project_existing").click(function(){
		$("#div_new_project").hide();
		$("#div_existing_project").show();
		$("#btn_project_new").hide();
		$("#btn_project_existing").hide();
		$("#div_new_join_or_existing_lab").hide();
	});
	$("#btn_lab_new").click(function(){
		var inst_id = $('#list_of_user_institutions').val();
		location.href='new_lab.php?institution_id=' + inst_id;
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

});
