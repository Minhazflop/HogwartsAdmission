<?php

require_once("connection.php");
require_once("userclass.php");
session_start();

$localUsername = $_POST['username']; // Corrected variable name to match the login function parameter
$localPassword = $_POST['password'];
$user = new user();
$user->login($localUsername, $localPassword, $con);

// The following lines are not necessary since the login function handles redirection
// header("Location: Welcome.php?email=" . $localEmail);
// exit();

?>