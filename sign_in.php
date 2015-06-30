<?php
include "helpers/header.php";
?>
<html>
<head>
	<title>Sign In</title>
	<script type="text/javascript" src="scripts/sign_in.js"></script>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/selectors.css">
	<link rel="stylesheet" href="css/responsive.css">
	<meta name="description" content="Allows user to sign in.">
</head>
<body>
<form action="">
	<h3>Sign In</h3>
	Email: <input type="email" id="email" name="email" value="">
	<br>
	Password: <input type="password" id="password" name="password" value="">
	<br>
</form>
<button onclick="sign_in()" id="sign_in">Sign In</button>
<p id="status"></p>
</body>
</html>

