<?php
session_start();
require_once "session/session.php";
// Get user session data
$user_id=$_GET['user_id'];
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$email=$_GET['email'];
session_init($user_id, $first_name, $last_name, $email);
echo "<p>DEBUG:".$user_id.",".$first_name.",".$last_name.",".$email."</p>"
?>
<header>
<a href="index.php" id="logo">
<h1>The Tist</h1>
<h2>Connecting Scientists with the Public</h2>
</a>
<nav>
	<ul>
		<li><a href="index.php" class="selected">Home</a></li>
		<li><a href="browse.php">Browse</a></li>
		<li><a href="account.php">Account</a></li>
	</ul>
</nav>
</header>
