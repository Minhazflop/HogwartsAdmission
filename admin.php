<?php
// Start the session
session_start();


// Check if the session 'passenger' is set
    if (!isset($_SESSION['username']))
    {
        header("location:login.php");
     }
     elseif($_SESSION['usertype']=='student') {
        header("location:login.php");


     }
 



    // Include the database connection file
    require_once('Connection.php');
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Welcome Admin! </h1>
    <a href="logout.php">Logout</a>
    
</body>
</html>