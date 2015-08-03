<?php
include "helpers/header.php";
?>
<html>
<head>
	<title>Join Project</title>
	<script type="text/javascript" src="scripts/join_project.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="scripts/project.js"></script>
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
	<?php include 'helpers/join_project_form.php' ?>
	<input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
	<input type="hidden" id="project_id" value="<?php echo $_GET['project_id']; ?>">
	<input type="hidden" id="lab_id" value="<?php echo $_GET['lab_id']; ?>">
</form>
<button type="button" onclick="join_the_project()" id="join_project">Join Project</button>
<p id="status"></p>
</body>
</html>

