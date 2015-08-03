<?php
/*
 * @brief Allows a user to join a project
 */
include "../../tist_web_private/credentials.php";
include "../../tist_web_private/project.php";

$job_title = $_POST["job_title"];
$discipline_id = $_POST["discipline_id"];
$contribution_description = $_POST["contribution_description"];
$date_start = $_POST["date_start"];
$date_end = $_POST["date_end"];
$user_id = $_POST["user_id"];
$project_id = $_POST["project_id"];
$lab_id = $_POST["lab_id"];

echo join_project($job_title, $discipline_id, $contribution_description, $date_start, $date_end, $user_id, $project_id, $lab_id, $db);

$db->close();
?>

