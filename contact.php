<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Title of the document </title>
    <link rel "stylesheet" type= "text/css" href="style.css">
</head>
<body>
<ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php

$_SESSION["username"] = " dani948a";
echo $_SESSION["username"];

if (!isset($_SESSION['username'])) {
    echo "you're not logged in";
} else {
    echo "you are logged in!";
}