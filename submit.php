<?php

session_start();
$_SESSION['name'] = $_POST['fname'];
$_SESSION['lastname'] = $_POST['lname'];
$_SESSION['mail'] = $_POST['uemail'];
$_SESSION['phone'] = $_POST['mobile'];
$_SESSION['password'] = $_POST['pass'];
echo "Welcome,".$_SESSION['name']." ".$_SESSION['lastname'];
echo "<br>Your Password is ".$_SESSION['password'];
echo "<br>Your Phone no is ".$_SESSION['phone'];
echo "<br>Your Email id is ".$_SESSION['mail'];
?>