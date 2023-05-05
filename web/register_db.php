<?php
    session_start();
    include('server.php');
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if ($password_1 != $password_2) {            
            $_SESSION['error'] = "The two passwords do not match";
             header('location: signup.php');
        }

        $user_check_query = "SELECT * FROM user WHERE (username = '$username' OR email = '$email')  LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['user_name'] === $username) {            
                $_SESSION['error'] = "Username already exists";
                 header('location: signup.php');
            }
            if ($result['email'] === $email) {                
                $_SESSION['error'] = "Email already exists";
                 header('location: signup.php');
            }
        }

        if (!isset($_SESSION['error'])) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Account created successfully";
            header("location: login.php");
        } else {
            header('location: signup.php');
        }
    }


?>