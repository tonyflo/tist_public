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
	<h1 style="color:black">Get Involved</h1>
	<div id="div_new_or_existing">
	<?php
	if($_SESSION["user_id"] > 0) {
		// allow signed in user to use the wizard
		echo '
		<button type="button" id="btn_project_new">Create New Project</button>
		<button type="button" id="btn_project_existing">Join Existing Project</button>
		';
	} else {
		// require a guest sign in first
		echo '
		<h3>Sorry, but you must sign in first</h3>
		<form action="sign_in.php">
		    <input type="submit" value="Sign In">
		</form>
		';
	}
	?>
	</div>
	<div id="div_new_project">
		<h2 style="color:green">New Project</h2>
		<h4>Select an institution</h4>
		<select id="list_of_user_institutions"><?php include $PUBLIC_ROOT."helpers/lists/get_list_of_user_institutions.php"; ?></select>
		<form id="join_institution" action='join_institution.php'>Don't see your institution listed above? Become an official member of your institution now! <input type='submit' value="Join Institution"></form>
	</div>
	<div id="div_existing_project">
		<h2 style="color:green">Existing Project</h2>
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

