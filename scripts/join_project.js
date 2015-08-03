var reached_leaf = false;

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
			reached_leaf = true;
			$("#selected_discipline_status").show();
		}
	});
}

function modify_drilldown_text(new_text) {
	var drilldown = $("#selected_discipline_drilldown").text();
	var start = drilldown.lastIndexOf(">");
	var replace = drilldown.substr(start);
	var res;
	if(new_text == "") {
		res = drilldown.replace(replace, new_text);
	} else {
		res = drilldown.replace(replace, " > " + new_text);
	}
	$("#selected_discipline_drilldown").text(res);
}

function start_over()
{
	reached_leaf = false;
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
			if(reached_leaf) {
				// user drilled all the way down a branch, then change what
				// leaf they are looking at
				modify_drilldown_text(dis_name);
			} else {
				discipline_selected(dis_id);
				$("#selected_discipline_drilldown").append(" > " + dis_name);
			}
			$("#selected_discipline_id").val(dis_id);
		} else {
			if(reached_leaf) {
				modify_drilldown_text("");
				reached_leaf = false;
				$("#selected_discipline_status").hide();
			}
		}
	});
});
