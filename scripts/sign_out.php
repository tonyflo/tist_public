<?php
/*
 * @brief This file signs a user out by destroying his PHP session
 */
session_start();
session_destroy();
header('Location: ../index.php');
?>
