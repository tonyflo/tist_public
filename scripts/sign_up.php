<?php
/*
 * @brief Allows a guest to sign up for an account
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/account.php";

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$date_birth=$_POST["date_birth"];
$gender_id=$_POST["gender_id"];
$email=$_POST["email"];
$password=$_POST["password"];

echo sign_up($first_name, $last_name, $date_birth, $gender_id, $email, $password, $db);

$db->close();
?>

