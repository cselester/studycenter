<?php
session_start(); // Start or resume the session

// Unset or clear the specific session variable
$_SESSION['user_name'] = null;

// Destroy the session
session_destroy();

// Redirect to the login page
header('Location:admin.php');
?>
