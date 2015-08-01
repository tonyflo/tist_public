<?php
/*
 * @brief Allows a guest to sign up for an account
 */
include "../tist_web_private/credentials.php";
include "../tist_web_private/lab.php";

$lab_id=$_GET["lab_id"];

$lab=get_lab_data($lab_id, $db);

$db->close();

?>