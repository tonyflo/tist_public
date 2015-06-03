<?php
include "helpers/header.php"
?>
<html>
<head>
    <title>Wizard</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="scripts/wizard.js"></script>
    <script src="scripts/select_institution.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/selectors.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<div id="div_new_or_existing">
		<button type="button" id="btn_project_new">Create New Project</button>
		<button type="button" id="btn_project_existing">Join Existing Project</button>
	</div>
	<div id="div_new_project">
		<h3>New Project</h3>
		<h4>Select an institution</h4>
		<table border=1>
		<tr><th>Choose Your Own</th><th>Join Existing Institution</th></tr>
		<tr>
			<td><select id="list_of_user_institutions"><?php include $PUBLIC_ROOT."helpers/lists/get_list_of_user_institutions.php"; ?></select></td>
			<td>
				<form name="select-institution">
				<!-- First select box for states -->
				<select id="state_abbrev" size="10" onChange="populate_institution()" style="width: 150px">
					<?php include $PUBLIC_ROOT."helpers/lists/get_list_of_states.php"; ?>
				</select>
				<!-- Second select box for institutions -->
				<select id="list_of_institutions" size="10" style="width: 350px"></select>
				</form>
			</td>
		</tr>
		</table>
	</div>
	<div id="div_existing_project">
		<h3>Existing Project</h3>
		<p>NYI</p>
	</div>
	<div id="div_new_join_or_existing_lab">
		<h3 id="selected_institution_name"></h3>
		<h4>Select a lab</h4>
		<table border=1>
		<tr><th>Choose Your Own</th><th>Join Existing Lab</th><th>Create a New Lab</th></tr>
		<tr>
			<td><select id="list_of_user_labs"><?php include $PUBLIC_ROOT."helpers/lists/get_list_of_user_labs.php"; ?></select></td>
			<td><select id="list_of_labs"></select></td>
			<td><button type="button" id="btn_lab_new">Create New Lab</button></td>
		</tr>
	</div>
</body>
</html>

