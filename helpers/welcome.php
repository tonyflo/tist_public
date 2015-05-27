<?php
/*
 * @brief This file prints out a welcome message to a user that is signed in
 * on the header
 */
if($_SESSION["user_id"] > 0) {
	if(isset($_SESSION["first_name"])) {
		echo "<h3 style='color:black'>Welcome, ".$_SESSION["first_name"]."!</h3>";
	}
}
?>
