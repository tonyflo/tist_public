$(document).ready(function(){
	// Hide all elements intitally
	$("#div_new_project").hide();
	$("#div_existing_project").hide();

	$("#btn_project_new").click(function(){
		$("#div_new_project").show();
		$("#div_existing_project").hide();
		$("#btn_project_new").hide();
		$("#btn_project_existing").hide();
	});
	$("#btn_project_existing").click(function(){
		$("#div_new_project").hide();
		$("#div_existing_project").show();
		$("#btn_project_new").hide();
		$("#btn_project_existing").hide();
	});
});
