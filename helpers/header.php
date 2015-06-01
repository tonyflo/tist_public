<?php
/*
 * @brief This file should be included on the first line of every PHP file on
 * the website.  This file displays a commom header across pages.
 */
session_start();
$DEBUG=false;
if($DEBUG) {
	echo "<p>DEBUG: ".session_id()."</p>";
	echo "<p>DEBUG: ".$_SESSION["user_id"].",".$_SESSION["first_name"].",".$_SESSION["last_name"].",".$_SESSION["email"]."</p>";
}

// set some variables
$PUBLIC_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_public/";
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";

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
		<?php require_once $PUBLIC_ROOT."helpers/sign_in_or_out.php"; ?>
	</ul>
</nav>
<?php require_once $PUBLIC_ROOT."helpers/welcome.php"; ?>
</header>
