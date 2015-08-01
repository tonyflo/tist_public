<?php
/*
 * @brief Get a list of disciplines given a parent discipline id
 */
$PRIVATE_ROOT=$_SERVER['DOCUMENT_ROOT']."/tist_web_private/";
include $PRIVATE_ROOT."credentials.php";
include $PRIVATE_ROOT."discipline.php";

$discipline_id=$_GET["discipline_id"];
get_list_of_disciplines($discipline_id, $db);
$db->close();

?>

