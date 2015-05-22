<?php
/*
 * @brief Get a list of states from the database
 */
include "../../../tist_web_private/credentials.php";
include "../../../tist_web_private/institution.php";

$state_abbrev=$_GET["state_abbrev"];
get_list_of_institutions($state_abbrev, $db);

$db->close();
?>

