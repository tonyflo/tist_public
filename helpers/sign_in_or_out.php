<?php
/*
 * @brief This file writes out a single list item on the header based on if a
 * user is signed in or not.
 */
if($_SESSION["user_id"] > 0) {
	echo '<li><a href="scripts/sign_out.php">Sign Out</a></li>';
} else {
	echo '<li><a href="sign_in.php">Sign In</a></li>';
	echo '<li><a href="sign_up.php">Sign Up</a></li>';
}

?>
