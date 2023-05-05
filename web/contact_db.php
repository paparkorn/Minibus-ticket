<?php 
    session_start();
    include('server.php');

    if (isset($_POST['Submit'])) {
        $name=mysqli_real_escape_string($conn, $_POST['name']);
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $subject=mysqli_real_escape_string($conn, $_POST['subject']);
        $message=mysqli_real_escape_string($conn, $_POST['message']);
        $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
        mysqli_query($conn,$sql);
        header("location: contact.php");
    }
?>