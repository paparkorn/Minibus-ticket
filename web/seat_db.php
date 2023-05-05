<?php 
    session_start();
    include('server.php');

    if (isset($_POST['Submit'])) {
        $count=0;
        $price=0;
       
        if(isset($_POST['A'])) {
    // Loop through the array of selected fruits
    foreach($_POST['A'] as $selected)
     {
            // echo $selected . "<br>";
            $qry="select available from bus where seat_no='$selected'";
            $check = mysqli_query($conn, $qry);
            $row = mysqli_fetch_assoc($check);
            $newresult = implode($row);
            
            if($newresult=='0')
            {
                echo "seat is booked";
            }
            else
            {
            $query = "update bus set available=0 where seat_no='$selected' ";  
            $result = mysqli_query($conn, $query);
            $count++;
            // $_SESSION['seat'][]=$selected;
            $price=20*$count;
            // echo $price;
            // $_SESSION['success'] = "You are now booking";
            // $_SESSION['price']=$price;
            header("location: payment.php");
            }
            
            
           }
     }

    }
?>