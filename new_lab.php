<?php
include "helpers/header.php";
?>
<html>
<head>
	<title>New Lab</title>
	<script type="text/javascript" src="scripts/sign_in.js"></script>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/selectors.css">
	<link rel="stylesheet" href="css/responsive.css">
	<meta name="description" content="Allows user to create a new lab">
</head>
<body>
<form action="">
	<h3>New Lab</h3>
	Name: <input type="text" id="lab_name" value="">
	<br>
	Date founded: <input type="date" id="date_founded">
	<br>
	Mission statement: <textarea rows="4" cols="80" id="mission_statement"></textarea>
	<br>
	Link to website: <input type="text" id="lab_link" value="">
	<br>
</form>
<button onclick="new_lab()" id="new_lab">Create Lab</button>
<p id="status"></p>
</body>
</html>

