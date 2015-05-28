<html>
<head>
    <title>Sign Up</title>
    <script type="text/javascript" src="scripts/sign_up.js"></script>
    <meta name="description" content="Allows guest to sign up for a basic account">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/selectors.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<div id="signup-wrapper">
<form class="signup-form" action="">
	<h1>Sign Up</h1>

	<fieldset>

	<legend><span class="number">1</span> Your basic info</legend>

		<label for="first_name">First Name:</label>
		<input name="First Name" id="first_name" type="text" value="">

		<label for="last_name">Last Name:</label>
		<input name="Last Name" id="last_name" type="text" value="">

		<label for="date">Date of Birth:</label>
		<input type="date" id="date_birth" name="date" value="">

		<label for="gender_id">Select your gender:</label>
			<input type="radio" name="gender_id" id="gender_id" value="0"<label>Male</label><br>
			<input type="radio" name="gender_id" id="gender_id" value="1"<label>Female</label><br>
<!--		    <option value="-1">Select Your gender</option>
				<option value="0">Male</option>
				<option value="1">Female</option>
-->
	</fieldset>
	<fieldset>
	<legend><span class="number">2</span> Create your account</legend>
		<p>If you wish to have your own profile page, you must use your institution provided email.</p>
		<p> Example: yourname@institution.edu</p>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="">
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" value="">
	</fieldset>


	<legend><span class="number">3</span> You're so close!</legend><br>
</form>

<button onclick="sign_up()" id="sign_up">Sign Up</button>

<p id="status"></p>

</div>
</body>
</html>

