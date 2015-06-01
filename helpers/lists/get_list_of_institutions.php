<?php
/*
 * @brief Get a list of states from the database
 */
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";
include $PRIVATE_ROOT."credentials.php";
include $PRIVATE_ROOT."institution.php";

$state_abbrev=$_GET["state_abbrev"];
get_list_of_institutions($state_abbrev, $db);

$db->close();
?>

