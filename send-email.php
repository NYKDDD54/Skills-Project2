<?php
include 'header.php';

$emailType = $_POST['emailType'];
$_SESSION['emailType'] = $emailType;

if ($_SESSION['emailType'] == 'newAccount') {
    echo "<h3> New Account</h3>";
}

if ($_SESSION['emailType'] == 'lostPassword') {
    echo "<h3> Lost Password</h3>";
}

?>




<?php
include 'footer.php'
?>