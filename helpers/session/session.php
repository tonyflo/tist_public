<?php
/*
 * @brief This file manages a user's session on the website
 */

$_SESSION["user_id"] = 0;
$_SESSION["first_name"] = 0;
$_SESSION["last_name"] = 0;
$_SESSION["email"] = 0;

function session_init($user_id, $first_name, $last_name, $email)
{
	$_SESSION["user_id"] = $user_id;
	$_SESSION["first_name"] = $first_name;
	$_SESSION["last_name"] = $last_name;
	$_SESSION["email"] = $email;
}

?>
