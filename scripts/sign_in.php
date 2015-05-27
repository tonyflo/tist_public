<?php
/*
 * @brief Allows a user to sign in to their account
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/account.php";
include "../helpers/session/session.php";

$email=$_POST["email"];
$password=$_POST["password"];

$user_data=sign_in($email, $password, $db);

if($user_data[0] > 0) {
	// a valid user_id is returned
	$user_id = $user_data[0];
	$first_name = $user_data[1];
	$last_name = $user_data[2];
	$email = $user_data[3];
	// initialize the session with these values
	session_init($user_id, $first_name, $last_name, $email);
	// return the array
	echo json_encode($user_data);
} else {
	// return just the error code
	echo json_encode(array($user_data[0]));
}

$db->close();
?>

