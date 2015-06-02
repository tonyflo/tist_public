<?php
/*
 * @brief Get a list of labs in which the given user is a member of
 */
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";
include $PRIVATE_ROOT."credentials.php";
include $PRIVATE_ROOT."lab.php";

$user_id=$_SESSION["user_id"];

get_list_of_user_labs($user_id, $db);

$db->close();
?>

