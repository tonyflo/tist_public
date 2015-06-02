<?php
/*
 * @brief Get a list of labs given an instituion id from the database
 */
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";
include $PRIVATE_ROOT."credentials.php";
include $PRIVATE_ROOT."lab.php";

$institution_id=$_GET["institution_id"];
get_list_of_labs($institution_id, $db);

$db->close();
?>

