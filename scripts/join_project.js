// Action when a discipline is selected
function discipline_selected(discipline_id) {
	// Based on the selected discipline, query the db for the next level of sub-disciplines
	$.getJSON('helpers/lists/get_list_of_disciplines.php', {discipline_id: discipline_id}, function (data) {
		// if we get back more than the default "Select a discipline", re-populate
		if(data.length > 1) {
			var select = $('#list_of_disciplines');
			var options = select.prop('options');
			$('option', select).remove();
			$.each(data, function (index, array) {
				//Option(text, value)
				var discipline = new Option(array[1], array[0]);
				options[options.length] = discipline;
			});
		} else {
			$("#selected_discipline_status").show();
		}
	});
}

function start_over()
{
	$("#selected_discipline_status").hide();
	var academia_id = 1;
	discipline_selected(academia_id);
	$("#selected_discipline_drilldown").text("Academia");
}

// Executed when page loads
$(document).ready(function(){
	start_over();
	// Action when a discipline is selected
	$('#list_of_disciplines').change(function() {

		// If a valid value is selected
		var dis_id = $(this).val();
		var dis_name = $('#list_of_disciplines option:selected').text();
		if (dis_id != -1) {
			discipline_selected(dis_id);
			$("#selected_discipline_drilldown").append(" > " + dis_name);
			$("#selected_discipline_id").val(dis_id);
		}
	});
});
