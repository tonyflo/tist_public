<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- Select institution form -->
<form name="select-institution">
<!-- First select box for states -->
<select name="state" id="state_abbrev" size="10" onChange="populate_institution()" style="width: 100px">
	<?php include "lists/get_list_of_states.php"; ?>
</select>
<!-- Second select box for institutions -->
<select name="institution" id="institution_name" size="10" style="width: 300px" onClick="location.href='../institution.php?institution_id=' + this.options[this.options.selectedIndex].value">
</select>
</form>

<!-- JQuery code to parse the JSON data -->
<script>
function populate_institution() {
	$.getJSON('lists/get_list_of_institutions.php', {state_abbrev: $('#state_abbrev').val()}, function (data) {

		var select = $('#institution_name');
		var options = select.prop('options');
		$('option', select).remove();

		$.each(data, function (index, array) {
			//Option(text, value)
			var inst = new Option(array[1], array[0]);
			options[options.length] = inst;
		});
	});
}
</script>
