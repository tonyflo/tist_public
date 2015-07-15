<?php
/*
 * @brief Allows a user to create a new project
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/project.php";

$project_name=$_POST["project_name"];
$date_start=$_POST["date_start"];
$summary_science=$_POST["summary_science"];
$summary_impact=$_POST["summary_impact"];
$state_id=$_POST["state_id"];
$link_website=$_POST["link_website"];
$institution_id=$_POST["institution_id"];
$user_id=$_POST["user_id"];
$lab_id=$_POST["lab_id"];

echo new_project($project_name, $date_start, $summary_science, $summary_impact, $state_id, $link_website, $institution_id, $user_id, $lab_id, $db);

$db->close();
?>

