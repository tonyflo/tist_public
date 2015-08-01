<?php
include "helpers/header.php";
?>
<html>
<head>
	<title>Join Project</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="scripts/join_project.js"></script>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/selectors.css">
	<link rel="stylesheet" href="css/responsive.css">
	<meta name="description" content="Allows user to join a project.">
</head>
<body>
<form action="">
	<h3>Join Project</h3>
	<h4>Joining <?php echo $_GET['project_name']." at ".$_GET['institution_name']."'s ".$_GET['lab_name']; ?></h4>
	Job title: <input type="text" id="job_title" name="job_title" value="">
	<br>
	<br>
	<h5>Select a discipline that your contributions for this project fall under. Feel free to pick a discipline at any level of the hierarchy that most accurately describes your contributions.
	<select id="list_of_disciplines"></select>
	<h5 id="selected_discipline_drilldown">Academia<h5>
	<h5 id="selected_discipline_status">Thanks!<h5>
	<button type="button" onclick="start_over()">Start Over</button>
	<input type="hidden" id="selected_discipline_id"></input>
	<br>
	<br>
	Contribution description: <textarea rows="4" cols="80" id="contribution_description"></textarea>
	<br>
	When were first involved with the project? <input type="date" id="date_start">
	<br>
	When did your involvement end (if at all)? <input type="date" id="date_end">
	<br>
</form>
<button onclick="join_project()" id="join_project">Sign In</button>
<p id="status"></p>
</body>
</html>

