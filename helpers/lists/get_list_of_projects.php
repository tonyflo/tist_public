<?php
/*
 * @brief Get a list of projects given a lab id from the database
 */
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";
include $PRIVATE_ROOT."credentials.php";
include $PRIVATE_ROOT."project.php";

$lab_id=$_GET["lab_id"];
get_list_of_projects($lab_id, $db);

$db->close();
?>

