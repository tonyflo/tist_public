<?php
/*
 * @brief Allows a user to sign in to their account
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/account.php";

$email=$_POST["email"];
$password=$_POST["password"];

echo json_encode(sign_in($email, $password, $db));

$db->close();
?>

