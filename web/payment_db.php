<?php
    session_start();
    include('server.php'); 

	if (isset($_POST['Payment'])) {
        $card_no = mysqli_real_escape_string($conn, $_POST['card_no']);
        $card_cvc = mysqli_real_escape_string($conn, $_POST['card_cvc']);
		$T_card=mysqli_real_escape_string($conn, $_POST['pay']);
		$month=mysqli_real_escape_string($conn, $_POST['month']);
		$years=mysqli_real_escape_string($conn, $_POST['years']);		
        
        $seat=$_SESSION['newseat'];
        $price=$_SESSION['newprice'];

        $query = "SELECT * FROM payment WHERE T_card='$T_card' AND card_no = '$card_no' AND card_cvc = '$card_cvc' AND month='$month' AND years='$years'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) 
        {           
            header("location: success.php");

        } 
        else 
        {
           foreach($seat as $selected) {
	            $_SESSION['seat'][]=$selected;
                    }
            $_SESSION['price']=$price;
            $_SESSION['error'] = "Payment failed!";
            header("location: payment.php");            
        }		
    }
?>