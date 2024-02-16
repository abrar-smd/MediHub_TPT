<?php
session_start();

// Clear the session variables
session_unset();
session_destroy();

// Redirect to the login page
header("Location: loginpage1.php");
exit();
?>
