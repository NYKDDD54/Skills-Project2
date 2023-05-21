<?php
include 'header.php';

session_unset();
session_destroy();

echo "<div id='logout_message'>You are logged out. Click on topic to back to the main page.</div>";

// sleep(3);
// header("Location: index.php");
// exit;

?>

<?php
include 'footer.php'
?>