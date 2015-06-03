// Action when join institution button is pressed
function join_institution(first_name, user_id) {
	// Get name and id of institution
	var institution_id = $("#list_of_institutions option:selected").val();
	var email = $("#email").val();

	// Try to join this user to this institution with this email
	$.getJSON('scripts/join_institution.php',
	{
		inst_id: institution_id,
		first_name: first_name,
		email: email,
		user_id: user_id
	},
	function (data) {
		// Set the status text
		var message;
		if(data > 0) {
			message = "We've sent you an email with a link to complete the process of joining this institution. " + data;
		} else if(data == -2) {
			message = "Email not available";
		} else if(data == -4) {
			message = "Missing information";
		} else if(data == -7) {
			message = "Activation code generation failed";
		} else if(data == -10) {
			message = "Not a valid institutional email";
		} else if(data == -11) {
			message = "Email does not match selected institution";
		} else {
			message = "Unknown error";
		}

		$("#status").text(message);
	});
}
