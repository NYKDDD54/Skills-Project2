<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" media="screen" href="Project1.css">
    <title>Document</title>
</head>
<body>
    <div class="topbar">
        <a href='index.php' class="topic">Halifax Canoe and Kayak</a>
        <img class="paddle-white" src="paddle-white.png">
        <img id="nav_toggle_button" class="hamburger" src="hamburger.png">
        <nav class="nav_bar">
            <ul class="nav_menu">
                <li>Home</li>
                <li>Book a trip</li>
                <li>Admin login</li>
            </ul>
        </nav>
    <a id='logout' href='logout.php'>Logout</a>