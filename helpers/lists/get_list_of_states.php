<?php
/*
 * @brief Get a list of states from the database
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/institution.php";

get_list_of_states($db);

$db->close();
?>

