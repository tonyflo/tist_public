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
		<table border=1>
		<tr><th>Choose Your Own</th><th>Choose a New One</th></tr>
		<tr>
			<td><select id="list_of_user_institutions"><?php include $PUBLIC_ROOT."helpers/lists/get_list_of_user_institutions.php"; ?></select></td>
			<td>
				<form name="select-institution">
				<!-- First select box for states -->
				<select name="state" id="state_abbrev" size="10" onChange="populate_institution()" style="width: 100px">
					<?php include $PUBLIC_ROOT."helpers/lists/get_list_of_states.php"; ?>
				</select>
				<!-- Second select box for institutions -->
				<select name="institution" id="institution_name" size="10" style="width: 300px"></select>
				</form>
			</td>
		</tr>
		</table>
	</div>
	<div id="div_existing_project">
		<h3>Existing Project</h3>
		<p>NYI</p>
	</div>
	</div>
</body>
</html>

