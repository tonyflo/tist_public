<?php
/*
 * @brief Allows a guest to sign up for an account
 */
include "../tist_web_private/credentials.php";
include "../tist_web_private/institution.php";

$institution_id=$_GET["institution_id"];

$inst=get_institution_data($institution_id, $db);

$db->close();

?>
