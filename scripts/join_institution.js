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
		$("#status").text(data);
	});
}
