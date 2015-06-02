function populate_institution() {
	$.getJSON('helpers/lists/get_list_of_institutions.php', {state_abbrev: $('#state_abbrev').val()}, function (data) {

		var select = $('#list_of_institutions');
		var options = select.prop('options');
		$('option', select).remove();

		$.each(data, function (index, array) {
			//Option(text, value)
			var inst = new Option(array[1], array[0]);
			options[options.length] = inst;
		});
	});
}
