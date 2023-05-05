<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['Payment'])) {
        $card_no = mysqli_real_escape_string($conn, $_POST['card_no']);
        $card_cvc = mysqli_real_escape_string($conn, $_POST['card_cvc']);
		$T_card=mysqli_real_escape_string($conn, $_POST['pay']);
		$month=mysqli_real_escape_string($conn, $_POST['month']);
		$years=mysqli_real_escape_string($conn, $_POST['years']);

        if (empty($card_no)) {
            array_push($errors, "card number is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($card_cvc)) {
            array_push($errors, "card cvc is required");
            $_SESSION['error'] = "card cvc is required";
        }

        $user_check_query = "SELECT * FROM payment WHERE card_no = '$card_no' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['card_no'] === $card_no) {
                array_push($errors, "This card already exists");
				$_SESSION['error'] = "This card already exists";
            }
        }

        if (count($errors) == 0) {
            

            $sql = "INSERT INTO payment (T_card, card_no, card_cvc,month,years) VALUES ('$T_card', '$card_no', '$card_cvc','$month','$years')";
            mysqli_query($conn, $sql);
            $_SESSION['success'] = "Card added successfully";
            header('location: regpayment.php');
        } else {
            header("location: regpayment.php");
        }
    }

?>
