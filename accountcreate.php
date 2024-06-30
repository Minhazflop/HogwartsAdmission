<?php
session_start();

// Include database configuration file
include_once 'connection.php';

// Include User class file
include_once 'userclass.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $password = $_POST['password'];

    // Create a User object
    $user = new User();

    // Check if the username already exists
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        header("location: Homepage.php?UsernameExists=Username already exists");
        exit();
    }

    // Create a new user
    $user= new user();
    $user->createUser($username, $phone, $email, $usertype, $password, $con);
}
?>
