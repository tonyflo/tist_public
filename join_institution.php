<?php
include "helpers/header.php";
?>
<html>
<head>
    <title>Join Institution</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="scripts/select_institution.js"></script>
    <script src="scripts/join_institution.js"></script>
    <meta name="description" content="Allows user to join institution">
</head>
<body>
<form class="signup-form" action="">
	<h1>Join Institution</h1>
	<fieldset>
	<legend><span class="number">1</span> Select an Institution</legend>
		<!-- First select box for states -->
		<select id="state_abbrev" size="10" onChange="populate_institution()" style="width: 150px">
			<?php include $PUBLIC_ROOT."helpers/lists/get_list_of_states.php"; ?>
		</select>
		<!-- Second select box for institutions -->
		<select id="list_of_institutions" size="10" style="width: 350px"></select>
	</fieldset>
	<fieldset>
	<legend><span class="number">2</span> Provide your email</legend>
		<p>You must use your institution provided email.</p>
		<p> Example: yourname@institution.edu</p>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="">
	</fieldset>
	<legend><span class="number">3</span> You're so close!</legend><br>
</form>

<?php

if($_SESSION["user_id"] > 0) {
	// allow signed in user to join an institution
	echo '<button onclick="join_institution(\''.$_SESSION["first_name"].'\', '.$_SESSION["user_id"].')" id="join_institution">Join Institution</button>';
} else {
	// require a guest sign in first
	echo '
	<h2>Sorry, but you must sign in first</h2>
	<form action="sign_in.php">
	    <input type="submit" value="Sign In">
	</form>
	';
}

?>

<p id="status"></p>

</div>
</body>
</html>

