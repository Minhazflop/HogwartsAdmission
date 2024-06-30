<?php

class User {
    public $username, $phone, $email, $usertype;
    private $password;

    // Function to authenticate user login
    function login($username, $password, $con) {
        // Sanitize input to prevent SQL injection
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        // Query to authenticate user
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query);

        // Check if query was successful
        if (!$result) {
            die("Query failed: " . mysqli_error($con));
        }

        $row = mysqli_fetch_assoc($result);

        // Check if user exists and redirect based on usertype
        if ($row) {
            if ($row['usertype'] == 'student') {
                $_SESSION['username']=$username;
                $_SESSION['usertype']="student";
           
                header("Location: Welcome.php");
                exit();
            } elseif ($row['usertype'] == 'admin') {
                $_SESSION['username']=$username;
                $_SESSION['usertype']="student";
                header("Location: admin.php");
                exit();
            }
        } else {
            echo "Invalid Username or Password";
            exit();
        }
    }

    // Function to retrieve user name by email
    function getName($username, $con) {
        // Sanitize input to prevent SQL injection
        $username = mysqli_real_escape_string($con, $username);

        $query = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($con, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            return $row['username'];
        }

        return null;
    }

    // Function to retrieve user type by email
    function getUserType($username, $con) {
        // Sanitize input to prevent SQL injection
        $username = mysqli_real_escape_string($con, $username);

        $query = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($con, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            return $row['usertype'];
        }

        return null;
    }


    function createUser($username, $phone, $email, $usertype, $password, $con) {
        $query = "INSERT INTO user (username, phone, email, usertype, password)
                  VALUES ('$username', '$phone', '$email', '$usertype', '$password')";
        
        // Execute query and redirect to login page on success
        if (mysqli_query($con, $query) == TRUE) {
            header("location: login.php");
        } else {
            // Display error message if query fails
            echo "Error: " . $query . "<br>" . $con->error;
        }
    }
}
?>
