<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors,"username is required");
            $_SESSION['error'] = "username and password is required!";
            header("location: login.php");
        }

        if (empty($password)) {
            array_push($errors,"password is required");
            $_SESSION['error'] = "username and password is required!";
            header("location: login.php");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'" ;
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
               
                $_SESSION['success'] = "You are now logged in";
                header("location: main.php");
            } 
            else {
                array_push($errors, "wrong username or password");
                $_SESSION['error'] = "wrong username or password try again!";
                header("location: login.php");
            }
        }
    }


?>