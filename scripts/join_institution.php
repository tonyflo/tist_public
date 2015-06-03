<?php
/*
 * @brief Allows a user to join an institution
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/email.php";
include "../../tist_web_private/return_codes.php";

$selected_inst_id=$_GET["inst_id"];
$first_name=$_GET["first_name"];
$email=$_GET["email"];
$user_id=$_GET["user_id"];

echo join_institution($selected_inst_id, $first_name, $email, $user_id, $db);

$db->close();
?>

