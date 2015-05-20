<?php
 session_start();
unset($_SESSION["user_name"]);

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location:index.php?logout=success")
?>