<html>
<head>
	<title>Sign Up</title>
	<script type="text/javascript" src="scripts/sign_up.js"></script>
	<meta name="description" content="Allows guest to sign up for a basic account">
</head>
<body>
<form action="">
	<h1>Sign Up</h1>
	<br>
	First Name: <input name="First Name" id="first_name" type="text" value="">
	<br>
	Last Name: <input name="Last Name" id="last_name" type="text" value="">
	<br>
	Date of Birth: <input type="date" id="date_birth" name="date" value="">
	<br>
	Gender: <select name="Gender" id="gender_id">
		<option value="-1">Select Your gender</option>
		<option value="0">Male</option>
		<option value="1">Female</option>
	</select>
	<br>
	Email: <input type="email" id="email" name="email" value="">
	<br>
	Password: <input type="password" id="password" name="password" value="">
	<br>
</form>
<button onclick="sign_up()" id="sign_up">Sign Up</button>
<p id="status"></p>
</body>
</html>

