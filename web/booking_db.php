<?php 
    session_start();
    include('server.php');

    if (isset($_POST['Submit'])) {
        $id=$_SESSION['username'];
        $travel_type=mysqli_real_escape_string($conn, $_POST['travel_type']);
        $from=mysqli_real_escape_string($conn, $_POST['from']);
        $to=mysqli_real_escape_string($conn, $_POST['to']);
        $ondate=mysqli_real_escape_string($conn, $_POST['ondate']);
        $returndate=mysqli_real_escape_string($conn, $_POST['returndate']);
        $passenger=mysqli_real_escape_string($conn, $_POST['passenger']);
        echo $ondate,$returndate;
        if (!isset($_SESSION['error'])) {
        $query = "INSERT INTO booking (id,travel_type,t_from,t_to,ondate,returndate,passenger) VALUES ('$id','$travel_type','$from','$to','$ondate','$returndate','$passenger')";
        $result = mysqli_query($conn, $query);
          $_SESSION['username'] = $id;
            $_SESSION['t_from'] = $from;
            $_SESSION['t_to'] = $to;
            $_SESSION['ondate'] = $ondate;
            $_SESSION['returndate'] = $returndate;
          $_SESSION['success'] = "You are now booking";
          if($travel_type=="oneway") 
          {
            header("location: time_table.php");
            echo $travel_type;
          }
          else if($travel_type=="roundtrip")
          {
            header("location: r_time_table.php");
            echo $travel_type;
          }
          
        }
        else {
            header("location: booking.php");
        }
          
    }
?>