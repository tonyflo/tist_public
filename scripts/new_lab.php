<?php
/*
 * @brief Allows a user to create a new lab
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/lab.php";

$lab_name=$_POST["lab_name"];
$date_founded=$_POST["date_founded"];
$mission_statement=$_POST["mission_statement"];
$lab_link=$_POST["lab_link"];
$institution_id=$_POST["institution_id"];
$user_id=$_POST["user_id"];

echo new_lab($lab_name, $date_founded, $mission_statement, $lab_link, $institution_id, $user_id, $db);

$db->close();
?>

