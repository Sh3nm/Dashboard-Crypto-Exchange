<?php
// Start session
session_start();

// Destroy session to log out
session_unset();
session_destroy();

echo "You have been logged out.";
?>
