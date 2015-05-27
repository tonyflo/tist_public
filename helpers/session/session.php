<?php
/*
 * @brief This file manages a user's session on the website
 */

function session_init($user_id, $first_name, $last_name, $email)
{
	session_start();
	$_SESSION["user_id"] = $user_id;
	$_SESSION["first_name"] = $first_name;
	$_SESSION["last_name"] = $last_name;
	$_SESSION["email"] = $email;
}

?>
