<?php
session_start();

// Unset all session variables
unset($_SESSION);

// Destroy the session
session_destroy();

// Redirect to another page or perform any other actions
// For example, redirecting to the login page:
header("Location: ../Join");
exit();
?>
