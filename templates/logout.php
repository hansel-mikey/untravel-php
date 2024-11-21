<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the desktop page after logout with a parameter indicating logout
header("Location: desktop.php?logged_out=true");
exit;
?>
