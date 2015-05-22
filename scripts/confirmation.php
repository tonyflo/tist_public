<?php
/*
 * @brief Page to confirm that a user has a vailded email
 */
include "../tist_web_private/credentials.php";
include "../tist_web_private/account.php";

$user_id=$_GET["user_id"];
$activation_code=$_GET["activation_code"];

$retval = confirm_email($user_id, $activation_code, $db);
if($user_id == $retval)
{
   //user has successfully confirmed his edu email address
   echo '<h3>You are confirmed</h3>';
} else {
   //either something went wrong on the backend or someone's messing with us
   echo '<h3>Something went wrong: '.$status[$retval].'</h3>';
}

$db->close();
?>

