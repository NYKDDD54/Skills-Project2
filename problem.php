<?php
include 'header.php';


$title = $_POST["title"];        
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$role = $_POST['role'];
$_SESSION["loggedin"] = true;
$_SESSION['title'] = $title;
$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;
$_SESSION['role'] = $role;

if ($_SESSION['role'] == 'admin') {
    echo "<h2 id='header'> Hello Admin</h2>";
    echo "<hr class='line'>";
    echo "<h4>Here are your options:";
    echo "<br><a href='isnt-working.php'>My computer isnt working</a>";
    echo "<br><a href='new-account.php'>Create New Account</a></h4>";
}

if ($_SESSION['role'] == 'manager') {
    echo "<h2 id='header'> Hello Manager</h2>";
    echo "<hr class='line'>";
    echo "<h4>Here are your options:";
    echo "<br><a href='isnt-working.php'>My computer isnt working</a>";
    echo "<br><a href='lost-password.php'>Forget Password?</a></h4>";
}

if ($_SESSION['role'] == 'ceo') {
    $_SESSION['emailType'] = "Needs help";
    echo "<h2 id='header'> Hello CEO</h2>";
    echo "<hr class='line'>";
    echo "<h4>Here are your options:";
    echo "<br><a href='isnt-working.php'>My computer isnt working</a>";
    echo "<br><a href='need-help.php'>Need Help</a></h4>";
}

include 'footer.php';
?>

